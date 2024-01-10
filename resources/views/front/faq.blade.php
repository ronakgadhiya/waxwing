@extends('front.main.headerfooter')
@section('title','FAQ')
@section('meta-description','')
@section('meta-keywords','')
@section('content')


<main>
    <!-- page__title-start -->
    <section class="page__title p-relative d-flex align-items-center" data-background="{{ asset('frontend/assets/img/bg/page-title-1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Faq-frequently asked question</h1>
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
                      <img src="{{ asset('uplods/page') }}/{{ $faq[0]['img'] }}" alt="">
                    </div>
             </div>
                <div class="col-xxl-8 col-xl-10">
                    <div class="about__history-wrapper">
                        <div class="about__history-title-area">
                            <span class="about__history-title-pre">frequently asked question</span>
                            @foreach ($faq as $faqitem)
                            <div class="accordion" id="accordion_{{$faqitem->id}}">
                                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading_{{$faqitem->id}}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$faqitem->id}}" aria-expanded="true" aria-controls="collapse_{{$faqitem->id}}">
                                        {{ $faqitem->name }}
                                        </button>
                                    </h2>
                                    <div id="collapse_{{$faqitem->id}}" class="accordion-collapse collapse" aria-labelledby="heading_{{$faqitem->id}}" data-bs-parent="#accordion_{{$faqitem->id}}">
                                        <div class="accordion-body">
                                            {!! $faqitem->desc !!}
                                        </div>
                                    </div>
                                    </div>
                                </div>   
                                @endforeach
                        </div>
                        <p class="about__history-text">
                            
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- about__history-end -->
</main>
@endsection