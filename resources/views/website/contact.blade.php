@extends('layouts.frontend')

@section('main_content')

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Contact</h2>
              <ol>
                <li><a href="/">Home</a></li>
                <li>Contact</li>
              </ol>
            </div>
    
          </div>
        </section><!-- End Breadcrumbs Section -->
    <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
             <div class="container">
    
            <div class="section-title">
              <h2>Contact</h2>
              <p></p>
            </div>
    
          </div>
          <div class="container" data-aos="fade-up">
    
            <div class="row mt-5">
    
              <div class="col-lg-6">
    
                <div class="row">
                  <div class="col-md-12">
                    <div class="info-box">
                      <i class="bx bx-map"></i>
                      <h3>Our Address</h3>
                      <p>House 11(Ground floor), Road: 04, <br>
                          Dhanmondi, Dhaka-1205</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box mt-4">
                      <i class="bx bx-envelope"></i>
                      <h3>Email Us</h3>
                      <p><a href="mailto:info@dhanmondisociety.org">info@dhanmondisociety.org</a><br><a href="mailto:contact@dhanmondisociety.org">contact@dhanmondisociety.org</a></p>
                     
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box mt-4">
                      <i class="bx bx-phone-call"></i>
                      <h3>Call Us</h3>
                      <p>01404004100 <br> 01404004101</p>
                    </div>
                  </div>
                </div>
    
              </div>
    
              <div class="col-lg-6">
                  @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                <form action="{{ url('contact') }}" method="post">
                    @csrf
                  <div class="row">
                    <div class="col form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="details" rows="5" placeholder="Details" required></textarea>
                  </div>
                  <div class="my-3 d-none">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button class="btn send_btn" type="submit">Send Message</button></div>
                </form>
              </div>
    
            </div>
    
          </div>
    </br></br>
          <div>
           <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1614593502504!2d90.38051591445569!3d23.741621095029718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b6524fe47d%3A0xf880654d50fba117!2sRoad%20No%204%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1635679468016!5m2!1sen!2sbd" ></iframe>
           
    <!--        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>-->
          </div>
        </section><!-- End Contact Section -->
     
        @endsection()     