<?php

namespace Learn\Http\Controllers;

use Illuminate\Http\Request;
use Learn\Post;
use Learn\User;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Basic controller
        //return 'home';

        // Request object
        //dd(get_class($request));
        //dd($request);
        //return $request->get('name', 'no name given');
        return $request->name;

    }

    public function contact(Request $request)
    {
        return '<form method="post" action="/contact"><input type="text" name="email"><button type="submit">Submit</button></form>';
    }

    public function create(Request $request)
    {
        dd($request->email);
    }

    public function view($username) {
        //return view('home.index')->with('username', $username);
        //return view('home.index')->withUsername($username);
        return view('home.index')->with([
            'username' => $username,
            'firstname' => 'Clement',
        ]);
    }

    public function first()
    {
        //return redirect()->to('second');
        return redirect()->route('second');
    }

    public function second()
    {
        //return 'Second method';
        return redirect()->back();
    }

    public function json()
    {
        return response()->json([
            'posts' => [
                ['id' => 1, 'title' => 'abc'],
                ['id' => 2, 'title' => 'abc'],
                ['id' => 3, 'title' => 'abc'],
            ]
        ]);
    }

    public function model(Post $post)
    {
        //Post::create([]);
        $posts = $post->take(20)->get();
        //dd($posts);
        return view('posts/index')->with('posts', $posts);
    }

    public function modelCreate(Post $post)
    {
        // 1
        $post->create([
            'title' => 'Test',
            'body' => 'test body'
        ]);

        // 2
        $newPost = new Post;
        $newPost->title = 'A new title';
        // if ($body)
        $newPost->body = "A new body";
        $newPost->save();
    }

    public function modelUpdate(Request $request, Post $post)
    {
        //dd($request->id);

        $updatePost = $post->find($request->id);
        //$updatePost = $post->findOrFail($request->id);
        //$updatePost = $post->where('id', '=', $request->id)->first();

        $updatePost->update([
            'title' => 'Updated title'
        ]);

        //dd($updatePost);
    }

    public function modelDelete(Request $request, Post $post)
    {
        $updatePost = $post->find($request->id);
        $updatePost->delete();
    }

    public function modelGet(Request $request, Post $post) {
        $getPost = $post->find($request->id);
        return view('posts.post')->with('post', $getPost);
    }

    public function modelUser(User $user)
    {
        $user = $user->find(1);
        dd($user->getFullName());
    }

    public function modelActive(User $user)
    {
        //$users = $user->where('active', true)->get();
        $users = $user->isActive()->get();
        dd($users);
    }

    public function pagination(Request $request, Post $post)
    {
        /*
        $f = \Faker\Factory::create();
        foreach (range(1, 100) as $i) {
            $posts->create([
                'title' => $f->sentence(10),
                'body' => $f->sentence(100)
            ]);
        }
        */

        $posts = $post->orderBy('created_at', 'desc')->paginate(10);

        return view('posts.pagination')->withPosts($posts);
    }
}
