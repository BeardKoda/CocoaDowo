@extends('Sponsor.layout.app')

@section('content')
<div class="breadcrumb">
    <h1>Wallet</h1>
    <ul>
        <li><a href="{{route('dashboard')}}">CocoaDowo</a></li>
        <li>Wallet</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>
<div class="row">
    <div class="offset-md-3 col-lg-4 col-md-6 col-sm-6">
        <div class="mb-4">
            <div class="card-body text-center">
                <i class="i-Home"></i>
                <h1 class="text-muted mt-2 mb-1">Coming Soon</h1>
                <p class="text-muted mt-2 mb-2">Wallet is Coming Soon</p>
                <br />
            </div>
        </div>
    </div>
</div>
@endsection
