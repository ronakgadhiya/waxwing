@extends('front.main.headerfooter')
@section('title','Blog')
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
                        <h1>Blog</h1>
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
    <section class="blog-area mt-100 mb-50">
        <div class="container custom-container">
            <div class="row">
                @foreach ($Blog as $blogiteam)
                <div class="blog__wrapper pr-50 col-md-6">
                    <div class="blog-wrap blog-item mb-50">
                        <div class="blog-thumb">
                            <img src="{{ asset('uplods/blog') }}/{{ $blogiteam->img }}" alt="blog">
                        </div>
                        <div class="blog-details mt-35">
                            
                            <h3 class="blog-title">
                                <a href="{{ route('frontblogs',$blogiteam->slug) }}">{{ $blogiteam->name }}</a>
                            </h3>
                            <p>{!! Str::limit(strip_tags($blogiteam->desc), $limit = 100, $end = '...') !!}</p>
                            <div class="blog-btn mt-25">
                                <a href="{{ route('frontblogs',$blogiteam->slug) }}" class="btn-tp">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- blog-area end -->
</main>
@endsection
