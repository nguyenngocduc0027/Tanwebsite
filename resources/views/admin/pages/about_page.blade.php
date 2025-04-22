@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Quản lý nội dung trang giới thiệu</h3>
                <h6 class="op-7 mb-2">Cài đặt và quản lý thông tin nội dung trang giới thiệu</h6>
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
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group" id="div-name">
                                    <label for="name">Tên Popup Ads</label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Tên popup quảng cáo">
                                </div>
                                <div class="form-group" id="div-start">
                                    <label for="start">Ngày bắt đầu</label>
                                    <input type="date" class="form-control" name="start" id="start">
                                </div>
                                <div class="form-group" id="div-end">
                                    <label for="end">Ngày kết thúc</label>
                                    <input type="date" class="form-control" name="end" id="end">
                                </div>
                                <div class="form-group" id="div-url">
                                    <label for="url">Url</label>
                                    <input type="text" class="form-control" name="url" id="url">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group" id="div-image">
                                    <label for="image">Hình ảnh</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                </div>
                                <div class="form-group" id="div-preview">
                                    <img class="w-100" id="preview-image" src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery js CDN -->

    {{-- <script>
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-image').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        // Show data from SettingController
        $(document).ready(function() {
            $.ajax({
                url: '{{ route('popupAds.data') }}',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#name').val(response.name);
                    $('#start').val(response.start);
                    $('#end').val(response.end);
                    $('#url').val(response.url);

                    // Hiển thị ảnh image
                    $('#preview-image').attr('src', '/images/' + response.image);

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
                formData.append('start', $('#start').val());
                formData.append('end', $('#end').val());
                formData.append('url', $('#url').val());

                let image = $('#image')[0].files[0];
                if (image) {
                    formData.append('image', image);
                }

                $.ajax({
                    url: '/popup_ads/update',
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
                        });
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            // Hiển thị mỗi lỗi bằng Toastify
                            let errorMessage = Object.values(errors)[0][0];
                            Toastify({
                                text: errorMessage,
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                style: { background: "#e74c3c" }
                            }).showToast();
                        } else {
                            Toastify({
                                text: "Đã có lỗi xảy ra. Vui lòng thử lại.",
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                style: { background: "#e74c3c" }
                            }).showToast();
                        }
                    },
                });
            });
        });
    </script> --}}
@endsection
