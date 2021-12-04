
@extends('layouts.app')
@section('content')
    <br>
    <a href="/posts" class="btn btn-primary"> Go Back </a>
    <h1>{{$post->title}} </h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} </small> <br>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small
        <br>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary">Edit</a>

            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id],'method' => 'POST']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        </div>
        @endif
    @endif
@endsection