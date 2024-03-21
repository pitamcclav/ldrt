document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

  const appContainer = document.getElementById('main');
          const mobileNavShow = document.querySelector('.mobile-nav-show');
          const mobileNavHide = document.querySelector('.mobile-nav-hide');
          // let swiperInstance = null; // Initialize swiper instance variable
      
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
      
                // Initialize Swiper
                initializeSwiper();

                // onPortfolioFilterClick
                onPortfolioFilterClick();
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
      
          // Function to initialize Swiper
          function initializeSwiper() {
            new Swiper('.slides-2', {
              speed: 600,
              loop: true,
              autoplay: {
                delay: 5000,
                disableOnInteraction: false
              },
              slidesPerView: 'auto',
              pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
              breakpoints: {
                320: {
                  slidesPerView: 1,
                  spaceBetween: 20
                },
      
                1200: {
                  slidesPerView: 2,
                  spaceBetween: 20
                }
              }
            });

            new Swiper('.slides-1', {
              speed: 600,
              loop: true,
              autoplay: {
                delay: 5000,
                disableOnInteraction: false
              },
              slidesPerView: 'auto',
              pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              }
            });
          }
      
          // Initialize Swiper
          initializeSwiper();

  navDropdowns.forEach(el => {
    el.addEventListener('click', function(event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Porfolio isotope and filter
   */
  let portfolionIsotope = document.querySelector('.portfolio-isotope');

  function onPortfolioFilterClick() {
    if (portfolionIsotope) {

      let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
      let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
      let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';
  
      window.addEventListener('load', () => {
        let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
          itemSelector: '.portfolio-item',
          layoutMode: portfolioLayout,
          filter: portfolioFilter,
          sortBy: portfolioSort
        });
  
        let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
        menuFilters.forEach(function(el) {
          el.addEventListener('click', function() {
            document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
            this.classList.add('filter-active');
            portfolioIsotope.arrange({
              filter: this.getAttribute('data-filter')
            });
            if (typeof aos_init === 'function') {
              aos_init();
            }
          }, false);
        });
  
      });
  
    }
  
  }
  onPortfolioFilterClick();

  
  /**
   * Init swiper slider with 1 slide at once in desktop view
   */
  


  /**
   * Initiate pURE cOUNTER
   */
  new PureCounter();

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 800,
      easing: 'slide',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

});

