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
                    <li><strong><span> Tất cả sản phẩm</span></strong></li>
                </ul>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-banner">
                    <a href="{{ route('product') }}" title="click xem ngay" class="duration-300 has-aspect-1">
                        <picture>
                            <source media="(max-width: 480px)" srcset="/images/bg/collection_banner.jpg">
                            <img alt="Banner top" width="1250" height="306" class="lazyload"
                                data-src="/images/bg/collection_banner.jpg" src="/images/bg/collection_banner.jpg">
                        </picture>
                    </a>
                </div>
                <div class="col-12">
                    <div class="col-title">
                        <h1>Tất cả sản phẩm</h1>
                        <div class="title-separator">
                            <div class="separator-center"></div>
                        </div>
                    </div>
                    <div class="col-list-cate">
                        <div class="menu-list">
                            <a class="cate-item duration-300 " href="#" title="Tổ yến">
                                <div class="cate-info-title">Tổ yến</div>
                            </a>
                            <a class="cate-item duration-300 " href="#" title="Yến chưng tươi">
                                <div class="cate-info-title">Yến chưng tươi</div>
                            </a>
                            <a class="cate-item duration-300 " href="#" title="Yến nước">
                                <div class="cate-info-title">Yến nước</div>
                            </a>
                            <a class="cate-item duration-300 " href="#" title="Đông trùng hạ thảo">
                                <div class="cate-info-title">Đông trùng hạ thảo</div>
                            </a>
                            <a class="cate-item duration-300 " href="../sam-han-quoc.html" title="Sâm Hàn Quốc">
                                <div class="cate-info-title">Sâm Hàn Quốc</div>
                            </a>
                            <a class="cate-item duration-300 " href="../saffron.html" title="Saffron">
                                <div class="cate-info-title">Saffron</div>
                            </a>
                            <a class="cate-item duration-300 " href="../soup.html" title="Soup">
                                <div class="cate-info-title">Soup</div>
                            </a>
                            <a class="cate-item duration-300 " href="../qua-bieu-cao-cap.html" title="Quà biếu cao cấp">
                                <div class="cate-info-title">Quà biếu cao cấp</div>
                            </a>
                        </div>
                    </div>

                    <div class="col-desc">
                        <p><strong>Sudes Nest</strong> đến nay đã chiếm trọn niềm tin của khách hàng bởi chất lượng - tinh
                            tế - hợp khẩu vị trong từng dòng sản phẩm về Yến sào. <strong>Sudes Nest</strong> luôn mang đến
                            cho quý khách hàng những sản phẩm chất lượng nhất - tốt nhất - tinh hoa nhất với đội ngũ chuyên
                            gia nghiên cứu dinh dưỡng hàng đầu Việt Nam và luôn đầu tư dây chuyền sản xuất công nghệ cao,
                            hiện đại, quy mô sản xuất lớn.</p>
                    </div>


                </div>

                <div class="block-collection col-lg-12 col-12">
                    <div class="category-products products-view products-view-grid list_hover_pro">
                        <div class="filter-containers">

                            <div class="sort-cate clearfix">

                                <div class="sudes-filter">
                                    <a class="btn btn-outline btn-filter" title="Bộ lọc">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z" />
                                        </svg>
                                        Bộ lọc
                                        <span class="count-filter-val"></span>
                                    </a>
                                </div>

                                <div class="sort-cate-right">
                                    <h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z" />
                                            <path
                                                d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z" />
                                        </svg> Xếp theo
                                    </h3>
                                    <ul>
                                        <li class="btn-quick-sort default active">
                                            <a href="javascript:;" onclick="sortby('default')" title="Mặc định"><i></i>Mặc
                                                định</a>
                                        </li>
                                        <li class="btn-quick-sort alpha-asc">
                                            <a href="javascript:;" onclick="sortby('alpha-asc')" title="Tên A-Z"><i></i>Tên
                                                A-Z</a>
                                        </li>
                                        <li class="btn-quick-sort alpha-desc">
                                            <a href="javascript:;" onclick="sortby('alpha-desc')" title="Tên Z-A"><i></i>Tên
                                                Z-A</a>
                                        </li>
                                        <li class="btn-quick-sort position-desc">
                                            <a href="javascript:;" onclick="sortby('created-desc')"
                                                title="Hàng mới"><i></i>Hàng mới</a>
                                        </li>
                                        <li class="btn-quick-sort price-asc">
                                            <a href="javascript:;" onclick="sortby('price-asc')"
                                                title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                                        </li>
                                        <li class="btn-quick-sort price-desc">
                                            <a href="javascript:;" onclick="sortby('price-desc')"
                                                title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <script>
                                function countFilterItem() {
                                    var countFilter = $('.filter-container__selected-filter-list ul li').length;
                                    $(".count-filter-val").text(countFilter);
                                }
                                countFilterItem();
                            </script>

                        </div>


                        <div class="products-view products-view-grid list_hover_pro">
                            <div class="row">

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34775949" enctype="multipart/form-data">
                                            <span class="flash-sale">-
                                                6%
                                            </span>

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="

      - Tặng 1 túi giấy xách đi kèm - 1 Hộp đường phèn

    ">

                                                        <p>
                                                            <span style="letter-spacing: -0.2px;">- Tặng 1 túi giấy xách đi
                                                                kèm <br>- 1 Hộp đường phèn </span>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../copy-of-to-yen-tinh-che-cho-be-baby-loai-3.html"
                                                    title="Tổ Yến Tinh Chế cho bé BaBy (loại 3)">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/bb2-50gr-0-nap-494df53fb54c4233b0ba3c0a8ab3dfbe-97fc1701b8a14297ac03ee1e64edf1b2-master-d488b4d7-4784-48b2-a54a-c7d6343654fa.jpg?v=1709574876467"
                                                        alt="Tổ Yến Tinh Chế cho bé BaBy (loại 3)">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../copy-of-to-yen-tinh-che-cho-be-baby-loai-3.html"
                                                            title="Tổ Yến Tinh Chế cho bé BaBy (loại 3)">Tổ Yến Tinh Chế
                                                            cho bé BaBy (loại 3)</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="compare-price">3.100.000₫</span>

                                                        <span class="price">2.900.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="111118886" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="copy-of-to-yen-tinh-che-cho-be-baby-loai-3"
                                                        tabindex="0" title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34621119" enctype="multipart/form-data">

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="

    Tặng bình thủy tinh 300ml
    Freeship từ 2 gram

    ">

                                                        <ul>
                                                            <li><span style="letter-spacing: -0.2px;">Tặng bình thủy tinh
                                                                    300ml</span></li>
                                                            <li><span style="letter-spacing: -0.2px;">Freeship từ 2
                                                                    gram</span></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../saffron-shyam-1gr-nhuy-hoa-nghe-tay-organic.html"
                                                    title="Saffron SHYAM 1Gr  Nhụy hoa nghệ tây Organic">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/shyam-1-gram.png?v=1708656037060"
                                                        alt="Saffron SHYAM 1Gr  Nhụy hoa nghệ tây Organic">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../saffron-shyam-1gr-nhuy-hoa-nghe-tay-organic.html"
                                                            title="Saffron SHYAM 1Gr  Nhụy hoa nghệ tây Organic">Saffron
                                                            SHYAM 1Gr Nhụy hoa nghệ tây Organic</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">350.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110202522" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="saffron-shyam-1gr-nhuy-hoa-nghe-tay-organic"
                                                        tabindex="0" title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34621078" enctype="multipart/form-data">

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="

    Tặng Trà Tân Niên
    Freeship từ 2gram

    ">

                                                        <ul>
                                                            <li><span>Tặng Trà Tân Niên</span></li>
                                                            <li><span>Freeship từ 2gram</span></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../saffron-salam-1gr-nhuy-hoa-nghe-tay-5-nam-tuoi-chuan-organic.html"
                                                    title="Saffron SALAM 1Gr – Nhụy hoa nghệ tây 5 năm tuổi chuẩn Organic">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/salam-1gram-te-t.png?v=1708655778340"
                                                        alt="Saffron SALAM 1Gr – Nhụy hoa nghệ tây 5 năm tuổi chuẩn Organic">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../saffron-salam-1gr-nhuy-hoa-nghe-tay-5-nam-tuoi-chuan-organic.html"
                                                            title="Saffron SALAM 1Gr – Nhụy hoa nghệ tây 5 năm tuổi chuẩn Organic">Saffron
                                                            SALAM 1Gr – Nhụy hoa nghệ tây 5 năm tuổi chuẩn Organic</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">450.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110202449" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="saffron-salam-1gr-nhuy-hoa-nghe-tay-5-nam-tuoi-chuan-organic"
                                                        tabindex="0" title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34620973" enctype="multipart/form-data">
                                            <span class="flash-sale">-
                                                37%
                                            </span>


                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan.html"
                                                    title="Set quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/set-qua-20-10-maneli-1.jpg?v=1708655273420"
                                                        alt="Set quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan.html"
                                                            title="Set quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan">Set
                                                            quà 2010 – Maneli #1 bồi bổ sức khỏe, dưỡng nhan</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="compare-price">799.000₫</span>

                                                        <span class="price">500.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110202248" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="set-qua-2010-maneli-1-boi-bo-suc-khoe-duong-nhan"
                                                        tabindex="0" title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34620849" enctype="multipart/form-data">

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="

    Tặng thêm 1 Son Dưỡng Cira Lipbalm

    ">

                                                        <ul>
                                                            <li><span style="letter-spacing: -0.2px;"><span>Tặng thêm 1 Son
                                                                        Dưỡng Cira Lipbalm</span></span></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../bo-san-pham-duong-trang-saffron-whitening-mask.html"
                                                    title="Bộ sản phẩm dưỡng trắng Saffron Whitening Mask">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/bo-san-pham-duong-trang-saffron-whitening-mask.jpg?v=1708654811853"
                                                        alt="Bộ sản phẩm dưỡng trắng Saffron Whitening Mask">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../bo-san-pham-duong-trang-saffron-whitening-mask.html"
                                                            title="Bộ sản phẩm dưỡng trắng Saffron Whitening Mask">Bộ sản
                                                            phẩm dưỡng trắng Saffron Whitening Mask</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">620.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110202107" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="bo-san-pham-duong-trang-saffron-whitening-mask"
                                                        tabindex="0" title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34620832" enctype="multipart/form-data">

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="

    Tặng thêm 1 Son Dưỡng Cira Lipbalm

    ">

                                                        <ul>
                                                            <li><span style="letter-spacing: -0.2px;"><span>Tặng thêm 1 Son
                                                                        Dưỡng Cira Lipbalm</span></span></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../bo-san-pham-phuc-hoi-va-tri-mun-saffron-soothing-mask.html"
                                                    title="Bộ sản phẩm Phục Hồi Và Trị Mụn Saffron Soothing Mask">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/bo-san-pham-phuc-hoi-va-tri-mun-saffron-soothing-mask.jpg?v=1708654649717"
                                                        alt="Bộ sản phẩm Phục Hồi Và Trị Mụn Saffron Soothing Mask">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../bo-san-pham-phuc-hoi-va-tri-mun-saffron-soothing-mask.html"
                                                            title="Bộ sản phẩm Phục Hồi Và Trị Mụn Saffron Soothing Mask">Bộ
                                                            sản phẩm Phục Hồi Và Trị Mụn Saffron Soothing Mask</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">620.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110202077" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="bo-san-pham-phuc-hoi-va-tri-mun-saffron-soothing-mask"
                                                        tabindex="0" title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34620805" enctype="multipart/form-data">

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="

    Tặng thêm 1 Son Dưỡng Cira Lipbalm

    ">

                                                        <ul>
                                                            <li><span style="letter-spacing: -0.2px;"><span>Tặng thêm 1 Son
                                                                        Dưỡng Cira Lipbalm</span></span></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../bo-san-pham-chong-lao-hoa-saffron-collagen-mask.html"
                                                    title="Bộ sản phẩm chống lão hoá Saffron Collagen Mask">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/bo-san-pham-chong-lao-hoa-saffron-collagen-mask.jpg?v=1708654373250"
                                                        alt="Bộ sản phẩm chống lão hoá Saffron Collagen Mask">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../bo-san-pham-chong-lao-hoa-saffron-collagen-mask.html"
                                                            title="Bộ sản phẩm chống lão hoá Saffron Collagen Mask">Bộ sản
                                                            phẩm chống lão hoá Saffron Collagen Mask</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">620.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110201963" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="bo-san-pham-chong-lao-hoa-saffron-collagen-mask"
                                                        tabindex="0" title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34620763" enctype="multipart/form-data">


                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="../set-qua-shadi-4.html"
                                                    title="Set quà SHADI #4">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/set-qua-tet-shadi-3.jpg?v=1708654014163"
                                                        alt="Set quà SHADI #4">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../set-qua-shadi-4.html" title="Set quà SHADI #4">Set quà
                                                            SHADI #4</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">490.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110201808" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="set-qua-shadi-4" tabindex="0"
                                                        title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34620706" enctype="multipart/form-data">

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="

    Tặng 2g saffron trị giá 900.000đ
    Tặng 2g bột saffron trị giá 300.000đ
    Tặng cối nghiền saffron 200.000đ
    Miễn phí vận chuyển

    ">

                                                        <ul>
                                                            <li><span style="letter-spacing: -0.2px;">Tặng 2g saffron trị
                                                                    giá </span><span
                                                                    style="letter-spacing: -0.2px;">900.000đ</span></li>
                                                            <li><span style="letter-spacing: -0.2px;">Tặng 2g bột saffron
                                                                    trị giá </span><span
                                                                    style="letter-spacing: -0.2px;">300.000đ</span></li>
                                                            <li><span style="letter-spacing: -0.2px;">Tặng cối nghiền
                                                                    saffron </span><span
                                                                    style="letter-spacing: -0.2px;">200.000đ</span></li>
                                                            <li><span style="letter-spacing: -0.2px;">Miễn phí vận
                                                                    chuyển</span></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../set-qua-nhuy-hoa-nghe-tay-saffron-salam-10gr.html"
                                                    title="Set quà nhụy hoa nghệ tây Saffron SALAM 10gr">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/saffron-salam.jpg?v=1708653500300"
                                                        alt="Set quà nhụy hoa nghệ tây Saffron SALAM 10gr">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../set-qua-nhuy-hoa-nghe-tay-saffron-salam-10gr.html"
                                                            title="Set quà nhụy hoa nghệ tây Saffron SALAM 10gr">Set quà
                                                            nhụy hoa nghệ tây Saffron SALAM 10gr</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">4.500.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110201591" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="set-qua-nhuy-hoa-nghe-tay-saffron-salam-10gr"
                                                        tabindex="0" title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34619470" enctype="multipart/form-data">
                                            <span class="flash-sale">-
                                                21%
                                            </span>


                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../hong-sam-lat-tam-mat-ong-daedong-han-quoc-hop-10-goi-x-20g.html"
                                                    title="Hồng Sâm Lát Tẩm Mật Ong Daedong Hàn Quốc Hộp 10 Gói x 20g">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/hong-sam-lat-tam-mat-ong-deadong-2-bafadaea9e7e42a49e14502dde389b77-grande.jpg?v=1708620327590"
                                                        alt="Hồng Sâm Lát Tẩm Mật Ong Daedong Hàn Quốc Hộp 10 Gói x 20g">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../hong-sam-lat-tam-mat-ong-daedong-han-quoc-hop-10-goi-x-20g.html"
                                                            title="Hồng Sâm Lát Tẩm Mật Ong Daedong Hàn Quốc Hộp 10 Gói x 20g">Hồng
                                                            Sâm Lát Tẩm Mật Ong Daedong Hàn Quốc Hộp 10 Gói x 20g</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="compare-price">1.200.000₫</span>

                                                        <span class="price">950.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110199762" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="hong-sam-lat-tam-mat-ong-daedong-han-quoc-hop-10-goi-x-20g"
                                                        tabindex="0" title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34619464" enctype="multipart/form-data">
                                            <span class="flash-sale">-
                                                3%
                                            </span>

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="

    Kẹo Hồng Sâm Không Đường 365 Hàn Quốc Gói 500g
    Nước Hồng Sâm Daesan
    Chiết khấu cao cho các doanh nghiệp. Có VAT đầy đủ.

    ">

                                                        <ul>
                                                            <li>Kẹo Hồng Sâm Không Đường 365 Hàn Quốc Gói 500g</li>
                                                            <li>Nước Hồng Sâm Daesan</li>
                                                            <li>Chiết khấu cao cho các doanh nghiệp. Có VAT đầy đủ.</li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../cao-thien-sam-kgc-han-quoc-extract-master-class-hop-200g.html"
                                                    title="Cao Thiên Sâm KGC Hàn Quốc Extract Master Class Hộp 200g">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/cao-thien-sam-extract-master-class-kgc-200g-12-fc3b4c57e71f4f5bad3e7ade139b36ea-grande.jpg?v=1708620147180"
                                                        alt="Cao Thiên Sâm KGC Hàn Quốc Extract Master Class Hộp 200g">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../cao-thien-sam-kgc-han-quoc-extract-master-class-hop-200g.html"
                                                            title="Cao Thiên Sâm KGC Hàn Quốc Extract Master Class Hộp 200g">Cao
                                                            Thiên Sâm KGC Hàn Quốc Extract Master Class Hộp 200g</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="compare-price">18.500.000₫</span>

                                                        <span class="price">18.000.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110199750" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="cao-thien-sam-kgc-han-quoc-extract-master-class-hop-200g"
                                                        tabindex="0" title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34619457" enctype="multipart/form-data">

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="

    Kẹo Hồng Sâm Không Đường 365 Hàn Quốc Gói 500g
    Nước Hồng Sâm Daesan
    Chiết khấu cao cho các doanh nghiệp. Có VAT đầy đủ.

    ">

                                                        <ul>
                                                            <li>Kẹo Hồng Sâm Không Đường 365 Hàn Quốc Gói 500g</li>
                                                            <li>Nước Hồng Sâm Daesan</li>
                                                            <li>Chiết khấu cao cho các doanh nghiệp. Có VAT đầy đủ.</li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../hac-sam-lat-tam-mat-ong-kgs-han-quoc-hop-8-goi-x-20g.html"
                                                    title="Hắc Sâm Lát Tẩm Mật Ong KGS Hàn Quốc Hộp 8 Gói x 20g">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/hac-sam-lat-tam-mat-ong-kgs-2-34f0db34554247d3a590c7d92db6655a-grande.jpg?v=1708619688693"
                                                        alt="Hắc Sâm Lát Tẩm Mật Ong KGS Hàn Quốc Hộp 8 Gói x 20g">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../hac-sam-lat-tam-mat-ong-kgs-han-quoc-hop-8-goi-x-20g.html"
                                                            title="Hắc Sâm Lát Tẩm Mật Ong KGS Hàn Quốc Hộp 8 Gói x 20g">Hắc
                                                            Sâm Lát Tẩm Mật Ong KGS Hàn Quốc Hộp 8 Gói x 20g</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">1.200.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110199734" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="hac-sam-lat-tam-mat-ong-kgs-han-quoc-hop-8-goi-x-20g"
                                                        tabindex="0" title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34619453" enctype="multipart/form-data">

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="

    Kẹo Hồng Sâm Không Đường 365 Hàn Quốc Gói 500g
    Nước Hồng Sâm Daesan
    Chiết khấu cao cho các doanh nghiệp. Có VAT đầy đủ.

    ">

                                                        <ul>
                                                            <li>Kẹo Hồng Sâm Không Đường 365 Hàn Quốc Gói 500g</li>
                                                            <li>Nước Hồng Sâm Daesan</li>
                                                            <li>Chiết khấu cao cho các doanh nghiệp. Có VAT đầy đủ.</li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../cao-hong-sam-kgs-han-quoc-hop-1-lo-240g.html"
                                                    title="Cao Hồng Sâm KGS Hàn Quốc Hộp 1 Lọ 240g">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/cao-hong-sam-kgs-240g-1-8990d1b9b75443ecb7d7e24126011ccb-grande.jpg?v=1708619518840"
                                                        alt="Cao Hồng Sâm KGS Hàn Quốc Hộp 1 Lọ 240g">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../cao-hong-sam-kgs-han-quoc-hop-1-lo-240g.html"
                                                            title="Cao Hồng Sâm KGS Hàn Quốc Hộp 1 Lọ 240g">Cao Hồng Sâm
                                                            KGS Hàn Quốc Hộp 1 Lọ 240g</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">3.700.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input type="hidden" name="variantId" value="110199727" />
                                                    <button class="btn-cart btn-views add_to_cart btn btn-primary "
                                                        title="Thêm vào giỏ hàng">
                                                        <span>Thêm vào giỏ</span>
                                                        <svg enable-background="new 0 0 32 32" height="512"
                                                            viewBox="0 0 32 32" width="512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z" />
                                                                </g>
                                                                <g>
                                                                    <path
                                                                        d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="cao-hong-sam-kgs-han-quoc-hop-1-lo-240g" tabindex="0"
                                                        title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34619401" enctype="multipart/form-data">


                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="../set-6-thuong-vy-yen-dao.html"
                                                    title="Set 6 Thượng Vy Yến Đảo">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/set-6-thuong-vy-yen-dao.jpg?v=1708618693627"
                                                        alt="Set 6 Thượng Vy Yến Đảo">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../set-6-thuong-vy-yen-dao.html"
                                                            title="Set 6 Thượng Vy Yến Đảo">Set 6 Thượng Vy Yến Đảo</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">799.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input class="hidden" type="hidden" name="variantId"
                                                        value="110199638" />
                                                    <button
                                                        class="btn-cart btn-views quick-view-option btn btn-primary quick-view"
                                                        title="Tùy chọn" type="button"
                                                        data-handle="set-6-thuong-vy-yen-dao">
                                                        <span>Tùy chọn</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="22" fill="currentColor" class="bi bi-gear"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                                            <path
                                                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="set-6-thuong-vy-yen-dao" tabindex="0"
                                                        title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34619368" enctype="multipart/form-data">
                                            <span class="flash-sale">-
                                                25%
                                            </span>


                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="../set-12-thuong-vy-yen-dao.html"
                                                    title="Set 12 Thượng Vy Yến Đảo">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/set-12-thuong-vy-yen-dao.jpg?v=1708618562223"
                                                        alt="Set 12 Thượng Vy Yến Đảo">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../set-12-thuong-vy-yen-dao.html"
                                                            title="Set 12 Thượng Vy Yến Đảo">Set 12 Thượng Vy Yến Đảo</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="compare-price">2.200.000₫</span>

                                                        <span class="price">1.656.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input class="hidden" type="hidden" name="variantId"
                                                        value="110199589" />
                                                    <button
                                                        class="btn-cart btn-views quick-view-option btn btn-primary quick-view"
                                                        title="Tùy chọn" type="button"
                                                        data-handle="set-12-thuong-vy-yen-dao">
                                                        <span>Tùy chọn</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="22" fill="currentColor" class="bi bi-gear"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                                            <path
                                                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="set-12-thuong-vy-yen-dao" tabindex="0"
                                                        title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34619329" enctype="multipart/form-data">


                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="../set-24-thuong-vy-yen-dao.html"
                                                    title="Set 24 Thượng Vy Yến Đảo">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/set-24-thuong-vy-yen-dao.jpg?v=1708618368890"
                                                        alt="Set 24 Thượng Vy Yến Đảo">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../set-24-thuong-vy-yen-dao.html"
                                                            title="Set 24 Thượng Vy Yến Đảo">Set 24 Thượng Vy Yến Đảo</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">3.198.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input class="hidden" type="hidden" name="variantId"
                                                        value="110199534" />
                                                    <button
                                                        class="btn-cart btn-views quick-view-option btn btn-primary quick-view"
                                                        title="Tùy chọn" type="button"
                                                        data-handle="set-24-thuong-vy-yen-dao">
                                                        <span>Tùy chọn</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="22" fill="currentColor" class="bi bi-gear"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                                            <path
                                                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="set-24-thuong-vy-yen-dao" tabindex="0"
                                                        title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34619321" enctype="multipart/form-data">

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="


    MUA 6 TẶNG 1 HỘP TÁO ĐỎ / LONG NHÃN

    MUA 12 TẶNG 1 YẾN BIỂN VÀ 1 HỘP TÁO ĐỎ

    ">

                                                        <ul>
                                                            <li>
                                                                <p
                                                                    style="letter-spacing: -0.2px; display: inline !important;">
                                                                    MUA 6 TẶNG 1 HỘP TÁO ĐỎ / LONG NHÃN</p>
                                                            </li>
                                                            <li>MUA 12 TẶNG 1 YẾN BIỂN VÀ 1 HỘP TÁO ĐỎ</li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../thuong-vy-yen-bien-kid-s-cam.html"
                                                    title="Thượng Vy Yến biển - Kid's Cam">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/2-0585abb0-850c-47ca-aede-6581b9a38259.jpg?v=1708619031057"
                                                        alt="Thượng Vy Yến biển - Kid's Cam">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../thuong-vy-yen-bien-kid-s-cam.html"
                                                            title="Thượng Vy Yến biển - Kid's Cam">Thượng Vy Yến biển -
                                                            Kid's Cam</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">57.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input class="hidden" type="hidden" name="variantId"
                                                        value="110199502" />
                                                    <button
                                                        class="btn-cart btn-views quick-view-option btn btn-primary quick-view"
                                                        title="Tùy chọn" type="button"
                                                        data-handle="thuong-vy-yen-bien-kid-s-cam">
                                                        <span>Tùy chọn</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="22" fill="currentColor" class="bi bi-gear"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                                            <path
                                                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="thuong-vy-yen-bien-kid-s-cam" tabindex="0"
                                                        title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34619313" enctype="multipart/form-data">

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="

    MUA 6 TẶNG 1 - MUA 10 TẶNG 2 – MUA 20 TẶNG 5

    ">

                                                        <ul>
                                                            <li>MUA 6 TẶNG 1 - MUA 10 TẶNG 2 – MUA 20 TẶNG 5<br></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../thuong-vy-yen-dao-saffron.html"
                                                    title="Thượng Vy Yến đảo Saffron">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/1-68ba6b12-d8eb-45ea-858d-2307d1e53d57.jpg?v=1708617904910"
                                                        alt="Thượng Vy Yến đảo Saffron">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../thuong-vy-yen-dao-saffron.html"
                                                            title="Thượng Vy Yến đảo Saffron">Thượng Vy Yến đảo
                                                            Saffron</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">95.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input class="hidden" type="hidden" name="variantId"
                                                        value="110199486" />
                                                    <button
                                                        class="btn-cart btn-views quick-view-option btn btn-primary quick-view"
                                                        title="Tùy chọn" type="button"
                                                        data-handle="thuong-vy-yen-dao-saffron">
                                                        <span>Tùy chọn</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="22" fill="currentColor" class="bi bi-gear"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                                            <path
                                                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)" class="setWishlist btn-views btn-circle"
                                                        data-wish="thuong-vy-yen-dao-saffron" tabindex="0"
                                                        title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34619300" enctype="multipart/form-data">

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="


    MUA 6 TẶNG 1 HỘP TÁO ĐỎ / LONG NHÃN

    MUA 12 TẶNG 1 YẾN BIỂN VÀ 1 HỘP TÁO ĐỎ

    ">

                                                        <ul>
                                                            <li>
                                                                <p
                                                                    style="letter-spacing: -0.2px; display: inline !important;">
                                                                    MUA 6 TẶNG 1 HỘP TÁO ĐỎ / LONG NHÃN</p>
                                                            </li>
                                                            <li>MUA 12 TẶNG 1 YẾN BIỂN VÀ 1 HỘP TÁO ĐỎ</li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../thuong-vy-yen-bien-gung.html"
                                                    title="Thượng Vy Yến biển - Gừng">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/1-606033d7-70c6-441b-99ab-f250c4500551.jpg?v=1708619019607"
                                                        alt="Thượng Vy Yến biển - Gừng">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../thuong-vy-yen-bien-gung.html"
                                                            title="Thượng Vy Yến biển - Gừng">Thượng Vy Yến biển -
                                                            Gừng</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">57.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input class="hidden" type="hidden" name="variantId"
                                                        value="110199457" />
                                                    <button
                                                        class="btn-cart btn-views quick-view-option btn btn-primary quick-view"
                                                        title="Tùy chọn" type="button"
                                                        data-handle="thuong-vy-yen-bien-gung">
                                                        <span>Tùy chọn</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="22" fill="currentColor" class="bi bi-gear"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                                            <path
                                                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)"
                                                        class="setWishlist btn-views btn-circle"
                                                        data-wish="thuong-vy-yen-bien-gung" tabindex="0"
                                                        title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-6 col-md-3">
                                    <div class="item_product_main">

                                        <form action="https://sudes-nest.mysapo.net/cart/add" method="post"
                                            class="variants product-action item-product-main duration-300" data-cart-form
                                            data-id="product-actions-34619289" enctype="multipart/form-data">

                                            <div class="tag-promo" title="Quà tặng">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src=//bizweb.dktcdn.net/100/506/650/themes/944598/assets/tag_pro_icon.svg?1739018973665
                                                    alt="Quà tặng" class="lazyload" />
                                                <div class="promotion-content">
                                                    <div class="line-clamp-5-new"
                                                        title="

    MUA 6 TẶNG 1 - MUA 10 TẶNG 2 – MUA 20 TẶNG 5

    ">

                                                        <ul>
                                                            <li>MUA 6 TẶNG 1 - MUA 10 TẶNG 2 – MUA 20 TẶNG 5<br></li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover"
                                                    href="../thuong-vy-yen-dao-nhan-sam.html"
                                                    title="Thượng Vy Yến Đảo Nhân Sâm">
                                                    <img class="lazyload duration-300"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                        data-src="//bizweb.dktcdn.net/thumb/large/100/506/650/products/1-0db8d1cc-0547-41f1-9ca8-f8a1a0da9817.jpg?v=1708617243080"
                                                        alt="Thượng Vy Yến Đảo Nhân Sâm">
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="name-price">
                                                    <h3 class="product-name line-clamp-2-new">
                                                        <a href="../thuong-vy-yen-dao-nhan-sam.html"
                                                            title="Thượng Vy Yến Đảo Nhân Sâm">Thượng Vy Yến Đảo Nhân
                                                            Sâm</a>
                                                    </h3>
                                                    <div class="product-price-cart">
                                                        <span class="price">133.000₫</span>
                                                    </div>
                                                </div>
                                                <div class="product-button">
                                                    <input class="hidden" type="hidden" name="variantId"
                                                        value="110199436" />
                                                    <button
                                                        class="btn-cart btn-views quick-view-option btn btn-primary quick-view"
                                                        title="Tùy chọn" type="button"
                                                        data-handle="thuong-vy-yen-dao-nhan-sam">
                                                        <span>Tùy chọn</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                            height="22" fill="currentColor" class="bi bi-gear"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                                            <path
                                                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                                        </svg>
                                                    </button>
                                                    <a href="javascript:void(0)"
                                                        class="setWishlist btn-views btn-circle"
                                                        data-wish="thuong-vy-yen-dao-nhan-sam" tabindex="0"
                                                        title="Thêm vào yêu thích">
                                                        <img width="25" height="25"
                                                            src="../../bizweb.dktcdn.net/100/506/650/themes/944598/assets/heartd27c.png?1739018973665"
                                                            alt="Thêm vào yêu thích" />
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="pagenav">

                            <nav class="collection-paginate clearfix relative nav_pagi w_100">
                                <ul class="pagination clearfix">

                                    <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a>
                                    </li>





                                    <li class="active page-item disabled"><a class="page-link" href="javascript:;"
                                            style="pointer-events:none">1</a></li>




                                    <li class="page-item"><a class="page-link" onclick="doSearch(2)"
                                            href="javascript:;">2</a></li>



                                    <li class="page-item"><a class="page-link link-next-pre" onclick="doSearch(2)"
                                            href="javascript:;" title="2">&raquo;</a></li>

                                </ul>
                            </nav>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('home.section.coupon')


    <script>
        var colName = "Tất cả sản phẩm";

        var colId = 0;

        var selectedViewData = "data";
    </script>
@endsection
