@extends('home.index')
@section('content')
    <div class="layout-collection">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="{{ route('home') }}" title="Trang chủ"><span>Trang chủ</span></a>
                        <span class="mr_lr">></span>
                    </li>
                    <li><strong><span>{{$policy->title ?? ''}}</span></strong></li>
                </ul>
            </div>
        </section>
        <section class="page">
            <div class="container">
                <div class="pg_page bg-shadow margin-bottom-20">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title category-title">
                                <h1 class="title-head"><a title="{{$policy->title ?? ''}}">{{$policy->title ?? ''}}</a></h1>
                            </div>
                            <div class="content-page rte">

                                {!!$policy->content ?? ''!!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
