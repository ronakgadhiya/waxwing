@extends('front.main.headerfooter')
@section('title','Waxwing - Steel Power of the Future ')
@section('meta-description','')
@section('meta-keywords','')
@section('content')  
  


<main>
    <!-- slider area start -->
    <section class="slider__area">
        <div class="slider__active swiper-container">
            <div class="swiper-wrapper">
                @foreach ($Slider as $slideritem)
               
                <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg" data-background="{{ asset('uplods/slider') }}/{{ $slideritem->img }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-5">
                                <div class="slider__content p-relative z-index-11">
                                    
                                    <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">{{ $slideritem->name }}</h3>
                                    <div class="slider__btn" data-animation="fadeInUp" data-delay=".4s">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                     
                @endforeach
                
            </div>
            <div class="main-slider-pagination">
                <button class="main-slider-button-prev"><i class="fal fa-angle-left"></i></button>
                <button class="main-slider-button-next"><i class="fal fa-angle-right"></i></button>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- category area start -->
    <section class="category__area pt-40 grey-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper section__title-line mb-40">
                        <h3 class="section__title">All Categories</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($ProductCategory as $catitem)
                <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6">
                    <div class="category__item mb-30 grey-bg-3">
                        <div class="category__thumb w-img fix">
                            <a href="{{ route('shop') }}">
                                <img src="{{ asset('uplods/productcategory') }}/{{ $catitem->img}}" alt="">
                            </a>
                        </div>
                        <div class="category__content text-center">
                            <h3 class="category__title">
                                <a href="{{ route('shop') }}">{{ $catitem->name }}</a>
                            </h3>
                            {{-- <span class="category__quantity">(70)</span> --}}
                        </div>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- category area end -->

    <!-- product area start -->
    <section class="product__area pt-95 pb-80">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="product__item-wrapper pt-15">
                        <div class="product__top section__title-line d-sm-flex align-items-start mb-35">
                            <div class="section__title-wrapper mr-30">
                                <h3 class="section__title">Product Item </h3>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($Product as $productitem)
                            <div class="product__item-single col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6"  >
                                    <div class="product__item mb-20" style="box-shadow:0px 0px 10px grey;">
                                        <div class="product__thumb w-img fix">
                                            <a href="{{ route('productdetail',$productitem->slug) }}">
                                                <img src="{{ asset('uplods/product') }}/{{ $productitem->img }}" height="250" width="100" alt="" >
                                            </a>
                                        </div>
                                        <div class="product__content text-center">
                                            <div class="product__tag">
                                            </div>
                                            <h4 class="product__title mb-5">
                                                <a href="{{ route('productdetail',$productitem->slug) }}">{{ $productitem->name }}</a>
                                            </h4>
                                            <div class="product__price" >
                                                {{-- <span class="price" style="font-size:20px">{{ $productitem->price }}</span> --}}
                                            </div>
                                        </div>
                                    </div>
                            
                            </div>
                            @endforeach 
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

    <!-- blog area start -->
    <section class="blog__area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper  section__title-line mb-20">
                        <h3 class="section__title">Our Article</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="blog__slider blog__slider-d common-nav owl-carousel">
                        @foreach ($Blog as $Blogitem)
                        <div class="blog__item transition-3 mb-30 white-bg">
                            <div class="blog__thumb w-img fix p-relative">
                                <a href="{{ route('frontblogs',$Blogitem->slug) }}">
                                    <img src="{{ asset('uplods/blog') }}/{{ $Blogitem->img }}" alt="" style="height: 318px; width: 431px;">
                                </a>
                               
                            </div>
                            <div class="blog__content p-relative text-center">
                                <div class="blog__tag">
                                    @foreach ($BlogCategory as $BlogCategoryitem)
                                        <span>
                                            <a href="#">{{ $BlogCategoryitem->name }}</a>
                                        </span> 
                                    @endforeach
                                </div>
                                <h3 class="blog__title">
                                    <a href="{{ route('frontblogs',$Blogitem->slug) }}">{{ $Blogitem->name }}</a>
                                </h3>
                                {{-- <p>{{ $Blogitem->desc }}</p> --}}

                                <div class="blog__btn">
                                    <a href="{{ route('frontblogs',$Blogitem->slug) }}" class="link-btn">Continue Reading </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->
</main>


@endsection
