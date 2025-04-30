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
                    <li class="home">
                        <a href="{{ route('product_category') }}" title="Sản Phẩm 1"><span>Sản Phẩm 1</span></a>
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
                    <div class="col-desc">
                        <p class="p_style sm-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt earum hic explicabo maiores ex
                            id eligendi, molestiae natus eum, voluptates eaque ratione a blanditiis illum veritatis debitis,
                            non voluptate! Enim?</p>
                    </div>
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
                                @for ($i = 1; $i < 18; $i++)
                                    <div class="col-6 col-md-3">
                                        <div class="item_product_main">
                                            <form action="" method="post"
                                                class="variants product-action item-product-main duration-300"
                                                data-cart-form data-id="product-actions-34775949"
                                                enctype="multipart/form-data">
                                                <span class="flash-sale">-6%</span>
                                                <div class="tag-promo" title="Quà tặng">
                                                    <img src="/images/tag_pro_icon.svg" data-src="/images/tag_pro_icon.svg"
                                                        alt="Quà tặng" class="lazyload" />
                                                    <div class="promotion-content">
                                                        <div class="line-clamp-5-new"
                                                            title="- Tặng 1 túi giấy xách đi kèm - 1 Hộp đường phèn">
                                                            <p><span style="letter-spacing: -0.2px;">- Tặng 1 túi giấy xách
                                                                    đi kèm <br>- 1 Hộp đường phèn </span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-thumbnail">
                                                    <a class="image_thumb scale_hover" href="#"
                                                        title="San Pham So {{ $i }} ">
                                                        <img class="lazyload duration-300" src="/images/products/dauxa.jpg"
                                                            data-src="/images/products/dauxa.jpg"
                                                            alt="San Pham So {{ $i }} " />
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="name-price">
                                                        <h3 class="product-name line-clamp-2-new">
                                                            <a href="#" title="San Pham So {{ $i }} ">San
                                                                Pham So {{ $i }} </a>
                                                        </h3>
                                                        <div class="product-price-cart">
                                                            <span class="compare-price">3.100.000₫</span>

                                                            <span class="price">2.900.000₫</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-button">
                                                        <input type="hidden" name="variantId" value="111118886" />
                                                        <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                            title="Thêm vào giỏ hàng">
                                                            <span>Thêm vào giỏ</span>
                                                            <svg enable-background="new 0 0 32 32" height="512"
                                                                viewBox="0 0 32 32" width="512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                    </g>
                                                                    <g>
                                                                        <path
                                                                            d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                        <a href="javascript:void(0)"
                                                            class="setWishlist btn-views btn-circle"
                                                            data-wish="copy-of-to-yen-tinh-che-cho-be-baby-loai-3"
                                                            tabindex="0" title="Thêm vào yêu thích">
                                                            <img width="25" height="25" src="/images/heart.png"
                                                                alt="Thêm vào yêu thích" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="pagenav">
                            <nav class="collection-paginate clearfix relative nav_pagi w_100">
                                <ul class="pagination clearfix">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="active page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link link-next-pre" href="#" title="2">&raquo;</a></li>
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
