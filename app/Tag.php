<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'news_id', 'title'
    ];

    public function news()
    {
        return $this->belongsTo('App\News');
    }
}
