@extends('front-end.fragement.layout')

@section('content1')

    <section class="menu section-top" once="menu" id="menu1-d" data-rv-view="122">



        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobirisethemes.com">
                         <img src="/assets/images/logo2.png" alt="Mobirise" media-simple="true" style="height: 3.8rem;">
                    </a>
                </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://mobirisethemes.com">
                       LOGO HERE
                    </a></span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                        <a class="nav-link link text-white display-4" href="#">
                            <b>
                            ទំព័រដើម</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="#">
                            <b> អំពីក្រុមហ៊ុន
                            </b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="#">
                            <b>គម្រោង
                            </b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="#">
                            <b>ប្រភេទផ្ទះ
                            </b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="#">
                            <b>ទំនាក់ទំនង
                            </b>
                        </a>
                    </li>
                </ul>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-black display-4" href="#">

                        Contact us Now!
                    </a></div>
            </div>
        </nav>
    </section>

    <section class="section-top mbr-fullscreen mbr-parallax-background" id="header2-0" data-rv-view="124">



        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(144, 108, 128);"></div>

        <div class="container align-center">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-10">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">ស្វែងរកផ្ទះក្នុងក្ដីស្រមៃរបស់អ្នក</h1>

                    <form>
                        <div class="row search_area">
                            <div class="form-group col-sm-4">
                                <select class="form-control" id="location" >
                                    <option>--ទីតាំង--</option>
                                    <option>ភ្នំពេញុ</option>
                                    <option>សៀមរាប</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <select class="form-control" id="project" >
                                    <option>--គម្រោង--</option>
                                    <option>ប៉ូឡារីស</option>
                                    <option>សួនកំសានបែបអ៊ឺរ៉ុប</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <select class="form-control" id="house_type">
                                    <option>--ប្រភេទផ្ទះ--</option>
                                    <option>ប៉ូឡារីស</option>
                                    <option>សួនកំសានបែបអ៊ឺរ៉ុប</option>
                                </select>
                            </div>
                        </div>
                    </form>
{{--                    <div class="mbr-section-btn"><a class="btn btn-md btn-black display-4" href="https://mobirisethemes.com">BUY TICKETS</a>--}}
                        <a class="btn btn-md btn-white-outline display-4" href="https://mobirisethemes.com">ស្វែងរក</a></div>
                </div>
            </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#next">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
    </section>

    <section class="features1 section-middle" id="features1-1" data-rv-view="127">




        <div class="container">
            <div class="media-container-row">

                <div class="card p-3 col-12 col-md-6 col-lg-6">
                    <div class="card-img pb-3">
                        <span class="mbr-iconfont mbrib-hearth" style="color: rgb(35, 35, 35);" media-simple="true"></span>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5">ចក្ខុវិស័យ</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Vivamus at erat at elit ornare faucibus. Sed sed ipsum quam. Maecenas ut accumsan mi, nec tempus nulla.&nbsp;</p>
                    </div>
                </div>

                <div class="card p-3 col-12 col-md-6 col-lg-6">
                    <div class="card-img pb-3">
                        <span class="mbr-iconfont mbrib-users" style="color: rgb(35, 35, 35);" media-simple="true"></span>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-5">
                            បេសកម្ម</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            In sed efficitur est. Curabitur tincidunt quis sapien molestie pulvinar. Nulla tincidunt lacinia ex ac eleifend. Nulla facilisi.
                        </p>
                    </div>
                </div>

