@extends('layouts.frontend')

@section('main_content')

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox" style="top:100px;">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(img/slide/Medical_Camp.jpg)"></div>

            <!--</div>-->

            <div class="carousel-item" style="background-image: url(img/slide/2ndClean_1.jpg)">

            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(img/slide/2ndClean_3.jpg)">

            </div>

            <!-- Slide 4 -->
            <div class="carousel-item" style="background-image: url(img/slide/D_clean.jpg)">

            </div>
            <!-- Slide 5 -->

            <div class="carousel-item" style="background-image: url(img/slide/IftarParty.jpg)">

            </div>
            <!-- Slide 6 -->
            <div class="carousel-item" style="background-image: url(img/slide/HomeMinister.jpg)">

            </div>

            <!-- Slide 7 -->
            <div class="carousel-item" style="background-image: url(img/slide/mayor_banner.jpeg)">

            </div>

            <!-- Slide 8 -->
            <div class="carousel-item" style="background-image: url(img/slide/MP.jpg)">

            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-zoom-in">

        <div class="row">
            <div class="col-md-4  d-flex align-items-stretch mb-5 mb-lg-0 d-none">
                <div class="icon-box" data-aos="fade-zoom-in" data-aos-delay="100">
                    <div class="row  ">
                        <div class="col-md-4 mr-0 pr-0"><img src="image/blog" alt="" class="img-fluid img-thumbnail">
                        </div>
                        <div class="col-md-8 text-justify">
                            <p><a class="title_color" href=''></a></p>
                            <p class="p-0 m-0 date_cat_sty"> <i class="fa fa-calendar"></i> </p>
                            <p class="p-0 m-0 date_cat_sty d-none">Category: <b></b></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4  d-flex align-items-stretch mb-5 mb-lg-0 ">
                <div class="icon-box" data-aos="fade-zoom-in" data-aos-delay="100">
                    <div class="icon d-none">
                        <img src="image/blog/news_and_event_logo.jpg" style="width:100%;" class="img-thumbnail">
                    </div>
                    <div class="icon d-none"><i class="fa fa-calendar"></i></div>
                    <h4 class="title"><a href=""><i class="fa fa-calendar home-icon-sty"></i> <span>News &
                                Events</span> </a> </h4>

                    <div class="row pb-1">
                        <div class="col-md-3 mr-0 pr-0"><img style="width: 100%;" src="image/blog" alt=""
                                class="img-fluid img-thumbnail"></div>
                        <div class="col-md-9 text-justify">
                            <a href="" style="color:#6a6969">
                                <p class="description" style="font-size: 13px;"> </p>
                            </a>

                            <p class="p-0 m-0 date_cat_sty d-none"> <i class="fa fa-calendar"></i> </p>
                        </div>
                    </div>

                    <p class="description float-right btn_home_notice"><a class="text-danger" href="">Read
                            More</a></p>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-zoom-in" data-aos-delay="200" style="width: 100%;">
                    <div class="icon d-none">
                        <img src="image/blog/notice.jpeg" style="width:100%;" class="img-thumbnail">
                    </div>
                    <h4 class="title"><a href=""> <i class="fa fa-bell home-icon-sty"></i>
                            <span>Notices</span></a></h4>

                    <ul>
                        <li><a href="" style="color:#6a6969">
                                <p class="description" style="font-size: 13px;"> </p>
                            </a></li>
                    </ul>

                    <p class="description float-right btn_home_notice"><a class="text-danger" href="">Read
                            More</a></p>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-zoom-in" data-aos-delay="200" style="width: 100%;">
                    <div class="icon d-none">
                        <img src="image/blog/notice.jpeg" style="width:100%;" class="img-thumbnail">
                    </div>
                    <h4 class="title"><a href=""> <i class="fa fa-id-card home-icon-sty"></i>
                            <span>Recents</span></a></h4>

                    <div class="row pb-1">
                        <div class="col-md-3 mr-0 pr-0"><img src="image/dorpon/" alt=""
                                class="img-fluid img-thumbnail recent_image"></div>
                        <div class="col-md-9 text-justify">
                            <a href="" style="color:#6a6969">
                                <p class="description" style="font-size: 13px;"> </p>
                            </a>

                            <p class="p-0 m-0 date_cat_sty d-none"> <i class="fa fa-calendar"></i> </p>
                        </div>
                    </div>

                    <p class="description float-right btn_home_notice"><a class="text-danger" href="">Read
                            More</a></p>
                </div>
            </div>


            <div class="col-md-4 align-items-stretch mb-5 mb-lg-0 d-none">
                <div class="icon-box" data-aos="fade-zoom-in" data-aos-delay="400">
                    <div class="icon d-none">
                        <img src="image/blog/form_download.jpeg" style="width:100%;" class="img-thumbnail">
                    </div>
                    <h4 class="title d-none"><a href=""><i class="fa fa-id-card home-icon-sty"></i>
                            <span>Newsletter (মার্চ, ক্রোড়পত্র)</span></a></h4>
                    <h4 class="title"><a href=""><i class="fa fa-id-card home-icon-sty"></i> <span> সেহরি ও
                                ইফতারের সময়সূচি </span></a></h4>
                    <p class="description d-none">Become a member in Dhanmondi Society <a class="text-danger" href="#"
                            data-toggle="modal" data-target="#exampleModal">Download Application
                            Form</a></p>
                    <p class="description pb-4"> Click to read more button for details <br> <a class="text-danger"
                            href="{{ url('ifter_sehri') }}">Read More</a></p>
                    <p class="description d-none">Become a member in Dhanmondi Society <a class="text-danger" href=""
                            download>Download Application Form</a></p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Featured Services Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

        <div class="text-center">
            <h3>Welcome to Dhanmondi</h3>
            <p>Dhanmondi (Bengali: ধানমন্ডি) is a residential neighborhood in Dhaka, Bangladesh, known for its
                central location, cultural vibrancy and being home to the country's founder ,
                Sheikh Mujibur Rahman.The origins of Dhanmondi can be traced back to the late 1950s, when the
                Government of East Pakistan developed it as a centrally planned and residential
                area to house the city's top bureaucrats. Over the decades evolved into a bustling miniature
                city in itself, with a vast array of hospitals, shopping malls,
                English Medium schools, universities, cafes, restaurants and art galleries. After the liberation
                war, its neighbourhoods primarily consisted of two-story houses.
                <span id="dots">...</span><span id="more"> The Dhanmondi Lake has been split into seven sectors
                    and leased out. Initially, DIT (rajuk from 1987) kept Dhanmondi plots exclusively
                    residential and did not allow use
                    of any plot or house for commercial purposes Socially and economically, Dhanmondi has now
                    become a multi-purpose area. After the liberation war, its neighbourhoods primarily
                    consisted of two-story houses.</span></p><button class="more_btn" onclick="myFunction()"
                id="myBtn">Read more</button>

            <!--<a class="cta-btn scrollto" href="#">See More</a>-->
        </div>

    </div>
