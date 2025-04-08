<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="theme-color" content="#8d251c" />
    <link rel="canonical" href="index.html" />
    <meta name="revisit-after" content="2 days" />
    <meta name="robots" content="noodp,index,follow" />
    <meta name="description" content="Xã Hội Vạn Thiện - Tinh Chất Thiên Nhiên." />
    <meta name="keywords" content="dầu gội, Xã Hội Vạn Thiện, dầu xã, tinh dầu, xà phòng" />
    <title>Xã Hội Vạn Thiện - Thương hiệu yến sào cao cấp, chất lượng và uy tín</title>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Xã Hội Vạn Thiện - Tinh chất thiên nhiên." />
    <meta property="og:description"
        content="Xã Hội Vạn Thiện - Đến nay đã chiếm trọn niềm tin của khách hàng bởi chất lượng - tinh tế." />
    <meta property="og:image" content="/images/logo.png" />
    <meta property="og:image:secure_url" content="/images/logo/logo.png" />
    <meta property="og:url" content="#" />
    <meta property="og:site_name" content="Xã Hội Vạn Thiện" />

    <link rel="icon" href="/images/favicon/favicon.png" type="image/x-icon" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/assets/css/fonts.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap-4-3-min.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/index.css" />
    <link rel="stylesheet" href="/assets/css/quickviews_popup_cart.css" />
    <link rel="stylesheet" href="/assets/css/ajaxcart.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/breadcrumb_style.css" />
    <link rel="stylesheet" href="/assets/css/collection_style.css" />


    <script src="/assets/js/swiper.js"></script>

    <script>
        (function() {
            function asyncLoad() {
                var urls = [];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad,
                false);
        })();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            awe_lazyloadImage();

            /*Header promotion*/

            var index = 0,
                stop = false,
                num = document.querySelectorAll('.js-promo > li').length,
                liEls = document.querySelectorAll('.js-promo > li');

            function shippingflipInX() {
                if (stop) return false;
                if (index > (num - 2)) {
                    liEls.forEach(function(el) {
                        el.classList.add('see-none');
                        el.classList.remove('animated', 'flipInX', 'see-block');
                    });
                    index = 0;
                    liEls[0].classList.add('animated', 'flipInX', 'see-block');
                    liEls[0].classList.remove('see-none');
                    return;
                }

                liEls.forEach(function(el) {
                    el.classList.add('see-none');
                    el.classList.remove('animated', 'flipInX', 'see-block');
                });
                liEls[index + 1].classList.remove('see-none');
                liEls[index + 1].classList.add('animated', 'flipInX', 'see-block');
                index++;
            }

            var hdtimer = setInterval(function() {
                shippingflipInX();
            }, 5000);

            document.querySelector('.js-promo').addEventListener('mouseenter', function() {
                stop = true;
            });

            document.querySelector('.js-promo').addEventListener('mouseleave', function() {
                stop = false;
            });


            function getItemSearch(name, smartjson) {
                return fetch(`https://${window.location.hostname}/search?q=${name}&view=${smartjson}&type=product`)
                    .then(res => res.json())
                    .catch(err => console.error(err));
            }

            var searchRecent = document.querySelector('.search-suggest .search-recent');
            var searchRecentList = localStorage.getItem('search_recent_list');
            var recentList = searchRecentList ? JSON.parse(searchRecentList) : [];

            if (recentList.length > 0) {
                searchRecent.classList.remove('d-none');
                var searchList = searchRecent.querySelector('.search-list');
                recentList.forEach(function(item) {
                    var link = document.createElement('a');
                    link.href = `/search?query=${encodeURIComponent(item)}&type=product`;
                    link.textContent = item;
                    link.title = `Tìm kiếm ${item}`;
                    link.classList.add('search-item');

                    var closeSpan = document.createElement('span');
                    closeSpan.textContent = 'Đóng';
                    closeSpan.title = 'Đóng';
                    closeSpan.classList.add('close');

                    closeSpan.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var index = recentList.indexOf(item);
                        if (index !== -1) {
                            recentList.splice(index, 1);
                            localStorage.setItem('search_recent_list', JSON.stringify(recentList));
                            searchList.removeChild(link);
                            if (recentList.length == 0) {
                                searchRecent.classList.toggle('d-none');
                            }
                        }
                    });

                    link.appendChild(closeSpan);
                    searchList.appendChild(link);
                });
            }

            var searchInput = document.querySelectorAll(
                '.header_tim_kiem input[type="text"], .search-mobile input[type="text"]');
            searchInput.forEach(function(input) {
                input.addEventListener('keyup', function(e) {
                    let term = this.value.trim();
                    let data = '';
                    var resultbox = '';
                    if (term.length > 1) {
                        searchRecent.classList.add('d-none');

                        async function goawaySearch() {
                            data = await getItemSearch(term, 'smartjson');
                            setTimeout(function() {
                                var sizeData = Object.keys(data).length;
                                if (sizeData > 0) {
                                    Object.keys(data).forEach(function(key) {
                                        if (data[key].compare_price !== 0) {
                                            resultbox +=
                                                `<a class="product-smart" href="${data[key].url}" title="${data[key].name}"><div class="image_thumb"><img width="58" height="58" class="lazyload loaded" src="${data[key].image}" data-src="${data[key].image}" alt="${data[key].name}" data-was-processed="true"></div><div class="product-info"><h3 class="product-name"><span>${data[key].name}</span></h3><div class="price-box"><span class="price">${data[key].price}</span><span class="compare-price">${data[key].compare_price}</span></div></div></a>`;
                                        } else {
                                            resultbox +=
                                                `<a class="product-smart" href="${data[key].url}" title="${data[key].name}"><div class="image_thumb"><img width="58" height="58" class="lazyload loaded" src="${data[key].image}" data-src="${data[key].image}" alt="${data[key].name}" data-was-processed="true"></div><div class="product-info"><h3 class="product-name"><span>${data[key].name}</span></h3><div class="price-box"><span class="price">${data[key].price}</span></div></div></a>`;
                                        }
                                    });
                                    resultbox +=
                                        `<a href="/search?query=${term}&type=product" class="see-all-search" title="Xem tất cả">Xem tất cả kết quả »</a>`;
                                    document.querySelector('.list-search').innerHTML =
                                        resultbox;
                                } else {
                                    document.querySelector('.list-search').innerHTML =
                                        '<div class="not-pro">Không có thấy kết quả tìm kiếm</div>';
                                }
                            }, 200);
                        }

                        goawaySearch();
                    } else {
                        if (recentList.length > 0) {
                            searchRecent.classList.remove('d-none');
                        }
                        document.querySelector('.list-search').innerHTML = '';
                    }
                });
            });

        });

        function awe_lazyloadImage() {
            var ll = new LazyLoad({
                elements_selector: ".lazyload",
                load_delay: 100,
                threshold: 0
            });
        }
        window.awe_lazyloadImage = awe_lazyloadImage;
    </script>
