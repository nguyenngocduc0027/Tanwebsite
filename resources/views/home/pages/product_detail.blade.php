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
                        <a href="{{ route('product_subsub_category') }}" title="Kiểu 1"><span>Kiểu 1</span></a>
                        <span class="mr_lr">></span>
                    </li>
                    <li><strong><span>Chi tiết sản phẩm </span></strong></li>
                </ul>
            </div>
        </section>
        <section class="product layout-product">
            <div class="container">
                <div class="details-product">
                    <div class="bg-shadow margin-bottom-20">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12 product-detail-left product-images">
                                <div class="sticky">
                                    <div class="product-image-block relative">

                                        <div class="swiper-container gallery-top">
                                            <div class="swiper-wrapper" id="lightgallery">
                                                @for ($i = 0; $i < 7; $i++)
                                                    <a class="swiper-slide" data-hash="{{ $i }}" href="#"
                                                        title="Click để xem">
                                                        <img height="370" width="480"
                                                            src="/images/products/product1024x1024.jpg" alt="$$$$"
                                                            data-image="/images/products/product1024x1024.jpg"
                                                            class="img-responsive mx-auto d-block swiper-lazy" />
                                                    </a>
                                                @endfor
                                            </div>
                                        </div>

                                        <div class="swiper-container gallery-thumbs ">
                                            <div class="swiper-wrapper">
                                                @for ($i = 0; $i < 7; $i++)
                                                    <div class="swiper-slide" data-hash="{{ $i }}">
                                                        <div class="p-100">
                                                            <img height="80" width="80"
                                                                src="/images/products/dauxa.jpg" alt="$$$"
                                                                data-image="/images/products/dauxa.jpg"
                                                                class="swiper-lazy" />
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                            <div class="swiper-button-next">
                                            </div>
                                            <div class="swiper-button-prev">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12 col-12 details-pro">
                                <h1 class="title-product">Sản phẩm 1 - loại 1 - kiểu 1 - sản phẩm</h1>

                                <div class="inventory_quantity">
                                    <span class="mb-break">
                                        <span class="stock-brand-title">Mã:</span>
                                        <span class="a-vendor">Đang cập nhật</span>
                                    </span>
                                    <span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span class="mb-break">
                                        <span class="stock-brand-title">Thương hiệu:</span>
                                        <span class="a-vendor">Đang cập nhật</span>
                                    </span>
                                    <span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span class="mb-break">
                                        <span class="stock-brand-title">Tình trạng:</span>
                                        <span class="a-stock">Còn hàng</span>
                                    </span>
                                </div>
                                <form enctype="multipart/form-data" data-cart-form id="add-to-cart-form" action="#"
                                    method="post" class="form-inline">

                                    <div class="price-box clearfix">

                                        <span class="special-price">
                                            <span class="price product-price">3.800.000₫</span>
                                        </span> <!-- Giá Khuyến mại -->
                                        <span class="old-price">
                                            <del class="price product-price-old">
                                                4.100.000₫
                                            </del>
                                        </span> <!-- Giás gốc -->
                                        <span class="sale-off">-
                                            7%
                                        </span>
                                    </div>

                                    <div class="form-product">
                                        <div class="block-promotion">
                                            <div class="heading-promo">
                                                <svg height="15" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M152 0H154.2C186.1 0 215.7 16.91 231.9 44.45L256 85.46L280.1 44.45C296.3 16.91 325.9 0 357.8 0H360C408.6 0 448 39.4 448 88C448 102.4 444.5 115.1 438.4 128H480C497.7 128 512 142.3 512 160V224C512 241.7 497.7 256 480 256H32C14.33 256 0 241.7 0 224V160C0 142.3 14.33 128 32 128H73.6C67.46 115.1 64 102.4 64 88C64 39.4 103.4 0 152 0zM190.5 68.78C182.9 55.91 169.1 48 154.2 48H152C129.9 48 112 65.91 112 88C112 110.1 129.9 128 152 128H225.3L190.5 68.78zM360 48H357.8C342.9 48 329.1 55.91 321.5 68.78L286.7 128H360C382.1 128 400 110.1 400 88C400 65.91 382.1 48 360 48V48zM32 288H224V512H80C53.49 512 32 490.5 32 464V288zM288 512V288H480V464C480 490.5 458.5 512 432 512H288z">
                                                    </path>
                                                </svg>
                                                Quà tặng dành cho bạn:
                                            </div>
                                            <div class="promo-content">
                                                <ul>
                                                    <li>Quà tặng 1</li>
                                                    <li>Quà tặng 2</li>
                                                    <li>Quà tang 3</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="boz-form ">
                                            <div class="flex-quantity">
                                                <div class="custom custom-btn-number show">
                                                    <span>Số lượng: </span>
                                                    <div class="input_number_product">
                                                        <button class="btn_num num_1 button button_qty"
                                                            onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;"
                                                            type="button">-</button>
                                                        <input type="text" id="qtym" name="quantity" value="1"
                                                            maxlength="3" class="form-control prd_quantity"
                                                            onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                            onchange="if(this.value == 0)this.value=1;">
                                                        <button class="btn_num num_2 button button_qty"
                                                            onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;"
                                                            type="button"><span>+</span></button>
                                                    </div>
                                                </div>
                                                <div class="btn-mua button_actions clearfix">
                                                    <button class="btn-buyNow btn btn-primary">
                                                        <span class="txt-main">Mua ngay</span>
                                                    </button>
                                                    <button type="submit"
                                                        class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart btn-extent">
                                                        <span class="txt-main">Thêm vào giỏ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="bottom-product">

                                    <ul class="social-media" role="list">
                                        <li class="title">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3" />
                                            </svg>
                                            Chia sẻ
                                        </li>
                                        <li class="social-media__item social-media__item--facebook">
                                            <a title="Chia sẻ lên Facebook" href="https://www.facebook.com/sharer.php?u="
                                                target="_blank" rel="noopener" aria-label="Chia sẻ lên Facebook">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 155.139 155.139"
                                                    style="enable-background:new 0 0 155.139 155.139;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <path id="f_1_" style="fill:#010002;"
                                                            d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452v20.341H37.29v27.585h23.814v70.761H89.584z" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>


                                    <div class="line"></div>


                                    <div class="product-wish">
                                        <a href="#" class="setWishlist btn-views"
                                            data-wish="sam-tuoi-han-quoc-3-cu-1kg" tabindex="0"
                                            title="Thêm vào yêu thích">
                                            <img width="25" height="25" src="/images/heart.png"
                                                alt="Thêm vào yêu thích" />
                                            Thêm vào yêu thích
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 product-coupons margin-bottom-20">
                            <div class="bg-shadow">
                                <div class="title">Khuyến mãi dành cho bạn</div>
                                <div class="swiper_coupons swiper-container">
                                    <div class="swiper-wrapper">
                                        @for ($i = 0; $i < 6; $i++)
                                            <div class="swiper-slide">
                                                <div class="box-coupon">
                                                    <div class="mask-ticket">
                                                    </div>
                                                    <div class="image">
                                                        <img width="88" height="88" class="lazyload"
                                                            src="/images/coupon/img_coupon_1.jpg"
                                                            data-src="/images/coupon/img_coupon_1.jpg" alt="NEST200">
                                                    </div>
                                                    <div class="content_wrap">
                                                        <a title="Chi tiết" href="javascript:void(0)" class="info-button"
                                                            data-coupon="NEST200" data-time="12/12/2025"
                                                            data-content="Áp dụng cho đơn hàng từ <b>4,500,000đ</b> trở lên Không đi kèm với chương trình khác">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                                                <path
                                                                    d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <div class="content-top">
                                                            NEST200
                                                            <span class="line-clamp line-clamp-2">Giảm 200k giá trị đơn
                                                                hàng</span>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <span>HSD: 12/12/2025</span>
                                                            <div class="coupon-code js-copy" data-copy="NEST200"
                                                                title="Sao chép">Copy mã</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="2.13003" y="29" width="38" height="38"
                                                transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff"
                                                stroke-width="2" />
                                            <rect x="8" y="29.2133" width="30" height="30"
                                                transform="rotate(-45 8 29.2133)" fill="black" />
                                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="2.13003" y="29" width="38" height="38"
                                                transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff"
                                                stroke-width="2" />
                                            <rect x="8" y="29.2133" width="30" height="30"
                                                transform="rotate(-45 8 29.2133)" fill="black" />
                                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup-coupon">
                            <div class="content">
                                <div class="title">
                                    Thông tin voucher
                                </div>
                                <div class="close-popup-coupon" title="Đóng">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" x="0px" y="0px" viewBox="0 0 512.001 512.001"
                                        style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <ul>
                                    <li>
                                        <span>Mã giảm giá:</span>
                                        <span class="code"></span>
                                    </li>
                                    <li>
                                        <span>Ngày hết hạn:</span>
                                        <span class="time"></span>
                                    </li>
                                    <li>
                                        <span>Điều kiện:</span>
                                        <span class="dieukien">
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <script>
                            var swiper_coupons = null;

                            function initSwiperCoupons() {
                                swiper_coupons = new Swiper('.swiper_coupons', {
                                    slidesPerView: 4,
                                    spaceBetween: 16,
                                    watchOverflow: true,
                                    slidesPerGroup: 1,
                                    navigation: {
                                        nextEl: '.swiper_coupons .swiper-button-next',
                                        prevEl: '.swiper_coupons .swiper-button-prev',
                                    },
                                    breakpoints: {
                                        640: {
                                            slidesPerView: 2,
                                            spaceBetween: 14
                                        },
                                        768: {
                                            slidesPerView: 2.3,
                                            spaceBetween: 14
                                        },
                                        992: {
                                            slidesPerView: 2.3,
                                            spaceBetween: 16
                                        },
                                        1024: {
                                            slidesPerView: 3,
                                            spaceBetween: 16
                                        },
                                        1200: {
                                            slidesPerView: 4,
                                            spaceBetween: 16
                                        }
                                    }
                                });
                            }

                            function destroySwiperCoupons() {
                                if (swiper_coupons) {
                                    swiper_coupons.destroy(true, true);
                                    swiper_coupons = null;
                                }
                            }

                            function toggleSwiperCoupons() {
                                if ($(window).width() <= 767 && swiper_coupons) {
                                    destroySwiperCoupons();
                                } else if ($(window).width() > 767 && !swiper_coupons) {
                                    initSwiperCoupons();
                                }
                            }
                            toggleSwiperCoupons();
                            $(window).on('resize', function() {
                                toggleSwiperCoupons();
                            });
                        </script>

                        <div class="col-12 margin-bottom-20">
                            <div class="bg-shadow">
                                <div class="row">
                                    <div class="col-12 product-review-details  col-lg-12">

                                        <div class="product-tab e-tabs not-dqtab">
                                            <ul class="tabs tabs-title clearfix">

                                                <li class="tab-link active" data-tab="#tab-1">
                                                    <h3>Mô tả sản phẩm</h3>
                                                </li>


                                                <li class="tab-link" data-tab="#tab-2">
                                                    <h3>Hướng dẫn mua hàng</h3>
                                                </li>


                                                <li class="tab-link" data-tab="#tab-3">
                                                    <h3>Đánh giá</h3>
                                                </li>

                                            </ul>
                                            <div class="tab-float">

                                                <div id="tab-1" class="tab-content active content_extab">
                                                    <div class="rte product_getcontent product-review-content">
                                                        <div class="ba-text-fpt has-height">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.
                                                                Quisque faucibus ex sapien vitae pellentesque sem placerat.
                                                                In id cursus mi pretium tellus duis convallis. Tempus leo eu
                                                                aenean sed diam urna tempor. Pulvinar vivamus fringilla
                                                                lacus nec metus bibendum egestas. Iaculis massa nisl
                                                                malesuada lacinia integer nunc posuere. Ut hendrerit semper
                                                                vel class aptent taciti sociosqu. Ad litora torquent per
                                                                conubia nostra inceptos himenaeos.

                                                                Lorem ipsum dolor sit amet consectetur adipiscing elit.
                                                                Quisque faucibus ex sapien vitae pellentesque sem placerat.
                                                                In id cursus mi pretium tellus duis convallis. Tempus leo eu
                                                                aenean sed diam urna tempor. Pulvinar vivamus fringilla
                                                                lacus nec metus bibendum egestas. Iaculis massa nisl
                                                                malesuada lacinia integer nunc posuere. Ut hendrerit semper
                                                                vel class aptent taciti sociosqu. Ad litora torquent per
                                                                conubia nostra inceptos himenaeos.

                                                                Lorem ipsum dolor sit amet consectetur adipiscing elit.
                                                                Quisque faucibus ex sapien vitae pellentesque sem placerat.
                                                                In id cursus mi pretium tellus duis convallis. Tempus leo eu
                                                                aenean sed diam urna tempor. Pulvinar vivamus fringilla
                                                                lacus nec metus bibendum egestas. Iaculis massa nisl
                                                                malesuada lacinia integer nunc posuere. Ut hendrerit semper
                                                                vel class aptent taciti sociosqu. Ad litora torquent per
                                                                conubia nostra inceptos himenaeos.

                                                                Lorem ipsum dolor sit amet consectetur adipiscing elit.
                                                                Quisque faucibus ex sapien vitae pellentesque sem placerat.
                                                                In id cursus mi pretium tellus duis convallis. Tempus leo eu
                                                                aenean sed diam urna tempor. Pulvinar vivamus fringilla
                                                                lacus nec metus bibendum egestas. Iaculis massa nisl
                                                                malesuada lacinia integer nunc posuere. Ut hendrerit semper
                                                                vel class aptent taciti sociosqu. Ad litora torquent per
                                                                conubia nostra inceptos himenaeos.

                                                                Lorem ipsum dolor sit amet consectetur adipiscing elit.
                                                                Quisque faucibus ex sapien vitae pellentesque sem placerat.
                                                                In id cursus mi pretium tellus duis convallis. Tempus leo eu
                                                                aenean sed diam urna tempor. Pulvinar vivamus fringilla
                                                                lacus nec metus bibendum egestas. Iaculis massa nisl
                                                                malesuada lacinia integer nunc posuere. Ut hendrerit semper
                                                                vel class aptent taciti sociosqu. Ad litora torquent per
                                                                conubia nostra inceptos himenaeos.

                                                                Lorem ipsum dolor sit amet consectetur adipiscing elit.
                                                                Quisque faucibus ex sapien vitae pellentesque sem placerat.
                                                                In id cursus mi pretium tellus duis convallis. Tempus leo eu
                                                                aenean sed diam urna tempor. Pulvinar vivamus fringilla
                                                                lacus nec metus bibendum egestas. Iaculis massa nisl
                                                                malesuada lacinia integer nunc posuere. Ut hendrerit semper
                                                                vel class aptent taciti sociosqu. Ad litora torquent per
                                                                conubia nostra inceptos himenaeos.!</p>
                                                        </div>

                                                        <div class="show-more hidden-lg hidden-md hidden-sm">
                                                            <div
                                                                class="btn btn-primary btn-default btn--view-more duration-300">
                                                                <span class="more-text">Xem thêm <svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                                    </svg></span>
                                                                <span class="less-text">Thu gọn <svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                                                    </svg></span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div id="tab-2" class="tab-content content_extab">
                                                    <div class="rte">

                                                        <p><strong>Bước 1</strong>: Truy cập website và lựa chọn sản phẩm
                                                            cần mua để mua hàng</p>
                                                        <p><strong>Bước 2</strong>: Click và sản phẩm muốn mua, màn hình
                                                            hiển thị ra pop up với các lựa chọn sau</p>
                                                        <p>Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để
                                                            lựa chọn thêm sản phẩm vào giỏ hàng</p>
                                                        <p>Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ
                                                            hàng</p>
                                                        <p>Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm
                                                            vào: Đặt hàng và thanh toán</p>
                                                        <p><strong>Bước 3</strong>: Lựa chọn thông tin tài khoản thanh toán
                                                        </p>
                                                        <p>Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là
                                                            email và mật khẩu vào mục đã có tài khoản trên hệ thống</p>
                                                        <p>Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền
                                                            các thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài
                                                            khoản bạn sẽ dễ dàng theo dõi được đơn hàng của mình</p>
                                                        <p>Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột
                                                            vào mục đặt hàng không cần tài khoản</p>
                                                        <p><strong>Bước 4</strong>: Điền các thông tin của bạn để nhận đơn
                                                            hàng, lựa chọn hình thức thanh toán và vận chuyển cho đơn hàng
                                                            của mình</p>
                                                        <p><strong>Bước 5</strong>: Xem lại thông tin đặt hàng, điền chú
                                                            thích và gửi đơn hàng</p>
                                                        <p>Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách
                                                            gọi điện lại để xác nhận lại đơn hàng và địa chỉ của bạn.</p>
                                                        <p>Trân trọng cảm ơn.</p>

                                                    </div>
                                                </div>


                                                <div id="tab-3" class="tab-content content_extab">
                                                    <div class="rte">
                                                        <h3>Đánh giá sản phẩm</h3>
                                                        <div class="fb-comments"
                                                            data-href="http://127.0.0.1:8000/product_detail"
                                                            data-width="100%" data-numposts="5"
                                                            data-order-by="reverse_time">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 product-related product-swipers">
                            <div class="bg-shadow">
                                <h2>
                                    <a href="#" title="Sản phẩm liên quan">
                                        Sản phẩm liên quan
                                    </a>
                                </h2>
                                <div class="swiper_product_related swiper-container">
                                    <div class="swiper-wrapper">
                                        @for ($i = 0; $i < 6; $i++)
                                            <div class="swiper-slide">
                                                <div class="item_product_main">

                                                    <form action="#" method="post"
                                                        class="variants product-action item-product-main duration-300"
                                                        data-cart-form data-id="product-actions-34619470"
                                                        enctype="multipart/form-data">
                                                        <span class="flash-sale">-
                                                            21%
                                                        </span>

                                                        <div class="product-thumbnail">
                                                            <a class="image_thumb scale_hover"
                                                                href="#"
                                                                title="San pham so 1">
                                                                <img class="lazyload duration-300"
                                                                    src="/images/products/dauxa.jpg"
                                                                    data-src="/images/products/dauxa.jpg"
                                                                    alt="san pham so 1">
                                                            </a>
                                                        </div>
                                                        <div class="product-info">
                                                            <div class="name-price">
                                                                <h3 class="product-name line-clamp-2-new">
                                                                    <a href="#"
                                                                        title="San pham 1">San pham so {{$i}}</a>
                                                                </h3>
                                                                <div class="product-price-cart">
                                                                    <span class="compare-price">1.200.000₫</span>
                                                                    <span class="price">950.000₫</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-button">
                                                                <button
                                                                    class="btn-cart btn-views add_to_cart btn btn-primary "
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
                                                                    data-wish="hong-sam-lat-tam-mat-ong-daedong-han-quoc-hop-10-goi-x-20g"
                                                                    tabindex="0" title="Thêm vào yêu thích">
                                                                    <img width="25" height="25"
                                                                        src="/images/heart.png"
                                                                        alt="Thêm vào yêu thích" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="2.13003" y="29" width="38" height="38"
                                                transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff"
                                                stroke-width="2" />
                                            <rect x="8" y="29.2133" width="30" height="30"
                                                transform="rotate(-45 8 29.2133)" fill="black" />
                                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="2.13003" y="29" width="38" height="38"
                                                transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff"
                                                stroke-width="2" />
                                            <rect x="8" y="29.2133" width="30" height="30"
                                                transform="rotate(-45 8 29.2133)" fill="black" />
                                            <path d="M18.5 29H39.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            var swiper_related = null;

                            function initSwiperRelated() {
                                swiper_related = new Swiper('.swiper_product_related', {
                                    slidesPerView: 4,
                                    spaceBetween: 20,
                                    slidesPerGroup: 1,
                                    navigation: {
                                        nextEl: '.swiper_product_related .swiper-button-next',
                                        prevEl: '.swiper_product_related .swiper-button-prev',
                                    },
                                    breakpoints: {
                                        768: {
                                            slidesPerView: 4,
                                            spaceBetween: 20
                                        },
                                        992: {
                                            slidesPerView: 4,
                                            spaceBetween: 20
                                        },
                                        1024: {
                                            slidesPerView: 4,
                                            spaceBetween: 20
                                        }
                                    }
                                });
                            }

                            function destroySwiperRelated() {
                                if (swiper_related) {
                                    swiper_related.destroy(true, true);
                                    swiper_related = null;
                                }
                            }

                            function toggleSwiperRelated() {
                                if ($(window).width() <= 767 && swiper_related) {
                                    destroySwiperRelated();
                                } else if ($(window).width() > 767 && !swiper_related) {
                                    initSwiperRelated();
                                }
                            }
                            toggleSwiperRelated();
                            $(window).resize(toggleSwiperRelated);
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <script>
            var getLimit = 6;
            var alias = 'sam-tuoi-han-quoc-3-cu-1kg';

            function activeTab(obj) {
                $('.product-tab ul li').removeClass('active');
                $(obj).addClass('active');
                var id = $(obj).attr('data-tab');
                $('.tab-content').removeClass('active');
                $(id).addClass('active');
            }


            $('.product-tab ul li').click(function() {
                activeTab(this);
                return false;
            });
            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 5,
                slidesPerView: 10,
                freeMode: true,
                lazy: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                hashNavigation: true,
                slideToClickedSlide: true,
                breakpoints: {
                    260: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    300: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    500: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 5,
                        spaceBetween: 10,
                        direction: 'vertical'
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                        direction: 'vertical'
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                        direction: 'vertical'
                    },
                    1199: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                        direction: 'vertical'
                    }
                },
                navigation: {
                    nextEl: '.gallery-thumbs .swiper-button-next',
                    prevEl: '.gallery-thumbs .swiper-button-prev',
                },
            });
            var galleryTop = new Swiper('.gallery-top', {
                spaceBetween: 0,
                lazy: true,
                hashNavigation: true,
                thumbs: {
                    swiper: galleryThumbs
                }
            });
            var swiper = new Swiper('.product-relate-swiper', {
                slidesPerView: 4,
                loop: false,
                grabCursor: true,
                spaceBetween: 30,
                roundLengths: true,
                slideToClickedSlide: false,
                navigation: {
                    nextEl: '.product-relate-swiper .swiper-button-next',
                    prevEl: '.product-relate-swiper .swiper-button-prev',
                },
                autoplay: false,
                breakpoints: {
                    260: {
                        slidesPerView: 'auto',
                        spaceBetween: 15
                    },
                    500: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 15
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    991: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    }
                }
            });
            $(document).ready(function() {
                $("#lightgallery").lightGallery({
                    thumbnail: false
                });
                $("#videolary").lightGallery({
                    thumbnail: false
                });
            });
            $('.btn-buyNow').on('click', function(event) {
                $.ajax({
                    url: '/cart/add.js',
                    type: "post",
                    data: $("#add-to-cart-form").serialize(),
                    datatype: "json",
                    success: function(data) {
                        window.location.href = "cart.html";
                    },
                    error: function() {}
                });
                event.preventDefault();
            });
            $('.btn--view-more').on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                if ($('.product-review-details .product-review-content').hasClass('expanded')) {
                    $('html, body').animate({
                        scrollTop: $('.product-review-details').offset().top - 110
                    }, 'slow');
                }
                $this.parents('.product-review-details').find('.product-review-content').toggleClass('expanded');
                $(this).toggleClass('active');
                return false;
            });

            // Check if either specificationsDiv or viewContentDiv is absent or empty.
            // If true, hide the productBarDiv by adding the 'hidden' class.
            $(document).ready(function() {
                var productBarDiv = $('.product-sidebar');
                var productDetailsDiv = $('.product-review-details');
                var hasSpecifications = false;
                if (hasSpecifications == false && hasViewItem == false) {
                    productBarDiv.addClass('hidden');
                    productDetailsDiv.removeClass('col-lg-8').addClass('col-lg-12');
                }
            });
        </script>
    </div>
@endsection
