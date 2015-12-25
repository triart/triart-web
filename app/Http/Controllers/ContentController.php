<?php
/**
 * Created by PhpStorm.
 * User: arielizuardi
 * Date: 12/20/15
 * Time: 10:56 PM
 */

namespace App\Http\Controllers;


use App\Modules\Content\ContentRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ContentController extends Controller
{
    protected $content_repository;

    public function __construct(ContentRepository $content_repository)
    {
        $this->content_repository = $content_repository;
    }

    public function carousel()
    {
        $website_content = $this->content_repository->findById(1);
        $carousels = $this->content_repository->getAllCarousel();
        $data['website_content'] = $website_content;
        $data['carousels'] = $carousels;
        return view('dashboard.content.carousel', $data);
    }

    public function viewCarousel($carousel_id)
    {
        $data['carousel'] = $this->content_repository->findCarouselById($carousel_id);
        $data['carousel_id'] = $carousel_id;
        return view('dashboard.content.carousel_form', $data);
    }

    public function updateCarousel(Request $request, $carousel_id)
    {
        $carousel = $this->content_repository->findCarouselById($carousel_id);

        $data['title'] =  $request->input('title');
        $data['subtitle'] = $request->input('subtitle');

        if ($request->hasFile('image')) {
            $carousel_image_path = '/images/carousel/';
            $thumbnail_image_path = $carousel_image_path.'/thumbnail/';
            $destination_path = public_path().$carousel_image_path;
            $thumbnail_dest_path = public_path().$thumbnail_image_path;
            $file_name = 'carousel-'.$carousel_id.'.'.$request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->save($destination_path.$file_name);

            $data['image'] = url().$carousel_image_path.$file_name;


            /**
             * Create thumbnail image, rotate, crop, resize then save it to size 346 px X 346 px
             */
            $thumbnail = Image::make($request->file('image'));
            $thumbnail->resize(null, 200, function ($constraint) {
                    $constraint->aspectRatio();
            });

            $thumbnail->save($thumbnail_dest_path.$file_name);

            $data['thumbnail'] = url().$thumbnail_image_path.$file_name;

        }

        $carousel = $this->content_repository->updateCarousel($carousel, $data);

        if (!$carousel) {
            \Session::flash('alert-error', 'Error while updating carousel');
            return redirect()->action('ContentController@carousel')->withInput();
        }

        \Session::flash('alert-success', 'Carousel has been updated');

        return redirect()->action('ContentController@carousel');
    }

    public function content()
    {
        $website_content = $this->content_repository->findById(1);
        $data['website_content'] = $website_content;
        return view('dashboard.content.content', $data);
    }

    public function saveContent(Request $request)
    {
        $data = [];
        $data['whatis'] = $request->input('whatis');
        $data['bornreason'] = $request->input('bornreason');
        $data['vision'] = $request->input('vision');
        $data['strength'] = $request->input('strength');

        $website_content = $this->content_repository->saveContent($data);

        if (!$website_content) {
            \Session::flash('alert-error', 'Error while updating website content');
            return redirect()->action('WebsiteController@content')->withInput();
        }

        \Session::flash('alert-success', 'Website Content has been updated');

        $return['website_content'] = $website_content;

        return view('dashboard.content.content', $return);
    }

    public function enableCarousel($carousel_id)
    {
        $carousel = $this->content_repository->findCarouselById($carousel_id);

        $data['enable'] = 0;

        if (!$carousel->enable) {
            $data['enable'] = 1;
        }

        $carousel = $this->content_repository->updateCarousel($carousel, $data);

        if (!$carousel) {
            \Session::flash('alert-error', 'Error while updating carousel');
            return redirect()->action('ContentController@carousel')->withInput();
        }

        \Session::flash('alert-success', 'Carousel has been updated');

        return redirect()->action('ContentController@carousel');
    }

    public function postCarouselVideo(Request $request)
    {
        $data = [];
        $data['enable_video'] = intval($request->input('enable_video'));
        $data['youtube_link'] = $request->input('youtube_link');
        $data['youtube_title'] = $request->input('youtube_title');
        $data['youtube_subtitle'] = $request->input('youtube_subtitle');

        $website_content = $this->content_repository->saveContent($data);

        if (!$website_content) {
            \Session::flash('alert-error', 'Error while updating website content');
            return redirect()->action('ContentController@content')->withInput();
        }

        \Session::flash('alert-success', 'Website Content has been updated');

        $return['website_content'] = $website_content;

        return redirect()->action('ContentController@carousel');
    }
}