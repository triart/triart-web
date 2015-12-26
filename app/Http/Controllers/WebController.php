<?php
namespace App\Http\Controllers;

use App\Modules\Art\ArtRepository;
use App\Modules\Artworker\ArtworkerRepository;
use App\Modules\Content\ContentRepository;
use App\Modules\Team\TeamRepository;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    protected $artworker_repository;
    protected $art_repository;
    protected $content_repository;
    protected $team_repository;

    public function __construct(ArtworkerRepository $artworker_repository, ArtRepository $art_repository, ContentRepository $content_repository, TeamRepository $team_repository)
    {
        $this->artworker_repository = $artworker_repository;
        $this->art_repository = $art_repository;
        $this->content_repository = $content_repository;
        $this->team_repository = $team_repository;
    }

    public function index()
    {
        $website_content = $this->content_repository->findById(1);
        $data['website_content'] = $website_content;
        $data['youtube_url'] = $website_content->youtube_link;
        $data['enable_video'] = boolval($website_content->enable_video);
        $data['carousels'] = $this->content_repository->getAllCarousel();
        return view('web.index', $data);
    }

    public function view($id)
    {
        $artworker = $this->artworker_repository->findById($id);

        if (empty($artworker)) {
            return view('web.404');
        }

        $data['artworker'] = $artworker;
        return view('web.artworker.index', $data);
    }

    public function viewByUsername($username)
    {
        $artworker = $this->artworker_repository->findByUsername($username);

        if (empty($artworker)) {
            return view('web.404');
        }

        $data['artworker'] = $artworker;
        return view('web.artworker.index', $data);
    }

    public function artDetail($id)
    {
        $art = $this->art_repository->findById($id);

        if (empty($art)) {
            return view('web.404');
        }

        $data['art'] = $art;
        $data['category_count'] = count($art->categories);
        $data['categories'] = $art->categories;
        return view('web.art.index', $data);
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function postContact(Request $request)
    {
        $client = new Client();
        $secret = '6Ld4pxMTAAAAAMuLfrCm4dUfScECNGX_X60NdMcS';
        $response = $request->input('g-recaptcha-response');
        $req = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => $secret,
                'response' => $response,
            ]
        ]);

        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['phone'] = $request->input('phone');
        $data['comments'] = $request->input('comments');

        $gresponse = json_decode($req->getBody(), false);

        if ($gresponse->success == true) {
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->from('visitor@triartspace.com');
                $message->to('hello@triartspace.com')->subject('Visitor Message');
            });
        }

        return redirect()->to('/');
    }

    public function team()
    {
        $teams = $this->team_repository->getList();
        $data['teams'] = $teams;
        return view('web.team', $data);
    }
}