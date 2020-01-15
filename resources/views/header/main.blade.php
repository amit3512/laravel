<!-- <ul class="additional-menu">
  <li class="active"><a href="#">COMPANY PROFILE</a></li>
  <li><a href="#">WHO ARE WE</a>
    <ul>
      <li><a href="{{ url('/') }}">Introduction</a>
      </li>
      <li><a href="{{ url('corevalues') }}">Our Core Values</a></li>
      <li><a href="{{ url('team') }}">Management Team</a></li>
    </ul>
  </li>
  <li><a href="{{ url('whatwedo') }}">WHAT WE DO</a>
    <ul>
      <li><a href="{{ url('nmefr') }}">Nepal Market Entry for recruitment </a>
      </li>
      <li><a href="{{ url('bpm') }}">Business Process Management (BPM)</a></li>

    </ul></li>
    <li><a href="#">TESTIMONIALS</a></li>
    <li><a href="#">CONTACT US</a></li>
  </ul>
   -->

   <ul>
    @foreach($items as $menu_item)
        <li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
    @endforeach
</ul>