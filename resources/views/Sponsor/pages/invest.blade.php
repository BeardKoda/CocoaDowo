@extends('Sponsor.layout.app')

@section('content')
<div class="breadcrumb">
    <h1>Investments Plans</h1>
    <ul>
        <li><a href="#">CocoaDowo</a></li>
        <li>Blank Page</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>

@php
$array = array(array('metaname' => 'color', 'metavalue' => 'blue'),
                array('metaname' => 'size', 'metavalue' => 'big'));
@endphp
<div class="row">
<div class="col-lg-2"></div>
    <div class="col-lg-8 col-md-8 col-sm-6">
        <div class="card card-icon-big mb-4">
            <div class="table-responsive text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Status </th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($products) == 0)
                    <tr>
                        <td colspan="8">No Investments Yet</td>
                    </tr>
                    @else
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->prod->name}}<br/><small>{{$product->prod->type_->name}}</small></td>
                            <td>{{$product->prod->price}}</td>
                            <td>{{$product->status}}</td>
                            <td>{{$product->updated_at}}</td>
                            <td>
                            @if($product->status == "processing")
                                {{-- <a class="btn btn-primary btn-rounded" href="{{route('investment-product', $product->id)}}">Invest Now
                                </a> --}}
                                <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="amount" value="{{$product->prod->price}}"/> <!-- Replace the value with your transaction amount -->
                                    <input type="hidden" name="payment_method" value="both" /> <!-- Can be card, account, both -->
                                    <input type="hidden" name="description" value="{{$product->prod->description}}" /> <!-- Replace the value with your transaction description -->
                                    <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
                                    <input type="hidden" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
                                    <input type="hidden" name="email" value="{{Auth::user()->email}}" /> <!-- Replace the value with your customer email -->
                                    <input type="hidden" name="firstname" value="{{Auth::user()->name}}" /> <!-- Replace the value with your customer firstname -->
                                    <input type="hidden" name="lastname" value="{{Auth::user()->lastname}}" /> <!-- Replace the value with your customer lastname -->
                                    <input type="hidden" name="metadata" value="{{ json_encode($array) }}" > <!-- Meta data that might be needed to be passed to the Rave Payment Gateway -->
                                    <input type="hidden" name="phonenumber" value="090929992892" /> <!-- Replace the value with your customer phonenumber -->
                                    <input type="hidden" name="paymentplan" value="{{$product->prod->plan_id}}" /> <!-- Ucomment and Replace the value with the payment plan id --><!-- Ucomment and  Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. -->
                                    <input type="hidden" name="logo" value="http://localhost:3345/front/img/logo/logo.png" /> <!-- Replace the value with your logo url (Optional, present in .env)-->
                                    <input type="submit" value="Buy" class="nav-item-hold btn btn-primary btn-rounded"/>
                                </form>
                            @endif
                            </td>
                        </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>
</div>
@endsection
