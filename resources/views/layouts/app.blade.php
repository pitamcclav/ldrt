<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LRFDT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

  </head>

  <body>

    <!-- ======= Header ======= -->
    @include('partials.header')
  

    <main id="main">
      @yield('content')
      @include('partials.footer')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    <script defer>
      document.addEventListener('DOMContentLoaded', function () {
          const appContainer = document.getElementById('main');
          const mobileNavShow = document.querySelector('.mobile-nav-show');
          const mobileNavHide = document.querySelector('.mobile-nav-hide');
  
          // Function to update active class
          function updateActiveClass(target) {
              const activeLink = document.querySelector('a[data-ajax].active');
              if (activeLink) {
                  activeLink.classList.remove('active');
              }
              target.classList.add('active');
          }
  
          // Function to handle navigation
          function navigate(url) {
              // Fetch the content using AJAX
              fetch(url)
                  .then(response => response.text())
                  .then(html => {
                      appContainer.innerHTML = html;
  
                      // Update the active class
                      const targetLink = document.querySelector(`a[data-ajax][href="${url}"]`);
                      if (targetLink) {
                          updateActiveClass(targetLink);
                      }
  
                      // Update the URL
                      history.pushState(null, null, url);
  
                      // Reinitialize toggle button functionality
                      initializeToggleButtons();
                  })
                  .catch(error => console.error('Error fetching content:', error));
          }
  
          // Handle navigation link clicks
          function handleClick(event) {
              const target = event.target.closest('a[data-ajax]');
  
              if (target) {
                  event.preventDefault();
                  const url = target.getAttribute('href');
                  navigate(url);
  
                  // Close mobile navigation if active
                  if (document.body.classList.contains('mobile-nav-active')) {
                      mobileNavToogle();
                  }
              }
          }
  
          // Intercept clicks on navigation links
          document.addEventListener('click', handleClick);
  
          // Function to toggle mobile navigation
          function mobileNavToogle() {
              document.body.classList.toggle('mobile-nav-active');
              mobileNavShow.classList.toggle('d-none');
              mobileNavHide.classList.toggle('d-none');
          }
  
          // Handle browser back/forward navigation
          window.addEventListener('popstate', function () {
              const url = location.pathname;
              navigate(url);
          });
  
          // Clean up event listeners when leaving the page
          window.addEventListener('unload', function () {
              document.removeEventListener('click', handleClick);
              window.removeEventListener('popstate', handlePopState);
          });
  
          // Initialize active class based on current URL
          const currentUrl = location.pathname;
          const initialLink = document.querySelector(`a[data-ajax][href="${currentUrl}"]`);
          if (initialLink) {
              updateActiveClass(initialLink);
          }
  
          // Function to initialize toggle button functionality
          function initializeToggleButtons() {
              // Handle mobile navigation toggle
              document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
                  el.addEventListener('click', function(event) {
                      event.preventDefault();
                      mobileNavToogle();
                  });
              });
          }
  
          // Initialize toggle button functionality
          initializeToggleButtons();
  
          /**
           * Hide mobile nav on same-page/hash links
           */
          document.querySelectorAll('#navbar a').forEach(navbarlink => {
              if (!navbarlink.hash) return;
              let section = document.querySelector(navbarlink.hash);
              if (!section) return;
              navbarlink.addEventListener('click', () => {
                  if (document.body.classList.contains('mobile-nav-active')) {
                      mobileNavToogle();
                  }
              });
          });
      });
  </script>
  
  
  
  
    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}" ></script>

    

  </body>

</html>