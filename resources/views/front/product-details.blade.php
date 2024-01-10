@extends('front.main.headerfooter')
@section('content')


        <main>
            <!-- page__title-start -->
            <section class="page__title p-relative d-flex align-items-center" data-background="{{ asset('frontend/assets/img/bg/page-title-1.jpg') }}">
                {{-- <img src="{{ asset('frontend/assets/img/bg/spic.png')}}" style="width:200px;height: 100px;"> --}}
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page__title-inner text-center">
                                <h1>{{ $Product[0]['name'] }}</h1>
                                <div class="page__title-breadcrumb">                                 
                                    <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <h4>{{ $Product[0]['productCategory']['name'] }}</h4>
                                    </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page__title-end -->
<style>
    .product__modal-content-2 table {
	width: 100%;
	border-color: gray;
    border-radius: 30px;
}

.product__modal-content-2 table tbody tr{
    background-color:#8DC63E;
    text-align: center;
}
</style>
            <!-- product-details-start -->
            <section class="product-details pt-90 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="product__modal-box d-flex">
                                <div class="product__modal-nav mr-20">
                                    
                                </div>
                                <div class="tab-content mb-20" id="product-detailsContent">
                                    <div class="tab-pane fade active show" id="pro-one" role="tabpanel" aria-labelledby="pro-one-tab">
                                        <div class="product__modal-img product__thumb w-img" style="box-shadow: 0px 0px 10px grey;">
                                            <img  style="width: 278px;height: 400px;" src="{{ asset('uplods/product') }}/{{ $Product[0]['img'] }}" alt="">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="product__modal-content-2">
                                
                                <h4><a href="">Product: {{ $Product[0]['name'] }}</a></h4>
                                <h4>{!!  $Product[0]['desc'] !!}</h4>
                                
                                <div class="product__price mb-25">
                                    
                                   
                                </div>
                                <div class="product__modal-des mb-30">
                                    <h4>Measurement:</h4>
                                    <p>{!! $Product[0]['measurement'] !!}</p>
                                </div>
                               
                                <div class="pro-quan-area d-sm-flex align-items-center">
                                    
                                    <div class="pro-cart-btn">
                                        {{-- <div class="add-cart-btn mb-20" data-bs-target="#ModalInquiry" onclick="chechdataInquiry()">Inquiry Form</div> --}}
                                        <a class="add-cart-btn mb-20" data-bs-toggle="modal" data-bs-target="#ModalInquiry" >Inquiry Form</a>
                                    </div>
                                </div>
                                <div class="product__tag mb-25">
                                    <span class="ct mr-20"></span>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-xl-12">
                            <div class="trending__info text-left">
                                <h5>Description</h5>
                                <p>{{ $Product[0]['meta_desc'] }}</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row mt-50">
                        <div class="col-xl-12">
                            <div class="trending__info text-center">
                                <h5>Best Products</h5>
                                <p>This Is the Best Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($bproduct as $item)
                        <div class="product__item-single  col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6"  >
                                <div class="product__item mb-20" style="box-shadow:0px 0px 10px grey;">
                                    <div class="product__thumb w-img fix">
                                        <a href="{{ route('productdetail',$item->slug) }}">
                                            <img src="{{ asset('uplods/product') }}/{{ $item->img }}" alt="" style="height: 318px; width: 315px;">
                                        </a>
                                    </div>
                                    <div class="product__content text-center">
                                        <div class="product__tag">
                                        </div>
                                        <h4 class="product__title mb-5">
                                            <a href="{{ route('productdetail',$item->slug) }}">{{ $item->name }}</a>
                                        </h4>
                                       
                                    </div>
                                </div>
                        
                        </div>
                        @endforeach 
                    </div>

                </div>
            </section>
            <!-- product-details-end -->
        </main>

@include('front.product-inquiry.product-inquiry-form')
@endsection