@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Quản lý Sản Phẩm Trong Kho</h3>
                <h6 class="op-7 mb-2">Cài đặt và quản lý danh sách thông tin sản phẩm trong kho</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <button type="submit" class="btn btn-primary btn-round text-uppercase btn-add" data-bs-toggle="modal"
                data-bs-target="#add-product-quantity"><i
                        class="fas fa-plus me-2"></i>Thêm</button>
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
                                        <th>Mã SP</th>
                                        <th>Tên SP</th>
                                        <th>Tổng SL</th>
                                        <th>Nhập</th>
                                        <th>Xuất</th>
                                        <th>SL Đặt Hàng</th>
                                        <th style="width: 10%">Tác Vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventories as $item)
                                        <tr>
                                            <td>{{ $item->product_id }}</td>
                                            <td>{{ $item->product_id }}</td>
                                            <td>{{ $item->total_quantity }}</td>
                                            <td>{{ $item->in_quantity }}</td>
                                            <td>{{ $item->out_quantity }}</td>
                                            <td>{{ $item->order_quantity }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#edit-inventory{{ $item->id }}"
                                                        class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Task">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#delete-inventory{{ $item->id }}"
                                                        class="btn btn-link btn-danger"
                                                        data-original-title="Remove">
                                                        <i class="fas fa-times"></i>
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
    <div class="modal fade" id="add-product-quantity" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới số lượng sản phẩm</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group" id="div-in-quantity">
                            <label for="in-quantity">Số lượng nhập</label>
                            <input type="number" class="form-control" id="add-in-quantity" name="in_quantity" placeholder="Số lượng nhập">
                        </div>
                        <div class="form-group" id="div-product-id">
                            <label for="product-id">Sản phẩm</label>
                            <select name="product_id" class="form-select" id="add-product-id">
                                <option value="">Chọn sản phẩm</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{$product->code}}-{{ $product->name }}-</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary btn-add-product-quantity">Thêm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery js CDN -->


@endsection
