@extends('home.index')
@section('content')
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="{{ route('home') }}" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr">></span>
                </li>
                <li><strong><span>DashBoard</span></strong></li>
            </ul>
        </div>
    </section>
    <h1>User</h1>
@endsection
