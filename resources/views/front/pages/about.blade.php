@extends('front.layout.app')
@section('content')
<!-- breadcrumb-area-start -->
<div class="" style="background-image:url(img/bg/bg15.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>About Us</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.html">home</a></li>
                        <li><span>About Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- about-area-start -->
<div class="about-area pt-120 pb-170">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="about-wrapper single-about mb-30">
                    <div class="section-title section-title-cap">
                        <div class="section-icon">
                            <img src="/front/img/icon/icon1.png" width="100px" alt="">
                        </div>
                        <h1>The Enterprise</h1>
                        <p>Cocoadowo is an agroforestry enterprise offering an end to end agriculture services with strong commitment on deforestation-free cocoa farming and increased food security. <br>
                            We accelerate investment in long-term sustainable farming with an attractive revenue sharing model for consistent growth over time.<br>
                            This technology-led platform enables everyone (farm sponsors) empower smallholder farmers in order to cater for their various needs – seeds, fertilizers, farm tools, risk reduction packages, crop advisory and market.<br>
                            Registered farmers get access to a wide range of agricultural inputs and get customized crop reminder in their local language as well as crop monitoring support from field agents.<br> 
                            Farmers place their various demand related agri-input, farm visit and agri-output through mobile application and also get last mile services through assigned field agent within the region.
                            </p>
                    </div>
                    <a class="btn" href="#">Get Started</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-2-img text-lg-right mb-30">
                    <img src="/front/img/about/about2.jpg" alt="">
                    <div class="about-video-img">
                        <div class="pos-relative">
                            <img src="/front/img/about/about3.jpg" alt="">
                            <div class="about-video-icon">
                                <a class="play-btn popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- about-area-end -->

<!-- we-do-area-start -->
<div class="we-do-area mt-80" style="background-image:url(img/bg/bg16.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="we-do-img">
                    <img src="/front/img/bg/what.png" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="we-do-wrapper pt-115">
                    <div class="section-title section-title-cap mb-60">
                        <h2>The Team</h2>
                        <p>Our team understand the challenges in agribusiness and we’re happy to offer our personal expertise to achieve long-term capital appreciation through investment of pooled funds from farm sponsors into cultivation of carefully selected high quality crop varieties.<br>
                                We operate with climate-smart best practices by avoiding expansion into forest reserves on participating farms, target the most appropriate cocoa soils, focus on extension and inputs, promote use of reusable plant nursery bags, crop yield insurance and a data management platform to monitor and measure mitigation impact of our farmer partners.
                                </p>
                        
                    </div>

                    <ul class="nav we-do-tab mb-40" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home1">our mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile1">our vision</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="we-do-text">
                                <p>Cocoadowo is in business to consistently empower farmers to grow crops profitably and sustainably using a collective farm sponsorship scheme.
                                    </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="we-do-text">
                                <p>To become Africa’s fastest growing and most rewarding agroforestry enterprise, accelerating investment in climate-smart farming in order to enhance global food security. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- we-do-area-end -->

<!-- team-area-start -->
<div class="team-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="team-content mb-30" style="background-image:url(img/bg/bg2.png)">
                    <div class="section-title mb-65">
                        <div class="section-icon">
                            <img src="/front/img/icon/icon5.png" alt="">
                        </div>
                        <h1>our farmers</h1>
                        <p>At Cocoadowo, we engage farmer partners to practice this agroforestry technique to ensure quick cover, reduce weed infestation, reduce management costs and increase financial performance.</p>
                    </div>
                    <p>Farm project can be funded from a debit card, via internet banking and by bank deposit. Upon maturity of investment, interest and capital are paid into the sponsors verified bank account.
                        We perform due diligence to ensure proper farm management by our farmer partners and provide sponsors with real-time update on funded farm project including a process and income flowchart, making it easy to track farm project at every stage of development.
                    </p>
                    <a class="btn" href="#">see more farmers</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <img src="/front/img/team/team1.jpg" alt="">
                                <div class="team-text">
                                    <h4>Morris V. Vasquez</h4>
                                    <span>Organic Farmers</span>
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <img src="/front/img/team/team2.jpg" alt="">
                                <div class="team-text">
                                    <h4>Morris V. Vasquez</h4>
                                    <span>Organic Farmers</span>
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <img src="/front/img/team/team3.jpg" alt="">
                                <div class="team-text">
                                    <h4>Morris V. Vasquez</h4>
                                    <span>Organic Farmers</span>
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <img src="/front/img/team/team4.jpg" alt="">
                                <div class="team-text">
                                    <h4>Morris V. Vasquez</h4>
                                    <span>Organic Farmers</span>
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team-area-end -->

<!-- testimonial-area-start -->
<div class="testimonial-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                <div class="section-title text-center section-title-cap mb-65">
                    <div class="section-icon">
                        <img src="/front/img/icon/icon6.png" alt="">
                    </div>
                    <h1>client’s say</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmotempor incididunt labore dolore magna aliqua minim veniam</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-10 col-lg-10 offset-lg-1 offset-xl-1">
                <div class="testimonial-active owl-carousel">
                    <div class="testimonial-wrapper text-center">
                        <div class="testimonial-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="testimonial-text">
                            <p> Borem ipsum dolor sit amet consectetur adipisic ing elit sed do eiusmod tempor incididunt ut labore et dolore magaliqu enim ainim veniam.</p>
                            <h3>Johnny J. Stewart</h3>
                            <span>Web Designer</span>
                        </div>
                        <div class="testimonial-img">
                            <img src="/front/img/testimonial/test.png" alt="" />
                        </div>
                    </div>
                    <div class="testimonial-wrapper text-center">
                        <div class="testimonial-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="testimonial-text">
                            <p> Borem ipsum dolor sit amet consectetur adipisic ing elit sed do eiusmod tempor incididunt ut labore et dolore magaliqu enim ainim veniam.</p>
                            <h3>Johnny J. Stewart</h3>
                            <span>Web Designer</span>
                        </div>
                        <div class="testimonial-img">
                            <img src="/front/img/testimonial/test.png" alt="" />
                        </div>
                    </div>
                    <div class="testimonial-wrapper text-center">
                        <div class="testimonial-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="testimonial-text">
                            <p> Borem ipsum dolor sit amet consectetur adipisic ing elit sed do eiusmod tempor incididunt ut labore et dolore magaliqu enim ainim veniam.</p>
                            <h3>Johnny J. Stewart</h3>
                            <span>Web Designer</span>
                        </div>
                        <div class="testimonial-img">
                            <img src="/front/img/testimonial/test.png" alt="" />
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
</div>
<!-- testimonial-area-end -->
@endsection