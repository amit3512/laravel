@extends('layouts.app')
@section('content')

<div class="clearfix"></div>
<section>
  <nav>
    <ol class="cd-breadcrumb triangle custom-icons">
      
    </ol>
  </nav>
</section>
<section class="teampage_wrapper">
  <div class="container">
    <div class="row">
       @foreach($teams as $team)
      <div class="col-lg-4 col-md-6 col-sm-12">
        <!--member 1-->

        
         
          <div class="member">
            <img src="{{ asset('storage/'.$team->image) }}" alt="">
            <div class="info">
              <h5 class="name"> {{ $team->name }} </h5>
              <p class="job">{{ $team->designation }}</p>
            </div>
            <div class="overly top">
              <div class="middle">
                <h5 class="name">{{ $team->name }}</h5>
                <p class="job">Co-Founder, MBS</p>
              </div>
            </div>
          </div>
          
        
        


      </div>
      @endforeach
    </div>
  </div>
</section>

<div class="clearfix"></div>

@stop