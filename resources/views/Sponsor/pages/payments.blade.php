@extends('Sponsor.layout.app')

@section('content')
@php
$array = array(array('metaname' => 'color', 'metavalue' => 'blue'),
                array('metaname' => 'size', 'metavalue' => 'big'));
@endphp
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-icon-big mb-4">
            <div class="card-body text-center">
                <i class="i-Environmental-3"></i>
                <h4 class="text-muted mt-2 mb-2">{{$product['name']}}</h4>
                <p class="text-muted mt-2 mb-2">N{{$product['price']}}</p>
                <br />
                <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                    {{ csrf_field() }}
                    <input type="hidden" name="amount" value="{{$product['price']}}" readonly/> <!-- Replace the value with your transaction amount -->
                    <input type="hidden" name="payment_method" value="both" /> <!-- Can be card, account, both -->
                    <input type="hidden" name="description" value="{{$product['description']}}" /> <!-- Replace the value with your transaction description -->
                    <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
                    <input type="hidden" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
                    <input type="hidden" name="email" value="{{Auth::user()->email}}" /> <!-- Replace the value with your customer email -->
                    <input type="hidden" name="firstname" value="Oluwole" /> <!-- Replace the value with your customer firstname -->
                    <input type="hidden" name="lastname" value="Adebiyi" /> <!-- Replace the value with your customer lastname -->
                    <input type="hidden" name="metadata" value="{{ json_encode($array) }}" > <!-- Meta data that might be needed to be passed to the Rave Payment Gateway -->
                    <input type="hidden" name="phonenumber" value="090929992892" /> <!-- Replace the value with your customer phonenumber -->
                    <input type="hidden" name="paymentplan" value="{{$product['plan_id']}}" /> <!-- Ucomment and Replace the value with the payment plan id --><!-- Ucomment and  Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. -->
                    <input type="hidden" name="logo" value="/front/img/logo/logo.png" /> <!-- Replace the value with your logo url (Optional, present in .env)-->
                    <input type="submit" value="Buy" class="nav-item-hold btn btn-primary btn-rounded"/>
                </form>
            {{-- <a class="nav-item-hold btn btn-primary btn-rounded" href="{{route('investment-product', $product['id'])}}">Invest Now --}}
            </a>
            </div>
        </div>
    </div>
</div>
@endsection
