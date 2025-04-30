@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Cài đặt thông tin Sản Phẩm</h3>
                <h6 class="op-7 mb-2">Cài đặt và quản lý thông tin sản phẩm</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-primary btn-round text-uppercase btn-update-product"><i
                        class="fas fa-check me-2"></i>Lưu</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Tên Sản Phẩm</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Tên Sản Phẩm" value="{{ $product->name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="status">Trạng Thái</label>
                                            <select name="status" id="status" class="form-select">
                                                <option value="conhang"
                                                    {{ $product->status == 'conhang' ? 'selected' : '' }}>Còn Hàng
                                                </option>
                                                <option value="hethang"
                                                    {{ $product->status == 'hethang' ? 'selected' : '' }}>Hết Hàng
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="category">Danh Mục</label>
                                            <select name="category_id" id="category_id" class="form-select">
                                                <option value="">-- Chọn danh mục --</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="type">Loại</label>
                                            <select name="type_id" id="type_id" class="form-select" disabled>
                                                <option value="">-- Chọn loại --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="level">Kiểu</label>
                                            <select name="level_id" id="level_id" class="form-select" disabled>
                                                <option value="">-- Chọn kiểu --</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="code">Mã Sản Phẩm</label>
                                            <input type="text" class="form-control" id="code" name="code"
                                                value="{{ $product->code }}" placeholder="Code">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="price">Giá</label>
                                            <input type="text" class="form-control" id="price" name="price"
                                                value="{{ $product->price }}" placeholder="Giá">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="sale_price">Giá Khuyến Mãi</label>
                                            <input type="text" class="form-control" id="sale_price" name="sale_price"
                                                value="{{ $product->sale_price }}" placeholder="Giá">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Mô Tả</label>
                                            <textarea class="form-control" id="description" name="description" rows="5" placeholder="Mô Tả">{!! $product->description !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="document">Hướng dẫn</label>
                                            <textarea class="form-control" id="document" name="document" rows="5" placeholder="">{!! $product->document !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <!-- Hình ảnh đã có -->
                                <div class="existing-images row">
                                    @foreach ($product->images as $img)
                                        <div class="col-md-4 mb-2">
                                            <div class="ratio ratio-1x1 border rounded overflow-hidden">
                                                <img src="{{ asset($img->image) }}" class="w-100 h-100"
                                                    style="object-fit: cover;">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- Upload nhiều ảnh sản phẩm và preview --}}
                                <div class="form-group">
                                    <label for="images">Ảnh sản phẩm</label>
                                    <input type="file" name="images[]" id="images" class="form-control" multiple
                                        accept="image/*">
                                </div>
                                <div class="preview-images row mt-2" id="preview-images">
                                    {{-- Ảnh xem trước sẽ hiện ở đây --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery js CDN -->

    <script>
        $(document).ready(function() {
            let productId = {{ $product->id ?? 'null' }};
            let selectedTypeId = {{ $product->type_id ?? 'null' }};
            let selectedLevelId = {{ $product->level_id ?? 'null' }};

            $('#images').on('change', function() {
                let previewContainer = $('#preview-images');
                previewContainer.html(''); // Clear cũ

                const files = this.files;
                if (files) {
                    Array.from(files).forEach(file => {
                        if (!file.type.startsWith('image/')) return;

                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const imgHtml = `
                                <div class="col-md-4 mb-2">
                                    <div class="ratio ratio-1x1 border rounded overflow-hidden">
                                        <img src="${e.target.result}" class="w-100 h-100 object-fit-cover" style="object-fit: cover;">
                                    </div>
                                </div>
                            `;

                            previewContainer.append(imgHtml);
                        };
                        reader.readAsDataURL(file);
                    });
                }
            });

            // Load loại khi chọn danh mục
            $('#category_id').on('change', function() {
                let categoryId = $(this).val();
                $('#type_id').html('<option value="">-- Chọn loại --</option>').prop('disabled', true);
                $('#level_id').html('<option value="">-- Chọn kiểu --</option>').prop('disabled', true);

                if (categoryId) {
                    $.get('/get-types/' + categoryId, function(types) {
                        if (types.length > 0) {
                            let options = '<option value="">-- Chọn loại --</option>';
                            types.forEach(function(type) {
                                let selected = (type.id === selectedTypeId) ? 'selected' :
                                    '';
                                options +=
                                    `<option value="${type.id}" ${selected}>${type.name}</option>`;
                            });
                            $('#type_id').html(options).prop('disabled', false).trigger('change');
                        }
                    });
                }
            });

            // Load kiểu khi chọn loại
            $('#type_id').on('change', function() {
                let typeId = $(this).val();
                let categoryId = $('#category_id').val();
                $('#level_id').html('<option value="">-- Chọn kiểu --</option>').prop('disabled', true);

                if (typeId && categoryId) {
                    $.get(`/get-levels/${typeId}?category_id=${categoryId}`, function(levels) {
                        if (levels.length > 0) {
                            let options = '<option value="">-- Chọn kiểu --</option>';
                            levels.forEach(function(level) {
                                let selected = (level.id === selectedLevelId) ? 'selected' :
                                    '';
                                options +=
                                    `<option value="${level.id}" ${selected}>${level.name}</option>`;
                            });
                            $('#level_id').html(options).prop('disabled', false);
                        }
                    });
                }
            });

            // Gọi lại khi mở trang nếu có dữ liệu cũ
            $('#category_id').trigger('change');


            $('.btn-update-product').on('click', function() {
                let formData = new FormData();

                formData.append('name', $('#name').val());
                formData.append('code', $('#code').val());
                formData.append('price', $('#price').val());
                formData.append('sale_price', $('#sale_price').val());
                formData.append('status', $('#status').val());
                formData.append('category_id', $('#category_id').val());
                formData.append('type_id', $('#type_id').val());
                formData.append('level_id', $('#level_id').val());
                formData.append('description', $('#description').val());
                formData.append('document', $('#document').val());

                let files = $('#images')[0].files;
                for (let i = 0; i < files.length; i++) {
                    formData.append('images[]', files[i]);
                }

                $.ajax({
                    url: '/admin/products/' + productId + '/update',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        Swal.fire('Thành công!', res.message, 'success').then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '{{ route('admin.product') }}';
                            }
                        });
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            let msg = Object.values(errors).map(e => e[0]).join('<br>');
                            Swal.fire('Lỗi!', msg, 'error');
                        } else {
                            Swal.fire('Lỗi!', 'Đã xảy ra lỗi, vui lòng thử lại.', 'error');
                        }
                    }
                });
            });


        });
    </script>
@endsection
