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
                <img src="{{ asset('img\content\features-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Education</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img\content\img\content\features-1.jpg') }}" title="Education" data-gallery="portfolio-gallery-book" class="glightbox preview-link"></a>
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
                <img src="{{ asset('asset/img/projects/repairs-3.jpg') }}" class="img-fluid" alt="">
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
                <img src="asset/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Financial</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asset/img/projects/repairs-3.jpg" title="Financial" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="img\content\20230324_120440.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Financial</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="img\content\20230324_120440.jpg" title="Financial" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"></a>
                 
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="img\content\design-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4> EDUCATION</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="img\content\design-3.jpg" title="Education" data-gallery="portfolio-gallery-book" class="glightbox preview-link"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->
@endsection



  