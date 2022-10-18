@extends('layouts.frontend')

@section('main_content')

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Executive Committee Members</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Executive Committee Members</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Executive Committee Members</h2>
          </div>
          <div class="mission">
              <div class="row">
                 
                  <div class="col-md-4 text-center p-0 m-0">
                      <div class="border border-dark p-1 m-4" style="min-height:300px">
                      <img src="{{ asset('uploads/member/member_images/') }}/{{ $member->image }}" style="width: 60%" class="img img-thumbail">
                      <p>  {{ $member->name }} <br><b> {{ $member->position }} </b> </p>
                      </div>
                  </div>
                 
                  
              </div>
            
                 <table class="table table-hover table-bordered d-none">
                                <thead class="thead-dark">
                                <tr>
                                    <th style="width: 25%;">Member No</th>
                                    <th style="width: 25%;">Name</th>
                                    <th style="width: 25%;">Address</th>
                                    <th style="width: 25%;">Contact Info</th>
                                </tr>
                                </thead>
                                <tbody id="tbody">
                                
                                <tr>
                                    <td>{{ $member->membership_number }}</td>
                                    <td><b>{{ $member->name }}</b></td>
                                    <td>{{ $member->address }}</td>
                                    <td>
                                        <p>Mobile: <b> {{ $member->mobile }} </b></p>
                                        <p>Email: <b> {{ $member->email }} </b></p>
                                    </td>
                                </tr>
                                
                                </tbody>
                            </table>
                            
                            <div class="row float-right">
                            <ul class="pagination pagination-sm m-0">
                               
                            </ul>
                            </div>
                            
             
          </div>
          
  
      </div>
    </section>
    <!-- End Services Section -->

    @endsection()  

