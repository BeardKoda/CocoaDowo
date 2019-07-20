@extends('Sponsor.layout.app')

@section('content')
<h4 class="font-16"></h4>

    <div class="breadcrumb">
        <h1>CocoaDowo</h1>
        <ul>
            <li><a href="#">Welcome</a></li>
            <li>{{Auth::user()->name}}</li>
            <li>{{Auth::user()->email}}</li>

        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <!-- CARD ICON -->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon mb-4">
                        <div class="card-body text-center">
                        <a class="nav-item-hold" href="{{route('investments')}}">
                            <i class="i-Environmental-3"></i>
                            <p class="text-muted mt-2 mb-2">Investment Plans</p>
                        </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon mb-4">
                        <div class="card-body text-center">
                        <a class="nav-item-hold" href="{{route('locations')}}">
                            <i class="i-Landscape1"></i>
                            <p class="text-muted mt-2 mb-2">Browse All Locations</p>
                        </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon mb-4">
                        <div class="card-body text-center">
                        <a class="nav-item-hold" href="#user/forum">
                            <i class="i-Speach-Bubble-Dialog"></i>
                            <p class="text-muted mt-2 mb-2">Cocoa Community</p>
                        </a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-big mb-4">
                        <div class="card-body text-center">
                        <a class="nav-item-hold" href="#user/bibiliography">
                            <i class="i-Farmer"></i>
                            <p class="text-muted mt-2 mb-2">Bibiliography</p>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-big mb-4">
                        <div class="card-body text-center">
                        <a class="nav-item-hold" href="#user/settings">
                            <i class="i-Gear"></i>
                            <p class="text-muted mt-2 mb-2">Settings</p>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-big mb-4">
                        <div class="card-body text-center">
                        <a class="nav-item-hold" href="#user/support">
                            <i class="i-Bell"></i>
                            <p class="text-muted mt-2 mb-2">Support</p>
                         </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 
        <div class="col-lg-6 col-md-12">
            <div class="card mb-4">
                <div class="card-body p-0">
                    <h5 class="card-title m-0 p-3">Sales</h5>
                    <div id="echart4" style="height: 300px"></div>
                </div>
            </div>
        </div> -->

        <div class="col-lg-6 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Latest Investment Summary</div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <!-- <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead> -->
                                <br />
                                <tbody>
                                    <tr>
                                        <td>Product Investment</td>
                                        <td class="font-weight-bold"> {{$product->product->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Investment Type</td>
                                        <td class="font-weight-bold"> {{$product->product->type_->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Profits</td>
                                        <td class="font-weight-bold text-success">+ 15%</td>
                                    </tr>
                                    <tr>
                                        <td>Amount Invested</td>
                                        <td class="font-weight-bold">N{{$product->product->price}}</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Investment Plans</div>
                    @foreach($types as $type)
                    <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3">
                        <img class="avatar-md rounded mr-3" src="/front/img/about/cocoa.jpg" alt="">
                        <div class="flex-grow-1">
                            <h6 class="m-0">{{$type->name}}</h6>
                            <p class="m-0 text-small text-muted">{{$type->description}}</p>
                        </div>
                        <div>
                            <a class="btn btn-outline-primary btn-rounded btn-sm" href="{{route('investment-product', $product['id'])}}">Suscribe</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>




    </div>
@endsection
