<section class="section-index section_feedback">
    <div class="bg-section">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">
                    XÃ HỘI VẠN THIỆN
                </span>
                <h2>
                    Khách hàng nói về chúng tôi
                </h2>
                <div class="desc">
                    Hơn +5,000 khách hàng đã sử dụng cảm nhận như thế nào về sản phẩm và dịch vụ của Xã Hội Vạn Thiện?
                </div>
                <div class="title-separator">
                    <div class="separator-center"></div>
                </div>
            </div>
            <div class="swiper_feedback swiper-container control-top">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 7; $i++)
                        <div class=" swiper-slide">
                            <div class="avatar">
                                <img data-src="/images/feedback/feedback_1_avatar.jpg" alt="Ngọc Vy" width="200"
                                    height="200" class="lazyload" src="/images/feedback/feedback_1_avatar.jpg" />
                            </div>
                            <div class="feedback-item">
                                <div class="block-content">
                                    <b>Khách hàng số {{$i}}</b>
                                    <span>Kế toán</span>
                                    <div class="feedback-content">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, atque omnis distinctio iure dignissimos quam nisi ad cum id eveniet tenetur ea provident, sunt dolorem quos eum hic praesentium eos!
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
    </div>

</section>
<script>
    var swiper_feedback = null;

    function initSwiperFeedback() {
        swiper_feedback = new Swiper('.swiper_feedback', {
            slidesPerView: 3,
            spaceBetween: 20,
            watchOverflow: true,
            slidesPerGroup: 1,
            grabCursor: true,
            navigation: {
                nextEl: '.section_feedback .swiper-button-next',
                prevEl: '.section_feedback .swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 14
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 14
                },
                992: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 2.5,
                    spaceBetween: 20
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 20
                }
            }
        });
    }

    function destroySwiperFeedback() {
        if (swiper_feedback) {
            swiper_feedback.destroy(true, true);
            swiper_feedback = null;
        }
    }

    function toggleSwiperFeedback() {
        if ($(window).width() <= 767 && swiper_feedback) {
            destroySwiperFeedback();
        } else if ($(window).width() > 767 && !swiper_feedback) {
            initSwiperFeedback();
        }
    }
    toggleSwiperFeedback();
    $(window).on('resize', function() {
        toggleSwiperFeedback();
    });
</script>
