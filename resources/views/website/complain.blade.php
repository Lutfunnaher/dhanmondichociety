@extends('layouts.frontend')

@section('main_content')

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Complain</h2>
              <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Complain</li>
              </ol>
            </div>
    
          </div>
        </section><!-- End Breadcrumbs Section -->
    <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
             <div class="container">
    
            <div class="section-title d-none">
              <h2>Complain</h2>
              <p></p>
            </div>
    
          </div>
          <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
               <div class="complain_form">
               <h3>Send your Complain</h3> <br>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                <form action="{{ url('complain') }}" method="post">
                    @csrf
                  <div class="row">
                    <div class="col form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
                    </div>
                    <div class="col form-group">
                      <input type="text" class="form-control" name="phone" id="email" placeholder="Mobile No" required>
                    </div>
                    <!--<div class="col form-group">-->
                    <!--  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>-->
                    <!--</div>-->
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Address" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="details" rows="5" placeholder="Write your complain" required></textarea>
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
            <div class="col-md-1"></div>
            
     </div>
    
            
       
          </div>
    
        </section><!-- End Contact Section -->
     
        @endsection()  