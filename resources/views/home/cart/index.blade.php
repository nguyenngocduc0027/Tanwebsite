@extends('home.index')
@section('content')
    <section class="main-cart-page main-container col1-layout">
        <div class="main container cartpcstyle">
            <div class="wrap_background_aside margin-bottom-40">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-12 col-cart-left">
                        <div class="bg-shadow margin-bottom-20">
                            <div class="header-cart">
                                <div class="title-block-page">
                                    <h1 class="title_cart">
                                        <span>Giỏ hàng của bạn</span>
                                    </h1>
                                </div>
                            </div>
                            <div class="cart-page ">
                                <div class="drawer__inner">
                                    <div class="CartPageContainer">
                                        @if (count($cart) > 0)
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
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($cart as $id => $item)
                                                        <tr>
                                                            <td><img src="{{ asset($item['image']) }}" width="80"></td>
                                                            <td>{{ $item['name'] }}
                                                                <button type="button" class="btn btn-danger btn-sm"
                                                                onclick="deleteCartItem({{ $id }})">
                                                                Xoá
                                                            </button>
                                                            </td>
                                                            <td>{{ number_format($item['price']) }}₫</td>
                                                            <td>
                                                                <div class="grid__item one-half cart_select">
                                                                    <div class="ajaxcart__qty input-group-btn">
                                                                      <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" data-id="" data-qty="2" data-line="1" aria-label="-"> - </button>
                                                                      <input type="text" name="updates[]" class="ajaxcart__qty-num number-sidebar" maxlength="3" value="3" min="0" data-id="" data-line="1" aria-label="quantity" pattern="[0-9]*">
                                                                      <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" data-id="" data-line="1" data-qty="4" aria-label="+"> + </button>
                                                                    </div>
                                                                  </div>
                                                                <div class="input_number_product d-flex">
                                                                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="decreaseQuantity('qty-{{ $id }}')">-</button>
                                                                    <input id="qty-{{ $id }}" type="number" name="quantities[{{ $id }}]" value="{{ $item['quantity'] }}" class="form-control quantity-input" style="width:60px;" min="1">
                                                                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="increaseQuantity('qty-{{ $id }}')">+</button>
                                                                </div>
                                                            </td>
                                                            <td>{{ number_format($item['price'] * $item['quantity']) }}₫</td>
                                                            <td>
                                                               
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                  
                                                    <tr>
                                                        <td colspan="6" class="text-end">
                                                            <button type="submit" class="btn btn-primary">Cập nhật giỏ hàng</button>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </form>
                                
                                        {{-- Form xóa ẩn --}}
                                        @foreach ($cart as $id => $item)
                                            <form id="delete-form-{{ $id }}" action="{{ route('cart.remove', ['id' => $id]) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        @endforeach
                                
                                    @else
                                        <p>Giỏ hàng đang trống.</p>
                                    @endif
                                    </div>
                                </div>
                            </div>
                            </div>
                           




                    

                    </div>
                    <div class="col-xl-4 col-lg-5 col-12 col-cart-right">
                        <div class="sticky">
                            <div class="bg-shadow margin-bottom-20">
                                <div class="ajaxcart__footer">
                                    <div class="checkout-header">
                                        Thông tin đơn hàng
                                    </div>
                                    <div class="checkout-body">
                                        <div class="summary-total">

                                            <div class="content-items">
                                                <div class="item-content-left">Tổng tiền</div>
                                                <div class="item-content-right"><span
                                                        class="total-price">4.968.000₫</span></div>
                                            </div>

                                        </div>
                                        <div class="summary-action">
                                            <p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
                                            <p>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
                                        </div>

                                        <div class="summary-vat">
                                            <form method="post" novalidate="" class="formVAT">
                                                <h4>
                                                    Thời gian giao hàng
                                                </h4>
                                                <div class="timedeli-modal">
                                                    <fieldset class="input_group date_pick">
                                                        <input type="text" placeholder="Chọn ngày" readonly=""
                                                            id="date" name="attributes[shipdate]"
                                                            class="date_picker" required="">
                                                    </fieldset>
                                                    <fieldset class="input_group date_time">
                                                        <select name="time" class="timeer timedeli-cta">
                                                            <option selected="">Chọn thời gian</option>


                                                            <option value="08h00 - 12h00">08h00 - 12h00</option>

                                                            <option value=" 14h00 - 18h00"> 14h00 - 18h00</option>

                                                            <option value=" 19h00 - 21h00"> 19h00 - 21h00</option>

                                                        </select>
                                                    </fieldset>
                                                </div>

                                                <div class="r-bill">
                                                    <div class="checkbox">
                                                        <input type="hidden" name="attributes[invoice]"
                                                            id="re-checkbox-bill" value="không">
                                                        <input type="checkbox" id="checkbox-bill"
                                                            name="attributes[invoice]" value="có"
                                                            class="regular-checkbox">
                                                        <label for="checkbox-bill" class="box"></label>
                                                        <label for="checkbox-bill" class="title">Xuất hóa đơn công
                                                            ty</label>
                                                    </div>
                                                    <div class="bill-field">
                                                        <div class="form-group">
                                                            <label>Tên công ty</label>
                                                            <input type="text" class="form-control val-f"
                                                                name="attributes[company_name]" value=""
                                                                placeholder="Tên công ty">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Mã số thuế</label>
                                                            <input type="text" pattern=".{10,}"
                                                                onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                                class="form-control val-f val-n"
                                                                name="attributes[tax_code]" value=""
                                                                placeholder="Mã số thuế">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Địa chỉ công ty</label>
                                                            <textarea class="form-control val-f" name="attributes[company_address]"
                                                                placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email nhận hoá đơn</label>
                                                            <input type="email" class="form-control val-f val-email"
                                                                name="attributes[invoice_email]" value=""
                                                                placeholder="Email nhận hoá đơn">
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="summary-button">
                                            <div class="cart__btn-proceed-checkout-dt">
                                                <button onclick="goToCheckout(event)" type="button"
                                                    class="button btn btn-default cart__btn-proceed-checkout btn-primary duration-300"
                                                    id="btn-proceed-checkout" title="Thanh toán ngay">Thanh toán
                                                    ngay</button>
                                            </div>
                                            <a class="return_buy btn btn-extent duration-300" title="Tiếp tục mua hàng"
                                                href="collections/all">Tiếp tục mua hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <h2>Giỏ hàng của bạn</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (count($cart) > 0)
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
                        @foreach ($cart as $id => $item)
                            <tr>
                                <td><img src="{{ asset($item['image']) }}" width="80"></td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ number_format($item['price']) }}₫</td>
                                <td>
                                    <div class="input_number_product d-flex">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                            onclick="decreaseQuantity('qty-{{ $id }}')">-</button>
                                        <input id="qty-{{ $id }}" type="number"
                                            name="quantities[{{ $id }}]" value="{{ $item['quantity'] }}"
                                            class="form-control quantity-input" style="width:60px;" min="1">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                            onclick="increaseQuantity('qty-{{ $id }}')">+</button>
                                    </div>
                                </td>
                                <td>{{ number_format($item['price'] * $item['quantity']) }}₫</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="deleteCartItem({{ $id }})">
                                        Xoá
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-end"><strong>Tổng cộng:</strong></td>
                            <td colspan="2"><strong>{{ number_format($total) }}₫</strong></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-end">
                                <button type="submit" class="btn btn-primary">Cập nhật giỏ hàng</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>

            {{-- Form xóa ẩn --}}
            @foreach ($cart as $id => $item)
                <form id="delete-form-{{ $id }}" action="{{ route('cart.remove', ['id' => $id]) }}"
                    method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            @endforeach
        @else
            <p>Giỏ hàng đang trống.</p>
        @endif
    </div>

    <script>
        function increaseQuantity(inputId) {
            const input = document.getElementById(inputId);
            input.value = parseInt(input.value) + 1;
        }

        function decreaseQuantity(inputId) {
            const input = document.getElementById(inputId);
            let current = parseInt(input.value);
            if (current > 1) {
                input.value = current - 1;
            }
        }

        function deleteCartItem(id) {
            if (confirm('Bạn có chắc muốn xoá sản phẩm này?')) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>

@endsection
