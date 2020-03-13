@extends('frontend.fragement.layout')

    @section('content1')

        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="/images/slider/slider1.png"
                             alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        {{--<h3 class="h3-responsive">Light mask</h3>--}}
                        {{--<p>First text</p>--}}
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="/images/slider/slider2.png"
                             alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption">
                        {{--<h3 class="h3-responsive">Strong mask</h3>--}}
                        {{--<p>Secondary text</p>--}}
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="/images/slider/slider3.png"
                             alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        {{--<h3 class="h3-responsive">Slight mask</h3>--}}
                        {{--<p>Third text</p>--}}
                    </div>
                </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

        <div id="about" class="section wb nopadtop">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m40">
                        <div class="message-box">
                            <h2>ស្វាគមន៍មកកាន់ អុិចប្រេសសូលូសិន</h2>
                            <p>យើងមានបំណងផ្តល់ជូននូវការតភ្ជាប់គ្នារវាងមនុស្សនិងអាជីវកម្មនៅចុងបញ្ចប់រួមបញ្ចូលបច្ចេកវិទ្យានិងអភិវឌ្ឍដំណោះស្រាយប្រកបដោយប្រសិទ្ធភាពនៃគុណសម្បត្តិនិងគុណសម្បត្តិដែលល្អឥតខ្ចោះដើម្បីជួយអាជីវកម្មរបស់អ្នករីកចម្រើននិងពង្រីក</p>


                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="post-media wow fadeIn">
                            <img src="/home/images/about_01.jpg" alt="" class="img-fluid">
                        </div><!-- end media -->
                    </div><!-- end col -->

                </div><!-- end row -->

                <div class="row vission-and-mission">
                    <div class="col-md-12">
                        <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" href="#tab_a" data-toggle="tab">បេសកកម្ម</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_b" data-toggle="tab">ទស្សនៈវិស៏យ</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab_a">
                                <div class="box-inner-m">
                                    <p>ពួកយើងគឺជាក្រុមហ៊ុនបម្រើសេវាកម្មដឹងជញ្ជូនមួយនៅក្នុងព្រះរាជាណាចក្រកម្មុជា</p>
                                    <p>Vestibulum ac quam id lorem semper condimentum. Nulla vel ligula turpis. Nullam luctus, mi nec rhoncus gravida, tortor est semper purus, a feugiat sapien odio non urna. Fusce pellentesque neque ut nisi rhoncus imperdiet. Sed eu purus vel turpis consectetur convallis. Donec a dolor tellus. Phasellus dignissim erat nec ipsum condimentum sollicitudin. </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_b">
                                <div class="box-inner-m">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus tortor, aliquam quis augue eu, tempus semper tellus. Nullam eu auctor lacus. Cras dapibus a eros sed lobortis. Phasellus dictum mattis nibh, pretium maximus ex eleifend quis. Quisque ac nisi blandit, sagittis nulla eu, volutpat nibh. Duis non mauris velit. Nulla ornare scelerisque ex, et ultrices nunc dictum sed. Aenean in ultricies turpis, quis gravida elit. Aenean finibus, eros quis lobortis blandit, nibh massa luctus magna, sed laoreet nisi libero eu urna. In mi est, elementum eu tempor sollicitudin, lacinia eget sem. Vivamus aliquet volutpat ante. Ut faucibus nibh nec feugiat mollis. Maecenas quis felis accumsan, fermentum massa vitae, porttitor purus. Aliquam faucibus, risus id ultrices sollicitudin, justo sem sodales odio, eget suscipit risus nibh non purus. Duis dictum, ex a cursus mattis, justo neque interdum augue, sit amet hendrerit odio felis ut ante. Pellentesque vitae tristique libero, ac venenatis libero. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="hr1">

                <div class="section-title text-center">
                    <h3>ហេតុអ្វីត្រូវជ្រើសរើសពួកយើង?</h3>

                </div><!-- end title -->
                <div class="container-fluid">
                    <div class="container" style="margin-top: 80px;margin-bottom: 80px"  >
                        <div class="row">
                            <div class="col-md-4">
                                @foreach($menu1 as $menu1)
                                    <img src="{{$menu1->photo?$menu1->photo->file:'https://via.placeholder.com/100x100'}}" width="100px" class="img-fluid service">

                                    <h3 class="service-title"><b>{{$menu1->value_kh}}</b></h3>
                                @endforeach
                                @foreach($content1 as $content1)
                                    <p class="service-desc">{{$content1->value_kh}}</p>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                @foreach($menu2 as $menu2)
                                    <img src="{{$menu2->photo?$menu2->photo->file:'https://via.placeholder.com/100x100'}}" width="100px" class="img-fluid service">

                                    <h3 class="service-title"><b>{{$menu2->value_kh}}</b></h3>
                                @endforeach
                                @foreach($content2 as $content2)
                                    <p class="service-desc">{{$content2->value_kh}}</p>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                @foreach($menu3 as $menu3)
                                    <img src="{{$menu3->photo?$menu3->photo->file:'https://via.placeholder.com/100x100'}}" width="100px" class="img-fluid service">

                                    <h3 class="service-title"><b>{{$menu3->value_kh}}</b></h3>
                                @endforeach
                                @foreach($content3 as $content3)
                                    <p class="service-desc">{{$content3->value_kh}}</p>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                @foreach($menu4 as $menu4)
                                    <img src="{{$menu4->photo?$menu4->photo->file:'https://via.placeholder.com/100x100'}}" width="100px" class="img-fluid service">

                                    <h3 class="service-title"><b>{{$menu4->value_kh}}</b></h3>
                                @endforeach
                                @foreach($content4 as $content4)
                                    <p class="service-desc">{{$content4->value_kh}}</p>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                @foreach($menu5 as $menu5)
                                    <img src="{{$menu5->photo?$menu5->photo->file:'https://via.placeholder.com/100x100'}}" width="100px" class="img-fluid service">

                                    <h3 class="service-title"><b>{{$menu5->value_kh}}</b></h3>
                                @endforeach
                                @foreach($content5 as $content5)
                                    <p class="service-desc">{{$content5->value_kh}}</p>
                                @endforeach
                            </div>
                            <div class="col-md-4">
                                @foreach($menu6 as $menu6)
                                    <img src="{{$menu6->photo?$menu6->photo->file:'https://via.placeholder.com/100x100'}}" width="100px" class="img-fluid service">

                                    <h3 class="service-title"><b>{{$menu6->value_kh}}</b></h3>
                                @endforeach
                                @foreach($content6 as $content6)
                                    <p class="service-desc">{{$content6->value_kh}}</p>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>

            </div><!-- end container -->
        </div><!-- end section -->

        <div id="services" class="section lb">
            <div class="container-fluid">
                <div class="container">
                    <div class="section-title text-center">
                        <h3>សេវាកម្មរបស់យើង</h3>
                        <p class="lead">We offer unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p>
                    </div><!-- end title -->
                </div>
                <div class="row text-center">
                    <div class="owl-services-seo owl-carousel owl-theme">
                        <div class="text-center">
                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <img src="/home/images/seo_01.png" alt="" class="img-fluid img-rounded">
                                </div>
                                <h3>Search Engine Optimization</h3>
                                <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                            </div><!-- end service -->
                        </div><!-- end col -->

                        <div class="text-center">
                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <img src="/home/images/seo_02.png" alt="" class="img-fluid img-rounded">
                                </div>
                                <h3>Email Marketing</h3>
                                <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                            </div><!-- end service -->
                        </div><!-- end col -->

                        <div class="text-center">
                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <img src="/home/images/seo_03.png" alt="" class="img-fluid img-rounded">
                                </div>
                                <h3>Pay Per Click</h3>
                                <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis accumsan.</p>
                            </div><!-- end service -->
                        </div><!-- end col -->

                        <div class="text-center">
                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <img src="/home/images/seo_04.png" alt="" class="img-fluid img-rounded">
                                </div>
                                <h3>Website Development</h3>
                                <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                            </div><!-- end service -->
                        </div><!-- end col -->

                        <div class="text-center">
                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <img src="/home/images/seo_05.png" alt="" class="img-fluid img-rounded">
                                </div>
                                <h3>Reporting</h3>
                                <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                            </div><!-- end service -->
                        </div><!-- end col -->

                        <div class="text-center">
                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <img src="/home/images/seo_06.png" alt="" class="img-fluid img-rounded">
                                </div>
                                <h3>Social Media Marketing</h3>
                                <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis accumsan.</p>
                            </div><!-- end service -->
                        </div><!-- end col -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div class="parallax section lb">
            <div class="container">
                <div class="row text-center stat-wrap">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-briefcase"></i></span>
                        <p class="stat_count">1200</p>
                        <h3>Complated Projects</h3>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-happy"></i></span>
                        <p class="stat_count">3210</p>
                        <h3>Happy Clients</h3>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-idea"></i></span>
                        <p class="stat_count">3781</p>
                        <h3>Customer Services</h3>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-customer-service"></i></span>
                        <p class="stat_count">4300</p>
                        <h3>Answered Questions</h3>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="pricing" class="section pricing-bg">
            <div class="container">
                <div class="section-title text-center">
                    <h3>តារាងតម្លៃ</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et tincidunt risus, vitae sollicitudin tellus. Sed a nulla nisl. Aenean a lacus eget nibh dignissim molestie in quis magna. Sed vel euismod ligula. Mauris vitae suscipit velit, in vestibulum elit. In sed tellus nec metus consectetur iaculis et vitae tellus.</p>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="pricing pricing-palden">
                            <div class="pricing-item">
                                <div class="pricing-deco">
                                    <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
							  <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                                        <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                                        <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                                        <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
							</svg>
                                    <div class="pricing-price"><span class="pricing-currency">$</span>32
                                        <span class="pricing-period">/ mo</span>
                                    </div>
                                    <h3 class="pricing-title">Freelance</h3>
                                </div>
                                <ul class="pricing-feature-list">
                                    <li class="pricing-feature">1 GB of space</li>
                                    <li class="pricing-feature">Support at $25/hour</li>
                                    <li class="pricing-feature">Limited cloud access</li>
                                </ul>
                                <button class="bttn-new-a">Choose plan</button>
                            </div>
                            <div class="pricing-item pricing__item--featured">
                                <div class="pricing-deco">
                                    <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
							  <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                                        <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                                        <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                                        <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
							</svg>
                                    <div class="pricing-price"><span class="pricing-currency">$</span>45
                                        <span class="pricing-period">/ mo</span>
                                    </div>
                                    <h3 class="pricing-title">Business</h3>
                                </div>
                                <ul class="pricing-feature-list">
                                    <li class="pricing-feature">5 GB of space</li>
                                    <li class="pricing-feature">Support at $5/hour</li>
                                    <li class="pricing-feature">Full cloud access</li>
                                </ul>
                                <button class="bttn-new-a">Choose plan</button>
                            </div>
                            <div class="pricing-item">
                                <div class="pricing-deco">
                                    <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
							  <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                                        <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                                        <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                                        <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
							</svg>
                                    <div class="pricing-price"><span class="pricing-currency">$</span>80
                                        <span class="pricing-period">/ mo</span>
                                    </div>
                                    <h3 class="pricing-title">Enterprise</h3>
                                </div>
                                <ul class="pricing-feature-list">
                                    <li class="pricing-feature">10 GB of space</li>
                                    <li class="pricing-feature">Support at $5/hour</li>
                                    <li class="pricing-feature">Full cloud access</li>
                                </ul>
                                <button class="bttn-new-a">Choose plan</button>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="testimonials" class="section wb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Happy Clients</h3>
                    <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about Landigoo website template!</p>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="testi-carousel owl-carousel owl-theme">
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="/home/images/testi_01.png" alt="" class="img-fluid alignleft">
                                    <h4>James Fernando <small>- Manager of Racer</small></h4>
                                </div>
                                <!-- end testi-meta -->
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Wonderful Support! <i class="fa fa-quote-right"></i></h3>
                                    <p>They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                                </div>
                            </div>
                            <!-- end testimonial -->

                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="/home/images/testi_02.png" alt="" class="img-fluid alignleft">
                                    <h4>Jacques Philips <small>- Designer</small></h4>
                                </div>
                                <!-- end testi-meta -->
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Awesome Services! <i class="fa fa-quote-right"></i></h3>
                                    <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                                </div>
                            </div>
                            <!-- end testimonial -->

                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="/home/images/testi_03.png" alt="" class="img-fluid alignleft">
                                    <h4>Venanda Mercy <small>- Newyork City</small></h4>
                                </div>
                                <!-- end testi-meta -->
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Great & Talented Team! <i class="fa fa-quote-right"></i></h3>
                                    <p>The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                                </div>
                            </div>
                            <!-- end testimonial -->
                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="/home/images/testi_01.png" alt="" class="img-fluid alignleft">
                                    <h4>James Fernando <small>- Manager of Racer</small></h4>
                                </div>
                                <!-- end testi-meta -->
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Wonderful Support! <i class="fa fa-quote-right"></i></h3>
                                    <p>They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                                </div>
                            </div>
                            <!-- end testimonial -->

                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="/home/images/testi_02.png" alt="" class="img-fluid alignleft">
                                    <h4>Jacques Philips <small>- Designer</small></h4>
                                </div>
                                <!-- end testi-meta -->
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Awesome Services! <i class="fa fa-quote-right"></i></h3>
                                    <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                                </div>
                            </div>
                            <!-- end testimonial -->

                            <div class="testimonial clearfix">
                                <div class="testi-meta">
                                    <img src="/home/images/testi_03.png" alt="" class="img-fluid alignleft">
                                    <h4>Venanda Mercy <small>- Newyork City</small></h4>
                                </div>
                                <!-- end testi-meta -->
                                <div class="desc">
                                    <h3><i class="fa fa-quote-left"></i> Great & Talented Team! <i class="fa fa-quote-right"></i></h3>
                                    <p>The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                                </div>
                            </div><!-- end testimonial -->
                        </div><!-- end carousel -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <div id="support" class="section db">
            <div class="container">
                <div class="row">
                    <div id="logo-carousel" class="owl-carousel">
                        <div> <img src="/home/images/logo_01.png" alt=""> </div>
                        <div> <img src="/home/images/logo_02.png" alt=""> </div>
                        <div> <img src="/home/images/logo_03.png" alt=""> </div>
                        <div> <img src="/home/images/logo_04.png" alt=""> </div>
                        <div> <img src="/home/images/logo_05.png" alt=""> </div>
                        <div> <img src="/home/images/logo_06.png" alt=""> </div>
                        <div> <img src="/home/images/logo_01.png" alt=""> </div>
                        <div> <img src="/home/images/logo_02.png" alt=""> </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                @foreach($logo as $l)
                                    <a href="/"><img src="{{$l->photo?$l->photo->file:'https://via.placeholder.com/400x65'}} "  data-toggle="tooltip" data-placement="right" title="Express Solution"></a>
                                @endforeach
                            </div>
                            <p> SEO Mauris pharetra quam ut commodo malesuada. Sed a ornare purus, nec cursus tortor. Integer vehicula felis nec nunc pulvinar efficitur. In et semper odio. Sed laoreet ullamcorper augue, ut mattis metus mattis quis.</p>
                            <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        </div><!-- end clearfix -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-6 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h3>ព័ត៌មាន</h3>
                            </div>
                            <ul class="footer-links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">អំពីពួកយើង</a></li>
                                <li><a href="#">តារាងតម្លៃ</a></li>
                                <li><a href="#">អំពីពួកយើង</a></li>
                                <li><a href="#">ទំនាក់ទំនង</a></li>
                            </ul><!-- end links -->
                        </div><!-- end clearfix -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h3>ព្រឹត្តិប័ត្រព័ត៌មាន</h3>
                            </div>
                            <p>បញ្ចូលអ៊ីម៉ែលរបស់លោកអ្នកនៅខាងក្រោមនេះ ដើម្បីទទួលបានពត៌មានថ្មីៗពីពួកយើង</p>
                            <div class="news-box">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email address" type="email">
                                        <button type="submit">
                                            <svg id="Layer_11" data-name="Layer 11" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.19 17.71">
                                                <path class="cls-1" d="M311,387.93a.89.89,0,0,0-1.27,1.26l6.44,6.44H295a.89.89,0,0,0-.89.89.9.9,0,0,0,.89.9h21.24l-6.44,6.42a.91.91,0,0,0,0,1.27.89.89,0,0,0,1.27,0l8-8a.87.87,0,0,0,0-1.25Z" transform="translate(-294.08 -387.67)"></path> </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="widget-title">
                                <h3>បណ្ដាយសង្គម</h3>
                            </div>
                            <ul class="footer-links social-md">
                                <li><a class="fb btn-a" title="Facebook" data-tippy-animation="scale" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="gi btn-a" title="Github" data-tippy-animation="scale" href="#"><i class="fa fa-github"></i> </a></li>
                                <li><a class="tw btn-a" title="Twitter" data-tippy-animation="scale" href="#"><i class="fa fa-twitter"></i> </a></li>
                                <li><a class="dr btn-a" title="Dribbble" data-tippy-animation="scale" href="#"><i class="fa fa-dribbble"></i> </a></li>
                                <li><a class="pi btn-a" title="Pinterest" data-tippy-animation="scale" href="#"><i class="fa fa-pinterest"></i> </a></li>
                            </ul><!-- end links -->
                        </div><!-- end clearfix -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h3>ទំនាក់ទំនង</h3>
                            </div>

                            <ul class="footer-links">
                                <li><a href="mailto:#">info@yoursite.com</a></li>
                                <li><a href="#">www.yoursite.com</a></li>
                                <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                                <li>+61 3 8376 6284</li>
                            </ul><!-- end links -->
                        </div><!-- end clearfix -->
                    </div><!-- end col -->

                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->



        <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    @stop
