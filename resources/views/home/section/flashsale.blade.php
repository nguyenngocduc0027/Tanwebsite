<section class="section-index section_flash_sale">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">
                Xã Hội Vạn Thiện
            </span>
            <h2>
                <a href="#" title="Khuyến mãi đặc biệt">
                    Khuyến mãi đặc biệt
                </a>
            </h2>
            <div class="title-separator">
                <div class="separator-center"></div>
            </div>
            <div class="count-down">
                <div class="timer-view" data-countdown="countdown" data-date="04-09-2025-23-20-45"></div>
            </div>
        </div>
        <div class="block-product-sale  has-deal-time">
            <div class="swiper_sale swiper-container">
                <div class="swiper-wrapper load-after" data-section="section_flash_sale">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="swiper-slide">
                            <div class="item_product_main">
                                <form action="#" method="post"
                                    class="variants product-action item-product-main product-flash-sale duration-300"
                                    data-cart-form data-id="product-actions-34620973" enctype="multipart/form-data">
                                    @if ($i % 2 == 0)
                                        <span class="tag-soldout">Hết hàng</span>
                                    @else
                                        <span class="flash-sale">-37%</span>
                                    @endif
                                    @if ($i % 3 == 0)
                                        <div class="tag-promo" title="Quà tặng">
                                            <img src="/images/tag_pro_icon.svg" data-src="/images/tag_pro_icon.svg"
                                                alt="Quà tặng" class="lazyload loaded" data-was-processed="true">
                                            <div class="promotion-content">
                                                <div class="line-clamp-5-new" title="">
                                                    <ul>
                                                        <li>Khuyến Mãi Sản Phẩm 1</li>
                                                        <li>Khuyến Mãi Sản Phẩm 2</li>
                                                        <li>Khuyến Mãi Sản Phẩm 3</li>
                                                        <li>Khuyến Mãi Sản Phẩm 4</li>
                                                        <li>Khuyến Mãi Sản Phẩm 5</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="#"
                                            title="Sản Phẩm Khuyến Mãi ">
                                            <img class="lazyload duration-300"
                                                src="/images/products/dauxa.jpg"
                                                data-src="/images/products/dauxa.jpg"
                                                alt="Sản Phẩm Khuyến Mãi ">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="name-price">
                                            <h3 class="product-name line-clamp-2-new">
                                                <a href="#"
                                                    title="Sản Phẩm Khuyến Mãi ">Sản Phẩm Khuyến Mãi </a>
                                            </h3>
                                            <div class="product-price-cart">
                                                <span class="compare-price">799.000₫</span>
                                                <span class="price">500.000₫</span>
                                                <div class="productcount">
                                                    @if ($i % 2 == 0)
                                                        <div class="countitem sold-out">
                                                            <span class="a-center">Đã bán hết</span>
                                                            <div class="countdown" style="width:100%;"></div>
                                                        </div>
                                                    @else
                                                        <div class="countitem visible">
                                                            <div class="fire">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                    height="25" viewBox="0 0 16 16">
                                                                    <defs>
                                                                        <linearGradient id="prefix__a" x1="50%"
                                                                            x2="50%" y1="36.31%"
                                                                            y2="88.973%">
                                                                            <stop offset="0%" stop-color="#FDD835" />
                                                                            <stop offset="100%" stop-color="#FFB500" />
                                                                        </linearGradient>
                                                                    </defs>
                                                                    <g fill="none" fill-rule="evenodd">
                                                                        <path d="M0 0H16V16H0z" />
                                                                        <path fill="url(#prefix__a)" stroke="#FF424E"
                                                                            stroke-width="1.1"
                                                                            d="M9.636 6.506S10.34 2.667 7.454 1c-.087 1.334-.786 2.571-1.923 3.401-1.234 1-3.555 3.249-3.53 5.646-.017 2.091 1.253 4.01 3.277 4.953.072-.935.549-1.804 1.324-2.41.656-.466 1.082-1.155 1.182-1.912 1.729.846 2.847 2.469 2.944 4.27v.012c1.909-.807 3.165-2.533 3.251-4.467.205-2.254-1.134-5.316-2.321-6.317-.448.923-1.144 1.725-2.022 2.33z"
                                                                            transform="rotate(4 8 8)" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <span class="a-center">Đã bán <b>136</b></span>
                                                            <div class="countdown" style="width:54%;"></div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-button">
                                            <input type="hidden" name="variantId" value="110202248" />
                                            @if ($i % 2 == 0)
                                                <button class="btn-cart btn-views disable btn btn-primary"
                                                    title="Xem chi tiết" type="button" onclick="">
                                                    <span>Xem chi tiết</span>
                                                    <svg width="24" height="24" class="duration-300"
                                                        viewBox="0 0 61 63" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="31.7349" y="3.02869" width="40.2232" height="4"
                                                            transform="rotate(45 31.7349 3.02869)" fill="black" />
                                                        <rect x="28.9717" y="62.9694" width="22.3263" height="4"
                                                            transform="rotate(-135 28.9717 62.9694)" fill="black" />
                                                        <rect x="28.0605" y="58.2244" width="41.6244" height="4"
                                                            transform="rotate(-45 28.0605 58.2244)" fill="black" />
                                                        <rect x="31.9126" y="3.20361" width="22.4441" height="4"
                                                            transform="rotate(135 31.9126 3.20361)" fill="black" />
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
                                                data-wish="set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan"
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

            <div class="view-more clearfix">
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
    </div>