{{--                <div class="card p-3 col-12 col-md-6 col-lg-4">--}}
{{--                    <div class="card-img pb-3">--}}
{{--                        <span class="mbr-iconfont mbrib-magic-stick" style="color: rgb(35, 35, 35);" media-simple="true"></span>--}}
{{--                    </div>--}}
{{--                    <div class="card-box">--}}
{{--                        <h4 class="card-title py-3 mbr-fonts-style display-5">--}}
{{--                            Make magic!</h4>--}}
{{--                        <p class="mbr-text mbr-fonts-style display-7">--}}
{{--                            Suspendisse consequat metus lectus, ut vestibulum sem interdum nec. Suspendisse in diam at tortor eleifend dapibus.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}



            </div>

        </div>

    </section>

    <section class="features11 section-middle2" id="features11-2" data-rv-view="130">





        <div class="container">
            <div class="col-md-12">
                <div class="media-container-row">
                    <div class="mbr-figure" style="width: 50%;">
                        <img src="assets/images/marjorie-bertrand-107601-2000x3000.jpg" alt="Mobirise" title="" media-simple="true">
                    </div>
                    <div class=" align-left">
                        <h2 class="mbr-title pt-2 mbr-fonts-style display-2">Enjoy <strong>special </strong>moments!</h2>
                        <div class="mbr-section-text">
                            <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                                Suspendisse consequat metus lectus, ut vestibulum sem interdum nec.</p>
                        </div>

                        <div class="block-content">
                            <div class="card p-3 pr-3">
                                <div class="media">
                                    <div class=" align-self-center card-img pb-3">
                                        <span class="mbr-iconfont mbri-hearth" style="color: rgb(35, 35, 35);" media-simple="true"></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="card-title mbr-fonts-style display-7">
                                            Visit our photo section!</h4>
                                    </div>
                                </div>

                                <div class="card-box">
                                    <p class="block-text mbr-fonts-style display-7">
                                        Curabitur id urna at sapien blandit porttitor vel vel nunc. Donec vel vulputate sapien, in auctor sapien. Proin convallis, ante in maximus auctor, urna arcu rutrum lacus, sit amet posuere nisl nibh a felis.
                                    </p>
                                </div>
                            </div>

                            <div class="card p-3 pr-3">
                                <div class="media">
                                    <div class="align-self-center card-img pb-3">
                                        <span class="mbr-iconfont mbri-sun" style="color: rgb(35, 35, 35);" media-simple="true"></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="card-title mbr-fonts-style display-7">
                                            Share your photos with<strong> #AmazingFair2018</strong></h4>
                                    </div>
                                </div>

                                <div class="card-box">
                                    <p class="block-text mbr-fonts-style display-7">
                                        Aenean mi mauris, hendrerit vel erat non, fermentum bibendum enim. Cras sed augue dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus faucibus dui, a pretium elit vehicula eu.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="header1 section-middle3 mbr-parallax-background" id="header1-3" data-rv-view="133">



        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(79, 65, 42);">
        </div>

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-10">
                    <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                        FULL WIDTH INTRO
                    </h1>
                    <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">
                        Beautiful mobile websites
                    </h3>
                    <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                        Full width intro with adjustable height, background image and a color overlay. Click any text to edit or style it.
                    </p>
                    <div class="mbr-section-btn align-center"><a class="btn btn-md btn-white display-4" href="https://mobirisethemes.com">
                            <span class="mbr-iconfont mbri-file"></span>LEARN MORE</a>
                        <a class="btn btn-md btn-white-outline display-4" href="https://mobirisethemes.com">
                            <span class="mbr-iconfont mbri-idea"></span>LIVE DEMO</a></div>
                </div>
            </div>
        </div>

    </section>

    <section class="features14 section-middle4" id="features14-4" data-rv-view="136">




        <div class="container align-center">
            <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">Visit our <strong>fair market</strong></h2>
            <h3 class="mbr-section-subtitle pb-5 mbr-fonts-style display-5">Opening hours: &nbsp;<strong>8am – 5pm</strong></h3>
            <div class="media-container-column">
                <div class="row justify-content-center">
                    <div class="card p-4 col-12 col-md-6 col-lg-4">
                        <div class="media pb-3">
                            <div class="card-img align-self-center">
                                <span class="mbr-iconfont mbri-smile-face" media-simple="true"></span>
                            </div>
                            <div class="media-body">
                                <h4 class="card-title py-2 align-left mbr-fonts-style display-5">
                                    Natural Cookies</h4>
                            </div>
                        </div>
                        <div class="card-box align-left">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Aliquam consequat leo eu nisi sodales malesuada. Vestibulum et accumsan quam. Nullam id est eget nunc cursus luctus. Etiam malesuada imperdiet aliquam. Aenean posuere viverra ipsum.
                            </p>
                        </div>
                    </div>

                    <div class="card p-4 col-12 col-md-6 col-lg-4">
                        <div class="media pb-3">
                            <div class="card-img align-self-center">
                                <span class="mbr-iconfont mbri-magic-stick" media-simple="true"></span>
                            </div>
                            <div class="media-body">
                                <h4 class="card-title py-2 align-left mbr-fonts-style display-5">
                                    Handmade jewelry</h4>
                            </div>
                        </div>
                        <div class="card-box align-left">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed auctor laoreet sem, vulputate accumsan ante egestas eu. Curabitur vestibulum mauris nibh.</p>
                        </div>
                    </div>

                    <div class="card p-4 col-12 col-md-6 col-lg-4">
                        <div class="media pb-3">
                            <div class="card-img align-self-center">
                                <span class="mbri-upload mbr-iconfont" media-simple="true"></span>
                            </div>
                            <div class="media-body">
                                <h4 class="card-title py-2 align-left mbr-fonts-style display-5">
                                    Vinyl Market</h4>
                            </div>
                        </div>
                        <div class="card-box align-left">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Aliquam scelerisque hendrerit luctus. Praesent tempus dapibus eros. Maecenas ex ipsum, ornare non luctus sit amet, feugiat eu lectus. Sed lacus odio, facilisis ac eros quis.</p>
                        </div>
                    </div>


                </div>
                <div class="media-container-row">
                    <div class="mbr-figure" style="width: 60%;">
                        <img src="assets/images/mbr-1620x1080.jpg" alt="Mobirise" title="" media-simple="true">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="header1 section-middle5 mbr-parallax-background" id="header1-5" data-rv-view="139">



        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(255, 255, 255);">
        </div>

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-10">
                    <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">BUY TICKETS NOW</h1>
                    <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">
                        And visit our nice fair</h3>
                    <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                        Donec dolor diam, porta eu sapien placerat, imperdiet mollis nunc. Sed hendrerit, risus quis commodo pretium, lacus libero ullamcorper lectus, ut pellentesque odio lorem ut nibh. Nunc et vehicula augue, at imperdiet nunc.
                    </p>
                    <div class="mbr-section-btn align-center"><a class="btn btn-md btn-black display-4" href="https://mobirisethemes.com">
                            BUY NOW</a>
                        <a class="btn btn-md btn-black-outline display-4" href="https://mobirisethemes.com">
                            LIVE DEMO</a></div>
                </div>
            </div>
        </div>

    </section>

    <section class="testimonials1 section-middle6" id="testimonials1-6" data-rv-view="142">




        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 align-center">
                    <h2 class="pb-3 mbr-fonts-style display-2">
                        SOME <strong>REVIEWS </strong>BY OUR VISITORS</h2>
                    <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5">Quisque bibendum mi eget malesuada venenatis.</h3>
                </div>
            </div>
        </div>

        <div class="container pt-3 mt-2">
            <div class="media-container-row">
                <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-block">
                            <div class="testimonial-photo">
                                <img src="assets/images/catarina-carvalho-344974-1000x1000.jpg" alt="" title="" media-simple="true">
                            </div>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                                John Smith
                            </div>

                        </div>
                    </div>
                </div>

                <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-block">
                            <div class="testimonial-photo">
                                <img src="assets/images/user-review-1000x1000.jpg" alt="" title="" media-simple="true">
                            </div>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                                John Smith
                            </div>

                        </div>
                    </div>
                </div>

                <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-block">
                            <div class="testimonial-photo">
                                <img src="assets/images/user-review2-1000x1000.jpg" alt="" title="" media-simple="true">
                            </div>
                            <p class="mbr-text mbr-fonts-style display-7">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                                John Smith
                            </div>

                        </div>
                    </div>
                </div>






            </div>
        </div>
    </section>

    <section class="clients section-middle7" id="clients-7" data-rv-view="145">



        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">
                        Our <strong>Sponsors</strong></h2>
                    <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5">
                        Click any image to change it. Click blue "Gear" icon in the top right corner to change background, amount slides and amount visible items at once.
                    </h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="carousel slide" data-ride="carousel" role="listbox">
                <div class="carousel-inner" data-visible="5">





                    <div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/1.png" class="img-responsive clients-img" media-simple="true">
                                </div>
                            </div>
                        </div>
                    </div><div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/2.png" class="img-responsive clients-img" media-simple="true">
                                </div>
                            </div>
                        </div>
                    </div><div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/3.png" class="img-responsive clients-img" media-simple="true">
                                </div>
                            </div>
                        </div>
                    </div><div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/4.png" class="img-responsive clients-img" media-simple="true">
                                </div>
                            </div>
                        </div>
                    </div><div class="carousel-item ">
                        <div class="media-container-row">
                            <div class="col-md-12">
                                <div class="wrap-img ">
                                    <img src="assets/images/5.png" class="img-responsive clients-img" media-simple="true">
                                </div>
                            </div>
                        </div>
                    </div></div>
                <div class="carousel-controls">
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev">
                        <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next">
                        <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section form1 section-middle8" id="form1-8" data-rv-view="159">




        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                        CONTACT FORM
                    </h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                        Easily add subscribe and contact forms without any server-side integration.
                    </h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <div data-form-alert="" hidden="">Thanks for filling out the form!</div>

                    <form class="mbr-form" action="https://mobirisethemes.com/" method="post" data-form-title="Mobirise Form"><input type="hidden" data-form-email="true" value="foAAZ1PvVylaHxYQczzYYt+tTWD/7ufXgiZe5MbkmHKj92erQPnAwFxUYXC9pjjnBlz8Lazp2evtZX01Dwvw5/srW/CSHbHFmaMJntLjwTji+vuFy3jyjhgn56aHo1ak">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-8">Name</label>
                                    <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-8">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-8">Email</label>
                                    <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-8">
                                </div>
                            </div>

                        </div>
                        <div class="form-group" data-for="message">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-8">Message</label>
                            <textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-8"></textarea>
                        </div>

                        <span class="input-group-btn">
                            <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="map1 section-middle9" id="map1-9" data-rv-view="162">



        <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJ8QDYzdYNok4RBRBrpMXJPxs" allowfullscreen=""></iframe></div>
    </section>

    <section class="section-footer" id="social-buttons3-b" data-rv-view="164">





        <div class="container">
            <div class="media-container-row">
                <div class="col-md-8 align-center">
                    <h2 class="pb-3 mbr-section-title mbr-fonts-style display-2">
                        SHARE THIS PAGE!
                    </h2>
                    <div>
                        <div class="mbr-social-likes">
                        <span class="btn btn-social socicon-bg-facebook facebook mx-2" title="Share link on Facebook">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                            <span class="btn btn-social twitter socicon-bg-twitter mx-2" title="Share link on Twitter">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                            <span class="btn btn-social plusone socicon-bg-googleplus mx-2" title="Share link on Google+">
                            <i class="socicon socicon-googleplus"></i>
                        </span>
                            <span class="btn btn-social vkontakte socicon-bg-vkontakte mx-2" title="Share link on VKontakte">
                            <i class="socicon socicon-vkontakte"></i>
                        </span>
                            <span class="btn btn-social odnoklassniki socicon-bg-odnoklassniki mx-2" title="Share link on Odnoklassniki">
                            <i class="socicon socicon-odnoklassniki"></i>
                        </span>
                            <span class="btn btn-social pinterest socicon-bg-pinterest mx-2" title="Share link on Pinterest">
                            <i class="socicon socicon-pinterest"></i>
                        </span>
                            <span class="btn btn-social mailru socicon-bg-mail mx-2" title="Share link on Mailru">
                            <i class="socicon socicon-mail"></i>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section once="" class="section-footer2" id="footer6-a" data-rv-view="167">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                        © Copyright 2017 Mobirise - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop
