<div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- header section -->
  <header class="header-section">
    <div class="container">
      <!-- logo -->
      <a href="{{ url('/') }}" class="site-logo"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
      <div class="nav-switch">
        <i class="fa fa-bars"></i>
      </div>
      <div class="header-info">
        <div class="hf-item">
          <i class="fa fa-phone"></i>
          <p><span>Contact us:</span>+071-438062 | info@nepathyacollege.com.np</p>
        </div>
        <div class="hf-item">
          <i class="fa fa-map-marker"></i>
          <p><span>Find us:</span>Janaki Nagar, Tilottama-2, Rupandehi, NP</p>
        </div>
      </div>
    </div>
  </header>
  <!-- header section end-->


  <!-- Header section  -->
  <nav class="nav-section">
    <div class="container">
      
        <div class="nav-right">

          @guest
            <a><i class="fa fa-sign-in"></i></a><a href="{{ route('login') }}">{{ __('LOGIN') }}</a> <a>|</a> <a href="{{ route('register') }}">{{ __('REGISTER') }}</a>
          @else
            <li class="dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->username }} <span class="caret"></span>
              </a>

              <div class="dropdown-content dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a href="/dashboard"> Dashboard
                </a>

                <a  href="/dashboard/{{ Auth::user()->identity }}/profile">My Profile
                </a>

                <a  href="/dashboard/{{ Auth::user()->identity }}/add_profile">Update Profile
                </a>

                <a  href="#"> Create Post
                </a>


                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                 </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          @endguest                
        </div>

      <ul class="main-menu">

        <li class="{{ Request::is('/') ? 'active' : '' }}" ><a  href="{{'/'}}">HOME</a></li>

        @foreach($menus as $menu)

            @if($menu->activesubmenus->count() == 0)
              
              <li class="{{ Request::is($menu->slug) ? 'active' : '' }}"><a href="/{{ $menu->slug }}">{{ $menu->title }}</a></li>
            
            @else  
              <div class="dropdown">
                <li class="dropbtn {{ Request::is($menu->slug) ? 'active' : '' }} "><a href="#">{{ $menu->title }}</a></li>
                
                <div class="dropdown-content">
                  
                  @foreach($menu->activesubmenus as $submenu)
                    <a href="/{{ $menu->slug }}/{{ $submenu->slug }}">{{ $submenu->title }}</a>
                  @endforeach

                </div>
                
              </div>   
            @endif 
          @endforeach   
      </ul>
    </div>
  </nav>
  <!-- Header section end -->










