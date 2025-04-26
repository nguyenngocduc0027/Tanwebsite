@extends('home.index')
@section('content')
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="{{ route('home') }}" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr">></span>
                </li>
                <li><strong><span>Giỏ hàng</span></strong></li>
            </ul>
        </div>
    </section>

    <section class="section-index">
        <div class="container">
            <h1>Giỏ Hàng</h1>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (count($cart) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach ($cart as $id => $details)
                            @php $total += $details['price'] * $details['quantity']; @endphp
                            <tr>
                                <td>{{ $details['name'] }}</td>
                                <td>{{ number_format($details['price']) }}đ</td>
                                <td>
                                    <form action="{{ route('cart.update', $id) }}" method="POST">
                                        @csrf
                                        <input type="number" name="quantity" value="{{ $details['quantity'] }}" min="1" style="width: 70px;">
                                        <button class="btn btn-sm btn-primary">Cập nhật</button>
                                    </form>
                                </td>
                                <td>{{ number_format($details['price'] * $details['quantity']) }}đ</td>
                                <td>
                                    <a href="{{ route('cart.remove', $id) }}" class="btn btn-danger btn-sm">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3"><strong>Tổng tiền:</strong></td>
                            <td><strong>{{ number_format($total) }}đ</strong></td>
                            <td>
                                <a href="{{ route('cart.clear') }}" class="btn btn-warning btn-sm">Xóa hết</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @else
                <p>Giỏ hàng đang trống!</p>
            @endif
        </div>
    </section>
@endsection
