@extends('layouts.app')

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/content/about.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>About</h2>
    <ol>
      <li><a data-ajax href="{{ route('index') }}">Home</a></li>
      <li>About</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="row position-relative">

      <div class="col-lg-7 about-img" style="background-image: url({{ asset('img/content/about.jpg') }})"></div>

      <div class="col-lg-7">
        <h2>Lugazi Rural Financial Development Trust</h2>
        <div class="our-story">
          <h4>Since 2014</h4>
          <h3>Our Journey</h3>
          <p>LRFDT evolved from a community-focused organization into an NGO. Our mission was to empower rural communities, fostering sustainability and productivity. We've achieved this through sustainable agriculture, environmental protection, financial literacy and capacity building.</p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span>LRFDT Livelihoods Project: A project aimed at improving livelihoods, directly benefiting the community.</span></li>
            <li><i class="bi bi-check-circle"></i> <span>GENINSA Projects: Collaborative projects focusing on agriculture, entrepreneurship, hydroponic farming, and pharmacological characterization</span></li>
            <li><i class="bi bi-check-circle"></i> <span>MUWRP Health Promotion: Sensitization and awareness initiatives on health-related issues.</span></li>
          </ul>
          <p>Collaboration with various stakeholders and partners further amplified our impact. LRFDT is committed to creating lasting change and uplifting rural communities in Uganda.</p>

          <div class="watch-video d-flex align-items-center position-relative">
            <i class="bi bi-play-circle"></i>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Vid</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- End About Section -->

<!-- ======= Stats Counter Section ======= -->
<section id="stats-counter" class="stats-counter section-bg">
  <div class="container">
  <h2>Our Partners</h2>
    <div class="row gy-4">
    
   <p>Collaborating for Change - Our Valued Partnerships Amplify Our Impact, Enriching Communities and Creating Lasting Positive Transformation.</p> 

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="bi bi-headset color-green flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="bi bi-people color-pink flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>
</section><!-- End Stats Counter Section -->

<!-- ======= Alt Services Section ======= -->
<section id="alt-services" class="alt-services">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-around gy-4">
    <div class="col-lg-6 img-bg" style="background-image: url({{ asset('img/content/IMG-20230316-WA0004.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div>

      <div class="col-lg-5 d-flex flex-column justify-content-center">
        <h3>Our Vision and Mission</h3>
        <p>At LRFDT, our mission and vision serve as the compass guiding our work, inspiring us to create lasting change and empower rural communities.</p>

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-easel flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Mission</a></h4>
            <p>To create an empowered, productive and self-sustianing rural community.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Vision</a></h4>
            <p>Rural communities are socially,economically,and sustainably empowered for improved livelihoods.</p>
          </div>
        </div><!-- End Icon Box -->

        <p><h3>The Heart of Our Work</h3>
        Our mission and vision are not mere words on paper but the heart of our work. These guiding principles shape our daily efforts and our long-term goals. By empowering rural communities, we aim to make a positive impact on the lives of those who need it most. </p>
        <p>As we strive toward our vision of self-sustaining communities, we invite you to join us on this journey. Together, we can work toward a brighter, more prosperous future where every individual has the opportunity to thrive. Thank you for being part of our mission to empower rural communities.</p>
      </div>
    </div>

  </div>
</section><!-- End Alt Services Section -->

<!-- ======= Alt Services Section 2 ======= -->
<section id="alt-services-2" class="alt-services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-around gy-4">
      <div class="col-lg-5 d-flex flex-column justify-content-center">
        <h3>Our Core Values</h3>
        <p>At LRFDT, our core values are the foundation of our organization, shaping our actions and commitments as we work to empower rural communities. These values are not just words; they are the principles we live by.</p>

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-easel flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Transparency</a></h4>
            <p>It is a fundemental aspect of our organizational best practices.We believe in sharing all pertinent information openly with all stakeholders to ensure that well-informed decisions can be made.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-patch-check flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link"> Accountability</a></h4>
            <p>Accountability within LRFDT ensures that individuals are assessed based on thier performance and behavior, thereby fostering a responsible and result-oriented work environment.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link"> Teamwork</a></h4>
            <p>Teamworkis at the core of our  approach,where we aim to support each other ,Collaborate effectively,show respect for diverse perspectives,and create anenjoyable and positive work environment.</p>
          </div>
        </div><!-- End Icon Box -->

        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-brightness-high flex-shrink-0"></i>
          <div>
            <h4><a href="" class="stretched-link">Participation</a></h4>
            <p>Participation is a vital component of our organization, an active  involvement from all members is crucial for the successful completion of tasks and activities. We encourage and value the engagement of all memebers to achieve our goals.</p>
          </div>
        </div><!-- End Icon Box -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('img/content/20240209_145605.jpg') }}" alt="" class="img-fluid">
                <img src="{{ asset('img/content/20230324_123808.jpg') }}" alt="" class="img-fluid">

              </div>
            </div>
            

  </div>
</section><!-- End Alt Services Section 2 -->

<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Our Team</h2>
      <p>Meet the dedicated individuals who drive the mission of Lugazi Rural Financial Development Trust (LRFDT). Our team brings together a diverse range of skills and experiences, united by a shared commitment to empower rural communities and foster self-sustainability.</p>
    </div>

    <div class="row gy-5">

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
        <div class="member-img">
          <img src="img/team/harriet.jpg" class="img-fluid" alt="">
          <div class="social">
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info text-center">
          <h4>MS. OLIVIA MAKUMBI</h4>
          <span>Chairperson</span>
          <p>Leading LRFDT to empower rural communities. Join us in making a difference and realizing our inspiring vision.</p>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
        <div class="member-img">
          <img src="img/team/grace.png" class="img-fluid" alt="">
          <div class="social">
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info text-center">
          <h4>MS. GRACE WANDYAKA</h4>
          <span>SECRETARY</span>
          <p>LRFDT's strong communication hub. We value collaboration and are excited to work together for a brighter future.</p>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
        <div class="member-img">
          <img src="img/team/mbogarobert.jpg" class="img-fluid" alt="">
          <div class="social">
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info text-center">
          <h4>MR. ROBERT MBOGGA</h4>
          <span>COORDINATOR</span>
          <p>LRFDT's mission-driven Coordinator. We're passionate about community impact. Join us in creating positive change together.</p>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
        <div class="member-img">
          <img src="img/team/mosesluyomby.png" class="img-fluid" alt="">
          <div class="social">
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info text-center">
          <h4>MR. MOSES LUYOMBYA</h4>
          <span>FIELD OPERATIONS OFFICERS</span>
          <p>Bringing LRFDT's projects to life in the community. Join us in making a tangible difference for rural empowerment.</p>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
        <div class="member-img">
          <img src="img/team/nsubugaarthur.jpg" class="img-fluid" alt="">
          <div class="social">
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info text-center">
          <h4>MR. ARTHUR NSUBUGA</h4>
          <span>FIELD OPERATIONS OFFICERS</span>
          <p>LRFDT's fieldwork makes real change. Join us in empowering rural communities and fostering self-sustainability.</p>
        </div>
      </div><!-- End Team Member -->

    </div>

  </div>
</section><!-- End Our Team Section -->

    
@endsection
   