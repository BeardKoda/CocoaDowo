@extends('Sponsor.layout.app')

@section('content')
<div class="breadcrumb">
    <h1>Settings</h1>
    <ul>
        <li><a href="#"> Dashboard</a></li>

    </ul>
</div>

<div class="separator-breadcrumb border-top"></div>
@if(Auth::user()->profil)
  @include('Sponsor.pages.profile.edit')
@else
  @include('Sponsor.pages.profile.create')
@endif
@endsection
