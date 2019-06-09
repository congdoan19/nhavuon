@extends('frontEnd.layouts.master')

@section('title','Contact')
@section('header')
   <link href="/assets/rs-plugin/css/settings.css" rel="stylesheet" type="text/css">
@endsection
@section('footer')
   <script src="https://maps.googleapis.com/maps/api/js"></script>
   
@endsection
@section('css','homePageOne contactPage')
@section('content')
    <section class="header-title section-padding">
            <div class="container">
                <h2 class="title">Contact</h2>
                <span class="sub-title">Home / <span class="text-color">Contact</span></span>
            </div>
        </section> <!-- header-title -->



        <section class="contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="contact-wrapper">
                            <ul>
                                <li class="wow fadeInDown">
                                    <i class="fa fa-phone" aria-hidden="true"></i>

                                    <div class="contact-wrapper">
                                        <h5>Hotline:</h5>

                                        <span class="sub">+1 478 (2492) 54 </span>
                                    </div>
                                </li>

                                <li class="wow fadeInDown" data-wow-delay="0.2s">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>

                                    <div class="contact-wrapper">
                                        <h5>Email:</h5>

                                        <span class="sub">support@gardenia.com </span>
                                    </div>
                                </li>

                                <li class="wow fadeInDown" data-wow-delay="0.4s">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>

                                    <div class="contact-wrapper">
                                        <h5>Working Hours:</h5>

                                        <span class="sub">9am-8pm (Mon - Fri)</span>
                                    </div>
                                </li>

                                <li class="wow fadeInDown" data-wow-delay="0.6s">
                                    <i class="fa fa-location-arrow" aria-hidden="true"></i>

                                    <div class="contact-wrapper">
                                        <h5>Office:</h5>
                                        <span class="sub">1802 Stout Rd, Menomonie, WI 54751</span>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- contact-wrapper -->
                    </div>

                    <div class="col-md-7">
                        <div id="googleMap"></div>
                    </div>
                </div>


                <div class="form-section">
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="text">First Name</span>

                                    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="First name..">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="text">Last Name</span>

                                    <input id="last-name" name="name" type="text" class="form-control"  required="" placeholder="Last name..">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="text">Email Address</span>

                                    <input class="domainSearchBar form-control" id="email2" name="email" type="email" required="" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="text">Phone No.</span>

                                    <input id="phone" class="form-control" required="" placeholder="Phone..">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="text">Write</span>

                            <textarea id="message" name="message" class="form-control form-message" rows="6" required="" placeholder="Tell us why you want it.. "></textarea>
                        </div>

                        <div class="form-group text-right wow fadeInUp">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div> <!-- mail-section -->
            </div>
        </section> <!-- contact-section -->
@endsection