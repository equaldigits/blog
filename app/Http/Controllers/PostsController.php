<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post; //isto é importante
use App\Repositories\Posts;

use Carbon\Carbon;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest();
/*          ->filter(['month', 'year'])
            ->get();  */

          if ($month = request('month')){
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        } 
        
        if ($year = request('year')){
            $posts->whereYear('created_at', $year);
        }  

        $posts = $posts->get();


        $archives = Post::archives();

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
