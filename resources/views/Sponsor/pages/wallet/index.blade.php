@extends('Sponsor.layout.app')

@section('content')
<div class="breadcrumb">
    <h1>Wallet</h1>
    <ul>
        <li><a href="#">CocoaDowo</a></li>
        <li>Wallet</li>
    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-big mb-4">
                        <div class="card-body text-center">
                            <i class="i-Environmental-3"></i>
                            <h4 class="text-muted mt-2 mb-2">Withdrawal</h4>
                            <p class="text-muted mt-2 mb-2"></p>
                            <br />
                        <a class="nav-item-hold btn btn-primary btn-rounded" href="#">Widthrawal Now
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-icon-big mb-4">
                        <div class="card-body text-center">
                            <i class="i-Environmental-3"></i>
                            <h4 class="text-muted mt-2 mb-2">Deposit</h4>
                            <p class="text-muted mt-2 mb-2"></p>
                            <br />
                        <a class="nav-item-hold btn btn-primary btn-rounded" href="#">Deposit Now
                        </a>
                        </div>
                    </div>
                </div>
            </div>
@endsection
