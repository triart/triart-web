<?php
namespace App\Modules\Art;

use App\Models\Art;
use App\Modules\CrudContract;

class ArtRepository implements CrudContract
{
    public function getList($num = null)
    {
        $query = Art::orderBy('name', 'asc');
        return !empty($num) ? $query->paginate($num) : $query->get();
    }

    public function findById($id)
    {
        return Art::find($id);
    }

    public function create(array $data)
    {
        $art = new Art();
        $art->artworker_id = $data['artworker_id'];
        $art->currency = (!empty($data['currency'])) ? $data['currency'] : 'IDR';
        $art->price = (!empty($data['price'])) ? $data['price'] : 0 ;
        $art->title = $data['title'];
        $art->description = $data['description'];
        $art->size = (!empty($data['size'])) ? $data['size'] : '';
        $art->image_url = (!empty($data['image_url'])) ? $data['image_url'] : '';
        $art->thumbnail_url = (!empty($data['thumbnail_url'])) ? $data['thumbnail_url'] : '';
        $art->sold = (!empty($data['sold'])) ? $data['sold'] : false;

        if (!$art->save()) {
            return false;
        }

        return $art;
    }

    public function update($model, array $data)
    {
        $model->currency = (!empty($data['currency'])) ? $data['currency'] : $model->currency;
        $model->price = (!empty($data['price'])) ? $data['price'] : $model->price ;
        $model->title = (!empty($data['title'])) ? $data['title'] : $model->title;
        $model->description = (!empty($data['description'])) ? $data['description'] : $model->description;
        $model->size = (!empty($data['size'])) ? $data['size'] : $model->size;
        $model->image_url = (!empty($data['image_url'])) ? $data['image_url'] : $model->image_url;
        $model->thumbnail_url = (!empty($data['thumbnail_url'])) ? $data['thumbnail_url'] : $model->thumbnail_url;
        $model->sold = (!empty($data['sold'])) ? $data['sold'] : $model->sold;

        if (!$model->save()) {
            return false;
        }

        return $model;
    }

    public function delete($model)
    {
        return $model->delete();
    }

}