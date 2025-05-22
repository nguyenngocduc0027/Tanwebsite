@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Quản lý Danh Sách Slider</h3>
                <h6 class="op-7 mb-2">Cài đặt và quản lý danh sách thông tin slider</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-primary btn-round text-uppercase btn-add" data-bs-toggle="modal"
                    data-bs-target="#add-slider"><i class="fas fa-plus me-2"></i>Thêm</button>
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
                                        <th>Tiêu đề</th>
                                        <th>Trạng Thái</th>
                                        <th style="width: 10%">Tác Vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->status == 1 ?'Hiện' : 'Ẩn' }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#edit-slider" title="Edit"
                                                        class="btn btn-link btn-primary btn-lg btn-edit-slider"
                                                        data-id="{{ $item->id }}" data-title="{{ $item->title }}"
                                                        data-subtitle="{{ $item->subtitle }}"
                                                        data-link="{{ $item->link }}" data-status="{{ $item->status }}"
                                                        data-image="{{ asset($item->image) }}">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-bs-toggle="tooltip" title="Remove"
                                                        class="btn btn-link btn-danger btn-delete-slider"
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
    <div class="modal fade" id="add-slider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới slider</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group" id="div-title">
                                <label for="title">Tiêu Đề</label>
                                <input type="text" class="form-control" id="add-title" name="title"
                                    placeholder="Tiêu đề">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group" id="div-status">
                                <label for="status">Trang Thái</label>
                                <select name="status" id="add-status" class="form-select">
                                    <option value="1">Hiện</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group" id="divsubtitle">
                                <label for="subtitle">Phụ Đề</label>
                                <input type="text" class="form-control" id="add-subtitle" name="subtitle"
                                    placeholder="Phụ Đề">
                            </div>
                            <div class="form-group" id="div-link">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" id="add-link" name="link" placeholder="Link">
                            </div>
                            <div class="form-group" id="div-image">
                                <label for="image">Hình Ảnh (WxH : 1920x600)</label>
                                <input type="file" class="form-control" id="add-image" name="image">
                            </div>
                            <div class="form-group" id="div-preview-image">
                                <img id="preview-image" src="" alt="Preview"
                                    style="display:none; max-width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-add-slider">Thêm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Add -->
    <div class="modal fade" id="edit-slider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sửa thông tin slider</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="text" name="id" id="edit-id" hidden>
                        <div class="col-8">
                            <div class="form-group" id="div-title">
                                <label for="title">Tiêu Đề</label>
                                <input type="text" class="form-control" id="edit-title" name="title"
                                    placeholder="Tiêu đề">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group" id="div-status">
                                <label for="status">Trang Thái</label>
                                <select name="status" id="edit-status" class="form-select">
                                    <option value="1">Hiện</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group" id="divsubtitle">
                                <label for="subtitle">Phụ Đề</label>
                                <input type="text" class="form-control" id="edit-subtitle" name="subtitle"
                                    placeholder="Phụ Đề">
                            </div>
                            <div class="form-group" id="div-link">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" id="edit-link" name="link"
                                    placeholder="Link">
                            </div>
                            <div class="form-group" id="div-image">
                                <label for="image">Hình Ảnh (WxH : 1920x600)</label>
                                <input type="file" class="form-control" id="edit-image" name="image">
                            </div>
                            <div class="form-group" id="div-preview-image">
                                <img id="preview-edit-image" src="" alt="Preview" style=" max-width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success btn-update-slider">Cập Nhật</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery js CDN -->

    <script>
        $(document).ready(function() {
            // Preview image
            $('#add-image').on('change', function() {
                const file = this.files[0];
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview-image').attr('src', e.target.result);
                    $('#preview-image').show();
                };
                reader.readAsDataURL(file);
            })
            $('#edit-image').on('change', function() {
                const file = this.files[0];
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview-edit-image').attr('src', e.target.result);
                    $('#preview-edit-image').show();
                };
                reader.readAsDataURL(file);
            })

            // Thêm mới
            $('.btn-add-slider').on('click', function() {
                let formData = new FormData();
                formData.append('title', $('#add-title').val());
                formData.append('subtitle', $('#add-subtitle').val());
                formData.append('link', $('#add-link').val());
                formData.append('status', $('#add-status').val());
                formData.append('image', $('#add-image')[0].files[0]);

                $.ajax({
                    url: '{{ route('slider.store') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công!',
                            text: response.message,
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        const errors = xhr.responseJSON.errors;
                        for (const key in errors) {
                            Toastify({
                                text: errors[key][0],
                                duration: 3000,
                                gravity: 'top',
                                position: 'right',
                                style: {
                                    background: "#f44336"
                                }
                            }).showToast();
                        }
                    }
                });
            });

            // Hiển thị dữ liệu khi click sửa
            $('.btn-edit-slider').on('click', function() {
                const id = $(this).data('id');
                const title = $(this).data('title');
                const subtitle = $(this).data('subtitle');
                const link = $(this).data('link');
                const status = $(this).data('status');
                const image = $(this).data('image');

                $('#edit-id').val(id);
                $('#edit-title').val(title);
                $('#edit-subtitle').val(subtitle);
                $('#edit-link').val(link);
                $('#edit-status').val(status);
                $('#preview-edit-image').attr('src', image);
            });

            // Cập nhật
            $('.btn-update-slider').on('click', function() {
                const id = $('#edit-id').val();
                const formData = new FormData();
                formData.append('title', $('#edit-title').val());
                formData.append('subtitle', $('#edit-subtitle').val());
                formData.append('link', $('#edit-link').val());
                formData.append('status', $('#edit-status').val());
                if ($('#edit-image')[0].files[0]) {
                    formData.append('image', $('#edit-image')[0].files[0]);
                }
                formData.append('_method', 'PUT'); // Laravel cần dòng này khi dùng POST giả PUT


                $.ajax({
                    url: '/slider/' + $('#edit-id').val(),
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Đã cập nhật!',
                            text: response.message,
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => {
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        const errors = xhr.responseJSON.errors;
                        for (const key in errors) {
                            Toastify({
                                text: errors[key][0],
                                duration: 3000,
                                gravity: 'top',
                                position: 'right',
                                style: {
                                    background: "#f44336"
                                }
                            }).showToast();
                        }
                    }
                });

            });

            // Xoá
            $('.btn-delete-slider').on('click', function() {
                let id = $(this).data('id');
                Swal.fire({
                    title: 'Xác nhận xoá?',
                    text: "Slider sẽ bị xoá vĩnh viễn!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Xoá'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/slider/' + id,
                            type: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                id: id
                            },
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Đã xoá!',
                                    text: response.message,
                                    timer: 1500,
                                    showConfirmButton: false
                                }).then(() => {
                                    location.reload();
                                });
                            },
                            error: function(xhr) {
                                Toastify({
                                    text: "Không thể xoá slider",
                                    duration: 3000,
                                    gravity: 'top',
                                    position: 'right',
                                    style: {
                                        background: "#f44336"
                                    }
                                }).showToast();
                            }
                        });
                    }
                });
            });

        });
    </script>
@endsection
