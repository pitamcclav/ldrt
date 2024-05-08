@extends('layouts.app')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('img/content/20221104_171544.jpg') }});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Projects</h2>
        <ol>
          <li><a data-ajax href="{{ route('index') }}">Home</a></li>
          <li>Projects</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
           {{-- <li data-filter="*" class="filter-active">All</li> --}}
            <li data-filter=".filter-remodeling" class="filter-active">Agriculture </li>
            <li data-filter=".filter-construction">Environment</li>
            <li data-filter=".filter-repairs">Financial</li>
            <li data-filter=".filter-design">Education</li>
          </ul><!-- End Projects Filters -->
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                  <img src="{{ asset('img\content\Explaning the Medicinal Project Impact to the stakeholder.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h4>Agriculture</h4>
                      <a href="{{ asset('img\content\Explaning the Medicinal Project Impact to the stakeholder.jpg') }}" title="Agriculture" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"></a>
                      <p>Explaning the Medicinal Project Impact to the stakeholder</p>
                  </div>
              </div>
          </div>          
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\constructions-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4 >Agriculture </h4>
                    <a href="{{ asset('img\content\constructions-2.jpg') }}" title="Agriculture" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"></a>
                  <p>girl</p>
              </div>

              </div>
            </div>
              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\IMG-20201216-WA0039.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Agriculture</h4>
                  <p>NEW WORDS</p>
                  <a href="{{ asset('img\content\IMG-20201216-WA0039.jpg') }}" title="Agriculture" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"></a>
            </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\20240210_150109.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Agriculture</h4>
                  <p>NEW WORDS</p></i></a>
                  <a href="{{ asset('img\content\20240210_150109.jpg') }}" title="Agriculture" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\20240219_183243.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Environment</h4>
                  <p> NEW WORDS Environment</p>
                  <a href="{{ asset('img\content\20240219_183243.jpg') }}" title="Environment" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\construction-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Environment</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img\content\construction-3.jpg') }}" title="Environment" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\construction-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Environment</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img\content\construction-2.jpg') }}" title="Environment" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\20240210_105858.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Environment</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img\content\20240210_105858.jpg') }}" title="Environment" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\20240210_110950.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Environment</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img\content\20240210_110950.jpg') }}" title="Environment" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\20240210_132429.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Financial</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img\content\20240210_132429.jpg') }}" title="Financial" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="img\content\features-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Education</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img\content\features-1.jpg') }}" title="Education" data-gallery="portfolio-gallery-book" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\repairs-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Education</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img\content\img\content\repairs-1.jpg') }}" title="Education" data-gallery="portfolio-gallery-book" class="glightbox preview-link"></a>
                </div>  
              </div>
            </div><!-- End Projects Item -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\20240111_145554.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Environment</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img\content\20240111_145554.jpg') }}" title="Environment" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\20230324_153959.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Environment</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img\content\20230324_153959.jpg') }}" title="Environment" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\features-4.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Financial</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="img\content\features-4.jpg" title="Financial" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img/content/repairs-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Financial</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asset/img/projects/repairs-3.jpg" title="Financial" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"></a>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img\content\repairs-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Financial</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="img\content\repairs-1.jpg" title="Financial" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->


            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="img\content\design-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Education</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="img\content\design-2.jpg" title="Education" data-gallery="portfolio-gallery-book" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="img\content\20240210_105704.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Agriculture</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asset/img/projects/remodeling-3.jpg" title="Agriculture" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="img\content\IMG-20220917-WA0011.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Environment</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asset/img/projects/construction-3.jpg" title="Environment" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="img/content/repairs-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Financial</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="img/content/repairs-3.jpg" title="Financial" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="img/content/20230324_120440.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Financial</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="img/content/20230324_120440.jpg" title="Financial" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"></a>
                 
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="img/content/design-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4> EDUCATION</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="img/content/design-3.jpg" title="Education" data-gallery="portfolio-gallery-book" class="glightbox preview-link"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>SDGs</h2>
        <p>Our work aligns with several Sustainable Development Goals (SDGs) as set forth by the United Nations. These global goals guide our initiatives and reflect our dedication to creating a brighter future for rural communities.</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
            <i class="fas fa-hand-holding-usd"></i>
            </div>
            <h3>SDG 1: No Poverty</h3>
            <p>Our financial management programs, vocational training, and savings and credit schemes are designed to empower individuals with the tools to break the cycle of poverty and achieve economic independence.</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
            <i class="fas fa-utensils"></i>
            </div>
            <h3>SDG 2: Zero Hunger</h3>
            <p>Our sustainable agriculture initiatives and agro-processing programs enhance food security, promote better nutrition, and reduce hunger in the communities we support.</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
            <i class="fas fa-first-aid"></i>
            
            </div>
            <h3>SDG 3: Good Health and Well-Being</h3>
            <p>Our work in child protection, reproductive health, and traditional medicinal plant conservation contributes to improved health and well-being for community members, ensuring access to essential care.</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
            <i class="fas fa-graduation-cap"></i>
            </div>
            <h3>SDG 4: Quality Education</h3>
            <p>LRFDT's commitment to scholarships, vocational skills training, and school construction supports the goal of providing quality education and enhancing access to learning opportunities.</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
            <i class="fas fa-briefcase"></i>
            </div>
            <h3>SDG 8: Decent Work and Economic Growth</h3>
            <p>Our programs in financial management, vocational training, and income-generating activities create economic opportunities and foster decent work, promoting sustainable economic growth</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
            <i class="fas fa-tree"></i>
            </div>
            <h3>SDG 15: Life on Land</h3>
            <p>Our efforts in tree planting and the conservation of traditional medicinal plants support the preservation of terrestrial ecosystems and the protection of life on land.</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Services Section -->
@endsection



  