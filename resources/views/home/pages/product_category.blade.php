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
                        <a href="{{ route('product') }}" title="Sản phẩm"><span>Sản phẩm</span></a>
                        <span class="mr_lr">></span>
                    </li>
                    <li><strong><span> Tất cả sản phẩm</span></strong></li>
                </ul>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-title">
                        <h1>Tất cả sản phẩm</h1>
                        <div class="title-separator">
                            <div class="separator-center"></div>
                        </div>
                    </div>
                    <div class="col-list-cate">
                        <div class="menu-list">
                            @foreach ($category as $itemcategory)
                                @php
                                    switch ($titleCategory) {
                                        case 'sub_category':
                                            $routeName = 'product_category';
                                            $typle = 'category';
                                            break;
                                        case 'sub_type':
                                            $routeName = 'product_sub_category';
                                            $typle = 'type';
                                            break;
                                        default:
                                            $routeName = 'product_subsub_category';
                                            $typle = 'level';
                                    }
                                @endphp
                                <a class="cate-item duration-300 {{ $categoryId == $itemcategory ? 'active' : '' }}"
                                    href="{{ route($routeName, [$typle => $itemcategory->id]) }}"
                                    title="{{ $itemcategory->name }}">
                                    <div class="cate-info-title">{{ $itemcategory->name }}</div>
                                </a>
                            @endforeach



                        </div>
                    </div>
                    <div class="col-desc">
                        <p class="p_style sm-hidden"> {{$home_pages->product_description ?? ''}}</p>
                    </div>
                </div>

                <div class="block-collection col-lg-12 col-12">
                    <div class="category-products products-view products-view-grid list_hover_pro">
                        <div class="filter-containers">
                            <div class="sort-cate clearfix">
                                <div class="sudes-filter">
                                   
                                </div>
                                @php
                                    $sort = request()->get('sort', 'default');
                                @endphp

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
                                        @php
                                            $sortOptions = [
                                                'default' => 'Mặc định',
                                                'alpha-asc' => 'Tên A-Z',
                                                'alpha-desc' => 'Tên Z-A',
                                                'created-desc' => 'Hàng mới',
                                                'price-asc' => 'Giá thấp đến cao',
                                                'price-desc' => 'Giá cao xuống thấp',
                                            ];
                                        @endphp

                                        @foreach ($sortOptions as $key => $label)
                                            <li
                                                class="btn-quick-sort {{ $key }} {{ $sort == $key ? 'active' : '' }}">
                                                <a href="javascript:void(0);" onclick="sortby('{{ $key }}')"
                                                    title="{{ $label }}">
                                                    <i></i>{{ $label }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="products-view products-view-grid list_hover_pro">
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-6 col-md-3">
                                        <div class="item_product_main">
                                            <form action="{{ route('cart.add') }}" method="POST"
                                                class="variants product-action item-product-main duration-300"
                                                enctype="multipart/form-data">
                                                @csrf
                                               
                                                <div class="product-thumbnail">
                                                    <a class="image_thumb scale_hover"
                                                        href="{{ route('product_detail', ['id' => $product->id]) }}"
                                                        title="{{ $product->name }}">

                                                        <img class="lazyload duration-300"
                                                            src="{{ asset($product->images->first()->image ?? '/images/products/dauxa.jpg') }}"
                                                            data-src="{{ asset($product->images->first()->image ?? '/images/products/dauxa.jpg') }}"
                                                            alt="{{ $product->name }}" />

                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="name-price">
                                                        <h3 class="product-name line-clamp-2-new">
                                                            <a href="{{ route('product_detail', ['id' => $product->id]) }}"
                                                                title="{{ $product->name }} ">{{ $product->name }} </a>
                                                        </h3>
                                                        <div class="product-price-cart">
                                                            <span
                                                                class="compare-price">{{ number_format($product->price) }}₫</span>

                                                            <span
                                                                class="price">{{ number_format($product->sale_price) }}₫</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-button">

                                                        <button class="btn-cart btn-views btn btn-primary "
                                                            title="Thêm vào giỏ hàng" type="submit">
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
                                                        <a href="#"
                                                            onclick="toggleFavorite({{ $product->id }}, this, {{ auth()->check() ? 'true' : 'false' }})"
                                                            class="setWishlist btn-views btn-circle">
                                                            @php
                                                                $isFavorited =
                                                                    auth()->check() &&
                                                                    auth()
                                                                        ->user()
                                                                        ->favoriteProducts->contains($product->id);
                                                            @endphp

                                                            @if ($isFavorited)
                                                                {{-- Trái tim đầy (đã yêu thích) --}}
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="red"
                                                                    viewBox="0 0 24 24" width="24" height="24">
                                                                    <path
                                                                        d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2
                                                                                        5.42 4.42 3 7.5 3c1.74 0 3.41 0.81
                                                                                        4.5 2.09C13.09 3.81 14.76 3 16.5
                                                                                        3 19.58 3 22 5.42 22 8.5c0
                                                                                        3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                                                </svg>
                                                            @else
                                                                {{-- Trái tim rỗng (chưa yêu thích) --}}
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    viewBox="0 0 24 24" width="24" height="24">
                                                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2
                                                                                        12.28 2 8.5 2 5.42 4.42 3 7.5
                                                                                        3c1.74 0 3.41 0.81 4.5 2.09C13.09
                                                                                        3.81 14.76 3 16.5 3 19.58 3
                                                                                        22 5.42 22 8.5c0 3.78-3.4
                                                                                        6.86-8.55 11.54L12 21.35z" />
                                                                </svg>
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        <div class="pagenav">
                            <nav class="collection-paginate clearfix relative nav_pagi w_100">
                                {{ $products->links('pagination::bootstrap-4') }}

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function sortby(sortType) {
            const url = new URL(window.location.href);
    const params = url.searchParams;

    // Cập nhật sort
    params.set('sort', sortType);

    // Cập nhật URL với các params giữ nguyên
    url.search = params.toString();

    // Điều hướng đến URL mới
    window.location.href = url.toString();
}
    </script>
   <script>
    document.addEventListener('DOMContentLoaded', function () {
        const sortToggle = document.querySelector('.sort-cate-right h3');
        const sortList = document.querySelector('.sort-cate-right ul');

        sortToggle.addEventListener('click', function () {
            if (window.innerWidth <= 768) { // Chỉ cho phép click khi là mobile
                this.classList.toggle('active');

                if (sortList.style.display === 'block') {
                    sortList.style.display = 'none';
                } else {
                    sortList.style.display = 'block';
                }
            }
        });
    });
</script>


    {{-- @include('home.section.coupon') --}}
@endsection
