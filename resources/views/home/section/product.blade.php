<section class="section-index section_product_tab section_product_tab_2">
    <div class="container">
        <div class="wrap_tab_index not-dqtab e-tabs ajax-tab-1" data-section-2="ajax-tab-1">
            <div class="section-title">
                <span class="sub-title">
                    XÃ HỘI VẠN THIỆN
                </span>
                <h2>
                    <a href="#" title="SẢN PHẨM ĐANG BÁN">SẢN PHẨM ĐANG BÁN</a>
                </h2>
                <div class="title-separator">
                    <div class="separator-center"></div>
                </div>
                <div class="tab_big">
                    <div class="tab_ul">
                        <ul class="tabs tabs-title tab-pc tabtitle2 ajax clearfix">
                            <li class="tab-link tab_cate has-content" data-tab="tab1-1">
                                <span>SẢN PHẨM 1</span>
                            </li>
                            <li class="tab-link tab_cate has-content" data-tab="tab1-2">
                                <span>SẢN PHẨM 2</span>
                            </li>
                            <li class="tab-link tab_cate has-content" data-tab="tab1-3">
                                <span>SẢN PHẨM 3</span>
                            </li>
                            <li class="tab-link tab_cate has-content" data-tab="tab1-4">
                                <span>SẢN PHẨM 4</span>
                            </li>
                        </ul>
                        <div class="grad-left">
                            <a href="javascript:;" class="prev button" title="prev" style="display: none;">
                                <svg width="24" height="24" viewBox="0 0 61 63" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="31.7349" y="3.02869" width="40.2232" height="4"
                                        transform="rotate(45 31.7349 3.02869)" fill="black" />
                                    <rect x="28.9717" y="62.9694" width="22.3263" height="4"
                                        transform="rotate(-135 28.9717 62.9694)" fill="black" />
                                    <rect x="28.0605" y="58.2244" width="41.6244" height="4"
                                        transform="rotate(-45 28.0605 58.2244)" fill="black" />
                                    <rect x="31.9126" y="3.20361" width="22.4441" height="4"
                                        transform="rotate(135 31.9126 3.20361)" fill="black" />
                                    <path d="M2 31.0007H38" stroke="black" stroke-width="4" stroke-linecap="square"
                                        stroke-linejoin="round" />
                                    <path d="M31 22.0007L40 31.0007L31 40.0007" stroke="black" stroke-width="4"
                                        stroke-linecap="square" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                        <div class="grad-right">
                            <a href="javascript:;" class="next button" title="next" style="display: none;">
                                <svg width="24" height="24" viewBox="0 0 61 63" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="31.7349" y="3.02869" width="40.2232" height="4"
                                        transform="rotate(45 31.7349 3.02869)" fill="black" />
                                    <rect x="28.9717" y="62.9694" width="22.3263" height="4"
                                        transform="rotate(-135 28.9717 62.9694)" fill="black" />
                                    <rect x="28.0605" y="58.2244" width="41.6244" height="4"
                                        transform="rotate(-45 28.0605 58.2244)" fill="black" />
                                    <rect x="31.9126" y="3.20361" width="22.4441" height="4"
                                        transform="rotate(135 31.9126 3.20361)" fill="black" />
                                    <path d="M2 31.0007H38" stroke="black" stroke-width="4" stroke-linecap="square"
                                        stroke-linejoin="round" />
                                    <path d="M31 22.0007L40 31.0007L31 40.0007" stroke="black" stroke-width="4"
                                        stroke-linecap="square" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-products">
                <div class="tab1-1 tab-content">
                    <div class="row load-after" data-section="section_product_tab_2">
                        @for ($i = 0; $i < 8; $i++)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="item_product_main">
                                    <form action="#" method="post"
                                        class="variants product-action item-product-main duration-300" data-cart-form
                                        data-id="product-actions-34619464" enctype="multipart/form-data">
                                        @if ($i % 3 == 0)
                                            <span class="tag-soldout">Hết hàng</span>
                                        @else
                                            <span class="flash-sale">-3%</span>
                                        @endif
                                        @if ($i % 2 == 0)
                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="/images/tag_pro_icon.svg"
                                                    data-src="/images/tag_pro_icon.svg" alt="Quà tặng"
                                                    class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="Quà Tặng 1 - Không BánQuà Tặng 2 - Không BánQuà Tặng 3 - Không Bán">
                                                        <ul>
                                                            <li>Quà Tặng 1 - Không Bán</li>
                                                            <li>Quà Tặng 2 - Không Bán</li>
                                                            <li>Quà Tặng 3 - Không Bán</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover" href="#"
                                                title="Sản Phẩm 1 - Loại {{ $i }}">
                                                <img class="lazyload duration-300" src="/images/products/dauxa.jpg"
                                                    data-src="/images/products/dauxa.jpg"
                                                    alt="Sản Phẩm 1 - Loại {{ $i }}">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="name-price">
                                                <h3 class="product-name line-clamp-2-new">
                                                    <a href=""
                                                        title="Sản Phẩm 1 - Loại {{ $i }}">Sản Phẩm 1 - Loại
                                                        {{ $i }}</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <span class="compare-price">18.500.000₫</span>
                                                    <span class="price">18.000.000₫</span>
                                                </div>
                                            </div>
                                            <div class="product-button">
                                                <input type="hidden" name="variantId" value="110199750" />
                                                @if ($i % 3 == 0)
                                                    <button class="btn-cart btn-views disable btn btn-primary"
                                                        title="Xem chi tiết" type="button" onclick="#">
                                                        <span>Xem chi tiết</span>
                                                        <svg width="24" height="24" class="duration-300"
                                                            viewBox="0 0 61 63" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="31.7349" y="3.02869" width="40.2232"
                                                                height="4" transform="rotate(45 31.7349 3.02869)"
                                                                fill="black" />
                                                            <rect x="28.9717" y="62.9694" width="22.3263"
                                                                height="4"
                                                                transform="rotate(-135 28.9717 62.9694)"
                                                                fill="black" />
                                                            <rect x="28.0605" y="58.2244" width="41.6244"
                                                                height="4" transform="rotate(-45 28.0605 58.2244)"
                                                                fill="black" />
                                                            <rect x="31.9126" y="3.20361" width="22.4441"
                                                                height="4" transform="rotate(135 31.9126 3.20361)"
                                                                fill="black" />
                                                            <path d="M2 31.0007H38" stroke="black" stroke-width="4"
                                                                stroke-linecap="square" stroke-linejoin="round" />
                                                            <path d="M31 22.0007L40 31.0007L31 40.0007" stroke="black"
                                                                stroke-width="4" stroke-linecap="square"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                @else
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
                                                @endif
                                                <a href="#" class="setWishlist btn-views btn-circle"
                                                    data-wish="cao-thien-sam-kgc-han-quoc-extract-master-class-hop-200g"
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

                <div class="tab1-2 tab-content">
                    <div class="row load-after" data-section="section_product_tab_2">
                        @for ($i = 0; $i < 7; $i++)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="item_product_main">
                                    <form action="#" method="post"
                                        class="variants product-action item-product-main duration-300" data-cart-form
                                        data-id="product-actions-34619464" enctype="multipart/form-data">
                                        @if ($i % 3 == 0)
                                            <span class="tag-soldout">Hết hàng</span>
                                        @else
                                            <span class="flash-sale">-3%</span>
                                        @endif
                                        @if ($i % 2 == 0)
                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="/images/tag_pro_icon.svg"
                                                    data-src="/images/tag_pro_icon.svg" alt="Quà tặng"
                                                    class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="Quà Tặng 1 - Không BánQuà Tặng 2 - Không BánQuà Tặng 3 - Không Bán">
                                                        <ul>
                                                            <li>Quà Tặng 1 - Không Bán</li>
                                                            <li>Quà Tặng 2 - Không Bán</li>
                                                            <li>Quà Tặng 3 - Không Bán</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover" href="#"
                                                title="Sản Phẩm 2 - Loại {{ $i }}">
                                                <img class="lazyload duration-300" src="/images/products/dauxa.jpg"
                                                    data-src="/images/products/dauxa.jpg"
                                                    alt="Sản Phẩm 2 - Loại {{ $i }}">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="name-price">
                                                <h3 class="product-name line-clamp-2-new">
                                                    <a href="#"
                                                        title="Sản Phẩm 2 - Loại {{ $i }}">Sản Phẩm 2 - Loại
                                                        {{ $i }}</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <span class="compare-price">18.500.000₫</span>
                                                    <span class="price">18.000.000₫</span>
                                                </div>
                                            </div>
                                            <div class="product-button">
                                                <input type="hidden" name="variantId" value="110199750" />
                                                @if ($i % 3 == 0)
                                                    <button class="btn-cart btn-views disable btn btn-primary"
                                                        title="Xem chi tiết" type="button" onclick="#">
                                                        <span>Xem chi tiết</span>
                                                        <svg width="24" height="24" class="duration-300"
                                                            viewBox="0 0 61 63" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="31.7349" y="3.02869" width="40.2232"
                                                                height="4" transform="rotate(45 31.7349 3.02869)"
                                                                fill="black" />
                                                            <rect x="28.9717" y="62.9694" width="22.3263"
                                                                height="4"
                                                                transform="rotate(-135 28.9717 62.9694)"
                                                                fill="black" />
                                                            <rect x="28.0605" y="58.2244" width="41.6244"
                                                                height="4" transform="rotate(-45 28.0605 58.2244)"
                                                                fill="black" />
                                                            <rect x="31.9126" y="3.20361" width="22.4441"
                                                                height="4" transform="rotate(135 31.9126 3.20361)"
                                                                fill="black" />
                                                            <path d="M2 31.0007H38" stroke="black" stroke-width="4"
                                                                stroke-linecap="square" stroke-linejoin="round" />
                                                            <path d="M31 22.0007L40 31.0007L31 40.0007" stroke="black"
                                                                stroke-width="4" stroke-linecap="square"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                @else
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
                                                @endif
                                                <a href="#" class="setWishlist btn-views btn-circle"
                                                    data-wish="cao-thien-sam-kgc-han-quoc-extract-master-class-hop-200g"
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

                <div class="tab1-3 tab-content">
                    <div class="row load-after" data-section="section_product_tab_2">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="item_product_main">
                                    <form action="#" method="post"
                                        class="variants product-action item-product-main duration-300" data-cart-form
                                        data-id="product-actions-34619464" enctype="multipart/form-data">
                                        @if ($i % 3 == 0)
                                            <span class="tag-soldout">Hết hàng</span>
                                        @else
                                            <span class="flash-sale">-3%</span>
                                        @endif
                                        @if ($i % 2 == 0)
                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="/images/tag_pro_icon.svg"
                                                    data-src="/images/tag_pro_icon.svg" alt="Quà tặng"
                                                    class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="Quà Tặng 1 - Không BánQuà Tặng 2 - Không BánQuà Tặng 3 - Không Bán">
                                                        <ul>
                                                            <li>Quà Tặng 1 - Không Bán</li>
                                                            <li>Quà Tặng 2 - Không Bán</li>
                                                            <li>Quà Tặng 3 - Không Bán</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover" href="#"
                                                title="Sản Phẩm 3 - Loại {{ $i }}">
                                                <img class="lazyload duration-300" src="/images/products/dauxa.jpg"
                                                    data-src="/images/products/dauxa.jpg"
                                                    alt="Sản Phẩm 3 - Loại {{ $i }}">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="name-price">
                                                <h3 class="product-name line-clamp-2-new">
                                                    <a href="#"
                                                        title="Sản Phẩm 3 - Loại {{ $i }}">Sản Phẩm 3 - Loại {{ $i }}</a>
                                                </h3>
                                                <div class="product-price-cart">
                                                    <span class="compare-price">18.500.000₫</span>
                                                    <span class="price">18.000.000₫</span>
                                                </div>
                                            </div>
                                            <div class="product-button">
                                                <input type="hidden" name="variantId" value="110199750" />
                                                @if ($i % 3 == 0)
                                                    <button class="btn-cart btn-views disable btn btn-primary"
                                                        title="Xem chi tiết" type="button" onclick="#">
                                                        <span>Xem chi tiết</span>
                                                        <svg width="24" height="24" class="duration-300"
                                                            viewBox="0 0 61 63" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="31.7349" y="3.02869" width="40.2232"
                                                                height="4" transform="rotate(45 31.7349 3.02869)"
                                                                fill="black" />
                                                            <rect x="28.9717" y="62.9694" width="22.3263"
                                                                height="4"
                                                                transform="rotate(-135 28.9717 62.9694)"
                                                                fill="black" />
                                                            <rect x="28.0605" y="58.2244" width="41.6244"
                                                                height="4" transform="rotate(-45 28.0605 58.2244)"
                                                                fill="black" />
                                                            <rect x="31.9126" y="3.20361" width="22.4441"
                                                                height="4" transform="rotate(135 31.9126 3.20361)"
                                                                fill="black" />
                                                            <path d="M2 31.0007H38" stroke="black" stroke-width="4"
                                                                stroke-linecap="square" stroke-linejoin="round" />
                                                            <path d="M31 22.0007L40 31.0007L31 40.0007" stroke="black"
                                                                stroke-width="4" stroke-linecap="square"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                @else
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
                                                @endif
                                                <a href="#" class="setWishlist btn-views btn-circle"
                                                    data-wish="cao-thien-sam-kgc-han-quoc-extract-master-class-hop-200g"
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
                <div class="tab1-4 tab-content">
                    <div class="row load-after" data-section="section_product_tab_4">
                        <div class="alert alert-warning alert-dismissible show margin-bottom-0" role="alert">
                            <span>Hiện tại chưa có sản phẩm nào trong danh mục này!...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-more clearfix"
            style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: center; padding-top: 2rem;">
            <a href="#" title="Xem tất cả" class="btn btn-primary frame">
                <svg width="14" height="32" viewBox="0 0 14 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-left">
                    <path
                        d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                        fill="none" />
                    <path
                        d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                        stroke="white" />
                </svg>
                Xem tất cả
                <svg width="14" height="32" viewBox="0 0 14 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-right">
                    <path
                        d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                        fill="none" />
                    <path
                        d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                        stroke="white" />
                </svg>
            </a>
        </div>
    </div>
