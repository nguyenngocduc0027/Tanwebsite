@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase"> Chỉnh sửa Quà Tặng</h3>
                <h6 class="op-7 mb-2">Cài đặt và quản lý danh sách thông tin quà tặng</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="button" class="btn btn-success btn-round text-uppercase btn-update-gift"><i
                        class="fas fa-save me-2"></i>Cập nhật</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- Thêm hàng input tên quà tặng --}}
                        {{-- Thêm Textarea input nội dung content --}}
                        <form id="gift-package-form">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tên Gói Quà Tặng</label>
                                <input type="text" class="form-control" name="name" value="{{ $gift->name }}"
                                    placeholder="Nhập tên gói quà tặng" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nội dung mô tả</label>
                                <textarea class="form-control" name="content" rows="5" placeholder="Nhập nội dung mô tả gói quà tặng...">{!! $gift->content !!}</textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery js CDN -->
    <script>
        $(document).ready(function() {

            // Sự kiện click nút cập nhật
            $('.btn-update-gift').on('click', function() {
                $('#gift-package-form').submit();
            });
            // Add validation for the form submission
            $('#gift-package-form').on('submit', function(e) {
                e.preventDefault();
                // Perform additional validation if needed
                // Submit the form via AJAX or any other method
                $.ajax({
                    url: '{{ route('gifts.update', $gift->id) }}', // Update the URL to use the update route
                    method: 'PUT', // Change method to PUT for updating
                    data: $(this).serialize(),
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: response.message
                        }).then(() => {
                            window.location.href = '{{ route('admin.gift') }}';
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi!',
                            text: xhr.responseJSON.message
                        });
                    }
                });
            });
        });
    </script>
@endsection
