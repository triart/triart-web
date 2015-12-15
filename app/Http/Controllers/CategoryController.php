<?php
namespace App\Http\Controllers;

use App\Modules\Category\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category_repository;

    public function __construct(CategoryRepository $category_repository)
    {
        $this->category_repository = $category_repository;
    }

    public function index()
    {
        if (!\Input::has('search')) {
            $data['categories'] = $this->category_repository->getList(20);
            $data['category_title'] = 'Art Category List';
        } else {
            $data['category_title'] = 'Search Result';
            $data['categories'] = $this->category_repository->search(\Input::get('search'), 20);
        }

        return view('dashboard.category.index', $data);
    }

    public function createForm()
    {
        return view('dashboard.category.form');
    }

    public function store(Request $request)
    {
        $data = [];
        $data['name'] = $request->input('name');

        $category = $this->category_repository->create($data);

        if (!$category) {
            \Session::flash('alert-error', 'Error while creating category '.$data['name']);
            return redirect()->to('/dashboard/category');
        }

        \Session::flash('alert-success', 'Category '.$data['name']. ' has been created');
        return redirect()->to('/dashboard/category');
    }

    public function view($id)
    {
        $data['category'] = $this->category_repository->findById($id);
        return \View::make('dashboard.category.form', $data);
    }

    public function update(Request $request, $id)
    {
        $data = [];
        $data['name'] = $request->input('name');

        $category = $this->category_repository->findById($id);
        $category = $this->category_repository->update($category, $data);

        if (!$category) {
            \Session::flash('alert-error', 'Error while creating category '.$data['name']);
            return redirect()->to('/dashboard/category');
        }

        \Session::flash('alert-success', 'Category '.$data['name']. ' has been updated');
        return redirect()->to('/dashboard/category');
    }

    public function delete($id)
    {
        $category = $this->category_repository->findById($id);

        if (!$this->category_repository->delete($category)) {
            \Session::flash('alert-error', 'Error while deleting category '.$category->name);
            return redirect()->to('/dashboard/category');
        }

        \Session::flash('alert-success', 'Category '.$category->name. ' has been deleted');

        return redirect()->to('/dashboard/category');
    }
}