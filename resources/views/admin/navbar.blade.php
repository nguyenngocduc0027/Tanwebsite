<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="/dashboard" class="logo">
                <img src="/images/logo/logo.png" alt="navbar brand" class="navbar-brand"
                    height="50" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item">
                    <a href="/dashboard" class="collapsed" >
                        <i class="fas fa-home"></i>
                        <p>Bảng Điều Khiển</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Danh Mục Quản Lý</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#product">
                        <i class="fas fa-box"></i>
                        <p>Sản phẩm</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="product">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.category')  }}">
                                    <span class="sub-item">Danh Mục</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#notification-sale">
                        <i class="fas fa-tags"></i>
                        <p>Tin Khuyến Mãi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="notification-sale">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.notification_sale') }}">
                                    <span class="sub-item">Tin Khuyến Mãi</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.popup_ads')}}">
                                    <span class="sub-item">Popup Quảng Cáo</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#management">
                        <i class="fas fa-user"></i>
                        <p>Tài Khoản</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="management">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.account') }}">
                                    <span class="sub-item">Tài Khoản</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.list_shop')}}" class="collapsed" >
                        <i class="fas fa-map-marked-alt"></i>
                        <p>Hệ Thống Cửa Hàng</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Danh Mục Cài Đặt</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#settings">
                        <i class="fas fa-cog"></i>
                        <p>Cài Đặt</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="settings">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.web_config') }}">
                                    <span class="sub-item">Cài Đặt Chung</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
