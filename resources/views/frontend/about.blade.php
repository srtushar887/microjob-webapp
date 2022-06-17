<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Dolight job</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/frontend/')}}/img/favicon.png">
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/bootstrap.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/animate.min.css">
    <!-- FlatIcon CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/flaticon.css">
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/fontawesome.min.css">
    <!-- Mran Menu CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/meanmenu.css">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/magnific-popup.min.css">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/nice-select.min.css">
    <!-- Swiper Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/swiper.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/owl.carousel.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/responsive.css">
</head>

<body>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="loader">
        <div class="shadow"></div>
        <div class="box"></div>
    </div>
</div>
<!-- End Preloader Area -->
<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="techvio-responsive-nav">
        <div class="container">
            <div class="techvio-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('assets/frontend/')}}/img/logo.png" class="white-logo" alt="logo">
                        <img src="{{asset('assets/frontend/')}}/img/logo.png" class="black-logo" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="techvio-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('assets/frontend/')}}/img/logo.png" class="white-logo" alt="logo">
                    <img src="{{asset('assets/frontend/')}}/img/logo.png" class="black-logo" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('front')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about')}}" class="nav-link active">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('forum')}}" class="nav-link">Forum</a>
                        </li>
                    </ul>
                    <div class="other-option">
                        <a class="default-btn" href="#getit" data-toggle="modal">Get It Support <span></span></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
<!-- Get it support -->
<div class="modal fade" id="getit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Contact Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="u_name">Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter here.." id="u_name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="u_email">Your Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Enter here.." id="u_email"
                                   required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="u_ques">Your Question <span class="text-danger">*</span></label>
                            <textarea id="u_ques" rows="3" class="form-control" required></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->
<!-- Start About Section -->
<section class="about-area section-padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-content">
                    <div class="about-content-text">
                        <h6>About Our Company</h6>
                        <h2>Providing your business with a quality IT service is our passion.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua enim ad minim veniam, nostrud</p>
                        <div class="skills">
                            <div class="skill-item">
                                <h6>IT Consulting <em>90%</em></h6>
                                <div class="skill-progress">
                                    <div class="progres" data-value="90%"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <h6>Virtual Workstation <em>75%</em></h6>
                                <div class="skill-progress">
                                    <div class="progres" data-value="75%"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <h6>Managed IT Service <em>80%</em></h6>
                                <div class="skill-progress">
                                    <div class="progres" data-value="80%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="about-btn-box">
                            <a class="default-btn project-btn-1" href="projects.html">Learn More<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12">
                <div class="about-image">
                    <img src="{{asset('assets/frontend/')}}/img/about.jpg" alt="About image">
                    <div class="years-design">
                        <h2>27</h2>
                        <h5>Years Experience</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->
<!-- Start Counter Section -->
<section class="counter-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 counter-item">
                <div class="single-counter">
                    <div class="counter-contents">
                        <h2>
                            <span class="counter-number">27</span>
                            <span>+</span>
                        </h2>
                        <h3 class="counter-heading">Years Helping Business</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 counter-item">
                <div class="single-counter">
                    <div class="counter-contents">
                        <h2>
                            <span class="counter-number">500</span>
                            <span>+</span>
                        </h2>
                        <h3 class="counter-heading">Employees</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 counter-item">
                <div class="single-counter">
                    <div class="counter-contents">
                        <h2>
                            <span class="counter-number">30</span>
                            <span>M</span>
                        </h2>
                        <h3 class="counter-heading">Complete Projects</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 counter-item">
                <div class="single-counter">
                    <div class="counter-contents">
                        <h2>
                            <span class="counter-number">90</span>
                            <span>K+</span>
                        </h2>
                        <h3 class="counter-heading">5 Star Rating</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counter Section -->