</head>


<body>
    <div class="opacity_menu"></div>
    @include('layouts.header')
    <div class="bodywrap">
        <h1 class="d-none">MetaSoft - Đến nay đã chiếm trọn niềm tin của khách hàng bởi chất lượng - tinh
            tế.</h1>

        @yield('content')

        @include('layouts.footer')
    </div>

    <div class="backdrop__body-backdrop___1rvky"></div>

    <!-- Popup Quickview -->
    {{-- @include('layouts.quickview-product') --}}

    <!-- Popup Ads -->
    @include('layouts.popup-ads')

    <!-- Wishlist -->
    @include('layouts.wishlist')

    <!-- Popup Contact -->
    @include('layouts.popup-right')

    <!-- Popup Quickview -->
    <div id="popupCartModal" class="modal fade" role="dialog">
    </div>

    <!-- Popup MetaSoft -->
    @include('layouts.popup-left')

    <link rel="stylesheet" href="/assets/css/jquery-ui-min.css" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/lazy.js"></script>
    {{-- <script src="/assets/js/stats2.min.js"></script>
    <script src="/assets/js/stats.min.js"></script> --}}
    <script src="/assets/js/quickview.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/index.js"></script>

    <script src="/assets/js/jquery-ui-min.js"></script>
    <script src="/assets/js/search_filter.js"></script>
</body>

</html>
