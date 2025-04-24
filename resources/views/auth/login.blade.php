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
                    <li><strong><span>Đăng Nhập</span></strong></li>
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
                                    <h1 class="title_heads a-center"><span>Đăng nhập</span></h1>
                                    <div id="login" class="section">
                                        <form id="customer_login" method="POST">
                                            @csrf
                                            <div class="form-signup clearfix">
                                                <fieldset class="form-group">
                                                    <input type="email" class="form-control form-control-lg"
                                                        name="email" id="customer_email" placeholder="Email" required>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <input type="password" class="form-control form-control-lg"
                                                        name="password" id="customer_password" placeholder="Mật khẩu"
                                                        required>
                                                </fieldset>
                                                <div class="pull-xs-left">
                                                    <button type="submit" class="btn btn-primary btn-style">Đăng
                                                        nhập</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="login-message" class="mt-2 text-danger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        document.getElementById('customer_login').addEventListener('submit', function (e) {
            e.preventDefault();

            const email = document.getElementById('customer_email').value;
            const password = document.getElementById('customer_password').value;


            fetch("{{ route('login') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Content-Type": "application/json",
                    "Accept": "application/json"
                },
                body: JSON.stringify({ email, password })
            })
            .then(res => res.json())
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Đăng nhập thành công!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location.href = data.redirect;
                    });
                } else {
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#ff4d4f",
                        stopOnFocus: true,
                    }).showToast();
                }
            })
            .catch(error => {
                Toastify({
                    text: "Lỗi kết nối, vui lòng thử lại.",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#ff4d4f",
                    stopOnFocus: true,
                }).showToast();
            });
        });
    </script>

@endsection
