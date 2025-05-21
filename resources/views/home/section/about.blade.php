<section class="section-index section_about">
    <div class="bg-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-12 col-left">
                    <div class="product-content">
                        <div class="section-title">
                            <span class="sub-title">
                                {{$home_pages->about_title ?? ''}}
                            </span>
                            <h2>
                                {{$home_pages->about_subtitle ?? ''}}
                            </h2>
                            <div class="title-separator">
                                <div class="separator-center"></div>
                            </div>
                        </div>
                        <div class="desc">
                            {{$home_pages->about_description ?? ''}}
                        </div>
                        <a href="#" title="Xem chi tiết" class="show-more btn btn-extent frame">
                            <svg width="14" height="32" viewBox="0 0 14 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-left">
                                <path
                                    d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                    fill="none" />
                                <path
                                    d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                    stroke="white" />
                            </svg>
                            Xem chi tiết
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
                <div class="col-12 col-lg-6 col-md-12 col-right">
                    <div class="banner-product">
                        <img width="600" height="371"
                            src="{{asset($home_pages->image_about ?? '/images/products/section_about_product_1.png')}}"
                            data-src="{{asset($home_pages->image_about ?? '/images/products/section_about_product_1.png')}}"
                            alt=" {{$home_pages->about_title ?? ''}}" class="img-responsive center-block lazyload" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
