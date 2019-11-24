@extends('front.layout.app')
@section('content')
<!-- about-us-area-start -->
<div class="about-area pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="about1-img bounce-animate mb-30">
                    <img src="/front/img/about/cocoa.jpg" width="500px" alt="" />
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 ">
                <div class="about-wrapper mb-30">
                    <div class="section-title section-title-cap mb-35">

                                <h2>Intercropped {{$product->name}}</h2>
                                <!-- <h2>Cocoa Intercropped With Maize {{$product->name}}</h2> -->
                                <h6>Project Duration:</h6><span>10 Years</span>
                                <h6>Location:</h6><span>Ago-Owu, Osun State</span>
                                <h3>Rate of returns</h3>
                                <h6>11%/yr before cocoa maturity (5years)</span></h6>
                                <h6>18%/yr at cocoa maturity (5years)</span></h6>
                                <br>
                                <h3>Investment Calculator</h3>
                                <h6>Funding Commitment:</h6><span>N{{$product->price}}</span>
                                <h6>Returns before cocoa maturity (per annum) </h6><span>N6,000.00</span>
                                <h6>Returns after cocoa maturity (per annum) </h6><span>N9,000.00</span>
                                <h6>Net Reimbursement: </h6><span>N125,000.00</span>
                                <br>
                                <h3>Project Details</h3>
                                <p>Cocoa is a perennial crop and investment in its production is long term. Better
                                    income, increased diversity and less environmental degradation are the
                                    advantages of intercropping in cocoa agroforestry. Intercropping cocoa with
                                    maize, cassava, and plantain takes place for four to five years whilst the trees
                                    mature.
                                </p><br>
                                <p>At Cocoadowo, we engage farmer partners to practice this agroforestry
                                    technique to ensure quick cover, reduce weed infestation, reduce management
                                    costs and increase financial performance. Environmental degradation is also
                                    minimized by managing ground cover through selection of species planted for
                                    shade, using companion crops, and selecting specific plantation densities (not
                                    more than 100-150 trees/ha).
                                    In West Africa, this diversified system have been shown to be more productive
                                    than cocoa monocrops and financially more viable.</p>
                                <br>
                                  <h6>Settlement Period/Pay Day:<span>At every 10th month after post-harvest activities and
                                     sales within the farm project cycle.</span></h6>

                    </div>
                    <a class="btn" href="{{route('investment-product', $product->id)}}">Sponsor Farm</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-us-area-end -->
@endsection
