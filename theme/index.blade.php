@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('css','homePageOne')
@section('content')
    
    @include('frontEnd.layouts.slider')
    <section class="worker-section section-padding">
        <div class="container">
            <div class="worker-wrapper text-center">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="tab-one">
                        <div class="worker-carousel owl-carousel owl-theme">
                           
                        @foreach($list_product1 as $product)
                             
                            <div class="worker-detail item">
                                <img src="{{url('products/small/',$product->image)}}" alt="{{$product->p_name}}">

                                <div class="worker-content">
                                    <h5><a href="{{url('/product-detail',$product->id)}}">{{$product->p_name}}</a></h5>
                                    <span class="position">{{number_format($product->price,0,',','.')}} đ</span>
                                </div>
                            </div> <!-- worker-detail -->
                           
                        @endforeach
                        

                            
                        </div>
                    </div> <!-- tab-one -->

                    <div role="tabpanel" class="tab-pane tab-story fade " id="tab-two">
                        <div class="worker-carousel owl-carousel owl-theme">
                        @foreach($list_product2 as $product)
                             
                            <div class="worker-detail item">
                                <img src="{{url('products/small/',$product->image)}}" alt="{{$product->p_name}}">

                                <div class="worker-content">
                                    <h5><a href="{{url('/product-detail',$product->id)}}">{{$product->p_name}}</a></h5>
                                    <span class="position">{{number_format($product->price,0,',','.')}} đ</span>
                                </div>
                            </div> <!-- worker-detail -->
                           
                        @endforeach
                            
                        </div>
                    </div> <!-- tab-two -->

                    <div role="tabpanel" class="tab-pane fade" id="tab-three">
                        <div class="worker-carousel owl-carousel owl-theme">
                        @foreach($list_product3 as $product)
                             
                            <div class="worker-detail item">
                                <img src="{{url('products/small/',$product->image)}}" alt="{{$product->p_name}}">

                                <div class="worker-content">
                                    <h5><a href="{{url('/product-detail',$product->id)}}">{{$product->p_name}}</a></h5>
                                    <span class="position">{{number_format($product->price,0,',','.')}} đ</span>
                                </div>
                            </div> <!-- worker-detail -->
                           
                        @endforeach
                            
                        </div>
                    </div> <!-- tab-three -->

                    
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab-one" role="tab" data-toggle="tab">Cây Ăn Trái Ngoại Nhập</a></li>
                    <li role="presentation" ><a href="#tab-two" role="tab" data-toggle="tab">Cây Nho Thân Gỗ</a></li>
                    <li role="presentation"><a href="#tab-three" role="tab" data-toggle="tab">Cây Cherry Brazil</a></li>
                   
                </ul>
            </div> <!-- worker-wrapper -->
        </div>
    </section>
    <section class="worker-section section-padding">
        <div class="container">
            <div class="worker-wrapper text-center">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="tab-one">
                        <div class="worker-carousel owl-carousel owl-theme">
                           
                        @foreach($list_product1 as $product)
                             
                            <div class="worker-detail item">
                                <img src="{{url('products/small/',$product->image)}}" alt="{{$product->p_name}}">

                                <div class="worker-content">
                                    <h5><a href="{{url('/product-detail',$product->id)}}">{{$product->p_name}}</a></h5>
                                    <span class="position">{{number_format($product->price,0,',','.')}} đ</span>
                                </div>
                            </div> <!-- worker-detail -->
                           
                        @endforeach
                        

                            
                        </div>
                    </div> <!-- tab-one -->

                    <div role="tabpanel" class="tab-pane tab-story fade " id="tab-two">
                        <div class="worker-carousel owl-carousel owl-theme">
                        @foreach($list_product2 as $product)
                             
                            <div class="worker-detail item">
                                <img src="{{url('products/small/',$product->image)}}" alt="{{$product->p_name}}">

                                <div class="worker-content">
                                    <h5><a href="{{url('/product-detail',$product->id)}}">{{$product->p_name}}</a></h5>
                                    <span class="position">{{number_format($product->price,0,',','.')}} đ</span>
                                </div>
                            </div> <!-- worker-detail -->
                           
                        @endforeach
                            
                        </div>
                    </div> <!-- tab-two -->

                    <div role="tabpanel" class="tab-pane fade" id="tab-three">
                        <div class="worker-carousel owl-carousel owl-theme">
                        @foreach($list_product3 as $product)
                             
                            <div class="worker-detail item">
                                <img src="{{url('products/small/',$product->image)}}" alt="{{$product->p_name}}">

                                <div class="worker-content">
                                    <h5><a href="{{url('/product-detail',$product->id)}}">{{$product->p_name}}</a></h5>
                                    <span class="position">{{number_format($product->price,0,',','.')}} đ</span>
                                </div>
                            </div> <!-- worker-detail -->
                           
                        @endforeach
                            
                        </div>
                    </div> <!-- tab-three -->

                    
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab-one" role="tab" data-toggle="tab">Cây Ăn Trái Ngoại Nhập</a></li>
                    <li role="presentation" ><a href="#tab-two" role="tab" data-toggle="tab">Cây Nho Thân Gỗ</a></li>
                    <li role="presentation"><a href="#tab-three" role="tab" data-toggle="tab">Cây Cherry Brazil</a></li>
                   
                </ul>
            </div> <!-- worker-wrapper -->
        </div>
    </section>
    
    <section class="signup-section">
        <div class="container">
            <div class="signup-wrapper">
                <h3>All services are 30% off for the <span class="color">“International Gardening Week”</span></h3>

                <button class="btn btn-default pull-right">Sign Up</button>
            </div> <!-- signup-wrapper -->
        </div>
    </section> <!-- signup-section -->
    <section class="growing-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 visible-sm visible-xs">
                    <div class="caption">
                        <img src="assets/images/instrument.jpg" alt="">
                    </div>
                </div>

                <div class="col-md-7 col-sm-12">
                    <div class="content-wrapper">
                        <h3>Cultivating companies with a love for gardening as green as the gardens they grow.</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore. Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem ape riam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                        <button class="btn btn-primary">Read More</button>

                        <button class="btn btn-default">Our History</button>
                    </div> <!-- content-wrapper -->
                </div>

                <div class="col-md-5 hidden-sm hidden-xs">
                    <div class="caption wow slideInRight" data-wow-delay="0.2s">
                        <img src="assets/images/instrument.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- growing-section -->
    <section class="counting-section counting-section-two text-center">
        <div class="container">
            <h2 class="hidden">title</h2>

            <div class="counting-pusher">
                <div class="row">
                    <div class="col-md-3 col-md-offset-3 col-sm-4">
                        <div class="counting-wrapper">
                            <div class="count-description">
                                <span class="timer">25</span>
                            </div>
                            <p>Years of experience</p>
                        </div>  <!-- counting-wrapper --> 
                    </div>

                    <div class="col-md-3 col-sm-4">
                        <div class="counting-wrapper">
                            <div class="count-description">
                                <span class="timer">48</span>
                            </div>
                            <p>Team Members</p>
                        </div>  <!-- counting-wrapper -->
                    </div>

                    <div class="col-md-3 col-md-offset-0 col-sm-4">
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
    
    <section class="testimonial-section testimonial-two">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Testimonials</h2>
            </div> <!-- section-title -->

            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testimonial-wrapper">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    

                                    <div class="author ">
                                        <img src="assets/images/testimonial-2.png" alt="">

                                        <div  class="content">
                                            <h5>Peter Gregory</h5>
                                            <span class="position">Raviga Inc</span>
                                        </div>
                                    </div>

                                    <ul class="rating pull-right">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> <!-- rating -->
                                </div> <!-- testimonial-wrapper -->
                            </div>

                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="testimonial-wrapper">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <div class="author ">
                                        <img src="assets/images/testimonial-2.png" alt="">

                                        <div  class="content">
                                            <h5>Peter Gregory</h5>
                                            <span class="position">Raviga Inc</span>
                                        </div>
                                    </div>

                                    <ul class="rating pull-right">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> <!-- rating -->
                                </div> <!-- testimonial-wrapper -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="testimonial-wrapper">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <div class="author ">
                                        <img src="assets/images/testimonial-2.png" alt="">

                                        <div  class="content">
                                            <h5>Peter Gregory</h5>
                                            <span class="position">Raviga Inc</span>
                                        </div>
                                    </div>

                                    <ul class="rating pull-right">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> <!-- rating -->
                                </div> <!-- testimonial-wrapper -->
                            </div>

                            <div class="col-md-6">
                                <div class="testimonial-wrapper">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <div class="author ">
                                        <img src="assets/images/testimonial-2.png" alt="">

                                        <div  class="content">
                                            <h5>Peter Gregory</h5>
                                            <span class="position">Raviga Inc</span>
                                        </div>
                                    </div>

                                    <ul class="rating pull-right">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> <!-- rating -->
                                </div> <!-- testimonial-wrapper -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testimonial-wrapper">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <div class="author ">
                                        <img src="assets/images/testimonial-2.png" alt="">

                                        <div  class="content">
                                            <h5>Peter Gregory</h5>
                                            <span class="position">Raviga Inc</span>
                                        </div>
                                    </div>

                                    <ul class="rating pull-right">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> <!-- rating -->
                                </div> <!-- testimonial-wrapper -->
                            </div>

                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="testimonial-wrapper">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <div class="author ">
                                        <img src="assets/images/testimonial-2.png" alt="">

                                        <div  class="content">
                                            <h5>Peter Gregory</h5>
                                            <span class="position">Raviga Inc</span>
                                        </div>
                                    </div>

                                    <ul class="rating pull-right">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul> <!-- rating -->
                                </div> <!-- testimonial-wrapper -->
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev"><img src="assets/images/long-left-arrow.png" alt=""> Prev</a>
                <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">Next <img src="assets/images/long-right-arrow.png" alt=""></a>
            </div>
        </div>
    </section> <!-- testimonial-section -->



    <section class="blog-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Recent Blogs</h2>
            </div> <!-- section-title -->

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="blog-wrapper wow fadeInUp">
                        <img src="assets/images/blog/b1.jpg" alt="">

                        <div class="content-wrapper">
                            <h3><a href="#">Organics to hydroponics</a></h3>

                            <ul class="post">
                                <li><i class="fa fa-user" aria-hidden="true"></i> Arthur Curry</li>

                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 22nd July </li>

                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 min read</li>
                            </ul> <!-- post -->

                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore.</p>

                            <a href="#" class="link">Read More</a>
                        </div> <!-- content-wrapper -->
                    </div> <!-- blog-wrapper -->
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="blog-wrapper wow fadeInUp" data-wow-delay="0.3s">
                        <img src="assets/images/blog/b2.jpg" alt="">

                        <div class="content-wrapper">
                            <h3><a href="#">Gardening and growing</a></h3>

                            <ul class="post">
                                <li><i class="fa fa-user" aria-hidden="true"></i> Arthur Curry</li>

                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 22nd July </li>

                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 min read</li>
                            </ul> <!-- post -->

                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore.</p>

                            <a href="#" class="link">Read More</a>
                        </div> <!-- content-wrapper -->
                    </div> <!-- blog-wrapper -->
                </div>

                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
                    <div class="blog-wrapper last-wrapper wow fadeInUp" data-wow-delay="0.5s">
                        <img src="assets/images/blog/b3.jpg" alt="">

                        <div class="content-wrapper">
                            <h3><a href="#">Support your community</a></h3>

                            <ul class="post">
                                <li><i class="fa fa-user" aria-hidden="true"></i> Arthur Curry</li>

                                <li><i class="fa fa-calendar" aria-hidden="true"></i> 22nd July </li>

                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 2 min read</li>
                            </ul> <!-- post -->

                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore.</p>

                            <a href="#" class="link">Read More</a>
                        </div> <!-- content-wrapper -->
                    </div> <!-- blog-wrapper -->
                </div>
            </div>
        </div>
    </section> <!-- blog-section -->
    <section class="double-section">
        <div class="container">
            <h2 class="hidden">title</h2>

            <div class="row">
                <div class="col-md-12">
                    <div class="partner-section">
                        <div class="partner-wrapper">
                            <ul class="text-center">
                                <li><img src="assets/images/partner/p1.jpg" alt=""></li>
                                <li><img src="assets/images/partner/p2.jpg" alt=""></li>
                                <li><img src="assets/images/partner/p3.jpg" alt=""></li>
                                <li><img src="assets/images/partner/p4.jpg" alt=""></li>
                                <li><img src="assets/images/partner/p5.jpg" alt=""></li>
                            </ul>
                        </div> <!-- partner-wrapper -->
                    </div> <!-- partner-section -->
                </div>
            </div>
        </div>
    </section> <!-- double-section -->
@endsection