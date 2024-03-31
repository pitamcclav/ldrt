<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
      <h2>@yield('title')</h2>
      <ol>
        <li><a href="{{ route('index') }}">Home</a></li>
        <li>@yield('title')</li>
      </ol>
  
    </div>
  </div><!-- End Breadcrumbs -->