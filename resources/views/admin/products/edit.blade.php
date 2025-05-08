@extends('admin.index')
@section('content-admin')
<div class="page-inner">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3 text-uppercase">Sửa Sản Phẩm</h3>
            <h6 class="op-7 mb-2">Chỉnh sửa thông tin sản phẩm</h6>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <button type="submit" class="btn btn-primary btn-round text-uppercase" form="productForm">
                <i class="fas fa-save me-2"></i> Cập nhật
            </button>
        </div>
    </div>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" id="productForm">
        @csrf
      

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            {{-- Thông tin sản phẩm --}}
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <label for="name">Tên Sản Phẩm</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="status">Trạng Thái</label>
                                            <select name="status" id="status" class="form-select">
                                                <option value="conhang" {{ $product->status == 'conhang' ? 'selected' : '' }}>Còn Hàng</option>
                                                <option value="hethang" {{ $product->status == 'hethang' ? 'selected' : '' }}>Hết Hàng</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="category_id">Danh Mục</label>
                                            <select name="category_id" id="category_id" class="form-select">
                                                <option value="">-- Chọn danh mục --</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="type_id">Loại</label>
                                            <select name="type_id" id="type_id" class="form-select">
                                                <option value="">-- Chọn loại --</option>
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}" {{ $product->type_id == $type->id ? 'selected' : '' }}>
                                                        {{ $type->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="level_id">Kiểu</label>
                                            <select name="level_id" id="level_id" class="form-select">
                                                <option value="">-- Chọn kiểu --</option>
                                                @foreach ($levels as $level)
                                                    <option value="{{ $level->id }}" {{ $product->level_id == $level->id ? 'selected' : '' }}>
                                                        {{ $level->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="code">Mã Sản Phẩm</label>
                                            <input type="text" class="form-control" id="code" name="code" value="{{ $product->code }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="price">Giá</label>
                                            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="sale_price">Giá Khuyến Mãi</label>
                                            <input type="text" class="form-control" id="sale_price" name="sale_price" value="{{ $product->sale_price }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Mô Tả</label>
                                    <textarea class="form-control" id="description" name="description" rows="5">{{ $product->description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="document">Hướng Dẫn</label>
                                    <textarea class="form-control" id="document" name="document" rows="5">{{ $product->document }}</textarea>
                                </div>
                            </div>

                            {{-- Hình ảnh --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="images">Ảnh sản phẩm</label>
                                    <div class="image-grid" id="imagePreview">
                                        @foreach ($product->images as $image)
                                            <div class="image-container">
                                                <img src="{{ asset($image->image) }}" alt="">
                                                <button type="button" class="remove-image" data-id="{{ $image->id }}">&times;</button>
                                                <input type="hidden" name="keep_images[]" value="{{ $image->id }}">
                                            </div>
                                        @endforeach
                                        <div class="image-upload-box" id="addImageButton">+</div>
                                    </div>
                                    <input type="file" id="images" name="images[]" multiple accept="image/*" style="display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    const imagesInput = document.getElementById('images');
    const imagePreview = document.getElementById('imagePreview');
    const addImageButton = document.getElementById('addImageButton');

    addImageButton.addEventListener('click', () => imagesInput.click());

    imagesInput.addEventListener('change', function (event) {
        const files = Array.from(event.target.files);
        files.forEach(file => {
            if (!file.type.startsWith('image/')) return;
            const reader = new FileReader();
            reader.onload = function (e) {
                const imageDiv = document.createElement('div');
                imageDiv.classList.add('image-container');
                imageDiv.innerHTML = `
                    <img src="${e.target.result}">
                    <button type="button" class="remove-image">&times;</button>
                `;
                imagePreview.insertBefore(imageDiv, addImageButton);
            };
            reader.readAsDataURL(file);
        });
    });

    // Xoá ảnh cũ
    imagePreview.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-image')) {
            const imageDiv = e.target.closest('.image-container');
            const imageId = e.target.dataset.id;

            imageDiv.remove();

            const keepInput = document.querySelector(`input[name="keep_images[]"][value="${imageId}"]`);
            if (keepInput) keepInput.remove();

            const deleteInput = document.createElement('input');
            deleteInput.type = 'hidden';
            deleteInput.name = 'delete_images[]';
            deleteInput.value = imageId;
            document.getElementById('productForm').appendChild(deleteInput);
        }
    });

    // AJAX load loại và kiểu
    $(document).ready(function() {
        $('#category_id').on('change', function() {
            let categoryId = $(this).val();
            $('#type_id').html('<option value="">-- Chọn loại --</option>');
            $('#level_id').html('<option value="">-- Chọn kiểu --</option>');

            if (categoryId) {
                $.get('/get-types/' + categoryId, function(types) {
                    types.forEach(function(type) {
                        $('#type_id').append(`<option value="${type.id}">${type.name}</option>`);
                    });
                });
            }
        });

        $('#type_id').on('change', function() {
            let typeId = $(this).val();
            let categoryId = $('#category_id').val();
            $('#level_id').html('<option value="">-- Chọn kiểu --</option>');

            if (typeId && categoryId) {
                $.get(`/get-levels/${typeId}?category_id=${categoryId}`, function(levels) {
                    levels.forEach(function(level) {
                        $('#level_id').append(`<option value="${level.id}">${level.name}</option>`);
                    });
                });
            }
        });
    });
</script>
@endsection
