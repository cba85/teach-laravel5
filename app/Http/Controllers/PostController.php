<?php

namespace Learn\Http\Controllers;

use Illuminate\Http\Request;
use Learn\Post;

class PostController extends Controller
{
    /*
    public function get($postId, Post $post)
    {
        //dd('Works');
        $post = $post->find($postId);
        dd($post);
    }
    */

    public function get(Post $post)
    {
        //dd($post);
        return view('posts.post')->withPost($post);
    }
}
