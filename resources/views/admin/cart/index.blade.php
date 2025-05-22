@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Quản lý Danh Sách Đặt hàng</h3>
                <h6 class="op-7 mb-2">Cài đặt và quản lý danh sách thông tin đặt hàng</h6>
            </div>

        </div>
        @php
            $statusLabels = [
                'pending' => 'Chờ xử lý',
                'shipping' => 'Đang giao',
                'completed' => 'Hoàn thành',
                'cancelled' => 'Đã huỷ',
            ];
        @endphp
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>SĐT</th>
                                        <th>Trạng thái</th>
                                        <th colspan="3">Tác Vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->customer_name }}</td>
                                            <td>{{ $order->customer_email }}</td>
                                            <td>{{ $order->customer_phone }}</td>


                                            <td>{{ $statusLabels[$order->status] ?? $order->status }}</td>

                                            <td>
                                                <a href="{{ route('admin.cartdetail', ['id' => $order->id]) }}"
                                                    class="btn  btn-primary "> <i class="fa fa-eye"></i>
                                                    <!-- chỉ có 1 mắt, vẫn là icon phổ biến nhất -->
                                                </a>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#updateStatusModal{{ $order->id }}">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <form action="{{ route('admin.order.destroy', $order->id) }}" method="POST"
                                                    style="display:inline-block;"
                                                    onsubmit="return confirm('Bạn có chắc chắn muốn xoá đơn hàng này?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"> <i
                                                            class="fa fa-times"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                        <div class="modal fade" id="updateStatusModal{{ $order->id }}" tabindex="-1"
                                            aria-labelledby="statusModalLabel{{ $order->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="{{ route('admin.order.updateStatus', $order->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="statusModalLabel{{ $order->id }}">Cập nhật trạng
                                                                thái đơn hàng</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Đóng"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <label for="status">Chọn trạng thái:</label>
                                                            <select name="status" class="form-select">
                                                                <option value="pending"
                                                                    {{ $order->status == 'pending' ? 'selected' : '' }}>Chờ
                                                                    xử lý</option>
                                                                <option value="shipping"
                                                                    {{ $order->status == 'shipping' ? 'selected' : '' }}>
                                                                    Đang giao</option>
                                                                <option value="completed"
                                                                    {{ $order->status == 'completed' ? 'selected' : '' }}>
                                                                    Hoàn thành</option>
                                                                <option value="cancelled"
                                                                    {{ $order->status == 'cancelled' ? 'selected' : '' }}>
                                                                    Đã huỷ</option>
                                                            </select>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Đóng</button>
                                                            <button type="submit" class="btn btn-success">Cập nhật</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="pagenav">
                            <nav class="collection-paginate clearfix relative nav_pagi w_100">
                                <ul class="pagination clearfix">
                                    {{ $orders->links('pagination::bootstrap-4') }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery js CDN -->
@endsection
