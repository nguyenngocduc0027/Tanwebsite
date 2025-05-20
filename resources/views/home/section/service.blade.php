<div class="section_services">
    <div class="container">
        <div class="bg-container">
            <div class="wire-left"></div>
            <div class="wire-right"></div>
            <div class="services-border">
                <div class="row promo-box">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 promo-item duration-300">
                        <div class="icon aspect-1">
                            <img width="50" height="50" class="lazyload"
                                data-src="{{asset($home_pages->image1 ?? '/images/ser/ser_1.png')}}"
                                alt="{{$home_pages->service1}}"
                                src="{{asset($home_pages->image1 ?? '/images/ser/ser_1.png')}}" />
                        </div>
                        <div class="info">
                            <h3>
                                {{$home_pages->service1}}
                            </h3>
                            <span>
                                {{$home_pages->content1}}
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 promo-item duration-300">
                        <div class="icon aspect-1">
                            <img width="50" height="50" class="lazyload"
                                data-src="{{asset($home_pages->image2 ?? '/images/ser/ser_2.png')}}"
                                alt="{{$home_pages->service2}}"
                                src="{{asset($home_pages->image2 ?? '/images/ser/ser_2.png')}}" />
                        </div>
                        <div class="info">
                            <h3>
                                {{$home_pages->service2}}
                            </h3>
                            <span>
                                {{$home_pages->content2}}
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 promo-item duration-300">
                        <div class="icon aspect-1">
                            <img width="50" height="50" class="lazyload"
                                data-src="{{asset($home_pages->image3 ?? '/images/ser/ser_3.png')}}"
                                alt="Sudes Nest"
                                src="{{asset($home_pages->image3 ?? '/images/ser/ser_3.png')}}" />
                        </div>
                        <div class="info">
                            <h3>
                                 {{$home_pages->service3}}
                            </h3>
                            <span>
                                {{$home_pages->content3}}
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 promo-item duration-300">
                        <div class="icon aspect-1">
                            <img width="50" height="50" class="lazyload"
                                data-src="{{asset($home_pages->image4 ?? '/images/ser/ser_4.png')}}"
                                alt="{{$home_pages->service4?? ''}}"
                                src="{{asset($home_pages->image4 ?? '/images/ser/ser_4.png')}}" />
                        </div>
                        <div class="info">
                            <h3>
                              {{$home_pages->service4 ?? ''}}
                            </h3>
                            <span>
                                {{$home_pages->content4 ?? ''}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
