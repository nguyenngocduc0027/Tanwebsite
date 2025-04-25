@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Chỉnh sửa Blog - Tin Tức</h3>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-success btn-round text-uppercase btn-update-blog">
                    <i class="fas fa-save me-2"></i>Lưu
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card-body row">
                <div class="col-lg-8 col-md-8">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" id="name" value="{{ $blog->name }}">
                    </div>
                    <div class="form-group">
                        <label>Phụ đề</label>
                        <input type="text" class="form-control" id="subtitle" value="{{ $blog->subtitle }}">
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" id="content" rows="10">{{ $blog->content }}</textarea>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" class="form-control" id="image">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset($blog->image) }}" class="w-100" id="preview-image" alt="Ảnh Blog">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            const blogId = "{{ $blog->id }}";

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

            $('.btn-update-blog').click(function(e) {
                e.preventDefault();

                let formData = new FormData();
                formData.append('name', $('#name').val());
                formData.append('subtitle', $('#subtitle').val());
                formData.append('content', $('#content').val());

                let image = $('#image')[0].files[0];
                if (image) {
                    formData.append('image', image);
                }

                $.ajax({
                    url: `/blog/update/${blogId}`,
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
                            title: 'Thành công',
                            text: res.message
                        }).then(() => {
                            window.location.href = "{{ route('admin.blog') }}";
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
                                text: 'Đã xảy ra lỗi!',
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
