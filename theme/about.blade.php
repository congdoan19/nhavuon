@extends('frontEnd.layouts.master')

@section('title','About')
@section('header')
   <link href="/assets/rs-plugin/css/settings.css" rel="stylesheet" type="text/css">
@endsection
@section('footer')
   <script src="/assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
   <script src="/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
   
@endsection
@section('css','homePageOne aboutPage')
@section('content')
    <section class="header-title section-padding">
        <div class="container">
            <h2 class="title">About Us</h2>
            <span class="sub-title">Home / <span class="text-color">About Us</span></span>
        </div>
    </section> <!-- header-title -->



    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 visible-sm visible-xs">
                    <div class="caption text-center">
                        <img src="assets/images/men.png" alt="">
                    </div> <!-- caption-wrapper -->
                </div>

                <div class="col-md-7">
                    <div class="content-wrapper">
                        <h3>Cultivating companies with a love for gardening as green as the gardens they grow.</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore. Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem ape riam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                        <span class="sign"><img src="assets/images/sign.png" alt=""></span>

                        <h5>Payet Clause</h5>
                        <span class="position">Ceo, Gardenia</span>
                    </div> <!-- content-wrapper -->
                </div>

                <div class="col-md-5 hidden-sm hidden-xs">
                    <div class="caption-wrapper wow slideInRight">
                        <span class="caption"><img src="assets/images/men.png" alt=""></span>
                    </div> <!-- caption-wrapper -->
                </div>
            </div>
        </div>
    </section> <!-- about-section -->



    <section class="counting-section counting-section-three text-center">
        <div class="container">
            <h2 class="hidden">title</h2>

            <div class="counting-pusher">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="counting-wrapper">
                            <div class="count-description">
                                <span class="timer">25</span>
                            </div>
                            <p>Years of experience</p>
                        </div>  <!-- counting-wrapper --> 
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="counting-wrapper">
                            <div class="count-description">
                                <span class="timer">48</span>
                            </div>
                            <p>Team Members</p>
                        </div>  <!-- counting-wrapper -->
                    </div>

                    <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
                        <div class="counting-wrapper last-wrapper">
                            <div class="count-description">
                                <span class="timer">33</span>
                            </div>
                            <p>Awards Wins</p>
                        </div>  <!-- counting-wrapper -->
                    </div>
                </div>
            </div> <!-- /.counting-pusher -->
        </div>
    </section> <!-- counting-section -->



    <section class="service-section service-section-three section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-wrapper wow fadeInLeft">
                        <span class="caption"><img src="assets/images/service/s1.jpg" alt=""></span>

                        <div class="content-wrapper">
                            <h3><a href="#">Who We Are</a></h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore.</p>

                            <a href="#" class="link">Read More</a>
                        </div> <!-- content-wrapper -->
                    </div> <!-- service-wrapper -->
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="service-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                        <span class="caption"><img src="assets/images/service/s2.jpg" alt=""></span>

                        <div class="content-wrapper">
                            <h3><a href="#">What We Do</a></h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore.</p>

                            <a href="#" class="link">Read More</a>
                        </div> <!-- content-wrapper -->
                    </div> <!-- service-wrapper -->
                </div>

                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
                    <div class="service-wrapper last-wrapper wow fadeInLeft" data-wow-delay="0.5s">
                        <span class="caption"><img src="assets/images/service/s3.jpg" alt=""></span>

                        <div class="content-wrapper">
                            <h3><a href="#">Our History</a></h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore.</p>

                            <a href="#" class="link">Read More</a>
                        </div> <!-- content-wrapper -->
                    </div> <!-- service-wrapper -->
                </div>
            </div>
        </div>
    </section> <!-- service-section -->



    <section class="project-section section-padding">
        <div class="container text-center">
            <div class="section-title text-center">
                <h2>Recent <span class="text-color">Projects</span></h2>
            </div> <!-- section-title -->
            
            <div class="portfolio gallery-grid">
                <div class="row">
                    <ul class="portfolio-sorting gallery-button list-inline text-center">
                        <li><a href="#" data-group="all" class="filter-btn active">All</a></li>
                        <li><a class="filter-btn" href="#" data-group="people">Landscaping</a></li>
                        <li><a class="filter-btn" href="#" data-group="simpsons">Gardening</a></li>
                        <li><a class="filter-btn" href="#" data-group="futurama">Weed Control</a></li>
                    </ul> <!--end portfolio sorting -->

                    <div id="lightBox" class="gallery-wrapper">
                        <ul class="portfolio-items courses list-unstyled" id="grid">
                            <li class="col-lg-4 col-sm-6" data-groups='["simpsons"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="assets/images/project/5.jpg" alt="">

                                    <div class="hover-view">
                                        <a href="assets/images/project/5.jpg"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>

                            <li class="col-lg-4 col-sm-6" data-groups='["people"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="assets/images/project/2.jpg" alt="">

                                    <div class="hover-view">
                                        <a href="assets/images/project/2.jpg"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>

                            <li class="col-lg-4 col-sm-6" data-groups='["futurama"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="assets/images/project/4.jpg" alt="">

                                    <div class="hover-view">
                                        <a href="assets/images/project/4.jpg"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>

                            <li class="col-lg-4 col-sm-6" data-groups='["futurama"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="assets/images/project/3.jpg" alt="">

                                    <div class="hover-view">
                                        <a href="assets/images/project/3.jpg"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>

                            <li class="col-lg-4 col-sm-6" data-groups='["simpsons"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="assets/images/project/1.jpg" alt="">

                                    <div class="hover-view">
                                        <a href="assets/images/project/1.jpg"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>

                            <li class="col-lg-4 col-sm-6" data-groups='["people"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="assets/images/project/6.jpg" alt="">

                                    <div class="hover-view">
                                        <a href="assets/images/project/6.jpg"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>
                        </ul> <!--end portfolio grid -->
                    </div> <!-- gallery-wrapper -->
                </div> <!--end row -->
            </div>
        </div> <!-- container -->
    </section> <!-- project-section -->



    <section class="team-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our <span class="text-color">Team</span></h2>
            </div> <!-- section-title -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="team-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="left-bar pull-left">
                            <span class="caption">
                                <img src="assets/images/team/t1.jpg" alt="">
                            </span>

                            <ul class="social-icon">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul> <!-- social-icon -->
                        </div> <!-- left-bar -->

                        <div class="right-bar">
                            <h5>Chris Brown</h5>
                            <span class="position">Founder & CEO</span>

                            <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit, sed do eiusmod tempor incididunt..</p>

                            <a href="#" class="link">Read Full Bio</a>
                        </div>
                    </div><!--  team-wrapper -->
                </div>

                <div class="col-sm-6">
                    <div class="team-wrapper last-wrapper wow fadeInRight" data-wow-delay="0.3s">
                        <div class="left-bar pull-left">
                            <span class="caption">
                                <img src="assets/images/team/t2.jpg" alt="">
                            </span>

                            <ul class="social-icon">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul> <!-- social-icon -->
                        </div> <!-- left-bar -->

                        <div class="right-bar">
                            <h5>J C Cornwell</h5>
                            <span class="position">Founder & CEO</span>

                            <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit, sed do eiusmod tempor incididunt..</p>

                            <a href="#" class="link">Read Full Bio</a>
                        </div>
                    </div><!--  team-wrapper -->
                </div>
            </div>
        </div>
    </section> <!-- team-section -->



    <div class="border-break">
        <div class="container">
            <div class="border"></div>
        </div>
    </div> <!-- border-break -->




    <section class="worker-section section-padding">
        <div class="container">
            <div class="worker-wrapper text-center">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="tab-one">
                        <div class="worker-carousel owl-carousel owl-theme">
                            <div class="worker-detail item">
                                <img src="assets/images/worker/w1.jpg" alt="">

                                <div class="worker-content">
                                    <h5><a href="#">Angela Chelsea</a></h5>
                                    <span class="position">Florist</span>
                                </div>
                            </div> <!-- worker-detail -->

                            <div class="worker-detail item">
                                <img src="assets/images/worker/w2.jpg" alt="">

                                <div class="worker-content">
                                    <h5><a href="#">Angela Chelsea</a></h5>
                                    <span class="position">Florist</span>
                                </div>
                            </div> <!-- worker-detail -->

                            <div class="worker-detail item">
                                <img src="assets/images/worker/w3.jpg" alt="">

                                <div class="worker-content">
                                    <h5><a href="#">Angela Chelsea</a></h5>
                                    <span class="position">Florist</span>
                                </div>
                            </div> <!-- worker-detail -->

                            <div class="worker-detail item">
                                <img src="assets/images/worker/w4.jpg" alt="">

                                <div class="worker-content">
                                    <h5><a href="#">Angela Chelsea</a></h5>
                                    <span class="position">Florist</span>
                                </div>
                            </div> <!-- worker-detail -->

                            <div class="worker-detail item">
                                <img src="assets/images/worker/w1.jpg" alt="">

                                <div class="worker-content">
                                    <h5><a href="#">Angela Chelsea</a></h5>
                                    <span class="position">Florist</span>
                                </div>
                            </div> <!-- worker-detail -->
                        </div>
                    </div> <!-- tab-one -->

                    <div role="tabpanel" class="tab-pane tab-story fade " id="tab-two">
                        <div class="row extra">
                            <div class="col-md-3 col-sm-6 hidden-sm hidden-xs">
                                <div class="worker-detail item">
                                    <img src="assets/images/worker/w3.jpg" alt="">

                                    <div class="worker-content">
                                        <h5><a href="#">Angela Chelsea</a></h5>
                                        <span class="position">Florist</span>
                                    </div>
                                </div> <!-- worker-detail -->
                            </div>

                            <div class="col-md-3 col-sm-6 hidden-sm hidden-xs">
                                <div class="worker-detail item">
                                    <img src="assets/images/worker/w1.jpg" alt="">

                                    <div class="worker-content">
                                        <h5><a href="#">Angela Chelsea</a></h5>
                                        <span class="position">Florist</span>
                                    </div>
                                </div> <!-- worker-detail -->
                            </div>

                            <div class="col-md-3 col-sm-6 hidden-xs">
                                <div class="worker-detail item">
                                    <img src="assets/images/worker/w2.jpg" alt="">

                                    <div class="worker-content">
                                        <h5><a href="#">Angela Chelsea</a></h5>
                                        <span class="position">Florist</span>
                                    </div>
                                </div> <!-- worker-detail -->
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="worker-detail item">
                                    <img src="assets/images/worker/w4.jpg" alt="">

                                    <div class="worker-content">
                                        <h5><a href="#">Angela Chelsea</a></h5>
                                        <span class="position">Florist</span>
                                    </div>
                                </div> <!-- worker-detail -->
                            </div>
                        </div>
                    </div> <!-- tab-two -->

                    <div role="tabpanel" class="tab-pane fade" id="tab-three">
                        <div class="row extra">
                            <div class="col-md-3 col-sm-6 hidden-sm hidden-xs">
                                <div class="worker-detail item">
                                    <img src="assets/images/worker/w2.jpg" alt="">

                                    <div class="worker-content">
                                        <h5><a href="#">Angela Chelsea</a></h5>
                                        <span class="position">Florist</span>
                                    </div>
                                </div> <!-- worker-detail -->
                            </div>

                            <div class="col-md-3 col-sm-6 hidden-sm hidden-xs">
                                <div class="worker-detail item">
                                    <img src="assets/images/worker/w4.jpg" alt="">

                                    <div class="worker-content">
                                        <h5><a href="#">Angela Chelsea</a></h5>
                                        <span class="position">Florist</span>
                                    </div>
                                </div> <!-- worker-detail -->
                            </div>

                            <div class="col-md-3 col-sm-6 hidden-xs">
                                <div class="worker-detail item">
                                    <img src="assets/images/worker/w3.jpg" alt="">

                                    <div class="worker-content">
                                        <h5><a href="#">Angela Chelsea</a></h5>
                                        <span class="position">Florist</span>
                                    </div>
                                </div> <!-- worker-detail -->
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="worker-detail item">
                                    <img src="assets/images/worker/w1.jpg" alt="">

                                    <div class="worker-content">
                                        <h5><a href="#">Angela Chelsea</a></h5>
                                        <span class="position">Florist</span>
                                    </div>
                                </div> <!-- worker-detail -->
                            </div>
                        </div>
                    </div> <!-- tab-three -->

                    <div role="tabpanel" class="tab-pane fade" id="tab-four">
                        <div class="row extra">
                            <div class="col-md-3 col-sm-6 hidden-sm hidden-xs">
                                <div class="worker-detail item">
                                    <img src="assets/images/worker/w3.jpg" alt="">

                                    <div class="worker-content">
                                        <h5><a href="#">Angela Chelsea</a></h5>
                                        <span class="position">Florist</span>
                                    </div>
                                </div> <!-- worker-detail -->
                            </div>

                            <div class="col-md-3 col-sm-6 hidden-sm hidden-xs">
                                <div class="worker-detail item">
                                    <img src="assets/images/worker/w4.jpg" alt="">

                                    <div class="worker-content">
                                        <h5><a href="#">Angela Chelsea</a></h5>
                                        <span class="position">Florist</span>
                                    </div>
                                </div> <!-- worker-detail -->
                            </div>

                            <div class="col-md-3 col-sm-6 hidden-xs">
                                <div class="worker-detail item">
                                    <img src="assets/images/worker/w1.jpg" alt="">

                                    <div class="worker-content">
                                        <h5><a href="#">Angela Chelsea</a></h5>
                                        <span class="position">Florist</span>
                                    </div>
                                </div> <!-- worker-detail -->
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="worker-detail item">
                                    <img src="assets/images/worker/w2.jpg" alt="">

                                    <div class="worker-content">
                                        <h5><a href="#">Angela Chelsea</a></h5>
                                        <span class="position">Florist</span>
                                    </div>
                                </div> <!-- worker-detail -->
                            </div>
                        </div>
                    </div> <!-- tab-three -->
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab-one" role="tab" data-toggle="tab">Florists</a></li>
                    <li role="presentation" ><a href="#tab-two" role="tab" data-toggle="tab">Lawn Shapers</a></li>
                    <li role="presentation"><a href="#tab-three" role="tab" data-toggle="tab">Garden Cleaners</a></li>
                    <li role="presentation"><a href="#tab-four" role="tab" data-toggle="tab">Logistics</a></li>
                </ul>
            </div> <!-- worker-wrapper -->
        </div>
    </section>




    <section class="quote-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-5">
                    <div class="section-title">
                        <h2>Request for a <span class="text-color">Quick Quote</span></h2>
                    </div> <!-- section-title -->

                    <form class="quote-form text-left">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="First name..">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" type="email" required="" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="selection">
                                    <select name="one" class="dropdown-select">
                                        <option value="">- Select Service -</option>
                                        <option value="1">Service one</option>
                                        <option value="2">Service two</option>
                                        <option value="3">Service three</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button class="subscribeBtn" type="submit">Get Quote</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> <!-- quote-section -->




    <section class="double-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="partner-section">
                        <div class="section-title text-center">
                            <h2>Our <span class="text-color">Partners</span></h2>
                        </div> <!-- section-title -->

                        <div class="partner-wrapper">
                            <ul class="text-center">
                                <li class="wow zoomIn"><img src="assets/images/partner/p1.jpg" alt=""></li>
                                <li class="wow zoomIn" data-wow-delay="0.1s"><img src="assets/images/partner/p2.jpg" alt=""></li>
                                <li class="wow zoomIn" data-wow-delay="0.2s"><img src="assets/images/partner/p3.jpg" alt=""></li>
                                <li class="wow zoomIn" data-wow-delay="0.3s"><img src="assets/images/partner/p4.jpg" alt=""></li>
                                <li class="wow zoomIn" data-wow-delay="0.4s"><img src="assets/images/partner/p5.jpg" alt=""></li>
                            </ul>
                        </div> <!-- partner-wrapper -->
                    </div> <!-- partner-section -->
                </div>

                <div class="col-md-6">
                    <div class="question-section">
                        <div class="section-title">
                            <h2>General <span class="text-color">Questions</span></h2>
                        </div> <!-- section-title -->

                        <div class="question-accordion">
                            <div class="panel-group" id="question-accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#question-accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="open">
                                              Q: How can I get a quote?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed open" role="button" data-toggle="collapse" data-parent="#question-accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Q: How can I schedule an appointment?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed open" role="button" data-toggle="collapse" data-parent="#question-accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Q: Where can I find a list of prices?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- question-accordion -->
                    </div> <!-- question-section -->
                </div>
            </div>
        </div>
    </section> <!-- double-section -->




    <section class="testimonial-section">
        <div class="container">
            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testimonial-wrapper">
                                    <span class="caption"><img src="assets/images/quote.png" alt=""></span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> <!-- rating -->

                                    <div class="author pull-right">
                                        <img src="assets/images/testimonial.png" alt="">

                                        <div  class="content">
                                            <h5>Peter Gregory</h5>
                                            <span class="position">Raviga Inc</span>
                                        </div>
                                    </div>
                                </div> <!-- testimonial-wrapper -->
                            </div>

                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="testimonial-wrapper">
                                    <span class="caption"><img src="assets/images/quote.png" alt=""></span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> <!-- rating -->

                                    <div class="author pull-right">
                                        <img src="assets/images/testimonial.png" alt="">

                                        <div  class="content">
                                            <h5>Peter Gregory</h5>
                                            <span class="position">Raviga Inc</span>
                                        </div>
                                    </div>
                                </div> <!-- testimonial-wrapper -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="testimonial-wrapper">
                                    <span class="caption"><img src="assets/images/quote.png" alt=""></span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> <!-- rating -->

                                    <div class="author pull-right">
                                        <img src="assets/images/testimonial.png" alt="">

                                        <div  class="content">
                                            <h5>Peter Gregory</h5>
                                            <span class="position">Raviga Inc</span>
                                        </div>
                                    </div>
                                </div> <!-- testimonial-wrapper -->
                            </div>

                            <div class="col-md-6">
                                <div class="testimonial-wrapper">
                                    <span class="caption"><img src="assets/images/quote.png" alt=""></span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> <!-- rating -->

                                    <div class="author pull-right">
                                        <img src="assets/images/testimonial.png" alt="">

                                        <div  class="content">
                                            <h5>Peter Gregory</h5>
                                            <span class="position">Raviga Inc</span>
                                        </div>
                                    </div>
                                </div> <!-- testimonial-wrapper -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testimonial-wrapper">
                                    <span class="caption"><img src="assets/images/quote.png" alt=""></span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> <!-- rating -->

                                    <div class="author pull-right">
                                        <img src="assets/images/testimonial.png" alt="">

                                        <div  class="content">
                                            <h5>Peter Gregory</h5>
                                            <span class="position">Raviga Inc</span>
                                        </div>
                                    </div>
                                </div> <!-- testimonial-wrapper -->
                            </div>

                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="testimonial-wrapper">
                                    <span class="caption"><img src="assets/images/quote.png" alt=""></span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> <!-- rating -->

                                    <div class="author pull-right">
                                        <img src="assets/images/testimonial.png" alt="">

                                        <div  class="content">
                                            <h5>Peter Gregory</h5>
                                            <span class="position">Raviga Inc</span>
                                        </div>
                                    </div>
                                </div> <!-- testimonial-wrapper -->
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev"><img src="assets/images/left-angel.png" alt=""></a>
                <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next"><img src="assets/images/right-angel.png" alt=""></a>
            </div>
        </div>
    </section> <!-- testimonial-section -->
@endsection