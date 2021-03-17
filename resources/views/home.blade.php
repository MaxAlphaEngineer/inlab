<!DOCTYPE html>
<html lang="en">
<head>

    <title>Final Project</title>
    <!--

    DIGITAL TREND

    https://templatemo.com/tm-538-digital-trend

    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/aos.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset("css/templatemo-digital-trend.css")}}">

</head>
<body>

<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg" style="background: #464745;">
    <div class="container">
        <a class="navbar-brand" href="{{route("home")}}">
            <i class="fa fa-line-chart"></i>
            School
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#about" class="nav-link smoothScroll">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="#project" class="nav-link smoothScroll">Latest Courses</a>
                </li>
                <li class="nav-item">
                    <a href="blog.html" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- HERO -->
<section class="hero hero-bg d-flex justify-content-center align-items-center" style="    background: linear-gradient(
170deg
 , #555454 64%, var(--white-color) 30%);">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                <div class="hero-text">

                    <h1 class="text-white" data-aos="fade-up">We are ready for your digital marketing</h1>

                    <a href="contact.html" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100" style="background: white; color: black;" >Let us discuss together!</a>

                    <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> +998 99 349 97 24</strong>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                    <img src="{{asset("images/working-girl.png")}}" class="img-fluid" alt="working girl">
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section class="about section-padding pb-0" id="about">
    <div class="container">
        <div class="row">

            <div class="col-lg-7 mx-auto col-md-10 col-12">
                <div class="about-info">

                    <h2 class="mb-4" data-aos="fade-up">Lorem <strong>Lorem Ipsum</strong> Lorem ipsum</h2>

                    <p class="mb-0" data-aos="fade-up">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        <a href="blog.html">blog</a> pages, <a href="project-detail.html">project</a> page, and <a href="contact.html">contact</a> page.
                        <br><br>You are <strong>allowed</strong> Why do we use it?
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                </div>

                <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                    <img src="{{asset("images/office.png")}}" class="img-fluid" alt="office">
                </div>
            </div>

        </div>
    </div>
</section>


<!-- PROJECT -->
<section class="project section-padding" id="project" style="background: #2e2e2e">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12">

                <h2 class="mb-5 text-center" data-aos="fade-up" style="color: white">
                    Please take a look through our
                    <strong> the Latest courses</strong>
                </h2>

                <div class="owl-carousel owl-theme" id="project-slide">
                    <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset("images/project/project-image01.jpg")}}" class="img-fluid" alt="project image">

                        <div class="project-info">
                            <small>Type</small>

                            <h3>
                                <a href="{{asset("project-detail.html")}}">
                                    <span>Title</span>
                                    <i class="fa fa-angle-right project-icon"></i>
                                </a>
                            </h3>
                        </div>
                    </div>

                    <div class="item project-wrapper" data-aos="fade-up">
                        <img src="{{asset("images/project/project-image02.jpg")}}" class="img-fluid" alt="project image">

                        <div class="project-info">
                            <small>Type</small>

                            <h3>
                                <a href="project-detail.html">
                                    <span>Title</span>
                                    <i class="fa fa-angle-right project-icon"></i>
                                </a>
                            </h3>
                        </div>
                    </div>

                    <div class="item project-wrapper" data-aos="fade-up">
                        <img src="{{asset("images/project/project-image03.jpg")}}" class="img-fluid" alt="project image">

                        <div class="project-info">
                            <small>Type</small>

                            <h3>
                                <a href="project-detail.html">
                                    <span>Title</span>
                                    <i class="fa fa-angle-right project-icon"></i>
                                </a>
                            </h3>
                        </div>
                    </div>

{{--                    <div class="item project-wrapper" data-aos="fade-up">--}}
{{--                        <img src="{{asset("images/project/project-image04.jpg")}}" class="img-fluid" alt="project image">--}}

{{--                        <div class="project-info">--}}
{{--                            <small>Social Media</small>--}}

{{--                            <h3>--}}
{{--                                <a href="project-detail.html">--}}
{{--                                    <span>Race Bicycle</span>--}}
{{--                                    <i class="fa fa-angle-right project-icon"></i>--}}
{{--                                </a>--}}
{{--                            </h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="item project-wrapper" data-aos="fade-up">--}}
{{--                        <img src="{{asset("images/project/project-image05.jpg")}}" class="img-fluid" alt="project image">--}}

{{--                        <div class="project-info">--}}
{{--                            <small>Video</small>--}}

{{--                            <h3>--}}
{{--                                <a href="project-detail.html">--}}
{{--                                    <span>Ultimate HealthCare</span>--}}
{{--                                    <i class="fa fa-angle-right project-icon"></i>--}}
{{--                                </a>--}}
{{--                            </h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>

        </div>
    </div>
</section>


<!-- TESTIMONIAL -->
<section class="testimonial section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-5 col-12">
                <div class="contact-image" data-aos="fade-up">

                    <img src="{{asset("images/female-avatar.png")}}" class="img-fluid" alt="website">
                </div>
            </div>

            <div class="col-lg-6 col-md-7 col-12">
                <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>

                <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo.</h2>

                <p data-aos="fade-up" data-aos-delay="400">
                    <strong>Murodjon Tokhirov</strong>

                    <span class="mx-1">/</span>

                    <small>Student</small>
                </p>
            </div>

        </div>
    </div>
</section>


<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
            </div>

            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                <h4 class="my-4">Contact Info</h4>

                <p class="mb-1">
                    <i class="fa fa-phone mr-2 footer-icon"></i>
                    +998 99 349 97 24
                </p>

                <p>
                    <a href="#">
                        <i class="fa fa-envelope mr-2 footer-icon"></i>
                        toxirov2015@inbox.ru
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                <h4 class="my-4">Our Studio</h4>

                <p class="mb-1">
                    <i class="fa fa-home mr-2 footer-icon"></i>
                    18 - Uychi street, Chartak city - Namangan region, Uzbekistan
                </p>
            </div>



            <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

                <ul class="footer-link">
                    <li><a href="#">Stories</a></li>
                    <li><a href="#">Work with us</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                <ul class="social-icon">
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-dribbble"></a></li>
                    <li><a href="#" class="fa fa-behance"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- SCRIPTS -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/aos.js")}}"></script>
<script src="{{asset("js/owl.carousel.min.js")}}"></script>
<script src="{{asset("js/smoothscroll.js")}}"></script>
<script src="{{asset("js/custom.js")}}"></script>

</body>
</html>
