@extends('layouts.app')

@section('content')

<nav>
	<ol class="cd-breadcrumb triangle custom-icons">

		{!! menu('intro','header.main') !!} 

	</ol>
</nav>
  
  <section class="introd_innerpage__wrapper">

    <div class="container">
      
        @foreach($posts as $post)
           @include('madhyaan.post',['post' => $post])
        @endforeach

         {{ $posts->links() }} 
    </div>
</section>
  <div class="clearfix"></div>

@stop
  