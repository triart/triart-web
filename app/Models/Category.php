<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public function arts()
    {
        return $this->belongsToMany(\App\Models\Art::class, 'art_category');
    }

    public function artworkers()
    {
        return $this->belongsToMany(\App\Models\Artworker::class)->orderBy('name', 'ASC');
    }
}