<!-- Start Team Section -->
<section class="team-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h6>Team Member</h6>
                    <h2>Expert Team</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{asset('assets/frontend/')}}/img/team/team-1.jpg" alt="team"/>
                        <div class="team-social-icon">
                            <a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Ava Farrington</h3>
                        <span>Founder, ceo</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{asset('assets/frontend/')}}/img/team/team-2.jpg" alt="team"/>
                        <div class="team-social-icon">
                            <a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Kevin Haley</h3>
                        <span>Co-founder, cto</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{asset('assets/frontend/')}}/img/team/team-3.jpg" alt="team"/>
                        <div class="team-social-icon">
                            <a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Alishia Fulton</h3>
                        <span>Chief creative officer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{asset('assets/frontend/')}}/img/team/team-4.jpg" alt="team"/>
                        <div class="team-social-icon">
                            <a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Lucas Martinez</h3>
                        <span>Project Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->
<!-- Start Testimonial Section -->
<section class="testimonial-section pb-100">
    <div class="container">
        <div class="section-title">
            <h6>Testimonial</h6>
            <h2>What Our Client Say</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="testimonial-slider owl-carousel owl-theme">
                    <!-- testimonials item -->
                    <div class="single-testimonial">
                        <div class="rating-box">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud
                                exercitation.</p>
                        </div>
                        <div class="avatar">
                            <img src="{{asset('assets/frontend/')}}/img/client/testimonial-1.jpg"
                                 alt="testimonial images">
                        </div>
                        <div class="testimonial-bio">
                            <div class="bio-info">
                                <h3>Saabir al-Obeid</h3>
                                <span>Business Man</span>
                            </div>
                        </div>
                    </div>
                    <!-- testimonials item -->
                    <div class="single-testimonial">
                        <div class="rating-box">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud
                                exercitation.</p>
                        </div>
                        <div class="avatar">
                            <img src="{{asset('assets/frontend/')}}/img/client/testimonial-2.jpg"
                                 alt="testimonial images">
                        </div>
                        <div class="testimonial-bio">
                            <div class="bio-info">
                                <h3>Zahra Burnett</h3>
                                <span>Business Man</span>
                            </div>
                        </div>
                    </div>
                    <!-- testimonials item -->
                    <div class="single-testimonial">
                        <div class="rating-box">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud
                                exercitation.</p>
                        </div>
                        <div class="avatar">
                            <img src="{{asset('assets/frontend/')}}/img/client/testimonial-3.jpg"
                                 alt="testimonial images">
                        </div>
                        <div class="testimonial-bio">
                            <div class="bio-info">
                                <h3>Stevie Wills</h3>
                                <span>Business Man</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->
<!-- Start Hire Section -->
<section class="hire-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12">
                <div class="hire-content">
                    <h6>Want to work with us?</h6>
                    <h2>Digitally transform and grow your business!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud consectetur voluptatem
                        accusantium doloremque adipiscing elit.</p>
                    <div class="hire-btn">
                        <a class="default-btn" href="tel:0802235678">Call Now<span></span></a>
                        <a class="default-btn-one" href="contact.html">Contact Us<span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hire Section -->
