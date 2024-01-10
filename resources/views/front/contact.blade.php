@extends('front.main.headerfooter')
@section('title','Contact')
@section('meta-description','')
@section('meta-keywords','')
@section('content')


       
        <div class="body-overlay"></div>
        <!-- cart mini area end -->

        <main>
            <!-- page__title-start -->
            <section class="page__title p-relative d-flex align-items-center" data-background="{{ asset('frontend/assets/img/bg/page-title-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page__title-inner text-center">
                                <h1>Contact Us</h1>
                                <div class="page__title-breadcrumb">                                 
                                    <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                    
                                    </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page__title-end -->

            <!-- contact-area start -->
            <section class="contact-area pt-120 pb-50 fix">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-6 col-lg-6">
                            <div class="sec-wrapper">
                                <h5>Contact With Us</h5>
                                <h2 class="absection-title">Speak with our Expert.</h2>
                             </div>
                            <div class="contact-info mr-50 mr-xs-0  mr-md-0 mb-30">
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="contact-info-icon">
                                        <a href="#"><i class="fal fa-phone-alt"></i></a>
                                    </div>
                                    <div class="contact-info-text mt-10">
                                        <span>Call Anytime</span>
                                        <h5><a href="tel:+91 76240 23457">{{ config('constants.front.number') }}</a></h5>
                                    </div>
                                </div>
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="contact-info-icon">
                                        <a href="#"><i class="fal fa-envelope"></i></a>
                                    </div>
                                    <div class="contact-info-text mt-10">
                                        <span>send email</span>
                                        <h5><a href="mailto:india.waxwing@gmail.com">{{ config('constants.front.email') }}</a> </h5>
                                    </div>
                                </div>
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="contact-info-icon">
                                        <a href="#"><i class="fal fa-user"></i></a>
                                    </div>
                                    <div class="contact-info-text mt-10">
                                        <span>Name</span>
                                        <h5><a href="">{{ config('constants.front.name') }}</a> </h5>
                                    </div>
                                </div>
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="contact-info-icon">
                                        <a href="#"><i class="fal fa-map-marker-alt"></i></a>
                                    </div>
                                    <div class="contact-info-text mt-10">
                                        <span>visit office</span>
                                        <h5><a href="">{{ config('constants.front.address') }}</a> </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-6 col-lg-6">
                            {{-- <form id="contacts-form" class="conatct-post-form mb-30" action="#"> --}}
                                {!! Form::open(['id' => "cform", 'url' => route('contact.add'),"class" => "conatct-post-form mb-30",'enctype' => "multipart/form-data"]) !!}
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-icon p-relative contacts-name">
                                            <input type="text" id="name" name="name"  placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-icon p-relative contacts-name">
                                            <input type="email" id="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-icon p-relative contacts-Phone">
                                            <input type="text" id="number" name="number" placeholder="number" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-icon p-relative contacts-email">
                                            <input type="text" name="subject" id="subject" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-icon p-relative contacts-massage">
                                            <textarea name="massage" name="massage" id="massage" cols="30" rows="10" placeholder="Your massage" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact- mt-15">
                                            <button class="btn-tp mt-15" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area end -->

            <!-- map-area start -->
            <section class="map-area">
                <div class="contact-map">
                    <div id="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14766.888558699651!2d70.77630529999999!3d22.288512949999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cb9b7682c9b9%3A0x732b042c9416421e!2sPARTH%20MANUFACTURE%2C%20New%20nehru%20nagar%20industrial%20area%20B%2FH%20kamnath%20way%20bridge%2C%20near%20Bhola%20pan%2C%20Rajkot%2C%20Gujarat%20360002!5e0!3m2!1sen!2sin!4v1649656491913!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                 </div>
            </section>
            <!-- map-area end -->

        </main>
@endsection