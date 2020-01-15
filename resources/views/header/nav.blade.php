<div>
    <div class="top__bar">
      <div class="container">
        <ul>
          <li>Education Business Partner</li>
          <li>Marketing</li>
          <li>Recruitment Consulting</li>
          <li>HR & Performance Management</li>
          <li>Event Management</li>
        </ul>
      </div>
    </div>
    <div class="top__bar--bck">
      <div class="container">
        <div class="top__bar--right">
          <ul>
            <li><i class="fa fa-phone"></i><a href="#">01-1234567</a></li>
            <li><i class="fa fa-envelope"></i><a href="#">consult@maadhyam.com.np</a></li>
            <li><i class="fa fa-map-marker"></i><a href="#">New Baneshwor,Kathmandu Nepal</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<div class="clearfix"></div>
  <div class="menu" id="fixed">
    <div class="container">
      <div class="menu__bar">
        <div class="main_logo">
          <a href="{{ url('newwebsite') }}">
          <figure>
            <img src="/img/main-logo.png" title="maadhyam_logo" alt="maadhyam_logo" />
          </figure>
           </a>
        </div>
         <div class="stellarnav">
                {!! menu('main') !!} 
         </div>
      </div>
    </div>
  </div>
</div>


  <div class="clearfix"></div>
  
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
  </div>
  <ul class='social'>
    <li>
      <a class="fa fa-facebook" href="#">
        <span>Facebook</span>
      </a>
    </li>
    <li>
      <a class="fa fa-envelope" href="#">
        <span>Email</span>
      </a>
    </li>
    <li>
      <a class="fa fa-phone" href="#">
        <span>Call Us</span>
      </a>
    </li>
  </ul>
  <div class="clearfix"></div>
  <section>
    <nav>
      <ol class="cd-breadcrumb triangle custom-icons">
        
        
    </nav>
  </section>
 