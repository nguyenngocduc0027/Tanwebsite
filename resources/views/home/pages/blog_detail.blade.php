@extends('home.index')
@section('content')
    <div class="layout-collection">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="{{ route('home') }}" title="Trang chủ"><span>Trang chủ</span></a>
                        <span class="mr_lr">></span>
                    </li>
                    <li class="home">
                        <a href="{{ route('blog') }}" title="Blog"><span>Blog</span></a>
                        <span class="mr_lr">></span>
                    </li>
                    <li><strong><span>Blog 1</span></strong></li>
                </ul>
            </div>
        </section>
        <section class="blogpage">
            <div class="container layout-article">
                <div class="bg_blog">
                    <article class="article-main">
                        <div class="row">
                            <div class="right-content col-lg-9 col-12">
                                <div class="article-details bg-shadow clearfix">
                                    <h1 class="article-title">Blog 1</h1>
                                    <div class="posts">
                                        <div class="time-post f">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                class="svg-inline--fa fa-clock fa-w-16">
                                                <path fill="currentColor"
                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                                    class=""></path>
                                            </svg>
                                            Thứ Sáu, 05/01/2024
                                        </div>
                                        <div class="time-post">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                class="svg-inline--fa fa-user fa-w-14">
                                                <path fill="currentColor"
                                                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                                    class=""></path>
                                            </svg>
                                            <span>Alpha Team</span>
                                        </div>
                                    </div>

                                    <div class="rte article-content-main">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis doloremque,
                                            nihil numquam debitis odit tenetur animi quae magni vel aliquid molestiae eaque
                                            totam voluptatibus quam laboriosam, sapiente vero quibusdam explicabo!</p>
                                        <figure aria-describedby="caption-attachment-17248" id="attachment_17248"><img
                                                alt="1-tai-yen-chung-duoc-bao-nhieu-nuoc-buu-yen"
                                                data-lazy-sizes="(max-width: 800px) 100vw, 800px"
                                                data-lazy-src="https://buuyen.vn/wp-content/uploads/2023/11/1-tai-yen-chung-duoc-bao-nhieu-nuoc-buu-yen.jpg"
                                                data-lazy-srcset="https://buuyen.vn/wp-content/uploads/2023/11/1-tai-yen-chung-duoc-bao-nhieu-nuoc-buu-yen.jpg 800w, https://buuyen.vn/wp-content/uploads/2023/11/1-tai-yen-chung-duoc-bao-nhieu-nuoc-buu-yen-300x225.jpg 300w, https://buuyen.vn/wp-content/uploads/2023/11/1-tai-yen-chung-duoc-bao-nhieu-nuoc-buu-yen-768x576.jpg 768w, https://buuyen.vn/wp-content/uploads/2023/11/1-tai-yen-chung-duoc-bao-nhieu-nuoc-buu-yen-150x113.jpg 150w"
                                                data-ll-status="loaded" decoding="async" height="600"
                                                sizes="(max-width: 800px) 100vw, 800px"
                                                src="../buuyen.vn/wp-content/uploads/2023/11/1-tai-yen-chung-duoc-bao-nhieu-nuoc-buu-yen.jpg"
                                                srcset="https://buuyen.vn/wp-content/uploads/2023/11/1-tai-yen-chung-duoc-bao-nhieu-nuoc-buu-yen.jpg 800w, https://buuyen.vn/wp-content/uploads/2023/11/1-tai-yen-chung-duoc-bao-nhieu-nuoc-buu-yen-300x225.jpg 300w, https://buuyen.vn/wp-content/uploads/2023/11/1-tai-yen-chung-duoc-bao-nhieu-nuoc-buu-yen-768x576.jpg 768w, https://buuyen.vn/wp-content/uploads/2023/11/1-tai-yen-chung-duoc-bao-nhieu-nuoc-buu-yen-150x113.jpg 150w"
                                                width="800" />
                                            <figcaption id="caption-attachment-17248">Tổ yến khô</figcaption>
                                        </figure>

                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque rerum nisi
                                            voluptatum aspernatur optio provident blanditiis porro iste animi ex possimus
                                            deserunt magni corrupti at maiores distinctio, soluta, aliquid iure.</p>
                                    </div>


                                    <div class="social-sharing">
                                        <ul class="social-media" role="list">
                                            <li class="title">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3" />
                                                </svg>
                                                Chia sẻ
                                            </li>
                                            <li class="social-media__item social-media__item--facebook">
                                                <a title="Chia sẻ lên Facebook"
                                                    href="https://www.facebook.com/sharer.php?u={{ url()->current() }}"
                                                    target="_blank" rel="noopener" aria-label="Chia sẻ lên Facebook">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 155.139 155.139"
                                                        style="enable-background:new 0 0 155.139 155.139;"
                                                        xml:space="preserve">
                                                        <g>
                                                            <path id="f_1_" style="fill:#010002;"
                                                                d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452v20.341H37.29v27.585h23.814v70.761H89.584z" />
                                                        </g>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="form-coment">
                                        <div class="margin-top-0 w-100">
                                            <h3>Đánh giá sản phẩm</h3>
                                            <div class="fb-comments" data-href="{{ url()->current() }}" data-width="100%"
                                                data-numposts="5">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="blog_left_base col-lg-3 col-12">
                                <div class="side-right-stick">
                                    <div class="blog_noibat">
                                        <h2 class="h2_sidebar_blog">
                                            <a href="#" title="Tin tức nổi bật">Tin tức nổi bật</a>
                                        </h2>
                                        <div class="blog_content">
                                            @for ($i = 1; $i <= 4; $i++)
                                                <div class="item clearfix">
                                                    <div class="post-thumb">
                                                        <a class="image-blog scale_hover" href="#" title="Blog 1">
                                                            <img class="img_blog lazyload"
                                                                src="/images/products/dauxa.jpg"
                                                                data-src="/images/products/dauxa.jpg" alt="Blog 1">
                                                        </a>
                                                    </div>
                                                    <div class="contentright">
                                                        <h3><a title="Blog 1" href="#">Blog {{$i}}</a></h3>
                                                        <p class="time-post">
                                                            <span>
                                                                05/01/2024
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
@endsection
