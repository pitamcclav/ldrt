@extends('layouts.app')

@section('content')

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Services</h2>
      <ol>
        <li><a data-ajax href="{{ route('index') }}">Home</a></li>
        <li>Services</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="fa-solid fa-mountain-city"></i>
            </div>
            <h3>sustainable Agriculture initiatives</h3>
            <p>Our sustainable agriculture programs are designed to boost food security, increase income opportunities, and promote sustainable livelihoods. We provide training in modern farming techniques and agro-processing, enabling community members to improve their agricultural practices.</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-arrow-up-from-ground-water"></i>
            </div>
            <h3>Environmental Protection Activities</h3>
            <p>We are dedicated to protecting the environment through various initiatives, including tree planting, waste management, and conservation efforts. Our goal is to create a cleaner, healthier environment for the community while fostering sustainable practices.</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-compass-drafting"></i>
            </div>
            <h3>Financial Management Programs</h3>
            <p>Empowering individuals with financial management skills is a vital component of our work. Through savings and credit schemes, we help community members gain control over their finances, improve their financial stability, and access resources for their needs.</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-trowel-bricks"></i>
            </div>
            <h3>Child Protection and Reproductive Health</h3>
            <p>LRFDT is deeply committed to safeguarding the rights and well-being of children in the community. In addition to child protection initiatives, we provide essential reproductive health education, counseling, and support, ensuring that the most vulnerable members of our community receive the care and protection they deserve.</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-helmet-safety"></i>
            </div>
            <h3>Collaboration and Partnerships</h3>
            <p>We understand that working together is essential for community development. LRFDT collaborates with community leadership structures, academic institutions, local organizations, and various stakeholders. By building strong partnerships, we maximize our impact and align our efforts toward the common goal of rural community self-sustainability.</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-arrow-up-from-ground-water"></i>
            </div>
            <h3>Capacity Building of Community-Based Groups</h3>
            <p>Empowering community-based groups, including women's groups, youth groups, and people with disabilities, is a fundamental aspect of our work. Capacity building initiatives help these groups contribute effectively to community development and take charge of their own progress.</p>
            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Servie Cards Section ======= -->
  <section id="services-cards" class="services-cards">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <h3>Agriculture</h3>
          <p>Our sustainable agriculture programs enhance food security, increase income opportunities, and promote sustainable livelihoods. We provide training in modern farming techniques and agro-processing, transforming agricultural practices.</p>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2"></i> <span>Modern Farming Methods</span></li>
            <li><i class="bi bi-check2"></i> <span>Agro-processing and Value Addition</span></li>
            <li><i class="bi bi-check2"></i> <span>Market Research</span></li>
          </ul>
        </div><!-- End feature item-->

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <h3>Education</h3>
          <p>At LRFDT, we recognize the pivotal role of education in empowering rural communities. Our educational programs encompass a range of initiatives designed to promote learning, skill development, and improved access to education.</p>

          <ul class="list-unstyled">
            <li><i class="bi bi-check2"></i> <span>Scholarships</span></li>
            <li><i class="bi bi-check2"></i> <span>Vocational Skills Training</span></li>
            <li><i class="bi bi-check2"></i> <span>School Construction and Support</span></li>
          </ul>
        </div><!-- End feature item-->

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <h3>Environment</h3>
          <p>We are stewards of the environment, advocating tree planting, waste management, and conservation. These activities ensure cleaner surroundings, fostering a sustainable and healthier community.</p>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2"></i> <span>Tree Planting</span></li>
            <li><i class="bi bi-check2"></i> <span>Traditional Medicinal Plant Conservation</span></li>
            <li><i class="bi bi-check2"></i> <span>Multiplying Endangered Medicinal Plants
</span></li>
          </ul>
        </div><!-- End feature item-->

        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <h3>Financial</h3>
          <p>Financial stability is essential. We offer programs that empower individuals with financial management skills through savings and credit schemes, promoting financial independence and access to resources.</p>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2"></i> <span>Savings and Credit Schemes</span></li>
          </ul>
        </div><!-- End feature item-->

      </div>

    </div>
  </section><!-- End Servie Cards Section -->

  <!-- ======= Alt Services Section 2 ======= -->
  <section id="alt-services-2" class="alt-services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-around gy-4">
        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3>Agricultural Development</h3>
          <p>LRFDT empowers rural communities to improve their agricultural productivity and overall livelihoods.</p>

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-patch-check flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link"> Modern Farming Methods</a></h4>
              <p>LRFDT teaches morden farming methods,including practices like hyfroponic farming,VerticalFrming,Aquaponics.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Herb Planting</a></h4>
              <p>LRFDT encourages theplanting of herbs and other Medicinal plants and provides Herbal education to contribute to holistic a health and wellness.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Agro-processing and Value Addition</a></h4>
              <p>Supporting value addition to agricultural products.Market Research:Conducting reseach to identify Market opportunities.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Greenhouse and Shade Net Construction</a></h4>
              <p>LRFDT provides expertise in constructing greenhouse and shade nets, enhancing crop protection and extending the growing season. </p>
            </div>
          </div><!-- End Icon Box -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('img/content/20240210_105102.jpg') }}" alt="" class="img-fluid">
                <img src="{{ asset('img/content/20221118_104731.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
        <div class="col-lg-6 img-bg" style="background-image: url(assets/img/content/20240210_105102.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
      </div>
      
    </div>
  </section><!-- End Alt Services Section 2 -->

  <!-- ======= Alt Services Section ======= -->
  <section id="alt-services" class="alt-services">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-around gy-4">
      <div class="col-lg-6 img-bg" style="background-image: url({{ asset('img/content/IMG-20201216-WA0039.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div>

        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3>Environmental Conservation</h3>
          <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
            <i class="bi bi-easel flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Community Cleaning</a></h4>
              <p>LRFDT actively engages in community cleaning initiatives to reduce plastic waste and keep the local environment clean and pollution-free.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-patch-check flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Tree Planting</a></h4>
              <p>LRFDT actively promotes tree planting as a key strategy for carbon-fixation and environmental conservation.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Traditional Medicinal Plant Conservation</a></h4>
              <p>Multiplying young plants of endangered medicinal plants for basic medical care.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Briquette Making</a></h4>
              <p>Teaching people how to make briquettes as an alternative to charcoal, contributing to sustainable energy use and reducing environmental impact.</p>
            </div>
          </div><!-- End Icon Box -->

        </div>
      </div>

    </div>
  </section><!-- End Alt Services Section -->

    
@endsection