<!-- Start Partner section -->
<section class="partner-section pt-100 pb-70">
    <div class="container">
        <div class="partner-title">
            <h6>We Prefer</h6>
            <!-- bd, payer, payoneer, master card, visa card, bank(dbbl, )-->
            <h2>Payment Getway</h2>
        </div>
        <ul class="list-inline text-center">
            <li class="list-inline-item">
                <a href="#0">
                    <img src="{{asset('assets/frontend/')}}/img/partner/client-2.png" alt="image">
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#0">
                    <img src="{{asset('assets/frontend/')}}/img/partner/client-3.png" alt="image">
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#0">
                    <img src="{{asset('assets/frontend/')}}/img/partner/client-4.png" alt="image">
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#0">
                    <img src="{{asset('assets/frontend/')}}/img/partner/client-5.png" alt="image">
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#0">
                    <img src="{{asset('assets/frontend/')}}/img/partner/client-6.png" alt="image">
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#0">
                    <img src="{{asset('assets/frontend/')}}/img/partner/client-7.png" alt="image">
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#0">
                    <img src="{{asset('assets/frontend/')}}/img/partner/client-8.png" alt="image">
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#0">
                    <img src="{{asset('assets/frontend/')}}/img/partner/client-9.png" alt="image">
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#0">
                    <img src="{{asset('assets/frontend/')}}/img/partner/client-10.png" alt="image">
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#0">
                    <img src="{{asset('assets/frontend/')}}/img/partner/client-11.png" alt="image">
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#0">
                    <img src="{{asset('assets/frontend/')}}/img/partner/client-12.png" alt="image">
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- End Partner section -->
<!-- Start Footer & Subscribe Section -->
<section class="footer-subscribe-wrapper">
    <!-- Start Subscribe Area -->
    <div class="subscribe-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="subscribe-content">
                        <h2>Sign Up Our Newsletter</h2>
                        <span class="sub-title">We Offer An Informative Monthly Technology Newsletter - Check It
								Out.</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form class="newsletter-form">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL"
                               required autocomplete="off">
                        <button type="submit">Subscribe Now</button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe Area -->
    <!-- Start Footer Area -->
    <div class="footer-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-heading">
                            <h3>About Us</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco consectetur laboris.</p>
                        <ul class="footer-social">
                            <li>
                                <a href="#"> <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-heading">
                            <h3>Our Services</h3>
                        </div>
                        <ul class="footer-quick-links">
                            <li><a href="#">IT Solution</a></li>
                            <li><a href="projects.html">Web Development</a></li>
                            <li><a href="services.html">Networking Services</a></li>
                            <li><a href="team.html">SEO Optimization</a></li>
                            <li><a href="contact.html">App Optimization</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul class="footer-quick-links">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="projects.html">Case Study</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="terms-condition.html">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-heading">
                            <h3>Contact Info</h3>
                        </div>
                        <div class="footer-info-contact"><i class="flaticon-phone-call"></i>
                            <h3>Phone</h3>
                            <span><a href="tel:0802235678">080 707 555-321</a></span>
                        </div>
                        <div class="footer-info-contact"><i class="flaticon-envelope"></i>
                            <h3>Email</h3>
                            <span><a href="mailto:demo@example.com">demo@example.com</a></span>
                        </div>
                        <div class="footer-info-contact"><i class="flaticon-placeholder"></i>
                            <h3>Address</h3>
                            <span>526 Melrose Street, Water Mill, 11976 New York</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Section -->
</section>
<!-- End Footer & Subscribe Section -->
<!-- Start Copy Right Section -->
<div class="copyright-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <p><i class="far fa-copyright"></i> <span class="getYear">2021</span> Dolight - All Rights
                    Reserved.</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <ul>
                    <li><a href="terms-condition.html">Terms & Conditions</a>
                    </li>
                    <li><a href="privacy-policy.html">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Copy Right Section -->
<!-- Start Go Top Section -->
<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
</div>
<!-- End Go Top Section -->
<!-- jQuery Min JS -->
<script src="{{asset('assets/frontend/')}}/js/jquery.min.js"></script>
<!-- Popper Min JS -->
<script src="{{asset('assets/frontend/')}}/js/popper.min.js"></script>
<!-- Bootstrap Min JS -->
<script src="{{asset('assets/frontend/')}}/js/bootstrap.min.js"></script>
<!-- MeanMenu JS  -->
<script src="{{asset('assets/frontend/')}}/js/jquery.meanmenu.js"></script>
<!-- Appear Min JS -->
<script src="{{asset('assets/frontend/')}}/js/jquery.appear.min.js"></script>
<!-- CounterUp Min JS -->
<script src="{{asset('assets/frontend/')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/jquery.counterup.min.js"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('assets/frontend/')}}/js/owl.carousel.min.js"></script>
<!-- Magnific Popup Min JS -->
<script src="{{asset('assets/frontend/')}}/js/jquery.magnific-popup.min.js"></script>
<!-- Nice Select Min JS -->
<script src="{{asset('assets/frontend/')}}/js/jquery.nice-select.min.js"></script>
<!-- Isotope Min JS -->
<script src="{{asset('assets/frontend/')}}/js/isotope.pkgd.min.js"></script>
<!-- Swiper Min JS -->
<script src="{{asset('assets/frontend/')}}/js/swiper.min.js"></script>
<!-- WOW Min JS -->
<script src="{{asset('assets/frontend/')}}/js/wow.min.js"></script>
<!-- Main JS -->
<script src="{{asset('assets/frontend/')}}/js/main.js"></script>
</body>

</html>
