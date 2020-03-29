<!DOCTYPE html>
<html lang="en">
<head>

    @include('front-end.fragement.style')

</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex">

        <div class="logo mr-auto">
{{--            <h1 class="text-light"><a href="index.html">BPH</a></h1>--}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/"><img src="https://boreypenghuoth.com/wp-content/uploads/2019/05/borey-logo.png" alt="" class="img-fluid"></a>



        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#hero">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Project</a></li>
                <li class="drop-down"> <a href="">House Type</a>
                    <ul>
                        <li><a href="#">Shop House</a></li>
                        <li><a href="#">King A</a></li>
                        <li><a href="#">Villa Twin</a></li>
                        <li><a href="#">Queen B</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact Us</a></li>
                <li>
                    <a href="#"><img src="/images/language/en.png" class="img-fluid" style="max-height: 15px"></a>
                    <a href="#" style="display: none"><img src="/images/language/kh.png" class="img-fluid" style="max-height: 15px"></a>
                </li>


            </ul>
        </nav><!-- .nav-menu -->
{{--        <div class="multi-lan" style="margin-left: 15px">--}}
{{--            <a href="/"><img src="/images/language/en.png" class="img-fluid" style="max-height: 15px"></a>--}}
{{--            <a href="/"><img src="/images/language/kh.png" class="img-fluid" style="max-height: 15px"></a>--}}
{{--        </div>--}}

    </div>
</header><!-- End Header -->
@yield('content1')

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>BPH</h3>
                        <p class="address">
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>

                        </p>
                        <p class="phone"><strong>Phone :</strong> +1 5589 55488 55</p>
                        <p class="email"><strong>Email :</strong> info@example.com</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">House Type</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Project</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Polaris 2</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Meragarden</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Euro Park</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Rosvilla</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Submit your email to get our newsletter</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>BPH</span></strong>. All Rights Reserved
        </div>

    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

@include('front-end.fragement.footerjs')
</body>
</html>
