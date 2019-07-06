@extends('Sponsor.layout.app')

@section('content')
<div class="breadcrumb">
    <h1>Investments Type</h1>
    <ul>
        <li><a href="#">CocoaDowo</a></li>
        <li>{{$type}}</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>

            <div class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-big mb-4">
                        <div class="card-body text-center">
                            <i class="i-Environmental-3"></i>
                            <h4 class="text-muted mt-2 mb-2">{{$product['name']}}</h4>
                            <p class="text-muted mt-2 mb-2">N{{$product['price']}}</p>
                            <br />
                        <a class="nav-item-hold btn btn-primary btn-rounded" href="{{route('investment-product', $product['id'])}}">Invest Now
                        </a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
@endsection
