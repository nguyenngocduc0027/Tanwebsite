@extends('home.index')
@section('content')
    @include('home.section.slider')
    @include('home.section.service')
    @include('home.section.gift')
    @include('home.section.flashsale')
    {{-- @include('home.section.coupon') --}}
    @include('home.section.about')
    @include('home.section.whychoise')
    @include('home.section.product')
    @include('home.section.feedback')
    @include('home.section.blog')
    @include('home.section.brand')
@endsection
