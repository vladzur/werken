<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = ['id'];

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }

    public static function getId($name)
    {
        $tag =Tag::where('name', trim($name))->first();
        return $tag->id;
    }
}
