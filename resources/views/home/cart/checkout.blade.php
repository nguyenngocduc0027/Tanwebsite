@extends('home.index')
@section('content')
<div class="container py-4">
    <h3 class="mb-4">Thông tin đặt hàng</h3>

    @if(session('cart') && count(session('cart')) > 0)
    <form action="{{ route('cart.placeOrder') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Họ tên *</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Email *</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Số điện thoại *</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Địa chỉ nhận hàng *</label>
                <input type="text" name="address" class="form-control" required>
            </div>

            <div class="col-12 mb-4">
                <label>Ghi chú</label>
                <textarea name="note" rows="3" class="form-control"></textarea>
            </div>
        </div>

        <h4 class="mt-4">Sản phẩm trong giỏ hàng</h4>
        <ul class="list-group mb-4">
            @foreach(session('cart') as $item)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $item['name'] }}</strong><br>
                        SL: {{ $item['quantity'] }} x {{ number_format($item['price']) }}₫
                    </div>
                    <span class="fw-bold text-danger">
                        {{ number_format($item['quantity'] * $item['price']) }}₫
                    </span>
                </li>
            @endforeach
        </ul>

        <div class="text-end">
            <button type="submit" class="btn btn-primary btn-lg">Đặt hàng</button>
        </div>
    </form>
    @else
        <div class="alert alert-warning">Giỏ hàng của bạn đang trống.</div>
    @endif
</div>
@endsection
