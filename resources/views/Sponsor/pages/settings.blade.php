@extends('Sponsor.layout.app')

@section('content')
<div class="breadcrumb">
    <h1>Settings</h1>
    <ul>
        <li><a href="#"> Dashboard</a></li>

    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>
@include('Sponsor.pages.profile.edit')
@endsection
