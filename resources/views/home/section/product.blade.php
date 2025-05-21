<section class="section-index section_product_tab section_product_tab_2">
    <div class="container">
        <div class="wrap_tab_index not-dqtab e-tabs ajax-tab-1" data-section-2="ajax-tab-1">
            <div class="section-title">
                <span class="sub-title">
                    {{ $home_pages->product_title ?? '' }}
                </span>
                <h2>
                    <a href="#" title="{{ $home_pages->product_subtitle ?? '' }}">
                        {{ $home_pages->product_subtitle ?? '' }}</a>
                </h2>
                <div class="desc">
                  {{$home_pages->product_description ?? ''}}
                </div>
                <div class="title-separator">
                    <div class="separator-center"></div>
                </div>
                <div class="tab_big">
                    <div class="tab_ul">
                        <ul class="tabs tabs-title tab-pc tabtitle2 ajax clearfix">
                            @foreach ($categories as $index => $category)
                                <li class="tab-link tab_cate has-content {{ $index == 0 ? 'active' : '' }}"
                                    data-tab="tab1-{{ $index + 1 }}">
                                    <span>{{ $category->name }}</span>
                                </li>
                            @endforeach
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
                @foreach ($categories as $index => $category)
                    <div class="tab1-{{ $index + 1 }} tab-content {{ $index == 0 ? 'active' : '' }}">
                        <div class="row load-after" data-section="section_product_tab_{{ $index + 1 }}">
                            @foreach ($category->products->take(8) as $product)
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="item_product_main">
                                        <form action="#" method="post"
                                            class="variants product-action item-product-main duration-300"
                                            data-cart-form data-id="product-actions-{{ $product->id }}"
                                            enctype="multipart/form-data">


                                          {{--   @if ($product->has_gift)
                                                <div class="tag-promo" title="Quà tặng">
                                                    <img src="{{ asset('/images/tag_pro_icon.svg') }}" alt="Quà tặng"
                                                        class="lazyload" />
                                                    <div class="promotion-content">
                                                        <div class="line-clamp-5-new"
                                                            title="{{ $product->gift_description }}">
                                                            <ul>
                                                                @foreach ($product->gifts as $gift)
                                                                    <li>{{ $gift }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif --}}

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href=""
                                                    title="{{ $product->name }}">
                                                    <img class="lazyload loaded duration-300"
                                                        src="{{ asset($product->images->first()->image ?? '/images/products/dauxa.jpg') }}"
                                                        alt="{{ $product->name }}">
                                                </a>
                                            </div>

                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="" title="{{ $product->name }}">
                                                            {{ $product->name }}
                                                        </a>
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
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="view-more clearfix"
            style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: center; padding-top: 2rem;">
            <a href="{{ route('product') }}" title="Xem tất cả" class="btn btn-primary frame">
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
