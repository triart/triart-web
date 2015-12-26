<?php
namespace App\Modules\Team;

use App\Models\Team;

class TeamRepository
{
    public function getList($num = null)
    {
        $query = Team::orderBy('name', 'asc');
        return !empty($num) ? $query->paginate($num) : $query->get();
    }

    public function findById($id)
    {
        return Team::find($id);
    }

    public function create(array $data)
    {
        $team = new Team();
        $team->name = $data['name'];
        $team->position = $data['position'];
        $team->image = $data['image'];
        $team->description = $data['description'];
        $team->first_strength = $data['first_strength'];
        $team->second_strength = $data['second_strength'];
        $team->third_strength = $data['third_strength'];
        $team->first_strength_bar = $data['first_strength_bar'];
        $team->second_strength_bar = $data['second_strength_bar'];
        $team->third_strength_bar = $data['third_strength_bar'];

        if (!$team->save()) {
            return false;
        }

        return $team;
    }

    public function update($model, array $data)
    {
        $model->name = !empty($data['name']) ? $data['name'] : $model->name;
        $model->position = !empty($data['position']) ? $data['position'] : $model->position;
        $model->image = !empty($data['image']) ? $data['image'] : $model->image;
        $model->description = !empty($data['description']) ? $data['description'] : $model->description;
        $model->first_strength = !empty($data['first_strength']) ? $data['first_strength'] : $model->first_strength;
        $model->second_strength = !empty($data['second_strength']) ? $data['second_strength'] : $model->second_strength;
        $model->third_strength = !empty($data['third_strength']) ? $data['third_strength'] : $model->third_strength;
        $model->first_strength_bar = !empty($data['first_strength_bar']) ? $data['first_strength_bar'] : $model->first_strength_bar;
        $model->second_strength_bar = !empty($data['second_strength_bar']) ? $data['second_strength_bar'] : $model->second_strength_bar;
        $model->third_strength_bar = !empty($data['third_strength_bar']) ? $data['third_strength_bar'] : $model->third_strength_bar;

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