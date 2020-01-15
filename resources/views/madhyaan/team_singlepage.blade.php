@extends('layouts.app')
@section('content')

<nav>
  <ol class="cd-breadcrumb triangle custom-icons">
    
    {!! menu('team','header.main') !!} 
    
  </ol>
</nav>

  <section class="innerpage__wrapper">
		<div class="container">
			<div class="our_team_page">
				<div class="our_team_inner">
					<figure>
					  <img src="img/team_item.jpg" alt="" title="team">
					</figure>
				</div>
				<div class="our_team_inner1">
					<div class="our_team_name">
					<h2>Umesh Pandey </h2> <span class=" bottom_border_topic">Co-Founder, MBS</span>
					</div>
					<div class="our_team__detail_intro">
					<p>
            Umesh is one of Nepal’s versatile young entrepreneurs. For more than 19 years,
             he has consistently been working in the international education business sector. He is a dynamic, passionate and professional edupreneur who enjoys working in the international
            education and is always keen to explore new business opportunities by improving personal and professional strengths.
          </p>
        </div>
				</div>
			</div>
		</div>
	</section>

  <div class="clearfix"></div>

  @Stop