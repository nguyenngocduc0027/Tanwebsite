@extends('index')
@section('body')
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img
                    src="
        https://bizweb.dktcdn.net/100/506/650/themes/944598/assets/slider_2.jpg?1739018973665"
                    alt=""></div>
            <div class="swiper-slide"><img
                    src="
       https://bizweb.dktcdn.net/100/506/650/themes/944598/assets/slider_3.jpg?1739018973665"
                    alt=""></div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
    </div>
@endsection
