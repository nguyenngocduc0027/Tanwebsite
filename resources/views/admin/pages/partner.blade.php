@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Quản lý danh sách đối tác</h3>
                <h6 class="op-7 mb-2">Cài đặt và quản lý danh sách thông tin đối tác</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-primary btn-round text-uppercase btn-add" data-bs-toggle="modal"
                    data-bs-target="#add-partner"><i class="fas fa-plus me-2"></i>Thêm</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Đường dẫn ảnh</th>
                                        <th style="width: 10%">Tác Vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($partners as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->image }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#edit-partner" title="Edit"
                                                        class="btn btn-link btn-primary btn-lg btn-edit-partner"
                                                        data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                                        data-image="{{ $item->image }}">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-bs-toggle="tooltip" title="Remove"
                                                        class="btn btn-link btn-danger btn-delete-partner"
                                                        data-id='{{ $item->id }}'>
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add -->
    <div class="modal fade" id="add-partner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới đối tác</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group" id="div-name">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="add-name" name="name" placeholder="Tên">
                        </div>
                        <div class="form-group" id="div-image">
                            <label for="image">Hình ảnh</label>
                            <input type="file" class="form-control" id="add-image" name="image" accept="image/*">
                        </div>
                        <div class="form-group" id="div-preview-image">
                            <img id="preview-image" src="" style="width: 50%; display: none;" alt="Preview">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-add-partner">Thêm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Add -->
    <div class="modal fade" id="edit-partner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sửa thông tin đối tác</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="text" name="id" id="edit-id" hidden>
                        <div class="form-group" id="div-name">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="edit-name" name="name" placeholder="Tên">
                        </div>
                        <div class="form-group" id="div-image">
                            <label for="image">Hình ảnh</label>
                            <input type="file" class="form-control" id="edit-image" name="image" accept="image/*">
                        </div>
                        <div class="form-group" id="div-preview-image">
                            <img id="preview-edit-image" src="" style="width: 50%; display: none;" alt="Preview">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success btn-update-partner">Cập Nhật</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery js CDN -->

    <script>
        $(document).ready(function() {
            // Preview image before upload
            $('#add-image').on('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#preview-image').attr('src', e.target.result).show();
                    }
                    reader.readAsDataURL(file);
                } else {
                    $('#preview-image').attr('src', '').hide();
                }
            })
            // Edit image preview
            $('#edit-image').on('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#preview-edit-image').attr('src', e.target.result).show();
                    }
                    reader.readAsDataURL(file);
                } else {
                    $('#preview-edit-image').attr('src', '').hide();
                }
            })
            // add partner
            $('.btn-add-partner').on('click', function() {
                const formData = new FormData();
                formData.append('name', $('#add-name').val());
                formData.append('image', $('#add-image')[0].files[0]);

                $.ajax({
                    url: '{{ route('partner.store') }}',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#add-partner').modal('hide');
                        // Reset form fields
                        $('#add-name').val('');
                        $('#add-image').val('');
                        $('#preview-image').attr('src', '').hide();

                        // Hiển thị Swal khi thành công
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: response.message ||
                                'Đối tác đã được thêm.',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            location.reload();
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

            // Edit
            $(document).on('click', '.btn-edit-partner', function() {
                const id = $(this).data('id');
                const name = $(this).data('name');
                const image = $(this).data('image');

                $('#edit-id').val(id);
                $('#edit-name').val(name);
                if (image) {
                    $('#preview-edit-image').attr('src', image).show();
                } else {
                    $('#preview-edit-image').attr('src', '').hide();
                }
                $('#edit-partner').modal('show');
            });
            // Update
            $('.btn-update-partner').on('click', function() {
                const id = $('#edit-id').val();
                const formData = new FormData();
                formData.append('name', $('#edit-name').val());
                const imageFile = $('#edit-image')[0].files[0];
                if (imageFile) {
                    formData.append('image', imageFile);
                }
                formData.append('_method', 'PUT');
                $.ajax({
                    url: `/admin/partner/${id}`, // Update URL to match partner
                    method: 'POST', // Change method to POST
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    success: function(response) {
                        $('#edit-partner').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Cập nhật thành công!',
                            text: response.message || 'Đã được cập nhật.',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, message) {
                                Toastify({
                                    text: message[0],
                                    duration: 3000,
                                    close: true,
                                    gravity: 'top',
                                    position: 'right',
                                    style: { background: "#e74c3c" }
                                }).showToast();
                            });
                        } else {
                            Toastify({
                                text: "Đã có lỗi xảy ra.",
                                duration: 3000,
                                close: true,
                                gravity: 'top',
                                position: 'right',
                                style: { background: "#e74c3c" }
                            }).showToast();
                        }
                    }
                });
            });

            // Delete
            $(document).on('click', '.btn-delete-partner', function() {
                const id = $(this).data('id');

                Swal.fire({
                    title: 'Bạn có chắc chắn muốn xoá?',
                    text: "Thao tác này sẽ không thể hoàn tác!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Xoá',
                    cancelButtonText: 'Huỷ'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: `/admin/partner/${id}`,
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Đã xoá!',
                                    text: response.message
                                }).then(() => {
                                    location.reload();
                                });
                            },
                            error: function() {
                                Toastify({
                                    text: "Không thể xoá. Đã có lỗi xảy ra.",
                                    duration: 3000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "#e74c3c"
                                }).showToast();
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
