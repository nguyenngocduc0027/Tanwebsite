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
                    <li><strong><span>Đăng Ký</span></strong></li>
                </ul>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="page_login">
                    <div class="row">
                        <div
                            class="col-lg-4 col-md-6 col-sm-12 col-xl-4 offset-0 offset-xl-4 offset-lg-4 offset-md-3 offset-xl-3 col-12">
                            <div class="page-login pagecustome clearfix">
                                <div class="wpx">
                                    <h1 class="title_heads a-center"><span>Đăng Ký</span></h1>
                                    <div id="register" class="section">
                                        <form method="post" action="{{ route('register') }}" id="customer_register" accept-charset="UTF-8">
                                            @csrf
                                        
                                            <div class="form-signup clearfix">
                                                <fieldset class="form-group">
                                                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                        class="form-control form-control-lg" value="" name="email"
                                                        id="customer_email" placeholder="Email" Required>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <input type="text"
                                                        class="form-control form-control-lg" value="" name="name"
                                                        id="customer_name" placeholder="Họ tên" Required>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <input type="text" pattern="0[0-9]{9,10}"
                                                        class="form-control form-control-lg" value="" name="phone"
                                                        id="customer_phone" placeholder="Số điện thoại" Required>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <input type="password" class="form-control form-control-lg"
                                                        value="" name="password" id="customer_password"
                                                        placeholder="Mật khẩu" Required>
                                                </fieldset>
                                                <div class="pull-xs-left">
                                                    <button type="submit" value="Đăng ký"
                                                        class="btn btn-primary btn-style">Đăng ký</button>
                                                </div>
                                                <div class="btn_boz_khac">
                                                    <div class="btn_khac">
                                                        <a href="{{route('login')}}" class="btn-link-style btn-register"
                                                            title="Đăng nhập tại đây">Đăng nhập tại đây</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
