<section class="section-index section_coupons">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">
                Yến sào Sudes Nest
            </span>
            <h2>
                Mã giảm giá dành cho bạn
            </h2>
            <div class="title-separator">
                <div class="separator-center"></div>
            </div>
        </div>
        <div class="swiper_coupons swiper-container">
            <div class="swiper-wrapper">
                @for ($i = 0; $i < 10; $i++)
                    <div class="swiper-slide">
                        <div class="box-coupon">
                            <div class="mask-ticket"></div>
                            <div class="image">
                                <img width="88" height="88" class="lazyload"
                                    src="/images/coupon/img_coupon_1.jpg"
                                    data-src="/images/coupon/img_coupon_1.jpg"
                                    alt="NEST200">
                            </div>
                            <div class="content_wrap">
                                <a title="Chi tiết" href="javascript:void(0)" class="info-button" data-coupon="NEST20{{$i}}"
                                    data-time="1{{$i}}/12/2025"
                                    data-content="Áp dụng cho đơn hàng từ <b>{{$i}}</b> trở lên. Không đi kèm với chương trình khác">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                        <path
                                            d="M144 80c0 26.5-21.5 48-48 48s-48-21.5-48-48s21.5-48 48-48s48 21.5 48 48zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z">
                                        </path>
                                    </svg>
                                </a>
                                <div class="content-top">
                                    NEST20{{$i}}
                                    <span class="line-clamp line-clamp-2">Giảm 20{{$i}}k giá trị đơn hàng</span>
                                </div>
                                <div class="content-bottom">
                                    <span>HSD: 1{{$i}}/12/2025</span>
                                    <div class="coupon-code js-copy" data-copy="NEST200" title="Sao chép">Copy mã</div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endfor
            </div>
            <div class="swiper-button-prev">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)"
                        stroke="black" fill="#fff" stroke-width="2" />
                    <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)"
                        fill="black" />
                    <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div class="swiper-button-next">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)"
                        stroke="black" fill="#fff" stroke-width="2" />
                    <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)"
                        fill="black" />
                    <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </div>
</section>
<div class="popup-coupon">
    <div class="content">
        <div class="title">
            Thông tin voucher
        </div>
        <div class="close-popup-coupon" title="Đóng">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
                y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;"
                xml:space="preserve">
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
                    slidesPerView: 2.5,
                    spaceBetween: 20
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
