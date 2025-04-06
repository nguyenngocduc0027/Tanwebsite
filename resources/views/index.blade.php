<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Cấu hình cơ bản -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <title>Sudes Nest - Thương hiệu yến sào cao cấp, chất lượng và uy tín</title>
    <meta name="description"
        content="Sudes Nest - Đến nay đã chiếm trọn niềm tin của khách hàng bởi chất lượng, tinh tế và hợp khẩu vị trong từng dòng sản phẩm về Yến sào.">
    <meta name="keywords"
        content="Sudes Nest, Yến sào, Đông trùng hạ thảo, Saffron Tây Á, set quà tặng, quà biếu cao cấp">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="2 days">
    <link rel="canonical" href="https://sudes-nest.mysapo.net/">

    <!-- Màu trình duyệt -->
    <meta name="theme-color" content="#8d251c">

    <!-- Favicon -->
    <link rel="icon" href="/images/favicon/favicon.webp" type="image/x-icon">

    <!-- Open Graph (Facebook, Zalo...) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Sudes Nest - Thương hiệu yến sào cao cấp, chất lượng và uy tín">
    <meta property="og:description"
        content="Sudes Nest - Đến nay đã chiếm trọn niềm tin của khách hàng bởi chất lượng, tinh tế và hợp khẩu vị trong từng dòng sản phẩm về Yến sào.">
    <meta property="og:image" content="/images/logo/logo.webp">
    <meta property="og:image:secure_url" content="/images/logo/logo.webp">
    <meta property="og:url" content="https://sudes-nest.mysapo.net/">
    <meta property="og:site_name" content="Sudes Nest">

    <!-- Font Google (Bạn có thể thay thế Roboto bằng font khác như Lora, Poppins...) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    {{-- <link rel="stylesheet" href="/assets/css/ajaxcart.scss.css">
    <link rel="stylesheet" href="/assets/css/quickview_popup_cart.scss.css"> --}}
    <link rel="stylesheet" href="/assets/css/main.scss.css">
    {{-- <link rel="stylesheet" href="/assets/css/font.scss.css">
    <link rel="stylesheet" href="/assets/css/index.scss.css"> --}}
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .autoplay-progress {
      position: absolute;
      right: 16px;
      bottom: 16px;
      z-index: 10;
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: var(--swiper-theme-color);
    }

    .autoplay-progress svg {
      --progress: 0;
      position: absolute;
      left: 0;
      top: 0px;
      z-index: 10;
      width: 100%;
      height: 100%;
      stroke-width: 4px;
      stroke: var(--swiper-theme-color);
      fill: none;
      stroke-dashoffset: calc(125.6px * (1 - var(--progress)));
      stroke-dasharray: 125.6;
      transform: rotate(-90deg);
    }
    </style>
</head>
<!-- Body -->

<body>
    <div class="opacity_menu"></div>
    <!-- Header -->
    @include('layouts.header')

    <!-- Content -->
    @yield('body')

    <!-- Footer -->
    @include('layouts.footer')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
          },
          on: {
            autoplayTimeLeft(s, time, progress) {
              progressCircle.style.setProperty("--progress", 1 - progress);
              progressContent.textContent = `${Math.ceil(time / 1000)}s`;
            }
          }
        });
      </script>
</body>

</html>