</section><!-- End Cta Section -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>About Us</h2>
            <p>A society is a group of individuals involved in persistent social interaction, or a large social
                group sharing the same spatial or social territory,
                typically subject to the same political authority and dominant cultural expectations. Societies
                are characterized by patterns of relationships (social relations)
                between individuals who share a distinctive culture and institutions; a given society may be
                described as the sum total of such relationships among its
                constituent of members.</p></br>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="img/slide/b_1.jpeg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                <!--<h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>-->
                <p class="fst-italic">
                    <b>Name</b> </br> The name of the society is Dhanmondi Society.</br>
                    <b>Address</b> </br> The Registered Office of the Society is situated at House 11(Ground
                    floor), Road: 04, Dhanmondi, Dhaka-1205.
                    Contact: 01713-011414 / 01817-147010.</br>
                    <b>Legal Status</b> </br> The Society is registered under the Societies Registaration Act
                    XXI of 1860, Reg No.S-13791/2022.</br>
                    <b>Territorial Limits</b> </br> The territorial limit of this Society is cover Dhanmondi
                    area as marked by RAJUK and shall include man
                    made as well as natural lakes and water bodies around it.</br>
                    <b>Objectives</b> </br>To support the residents of Dhanmondi regardless of race, religion,
                    caste, the overall well-being and
                    mutual understanding of the local residents by cultivating good relations among the
                    residents, also by creating strong social bonds and overall cooperation. <a class="text-danger"
                        href="{{ url('about_us') }}">Read More</a>

                </p>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->

<section id="appointment" class="appointment section-bg">


    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="complain_form">
                    <h3>Send your Complain</h3> <br>

                    <form action="" method="post">

                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Full Name"
                                    required>
                            </div>
                            <div class="col form-group">
                                <input type="text" class="form-control" name="phone" id="email" placeholder="Mobile No"
                                    required>
                            </div>
                            <!--<div class="col form-group">-->
                            <!--  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>-->
                            <!--</div>-->
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Address"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="details" rows="5" placeholder="Write your complain"
                                required></textarea>
                        </div>

                        <div class="my-3 d-none">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button class="btn send_btn" type="submit">Send
                                Message</button></div>
                    </form>

                </div>

            </div>
            <div class="col-md-1"></div>

        </div>



    </div>
