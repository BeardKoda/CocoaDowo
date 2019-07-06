@extends('Sponsor.layout.app')

@section('content')
<form method="POST" action="{{ route('createpaymentplan2') }}" id="paymentForm">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="Plan Name" />
    <input type="text" name="amount" placeholder="Amount" />
    <input type="text" name="interval" placeholder="Interval" />
    <input type="text" name="duration" placeholder="Duration" /> <!-- Uncomment if you want to add a duration -->
    <input type="submit" value="Create"  />
</form>
@endsection