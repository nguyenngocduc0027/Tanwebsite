@extends('home.index')
@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v19.0"
        nonce="abc123"></script>

    <div class="layout-collection">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="{{ route('home') }}" title="Trang chủ"><span>Trang chủ</span></a>
                        <span class="mr_lr">></span>
                    </li>
                    <li><strong><span>Tin Tức </span></strong></li>
                </ul>
            </div>
        </section>
        <div class="blog_wrapper layout-blog">
            <div class="container">
                <div class="row">
                    <div class="right-content col-lg-12 col-12">
                        <div class="title-page">
                            <h1>Tin Tức</h1>
                            <p class="p_style sm-hidden"> {{ $home_pages->blog_description ?? '' }}</p>
                            <div class="title-separator">
                                <div class="separator-center"></div>
                            </div>
                        </div>

                        <div class="row list-news">

                            @forelse ($news as $new)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="item-blog">
                                        <div class="wrapper">
                                            <a class="block-thumb thumb" href="{{ route('blog_detail', ['id' => $new->id]) }}" title="{{ $new->name ?? '' }}">
                                                <img width="400" height="240" class="lazyload duration-300"
                                                    src="{{ asset($new->image ?? '/images/blog/09.jpg') }}" data-src="{{ asset($new->image ?? '/images/blog/09.jpg') }}"
                                                    alt="{{ $new->name ?? '' }}">
                                            </a>
                                            <div class="block-content">
                                                <h3>
                                                    <a href="{{ route('blog_detail', ['id' => $new->id]) }}" title="{{ $new->name ?? '' }}"
                                                        class="line-clamp-2-new">{{ $new->name ?? '' }}
                                                       </a>
                                                </h3>
                                                <div class="article-content">

                                                    <p class="justify line-clamp line-clamp-3">
                                                       {{ $new->subtitle ?? '' }}
                                                    </p>

                                                    <div class="article-info">
                                                        <p class="time-post">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-clock"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                                                <path
                                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                                            </svg>
                                                            <span>
                                                         {{ $new->created_at->format('d/m/Y') }}
                                                            </span>
                                                        </p>

                                                        <a href="{{ route('blog_detail', ['id' => $new->id]) }}" title="Đọc thêm"
                                                            class="read-more">Đọc thêm »</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12 pt-5 pb-5">
                                    <div class="feedback-item pt-5 pb-5">
                                        <div class="block-content text-center">
                                            <p>Tin tức đang được cập nhật</p>
                                        </div>
                                    </div>
                                </div>
                            @endforelse

                            <div class="pagenav">
                                <nav class="collection-paginate clearfix relative nav_pagi w_100">
                                   {{ $news->links('pagination::bootstrap-4') }}
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
