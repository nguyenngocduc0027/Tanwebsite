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
                    <li><strong><span>Quên mật khẩu</span></strong></li>
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
                                    <h1 class="title_heads a-center"><span>Quên Mật Khẩu</span></h1>
                                    <div id="forgot" class="section">
                                        <form method="post" action="#" id="customer_forgot" accept-charset="UTF-8">
                                            <div class="form-signup clearfix">
                                                <fieldset class="form-group">
                                                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                        class="form-control form-control-lg" value="" name="email"
                                                        id="customer_email" placeholder="Email" Required>
                                                </fieldset>
                                                <div class="pull-xs-left">
                                                    <button type="submit" value="Đăng nhập"
                                                        class="btn btn-primary btn-style">Đặt lại mật khẩu</button>
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
