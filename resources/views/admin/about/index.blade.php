@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Thông tin giới thiệu</h3>
                <h6 class="op-7 mb-2">Thông tin giới thiệu</h6>
            </div>
       
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" class="form-control" id="title" value="{{ $about->title }}">
                        </div>

                        <div class="form-group">
                            <label>Phụ đề</label>
                            <input type="text" class="form-control" id="subtitle" value="{{ $about->subtitle }}">
                        </div>

                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea class="form-control tyni" id="content" rows="10">{{ $about->content }}</textarea>
                        </div>

                        <div class="text-end">
                            <button class="btn btn-primary btn-update-about">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.btn-update-about').click(function(e) {
            e.preventDefault();
            tinymce.triggerSave(); // Đồng bộ nội dung từ TinyMCE về textarea

            let formData = new FormData();
            formData.append('title', $('#title').val());
            formData.append('subtitle', $('#subtitle').val());
            formData.append('content', $('#content').val());

            $.ajax({
                url: "{{ route('admin.about.update') }}",
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
                        text: res.message
                    });
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
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
                }
            });
        });
    </script>
@endsection
