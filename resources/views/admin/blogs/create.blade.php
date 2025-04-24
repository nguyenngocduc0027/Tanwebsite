@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Thêm mới Blog - Tin Tức</h3>
                <h6 class="op-7 mb-2">Thêm mới thông tin blog - tin tức</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-primary btn-round text-uppercase btn-create-blog"><i
                        class="fas fa-check me-2"></i>Tạo</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tác Giả</label>
                                    <input type="text" class="form-control" name="author" id="author" placeholder="Tác Giả">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Đăng</label>
                                    <input type="date" class="form-control" name="date" id="date" placeholder="Ngày Đăng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Tiêu Đề">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phụ Đề</label>
                                    <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Phụ Đề">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh</label>
                                    <input type="file" class="form-control" name="image" id="image" placeholder="Hình Ảnh">
                                </div>
                                <div class="form-group">
                                    <img class="w-100 image-fluid" id="preview-image" src="" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nội Dung</label>
                                    <textarea name="content" id="content" class="form-control" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery js CDN -->

@endsection
