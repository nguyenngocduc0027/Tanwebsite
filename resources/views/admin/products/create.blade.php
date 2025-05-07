@extends('admin.index')
@section('content-admin')
    <style>
        .image-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            margin-top: 10px;
        }

        .image-container,
        .image-upload-box {
            position: relative;
            width: 100%;
            aspect-ratio: 1 / 1;
            border-radius: 8px;
            overflow: hidden;
        }

        .image-container {
            background-color: #f0f0f0;
        }

        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-container .remove-image {
            position: absolute;
            top: 5px;
            right: 5px;
            background: rgba(255, 0, 0, 0.7);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            font-size: 14px;
            line-height: 22px;
            text-align: center;
            cursor: pointer;
        }

        .image-upload-box {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fafafa;
            border: 2px dashed #ccc;
            color: #aaa;
            font-size: 32px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .image-upload-box:hover {
            background-color: #eaeaea;
        }
    </style>

    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Thêm mới Sản Phẩm</h3>
                <h6 class="op-7 mb-2">Thêm mới thông tin sản phẩm</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-primary btn-round text-uppercase btn-create-product">
                    <i class="fas fa-check me-2"></i> Tạo
                </button>
            </div>
        </div>
    
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                            <div class="form-group">
                                                <label for="name">Tên Sản Phẩm</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Tên Sản Phẩm">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label for="status">Trạng Thái</label>
                                                <select name="status" id="status" class="form-select">
                                                    <option value="conhang">Còn Hàng</option>
                                                    <option value="hethang">Hết Hàng</option>
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
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                                <input type="text" class="form-control" id="code" name="code" placeholder="Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label for="price">Giá</label>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="Giá">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label for="sale_price">Giá Khuyến Mãi</label>
                                                <input type="text" class="form-control" id="sale_price" name="sale_price" placeholder="Giá">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="description">Mô Tả</label>
                                                <textarea class="form-control" id="description" name="description" rows="5" placeholder="Mô Tả"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="document">Hướng dẫn</label>
                                                <textarea class="form-control" id="document" name="document" rows="5" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    {{-- Upload nhiều ảnh sản phẩm và preview --}}
                                    <div class="form-group">
                                        <label for="images">Ảnh sản phẩm</label>
                                        <div class="image-grid" id="imagePreview">
                                            <div class="image-upload-box" id="addImageButton">+</div>
                                        </div>
                                        <input type="file" id="images" name="images[]" accept="image/*" multiple style="display: none;">
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-round text-uppercase btn-create-product">
                <i class="fas fa-check me-2"></i> Tạo
            </button>
        </form>
    </div>
    
    <script>
        const imagesInput = document.getElementById('images');
        const imagePreview = document.getElementById('imagePreview');
        const addImageButton = document.getElementById('addImageButton');
    
        let selectedFiles = [];
    
        addImageButton.addEventListener('click', () => imagesInput.click());
    
        imagesInput.addEventListener('change', function (event) {
            const files = Array.from(event.target.files);
    
            files.forEach(file => {
                if (!file.type.startsWith('image/')) return;
    
                if (selectedFiles.some(f => f.name === file.name && f.size === file.size)) return;
    
                selectedFiles.push(file);
    
                const reader = new FileReader();
                reader.onload = function (e) {
                    console.log(e.target);
                    
                    const imageDiv = document.createElement('div');
                    imageDiv.classList.add('image-container');
                    imageDiv.innerHTML = `
                       <div style=" display: inline-block; margin: 5px;">
                    <img src="${e.target.result}" >
                    <button type="button" class="remove-image" data-name="${file.name}" data-size="${file.size}" style="position: absolute; top: 0; right: 0;">&times;</button>
                </div>
                    `;
                    imagePreview.insertBefore(imageDiv, addImageButton);
                };
                reader.readAsDataURL(file);
            });
        });
    
        imagePreview.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-image')) {
                const name = event.target.dataset.name;
                const size = parseInt(event.target.dataset.size);
                selectedFiles = selectedFiles.filter(file => !(file.name === name && file.size === size));
                event.target.closest('.image-container').remove();
            }
        });
    
        $(document).ready(function() {
            $('#category_id').on('change', function() {
                let categoryId = $(this).val();
    
                $('#type_id').html('<option value="">-- Chọn loại --</option>').prop('disabled', true);
                $('#level_id').html('<option value="">-- Chọn kiểu --</option>').prop('disabled', true);
    
                if (categoryId) {
                    $.get('/get-types/' + categoryId, function(types) {
                        if (types.length > 0) {
                            let options = '<option value="">-- Chọn loại --</option>';
                            types.forEach(function(type) {
                                options += `<option value="${type.id}">${type.name}</option>`;
                            });
                            $('#type_id').html(options).prop('disabled', false);
                        }
                    });
                }
            });
    
            $('#type_id').on('change', function() {
                let typeId = $(this).val();
                let categoryId = $('#category_id').val();
    
                $('#level_id').html('<option value="">-- Chọn kiểu --</option>').prop('disabled', true);
    
                if (typeId && categoryId) {
                    $.get(`/get-levels/${typeId}?category_id=${categoryId}`, function(levels) {
                        if (levels.length > 0) {
                            let options = '<option value="">-- Chọn kiểu --</option>';
                            levels.forEach(function(level) {
                                options += `<option value="${level.id}">${level.name}</option>`;
                            });
                            $('#level_id').html(options).prop('disabled', false);
                        }
                    });
                }
            });
        });
    </script>
@endsection
