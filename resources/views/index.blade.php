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
    <meta name="description" content="{{webConfig()->seo_description ?? 'Xã Hội Vạn Thiện - Tinh Chất Thiên Nhiên.'}}" />
    <meta name="keywords" content="{{webConfig()->seo_keywords ?? 'dầu gội, Xã Hội Vạn Thiện, dầu xã, tinh dầu, xà phòng'}}" />
    <title>{{webConfig()->name ?? 'Metasoft'}}</title>

    <!-- Meta Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{webConfig()->seo_title ?? 'Xã Hội Vạn Thiện - Tinh Chất Thiên Nhiên.'}}" />
    <meta property="og:description"
        content="{{webConfig()->seo_description ?? 'Xã Hội Vạn Thiện - Đến nay đã chiếm trọn niềm tin của khách hàng bởi chất lượng - tinh tế.'}}" />
    <meta property="og:image" content="/images/logo.png" />
    <meta property="og:image:secure_url" content="/images/logo/logo.png" />
    <meta property="og:url" content="#" />
    <meta property="og:site_name" content="{{webConfig()->seo_site_name ?? 'Xã Hội Vạn Thiện'}}" />

    <link rel="icon" href="/images/favicon/favicon.png" type="image/x-icon" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- <link rel="stylesheet" href="/assets/css/fonts.css" /> --}}
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap-4-3-min.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/cartpage.scss.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/index.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/quickviews_popup_cart.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/ajaxcart.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/breadcrumb_style.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/collection_style.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/product_style.scss.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/blog_article_style.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/sidebar_style.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/contact_style.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/account_oder_style.css')}}" />


    <script src="{{asset('/assets/js/swiper.js')}}"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v19.0">
    </script>
    {{-- @dd(Auth::user()) --}}
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

    <link rel="stylesheet" href="{{asset('/assets/css/jquery-ui-min.css')}}" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{asset('/assets/js/jquery.js')}}"></script>
    <script src="{{asset('/assets/js/lazy.js')}}"></script>
    {{-- <script src="/assets/js/stats2.min.js"></script>
    <script src="/assets/js/stats.min.js"></script> --}}
    <script src="{{asset('/assets/js/quickview.js')}}"></script>
    <script src="{{asset('/assets/js/main.js')}}"></script>
    <script src="{{asset('/assets/js/index.js')}}"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Thành công!',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Lỗi đăng ký!',
                html: `{!! implode('<br>', $errors->all()) !!}`,
            });
        </script>
    @endif
    <script>
        function toggleFavorite(productId, element, isLoggedIn) {
            if (!isLoggedIn) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Bạn cần đăng nhập để yêu thích sản phẩm!',
                    showConfirmButton: true,
                    confirmButtonText: 'Đăng nhập',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{ route('login') }}';
                    }
                });
                return;
            }
    
            fetch(`/favorite/${productId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                Swal.fire({
                    icon: 'success',
                    title: data.message,
                    timer: 1500,
                    showConfirmButton: false
                });
    
                const svgHeartFilled = `
                    <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 
                        2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41 0.81 
                        4.5 2.09C13.09 3.81 14.76 3 16.5 
                        3 19.58 3 22 5.42 22 8.5c0 
                        3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                `;
    
                const svgHeartOutline = `
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" 
                        stroke-width="2" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 
                        12.28 2 8.5 2 5.42 4.42 3 7.5 
                        3c1.74 0 3.41 0.81 4.5 2.09C13.09 
                        3.81 14.76 3 16.5 3 19.58 3 
                        22 5.42 22 8.5c0 3.78-3.4 
                        6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                `;
    
                // Toggle icon
                element.innerHTML = element.innerHTML.includes('fill="red"') ? svgHeartOutline : svgHeartFilled;
    
                // Cập nhật số lượng yêu thích
                document.querySelector('.js-wishlist-count').textContent = data.wishlistCount;
    
                // Nếu đang ở trang yêu thích -> xóa sản phẩm khỏi giao diện
                if (data.message.includes('Đã xóa')) {
                    window.location.reload();
                }
            });
        }
    </script>
    

    {{-- <script src="/assets/js/jquery-ui-min.js"></script>
    <script src="/assets/js/search_filter.js"></script> --}}
</body>

</html>
