<section class="section-index section_why_choise">
    <div class="container">
        <div class="section-title">

            <span class="sub-title">
                {{ $home_pages->why_title ?? '' }}
            </span>

            <h2>
                {{ $home_pages->why_subtitle ?? '' }}
            </h2>
            <div class="title-separator">
                <div class="separator-center"></div>
            </div>
        </div>
        <div class="wrap-choise row">
            <div class="col col-left col-md-4 col-xs-12 col-12">
                <div class="wrap-choise-mb">
                    <div class="choise_item">
                        <div class="img_choise">
                            <img class="lazyload" alt="{{ $home_pages->why1 }}"
                                data-src="{{ $home_pages->image_why1 ?? '/images/why/why_choise_1_icon.png' }}"
                                src="/images/why/why_choise_1_icon.png">
                        </div>
                        <div class="text_choise">
                            <h3>{{ $home_pages->why1 ?? '' }}</h3>
                            <div class="content_choise">{{ $home_pages->content_why1 ?? '' }}</div>
                        </div>
                    </div>
                    <div class="choise_item">
                        <div class="img_choise">
                            <img class="lazyload" alt="{{ $home_pages->why2 }}"
                                data-src="{{ $home_pages->image_why2 ?? '/images/why/why_choise_2_icon.png' }}"
                                src="{{ $home_pages->image_why2 ?? '/images/why/why_choise_2_icon.png' }}">
                        </div>
                        <div class="text_choise">
                            <h3>{{ $home_pages->why2 ?? '' }}</h3>
                            <div class="content_choise">{{ $home_pages->content_why2 ?? '' }}</div>
                        </div>
                    </div>
                    <div class="choise_item">
                        <div class="img_choise">
                            <img class="lazyload" alt="{{ $home_pages->why3 }}"
                                data-src="{{ $home_pages->image_why3 ?? '/images/why/why_choise_3_icon.png' }}"
                                src="{{ $home_pages->image_why2 ?? '/images/why/why_choise_3_icon.png' }}">
                        </div>
                        <div class="text_choise">
                            <h3>{{ $home_pages->why3 ?? '' }}</h3>
                            <div class="content_choise">{{ $home_pages->content_why3 ?? '' }}</div>
                        </div>
                    </div>
                    <div class="choise_item d-md-none">
                        <div class="img_choise">
                            <img class="lazyload" alt="{{ $home_pages->why4 }}"
                                data-src="{{ $home_pages->image_why4 ?? '/images/why/why_choise_4_icon.png' }}"
                                src="{{ $home_pages->image_why4 ?? '/images/why/why_choise_4_icon.png' }}">
                        </div>
                        <div class="text_choise">
                            <h3>{{ $home_pages->why4 ?? '' }}</h3>
                            <div class="content_choise">{{ $home_pages->content_why4 ?? '' }}</div>
                        </div>
                    </div>
                    <div class="choise_item d-md-none">
                        <div class="img_choise">
                            <img class="lazyload" alt="{{ $home_pages->why5 }}"
                                data-src="{{ $home_pages->image_why5 ?? '/images/why/why_choise_5_icon.png' }}"
                                src="{{ $home_pages->image_why5 ?? '/images/why/why_choise_5_icon.png' }}">
                        </div>
                        <div class="text_choise">
                            <h3>{{ $home_pages->why5 ?? '' }}</h3>
                            <div class="content_choise">{{ $home_pages->content_why5 ?? '' }}</div>
                        </div>
                    </div>
                    <div class="choise_item d-md-none">
                        <div class="img_choise">
                            <img class="lazyload" alt="{{ $home_pages->why6 ?? '' }}"
                                data-src="{{ $home_pages->image_why6 ?? '/images/why/why_choise_6_icon.png' }}"
                                src="{{ $home_pages->image_why6 ?? '/images/why/why_choise_6_icon.png' }}">
                        </div>
                        <div class="text_choise">
                            <h3>{{ $home_pages->why6 ?? '' }}</h3>
                            <div class="content_choise">{{ $home_pages->content_why6 ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-center col-md-4 col-xs-12 col-12">
                <div class="banner-product">
                    <img width="429" height="499" alt="{{ $home_pages->why_title ?? '' }}"
                        data-src="{{ $home_pages->img_why ?? '/images/why/banner_choise.png' }}" src="{{ $home_pages->img_why ?? '/images/why/banner_choise.png' }}" class="lazyload" />
                </div>
            </div>
            <div class="col col-right col-md-4 col-xs-12 col-12">
                <div class="choise_item">
                    <div class="img_choise">
                        <img class="lazyload" alt="{{ $home_pages->why4 ?? '' }}" data-src="{{ $home_pages->image_why4 ?? '/images/why/why_choise_4_icon.png' }}"
                            src="{{ $home_pages->image_why4 ?? '/images/why/why_choise_4_icon.png' }}">
                    </div>
                    <div class="text_choise">
                        <h3>{{ $home_pages->why4 ?? '' }}</h3>
                        <div class="content_choise">{{ $home_pages->content_why4 ?? '' }}</div>
                    </div>
                </div>
                <div class="choise_item">
                    <div class="img_choise">
                        <img class="lazyload" alt="{{ $home_pages->why5 ?? '' }}" data-src="{{ $home_pages->image_why5 ?? '/images/why/why_choise_5_icon.png' }}"
                            src="{{ $home_pages->image_why5 ?? '/images/why/why_choise_5_icon.png' }}">
                    </div>
                    <div class="text_choise">
                        <h3>{{ $home_pages->why5 ?? '' }}</h3>
                        <div class="content_choise">{{ $home_pages->content_why5 ?? '' }}</div>
                    </div>
                </div>
                <div class="choise_item">
                    <div class="img_choise">
                        <img class="lazyload" alt="{{ $home_pages->why6 ?? '' }}" data-src="{{ $home_pages->image_why6 ?? '/images/why/why_choise_6_icon.png' }}"
                            src="{{ $home_pages->image_why6 ?? '/images/why/why_choise_6_icon.png' }}">
                    </div>
                    <div class="text_choise">
                        <h3>{{ $home_pages->why6 ?? '' }}</h3>
                        <div class="content_choise">>{{ $home_pages->content_why6 ?? '' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
