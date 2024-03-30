@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span> Lugazi Rural Financial Development Trust</span></h2>
            <p data-aos="fade-up">LRFDT is committed to uplifting Uganda's rural communities. Our mission is to empower, enable productivity, and promote self-sufficiency in these areas. We firmly believe that collaborative, sustainable practices will bring a positive transformation to those most in need.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-1.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-2.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-3.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-4.jpg') }})"></div>
      <div class="carousel-item" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-5.jpg') }})"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
  <!-- End Hero Section -->
    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>Volunteer With Us: Make a Difference in Rural Communities</h3>
              <p>At LRFDT, we believe in the power of community, and that includes individuals like you who want to make a meaningful impact. Volunteering with us is an opportunity to be part of a dedicated team committed to transforming rural communities in Uganda.</p>
              <p><b>Why Volunteer With LRFDT?</b>
                <ul>
<li> <b> Community Impact:</b> By volunteering with us, you'll play a vital role in empowering rural communities and contributing to their self-sustainability.</li>
<li><b>Skill Development:</b> We offer a range of projects that provide opportunities to develop and enhance your skills, from agriculture to community development.</li>
<li><b>Cultural Exchange:</b> Immerse yourself in the rich culture and traditions of the Lugazi region while collaborating with local community members.</li>
<li><b>Personal Fulfillment:</b> Volunteering is not just about giving; it's also about gaining a sense of purpose and personal fulfillment.</li>
</ul>
</p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="/submit" method="post" class="php-email-form">
              <h3>Volunteer with us</h3>
              <p>We welcome individuals who share our passion for community development and want to contribute their time, skills, and energy to our cause.</p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button type="submit">Send</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>LRFD</h2>
          <p>At Lugazi Rural Financial Development Trust(LRFDT), our work is centered around several key areas of focus, all aimed at creating empowered, productive, and self-sustaining rural communities. Our commitment to community development is reflected in the following areas</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('img/constructions-1.jpg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Sustainable Agriculture Initiatives.</h4>
                    <p>Empowering rural communities with modern farming techniques and agro-processing to enhance food security and sustainable livelihoods.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('img/constructions-2.jpg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Environmental Protection Activities</h4>
                    <p>Dedicated to creating a cleaner, healthier environment through tree planting, waste management, and conservation for a sustainable community.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('img/content/IMG-20230315-WA0013.jpg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Financial Management Programs</h4>
                    <p>Imparting financial skills through savings and credit schemes for improved financial stability and resource access.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('img/constructions-4.jpg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Education</h4>
                    <p>Providing scholarships, Offering vocational training programs such as shoemaking, belt, and wallet production.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
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

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url({{ asset('img/content/IMG-20230316-WA0004.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Why We Exist</h3>
            <p>At LRFDT, our cause is rooted in the belief that every community has the potential to thrive, given the right resources, support, and opportunities. Our mission is to empower rural communities in the Lugazi region for lasting, self-sustaining prosperity.</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">To Alleviate Poverty</a></h4>
                <p>Our financial management programs and vocational training empoer individuals to break free from the cycle of poverty and achieve financial independence</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">To Promote Health and Well-Being</a></h4>
                <p>The well-being of community members is out priority. Through child protection, reproductive health and traditional medicinal plant conservation, we work to ensure access to essential care and support</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">To Expand Educational Access</a></h4>
                <p>Quality education is a foundation for progress. LRFDT provides scholarships, vocational skills training, and support for school construction to enhance access to education and foster lifelong learning</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">To Protect The Environment</a></h4>
                <p>We recognize the importance of preserving the environment. Our environmental protection activities, icluding tree planting and traditional medicinal plant conservation, promote sustainability and healthier communities</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Community level</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Group level</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Household level</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Individual level</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Community Level</h3>
                <p class="fst-italic">
                Advice Giving: At the community level, LRFDT provides advice and support in various areas, including:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <b>Gender-Based Violence (GBV):</b> Offering guidance and assistance to address GBV issues.</li>
                  <li><i class="bi bi-check2-all"></i> <b>Violence Against Children (VAC):</b> Providing support to prevent and address</li>
                  <li><i class="bi bi-check2-all"></i> <b>Violence Against Women (VAW):</b> Assisting women facing violence and promoting their well-being.</li>
                  <li><i class="bi bi-check2-all"></i> <b>Positive Parenting (Sinovuyo):</b> Supporting parents in positive and effective parenting practices.</li>
                  <li><i class="bi bi-check2-all"></i> <b>Human Rights Abuse:</b> Addressing human rights abuses and providing assistance to victims.</li>
                  <li><i class="bi bi-check2-all"></i> <b>Health Campaigns, Sanitation, and Hygiene:</b> Promoting health campaigns and educating the community about sanitation and hygiene practices.</li>
                  <p> </p>
                  <p> <b>Member Mobilization:</b> LRFDT is actively involved in mobilizing community members to engage in collective activities, workshops, and campaigns aimed at addressing various community needs and concerns.</p>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('img/features-1.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Group Level</h3>
                
                <ul>
                  <li><i class="bi bi-check2-all"></i>Traditional Medicinal Plants Propagation and Use </li>
                  <li><i class="bi bi-check2-all"></i>Farming as a Business: Conservation Agriculture, Vegetable Growing, Market Research and Retention, Pests and Diseases Control, Plant Clinic Services, Value Addition </li>
                  <li><i class="bi bi-check2-all"></i>Social Corporate Responsibility (SCR) </li>
                  <li><i class="bi bi-check2-all"></i> Group Dynamics: Group Development Stages, Group Leadership, Leadership Roles, Monitoring and Evaluation, Stakeholders Influence and Interest Analysis, Record Keeping, Report Writing, Constitution Building and Bye-law Making</li>
                  <li><i class="bi bi-check2-all"></i> Legal Existence</li>
                  <li><i class="bi bi-check2-all"></i> Monitoring and Evaluation</li>
                  <li><i class="bi bi-check2-all"></i> Stakeholders Influence and Interest Analysis</li>
                  <li><i class="bi bi-check2-all"></i> Group Social Welfare</li>
                  <li><i class="bi bi-check2-all"></i> Group Financial Welfare Management (GFWM)</li>
                  <li><i class="bi bi-check2-all"></i>Group Account Opening and Management </li>
                  <li><i class="bi bi-check2-all"></i> Credit Control and Management</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('img/features-2.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Household Level</h3>
                <ul>
                  <li><i class="bi bi-check2-all"></i><b>Care for HIV+ Children and their Families:</b> LRFDT provides specialized care and support for households with HIV-positive children and their families. This includes counseling, health services, and resources to improve the quality of life.</li>
                  <li><i class="bi bi-check2-all"></i><b>Food and Nutrition:</b> LRFDT offers guidance on food and nutrition, helping households to make informed choices for healthier diets, especially for vulnerable individuals.</li>
                  <li><i class="bi bi-check2-all"></i><b>Home Management:</b> Services related to home management assist households in maintaining safe, organized, and efficient living spaces. This includes home safety, resource management, and budgeting</li>
                  <li><i class="bi bi-check2-all"></i><b>Family Life Education Program (FLEP):</b> LRFDT's Family Life Education Program offers education and resources for households on various aspects of family life, including communication, relationships, and personal development.</li>
                </ul>
                <p class="fst-italic">
                These household-level services aim to improve the well-being and stability of individual households, addressing unique challenges such as health, nutrition, home management, and family dynamics.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('img/features-3.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Individual Level</h3>
                <p class="fst-italic">
                These individual-level services are designed to provide targeted support and care for specific needs, ensuring the well-being and quality of life for individuals within the community.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <b>Counselling and Guidance:</b> LRFDT provides individual counseling and guidance services to support individuals dealing with various challenges, such as emotional issues, personal development, and decision-making. </li>
                  <li><i class="bi bi-check2-all"></i><b>Palliative Care:</b> For individuals facing serious illness or end-of-life care, LRFDT offers palliative care services focused on pain management, comfort, and emotional support. </li>
                  <li><i class="bi bi-check2-all"></i><b>Outpatient Care:</b> LRFDT assists individuals with outpatient care needs, ensuring access to necessary medical services, regular check-ups, and treatments. </li>
                  <li><i class="bi bi-check2-all"></i><b>Care for the Elderly:</b> LRFDT offers specialized care and support for the elderly, addressing their unique needs and ensuring their well-being as they age. </li>
                  
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('img/features-4.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->

        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Gallery</h2>
          <p>Explore our gallery to get a visual glimpse of the impactful work and moments that define LRFDT. We've captured images from our empowering initiatives, community events, and various projects.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Agriculture </li>
            <li data-filter=".filter-construction">Environment</li>
            <li data-filter=".filter-repairs">Financial</li>
            <li data-filter=".filter-design">Education</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img/projects/remodeling-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img/projects/remodeling-1.jpg') }}" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img/projects/construction-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img/projects/construction-1.jpg') }}" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img/projects/repairs-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img/projects/repairs-1.jpg') }}" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img/projects/design-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img/projects/design-1.jpg') }}" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img/projects/remodeling-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img/projects/remodeling-2.jpg') }}" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img/projects/construction-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('img/projects/construction-2.jpg') }}" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('img/projects/repairs-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asset/img/projects/repairs-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="asset/img/projects/design-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asset/img/projects/design-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="asset/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asset/img/projects/remodeling-3.jpg" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="asset/img/projects/construction-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asset/img/projects/construction-3.jpg" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="asset/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asset/img/projects/repairs-3.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="asset/img/projects/design-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="asset/img/projects/design-3.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Voices of Empowerment: Testimonials from Our Community</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="asset/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Mulondo Patrick</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    LRFDT'S commitment to rural developmentis unwavering. Their sustainable agriculture initiatives have transformed our community, bringing better livelihoods and food security.We are grateful for their dedication.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="asset/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Kasule Fred</h3>
                  <h4>Farmer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    LRFDT's financial management programs have been life changing for our community. We've gained financial stability and access to resources, thanks to their initiatives. Their support is invaluable.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="asset/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Ssentongo Hassan</h3>
                  <h4>Teacher</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    As a parent, I'm grateful for LRFDT's child protection and reproductive health programs. My family's well-being has improved,and I'm confident our children have a brighter future.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="asset/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Mawanda Kato Joseph</h3>
                  <h4>Carpenter</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    LRFDT's commitmentto collaboration and partnerships is remarkable. Together, we've created a network of support that multiplies our impact. LRFDT's leadership and collaboration inspire us all.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="asset/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>Fr. Joseph Male</h3>
                  <h4>Priest</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    I've witnessed the transformation of community-based groups through LRFDT's capacity-building programs. They've become powerful contributors to community development. LRFDT's work is truly life-changing.
                  
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
@endsection


  