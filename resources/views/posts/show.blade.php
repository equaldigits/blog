@extends('layouts.layout')

@section('content')

    <div class="col-md-8 blog-main">
        <h1>{{ $post->title }}</h1> 

        {{ $post->body }}
    
<hr>
        <div class="comments">
            <ul class="list-group">
            @foreach ($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}: 
                    </strong>

                    {{ $comment->body }}
                </li>
            @endforeach
        </div>


        <!---secção para comentários-->
<hr>
        <div class="card">
            <div class="class-block">

                <form method="POST" action="/posts/{{ $post->id }}/comments">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea name="body" placeholder="O seu comentário aqui" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                            <button type="Submit" class="btn btn-primary">Comentar</button>
                    </div>
                </form>

                @include('layouts.errors')
            </div>
        </div>

    </div>
@endsection

