@if (isset($service_head_sec) || isset($services_sec))

    <section class="garage-door-maintenance-sec new-services-sec sandk-common-padding sandk-common">

        <div class="container-md">

            <div class="row align-items-center">

                <div
                    class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 services-sec 

                @if (Route::currentRouteName() == 'middletown.garagedoor' ||
                        Route::currentRouteName() == 'odessa.garagedoor' ||
                        Route::currentRouteName() == 'townsend.garagedoor' ||
                        Route::currentRouteName() == 'smyrna.garagedoor') nw-sarea @endif">

                    @if ($service_head_sec->title)
                        <h2>{!! $service_head_sec->title !!}</h2>
                    @else
                        <h2>Our Comprehensive <br> Garage Door Services</h2>
                    @endif

                    @if ($service_head_sec->description)
                        {!! $service_head_sec->description !!}
                    @else
                        <p>At <b>Clark and Sons</b>, our experienced team delivers professional, high-quality garage

                            door

                            solutions tailored specifically to your needs. With over 60 years serving Delaware and the

                            Delmarva

                            Peninsula, we guarantee reliable and efficient services that keep your garage doors safe,

                            secure,

                            and performing smoothly.</p>
                    @endif









                </div>

            </div>

        </div>

        @php

            if (!function_exists('fetchImgPath')) {
                function fetchImgPath($imgId)
                {
                    $img = App\Models\MediaImage::find($imgId);

                    return $img ? asset('uploads/' . $img->name) : '';
                }
            }

        @endphp



        <div class="container-md">

            <div class="row align-items-center desktop-garage-door-maintenance-sec">

                <div class="left-side">

                    <div class="row left-side-tab-items">

                        @foreach ($services_sec as $service)
                            <div
                                class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section upper-box">

                                <article>

                                    @if ($service->img != '')
                                        @php $media = App\Models\MediaImage::find($service->img); @endphp

                                        <a href="{{ url($service->url) }}">

                                            <img src="{{ fetchImgPath($service->img) }}" class="img-fluid"
                                                alt="{{ $media->alt_text ?? ($service->door_title ?? 'Common Garage') }}"
                                                loading="lazy">

                                        </a>
                                    @else
                                        <img src="{{ asset('front-assets/src/images/garage-door-installation-and-replacement-delaware.webp') }}"
                                            width="auto" height="auto" class="img-fluid"
                                            alt="delaware garage door installation and replacement" loading="lazy">
                                    @endif

                                    @if ($service->title != '')
                                        <a href="{{ url($service->url) }}">

                                            <h4>{{ $service->title }}</h4>

                                        </a>
                                    @else
                                        <h4>Garage Door Installation & Replacement</h4>
                                    @endif



                                    <div>

                                        @if ($service->description != '')
                                            {!! $service->description !!}
                                        @else
                                            <p>Enhance your property's value and curb appeal with our premium

                                                residential

                                                and

                                                commercial garage doors. We offer a wide variety of styles, materials,

                                                and

                                                customization options, expertly installed by our skilled professionals

                                                to

                                                match

                                                your

                                                specific requirements.</p>
                                        @endif

                                    </div>



                                    <div class="services-link">

                                        <a href="{{ url($service->url) }}">{{ $service->urltitle ?? 'Service' }}</a>

                                    </div>

                                </article>

                            </div>
                        @endforeach







                    </div>

                </div>

            </div>

            <div class="row align-items-center mobile-service-sec">

                <div class="left-side">

                    <div class="left-side-tab-items">

                        @foreach ($services_sec as $service)
                            <div
                                class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section upper-box">

                                <article>

                                    @if ($service->img != '')
                                        @php $media = App\Models\MediaImage::find($service->img); @endphp

                                        <a href="{{ url($service->url) }}">

                                            <img src="{{ fetchImgPath($service->img) }}" class="img-fluid"
                                                alt="{{ $media->alt_text ?? ($service->door_title ?? 'Common Garage') }}"
                                                loading="lazy">

                                        </a>
                                    @else
                                        <img src="{{ asset('front-assets/src/images/garage-door-installation-and-replacement-delaware.webp') }}"
                                            width="auto" height="auto" class="img-fluid"
                                            alt="delaware garage door installation and replacement" loading="lazy">
                                    @endif
                                    <div class="new-flex-sec">
                                        @if ($service->title != '')
                                            <a href="{{ url($service->url) }}">

                                                <h4>{{ $service->title }}</h4>

                                            </a>
                                        @else
                                            <h4>Garage Door Installation & Replacement</h4>
                                        @endif



                                        <div>

                                            @if ($service->description != '')
                                                <div class="desc-flex-sec">
                                                    {!! $service->description !!}
                                                </div>
                                            @else
                                                <p>Enhance your property's value and curb appeal with our premium

                                                    residential

                                                    and

                                                    commercial garage doors. We offer a wide variety of styles,
                                                    materials,

                                                    and

                                                    customization options, expertly installed by our skilled
                                                    professionals

                                                    to

                                                    match

                                                    your

                                                    specific requirements.</p>
                                            @endif

                                        </div>


                                        <div class="services-link">

                                        <a href="{{ url($service->url) }}">{{ $service->urltitle ?? 'Service' }}</a>

                                    </div>
                                    </div>
                                </article>

                            </div>
                        @endforeach









                    </div>

                </div>

            </div>

    </section>
@else
@endif
