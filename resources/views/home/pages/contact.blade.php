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
                    <li><strong><span>Liên Hệ</span></strong></li>
                </ul>
            </div>
        </section>
        <h1 class="title-head-contact a-left d-none">Liên hệ</h1>
        <div class="layout-contact">
            <div class="container">
                <div class="bg-shadow">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="contact">
                                <h4>{{webConfig()->name ?? 'Xã Hội Vạn Thiện'}}</h4>
                                <div class="time_work">
                                    <div class="item">
                                        <b>Địa chỉ: </b> {{webConfig()->address ?? '216 Hoàng Mai - Hoàng văn Thụ - Hoàng Mai - Hà Nội'}}
                                    </div>
                                    <div class="item">
                                        <b>Hotline: </b> <a class="fone" href="tel:{{webConfig()->phone ?? '19006750'}}" title="{{webConfig()->phone ?? '19006750'}}">{{webConfig()->phone ?? '19006750'}}</a>
                                    </div>
                                    <div class="item">
                                        <b>Email:</b> <a href="mailto:{{webConfig()->email ?? 'metasoftvietnam@gmail.com'}}"
                                            title="{{webConfig()->email ?? 'metasoftvietnam@gmail.com'}}">{{webConfig()->email ?? 'metasoftvietnam@gmail.com'}}</a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="btn btn-primary frame" title="Hệ thống cửa hàng">
                                            <svg width="14" height="32" viewBox="0 0 14 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="border-svg border-svg-left">
                                                <path
                                                    d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                                    fill="none" />
                                                <path
                                                    d="M13.3726 0H0.372559V13.2018L3.16222 16L6.37256 19L9.5 16L7.93628 14.5L6.37256 13L0.372559 18.6069V32H13.3726"
                                                    stroke="white" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z">
                                                </path>
                                                <path
                                                    d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z">
                                                </path>
                                            </svg>
                                            Hệ thống cửa hàng
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
                            <div class="form-contact">
                                <h4>
                                    Liên hệ với chúng tôi
                                </h4>
                                <div id="pagelogin">
                                    <form method="post" action="{{ route('contact.submit') }}" id="contact"
                                        accept-charset="UTF-8">
                                        @csrf
                                        <div class="group_contact">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input placeholder="Họ và tên" type="text"
                                                        class="form-control form-control-lg" required name="name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input placeholder="Email" type="email"
                                                        class="form-control form-control-lg" required name="email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="number" placeholder="Điện thoại" name="phone"
                                                        class="form-control form-control-lg" required>
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Nội dung" name="message" class="form-control content-area form-control-lg" rows="5"
                                                        required></textarea>
                                                    <button type="submit" class="btn btn-primary mt-3">
                                                        Gửi tin nhắn
                                                        <i class="bi bi-send"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div id="contact_map" class="map">
                                <iframe
                                    src="{{webConfig()->maps ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.103350100104!2d105.85203097461414!3d20.989196489137562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab24c5621439%3A0xed7a32c6a7340f8e!2zQ8O0bmcgVHkgVE5ISCBHaeG6o2kgUGjDoXAgQ8O0bmcgTmdo4buHIE1ldGFTb2Z0!5e1!3m2!1svi!2s!4v1744401648050!5m2!1svi!2s'}}"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
