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

                <li><strong><span>Danh sách yêu thích</span></strong></li>

            </ul>
        </div>
        <section class="page">
            <div class="container container--wishlist">
                <div class="page-title category-title">
                    <h1 class="title-head">
                        <a href="/danh-sach-yeu-thich" title="Danh sách yêu thích">Danh sách yêu thích</a>
                    </h1>
                </div>
                <div class="content-page rte">
                    <div id="list-favorite">
                        <div class="list-favorite-right" data-type="wishlist">
                            <div class="list-favorite-main">
                                <div class="list-favorite-list row">
                                    @if ($wishlists->count() > 0)
                                        @foreach ($wishlists as $wishlist)
                                            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item_product_main js-wishlist-item">
                                                    <form action="/cart/add" method="post"
                                                        class="variants product-action item-product-main duration-300"
                                                        data-cart-form="" data-id="product-actions-34775949"
                                                        enctype="multipart/form-data">
                                                        <span class="flash-sale">-
                                                            6%
                                                        </span>

                                                        <div class="tag-promo" title="Quà tặng">
                                                            <img src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665"
                                                                data-src="//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665"
                                                                alt="Quà tặng" class="lazyload loaded"
                                                                data-was-processed="true">
                                                            <div class="promotion-content">
                                                                <div class="line-clamp-3-new"
                                                                    title="- Tặng 1 túi giấy xách đi kèm - 1 Hộp đường phèn">

                                                                    <p>
                                                                        <span style="letter-spacing: -0.2px;">- Tặng 1 túi
                                                                            giấy
                                                                            xách
                                                                            đi kèm <br>- 1 Hộp đường phèn </span>
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="product-thumbnail">
                                                            <a class="image_thumb scale_hover"
                                                                href="/copy-of-to-yen-tinh-che-cho-be-baby-loai-3"
                                                                title="{{ $wishlist->name }}">
                                                                <img class="lazyload duration-300 loaded"
                                                                    src="{{ asset($wishlist->images->first()->image ?? '/images/products/dauxa.jpg') }}"
                                                                    data-src="{{ asset($wishlist->images->first()->image ?? '/images/products/dauxa.jpg') }}"
                                                                    alt="{{ $wishlist->name }}" data-was-processed="true">
                                                            </a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="name-price">
                                                                <h3 class="product-name line-clamp-2-new">
                                                                    <a href="/copy-of-to-yen-tinh-che-cho-be-baby-loai-3"
                                                                        title="{{ $wishlist->name }}">{{ $wishlist->name }}</a>
                                                                </h3>
                                                                <div class="product-price-cart">
                                                                    <span class="compare-price">{{number_format($wishlist->price)}}₫</span>

                                                                    <span class="price">{{number_format($wishlist->sale_price)}}₫</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-button">
                                                                <input type="hidden" name="variantId" value="111118886">
                                                                <button
                                                                    class="btn-cart btn-views add_to_cart btn btn-primary "
                                                                    title="Thêm vào giỏ hàng">
                                                                    <span>Thêm vào giỏ</span>
                                                                    <svg id="Layer_1" enable-background="new 0 0 32 32"
                                                                        height="512" viewBox="0 0 32 32" width="512"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g id="_01">
                                                                            <g>
                                                                                <path
                                                                                    d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z">
                                                                                </path>
                                                                            </g>
                                                                            <g>
                                                                                <path
                                                                                    d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z">
                                                                                </path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </button>
                                                                <a href="#"
                                                                    onclick="toggleFavorite({{ $wishlist->id }}, this, {{ auth()->check() ? 'true' : 'false' }})"
                                                                    class="setWishlist btn-views btn-circle">
                                                                    @php
                                                                        $isFavorited =
                                                                            auth()->check() &&
                                                                            auth()
                                                                                ->user()
                                                                                ->favoriteProducts->contains(
                                                                                    $wishlist->id,
                                                                                );
                                                                    @endphp

                                                                    @if ($isFavorited)
                                                                        {{-- Trái tim đầy (đã yêu thích) --}}
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            fill="red" viewBox="0 0 24 24"
                                                                            width="24" height="24">
                                                                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2
                                                                        5.42 4.42 3 7.5 3c1.74 0 3.41 0.81
                                                                        4.5 2.09C13.09 3.81 14.76 3 16.5
                                                                        3 19.58 3 22 5.42 22 8.5c0
                                                                        3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                                                        </svg>
                                                                    @else
                                                                        {{-- Trái tim rỗng (chưa yêu thích) --}}
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" viewBox="0 0 24 24"
                                                                            width="24" height="24">
                                                                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2
                                                                        12.28 2 8.5 2 5.42 4.42 3 7.5
                                                                        3c1.74 0 3.41 0.81 4.5 2.09C13.09
                                                                        3.81 14.76 3 16.5 3 19.58 3
                                                                        22 5.42 22 8.5c0 3.78-3.4
                                                                        6.86-8.55 11.54L12 21.35z" />
                                                                        </svg>
                                                                    @endif
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="" style="display: flex; justify-content: center;">
                                            <div class="drawer__inner">
                                                <div class="CartPageContainer">
                                                    <div class="cart--empty-message">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                            id="Capa_1" x="0px" y="0px" viewBox="0 0 201.387 201.387"
                                                            style="enable-background:new 0 0 201.387 201.387;"
                                                            xml:space="preserve">
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
                                                        <p>Danh sách yêu thích của bạn đang trống</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
