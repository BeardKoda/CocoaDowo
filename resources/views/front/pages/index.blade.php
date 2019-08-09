@extends('front.layout.app')
@section('content')
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="shape d-none d-xl-block">
            <div class="shape-item slider-01 bounce-animate"><img src="/front/img/shape/shape1.png" width="400px" alt="">
            </div>
        </div>
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" data-background="/front/img/bg/bg-1.jpg">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-8 col-lg-8">
                            <div class="slider-content slider-text">
                                <h2 class="text-white" data-animation="fadeInUp" data-delay=".3s">Accelerating
                                    Investment In Sustainable Farming
                                </h2>
                                <h4 class="text-white" data-animation="fadeInUp" data-delay=".5s">Cocoadowo is an
                                    agroforestry
                                    enterprise offering an end to end agriculture services with strong commitment on
                                    deforestation-free cocoa farming and increased food security.</h4>
                                <a class="btn" href="#" data-animation="fadeInUp" data-delay=".7s">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- slider-start -->

    <!-- about-area-start -->
    <div class="about-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about1-img bounce-animate mt-56 mb-30">
                        <img class="img-fluid w-100" src="/front/img/choose/01.jpg" width="" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-wrapper mb-30">
                        <div class="section-title section-title-cap mb-35">
                            <h1>The Process</h1>
                            <p>Cocoa is a small perennial tree crop that is intercropped with crops such as cassava,
                                banana, maize, oil palm, coconut and other cash crops for a diversified income.
                                Investment in its production is long term.
                            </p>
                            <p>Farm sponsors can pledge money to cultivate a farm project for a return on income generated after harvest, which has a ten years’
                                investment lifecycle.
                                <br>The funding commitment covers farm inputs, seeds, farm tools, logistics,
                                operation, crop yield insurance, harvesting and post-harvest activities.</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row pb-80">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-list">
                        <div class="about-icon">
                            <img src="/front/img/icon/1.png" width="100px" alt="" />
                        </div>
                        <div class="about-list-text">
                            <h3>Returns After Harvest</h3>
                            <p>The one-off funding yields over a hundred percent returns on a long term.
                                Farm sponsors are rewarded year by year after harvest which is
                                continuing within the ten years’ project lifecycle.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-list mb-10">
                        <div class="about-icon">
                            <img src="/front/img/icon/2.png" width="100px" alt="" />
                        </div>
                        <div class="about-list-text">
                            <h3>Payment</h3>
                            <p>Farm projects are funded from a debit card, via internet banking and by
                                bank deposit. Upon maturity of investment, interest and capital are paid
                                into the sponsors verified bank account.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="about-list">
                        <div class="about-icon">
                            <img src="/front/img/icon/3.png" width="100px" alt="">
                        </div>
                        <div class="about-list-text">
                            <h3>Tracking</h3>
                            <p>We perform due diligence to ensure proper management of participating
                                farms by our farmer partners.
                                We provide sponsors with real-time update on funded farm project
                                including a process and income flowchart, making it easy to track farm
                                project at every stage of development.
                            </p>
                        </div>
                    </div>
                </div>

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
                            @foreach($Lproducts as $product)
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
                            @foreach($Lproducts as $product)
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
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="product-button product1-button mt-30 text-center">
                                    <a class="btn" href="#">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-area-end -->

                <!-- about-us-area-start -->
                <div class="about-area pt-30 res-pt-15">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="about1-img bounce-animate mb-30">
                                    <img class="img-fluid w-100 " src="/front/img/about/farmer.jpg" height="600" alt="" />
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 ">
                                <div class="about-wrapper mb-30">
                                    <div class="section-title section-title-cap mb-35">
                                        <h2>Improving and Diversifying Farmer Income
                                        </h2>
                                        <p>Poverty and deforestation are part of the urgent challenges facing
                                            farmers in West Africa today. Despite progress, some farmers haven’t
                                            experienced improvements in their income or living conditions at an
                                            adequate pace and deforestation continues with farming occurring in
                                            protected forest areas.
                                        <br><br>
                                            Cocoadowo is taking a different approach that creates a pathway for
                                            farmers and their communities to thrive. Our effective, scalable and
                                            innovative solution enables everyone to empower farmers, from anywhere
                                            in the world.
                                        </p>
                                        
                                        <a class="btn" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- about-us-area-end -->

                    <!-- features-area-start -->
                    <div class="features-area pt-70 pb-40" style="background-image:url(/front/img/bg/bg1.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                                    <div class="section-title text-center section-circle mb-70">
                                        <div class="section-img">
                                            <img src="/front/img/shape/1.png" alt="" />
                                        </div>
                                        <h1>Features</h1>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="features-wrapper text-center mb-30">
                                        <div class="features-img">
                                            <img src="/front/img/features/1.png" width="100px" alt="" />
                                        </div>
                                        <div class="features-text">
                                            <h6>Farm Mapping</h6>
                                            <br />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="features-wrapper text-center mb-30">
                                        <div class="features-img">
                                            <img src="/front/img/features/2.png" width="100px" alt="" />
                                        </div>
                                        <div class="features-text">
                                            <h6>Reward Based Farm Sponsorships Plans</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="features-wrapper text-center mb-30">
                                        <div class="features-img">
                                            <img src="/front/img/features/3.png" width="100px" alt="" />
                                        </div>
                                        <div class="features-text">
                                            <h6>Return of Investment Calculator</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="features-wrapper text-center mb-30">
                                        <div class="features-img">
                                            <img src="/front/img/features/4.png" width="100px" alt="" />
                                        </div>
                                        <div class="features-text">
                                            <h6>Farm Tour Request</h6>
                                            <br />

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- features-area-end -->

                    <!-- How-to-area-end -->
                    <div class="product-area pos-relative pt-70 fix">

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                                    <div class="section-title text-center section-circle mb-70">
                                        <div class="section-img">
                                            <img src="/front/img/shape/1.png" alt="" />
                                        </div>
                                        <h1>How To Get Started</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <ul class="nav product-tab justify-content-center mb-75 res-mb-75" id="myTab"
                                        role="tablist">
                                        <div class="col-xl-3 col-lg-3 col-md-6">

                                            <div class="product-wrapper text-center pt-4 mb-10">
                                                <div class="product-img">
                                                    <img src="/front/img/shape/add-user.svg" width="100px"
                                                        alt="Create Account" />
                                                </div><br />
                                                <h6> Create an account</h6>
                                            </div>

                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6">

                                            <div class="product-wrapper text-center pt-4 mb-10">
                                                <div class="product-img">
                                                    <img src="/front/img/shape/approval.svg" width="100px"
                                                        alt="Verify Account" />
                                                </div><br />
                                                <h6> Verify Account</h6>
                                            </div>

                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6">

                                            <div class="product-wrapper text-center pt-4 mb-10">
                                                <div class="product-img">
                                                    <img src="/front/img/shape/file.svg" width="100px"
                                                        alt="Select Plans" />
                                                </div><br />
                                                <h6> Select Plan</h6>
                                            </div>

                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6">

                                            <div class="product-wrapper text-center pt-4 mb-10">
                                                <div class="product-img">
                                                    <img src="/front/img/shape/fund.svg" width="100px"
                                                        alt="Fund Project" />
                                                </div><br />
                                                <h6> Fund Project</h6>
                                            </div>

                                        </div>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- cta-area-start -->
                    <div class="cta-area  pt-115 pb-120" style="background-image:url(/front/img/bg/bg2.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-10 col-lg-10 offset-lg-1 offset-xl-1">
                                    <div class="cta-wrapper text-center">
                                        <div class="cta-text">
                                            <span>welcome to Cocoadowo</span>
                                            <h1>Want To Invest in Cocoa Farming??</h1>

                                            <a class="btn" href="#">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cta-area-end -->
                </div>
            </div>
        </div>
        <!-- brand-area-satrt -->
        <div class="brand-area pt-50 grey1-bg">
            <div class="container">
                <div class="brand-bg pb-50">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="bottom-logo">
                                <a href="index.html"><img src="/front/img/logo/logo.png" width="200px" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-4">
                            <div class="brand-wrapper">
                                <div class="brand-active owl-carousel">
                                    <div class="brand-img text-center">
                                        <img src="/front/img/brand/1.png" alt="" />
                                    </div>
                                    <div class="brand-img text-center">
                                        <img src="/front/img/brand/2.png" alt="" />
                                    </div>
                                    <div class="brand-img text-center">
                                        <img src="/front/img/brand/4.png" alt="" />
                                    </div>
                                    <div class="brand-img text-center">
                                        <img src="/front/img/brand/5.png" alt="" />
                                    </div>
                                    <div class="brand-img text-center">
                                        <img src="/front/img/brand/1.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5">
                            <div class="bottom-social-icon text-md-right">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->
    </div>
@endsection