<?php

namespace App\Http\Controllers;

use AlfredoRamos\ParsedownExtra\Facades\ParsedownExtra;
use App\Configuration;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Suin\RSSWriter\Channel;
use Suin\RSSWriter\Feed;
use Suin\RSSWriter\Item;

class RssController extends Controller
{
    public function index()
    {
        $parsedown = new \ParsedownExtra();
        $config = Configuration::find(1);
        $posts = Post::published()->orderBy('published_at', 'desc')->get();
        $feed = new Feed();
        $channel = new Channel();
        $channel
            ->title($config->blog_title)
            ->description($config->blog_description)
            ->url(url('/'))
            ->appendTo($feed);
        foreach ($posts as $post) {
            $item = new Item();
            $item
                ->title($post->title)
                ->description($parsedown->parse($post->content))
                ->url(url("/articles/$post->slug"))
                ->appendTo($channel);
        }

        return $feed;
    }

}
