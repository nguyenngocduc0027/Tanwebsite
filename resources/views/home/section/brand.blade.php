@if (count($partners) > 0)
    <section class="section-index section_brands">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">
                {{$home_pages->partner_title ?? ''}}
            </span>
            <h2>
                {{$home_pages->partner_subtitle ?? ''}}
            </h2>
            <div class="desc">
                {{ $home_pages->partner_description ?? '' }}
            </div>
            <div class="title-separator">
                <div class="separator-center"></div>
            </div>
        </div>

        <div class="swiper_brands swiper-container">
            <div class="swiper-wrapper">
                @foreach ($partners as $partner)
                    
                <div class="swiper-slide">
                    <a href="#" title="{{$partner->name}}" class="brand-item">
                        <img data-src="{{asset($partner->image ?? '/images/brand/img_brand_1.png')}}" alt="{{$partner->name}}" width="225" height="113"
                            class="lazyload"
                            src="{{asset($partner->image ?? '/images/brand/img_brand_1.png')}}" />
                    </a>
                </div>
                @endforeach
               
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
<script>
    var swiper_brand = null;

    function initSwiperBrand() {
        swiper_brand = new Swiper('.swiper_brands', {
            slidesPerView: 6,
            spaceBetween: 20,
            watchOverflow: true,
            slidesPerGroup: 1,
            navigation: {
                nextEl: '.swiper_brands .swiper-button-next',
                prevEl: '.swiper_brands .swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 4,
                    spaceBetween: 14
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 14
                },
                992: {
                    slidesPerView: 6,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 20
                },
                1200: {
                    slidesPerView: 8,
                    spaceBetween: 20
                }
            }
        });
    }

    function destroySwiperBrand() {
        if (swiper_brand) {
            swiper_brand.destroy(true, true);
            swiper_brand = null;
        }
    }

    function toggleSwiperBrand() {
        if ($(window).width() <= 767 && swiper_brand) {
            destroySwiperBrand();
        } else if ($(window).width() > 767 && !swiper_brand) {
            initSwiperBrand();
        }
    }
    toggleSwiperBrand();
    $(window).on('resize', function() {
        toggleSwiperBrand();
    });
</script>

@endif