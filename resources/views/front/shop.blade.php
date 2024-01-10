@extends('front.main.headerfooter')
@section('title','Shop')
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
                                <h1>Shop</h1>
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

            <!-- product-details-start -->
            <section class="shop-details pt-90 pb-90" style="background-image: linear-gradient(to right, , #ffffff);">
                <div class="container">
                    <div class="row">
                            <div class="shop-main-area mb-40">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade active show" id="tab1">
                                        <div class="row">
                                            @foreach ($Shopcat as $productitem)
                                            <div class="product__item-single  col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6"  >
                                                    <div class="product__item mb-20" style="box-shadow:0px 0px 10px grey;">
                                                        <div class="product__thumb w-img fix">
                                                            <a href="{{ route('frontproduct',$productitem->id) }}">
                                                                <img src="{{ asset('uplods/productcategory') }}/{{ $productitem->img }}" height="250" width="100" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product__content text-center">
                                                            <div class="product__tag">
                                                            </div>
                                                            <h6 class="product__title mb-5">
                                                                <a href="{{ route('frontproduct',$productitem->id) }}">{{ $productitem->name }}</a>
                                                            </h6>
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
                            <div class="shop-pagination">
                                <div class="basic-pagination">
                                    <nav>
                                       <ul>
                                          <li style="text-decoration: none;">
                                            {!! $Shopcat->links() !!}
                                          </li>
                                       </ul>
                                     </nav>
                                 </div>
                            </div>
                        
                    </div>
                </div>
            </section>
            <!-- product-details-end -->

            <!-- shop modal start -->
           
            <!-- shop modal end -->

        </main>


@endsection