</section>

<!-- End Appointment Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials" style="display: none;">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Testimonials</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                            rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                            risus at semper.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                            cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                            legam anim culpa.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                            veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                            minim.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                            fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                            dolore labore illum veniam.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                            veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                            culpa fore nisi cillum quid.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
<!-- End Testimonials Section -->

<!-- ======= Doctors Section ======= -->

<!-- End Doctors Section -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
    <div class="container" data-aos="flip-down">

        <div class="section-title">
            <h2>Gallery</h2>
        </div>

        <div class="gallery-slider swiper">

            <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide"><a class="gallery-lightbox"
                        href="{{ asset('web/') }}/image/gallery/img_1.jpeg"><img
                            src="{{ asset('web/') }}/image/gallery/" class="img-fluid" alt=""></a></div>


            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Gallery Section -->

<section id="appointment" class="appointment section-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="complain_form">
                    <h3>Member Benefits</h3> <br>

                    <div class="row">

                        <div class="col-md-3 p-5">
                            <a class="title_color" href=''>
                                <img style="width: 100%;" src="" alt="" class="img-fluid img-thumbnail">
                            </a>
                        </div>

                    </div>

                    <section class="customer-logos slider d-none">

                        <div class="slide" style="width: 25%!important"><a href=""><img src=""></a></div>


                    </section>

                    <style>
                        .slick-slide {
                            margin: 0px 20px;
                        }

                        .slick-slide img {
                            width: 100%;
                        }

                        .slick-slider {
                            position: relative;
                            display: block;
                            box-sizing: border-box;
                            -webkit-user-select: none;
                            -moz-user-select: none;
                            -ms-user-select: none;
                            user-select: none;
                            -webkit-touch-callout: none;
                            -khtml-user-select: none;
                            -ms-touch-action: pan-y;
                            touch-action: pan-y;
                            -webkit-tap-highlight-color: transparent;
                        }

                        .slick-list {
                            position: relative;
                            display: block;
                            overflow: hidden;
                            margin: 0;
                            padding: 0;
                        }

                        .slick-list:focus {
                            outline: none;
                        }

                        .slick-list.dragging {
                            cursor: pointer;
                            cursor: hand;
                        }

                        .slick-slider .slick-track,
                        .slick-slider .slick-list {
                            -webkit-transform: translate3d(0, 0, 0);
                            -moz-transform: translate3d(0, 0, 0);
                            -ms-transform: translate3d(0, 0, 0);
                            -o-transform: translate3d(0, 0, 0);
                            transform: translate3d(0, 0, 0);
                        }

                        .slick-track {
                            position: relative;
                            top: 0;
                            left: 0;
                            display: block;
                        }

                        .slick-track:before,
                        .slick-track:after {
                            display: table;
                            content: '';
                        }

                        .slick-track:after {
                            clear: both;
                        }

                        .slick-loading .slick-track {
                            visibility: hidden;
                        }

                        .slick-slide {
                            display: none;
                            float: left;
                            height: 100%;
                            min-height: 1px;
                        }

                        [dir='rtl'] .slick-slide {
                            float: right;
                        }

                        .slick-slide img {
                            display: block;
                        }

                        .slick-slide.slick-loading img {
                            display: none;
                        }

                        .slick-slide.dragging img {
                            pointer-events: none;
                        }

                        .slick-initialized .slick-slide {
                            display: block;
                        }

                        .slick-loading .slick-slide {
                            visibility: hidden;
                        }

                        .slick-vertical .slick-slide {
                            display: block;
                            height: auto;
                            border: 1px solid transparent;
                        }

                        .slick-arrow.slick-hidden {
                            display: none;
                        }

                    </style>

                    <script>
                        $(document).ready(function () {
                            $('.customer-logos').slick({
                                slidesToShow: 6,
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 1500,
                                arrows: false,
                                dots: false,
                                pauseOnHover: false,
                                responsive: [{
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: 4
                                    }
                                }, {
                                    breakpoint: 520,
                                    settings: {
                                        slidesToShow: 3
                                    }
                                }]
                            });
                        });

                    </script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
                </div>

            </div>
            <div class="col-md-1"></div>

        </div>



    </div>
</section>

@endsection()
