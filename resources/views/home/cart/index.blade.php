<div class="container">
    <h2>Giỏ hàng của bạn</h2>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
    <table class="table">
      <thead>
        <tr>
          <th>Ảnh</th>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Thành tiền</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cart as $item)
        <tr>
          <td>
            <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" width="80">
          </td>
          <td>{{ $item['name'] }}</td>
          <td>{{ number_format($item['price']) }}₫</td>
          <td>{{ $item['quantity'] }}</td>
          <td>{{ number_format($item['price'] * $item['quantity']) }}₫</td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <td colspan="4" class="text-right"><strong>Tổng cộng:</strong></td>
          <td><strong>{{ number_format($total) }}₫</strong></td>
        </tr>
      </tfoot>
    </table>
    @else
      <p>Giỏ hàng đang trống.</p>
    @endif
</div>