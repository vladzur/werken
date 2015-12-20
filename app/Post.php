<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function scopePublished($query)
    {
        return $query->where('draft', 0)->where('published_at', '<', Carbon::now());
    }
}
