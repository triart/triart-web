<?php
namespace App\Http\Controllers;

use App\Modules\Team\TeamRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{
    protected $team_repository;

    public function __construct(TeamRepository $team_repository)
    {
        $this->team_repository = $team_repository;
    }

    public function index()
    {
        $data['teams'] = $this->team_repository->getList();
        return view('dashboard.team.index', $data);
    }

    public function createForm()
    {
        return view('dashboard.team.form');
    }

    public function store(Request $request)
    {
        $data = [];
        $data['name'] = $request->input('name');
        $data['position'] = $request->input('position');
        $data['description'] = trim($request->input('description'));
        $data['first_strength'] = $request->input('first_strength');
        $data['first_strength_bar'] = $request->input('first_strength_bar');
        $data['second_strength'] = $request->input('second_strength');
        $data['second_strength_bar'] = $request->input('second_strength_bar');
        $data['third_strength'] = $request->input('third_strength');
        $data['third_strength_bar'] = $request->input('third_strength_bar');

        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            Image::make($request->file('image'))->save(public_path().'/images/team/'.$filename);
            $data['image'] = url().'/images/team/'.$filename;
        }

        $team = $this->team_repository->create($data);

        if (!$team) {
            \Session::flash('alert-error', 'Error while creating team member '.$data['name']);
            return redirect()->to('/dashboard/team')->withInput();
        }

        \Session::flash('alert-success', 'Team member '.$data['name']. ' has been created');
        return redirect()->to('/dashboard/team');
    }

    public function view($id)
    {
        $team = $this->team_repository->findById($id);
        $data['team'] = $team;
        return view('dashboard.team.form', $data);
    }

    public function update(Request $request, $id)
    {
        $team = $this->team_repository->findById($id);


        $data['name'] = $request->input('name');
        $data['position'] = $request->input('position');
        $data['description'] = trim($request->input('description'));
        $data['first_strength'] = $request->input('first_strength');
        $data['first_strength_bar'] = $request->input('first_strength_bar');
        $data['second_strength'] = $request->input('second_strength');
        $data['second_strength_bar'] = $request->input('second_strength_bar');
        $data['third_strength'] = $request->input('third_strength');
        $data['third_strength_bar'] = $request->input('third_strength_bar');

        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            Image::make($request->file('image'))->save(public_path().'/images/team/'.$filename);
            $data['image'] = url().'/images/team/'.$filename;
        }

        $team = $this->team_repository->update($team, $data);

        if (!$team) {
            \Session::flash('alert-error', 'Error while updating team '.$data['name']);
            return redirect()->action('TeamController@index');
        }

        \Session::flash('alert-success', 'Team member '.$data['name']. ' has been updated');

        return redirect()->action('TeamController@index');
    }

    public function delete()
    {

    }
}