</section>


<script>
    $(document).ready(function($) {
        function runSwiperSale() {
            var swiper_sale = null;

            function initSwiperSale() {
                swiper_sale = new Swiper('.swiper_sale', {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    slidesPerGroup: 1,
                    navigation: {
                        nextEl: '.swiper_sale .swiper-button-next',
                        prevEl: '.swiper_sale .swiper-button-prev',
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

            function destroySwiperSale() {
                if (swiper_sale) {
                    swiper_sale.destroy(true, true);
                    swiper_sale = null;
                }
            }

            function toggleSwiperSale() {
                if ($(window).width() <= 767 && swiper_sale) {
                    destroySwiperSale();
                } else if ($(window).width() > 767 && !swiper_sale) {
                    initSwiperSale();
                }
            }
            toggleSwiperSale();
            $(window).resize(toggleSwiperSale);
        }
        lazyBlockProduct('section_flash_sale', '0px 0px -250px 0px', runSwiperSale);
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const countdownElements = document.querySelectorAll('[data-countdown="countdown"]');

        countdownElements.forEach(el => {
            const dateParts = el.getAttribute('data-date').split('-');
            if (dateParts.length !== 6) {
                el.innerHTML = "❌ Ngày không hợp lệ";
                return;
            }

            const [month, day, year, hour, minute, second] = dateParts.map(Number);
            const targetDate = new Date(year, month - 1, day, hour, minute, second);

            function addLeadingZero(num) {
                return num < 10 ? "0" + num : num;
            }

            function updateCountdown() {
                const now = new Date();
                const distance = targetDate - now;

                if (distance <= 0) {
                    el.innerHTML = "<div class=\"lof-labelexpired\">Chương trình đã hết hạn</div>";
                    clearInterval(interval);
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                el.innerHTML = `
                    <div class="block-timer"><p>${addLeadingZero(days)}</p><span>Ngày</span></div>
                    <div class="block-timer"><p>${addLeadingZero(hours)}</p><span>Giờ</span></div>
                    <div class="block-timer"><p>${addLeadingZero(minutes)}</p><span>Phút</span></div>
                    <div class="block-timer"><p>${addLeadingZero(seconds)}</p><span>Giây</span></div>
                `;
            }

            updateCountdown(); // chạy lần đầu
            const interval = setInterval(updateCountdown, 1000);
        });
    });
</script>
