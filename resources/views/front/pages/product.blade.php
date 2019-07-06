@extends('front.layout.app')
@section('content')
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
                        <h2>{{$product->name}}</h2>

                        <span>Funding Commtment: N{{$product->price}} per Unit</span>

                        <h6>ROI before maturity (5yrs): <span> @11% (N27,500 in 5years)</span></h6>
                        <h6>ROI after maturity (5yrs): <span> @18% N9,000/yr (N45,000 in 5years)</span></h6>
                        <h6>Net Reimbursement: <span>N122,500 per unit</h6>
                        <h6>Settlement Period/Pay Day: At every 10th month after post-harvest activities and
                            sales within the farm project cycle.</h6>

                            <br>

                        <h3>Project Details</h3>
                        <h6>Cocoa is a perennial crop and investment in its production is long term. Better
                            income, increased diversity and less environmental degradation are the
                            advantages of intercropping in cocoa agroforestry. Intercropping cocoa with
                            maize, cassava, and plantain takes place for four to five years whilst the trees
                            mature.
                        </h6><br>
                        <p>At Cocoadowo, we engage farmer partners to practice this agroforestry
                            technique to ensure quick cover, reduce weed infestation, reduce management
                            costs and increase financial performance. Environmental degradation is also
                            minimized by managing ground cover through selection of species planted for
                            shade, using companion crops, and selecting specific plantation densities (not
                            more than 100-150 trees/ha).
                            In West Africa, this diversified system have been shown to be more productive
                            than cocoa monocrops and financially more viable.</p>

                    </div>
                    <a class="btn" href="{{route('investment-product', $product->id)}}">Sponsor Farm</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-us-area-end -->
@endsection
