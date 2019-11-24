@extends('front.layout.app')
@section('content')
<!-- breadcrumb-area-start -->
<div class="" style="background-image:url(img/bg/bg15.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>About Us</h1>
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
                    <a class="btn" href="{{route('register')}}">Get Started</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-2-img text-lg-right mb-30">
                    <img src="/front/img/about/farmer4.jpg" alt="">
                    <div class="about-video-img">
                        <div class="pos-relative">
                            <img src="/front/img/about/about4.jpg" alt="">
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
                    <!-- <img src="/front/img/about/cocoa.jpg" width="200px" alt=""> -->
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
                    <a class="btn" href="{{route('farmers')}}">see more farmers</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <img src="/front/img/about/farmer3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <img src="/front/img/about/farmer2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <img src="/front/img/about/farmer6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <img src="/front/img/about/farmer5.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team-area-end -->

<!-- team-area-start -->
<div class="team-area pos-relative pb-10">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                <div class="section-title section-title-cap text-center mb-70">
                    <div class="section-icon section1-icon">
                        <img src="/front/img/icon/icon5.png" alt="">
                    </div>
                    <h1>Our Team</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl col-lg col-md-4 col-xs-6">
                <div class="team-wrapper single-team mb-30">
                    <div class="team-img">
                        <img src="/front/img/team/team1.jpg" alt="">
                        <div class="team-text">
                            <h4>Segun Joshua</h4>
                            <div class="team-social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg col-md-4 col-xs-6">
                <div class="team-wrapper single-team mb-30">
                    <div class="team-img">
                        <img src="/front/img/team/team2.jpg" alt="">
                        <div class="team-text">
                            <h4>Joshua Akinsuyi</h4>
                            <div class="team-social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg col-md-4 col-xs-6">
                <div class="team-wrapper single-team mb-30">
                    <div class="team-img">
                        <img src="/front/img/team/team3.jpg" alt="">
                        <div class="team-text">
                            <h4>Fredick Imoni</h4>
                            <div class="team-social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg col-md-6 col-xs-6">
                <div class="team-wrapper single-team mb-30">
                    <div class="team-img">
                        <img src="/front/img/team/team4.jpg" alt="">
                        <div class="team-text">
                            <h4>Sodiq Adesina</h4>
                            <div class="team-social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg col-md-6 col-xs-12">
                <div class="team-wrapper single-team mb-30">
                    <div class="team-img">
                        <img src="/front/img/team/team5.jpg" alt="">
                        <div class="team-text">
                            <h4>Oluwadamilola Ayoka</h4>
                            <div class="team-social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team-area-end -->
@endsection