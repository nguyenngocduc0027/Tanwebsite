@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Cài Đặt nội dung trang chủ</h3>
                <h6 class="op-7 mb-2">Cài đặt thông tin nội dung trang chủ</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-success btn-round text-uppercase btn-update">
                    <i class="fas fa-check me-2"></i>Cập nhật
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-line nav-color-secondary" id="line-tab" role="tablist">
                            <li class="nav-item submenu">
                                <a class="nav-link active" id="line-service-tab" data-bs-toggle="pill" href="#line-service"
                                    role="tab">Dịch Vụ</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link" id="line-set-product-tab" data-bs-toggle="pill" href="#line-set-product"
                                    role="tab">SET</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link" id="line-sale-tab" data-bs-toggle="pill" href="#line-sale"
                                    role="tab">Khuyến Mãi</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link" id="line-coupon-tab" data-bs-toggle="pill" href="#line-coupon"
                                    role="tab">Mã Giảm Giá</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link" id="line-about-tab" data-bs-toggle="pill" href="#line-about"
                                    role="tab">Giới Thiệu</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link" id="line-why-tab" data-bs-toggle="pill" href="#line-why"
                                    role="tab">Vì Sao</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link" id="line-product-tab" data-bs-toggle="pill" href="#line-product"
                                    role="tab">Sản Phẩm</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link" id="line-feedback-tab" data-bs-toggle="pill" href="#line-feedback"
                                    role="tab">Phản Hồi</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link" id="line-blog-tab" data-bs-toggle="pill" href="#line-blog"
                                    role="tab">Tin Tức</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link" id="line-partner-tab" data-bs-toggle="pill" href="#line-partner"
                                    role="tab">Đối Tác</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content mb-1" id="line-tabContent">
                            <div class="tab-pane fade show active" id="line-service" role="tabpanel"
                                aria-labelledby="line-service-tab">
                                <div class="row">
                                    <!-- Nội dung dịch vụ -->
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Dịch Vụ 1</label>
                                            <input type="text" class="form-control" id="service1" name="service1"
                                                placeholder="Nhập tiêu đề">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nội Dung 1</label>
                                            <input type="text" class="form-control" id="content1" name="content1"
                                                placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Hình Ảnh tỉ lệ 1:1</label>
                                            <!-- Nút dấu + -->
                                            <button type="button" class="btn-xs btn-icon btn-round btn-primary"
                                                onclick="document.getElementById('image1').click()" style="">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <!-- Input ẩn để chọn ảnh -->
                                            <input type="file" class="form-control d-none" id="image1"
                                                name="image1" accept="image/*"
                                                onchange="previewImage(this, 'preview-image1')">

                                            <!-- Ảnh sẽ hiển thị ở đây sau khi chọn -->
                                            <div class="mt-2">
                                                <img id="preview-image1" src="" alt="Preview" class="img-fluid"
                                                    style="max-height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Nội dung dịch vụ -->
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Dịch Vụ 2</label>
                                            <input type="text" class="form-control" id="service2" name="service2"
                                                placeholder="Nhập tiêu đề">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nội Dung 1</label>
                                            <input type="text" class="form-control" id="content2" name="content2"
                                                placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Hình Ảnh tỉ lệ 1:1</label>
                                            <!-- Nút dấu + -->
                                            <button type="button" class="btn-xs btn-icon btn-round btn-primary"
                                                onclick="document.getElementById('image2').click()" style="">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <!-- Input ẩn để chọn ảnh -->
                                            <input type="file" class="form-control d-none" id="image2"
                                                name="image2" accept="image/*"
                                                onchange="previewImage(this, 'preview-image2')">

                                            <!-- Ảnh sẽ hiển thị ở đây sau khi chọn -->
                                            <div class="mt-2">
                                                <img id="preview-image2" src="" alt="Preview" class="img-fluid"
                                                    style="max-height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Nội dung dịch vụ -->
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Dịch Vụ 3</label>
                                            <input type="text" class="form-control" id="service3" name="service3"
                                                placeholder="Nhập tiêu đề">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nội Dung 3</label>
                                            <input type="text" class="form-control" id="content3" name="content3"
                                                placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Hình Ảnh tỉ lệ 1:1</label>
                                            <!-- Nút dấu + -->
                                            <button type="button" class="btn-xs btn-icon btn-round btn-primary"
                                                onclick="document.getElementById('image3').click()" style="">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <!-- Input ẩn để chọn ảnh -->
                                            <input type="file" class="form-control d-none" id="image3"
                                                name="image3" accept="image/*"
                                                onchange="previewImage(this, 'preview-image3')">

                                            <!-- Ảnh sẽ hiển thị ở đây sau khi chọn -->
                                            <div class="mt-2">
                                                <img id="preview-image3" src="" alt="Preview"
                                                    class="img-fluid " style="max-height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Nội dung dịch vụ -->
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Dịch Vụ 4</label>
                                            <input type="text" class="form-control" id="service4" name="service4"
                                                placeholder="Nhập tiêu đề">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nội Dung 4</label>
                                            <input type="text" class="form-control" id="content4" name="content4"
                                                placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Hình Ảnh tỉ lệ 1:1</label>
                                            <!-- Nút dấu + -->
                                            <button type="button" class="btn-xs btn-icon btn-round btn-primary"
                                                onclick="document.getElementById('image4').click()" style="">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <!-- Input ẩn để chọn ảnh -->
                                            <input type="file" class="form-control d-none" id="image4"
                                                name="image4" accept="image/*"
                                                onchange="previewImage(this, 'preview-image4')">

                                            <!-- Ảnh sẽ hiển thị ở đây sau khi chọn -->
                                            <div class="mt-2">
                                                <img id="preview-image4" src="" alt="Preview" class="img-fluid"
                                                    style="max-height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-set-product" role="tabpanel"
                                aria-labelledby="line-set-product-tab">
                                <div class="row">
                                    <!-- Nội dung SET sản phẩm -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Tiêu đề SET sản phẩm</label>
                                            <input type="text" class="form-control" id="set_product_title"
                                                name="set_product_title" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phụ đề SET sản phẩm</label>
                                            <input type="text" class="form-control" id="set_product_subtitle"
                                                name="set_product_subtitle" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Mô tả SET sản phẩm</label>
                                            <textarea name="set_product_description" class="form-control" id="set_product_description" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-sale" role="tabpanel" aria-labelledby="line-sale-tab">
                                <div class="row">
                                    <!-- Nội dung khuyen mai -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Tiêu đề Sale sản phẩm</label>
                                            <input type="text" class="form-control" id="sale_product_title"
                                                name="sale_product_title" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phụ đề Sale sản phẩm</label>
                                            <input type="text" class="form-control" id="sale_product_subtitle"
                                                name="sale_product_subtitle" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Mô tả Sale sản phẩm</label>
                                            <textarea name="sale_product_description" class="form-control" id="sale_product_description" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-coupon" role="tabpanel"
                                aria-labelledby="line-coupon-tab">
                                <div class="row">
                                    <!-- Nội dung mã giảm giá -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Tiêu đề mã giảm giá</label>
                                            <input type="text" class="form-control" id="coupon_title"
                                                name="coupon_title" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phụ đề mã giảm giá</label>
                                            <input type="text" class="form-control" id="coupon_subtitle"
                                                name="coupon_subtitle" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Mô tả mã giảm giá</label>
                                            <textarea name="coupon_description" class="form-control" id="coupon_description" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-about" role="tabpanel" aria-labelledby="line-about-tab">
                                <div class="row">
                                    <!-- Nội dung giới thiệu -->
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Tiêu đề giới thiệu</label>
                                            <input type="text" class="form-control" id="about_title"
                                                name="about_title" placeholder="Nhập nội dung">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phụ đề giới thiệu</label>
                                            <input type="text" class="form-control" id="about_subtitle"
                                                name="about_subtitle" placeholder="Nhập nội dung">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Mô tả giới thiệu</label>
                                            <textarea name="about_description" class="form-control" id="about_description" rows="7"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Hình Ảnh </label>
                                            <!-- Nút dấu + -->
                                            <button type="button" class="btn-xs btn-icon btn-round btn-primary"
                                                onclick="document.getElementById('image_about').click()" style="">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                            <!-- Input ẩn để chọn ảnh -->
                                            <input type="file" class="form-control d-none" id="image_about"
                                                name="image_about" accept="image/*"
                                                onchange="previewImage(this, 'preview-image_about')">

                                            <!-- Ảnh sẽ hiển thị ở đây sau khi chọn -->
                                            <div class="mt-2">
                                                <img id="preview-image_about" src="" alt="Preview"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-why" role="tabpanel" aria-labelledby="line-why-tab">
                                <div class="row">
                                    <!-- Nội dung vì sao chọn -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Tiêu đề vì sao chọn chúng tôi</label>
                                            <input type="text" class="form-control" id="why_title" name="why_title"
                                                placeholder="Nhập nội dung">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phụ đề vì sao chọn chúng tôi</label>
                                            <input type="text" class="form-control" id="why_subtitle"
                                                name="why_subtitle" placeholder="Nhập nội dung">
                                        </div>
                                        @for ($i = 1; $i <= 6; $i++)
                                            <div class="row">
                                                <!-- Nội dung dịch vụ -->
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Vì Sao
                                                            {{ $i }}</label>
                                                        <input type="text" class="form-control"
                                                            id="why{{ $i }}" name="why{{ $i }}"
                                                            placeholder="Nhập tiêu đề">
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Nội Dung
                                                            {{ $i }}</label>
                                                        <input type="text" class="form-control"
                                                            id="content_why{{ $i }}"
                                                            name="content_why{{ $i }}"
                                                            placeholder="Nhập nội dung">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Hình Ảnh tỉ lệ
                                                            1:1</label>
                                                        <!-- Nút dấu + -->
                                                        <button type="button"
                                                            class="btn-xs btn-icon btn-round btn-primary"
                                                            onclick="document.getElementById('image_why{{ $i }}').click()"
                                                            style="">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                        <!-- Input ẩn để chọn ảnh -->
                                                        <input type="file" class="form-control d-none"
                                                            id="image_why{{ $i }}"
                                                            name="image_why{{ $i }}" accept="image/*"
                                                            onchange="previewImage(this, 'preview-image_why{{ $i }}')">

                                                        <!-- Ảnh sẽ hiển thị ở đây sau khi chọn -->
                                                        <div class="mt-2">
                                                            <img id="preview-image_why{{ $i }}" src=""
                                                                alt="Preview" class="img-fluid d-none"
                                                                style="max-height: 100px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Hình Ảnh </label>
                                                <!-- Nút dấu + -->
                                                <button type="button" class="btn-xs btn-icon btn-round btn-primary"
                                                    onclick="document.getElementById('img_why').click()" style="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                                <!-- Input ẩn để chọn ảnh -->
                                                <input type="file" class="form-control d-none" id="img_why"
                                                    name="img_why" accept="image/*"
                                                    onchange="previewImage(this, 'preview-img_why')">

                                                <!-- Ảnh sẽ hiển thị ở đây sau khi chọn -->
                                                <div class="mt-2">
                                                    <img id="preview-img_why" src="" alt="Preview"
                                                        class="img-fluid" style="max-height: 100px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-product" role="tabpanel"
                                aria-labelledby="line-product-tab">
                                <div class="row">
                                    <!-- Nội dung sản phẩm -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Tiêu đề sản phẩm</label>
                                            <input type="text" class="form-control" id="product_title"
                                                name="product_title" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phụ đề sản phẩm</label>
                                            <input type="text" class="form-control" id="product_subtitle"
                                                name="product_subtitle" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Mô tả sản phẩm</label>
                                            <textarea name="product_description" class="form-control" id="product_description" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-feedback" role="tabpanel"
                                aria-labelledby="line-feedback-tab">
                                <div class="row">
                                    <!-- Nội dung phản hồi -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Tiêu đề phản hồi</label>
                                            <input type="text" class="form-control" id="feedback_title"
                                                name="feedback_title" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phụ đề phản hồi</label>
                                            <input type="text" class="form-control" id="feedback_subtitle"
                                                name="feedback_subtitle" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Mô tả phản hồi</label>
                                            <textarea name="feedback_description" class="form-control" id="feedback_description" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-blog" role="tabpanel" aria-labelledby="line-blog-tab">
                                <div class="row">
                                    <!-- Nội dung tin tức -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Tiêu đề blog</label>
                                            <input type="text" class="form-control" id="blog_title" name="blog_title"
                                                placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phụ đề blog</label>
                                            <input type="text" class="form-control" id="blog_subtitle"
                                                name="blog_subtitle" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Mô tả blog</label>
                                            <textarea name="blog_description" class="form-control" id="blog_description" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-partner" role="tabpanel"
                                aria-labelledby="line-partner-tab">
                                <div class="row">
                                    <!-- Nội dung đối tác -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Tiêu đề đối tác</label>
                                            <input type="text" class="form-control" id="partner_title"
                                                name="partner_title" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Phụ đề đối tác</label>
                                            <input type="text" class="form-control" id="partner_subtitle"
                                                name="partner_subtitle" placeholder="Nhập nội dung">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Mô tả phản hồi</label>
                                            <textarea name="partner_description" class="form-control" id="partner_description" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End tab content -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery js CDN -->
    <script>
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script>
        // Show data from SettingController
        $(document).ready(function() {
            $.ajax({
                url: '{{ route('homePage.data') }}',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#service1').val(response.service1);
                    $('#content1').val(response.content1);
                    $('#preview-image1').attr('src', response.image1);
                    $('#service2').val(response.service2);
                    $('#content2').val(response.content2);
                    $('#preview-image2').attr('src', response.image2);
                    $('#service3').val(response.service3);
                    $('#content3').val(response.content3);
                    $('#preview-image3').attr('src', response.image3);
                    $('#service4').val(response.service4);
                    $('#content4').val(response.content4);
                    $('#preview-image4').attr('src', response.image4);
                    $('#set_product_title').val(response.set_product_title);
                    $('#set_product_subtitle').val(response.set_product_subtitle);
                    $('#set_product_description').val(response.set_product_description);
                    $('#sale_product_title').val(response.sale_product_title);
                    $('#sale_product_subtitle').val(response.sale_product_subtitle);
                    $('#sale_product_description').val(response.sale_product_description);
                    $('#coupon_title').val(response.coupon_title);
                    $('#coupon_subtitle').val(response.coupon_subtitle);
                    $('#coupon_description').val(response.coupon_description);
                    $('#about_title').val(response.about_title);
                    $('#about_subtitle').val(response.about_subtitle);
                    $('#about_description').val(response.about_description);
                    $('#preview-image_about').attr('src', response.image_about);
                    $('#why_title').val(response.why_title);
                    $('#why_subtitle').val(response.why_subtitle);
                    $('#why1').val(response.why1);
                    $('#content_why1').val(response.content_why1);
                    $('#preview-image_why1').attr('src', response.image_why1);
                    $('#why2').val(response.why2);
                    $('#content_why2').val(response.content_why2);
                    $('#preview-image_why2').attr('src', response.image_why2);
                    $('#why3').val(response.why3);
                    $('#content_why3').val(response.content_why3);
                    $('#preview-image_why3').attr('src', response.image_why3);
                    $('#why4').val(response.why4);
                    $('#content_why4').val(response.content_why4);
                    $('#preview-image_why4').attr('src', response.image_why4);
                    $('#why5').val(response.why5);
                    $('#content_why5').val(response.content_why5);
                    $('#preview-image_why5').attr('src', response.image_why5);
                    $('#why6').val(response.why6);
                    $('#content_why6').val(response.content_why6);
                    $('#preview-image_why6').attr('src', response.image_why6);
                    $('#preview-img_why').attr('src', response.img_why);
                    $('#product_title').val(response.product_title);
                    $('#product_subtitle').val(response.product_subtitle);
                    $('#product_description').val(response.product_description);
                    $('#feedback_title').val(response.feedback_title);
                    $('#feedback_subtitle').val(response.feedback_subtitle);
                    $('#feedback_description').val(response.feedback_description);
                    $('#blog_title').val(response.blog_title);
                    $('#blog_subtitle').val(response.blog_subtitle);
                    $('#blog_description').val(response.blog_description);
                    $('#partner_title').val(response.partner_title);
                    $('#partner_subtitle').val(response.partner_subtitle);
                    $('#partner_description').val(response.partner_description);

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
                formData.append('service1', $('#service1').val());
                formData.append('content1', $('#content1').val());
                let image1 = $('#image1')[0].files[0];
                if (image1) {
                    formData.append('image1', image1);
                };
                formData.append('service2', $('#service2').val());
                formData.append('content2', $('#content2').val());
                let image2 = $('#image2')[0].files[0];
                if (image2) {
                    formData.append('image2', image2);
                };
                formData.append('service3', $('#service3').val());
                formData.append('content3', $('#content3').val());
                let image3 = $('#image3')[0].files[0];
                if (image3) {
                    formData.append('image3', image3);
                };
                formData.append('service4', $('#service4').val());
                formData.append('content4', $('#content4').val());
                let image4 = $('#image4')[0].files[0];
                if (image4) {
                    formData.append('image4', image4);
                };
                formData.append('set_product_title', $('#set_product_title').val());
                formData.append('set_product_subtitle', $('#set_product_subtitle').val());
                formData.append('set_product_description', $('#set_product_description').val());
                formData.append('sale_product_title', $('#sale_product_title').val());
                formData.append('sale_product_subtitle', $('#sale_product_subtitle').val());
                formData.append('sale_product_description', $('#sale_product_description').val());
                formData.append('coupon_title', $('#coupon_title').val());
                formData.append('coupon_subtitle', $('#coupon_subtitle').val());
                formData.append('coupon_description', $('#coupon_description').val());
                formData.append('about_title', $('#about_title').val());
                formData.append('about_subtitle', $('#about_subtitle').val());
                formData.append('about_description', $('#about_description').val());
                let image_about = $('#image_about')[0].files[0];
                if (image_about) {
                    formData.append('image_about', image_about);
                };
                formData.append('why_title', $('#why_title').val());
                formData.append('why_subtitle', $('#why_subtitle').val());
                formData.append('why1', $('#why1').val());
                formData.append('content_why1', $('#content_why1').val());
                let image_why1 = $('#image_why1')[0].files[0];
                if (image_why1) {
                    formData.append('image_why1', image_why1);
                };
                formData.append('why2', $('#why2').val());
                formData.append('content_why2', $('#content_why2').val());
                let image_why2 = $('#image_why2')[0].files[0];
                if (image_why2) {
                    formData.append('image_why2', image_why2);
                };
                formData.append('why3', $('#why3').val());
                formData.append('content_why3', $('#content_why3').val());
                let image_why3 = $('#image_why3')[0].files[0];
                if (image_why3) {
                    formData.append('image_why3', image_why3);
                };
                formData.append('why4', $('#why4').val());
                formData.append('content_why4', $('#content_why4').val());
                let image_why4 = $('#image_why4')[0].files[0];
                if (image_why4) {
                    formData.append('image_why4', image_why4);
                };
                formData.append('why5', $('#why5').val());
                formData.append('content_why5', $('#content_why5').val());
                let image_why5 = $('#image_why5')[0].files[0];
                if (image_why5) {
                    formData.append('image_why5', image_why5);
                };
                formData.append('why6', $('#why6').val());
                formData.append('content_why6', $('#content_why6').val());
                let image_why6 = $('#image_why6')[0].files[0];
                if (image_why6) {
                    formData.append('image_why6', image_why6);
                };
                let img_why = $('#img_why')[0].files[0];
                if (img_why) {
                    formData.append('img_why', img_why);
                };
                formData.append('product_title', $('#product_title').val());
                formData.append('product_subtitle', $('#product_subtitle').val());
                formData.append('product_description', $('#product_description').val());
                formData.append('feedback_title', $('#feedback_title').val());
                formData.append('feedback_subtitle', $('#feedback_subtitle').val());
                formData.append('feedback_description', $('#feedback_description').val());
                formData.append('blog_title', $('#blog_title').val());
                formData.append('blog_subtitle', $('#blog_subtitle').val());
                formData.append('blog_description', $('#blog_description').val());
                formData.append('partner_title', $('#partner_title').val());
                formData.append('partner_subtitle', $('#partner_subtitle').val());
                formData.append('partner_description', $('#partner_description').val());

                $.ajax({
                    url: '{{ route('homePage.update') }}',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(res) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: res.message,
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi!',
                            text: xhr.responseJSON?.message ||
                                'Cập nhật thất bại. Vui lòng thử lại.',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>
@endsection
