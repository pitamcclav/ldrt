@extends('layouts.app')

@section('content')

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('img/content/IMG-20230315-WA0013.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Services</h2>
      <ol>
        <li><a data-ajax>Home</a></li>
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
            <a class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-arrow-up-from-ground-water"></i>
            </div>
            <h3>Environmental Protection Activities</h3>
            <p>We are dedicated to protecting the environment through various initiatives, including tree planting, waste management, and conservation efforts. Our goal is to create a cleaner, healthier environment for the community while fostering sustainable practices.</p>
            <a class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-compass-drafting"></i>
            </div>
            <h3>Financial Management Programs</h3>
            <p>Empowering individuals with financial management skills is a vital component of our work. Through savings and credit schemes, we help community members gain control over their finances, improve their financial stability, and access resources for their needs.</p>
            <a class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>

          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-trowel-bricks"></i>
            </div>
            <h3>Child Protection and Reproductive Health</h3>
            <p>LRFDT is deeply committed to safeguarding the rights and well-being of children in the community. In addition to child protection initiatives, we provide essential reproductive health education, counseling, and support, ensuring that the most vulnerable members of our community receive the care and protection they deserve.</p>
            <a class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-helmet-safety"></i>
            </div>
            <h3>Collaboration and Partnerships</h3>
            <p>We understand that working together is essential for community development. LRFDT collaborates with community leadership structures, academic institutions, local organizations, and various stakeholders. By building strong partnerships, we maximize our impact and align our efforts toward the common goal of rural community self-sustainability.</p>
            <a class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-arrow-up-from-ground-water"></i>
            </div>
            <h3>Capacity Building of Community-Based Groups</h3>
            <p>Empowering community-based groups, including women's groups, youth groups, and people with disabilities, is a fundamental aspect of our work. Capacity building initiatives help these groups contribute effectively to community development and take charge of their own progress.</p>
            <a class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

      </div>

   


 

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
