@extends('home.index')
@section('content')
    <div class="layout-collection">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="{{ route('home') }}" title="Trang chủ"><span>Trang chủ</span></a>
                        <span class="mr_lr">></span>
                    </li>
                    <li><strong><span> Tất cả sản phẩm</span></strong></li>
                </ul>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-title">
                        <h1>Tất cả sản phẩm</h1>
                        <div class="title-separator">
                            <div class="separator-center"></div>
                        </div>
                    </div>
                    {{-- <div class="col-list-cate">
                        <div class="menu-list">
                            <a class="cate-item duration-300 " href="#" title="Dầu Gội">
                                <div class="cate-info-title">Dầu Gội</div>
                            </a>
                            <a class="cate-item duration-300 " href="#" title="Dầu Xã">
                                <div class="cate-info-title">Dầu Xã</div>
                            </a>
                            <a class="cate-item duration-300 " href="#" title="Nước Rửa Chén">
                                <div class="cate-info-title">Nước Rửa Chén</div>
                            </a>
                            <a class="cate-item duration-300 " href="#" title="Tinh Dầu">
                                <div class="cate-info-title">Tinh Dầu</div>
                            </a>
                        </div>
                    </div> --}}
                    {{-- <div class="col-desc">
                        <p class="p_style sm-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt earum hic explicabo maiores ex
                            id eligendi, molestiae natus eum, voluptates eaque ratione a blanditiis illum veritatis debitis,
                            non voluptate! Enim?</p>
                    </div> --}}
                </div>

                <div class="block-collection col-lg-12 col-12">
                    <div class="category-products products-view products-view-grid list_hover_pro">
                        <div class="filter-containers">
                            <div class="sort-cate clearfix">
                                {{-- <div class="sudes-filter">
                                    <a class="btn btn-outline btn-filter" title="Bộ lọc">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z" />
                                        </svg>
                                        Bộ lọc
                                        <span class="count-filter-val"></span>
                                    </a>
                                </div>
                                <div class="sort-cate-right">
                                    <h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z" />
                                            <path
                                                d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z" />
                                        </svg> Xếp theo
                                    </h3>
                                    <ul>
                                        <li class="btn-quick-sort default active">
                                            <a href="#" onclick="sortby('default')" title="Mặc định"><i></i>Mặc
                                                định</a>
                                        </li>
                                        <li class="btn-quick-sort alpha-asc">
                                            <a href="#" onclick="sortby('alpha-asc')" title="Tên A-Z"><i></i>Tên
                                                A-Z</a>
                                        </li>
                                        <li class="btn-quick-sort alpha-desc">
                                            <a href="#" onclick="sortby('alpha-desc')" title="Tên Z-A"><i></i>Tên
                                                Z-A</a>
                                        </li>
                                        <li class="btn-quick-sort position-desc">
                                            <a href="#" onclick="sortby('created-desc')"
                                                title="Hàng mới"><i></i>Hàng mới</a>
                                        </li>
                                        <li class="btn-quick-sort price-asc">
                                            <a href="#" onclick="sortby('price-asc')"
                                                title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                                        </li>
                                        <li class="btn-quick-sort price-desc">
                                            <a href="#" onclick="sortby('price-desc')"
                                                title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>

                        <div class="products-view products-view-grid list_hover_pro">
                            <div class="row">
                                @forelse ($products as $product)
                                    <div class="col-6 col-md-3">
                                        <div class="item_product_main">
                                            <form action="" method="post"
                                                class="variants product-action item-product-main duration-300"
                                                data-cart-form data-id="product-actions-34775949"
                                                enctype="multipart/form-data">
                                              
                                                
                                                <div class="product-thumbnail">
                                                    <a class="image_thumb scale_hover" href="#"
                                                        title="{{ $product->name ?? ''}}">
                                                        <img class="lazyload duration-300" src="{{ asset($product->images->first()->image ?? '/images/products/dauxa.jpg') }}"
                                                            data-src="{{ asset($product->images->first()->image ?? '/images/products/dauxa.jpg') }}"
                                                            alt="{{ $product->name ?? ''}}" />
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="name-price">
                                                        <h3 class="product-name line-clamp-2-new">
                                                            <a href="{{ route('product_detail', ['id' => $product->id]) }}" title="{{ $product->name ?? ''}}">{{ $product->name ?? ''}}</a>
                                                        </h3>
                                                        <div class="product-price-cart">
                                                             @if ($product->sale_price)
                                                            <span
                                                                class="compare-price">{{ number_format($product->price) }}₫</span>
                                                            <span
                                                                class="price">{{ number_format($product->sale_price) }}₫</span>
                                                        @else
                                                            <span
                                                                class="price">{{ number_format($product->price) }}₫</span>
                                                        @endif

                                                        </div>
                                                    </div>
                                                     <div class="product-button">
                                                    <input type="hidden" name="variantId"
                                                        value="{{ $product->variant_id }}" />

                                                    <a href="{{ route('product_detail', ['id' => $product->id]) }}"
                                                        class="btn-cart btn-views add_to_cart btn btn-primary"
                                                        title="Xem chi tiết" type="button">
                                                        <span>Xem chi tiết</span>
                                                        </button>

                                                        <a onclick="toggleFavorite({{ $product->id }}, this, {{ auth()->check() ? 'true' : 'false' }})"
                                                            class="setWishlist btn-views btn-circle">
                                                            @php
                                                                $isFavorited =
                                                                    auth()->check() &&
                                                                    auth()
                                                                        ->user()
                                                                        ->favoriteProducts->contains($product->id);
                                                            @endphp

                                                            @if ($isFavorited)
                                                                {{-- Trái tim đầy (đã yêu thích) --}}
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="red"
                                                                    viewBox="0 0 24 24" width="24"
                                                                    height="24">
                                                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2
                                                                            5.42 4.42 3 7.5 3c1.74 0 3.41 0.81
                                                                            4.5 2.09C13.09 3.81 14.76 3 16.5
                                                                            3 19.58 3 22 5.42 22 8.5c0
                                                                            3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                                                </svg>
                                                            @else
                                                                {{-- Trái tim rỗng (chưa yêu thích) --}}
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    viewBox="0 0 24 24" width="24"
                                                                    height="24">
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
                                 @empty
                                <div class="col-12 pt-5 pb-5">
                                    <div class="feedback-item pt-5 pb-5">
                                        <div class="block-content text-center">
                                            <p>Sản phẩm đang được cập nhật</p>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                            </div>
                        </div>
                        <div class="pagenav">
                            <nav class="collection-paginate clearfix relative nav_pagi w_100">
                                <ul class="pagination clearfix">
                                    {{ $products->links('pagination::bootstrap-4') }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('home.section.coupon') --}}
@endsection
