<section class="section-index section_blog">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">
                {{ $home_pages->blog_title ?? '' }}
            </span>
            <h2>
                <a href="#" title="{{ $home_pages->blog_subtitle ?? '' }}">
                    {{ $home_pages->blog_subtitle ?? '' }}
                </a>
            </h2>
            <div class="desc">
                {{ $home_pages->blog_description ?? '' }}
            </div>
            <div class="title-separator">
                <div class="separator-center"></div>
            </div>
        </div>

        <div class="content-group3 row">
            <div class="col-lg-4 col-md-12 big-news">
                @if ($latestBlog)
                    <a href="{{ route('blog_detail', ['id' => $latestBlog->id]) }}" title="{{ $latestBlog->name }}" class="news-top_item_img clearfix">
                        <div class="grow-0">
                            <div class="item-img">
                                <img src="{{ asset($latestBlog->image ?? '/images/blog/09.jpg') }}"
                                    data-src="{{ asset($latestBlog->image ?? '/images/blog/09.jpg') }}"
                                    alt="{{ $latestBlog->name }}" class="lazyload duration-300" />
                            </div>
                        </div>
                        <div class="item-img-content">
                            <h3>{{ $latestBlog->name ?? '' }}</h3>
                            <div class="content-des d-md-block d-lg-none line-clamp line-clamp-3">
                                {{ $latestBlog->subtitle ?? '' }}
                            </div>
                            <p class="time-post">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                </svg>
                                <span>
                                    {{ $latestBlog->created_at->format('d/m/Y') }}
                                </span>
                            </p>
                        </div>
                    </a>
                @endif
            </div>
            <div class="col-lg-8 col-md-12 list-news">
                <div class="swapper-articles">
                    @foreach ($otherBlogs as $otherBlog)
                        <a href="{{ route('blog_detail', ['id' => $otherBlog->id]) }}" title="{{ $otherBlog->name ?? '' }}" class="news-top_item_img">
                            <div class="grow-0">
                                <div class="item-img">
                                    <img src="{{ asset($otherBlog->image ?? '/images/blog/09.jpg') }}"
                                        data-src="{{ asset($otherBlog->image ?? '/images/blog/09.jpg') }}"
                                        alt="{{ $otherBlog->name ?? '' }}" class="lazyload duration-300" />
                                </div>
                            </div>
                            <div class="item-img-content">
                                <h3 class="line-clamp-2-new">{{ $otherBlog->name ?? '' }}</h3>
                                <p class="time-post">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                    </svg>
                                    <span>
                                        {{ $otherBlog->created_at->format('d/m/Y') }}
                                    </span>
                                </p>
                            </div>
                        </a>
                    @endforeach



                </div>

            </div>
            <div class="col-12 col-xs-12 view-more">
                <a class="btn btn-primary frame" href="#" title="Xem thêm">
                    <svg width="14" height="32" viewBox="0 0 14 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-left">
                        <path
                            d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                            fill="none" />
                        <path
                            d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                            stroke="white" />
                    </svg>
                    Xem thêm
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
