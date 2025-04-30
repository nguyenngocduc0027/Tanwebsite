@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Quản lý danh mục </h3>
                <h6 class="op-7 mb-2">Cài đặt và quản lý danh mục</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-primary btn-round text-uppercase" data-bs-toggle="modal"
                    data-bs-target="#add-category"><i class="fas fa-plus me-2"></i>Thêm danh mục</button>
                <button type="submit" class="btn btn-primary btn-round text-uppercase" data-bs-toggle="modal"
                    data-bs-target="#add-sub-category"><i class="fas fa-plus me-2"></i>Thêm
                    loại</button>
                <button type="submit" class="btn btn-primary btn-round text-uppercase" data-bs-toggle="modal"
                    data-bs-target="#add-subsub-category"><i class="fas fa-plus me-2"></i>Thêm
                    kiểu</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-line nav-color-secondary" id="line-tab" role="tablist">
                            <li class="nav-item submenu" role="presentation">
                                <a class="nav-link active" id="line-info-tab" data-bs-toggle="pill" href="#line-info"
                                    role="tab" aria-controls="pills-info" aria-selected="true">Danh Mục</a>
                            </li>
                            <li class="nav-item sub-menu" role="presentation">
                                <a class="nav-link" id="line-logo-tab" data-bs-toggle="pill" href="#line-logo"
                                    role="tab" aria-controls="pills-logo" aria-selected="true">Loại</a>
                            </li>
                            <li class="nav-item submenu" role="presentation">
                                <a class="nav-link" id="line-pay-tab" data-bs-toggle="pill" href="#line-pay" role="tab"
                                    aria-controls="pills-pay" aria-selected="true">Kiểu</a>
                            </li>
                        </ul>
                        <div class="tab-content mb-1" id="line-tabContent">
                            <div class="tab-pane fade active show" id="line-info" role="tabpanel"
                                aria-labelledby="line-info-tab">
                                <div class="table-responsive mt-3">
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Danh mục</th>
                                                <th style="width: 10%">Tác Vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $cat)
                                                <tr>
                                                    <td>{{ $cat->name }}</td>
                                                    <td class="text-end">
                                                        <div class="form-button-action">
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#edit-category" title="Edit"
                                                                class="btn btn-link btn-primary btn-lg btn-edit-category"
                                                                data-id="{{ $cat->id }}"
                                                                data-name="{{ $cat->name }}">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" data-bs-toggle="tooltip" title="Remove"
                                                                class="btn btn-link btn-danger btn-delete-category"
                                                                data-id='{{ $cat->id }}'>
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
                            <div class="tab-pane fade" id="line-logo" role="tabpanel" aria-labelledby="line-logo-tab">
                                <div class="table-responsive mt-3">
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Loại</th>
                                                <th>Danh mục</th>
                                                <th style="width: 10%">Tác Vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $cat)
                                                @foreach ($cat->types as $ty)
                                                    <tr>
                                                        <td>{{ $ty->name }}</td>
                                                        <td>{{ $cat->name }}</td>
                                                        <td class="text-end">
                                                            <div class="form-button-action">
                                                                <button type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#edit-sub-category" title="Edit"
                                                                    class="btn btn-link btn-primary btn-lg btn-edit-type"
                                                                    data-id="{{ $ty->id }}"
                                                                    data-name="{{ $ty->name }}"
                                                                    data-cat="{{ $cat->id }}">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                                <button type="button" data-bs-toggle="tooltip"
                                                                    title="Remove"
                                                                    class="btn btn-link btn-danger btn-delete-type"
                                                                    data-id='{{ $ty->id }}'>
                                                                    <i class="fa fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="line-pay" role="tabpanel" aria-labelledby="line-pay-tab">
                                <div class="table-responsive mt-3">
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Kiểu</th>
                                                <th>Loại</th>
                                                <th>Danh mục</th>
                                                <th style="width: 10%">Tác Vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $cat)
                                                @foreach ($cat->types as $ty)
                                                    @foreach ($ty->levels as $lv)
                                                        <tr>
                                                            <td>{{ $lv->name }}</td>
                                                            <td>{{ $ty->name }}</td>
                                                            <td>{{ $cat->name }}</td>
                                                            <td class="text-end">
                                                                <div class="form-button-action">
                                                                    <button type="button" data-bs-toggle="modal"
                                                                        data-bs-target="#edit-subsub-category"
                                                                        title="Edit"
                                                                        class="btn btn-link btn-primary btn-lg btn-edit-level"
                                                                        data-id="{{ $lv->id }}"
                                                                        data-name="{{ $lv->name }}"
                                                                        data-cat="{{ $cat->id }}"
                                                                        data-type="{{ $ty->id }}">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                    <button type="button" data-bs-toggle="tooltip"
                                                                        title="Remove"
                                                                        class="btn btn-link btn-danger btn-delete-level"
                                                                        data-id='{{ $lv->id }}'>
                                                                        <i class="fa fa-times"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add Category -->
    <div class="modal fade" id="add-category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới danh mục</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group" id="div-name-category">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="add-name-category" name="name"
                                placeholder="Tên danh mục">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-add-category">Thêm</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Category -->
    <div class="modal fade" id="edit-category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Chỉnh sửa danh mục</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="text" class="form-control" id="edit-id-category" name="id" hidden>
                        <div class="form-group" id="div-name-category">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="edit-name-category" name="name"
                                placeholder="Tên danh mục">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-update-category">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Sub Category -->
    <div class="modal fade" id="add-sub-category" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới loại</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group" id="div-name-sub-category">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="add-name-type" name="name"
                                placeholder="Tên loại">
                        </div>
                        <div class="form-group" id="div-category-sub-category">
                            <label for="category">Danh mục</label>
                            <select name="category_id" id="add-category-id" class="form-control">
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-add-type">Thêm</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Sub Category -->
    <div class="modal fade" id="edit-sub-category" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sửa loại</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="text" class="form-control" id="edit-id-type" name="id" hidden>
                        <div class="form-group" id="div-name-sub-category">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="edit-name-type" name="name"
                                placeholder="Tên loại">
                        </div>
                        <div class="form-group" id="div-category-sub-category">
                            <label for="category">Danh mục</label>
                            <select name="category_id" id="edit-category-id" class="form-control">
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-update-type">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add SubSub Category -->
    <div class="modal fade" id="add-subsub-category" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới kiểu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group" id="div-name-sub-category">
                            <label for="name">Tên kiểu</label>
                            <input type="text" class="form-control" id="add-name-level" name="name"
                                placeholder="Tên kiểu">
                        </div>
                        <div class="form-group" id="div-category-sub-category-subsub-category">
                            <label for="category-type">Danh mục -> Loại</label>
                            <select name="type_id" id="add-type-id" class="form-control">
                                @foreach ($categories as $cat)
                                    @foreach ($cat->types as $type)
                                        <option value="{{ $type->id }}">
                                            {{ $cat->name }} - {{ $type->name }}
                                        </option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-add-level">Thêm</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit SubSub Category -->
    <div class="modal fade" id="edit-subsub-category" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Chỉnh sửa kiểu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="text" class="form-control" id="edit-id-level" name="id" hidden>
                        <div class="form-group" id="div-name-sub-category">
                            <label for="name">Tên kiểu</label>
                            <input type="text" class="form-control" id="edit-name-level" name="name"
                                placeholder="Tên kiểu">
                        </div>
                        <div class="form-group" id="div-category-sub-category-subsub-category">
                            <label for="category-type">Danh mục -> Loại</label>
                            <select name="type_id" id="edit-type-id" class="form-control">
                                @foreach ($categories as $cat)
                                    @foreach ($cat->types as $type)
                                        <option value="{{ $type->id }}">
                                            {{ $cat->name }} - {{ $type->name }}
                                        </option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-update-level">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script>
        $(document).ready(function() {
            // Add Category
            $('.btn-add-category').click(function() {
                let name = $('#add-name-category').val();
                $.ajax({
                    url: '{{ route('category.store') }}',
                    method: 'POST',
                    data: {
                        name: name,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#add-category').modal('hide');
                        $('#add-name-category').val('');

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

            // Add Type
            $('.btn-add-type').click(function() {
                let name = $('#add-name-type').val();
                let category_id = $('#add-category-id').val();
                $.ajax({
                    url: '{{ route('type.store') }}',
                    method: 'POST',
                    data: {
                        name: name,
                        category_id: category_id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#add-sub-category').modal('hide');
                        $('#add-name-type').val('');

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

            // Add Level
            $('.btn-add-level').click(function() {
                let name = $('#add-name-level').val();
                let type_id = $('#add-type-id').val();
                $.ajax({
                    url: '{{ route('level.store') }}',
                    method: 'POST',
                    data: {
                        name: name,
                        type_id: type_id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#add-subsub-category').modal('hide');
                        $('#add-name-level').val('');

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

            // Edit Category
            $('.btn-edit-category').click(function() {
                let id = $(this).data('id');
                let name = $(this).data('name');
                $('#edit-id-category').val(id);
                $('#edit-name-category').val(name);
            });

            // Update Category
            $('.btn-update-category').click(function() {
                let id = $('#edit-id-category').val();
                let name = $('#edit-name-category').val();
                $.ajax({
                    url: `/category/update/${id}`,
                    method: 'PUT',
                    data: {
                        name: name,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#edit-category').modal('hide');
                        $('#edit-name-category').val('');

                        // Hiển thị Swal khi therap
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
                                text: "Đã có lỗi xảy ra. Vui lö thử lagi.",
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


            // Edit Type
            $('.btn-edit-type').click(function() {
                let id = $(this).data('id');
                let name = $(this).data('name');
                let category_id = $(this).data('cat');
                $('#edit-id-type').val(id);
                $('#edit-name-type').val(name);
                $('#edit-category-id').val(category_id);
            });

            // Update Type
            $('.btn-update-type').click(function() {
                let id = $('#edit-id-type').val();
                let name = $('#edit-name-type').val();
                let category_id = $('#edit-category-id').val();
                $.ajax({
                    url: `/type/update/${id}`,
                    method: 'PUT',
                    data: {
                        name: name,
                        category_id: category_id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#edit-sub-category').modal('hide');
                        $('#edit-id-type').val('');
                        $('#edit-name-type').val('');

                        // Hiển thị Swal khi therap
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
                                text: "Đã có lỗi xảy ra. Vui lö thử lagi.",
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

            // Edit Level
            $('.btn-edit-level').click(function() {
                let id = $(this).data('id');
                let name = $(this).data('name');
                let type_id = $(this).data('type');
                $('#edit-id-level').val(id);
                $('#edit-name-level').val(name);
                $('#edit-type-id').val(type_id);
            });

            // Update Level
            $('.btn-update-level').click(function() {
                let id = $('#edit-id-level').val();
                let name = $('#edit-name-level').val();
                let type_id = $('#edit-type-id').val();
                $.ajax({
                    url: `/level/update/${id}`,
                    method: 'PUT',
                    data: {
                        name: name,
                        type_id: type_id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#edit-subsub-category').modal('hide');
                        $('#edit-id-level').val('');
                        $('#edit-name-level').val('');

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
                                text: "Đã có lỗi xảy ra. Vui lòng thử lagi.",
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                style: {
                                    background: "#e74c3c"
                                }
                            }).showToast();
                        };
                    },
                });
            });

            // Delete Category
            $('.btn-delete-category').click(function() {
                let id = $(this).data('id');

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
                            url: `/category/delete/${id}`,
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
            })

            // Delete Type
            $('.btn-delete-type').click(function() {
                let id = $(this).data('id');

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
                            url: `/type/delete/${id}`,
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
            })

            // Delete Level
            $('.btn-delete-level').click(function() {
                let id = $(this).data('id');

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
                            url: `/level/delete/${id}`,
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
            })

        });
    </script>
@endsection
