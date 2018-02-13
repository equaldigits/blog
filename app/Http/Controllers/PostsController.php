<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //isto é importante


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {

        
        //$post = Post::find($id); //- método longform, mas pode-se passar o atributo nos parametros

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body'])));




        return redirect('/');
       
    }
}
