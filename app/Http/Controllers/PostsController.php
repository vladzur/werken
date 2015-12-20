<?php

namespace App\Http\Controllers;

use App\Configuration;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configuration = Configuration::find(1);
        $posts = Post::where('draft', 0)->orderBy('published_at', 'desc')->simplePaginate(5);
        return view('posts/index', ['posts' => $posts, 'configuration' => $configuration]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $configuration = Configuration::find(1);
        $post = Post::where('slug', $slug)->first();
        return view('posts.show', ['post' => $post, 'configuration' => $configuration]);
    }

}
