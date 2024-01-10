@extends('front.main.headerfooter')
@php
    $title=$Blog[0]['name'];
    if($Blog[0]['meta_title']!="")
    {
        $title=$Blog[0]['meta_title'];
    }
@endphp
@section('title',$title)
@section('meta-description',$Blog[0]['meta_desc'])
@section('meta-keywords',$Blog[0]['meta_tag'])
@section('content')
<!-- cart mini area end -->
<div class="body-overlay"></div>
<!-- cart mini area end -->

<main>
    <!-- page__title-start -->
    <section class="page__title p-relative d-flex align-items-center" data-background="{{ asset('frontend/assets/img/bg/page-title-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h2>{{ $Blog[0]['name'] }}</h2>
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

    <!-- blog-area start -->
    <section class="blog-details-area mt-10 mb-50">
        <div class="container custom-container">
            
                    <div class="row">
                        <div class="blog-wrapper pr-50">
                            <div class="blog-wrap blog-item mb-50">
                                <div class="blog-thumb">
                                   {{-- <img src="{{ asset('uplods/blog') }}/{{ $Blog[0]['img'] }}" alt="blog"> --}}
                                </div>
                                <div class="blog-details mt-35">

                                   <p><img class="blog-custom" src="{{ asset('uplods/blog') }}/{{ $Blog[0]['img'] }}" alt="blog">{!! $Blog[0]['desc'] !!}</p>
                        
                                </div>
                            </div>
                        </div>
                    </div>
              
               
            
        </div>
    </section>
    <!-- blog-area end -->

</main>
@endsection