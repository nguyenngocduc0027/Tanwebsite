@extends('home.index')
@section('content')

<div class="container">
    <h2>Giỏ hàng của bạn</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
    <form action="{{ route('cart.update_all') }}" method="POST">
        @csrf

        <table class="table">
            <thead>
                <tr>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $item)
                <tr>
                    <td>
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" width="80">
                    </td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ number_format($item['price']) }}₫</td>
                    <td>
                        <div class="input_number_product d-flex">
                            <button type="button" class="btn btn-sm btn-outline-secondary quantity-decrease">-</button>
                            <input type="number" name="quantities[{{ $id }}]" value="{{ $item['quantity'] }}" 
                                   class="form-control prd_quantity" style="width:60px;">
                            <button type="button" class="btn btn-sm btn-outline-secondary quantity-increase">+</button>
                        </div>
                    </td>
                    <td>{{ number_format($item['price'] * $item['quantity']) }}₫</td>
                    <td>
                        <form action="{{ route('cart.remove', ['id' => $id]) }}" method="POST" 
                              onsubmit="return confirm('Bạn có chắc muốn xoá sản phẩm này?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Xoá</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-right"><strong>Tổng cộng:</strong></td>
                    <td><strong>{{ number_format($total) }}₫</strong></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <button type="submit" class="btn btn-primary">Cập nhật giỏ hàng</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>

    @else
        <p>Giỏ hàng đang trống.</p>
    @endif
</div>

@endsection

@push('scripts')
<script>
    document.querySelectorAll('.quantity-increase').forEach((btn) => {
        btn.addEventListener('click', function () {
            const input = this.closest('.input_number_product').querySelector('.quantity-input');
            input.value = parseInt(input.value) + 1;
        });
    });

    document.querySelectorAll('.quantity-decrease').forEach((btn) => {
        btn.addEventListener('click', function () {
            const input = this.closest('.input_number_product').querySelector('.quantity-input');
            input.value = Math.max(1, parseInt(input.value) - 1);
        });
    });
</script>
@endpush
