@extends('admin.index')
@section('content-admin')
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3 text-uppercase">Quản lý Danh Sách Đặt hàng</h3>
                <h6 class="op-7 mb-2">Cài đặt và quản lý danh sách thông tin đặt hàng</h6>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <h5> {{ $order->customer_name }}</h5>
                                <h6>Số tiền cần thanh toán: {{ number_format($order->total_amount) }} VNĐ</h6>
                                <ul>

                                    <li>
                                        Email: {{ $order->customer_email }}
                                    </li>
                                    <li>
                                        Số điện thoại: {{ $order->customer_phone }}
                                    </li>
                                    <li>
                                        Địa chỉ: {{ $order->customer_address }}
                                    </li>
                                    <li>
                                        Trạng thái: {{ $order->status }}
                                    </li>
                                </ul>
                                <div>
                                    Nội dung: {{ $order->customer_note ?? 'không có nội dung' }}
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Tên</th>
                                                <th>Giá</th>
                                                <th>Số lượng</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->items as $order)
                                                <tr>
                                                    <td>{{ $order->product_name }}</td>
                                                    <td>{{ $order->quantity }}</td>
                                                    <td>{{ number_format($order->price) }}</td>


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
        </div>
    </div>
@endsection
