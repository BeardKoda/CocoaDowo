@extends('front.layout.app')
@section('content')
    <!-- about-area-start -->
    <div class="about-area pt-120">
        <div class="container">
            <div class="row pb-80">
                <!-- product-area-start -->
                <div class="product-area pos-relative pt-1210 pb-60 res-pt-15">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                                <div class="section-title section-title-cap text-center mb-70">
                                    <div class="section-icon section1-icon">
                                            <img src="/front/img/shape/1.png" alt="" />
                                    </div>
                                    <h1>Invest In a Farm Project</h1>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="{{route('product', $product->id)}}"><img class="img-fluid w-100"
                                                src="/front/img/about/cocoa.jpg" width="200px" alt=""></a>
                                    </div>
                                    <div class="product-text ml-3">
                                        <h4 style="margin-bottom: 0.01px;"><a href="{{route('product', $product->id)}}">{{$product->name}}</a></h4>
                                        <small>{{$product->type_->name}}</small>

                                        <div class="pro-price">
                                            <h3>N50,000</h3>
                                            <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Ago-Owu, Osun
                                                State</p>
                                            <h6>Rate of returns</h6>
                                            <span class="w-100">11%/yr before cocoa maturity (5years)</span><br>
                                            <span>18%/yr at cocoa maturity (5years)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- product-area-end -->
            </div>
        </div>
    </div>
@endsection