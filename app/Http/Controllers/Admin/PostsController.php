<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role.contributor');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        foreach ($tags as $tag) {
            $tagged[] = $tag->name;
        }
        $tag_list = json_encode($tagged);
        return view('admin.posts.create', ['tag_list' => $tag_list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->fill($request->all());
        $post->user_id = Auth::user()->id;
        $post->slug = str_slug($post->title);
        $post->draft = !empty($request->draft);
        $post->save();
        $tags = explode(',', $request->tags);
        foreach ($tags as $tag) {
            $tag_ids[] = Tag::getId($tag);
        }
        $post->tags()->sync($tag_ids);
        return redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $tags = Tag::all();
        foreach ($tags as $tag) {
            $tagged[] = $tag->name;
        }
        $tag_list = json_encode($tagged);
        $current_tags = [];
        foreach ($post->tags as $tag) {
            $current_tags[] = $tag->name;
        }
        return view('admin.posts.edit',
            ['post' => $post, 'tag_list' => $tag_list, 'current_tags' => implode(',', $current_tags)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->slug = str_slug($post->title);
        $post->draft = $request->draft;
        $post->update($request->all());
        $tags = explode(',', $request->tags);
        foreach ($tags as $tag) {
            $tag_ids[] = Tag::getId($tag);
        }
        $post->tags()->sync($tag_ids);
        return redirect('admin/posts/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('admin/posts');
    }
}
