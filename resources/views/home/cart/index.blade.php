@extends('home.index')
@section('content')
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="/" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>&nbsp;</span>
                </li>

                <li><strong><span>Giỏ hàng</span></strong></li>

            </ul>
        </div>
    </section>
    <section class="main-cart-page main-container col1-layout">
        <div class="main container cartpcstyle">
            <div class="wrap_background_aside margin-bottom-40">
                <div class="row">
                    @if (count($cart) > 0)
                        @foreach ($cart as $id => $item)
                            <form id="delete-form-{{ $id }}" action="{{ route('cart.remove', $id) }}"
                                method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        @endforeach
                        <div class="col-xl-8 col-lg-7 col-12 col-cart-left">
                            <div class="bg-shadow margin-bottom-20">
                                <div class="header-cart">
                                    <div class="title-block-page">
                                        <h1 class="title_cart">
                                            <span>Giỏ hàng của bạn</span>
                                        </h1>
                                    </div>
                                </div>


                                <div class="cart-page d-xl-block d-none">
                                    <div class="cart-page d-xl-block d-none">
                                        <div class="drawer__inner">
                                            <div class="CartPageContainer">

                                                <form action="{{ route('cart.update_all') }}" method="post"
                                                    class="cart ajaxcart cartpage">
                                                    @csrf
                                                    <div class="cart-header-info">
                                                        <div>Thông tin sản phẩm</div>
                                                        <div>Đơn giá</div>
                                                        <div>Số lượng</div>
                                                        <div>Thành tiền</div>
                                                    </div>
                                                    <div
                                                        class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
                                                        @foreach ($cart as $id => $item)
                                                            <div class="ajaxcart__row">
                                                                <div class="ajaxcart__product cart_product" data-line="1">
                                                                    <a href="{{ route('product_detail', $item['id']) }}"
                                                                        class="ajaxcart__product-image cart_image"
                                                                        title="{{ $item['name'] }}">
                                                                        <img src="{{ asset($item['image']) }}"
                                                                            alt="{{ $item['name'] }}">
                                                                    </a>
                                                                    <div class="grid__item cart_info">
                                                                        <div
                                                                            class="ajaxcart__product-name-wrapper cart_name">
                                                                            <a href="{{ route('product_detail', $item['id']) }}"
                                                                                class="ajaxcart__product-name h4 line-clamp line-clamp-2-new"
                                                                                title="{{ $item['name'] }}">{{ $item['name'] }}</a>

                                                                            <a title="Xóa"
                                                                                class="cart__btn-remove remove-item-cart ajaxifyCart--remove"
                                                                                onclick="deleteCartItem({{ $id }})"
                                                                                type="button">Xóa</a>
                                                                        </div>
                                                                        <div class="grid">
                                                                            <div
                                                                                class="grid__item one-half text-right cart_prices">
                                                                                <span
                                                                                    class="cart-price">{{ number_format($item['price']) }}₫</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid">
                                                                            <div class="grid__item one-half cart_select">
                                                                                <div class="ajaxcart__qty input-group-btn">
                                                                                    <button type="button"
                                                                                        class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count"
                                                                                        onclick="decreaseQuantity('qty-{{ $id }}')">
                                                                                        - </button>
                                                                                    <input
                                                                                        class="ajaxcart__qty-num number-sidebar"
                                                                                        id="qty-{{ $id }}"
                                                                                        type="number"
                                                                                        name="quantities[{{ $id }}]"
                                                                                        value="{{ $item['quantity'] }}">
                                                                                    <button type="button"
                                                                                        class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count"
                                                                                        onclick="increaseQuantity('qty-{{ $id }}')">
                                                                                        + </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid justify-right">
                                                                            <div
                                                                                class="grid__item one-half text-right cart_prices">
                                                                                <span
                                                                                    class="cart-price item-total">{{ number_format($item['price'] * $item['quantity']) }}₫</span>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="text-end pt-2">
                                                        <button type="submit" class="btn btn-primary">Cập nhật giỏ
                                                            hàng</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-mobile-page d-block d-xl-none">
                                    <div class="CartMobileContainer">
                                        <form action="{{ route('cart.update_all') }}" method="post"
                                            class="cart ajaxcart cart-mobile">
                                            @csrf
                                            @foreach ($cart as $id => $item)
                                                <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body">
                                                    <div class="ajaxcart__row">
                                                        <div class="ajaxcart__product cart_product" data-line="1">
                                                            <a href="{{ route('product_detail', $item['id']) }}"
                                                                class="ajaxcart__product-image cart_image"
                                                                title="{{ $item['name'] }}">
                                                                <img width="80" height="80"
                                                                    src="{{ asset($item['image']) }}"
                                                                    alt="{{ $item['name'] }}">
                                                            </a>
                                                            <div class="grid__item cart_info">
                                                                <div class="ajaxcart__product-name-wrapper cart_name">
                                                                    <a href="{{ route('product_detail', $item['id']) }}"
                                                                        class="ajaxcart__product-name h4 line-clamp line-clamp-2-new"
                                                                        title="{{ $item['name'] }}">{{ $item['name'] }}</a>

                                                                </div>
                                                                <div class="grid">
                                                                    <div
                                                                        class="grid__item one-half cart_select cart_item_name">
                                                                        <div class="ajaxcart__qty input-group-btn">
                                                                            <button type="button"
                                                                                class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count"
                                                                                onclick="decreaseQuantity('qty-{{ $id }}')">
                                                                                - </button>
                                                                            <input id="qty-{{ $id }}"
                                                                                type="number"
                                                                                name="quantities[{{ $id }}]"
                                                                                value="{{ $item['quantity'] }}"
                                                                                class="ajaxcart__qty-num number-sidebar">
                                                                            <button type="button"
                                                                                class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count"
                                                                                onclick="increaseQuantity('qty-{{ $id }}')">
                                                                                + </button>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="grid__item one-half text-right cart_prices">
                                                                        <span
                                                                            class="cart-price">{{ number_format($item['price']) }}₫</span>
                                                                        <a title="Xóa"
                                                                            onclick="deleteCartItem({{ $id }})"
                                                                            type="button"
                                                                            class="cart__btn-remove remove-item-cart ajaxifyCart--remove">Xóa</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <button type="submit" class="btn btn-primary">Cập nhật giỏ hàng</button>
                                        </form>

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
                                                    <div class="item-content-right"><span class="total-price"
                                                            id="cart-total-pc">0₫</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="summary-action">
                                                <p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
                                                <p>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
                                            </div>



                                            <div class="summary-button">
                                                <div class="cart__btn-proceed-checkout-dt">
                                                    <a  href="{{ route('cart.checkout') }}"
                                                        class="button btn btn-default cart__btn-proceed-checkout btn-primary duration-300"
                                                        id="btn-proceed-checkout" title="Thanh toán ngay">Thanh toán
                                                        ngay</a>
                                                </div>
                                                <a class="return_buy btn btn-extent duration-300"
                                                    title="Tiếp tục mua hàng" href="{{ route('product') }}">Tiếp tục mua
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    @else
                      <div class="card">
                        <div class="card-body">
                            <div class="cart-page">
                                <div class="drawer__inner">
                                    <div class="CartPageContainer">
                                        <div class="cart--empty-message"><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                x="0px" y="0px" viewBox="0 0 201.387 201.387"
                                                style="enable-background:new 0 0 201.387 201.387;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M129.413,24.885C127.389,10.699,115.041,0,100.692,0C91.464,0,82.7,4.453,77.251,11.916    c-1.113,1.522-0.78,3.657,0.742,4.77c1.517,1.109,3.657,0.78,4.768-0.744c4.171-5.707,10.873-9.115,17.93-9.115    c10.974,0,20.415,8.178,21.963,19.021c0.244,1.703,1.705,2.932,3.376,2.932c0.159,0,0.323-0.012,0.486-0.034    C128.382,28.479,129.679,26.75,129.413,24.885z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M178.712,63.096l-10.24-17.067c-0.616-1.029-1.727-1.657-2.927-1.657h-9.813c-1.884,0-3.413,1.529-3.413,3.413    s1.529,3.413,3.413,3.413h7.881l6.144,10.24H31.626l6.144-10.24h3.615c1.884,0,3.413-1.529,3.413-3.413s-1.529-3.413-3.413-3.413    h-5.547c-1.2,0-2.311,0.628-2.927,1.657l-10.24,17.067c-0.633,1.056-0.648,2.369-0.043,3.439s1.739,1.732,2.97,1.732h150.187    c1.231,0,2.364-0.662,2.97-1.732S179.345,64.15,178.712,63.096z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M161.698,31.623c-0.478-0.771-1.241-1.318-2.123-1.524l-46.531-10.883c-0.881-0.207-1.809-0.053-2.579,0.423    c-0.768,0.478-1.316,1.241-1.522,2.123l-3.509,15c-0.43,1.835,0.71,3.671,2.546,4.099c1.835,0.43,3.673-0.71,4.101-2.546    l2.732-11.675l39.883,9.329l-6.267,26.795c-0.43,1.835,0.71,3.671,2.546,4.099c0.263,0.061,0.524,0.09,0.782,0.09    c1.55,0,2.953-1.062,3.318-2.635l7.045-30.118C162.328,33.319,162.176,32.391,161.698,31.623z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M102.497,39.692l-3.11-26.305c-0.106-0.899-0.565-1.72-1.277-2.28c-0.712-0.56-1.611-0.816-2.514-0.71l-57.09,6.748    c-1.871,0.222-3.209,1.918-2.988,3.791l5.185,43.873c0.206,1.737,1.679,3.014,3.386,3.014c0.133,0,0.27-0.009,0.406-0.024    c1.87-0.222,3.208-1.918,2.988-3.791l-4.785-40.486l50.311-5.946l2.708,22.915c0.222,1.872,1.91,3.202,3.791,2.99    C101.379,43.261,102.717,41.564,102.497,39.692z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M129.492,63.556l-6.775-28.174c-0.212-0.879-0.765-1.64-1.536-2.113c-0.771-0.469-1.696-0.616-2.581-0.406L63.613,46.087    c-1.833,0.44-2.961,2.284-2.521,4.117l3.386,14.082c0.44,1.835,2.284,2.964,4.116,2.521c1.833-0.44,2.961-2.284,2.521-4.117    l-2.589-10.764l48.35-11.626l5.977,24.854c0.375,1.565,1.775,2.615,3.316,2.615c0.265,0,0.533-0.031,0.802-0.096    C128.804,67.232,129.932,65.389,129.492,63.556z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M179.197,64.679c-0.094-1.814-1.592-3.238-3.41-3.238H25.6c-1.818,0-3.316,1.423-3.41,3.238l-6.827,133.12    c-0.048,0.934,0.29,1.848,0.934,2.526c0.645,0.677,1.539,1.062,2.475,1.062h163.84c0.935,0,1.83-0.384,2.478-1.062    c0.643-0.678,0.981-1.591,0.934-2.526L179.197,64.679z M22.364,194.56l6.477-126.293h143.701l6.477,126.293H22.364z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M126.292,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C136.532,79.686,131.939,75.093,126.292,75.093z M126.292,88.747c-1.883,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    c1.882,0,3.413,1.531,3.413,3.413S128.174,88.747,126.292,88.747z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M75.092,75.093c-5.647,0-10.24,4.593-10.24,10.24c0,5.647,4.593,10.24,10.24,10.24c5.647,0,10.24-4.593,10.24-10.24    C85.332,79.686,80.739,75.093,75.092,75.093z M75.092,88.747c-1.882,0-3.413-1.531-3.413-3.413s1.531-3.413,3.413-3.413    s3.413,1.531,3.413,3.413S76.974,88.747,75.092,88.747z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M126.292,85.333h-0.263c-1.884,0-3.413,1.529-3.413,3.413c0,0.466,0.092,0.911,0.263,1.316v17.457    c0,12.233-9.953,22.187-22.187,22.187s-22.187-9.953-22.187-22.187V88.747c0-1.884-1.529-3.413-3.413-3.413    s-3.413,1.529-3.413,3.413v18.773c0,15.998,13.015,29.013,29.013,29.013s29.013-13.015,29.013-29.013V88.747    C129.705,86.863,128.176,85.333,126.292,85.333z">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                                <g> </g>
                                            </svg>
                                            <p>Giỏ hàng của bạn đang trống</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    @endif
                </div>
            </div>
        </div>
    </section>


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

        function formatCurrency(number) {
            return number.toLocaleString('vi-VN') + '₫';
        }

        function parsePrice(text) {
            return parseInt(text.replace(/[^\d]/g, '')) || 0;
        }

        function updateCartTotalPC() {
            const container = document.querySelector('.cart-page');
            if (!container) return;

            let total = 0;
            const items = container.querySelectorAll('.item-total');
            items.forEach(item => {
                total += parsePrice(item.textContent);
            });

            const totalElement = document.querySelector('#cart-total-pc');
            if (totalElement) {
                totalElement.textContent = formatCurrency(total);
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateCartTotalPC();
        });
    </script>

@endsection
