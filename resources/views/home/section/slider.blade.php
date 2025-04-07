<div class="section_slider">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<a href="#" class="clearfix" title="Slider 1">
					<picture>
						<source
								media="(min-width: 1200px)"
								srcset="/images/slider/slider_1.jpg">
						<source
								media="(min-width: 992px)"
								srcset="/images/slider/slider_1.jpg">
						<source
								media="(min-width: 569px)"
								srcset="/images/slider/slider_1.jpg">
						<source
								media="(max-width: 480px)"
								srcset="/images/slider/slider_1.jpg">
						<img width="1920" height="600"
							 src="/images/slider/slider_1.jpg"
							 alt="Slider 1" class="img-responsive center-block duration-300" />
					</picture>
				</a>
			</div>
			<div class="swiper-slide">
				<a href="#" class="clearfix" title="Slider 2">
					<picture>
						<source
								media="(min-width: 1200px)"
								srcset="/images/slider/slider_2.jpg">
						<source
								media="(min-width: 992px)"
								srcset="/images/slider/slider_2.jpg">
						<source
								media="(min-width: 569px)"
								srcset="/images/slider/slider_2.jpg">
						<source
								media="(max-width: 480px)"
								srcset="/images/slider/slider_2.jpg">
						<img width="1920" height="600"
							 src="/images/slider/slider_2.jpg"
							 alt="Slider 2" class="img-responsive center-block duration-300" />
					</picture>
				</a>
			</div>

			<div class="swiper-slide">
				<a href="#" class="clearfix" title="Slider 3">
					<picture>
						<source
								media="(min-width: 1200px)"
								srcset="/images/slider/slider_3.jpg">
						<source
								media="(min-width: 992px)"
								srcset="/images/slider/slider_3.jpg">
						<source
								media="(min-width: 569px)"
								srcset="/images/slider/slider_3.jpg">
						<source
								media="(max-width: 480px)"
								srcset="/images/slider/slider_3.jpg">
						<img width="1920" height="600"
							 src="/images/slider/slider_3.jpg"
							 alt="Slider 3" class="img-responsive center-block duration-300" />
					</picture>
				</a>
			</div>
		</div>
		<div class="swiper-button-prev">
			<svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
				<rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
				<path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</div>
		<div class="swiper-button-next">
			<svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
				<rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
				<path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</div>
		<div class="swiper-pagination"></div>
		<div class="swiper-progress-bar"><div class="progress"></div></div>
	</div>
</div>

<script>
	let swiperSlider = null;
	let progressBarInterval;

	function initProgressBar() {
		const progressBar = document.querySelector('.section_slider .swiper-progress-bar .progress');
		progressBar.style.width = 0;
	}

	function startProgressBar() {
		const progressBar = document.querySelector('.section_slider .swiper-progress-bar .progress');
		const duration = 8000;
		progressBarInterval = setInterval(function () {
			let progress = parseFloat(progressBar.style.width) || 0;
			progress += (100 / duration) * (1000 / 60);
			progressBar.style.width = Math.min(progress, 100) + '%';
		}, 1000 / 60);
	}

	function resetProgressBar() {
		clearInterval(progressBarInterval);
		initProgressBar();
	}

	function initSwiperSlider() {
		swiperSlider = new Swiper('.section_slider .swiper-container', {
			speed: 1000,
			spaceBetween: 14,
			effect: 'fade',
			navigation: {
				nextEl: '.section_slider .swiper-container .swiper-button-next',
				prevEl: '.section_slider .swiper-container .swiper-button-prev',
			},
			autoplay: {
				delay: 8000,
				disableOnInteraction: false,
			},
			on: {
				init: function () {
					initProgressBar();
					startProgressBar();
				},
				slideChangeTransitionStart: function () {
					resetProgressBar();
				},
				slideChangeTransitionEnd: function () {
					startProgressBar();
				},
			},
			pagination: {
				el: '.section_slider .swiper-container .swiper-pagination',
				clickable: true,
			},
		});
	}

	initSwiperSlider();

</script>
