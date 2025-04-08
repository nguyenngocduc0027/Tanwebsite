@extends('home.index')
@section('content')
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="{{ route('home') }}" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr">></span>
                </li>
                <li><strong><span>Giới thiệu</span></strong></li>
            </ul>
        </div>
    </section>
    @include('home.section.whychoise')
    <section class="section-index section_about">
        <div class="bg-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-left">
                        <div class="product-content">
                            <div class="section-title">
                                <span class="sub-title">
                                    Xã Hội Vạn Thiện
                                </span>
                                <h2>
                                    Câu chuyện về Xã Hội Vạn Thiện
                                </h2>
                                <div class="title-separator">
                                    <div class="separator-center"></div>
                                </div>
                            </div>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet molestiae magni nobis soluta
                                    quibusdam asperiores officia nostrum? Soluta magnam accusantium consequatur in impedit nisi
                                    sit, at consectetur voluptas nesciunt. Accusantium!</p>
                                <br>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit pariatur saepe sint fugiat
                                    odit exercitationem atque totam ea maiores eligendi eveniet porro eum, et dolorem sit ullam!
                                    Consequatur, perspiciatis quae.</p>
                                <br>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet tempora suscipit neque illo
                                    totam alias labore consectetur vero at officia laboriosam odio vel, facilis quam ab quas
                                    sed, voluptates sunt.</p>
                                <br>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet molestiae magni nobis soluta
                                    quibusdam asperiores officia nostrum? Soluta magnam accusantium consequatur in impedit nisi
                                    sit, at consectetur voluptas nesciunt. Accusantium!</p>
                                <br>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit pariatur saepe sint fugiat
                                    odit exercitationem atque totam ea maiores eligendi eveniet porro eum, et dolorem sit ullam!
                                    Consequatur, perspiciatis quae.</p>
                                <br>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet tempora suscipit neque illo
                                    totam alias labore consectetur vero at officia laboriosam odio vel, facilis quam ab quas
                                    sed, voluptates sunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('home.section.feedback')
    @include('home.section.brand')
@endsection
