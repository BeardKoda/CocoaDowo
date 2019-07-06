@extends('front.layout.app')
@section('content')
            <!-- slider-start -->
            <div class="slider-area pos-relative">
                <div class="shape d-none d-xl-block">
                    <div class="shape-item slider-01 bounce-animate"><img src="/front/img/shape/shape1.png" width="400px" alt=""></div>
                </div>
                <div class="slider-active">
                    <div class="single-slider slider-height d-flex align-items-center" data-background="/front/img/slider/slider2.png">
                        <div class="container">
                            <div class="row ">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="slider-content slider-text">
                                         <h2 data-animation="fadeInUp" data-delay=".3s">A New Way To Invest In Agriculture</h2>
                                        <h4 data-animation="fadeInUp" data-delay=".5s">Cocoadowo is an agroforestry enterprise offering an end to end agriculture services with strong commitment on deforestation-free cocoa farming and increased food security.</h4>
                                        <a class="btn" href="{{route('register')}}" data-animation="fadeInUp" data-delay=".7s">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- slider-start -->

             <!-- product-area-start -->
            <div class="product-area pos-relative pt-120 pb-120">
                <div class="shape d-none d-xl-block">
                    <div class="shape-item pro-01 bounce-animate"><img src="/front/img/shape/pro1.png" alt=""></div>
                    <div class="shape-item pro-02 bounce-animate"><img src="/front/img/shape/pro2.png" alt=""></div>
                    <div class="shape-item pro-03 bounce-animate"><img src="/front/img/shape/pro3.png" alt=""></div>
                    <div class="shape-item pro-04 bounce-animate"><img src="/front/img/shape/pro4.png" alt=""></div>
                </div>
                <div class="container">
                    <div class="row">
                       <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title section-title-cap text-center mb-70">
                                <div class="section-icon section1-icon">
                                    <img src="/front/img/icon/icon8.png" alt="">
                                </div>
                                <h1>Invest In a Farm Project</h1>
                                <p></p>
                            </div>
                         </div>
                     </div>
                     <div class="row">
                        @foreach($products as $product)
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="product-wrapper text-center mb-30">
                                <div class="product-img">
                                    <a href="{{route('product', $product->id)}}"><img src="/front/img/about/1.png" width="200px" alt=""></a>
                                </div>
                                <div class="product-text">
                                    <h4><a href="{{route('product', $product->id)}}">{{$product->name}}</a></h4>
                                    <h6>{{$product->type_->name}}</h6>
                                    
                                    <div class="pro-price">
                                        <span>Funding Commtment: N50,000.00</span>
                                        <p>Net Reimbursement: N122,500</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                     <!-- <div class="row">
                         <div class="col-xl-12">
                             <div class="product-button product1-button mt-30 text-center">
                                 <a class="btn" href="#">View more</a>
                             </div>
                         </div>
                     </div> -->
                </div>
            </div>
            <!-- product-area-end -->

            <!-- about-us-area-start -->
            <div class="about-area pt-120 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about1-img bounce-animate mb-30">
                                <img src="/front/img/about/1.png" width="700px" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 ">
                            <div class="about-wrapper mb-30">
                                <div class="section-title section-title-cap mb-35">
                                <h2>Welcome To Cocoadowo</h2>
                                <p>We are learning from Cocoa and Forestry Initiative of World Cocoa Foundation which aims to create a global movement for deforestation-free cocoa farming. We have learnt their pilot efforts to scale up cocoa sustainability through transparency, accountability and partnership. Therefore, we generate several millions in funding commitments from farm sponsors and empower our farmer partners to cultivate hectares of farm land for sustainable development at all levels. 
                                </p>
                            <a class="btn" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-us-area-end -->

             <!-- features-area-start -->
            <div class="features-area pt-110 pb-90" style="background-image:url(img/bg/bg1.jpg)">
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
                                    <br/>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="features-wrapper text-center mb-30">
                                <div class="features-img">
                                    <img src="/front/img/features/2.png" width="100px" alt="" />
                                </div>
                                <div class="features-text">
                                    <h6>Equity and Reward Based Farm Sponsorships Plans</h6>
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
                                    <br/>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- features-area-end -->

           <!-- How-to-area-end -->
              <div class="product-area pos-relative pt-110 pb-85 fix">

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
                            <ul class="nav product-tab justify-content-center mb-75" id="myTab" role="tablist">
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                
                                    <div class="product-wrapper text-center mb-30">
                                        <div class="product-img">
                                            <img src="/front/img/shape/add-user.svg" width="100px" alt="Create Account" />
                                        </div><br/>
                                        <h6> Create an account</h6>
                                    </div>

                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6">

                                    <div class="product-wrapper text-center mb-30">
                                        <div class="product-img">
                                            <img src="/front/img/shape/approval.svg" width="100px" alt="Verify Account" />
                                        </div><br/>
                                        <h6> Verify Account</h6>
                                    </div>

                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6">

                                    <div class="product-wrapper text-center mb-30">
                                        <div class="product-img">
                                            <img src="/front/img/shape/file.svg" width="100px" alt="Select Plans" />
                                        </div><br/>
                                        <h6> Select Plan</h6>
                                    </div>

                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6">

                                    <div class="product-wrapper text-center mb-30">
                                        <div class="product-img">
                                            <img src="/front/img/shape/fund.svg" width="100px" alt="Fund Project" />
                                        </div><br/>
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

              <!-- about-area-start -->
            <div class="about-area pt-120 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about1-img bounce-animate mb-30">
                                <img src="/front/img/choose/01.jpg" width="700px" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-wrapper mb-30">
                                <div class="section-title section-title-cap mb-35">
                                    <h1>The Process</h1>
                                    <p>Cocoa is a personal crop Intercropped with other with other food crops such as cassava, plantain, banana etc. And Investment in it's production is long term. </p>
                                    <p>Farm sponsors can pledge money for cultivation of cocoa farm project for a period of 10 years in return for dividend received from generated income after harvest. </p>
                               </div>
                                <ul class="about-list">
                                    <li>
                                        <div class="about-icon">
                                            <img src="/front/img/icon/1.png" width="100px" alt="" />
                                        </div>
                                        <div class="about-list-text">
                                            <h3>ROI - Return Of Investment</h3>
                                            <p>Sponsors receives an annual return of 10% on income generated from food crops intercropped within the first five years. And at cocoa maturity, sponsors are entitled to a yearly 15% return on investment for the last five
                                            years within the cocoa prdoduction cycle. </p>
                                       </div>
                                    </li>
                                    <li>
                                        <div class="about-icon">
                                            <img src="/front/img/icon/2.png" width="100px" alt="" />
                                        </div>
                                        <div class="about-list-text">
                                            <h3>Payment</h3>
                                            <p>Farm sponsors can fund a cocoa farm by card, internet banking, bank deposit or by raising a direct debit instruction to make payment on an installment(PaySmallSmall) which will be deducted monthly from sponsor's personal
                                            bank account. The maximum period of installment for PSS plan is within six months.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-icon">
                                            <img src="/front/img/icon/3.png" width="100px" alt="">
                                        </div>
                                        <div class="about-list-text">
                                            <h3>Tracking</h3>
                                            <p>Farm Sponsors get real-time upodate on funded farm project including a process and income flowchart, making it easy to track the cocoa farm project at every development stage.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-area-end -->

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
@endsection