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
                                    <input type="text" class="form-control" name="author_name" id="author_name"
                                        placeholder="Tác Giả" value="{{ Auth::user()->name }}" disabled>
                                    <input type="hidden" name="author_id" id="author_id" value="{{ Auth::user()->id }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Đăng</label>
                                    <input type="date" class="form-control" name="date" id="date"
                                        placeholder="Ngày Đăng" value="{{ date('Y-m-d') }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Tiêu Đề">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phụ Đề</label>
                                    <input type="text" class="form-control" name="subtitle" id="subtitle"
                                        placeholder="Phụ Đề">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh</label>
                                    <input type="file" class="form-control" name="image" id="image"
                                        placeholder="Hình Ảnh">
                                </div>
                                <div class="form-group">
                                    <img class="w-100 image-fluid" id="preview-image" src="" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nội Dung</label>
                                    <textarea name="content tyni" id="content" class="form-control" rows="10"></textarea>
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
        $(document).ready(function() {
            // Preview ảnh
            $('#image').on('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#preview-image').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Xử lý tạo blog
            $('.btn-create-blog').click(function(e) {
                e.preventDefault();
                tinymce.triggerSave();
                let formData = new FormData();
                formData.append('author_id', $('#author_id').val());
                formData.append('date', $('#date').val());
                formData.append('name', $('#name').val());
                formData.append('subtitle', $('#subtitle').val());
                formData.append('content', $('#content').val());

                let image = $('#image')[0].files[0];
                if (image) {
                    formData.append('image', image);
                }

                $.ajax({
                    url: "{{ route('blog.store') }}",
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
                            title: 'Thành công',
                            text: res.message || 'Đã thêm blog thành công!'
                        }).then(() => {
                            window.location.href = '{{ route('admin.blog') }}';
                        });
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        if (errors) {
                            $.each(errors, function(key, value) {
                                Toastify({
                                    text: value,
                                    duration: 3000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "#f44336",
                                }).showToast();
                            });
                        } else {
                            Toastify({
                                text: 'Đã xảy ra lỗi không xác định.',
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "#f44336",
                            }).showToast();
                        }
                    }
                });
            });
        });
    </script>
@endsection
