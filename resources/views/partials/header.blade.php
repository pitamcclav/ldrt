<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('index') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="asset/img/logo.png" alt=""> -->
        <h1><span><img src="img/logo.png" alt="" srcset=""></span> LRFDT<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
            <li><a href="{{ route('index') }}" data-ajax class="@if(request()->routeIs('index')) active @endif">Home</a></li>
            <li><a href="{{ route('about') }}" data-ajax class="@if(request()->routeIs('about')) active @endif">About</a></li>
            <li><a href="{{ route('services') }}" data-ajax class="@if(request()->routeIs('services')) active @endif">Services</a></li>
            <li><a href="{{ route('projects') }}" data-ajax class="@if(request()->routeIs('projects')) active @endif">Projects</a></li>
            <li><a href="{{ route('contact') }}" data-ajax class="@if(request()->routeIs('contact')) active @endif">Contact</a></li>
          {{-- <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
          
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  