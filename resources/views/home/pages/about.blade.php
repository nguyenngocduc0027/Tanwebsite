@extends('home.index')
@section('content')
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="{{ route('home') }}" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr">></span>
                </li>
                <li><strong><span>Giới thiệu</span></strong></li>
            </ul>
        </div>
    </section>
    @include('home.section.whychoise')
    <section class="section-index section_about">
        <div class="bg-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-left">
                        <div class="product-content">
                            <div class="section-title">
                                <span class="sub-title">
                                    {{$about->title ?? ''}}
                                </span>
                                <h2>
                                   {{$about->subtitle ?? ''}}
                                </h2>
                                <div class="title-separator">
                                    <div class="separator-center"></div>
                                </div>
                            </div>
                            <div class="desc">
                                {!!$about->content ?? ''!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('home.section.feedback')
    @include('home.section.brand')
@endsection
