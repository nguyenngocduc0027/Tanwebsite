@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Cài Đặt Website</h3>
                <h6 class="op-7 mb-2">Cài đặt thông tin website</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-success btn-round text-uppercase btn-update"><i
                        class="fas fa-check me-2"></i>Cập
                    nhật</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-line nav-color-secondary" id="line-tab" role="tablist">
                            <li class="nav-item submenu" role="presentation">
                                <a class="nav-link active" id="line-info-tab" data-bs-toggle="pill" href="#line-info"
                                    role="tab" aria-controls="pills-info" aria-selected="true">Thông Tin</a>
                            </li>
                            <li class="nav-item sub-menu" role="presentation">
                                <a class="nav-link" id="line-logo-tab" data-bs-toggle="pill" href="#line-logo"
                                    role="tab" aria-controls="pills-logo" aria-selected="true">Logo & Favicon</a>
                            </li>
                            <li class="nav-item submenu" role="presentation">
                                <a class="nav-link" id="line-pay-tab" data-bs-toggle="pill" href="#line-pay" role="tab"
                                    aria-controls="pills-pay" aria-selected="true">Thanh Toán</a>
                            </li>
                            <li class="nav-item submenu" role="presentation">
                                <a class="nav-link" id="line-seo-tab" data-bs-toggle="pill" href="#line-seo" role="tab"
                                    aria-controls="pills-seo" aria-selected="false" tabindex="-1">SEO</a>
                            </li>
                        </ul>
                        <div class="tab-content mb-1" id="line-tabContent">
                            <div class="tab-pane fade active show" id="line-info" role="tabpanel"
                                aria-labelledby="line-info-tab">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group" id="div-name">
                                            <label for="name">Tên Website</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Tên Website của bạn">
                                            {{-- <small id="emailHelp2" class="form-text text-danger">We'll never share your email with
                                                anyone
                                                else.</small> --}}
                                        </div>
                                        <div class="form-group" id="div-email">
                                            <label for="email">Email Website</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email Website của bạn">
                                        </div>
                                        <div class="form-group" id="div-phone">
                                            <label for="phone">Số Điện Thoại</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Số Điện Thoại">
                                        </div>
                                        <div class="form-group" id="div-address">
                                            <label for="address">Địa Chỉ</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Địa Chỉ">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group" id="div-facebook">
                                            <label for="facebook">Link Facebook</label>
                                            <input type="text" class="form-control" id="facebook" name="facebook"
                                                placeholder="Link Facebook">
                                        </div>
                                        <div class="form-group" id="div-shoppe">
                                            <label for="shoppe">Link Shoppe</label>
                                            <input type="text" class="form-control" id="shoppe" name="shoppe"
                                                placeholder="Link Shoppe">
                                        </div>
                                        <div class="form-group" id="div-lazada">
                                            <label for="lazada">Link Lazada</label>
                                            <input type="text" class="form-control" id="lazada" name="lazada"
                                                placeholder="Link Lazada">
                                        </div>
                                        <div class="form-group" id="div-tiktok">
                                            <label for="tiktok">Link Tiktok</label>
                                            <input type="text" class="form-control" id="tiktok" name="tiktok"
                                                placeholder="Link Tiktok">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group" id="div-subtitle">
                                            <label for="maps">Bản Đồ</label>
                                            <input type="text" class="form-control" id="maps" name="maps"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group" id="div-subtitle">
                                            <label for="subtitle">Mô tả ngắn</label>
                                            <textarea name="subtitle" id="subtitle" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-pay" role="tabpanel" aria-labelledby="line-pay-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Hình thức thanh toán:</label>
                                            </br>
                                            <div class="selectgroup selectgroup-pills" id="div-pay">
                                                <label class="selectgroup-item">
                                                    <input type="checkbox" name="momo" id="momo"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">Momo</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="checkbox" name="zalopay" id="zalopay"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">Zalo Pay</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="checkbox" name="qrcode" id="qrcode"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">QR Code</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="checkbox" name="visa" id="visa"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">Visa</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="checkbox" name="bank" id="bank"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">Chuyển Khoản</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-logo" role="tabpanel" aria-labelledby="line-logo-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group" id="div-logo">
                                            <label for="logo">Logo</label>
                                            <input type="file" class="form-control" id="logo" name="logo"
                                                placeholder="Logo">
                                        </div>
                                        <div class="form-group">
                                            <img id="preview-logo" src="" width="50%"
                                                style="margin-top:10px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group" id="div-favicon">
                                            <label for="favicon">Favicon</label>
                                            <input type="file" class="form-control" id="favicon" name="favicon"
                                                placeholder="Favicon">
                                        </div>
                                        <div class="form-group">
                                            <img id="preview-favicon" src="" width="30%"
                                                style="margin-top:10px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group" id="div-certi1">
                                            <label for="certi1">Chứng chỉ 1</label>
                                            <input type="file" class="form-control" id="certi1" name="certi1"
                                                placeholder="certi1">
                                        </div>
                                        <div class="form-group">
                                            <img id="preview-certi1" src="" width="30%"
                                                style="margin-top:10px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group" id="div-certi2">
                                            <label for="certi2">Chứng chỉ 2</label>
                                            <input type="file" class="form-control" id="certi2" name="certi2"
                                                placeholder="certi2">
                                        </div>
                                        <div class="form-group">
                                            <img id="preview-certi2" src="" width="30%"
                                                style="margin-top:10px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group" id="div-certi3">
                                            <label for="certi3">Chứng chỉ 3</label>
                                            <input type="file" class="form-control" id="certi3" name="certi3"
                                                placeholder="certi3">
                                        </div>
                                        <div class="form-group">
                                            <img id="preview-certi3" src="" width="30%"
                                                style="margin-top:10px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group" id="div-certi4">
                                            <label for="certi4">Chứng chỉ 4</label>
                                            <input type="file" class="form-control" id="certi4" name="certi4"
                                                placeholder="certi4">
                                        </div>
                                        <div class="form-group">
                                            <img id="preview-certi4" src="" width="30%"
                                                style="margin-top:10px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-seo" role="tabpanel" aria-labelledby="line-seo-tab">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group" id="seo-author">
                                            <label for="seo-author">Tác Giả</label>
                                            <input type="text" class="form-control" name="seo_author" id="seo_author"
                                                placeholder="Tác Giả hoặc Tên công ty">
                                        </div>
                                        <div class="form-group" id="div-seo-keywords">
                                            <label for="seo-keywords">Từ Khoá</label>
                                            <textarea name="seo-keywords" id="seo_keywords" class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group" id="seo-site_name">
                                            <label for="seo-site_name">Tên Webstie</label>
                                            <input type="text" class="form-control" name="seo_site_name"
                                                id="seo_site_name" placeholder="Tên Website">
                                        </div>
                                        <div class="form-group" id="div-seo-title">
                                            <label for="seo-title">Tiêu Đề</label>
                                            <textarea name="seo-title" id="seo_title" class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group" id="div-seo-image">
                                            <label for="seo-image">Hình Ảnh</label>
                                            <input type="file" class="form-control" id="seo_image" name="seo_image"
                                                placeholder="Hình Ảnh">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group" id="seo-description">
                                            <label for="seo-description">Mô Tả</label>
                                            <textarea name="seo_description" id="seo_description" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery js CDN -->

    <script>
        document.getElementById('logo').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-logo').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
        document.getElementById('favicon').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-favicon').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('certi1').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-certi1').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
        document.getElementById('certi2').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-certi2').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
        document.getElementById('certi3').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-certi3').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
        document.getElementById('certi4').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-certi4').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        // Show data from SettingController
        $(document).ready(function() {
            $.ajax({
                url: '{{ route('settings.data') }}',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#name').val(response.name);
                    $('#email').val(response.email);
                    $('#phone').val(response.phone);
                    $('#address').val(response.address);
                    $('#facebook').val(response.facebook);
                    $('#shoppe').val(response.shoppe);
                    $('#lazada').val(response.lazada);
                    $('#tiktok').val(response.tiktok);
                    $('#maps').val(response.maps);
                    $('#subtitle').val(response.subtitle);
                    $('#momo').prop('checked', response.momo == '1')
                    $('#zalopay').prop('checked', response.zalopay == '1');
                    $('#qrcode').prop('checked', response.qrcode == '1');
                    $('#visa').prop('checked', response.visa == '1');
                    $('#bank').prop('checked', response.bank == '1');

                    // Hiển thị ảnh logo và favicon
                    $('#preview-logo').attr('src', '/images/logo/' + response.logo);
                    $('#preview-favicon').attr('src', '/images/favicon/' + response.favicon);

                    $('#preview-certi1').attr('src', response.certi1);
                    $('#preview-certi2').attr('src', response.certi2);
                    $('#preview-certi3').attr('src', response.certi3);
                    $('#preview-certi4').attr('src', response.certi4);

                    // SEO
                    $('#seo_author').val(response.seo_author);
                    $('#seo_keywords').val(response.seo_keywords);
                    $('#seo_site_name').val(response.seo_site_name);
                    $('#seo_title').val(response.seo_title);
                    $('#seo_description').val(response.seo_description);
                },
                error: function(xhr, status, error) {
                    console.error('Error get data', error);
                },
            });
        });
        // Update data
        $(document).ready(function() {
            $('.btn-update').click(function(e) {
                e.preventDefault();

                let formData = new FormData();
                formData.append('name', $('#name').val());
                formData.append('email', $('#email').val());
                formData.append('phone', $('#phone').val());
                formData.append('address', $('#address').val());
                formData.append('subtitle', $('#subtitle').val());
                formData.append('facebook', $('#facebook').val());
                formData.append('shoppe', $('#shoppe').val());
                formData.append('lazada', $('#lazada').val());
                formData.append('tiktok', $('#tiktok').val());
                formData.append('maps', $('#maps').val());

                let logo = $('#logo')[0].files[0];
                if (logo) {
                    formData.append('logo', logo);
                }

                let favicon = $('#favicon')[0].files[0];
                if (favicon) {
                    formData.append('favicon', favicon);
                }

                let certi1 = $('#certi1')[0].files[0];
                if (certi1) {
                    formData.append('certi1', certi1);
                }
                let certi2 = $('#certi2')[0].files[0];
                if (certi2) {
                    formData.append('certi2', certi2);
                }
                let certi3 = $('#certi3')[0].files[0];
                if (certi3) {
                    formData.append('certi3', certi3);
                }
                let certi4 = $('#certi4')[0].files[0];
                if (certi4) {
                    formData.append('certi4', certi4);
                }

                formData.append('momo', $('#momo').is(':checked') ? 1 : 0);
                formData.append('zalopay', $('#zalopay').is(':checked') ? 1 : 0);
                formData.append('qrcode', $('#qrcode').is(':checked') ? 1 : 0);
                formData.append('visa', $('#visa').is(':checked') ? 1 : 0);
                formData.append('bank', $('#bank').is(':checked') ? 1 : 0);

                formData.append('seo_author', $('#seo_author').val());
                formData.append('seo_keywords', $('#seo_keywords').val());
                formData.append('seo_site_name', $('#seo_site_name').val());
                formData.append('seo_title', $('#seo_title').val());
                let seo_image = $('#seo_image')[0].files[0];
                if (seo_image) {
                    formData.append('seo_image', seo_image);
                }
                formData.append('seo_description', $('#seo_description').val());

                $.ajax({
                    url: '{{ route('settings.update') }}',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(res) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: res.message,
                            confirmButtonText: 'OK'
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi!',
                            text: xhr.responseJSON?.message ||'Cập nhật thất bại. Vui lòng thử lại.',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>
@endsection
