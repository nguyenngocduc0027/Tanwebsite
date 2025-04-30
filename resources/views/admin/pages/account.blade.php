@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Quản lý tài khoản</h3>
                <h6 class="op-7 mb-2">Cài đặt và quản lý danh sách tài khoản</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-primary btn-round text-uppercase btn-add" data-bs-toggle="modal"
                    data-bs-target="#add-account"><i class="fas fa-plus me-2"></i>Thêm</button>
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
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Quyền</th>
                                        <th style="width: 10%">Tác Vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($account as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td class="text-center">{{ $item->role }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#edit-account" title="Edit"
                                                        class="btn btn-link btn-primary  btn-edit-account"
                                                        data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                                        data-phone="{{ $item->phone }}" data-email="{{ $item->email }}"
                                                        data-role="{{ $item->role }}">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#edit-password" title="Change Password"
                                                        class="btn btn-link btn-warning  btn-edit-password"
                                                        data-id="{{ $item->id }}">
                                                        <i class="fa fa-lock-open"></i>
                                                    </button>
                                                    <button type="button" data-bs-toggle="tooltip" title="Remove"
                                                        class="btn btn-link btn-danger btn-delete-account"
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
    <div class="modal fade" id="add-account" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới tài khoản</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group" id="div-name">
                            <label for="name">Họ tên</label>
                            <input type="text" class="form-control" id="add-name" name="name" placeholder="">
                        </div>
                        <div class="form-group" id="div-phone">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" class="form-control" id="add-phone" name="phone" placeholder="">
                        </div>
                        <div class="form-group" id="div-email">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="add-email" name="email" placeholder="">
                        </div>
                        <div class="form-group" id="div-role">
                            <label for="role">Quyền</label>
                            <select class="form-control" name="role" id="add-role">
                                <option value="admin">Quản trị</option>
                                <option value="manager">Quản lý</option>
                                <option value="user">Người dùng</option>
                            </select>
                        </div>
                        <div class="form-group" id="div-password">
                            <label for="password">Mật khẩu</label>
                            <input type="text" class="form-control" name="password" id="add-password" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-add-account">Thêm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit  -->
    <div class="modal fade" id="edit-account" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sửa thông tin tài khoản</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="text" name="id" id="edit-id" hidden>
                        <div class="form-group" id="div-edit-name">
                            <label for="name">Họ tên</label>
                            <input type="text" class="form-control" id="edit-name" name="name" placeholder="">
                        </div>
                        <div class="form-group" id="div-edit-phone">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" class="form-control" id="edit-phone" name="phone" placeholder="">
                        </div>
                        <div class="form-group" id="div-edit-email">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="edit-email" name="email" placeholder=""
                                disabled>
                        </div>
                        <div class="form-group" id="div-edit-role">
                            <label for="role">Quyền</label>
                            <select class="form-control" name="role" id="edit-role">
                                <option value="admin">Quản trị</option>
                                <option value="manager">Quản lý</option>
                                <option value="user">Người dùng</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success btn-update-account">Cập Nhật</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit-password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Đổi mật khẩu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        {{-- <input type="text" name="id" id="edit-password-id" hidden> --}}
                        <div class="form-group" id="div-edit-password">
                            <label for="password">Mật khẩu mới</label>
                            <input type="text" class="form-control" id="edit-inp-password" name="password"
                                placeholder="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success btn-update-password">Cập Nhật</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery js CDN -->

    <script>
        $(document).ready(function() {

            // add notification
            $('.btn-add-account').on('click', function() {
                let formData = {
                    name: $('#add-name').val(),
                    phone: $('#add-phone').val(),
                    email: $('#add-email').val(),
                    role: $('#add-role').val(),
                    password: $('#add-password').val(),
                };

                $.ajax({
                    url: '{{ route('account.store') }}',
                    method: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#add-account').modal('hide');
                        $('#add-name, #add-phone, #add-email, #add-role', '#add-password').val(
                            '');

                        // Hiển thị Swal khi thành công
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: response.message ||
                                'Cửa hàng đã được thêm.',
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

            // Edit
            $(document).on('click', '.btn-edit-account', function() {
                $('#edit-id').val($(this).data('id'));
                $('#edit-name').val($(this).data('name'));
                $('#edit-phone').val($(this).data('phone'));
                $('#edit-email').val($(this).data('email'));
                $('#edit-role').val($(this).data('role'));
            });
            // Update
            $('.btn-update-account').on('click', function() {
                const id = $('#edit-id').val();
                const formData = {
                    name: $('#edit-name').val(),
                    phone: $('#edit-phone').val(),
                    role: $('#edit-role').val(),
                };

                $.ajax({
                    url: `/account/${id}`,
                    method: 'PUT',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    success: function(response) {
                        $('#edit-account').modal('hide');
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
                                    style: {
                                        background: "#e74c3c"
                                    }
                                }).showToast();
                            });
                        } else {
                            Toastify({
                                text: "Đã có lỗi xảy ra.",
                                duration: 3000,
                                close: true,
                                gravity: 'top',
                                position: 'right',
                                style: {
                                    background: "#e74c3c"
                                }
                            }).showToast();
                        }
                    }
                });
            });

            // update password
            $('.btn-update-password').on('click', function() {
                let id = $('.btn-edit-password').data('id');
                let password = $('#edit-inp-password').val();

                $.ajax({
                    url: `/account/pass/${id}`,
                    type: 'PUT',
                    data: {
                        password: password
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#edit-password').val('');
                        $('#edit-password').modal('hide');
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
                                    style: {
                                        background: "#e74c3c"
                                    }
                                }).showToast();
                            });
                        } else {
                            Toastify({
                                text: "Đã có lỗi xảy ra.",
                                duration: 3000,
                                close: true,
                                gravity: 'top',
                                position: 'right',
                                style: {
                                    background: "#e74c3c"
                                }
                            }).showToast();
                        }
                    }
                });
            });

            // Delete
            $(document).on('click', '.btn-delete-account', function() {
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
                            url: `/account/${id}`,
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