</section>

<script>
    $(document).ready(function($) {
        lazyBlockProduct('section_product_tab_2', '0px 0px -250px 0px');
        var tabUl = $('.section_product_tab_2 .tab_ul ul');
        var prevBtn = $(".section_product_tab_2 .tab_ul .prev");
        var nextBtn = $(".section_product_tab_2 .tab_ul .next");

        function checkOverflow() {
            if (tabUl.get(0).scrollWidth > tabUl.get(0).clientWidth) {
                prevBtn.show();
                nextBtn.show();
            } else {
                prevBtn.hide();
                nextBtn.hide();
            }
        }

        prevBtn.click(function() {
            var leftPos = tabUl.scrollLeft();
            tabUl.animate({
                scrollLeft: leftPos - 345
            }, 500);
        });

        nextBtn.click(function() {
            var leftPos = tabUl.scrollLeft();
            tabUl.animate({
                scrollLeft: leftPos + 150
            }, 500);
        });

        checkOverflow();
        $(window).resize(checkOverflow);
    });
</script>
<script>
    $(document).ready(function() {
        $('.section_product_tab_2 .tab-link').click(function() {
            var tab_id = $(this).data('tab');

            // Xóa active ở tất cả li và content
            $('.section_product_tab_2 .tab-link').removeClass('active');
            $('.section_product_tab_2 .tab-content').removeClass('active');

            // Gán active cho li được click và tab content tương ứng
            $(this).addClass('active');
            $('.section_product_tab_2 .' + tab_id).addClass('active');
        });

        // Kích hoạt tab đầu tiên khi load trang
        $('.section_product_tab_2 .tab-link').first().click();
    });
</script>
