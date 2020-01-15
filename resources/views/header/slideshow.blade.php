@extends('layouts.app')
@section('content')
  
<div class="banner__wrapper">
  
    <div class="owl-carousel">
      @foreach($slides as $slide)
      <div class="banner-item">
        <figure>
           
             <img src="{{ asset('storage/'.$slide->image) }}" title="maadhyam_banner" alt="maadhyam_banner" />
           
           </figure>
      </div>
      @endforeach
    </div>
  
</div>

@endsection

