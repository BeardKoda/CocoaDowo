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
                                <table>
                                    <tr>
                                        <th>Project Duration:</th>
                                        <td>10 Years</td>
                                    </tr>
                                    <tr>
                                        <th>Location:</th>
                                        <td>Ago-Owu, Osun State</td>
                                    </tr>
                                    <tr>
                                        <th>Rate of returns</th>
                                        <td>11%/yr before cocoa maturity (5years). <br>18%/yr at cocoa maturity (5years)</td>
                                    </tr>
                                    <tr><br><br><th colspan="3" class="text-center"><br/><h6>Investment Calculator</h6><br/></th></tr>
                                    <tr>
                                        <th>Funding Commitment:</th>
                                        <td>N{{$product->price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Returns before cocoa maturity <br />(per annum)</th>
                                        <td>N6,000.00</td>
                                    </tr>
                                    <tr>
                                        <th>Returns after  cocoa maturity <br />(per annum)</th>
                                        <td>N9,000.00</td>
                                    </tr>
                                    <tr>
                                        <th>Net Reimbursement:</th>
                                        <td>N125,000.00</td>
                                    </tr>
                                </table>
                                
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
