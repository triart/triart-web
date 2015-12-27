<?php
namespace App\Modules\Client;

use App\Models\Client;

class ClientRepository
{
    public function getList($num = null)
    {
        $query = Client::orderBy('name', 'asc');
        return !empty($num) ? $query->paginate($num) : $query->get();
    }

    public function findById($client_id)
    {
        return Client::find($client_id);
    }

    public function store($data)
    {
        $client = new Client();
        $client->name = $data['name'];
        $client->image = $data['image'];

        if (!$client->save()) {
            return false;
        }

        return $client;
    }

    public function update($model, $data)
    {
        $model->name = !empty($data['name']) ? $data['name'] : $model->name;
        $model->image = !empty($data['image']) ? $data['image'] : $model->image;

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