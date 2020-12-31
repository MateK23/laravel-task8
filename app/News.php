<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'description', 'short_description', 'image', 'upload_date', 'user_id', 'category_id'
    ];

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }
    public function categories()
    {
        return $this->hasMany('App\Category');
    }
}
