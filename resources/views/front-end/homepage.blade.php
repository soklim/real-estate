@extends('front-end.fragement.layout')

@section('content1')
    <!-- ======= Hero Section ======= -->
    <section class="d-flex flex-column justify-content-center align-items-center">
{{--        <div class="container text-center text-md-left" data-aos="fade-up">--}}
{{--            <h1>Welcome to Borey Peng Huoth</h1>--}}
{{--            <h2>We are build beautiful house for you</h2>--}}
{{--            <a href="#about" class="btn-get-started scrollto">Get Started</a>--}}
{{--        </div>--}}
        <div class="container-fluid" style="padding: 0px; margin: 0px;">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
{{--                <ol class="carousel-indicators">--}}
{{--                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
{{--                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
{{--                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
{{--                </ol>--}}
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid m-100" src="/images/slider/slider1.jpg" height="400px"  alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid m-100" src="/images/slider/slider2.jpg" height="400px"  alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid m-100" src="/images/slider/slider3.jpg" height="400px"  alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 col-lg-7" data-aos="fade-right">
                        <img src="/assets/img/homepage/welcome.jpg" class="img-fluid img-shadow" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
                        <h3 class="title" data-aos="fade-up"  >GET TO KNOW US</h3>
                        <p data-aos="fade-up">
                           We are leading developer of construction and housing developments in Cambodia. With over 10 years of experience in developing cities, the standard is with high quality in the potential market and in the heart of the Southeast Asian country
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="icon-box" data-aos="fade-up">
{{--                                    <i class="bx bxs-eye"></i>--}}
                                    <h4>Vision</h4>
                                    <p>We are leading developer of construction and housing developments in Cambodia.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
{{--                                    <i class="bx bx-bullseye"></i>--}}
                                    <h4>Mission</h4>
                                    <p>We are leading developer of construction and housing developments in Cambodia.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Steps Section ======= -->
        <section id="steps" class="steps section-bg">
            <div class="container">
                <div class="row no-gutters">
                    <h3 class="title"><u>MESSAGE FROM DIRECTOR</u></h3>
                </div>
                <div class="row" style="padding-top: 15px">
                    <div class="col-md-8" data-aos="fade-right">
                        <p id="msg-p1">Welcome to Borey Peng Huoth, a leading developer of construction and housing developments in Cambodia.
                            With over 10 years of experience in developing cities, the standard is with high quality in
                            the potential market and in the heart of the Southeast Asian country. We are proud to be your
                            partner choice. All of the projects we have developed are modernized with state-of-the-art technology
                            facilities. With our highly qualified team, long experience and innovation in design, this is the key to
                            making our project a success. The interior design of each building and residence is always combined with the
                            natural environment and the standard of living in the market. Modern and advanced in emerging markets.</p>

                        <p id="msg-p2">
                            Over the past 10 years, Cambodia's GDP growth has been strong and has been growing at an average of about 7% per year.
                            In response to this growth, Borey Peng Huoth plans to continue and expand the multifaceted development for the next decade
                            with modern, safe and diversified housing projects, including construction of hospitals, international schools, gyms, parks and parks.
                            Lots of leisure. We are also developing many new innovative projects including condominiums, commercial buildings and supermarkets
                            in the near future.
                        </p>
                        <p id="msg-p3">
                            As Cambodia is part of the ASEAN region's future with great trade potential, we welcome our business partners to join us in building
                            a better world for our customers as well as For the nation's future. With a long-standing reputation for providing clients with top quality
                            products, Borey Peng Huoth continues to expand the quality and standard of sustainable and sustainable project development. Join us in this
                            mission for greater prosperity.
                        </p>
                    </div>
                    <div class="col-md-4" data-aos="fade-left">
                        <img src="/assets/img/homepage/director.png" class="img-fluid" style="width: 50%;float: right">
                    </div>
                </div>

            </div>
        </section><!-- End Steps Section -->



        <!-- ======= Services Section ======= -->
        <section id="services" class="portfolio">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Project</h2>
{{--                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
                </div>
                <div class="row portfolio-container" data-aos="fade-up">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap img-shadow">
                            <a href="#">
                                <img src="/images/project/project-01.png" class="img-fluid " width="100%" alt="">
                                <div class="portfolio-info">
                                    <i class="fa fa-eye fa-3x" style="color: #ffffff"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap img-shadow">
                            <a href="#">
                                <img src="/images/project/project-02.png" class="img-fluid" width="100%" alt="">
                                <div class="portfolio-info">
                                    <i class="fa fa-eye fa-3x" style="color: #ffffff"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap img-shadow">
                            <a href="#">
                                <img src="/images/project/project-03.png" class="img-fluid" width="100%" alt="">
                                <div class="portfolio-info">
                                    <i class="fa fa-eye fa-3x" style="color: #ffffff"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap img-shadow">
                            <a href="#">
                                <img src="/images/project/project-01.png" class="img-fluid" width="100%" alt="">
                                <div class="portfolio-info">
                                    <i class="fa fa-eye fa-3x" style="color: #ffffff"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap img-shadow">
                            <a href="#">
                                <img src="/images/project/project-02.png" class="img-fluid" width="100%" alt="">
                                <div class="portfolio-info">
                                    <i class="fa fa-eye fa-3x" style="color: #ffffff"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap img-shadow">
                            <a href="#">
                                <img src="/images/project/project-03.png" class="img-fluid" width="100%" alt="">
                                <div class="portfolio-info">
                                    <i class="fa fa-eye fa-3x" style="color: #ffffff"></i>
                                </div>
                            </a>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Services Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                </div>

                <div class="row no-gutters justify-content-center" data-aos="fade-up">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email mt-4">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone mt-4">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@stop
