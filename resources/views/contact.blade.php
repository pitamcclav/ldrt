   @extends('layouts.app')

   @section('content')
       <!-- ======= Breadcrumbs ======= -->
       <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('img/content/20240210_102315.jpg') }}'); background-size: cover; background-position: center;">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
          <li><a data-ajax href="{{ route('index') }}">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Our Address</h3>
              <p>P.O.BOX 101 Lugazi (U)</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>lugazirfdt@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+256704372685 / +2567726978755</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3989.733091573543!2d32.86863617496465!3d0.3745026996218253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMMKwMjInMjguMiJOIDMywrA1MicxNi40IkU!5e0!3m2!1sen!2sug!4v1713624080846!5m2!1sen!2sug" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="{{ route('send_message') }}" method="POST" id="emailForm" enctype="multipart/form-data" role="form" class="formOne">
              @csrf
              <div class="loading-spinner d-none"></div>
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" id="sendEmailButton">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

 
@endsection
   
   