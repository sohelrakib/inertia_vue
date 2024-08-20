<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Inertia\Inertia;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return Inertia::render('home', ['posts' => $posts]);
    }

    public function create()
    {
        // dump('create');
        // dd('create');
        return Inertia::render('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'detail' => 'required|string',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function edit($id)
    {        
        return Inertia::render('edit', ['post' => Post::find($id) ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'detail' => 'required|string',
        ]);
        
        $post = Post::find($id);
        $post->title = $request->title;
        $post->detail = $request->detail;
        $post->save();

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post, $id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index');
    }

}
