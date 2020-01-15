@extends('layouts.app')
@section('title','-'.$post->title)
@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<a href="/post/{{ $post->slug }}" class="text-center"><h3> 
				</h3></a>
		             {!! $post->body !!}
		
		        
		  </div>
	</div>

<br>
<p>Posted by <a href="#">{{ $post->author->name}}</a> on {{ $post->created_at->format('F d,Y') }}</p>
	
</div>
@endsection

