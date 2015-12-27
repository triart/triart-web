<?php
namespace App\Http\Controllers;

use App\Modules\Client\ClientRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ClientController extends Controller
{
    protected $client_repository;

    public function __construct(ClientRepository $client_repository)
    {
        $this->client_repository = $client_repository;
    }

    public function index()
    {
        $clients = $this->client_repository->getList(20);
        $data['clients'] = $clients;
        return view('dashboard.client.index', $data);
    }

    public function createForm()
    {
        return view('dashboard.client.form');
    }

    public function store(Request $request)
    {
        $data['name'] = $request->input('name');

        $destination_path = public_path().'/images/clients/';
        $file_name = $this->provideClientFilename($request);
        Image::make($request->file('image'))->save($destination_path.$file_name);
        $data['image'] = url().'/images/clients/'.$file_name;

        $client = $this->client_repository->store($data);

        if(!$client) {
            \Session::flash('alert-error', 'Error while adding client '.$data['name']);
            return redirect()->to('/dashboard/client');
        }

        \Session::flash('alert-success', 'Client '.$data['name']. ' has been created');

        return redirect()->to('/dashboard/client');
    }

    public function view($id)
    {
        $client = $this->client_repository->findById($id);
        $data['client'] = $client;
        return view('dashboard.client.form', $data);
    }

    public function update(Request $request, $id)
    {
        $client = $this->client_repository->findById($id);
        $data['name'] = $request->name;

        if ($request->hasFile('image')) {
            $this->deleteClientFile($client);
            $destination_path = public_path().'/images/clients/';
            $file_name = $this->provideClientFilename($request);
            Image::make($request->file('image'))->save($destination_path.$file_name);
            $data['image'] = url().'/images/clients/'.$file_name;
        }

        $client = $this->client_repository->update($client, $data);

        if(!$client) {
            \Session::flash('alert-error', 'Error while updating client '.$data['name']);
            return redirect()->to('/dashboard/client');
        }

        \Session::flash('alert-success', 'Client '.$data['name']. ' has been updated');

        return redirect()->to('/dashboard/client');

    }

    public function delete($id)
    {
        $client = $this->client_repository->findById($id);
        $this->deleteClientFile($client);

        if (!$this->client_repository->delete($client)) {
            \Session::flash('alert-error', 'Error while deleting client '.$client->name);
            return redirect()->back();
        }

        \Session::flash('alert-success', 'Client '.$client->name. ' has been deleted');

        return redirect()->back();
    }

    protected function provideClientFilename(Request $request)
    {
        $timestamp = Carbon::now()->timestamp;
        return 'client_'.$timestamp.'.'.$request->file('image')->getClientOriginalExtension();
    }

    protected function deleteClientFile($client)
    {
        if (!empty($client->image)) {
            $file_location = parse_url($client->image, PHP_URL_PATH);
            File::delete(public_path().$file_location);
        }
    }
}