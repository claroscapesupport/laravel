@extends('layouts.app')

@section('content')
	<h1>{{$post->title}}</h1>
     <div>
     	{{$post->body}}
     </div>
     <hr>
     <p><small>Written on {{$post->created_at}}</small></p>
     <a href="/posts" class="btn btn-secondary">Go Back</a>
@endsection