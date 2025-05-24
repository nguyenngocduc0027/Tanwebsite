<footer class="footer">
    <div class="mid-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-cus-30 footer-info">
                    <div class="logo-footer">
                        <a href="{{ route('home') }}" title="">
                            <img width="300" height="96" src="/images/logo/logo.png"
                                data-src="/images/logo/logo.png" alt="" class="lazyload">
                        </a>
                    </div>
                    <div class="list-menu toggle-mn">
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                                <b>Địa chỉ:
                                </b>{{ webConfig()->address ?? '216 Hoàng Mai - Hoàng văn Thụ - Hoàng Mai - Hà Nội' }}
                            </span>
                        </div>
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                                <b>Điện thoại: </b>
                                <a title="{{ webConfig()->phone ?? '19006750' }}"
                                    href="tel:{{ webConfig()->phone ?? '19006750' }}">
                                    {{ webConfig()->phone ?? '19006750' }}
                                </a>
                            </span>
                        </div>
                        <div class="content-contact clearfix">
                            <span class="list_footer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                                <b>Email: </b>
                                <a title="{{ webConfig()->email ?? 'metasoftvietnam@gmail.com' }}"
                                    href="mailto:{{ webConfig()->email ?? 'metasoftvietnam@gmail.com' }}">
                                    {{ webConfig()->email ?? 'metasoftvietnam@gmail.com' }}
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="social-footer">
                        <div class="social">
                            @if (!empty(webConfig()->facebook))
                                <a href="{{ webConfig()->facebook }}" target="_blank" aria-label="Facebook"
                                    title="Theo dõi  trên Facebook">
                                    <img class="lazyload" width=35 height=35 alt="Facebook"
                                        data-src="{{ asset('/images/social/facebook_2.svg') }}"
                                        src="{{ asset('/images/social/facebook_2.svg') }}" />
                                </a>
                            @endif

                            @if (!empty(webConfig()->shoppe))
                                <a href="{{ webConfig()->shoppe }}" target="_blank" aria-label="Shopee"
                                    title="Theo dõi  trên Shopee">
                                    <img class="lazyload" width=35 height=35 alt="Shopee"
                                        data-src="{{ asset('/images/social/shopee.svg') }}"
                                        src="{{ asset('/images/social/shopee.svg') }}" />
                                </a>
                            @endif
                            @if (!empty(webConfig()->lazada))
                                <a href="{{ webConfig()->lazada }}" target="_blank" aria-label="Lazada"
                                    title="Theo dõi  trên Lazada">
                                    <img class="lazyload" width=35 height=35 alt="Lazada"
                                        data-src="{{ asset('/images/social/lazada.svg') }}"
                                        src="{{ asset('/images/social/lazada.svg') }}" />
                                </a>
                            @endif

                            @if (!empty(webConfig()->tiktok))
                                <a href="{{ webConfig()->tiktok }}" target="_blank" aria-label="Tiktok"
                                    title="Theo dõi  trên Tiktok">
                                    <img class="lazyload" width=35 height=35 alt="Tiktok"
                                        data-src="{{ asset('/images/social/tiktok.svg') }}"
                                        src="{{ asset('/images/social/tiktok.svg') }}" />
                                </a>
                            @endif



                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-md-4 col-lg-cus-20 footer-click">
                    <h4 class="title-menu clicked">
                        <span>Chính sách</span>
                    </h4>
                    <ul class="list-menu toggle-mn hidden-mob">
                        @foreach (policies() as $policie)
                            <li class="li_menu">
                                <a href="{{ route('blank', $policie) }}"
                                    title="{{ $policie->title }}">{{ $policie->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-cus-20 footer-click">
                    <h4 class="title-menu clicked">
                        <span>Hướng dẫn</span>
                    </h4>
                    <ul class="list-menu toggle-mn hidden-mob footer-click">
                        @foreach (policieshuongdan() as $policieshuongdan)
                            <li class="li_menu">
                                <a href="{{ route('blank', $policieshuongdan) }}"
                                    title="{{ $policieshuongdan->title }}">{{ $policieshuongdan->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-cus-30">
                    <div class="block-payment">
                        <h4 class="title-menu">
                            <span>Hỗ trợ thanh toán</span>
                        </h4>
                        <div class="payment-footer list-menu">
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="MoMo"
                                    data-src="{{asset('/images/payment/payment_1.png')}}" src="{{asset('/images/payment/payment_1.png')}}" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="Zalo Pay"
                                    data-src="{{asset('/images/payment/payment_2.png')}}" src="{{asset('/images/payment/payment_2.png')}}" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="VnPay"
                                    data-src="{{asset('/images/payment/payment_3.png')}}" src="{{asset('/images/payment/payment_3.png')}}" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="Moca"
                                    data-src="{{asset('/images/payment/payment_4.png')}}" src="{{asset('/images/payment/payment_4.png')}}" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="Visa"
                                    data-src="{{asset('/images/payment/payment_5.png')}}" src="{{asset('/images/payment/payment_5.png')}}" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="ATM"
                                    data-src="{{asset('/images/payment/payment_6.png')}}" src="{{asset('/images/payment/payment_6.png')}}" />
                            </div>
                        </div>

                    </div>
                    <div class="block-certifi">
                        <h4 class="title-menu">
                            <span>Chứng nhận</span>
                        </h4>
                        <div class="certifi-footer">
                            <a href="#" title="Chứng nhận 1" target="_blank">
                                <img width=335 height=108 class="lazyload" alt="Chứng nhận 1"
                                    data-src="{{asset('/images/certifi/certifi_1.png')}}" src="{{asset('/images/certifi/certifi_1.png')}}" />
                            </a>
                            <a href="#" title="Chứng nhận 2" target="_blank">
                                <img width=335 height=108 class="lazyload" alt="Chứng nhận 2"
                                    data-src="{{asset('/images/certifi/certifi_2.png')}}" src="{{asset('/images/certifi/certifi_2.png')}}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-footer-bottom copyright clearfix">
        <div class="container">
            <div class="row tablet">
                <div id="copyright" class="col-lg-12 col-md-12 col-xs-12 fot_copyright">
                    <span class="wsp">
                        <span class="mobile">© Bản quyền thuộc về <b>Alpha Team</b>
                            <span class="dash"> | </span>
                        </span>
                        <span class="opacity1">Cung cấp bởi</span>
                        <a href="http://www.metasoftware.vn" rel="nofollow" title="MetaSoft"
                            target="_blank">MetaSoft</a>
                    </span>
                </div>
            </div>
            <a href="#" class="backtop" title="Lên đầu trang">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)"
                        stroke="black" fill="#fff" stroke-width="2" />
                    <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)"
                        fill="black" />
                    <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>
</footer>
