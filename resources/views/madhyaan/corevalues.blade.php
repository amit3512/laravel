@extends('layouts.app')
@section('content')

<nav>
  <ol class="cd-breadcrumb triangle custom-icons">
    
    {!! menu('corevalues','header.main') !!} 
    
  </ol>
</nav>
  

  <section class="intro_innerpage__wrapper">
    <div class="container">
      <h3>
        We commit to these values to direct our decisions and our behaviors.
      </h3>
      <div class="row">
        <div class="col-lg-6 col-md-5" style="overflow:hidden;">
          <figure style="overflow:hidden;">
            <img src="img/corevalues1.png" style="overflow:hidden;width:100%;" />
          </figure>

        </div>
        <div class="col-md-7 col-lg-6 col-md-offset-6 col-lg-offset-6 col-sm-12 col-xs-12">
          <div class="service-list wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="single-service">
              <div class="service-icon-hexagon">
                <div class="hex">
                  <div class="service-icon">
                    <i class="fa fa-dropbox"></i>
                  </div>
                </div>
              </div>
              <div class="service-details">
                <h4>INTEGRITY</h4>
                <p>We employ the highest ethical standards, demonstrating honesty, transparency and fairness in every action we take. </p>
              </div>
            </div>
            <div class="single-service">
              <div class="service-icon-hexagon">
                <div class="hex">
                  <div class="service-icon"><i class="fa fa-ship"></i></div>
                  <!-- <figure>
          <img src="img/respect.png" alt="respect" title="respect"/>
        </figure> -->
                </div>
              </div>
              <div class="service-details">
                <h4>Respect</h4>
                <p>We treat our clients, team members and customers with the highest level of respect, equality and trust.</p>
              </div>
            </div>
            <div class="single-service">
              <div class="service-icon-hexagon">
                <div class="hex">
                  <div class="service-icon"><i class="fa fa-ship"></i></div>
                </div>
              </div>
              <div class="service-details">
                <h4>Teamwork</h4>
                <p>Our team is supportive, loyal and care for each other both professionally and personally. </p>
              </div>
            </div>
            <div class="single-service">
              <div class="service-icon-hexagon">
                <div class="hex">
                  <div class="service-icon"><i class="fa fa-plane"></i></div>
                </div>
              </div>
              <div class="service-details">
                <h4>Service Excellence</h4>
                <p>We are dedicated to satisfying our clients need and honoring commitments that we make.</p>
              </div>
            </div>
            <div class="single-service">
              <div class="service-icon-hexagon">
                <div class="hex">
                  <div class="service-icon"><i class="fa fa-ship"></i></div>
                </div>
              </div>
              <div class="service-details">
                <h4>Innovation</h4>
                <p>We are creative in delivering value to our clients. We anticipate change and capitalize on the many opportunities that may arise. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  @stop

  