@extends('front.main.headerfooter')
@php
    $title=$about[0]['name'];
    if($about[0]['meta_title']!="")
    {
        $title=$about[0]['meta_title'];
    }
@endphp
@section('title',$title)
@section('meta-description',$about[0]['meta_desc'])
@section('meta-keywords',$about[0]['meta_tag'])
@section('content')


<main>
    <!-- page__title-start -->
    <section class="page__title p-relative d-flex align-items-center" data-background="{{ asset('frontend/assets/img/bg/page-title-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>{{ $about[0]['name'] }}</h1>
                        <div class="page__title-breadcrumb">                                 
                            <nav aria-label="breadcrumb">
                           
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page__title-end -->

    <!-- about__history-start -->
    <section class="about__history pt-95 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <div class="about__gallery-thumb w-img mb-10">
                        <img src="{{ asset('uplods/page') }}/{{ $about[0]['img'] }}" alt="">
                    </div>
             </div>
                <div class="col-xxl-8 col-xl-10">
                    <div class="about__history-wrapper">
                        <div class="about__history-title-area">
                            <span class="about__history-title-pre">{{ $about[0]['name'] }} Detail</span>
                           
                        </div>
                        <p class="about__history-text">
                            {!! $about[0]['desc'] !!}
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- about__history-end -->

    <!-- about__offer start -->
    <section class="about__offer pt-155 pb-130 include-bg" data-background="{{ asset('frontend/assets/img/bg/about-bg-1.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-8 col-lg-10">
                    <div class="about__offer-content text-center">
                        <div class="about__offer-icon mb-20">
                            <img src="{{ asset('frontend/assets/img/icon/ship.png') }}" alt="">
                        </div>
                     
                        <p>{!! $about[0]['meta_desc'] !!} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about__offer end -->

    
    
    <!-- shop modal start -->
    
    <!-- shop modal end -->

</main>
@endsection