@extends('layouts.app')

@section('content')

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('img/content/20240209_145605.jpg') }}'); background-size: cover; background-position: center;">
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
            
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-arrow-up-from-ground-water"></i>
            </div>
            <h3>Environmental Protection Activities</h3>
            <p>We are dedicated to protecting the environment through various initiatives, including tree planting, waste management, and conservation efforts. Our goal is to create a cleaner, healthier environment for the community while fostering sustainable practices.</p>
            
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-compass-drafting"></i>
            </div>
            <h3>Financial Management Programs</h3>
            <p>Empowering individuals with financial management skills is a vital component of our work. Through savings and credit schemes, we help community members gain control over their finances, improve their financial stability, and access resources for their needs.</p>
            
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-trowel-bricks"></i>
            </div>
            <h3>Child Protection and Reproductive Health</h3>
            <p>LRFDT is deeply committed to safeguarding the rights and well-being of children in the community. In addition to child protection initiatives, we provide essential reproductive health education, counseling, and support, ensuring that the most vulnerable members of our community receive the care and protection they deserve.</p>
            
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-helmet-safety"></i>
            </div>
            <h3>Collaboration and Partnerships</h3>
            <p>We understand that working together is essential for community development. LRFDT collaborates with community leadership structures, academic institutions, local organizations, and various stakeholders. By building strong partnerships, we maximize our impact and align our efforts toward the common goal of rural community self-sustainability.</p>
            
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-arrow-up-from-ground-water"></i>
            </div>
            <h3>Capacity Building of Community-Based Groups</h3>
            <p>Empowering community-based groups, including women's groups, youth groups, and people with disabilities, is a fundamental aspect of our work. Capacity building initiatives help these groups contribute effectively to community development and take charge of their own progress.</p>
            
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

 

  <!-- ======= Reports Section ======= -->
  <section id="reports" class="reports section-bg">
    <div class="container" data-aos="fade-up">
  
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Reports</h2>
          </div>
        </div>
      </div>
  
      <div class="row">
        @foreach ($reports as $report)
        <div class="col-lg-3 col-md-6">
          <div class="report-item card">
            <div class="card-body">
              <div class="report-info d-flex align-items-center ">
                <span class="icon-container">
                  @if ($report['type'] == 'pdf')
                  <i class="far fa-file-pdf pdf-icon"></i>
                  @elseif ($report['type'] == 'word')
                  <i class="far fa-file-word word-icon"></i>
                  @endif
                </span>
                <span class="report-name">{{ $report['name'] }}</span>
                <a href="{{ $report['path'] }}" download="{{ $report['name'] }}" class="btn btn-link icon-link">
                  <i class="bi bi-download icon"></i> <!-- Assuming you're using Bootstrap icons -->
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  
    </div>
  </section><!-- End Reports Section -->
  
  
@endsection
