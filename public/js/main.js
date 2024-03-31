document.addEventListener('DOMContentLoaded', () => {
  "use strict";
  // Function to store scroll position
  function storeScrollPosition() {
    localStorage.setItem('scrollPosition', window.scrollY);
  }

  // Function to restore scroll position
  function restoreScrollPosition() {
    const scrollPosition = localStorage.getItem('scrollPosition');
    if (scrollPosition) {
      window.scrollTo({
        top: parseInt(scrollPosition), // Convert scrollPosition to integer
        behavior: 'auto' // Avoid smooth scrolling when restoring position
      });
    }
  }

  // Store scroll position when the user scrolls
  window.addEventListener('scroll', storeScrollPosition);

  // Restore scroll position on page load
  restoreScrollPosition();

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

        handleFormSubmission();

        restoreScrollPosition();

        // aos_init();
  
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

    

  // Initialize Swiper
  initializeSwiper();

  /**
   * Function to handle AJAX form submission
   */
  function handleFormSubmission() {
    $('#emailForm').submit(function(event) {
      event.preventDefault();
      $('.loading-spinner').removeClass('d-none');
      var formData = $(this).serialize();
      $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: formData,
        success: function(response) {
          // Hide loading spinner on success
          $('.loading-spinner').addClass('d-none');
          // alert('Email sent successfully');
          Toastify({
            text: 'Message sent successfully',
            duration: 3000, // Duration in milliseconds
            gravity: 'bottom', // Position: 'top' or 'bottom'
            close: true // Show close button
          }).showToast();
          $('#emailForm')[0].reset();
        },
        error: function(xhr, status, error) {
          console.error(error);
          // Hide loading spinner on error
          $('.loading-spinner').addClass('d-none');
          // alert('Failed to send email');
          Toastify({
            text: 'Failed to send message',
            duration: 3000,
            gravity: 'bottom',
            close: true
          }).showToast();
        }
      });
    });
  }

  // Initialize AJAX form submission
  handleFormSubmission();


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
function scrollTop() {
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth' // Ensure smooth scrolling behavior
      });
    });
  }
}
scrollTop();

  
  
  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Porfolio isotope and filter
   */
  

  function onPortfolioFilterClick() {
    let portfolionIsotope = document.querySelector('.portfolio-isotope');
    if (portfolionIsotope) {
        let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') || '*';
        let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') || 'masonry';
        let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') || 'original-order';

        let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
            itemSelector: '.portfolio-item',
            layoutMode: portfolioLayout,
            filter: portfolioFilter,
            sortBy: portfolioSort
        });

        let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
        if (menuFilters.length > 0) {
            menuFilters.forEach(function (el) {
                el.addEventListener('click', function () {
                    document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
                    this.classList.add('filter-active');
                    portfolioIsotope.arrange({
                        filter: this.getAttribute('data-filter')
                    });
                    if (typeof aos_init === 'function') {
                        aos_init();
                    }
                });
            });
        }
    }
  }

  // Call the function after the DOM is loaded
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

