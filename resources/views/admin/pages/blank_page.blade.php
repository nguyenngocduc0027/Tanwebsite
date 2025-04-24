@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Quản lý nội dung các trang khác</h3>
                <h6 class="op-7 mb-2">Cài đặt và quản lý thông tin nội dung</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-primary btn-round text-uppercase btn-add" data-bs-toggle="modal"
                    data-bs-target="#add-blank-page"><i class="fas fa-plus me-2"></i>Thêm Trang</button>
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
                                        <th>Phân loại</th>
                                        <th>Trạng thái</th>
                                        <th style="width: 10%">Tác Vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blank_page as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->type == 'cs' ? 'Chính Sách' : 'Hướng Dẫn' }}</td>
                                            <td class="{{ $item->status == '1' ? 'text-success' : 'text-danger' }}">
                                                {{ $item->status == '1' ? 'Bật' : 'Tắt' }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#edit-blank-page" title="Edit"
                                                        class="btn btn-link btn-primary btn-lg btn-edit-blank-page"
                                                        data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                                        data-type="{{ $item->type }}" data-status="{{ $item->status }}"
                                                        data-content="{{ $item->content }}">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-bs-toggle="tooltip" title="Remove"
                                                        class="btn btn-link btn-danger btn-delete-blank-page"
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
    <!-- Modal Add Blank Page -->
    <div class="modal fade" id="add-blank-page" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới trang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group" id="div-name">
                                <label for="name">Tên</label>
                                <input type="text" class="form-control" id="add-name" name="name" placeholder="Tên">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group" id="div-status">
                                <label>Trạng thái</label><br>
                                <select name="status" id="add-status" class="form-select">
                                    <option value="1">Bật</option>
                                    <option value="0">Tắt</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group" id="div-type">
                                <label for="name">Phân loại</label>
                                <select class="form-select" aria-label="Default select example" name="type"
                                    id="add-type">
                                    <option value="cs">Chính sách</option>
                                    <option value="hd">Hướng dẫn</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group" id="div-content">
                                <label for="name">Nội dung</label>
                                <textarea name="content" class="form-control" id="add-content" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-add-blank-page">Thêm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit Blank Page -->
    <div class="modal fade" id="edit-blank-page" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sửa trang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" id="edit-id" name="id" hidden>
                            <div class="form-group" id="div-edit-name">
                                <label for="name">Tên</label>
                                <input type="text" class="form-control" id="edit-name" name="name"
                                    placeholder="Tên">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group" id="div-edit-status">
                                <label>Trạng thái</label><br>
                                <select name="status" id="edit-status" class="form-select">
                                    <option value="1">Bật</option>
                                    <option value="0">Tắt</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group" id="div-edit-type">
                                <label for="name">Phân loại</label>
                                <select class="form-select" aria-label="Default select example" name="type"
                                    id="edit-type">
                                    <option value="cs">Chính sách</option>
                                    <option value="hd">Hướng dẫn</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group" id="div-edit-content">
                                <label for="name">Nội dung</label>
                                <textarea name="content" class="form-control" id="edit-content" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success btn-update-blank-page">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery js CDN -->
    <script>
        $(document).ready(function() {
            $('.btn-add-blank-page').click(function() {
                $.ajax({
                    url: '{{ route('blankPage.store') }}',
                    method: 'POST',
                    data: {
                        name: $('#add-name').val(),
                        type: $('#add-type').val(),
                        status: $('#add-status').val(),
                        content: $('#add-content').val(),
                    },
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#add-blank-page').modal('hide');
                        $('#add-name, #add-type, #add-status, #add-content').val('');

                        // Hiển thị Swal khi thành công
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: response.message,
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
                                style: {
                                    background: "#e74c3c"
                                }
                            }).showToast();
                        } else {
                            Toastify({
                                text: "Đã có lỗi xảy ra. Vui lòng thử lại.",
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                style: {
                                    background: "#e74c3c"
                                }
                            }).showToast();
                        }
                    },
                });
            });

            // edit show modal
            $(document).on('click', '.btn-edit-blank-page', function() {
                $('#edit-id').val($(this).data('id'));
                $('#edit-name').val($(this).data('name'));
                $('#edit-type').val($(this).data('type'));
                $('#edit-status').val($(this).data('status'));
                $('#edit-content').val($(this).data('content'));
            });
            // update
            $('.btn-update-blank-page').on('click', function() {
                const id = $('#edit-id').val();
                const formData = {
                    name: $('#edit-name').val(),
                    type: $('#edit-type').val(),
                    status: $('#edit-status').val(),
                    content: $('#edit-content').val(),
                };

                $.ajax({
                    url: `/blank_page/update/${id}`,
                    method: 'PUT',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: formData,
                    success: function(response) {
                        $('#edit-blank-page').modal('hide');
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
            $(document).on('click', '.btn-delete-blank-page', function() {
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
                            url: `/blank_page/${id}`,
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
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
