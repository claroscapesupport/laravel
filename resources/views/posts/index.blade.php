@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
	        <div class="card mb-3">
	        	<div class="card-header">
	        		<h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
				</div>
	            <div class="card-body">
	            	<p class="card-text">{{$post->short_description}}</p>
	            	<p><small>Written on {{$post->created_at}}</small></p>
	            </div>
	        </div>
        @endforeach    
    @else
    	<p>No posts found</p>
    @endif  
@endsection