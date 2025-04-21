@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Thông báo khuyến mãi</h3>
                <h6 class="op-7 mb-2">Cài đặt thông tin khuyến mãi</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-primary btn-round text-uppercase btn-add" data-bs-toggle="modal"
                    data-bs-target="#add-notification-sale"><i class="fas fa-plus me-2"></i>Thêm</button>
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
                                        <th>Bắt Đầu</th>
                                        <th>Kết Thúc</th>
                                        <th>URL</th>
                                        <th>Nội Dung</th>
                                        <th style="width: 10%">Tác Vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notification_sale as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->start}}</td>
                                        <td>{{$item->end}}</td>
                                        <td>{{$item->url}}</td>
                                        <td>{{$item->content}}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#edit-notification-sale"
                                                title="Edit"
                                                class="btn btn-link btn-primary btn-lg btn-edit-notification"
                                                data-id="{{$item->id}}"
                                                data-name="{{$item->name}}"
                                                data-start="{{$item->start}}"
                                                data-end="{{$item->end}}"
                                                data-url="{{$item->url}}"
                                                data-content="{{$item->content}}">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" data-bs-toggle="tooltip" title="Remove" class="btn btn-link btn-danger btn-delete-notification" data-id='{{$item->id}}'>
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
    <div class="modal fade" id="add-notification-sale" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới thông báo khuyến mãi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group" id="div-name">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="add-name" name="name" placeholder="Tên">
                        </div>
                        <div class="form-group" id="div-start">
                            <label for="start">Ngày bắt đầu</label>
                            <input type="date" class="form-control" id="add-start" name="start" placeholder="">
                        </div>
                        <div class="form-group" id="div-end">
                            <label for="end">Ngày kết thúc</label>
                            <input type="date" class="form-control" id="add-end" name="end" placeholder="">
                        </div>
                        <div class="form-group" id="div-url">
                            <label for="url">Đường dẫn</label>
                            <input type="text" class="form-control" name="url" id="add-url"
                                placeholder="Đường dẫn thông tin">
                        </div>
                        <div class="form-group" id="div-content">
                            <label for="content">Nội dung</label>
                            <textarea class="form-control" name="content" id="add-content" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-add-notification">Thêm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit -->
    <!-- Modal Edit -->
    <div class="modal fade" id="edit-notification-sale" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel">Chỉnh sửa thông báo khuyến mãi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit-id">
                    <div class="form-group">
                        <label for="edit-name">Tên</label>
                        <input type="text" class="form-control" id="edit-name" placeholder="Tên">
                    </div>
                    <div class="form-group">
                        <label for="edit-start">Ngày bắt đầu</label>
                        <input type="date" class="form-control" id="edit-start">
                    </div>
                    <div class="form-group">
                        <label for="edit-end">Ngày kết thúc</label>
                        <input type="date" class="form-control" id="edit-end">
                    </div>
                    <div class="form-group">
                        <label for="edit-url">Đường dẫn</label>
                        <input type="text" class="form-control" id="edit-url" placeholder="Đường dẫn thông tin">
                    </div>
                    <div class="form-group">
                        <label for="edit-content">Nội dung</label>
                        <textarea class="form-control" id="edit-content" rows="5"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-update-notification">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script>
        $(document).ready(function() {

            // add notification
            $('.btn-add-notification').on('click', function() {
                let formData = {
                    name: $('#add-name').val(),
                    start: $('#add-start').val(),
                    end: $('#add-end').val(),
                    url: $('#add-url').val(),
                    content: $('#add-content').val(),
                };

                $.ajax({
                    url: '{{ route('notificationSale.store') }}',
                    method: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#add-notification-sale').modal('hide');
                        $('#add-name, #add-start, #add-end, #add-url, #add-content').val('');

                        // Hiển thị Swal khi thành công
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: response.message ||
                                'Thông báo khuyến mãi đã được thêm.',
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
            $(document).on('click', '.btn-edit-notification', function() {
                $('#edit-id').val($(this).data('id'));
                $('#edit-name').val($(this).data('name'));
                $('#edit-start').val($(this).data('start'));
                $('#edit-end').val($(this).data('end'));
                $('#edit-url').val($(this).data('url'));
                $('#edit-content').val($(this).data('content'));
            });
            // Update
            $('.btn-update-notification').on('click', function() {
                const id = $('#edit-id').val();
                const formData = {
                    name: $('#edit-name').val(),
                    start: $('#edit-start').val(),
                    end: $('#edit-end').val(),
                    url: $('#edit-url').val(),
                    content: $('#edit-content').val(),
                };

                $.ajax({
                    url: `/notification_sale/${id}`,
                    method: 'PUT',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: formData,
                    success: function(response) {
                        $('#edit-notification-sale').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Cập nhật thành công!',
                            text: response.message || 'Thông báo đã được cập nhật.',
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
            $(document).on('click', '.btn-delete-notification', function() {
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
                            url: `/notification_sale/${id}`,
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
