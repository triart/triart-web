<?php
namespace App\Modules\Category;

use App\Models\Category;
use App\Modules\CrudContract;
use Carbon\Carbon;
use Cocur\Slugify\Slugify;

class CategoryRepository implements CrudContract
{
    public function search($q = '', $num = 20)
    {
        $query = Category::where('name','LIKE', '%'.$q.'%');
        return !empty($num) ? $query->paginate($num) : $query->get();
    }

    public function getList($num = null)
    {
        $query = Category::orderBy('name', 'asc');
        return !empty($num) ? $query->paginate($num) : $query->get();
    }

    public function findById($id)
    {
        return Category::find($id);
    }

    public function create(array $data)
    {
        $category = new Category();
        $category->name = $data['name'];
        $category->slug_url = $this->slug($data['name']);

        if (!$category->save()) {
            return false;
        }

        return $category;
    }

    public function update($model, array $data)
    {
        $model->name = $data['name'];
        $model->slug_url = $this->slug($data['name']);

        if (!$model->save()) {
            return false;
        }

        return $model;
    }

    public function delete($model)
    {
        return $model->delete();
    }

    protected function slug($name)
    {
        $slugify = new Slugify();
        return $slugify->slugify($name);
    }

    public function findBySlugUrl($url)
    {
        return Category::where('slug_url', '=', $url)->first();
    }
}