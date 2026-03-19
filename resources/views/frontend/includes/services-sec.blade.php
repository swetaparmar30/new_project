@if (isset($service_head_sec) || isset($services_sec))
    <section class="garage-door-maintenance-sec new-services-sec sandk-common-padding sandk-common">
        <div class="container-md">
            <div class="row align-items-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 services-sec">

                    @if (!empty($service_head_sec->service_head_title))
                        <h2>{!! $service_head_sec->service_head_title !!}</h2>
                    @endif



                    @if (!empty($service_head_sec->service_head_description))
                        {!! $service_head_sec->service_head_description !!}
                    @endif
                </div>
            </div>
        </div>

        @if (!empty($services_sec->services))
            <div class="container-md">
                <div class="row align-items-center desktop-garage-door-maintenance-sec">
                    <div class="left-side">
                        <div class="row left-side-tab-items">
                            @foreach ($services_sec->services as $service)
                                <div
                                    class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section {{ $loop->iteration <= 3 ? 'upper-box' : '' }}">
                                    <article>
                                        @if (!empty($service->service_url))
                                            <a href="{{ $service->service_url }}">
                                        @endif

                                        @if (isset($service->service_img) && $service->service_img != null)
                                            @php
                                                $img = App\Models\MediaImage::where(
                                                    'id',
                                                    $service->service_img,
                                                )->first();
                                            @endphp
                                            @if (isset($img->name) && $img->name != null)
                                                <img src="{{ asset('uploads/' . $img->name) }}"
                                                    srcset="{{ asset('uploads/' . $img->name) }} 602w"
                                                    sizes="(max-width: 600px) 400px, (max-width: 900px) 600px, 602px"
                                                    class="img-fluid" width="602" height="588" loading="lazy"
                                                    alt="{{ $img->alt_text ?: $service->door_title ?? 'Common Garage' }}">
                                            @endif
                                        @else
                                            <img src="{{ asset('uploads/garage-door-repairs-and-parts-replacement-delaware.webp') }}"
                                                class="img-fluid" width="602" height="588" alt="Garage Door"
                                                loading="lazy">
                                        @endif

                                        @if (!empty($service->service_url))
                                            </a>
                                        @endif

                                        @if (!empty($service->title))
                                            <a href="{{ $service->service_url ?? '#' }}">
                                                <h4>{{ $service->title }}</h4>
                                            </a>
                                        @endif

                                        @if (!empty($service->description))
                                            <div>
                                                {!! $service->description !!}
                                            </div>
                                        @endif

                                        @if (!empty($service->url_title))
                                            <div class="services-link">
                                                <a
                                                    href="{{ $service->service_url ?? '#' }}">{{ $service->url_title }}</a>
                                            </div>
                                        @endif
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Mobile layout --}}
                <div class="row align-items-center mobile-service-sec">
                    <div class="left-side">
                        <div class="left-side-tab-items">
                            @foreach ($services_sec->services as $service)
                                <div
                                    class=" service-box-section {{ $loop->iteration <= 3 ? 'upper-box' : '' }}">
                                    <article>
                                        @if (!empty($service->service_url))
                                            <a href="{{ $service->service_url }}">
                                        @endif

                                        @if (isset($service->service_img) && $service->service_img != null)
                                            @php
                                                $img = App\Models\MediaImage::where(
                                                    'id',
                                                    $service->service_img,
                                                )->first();
                                            @endphp
                                            @if (isset($img->name) && $img->name != null)
                                                <img src="{{ asset('uploads/' . $img->name) }}"
                                                    srcset="{{ asset('uploads/' . $img->name) }} 602w"
                                                    sizes="(max-width: 600px) 400px, (max-width: 900px) 600px, 602px"
                                                    class="img-fluid" width="602" height="588" loading="lazy"
                                                    alt="{{ $img->alt_text ?: $service->door_title ?? 'Common Garage' }}">
                                            @endif
                                        @else
                                            <img src="{{ asset('uploads/garage-door-repairs-and-parts-replacement-delaware.webp') }}"
                                                class="img-fluid" width="602" height="588" alt="Garage Door"
                                                loading="lazy">
                                        @endif

                                        @if (!empty($service->service_url))
                                            </a>
                                        @endif

                                        <div class="new-flex-sec">
                                            @if (!empty($service->title))
                                                <a href="{{ $service->service_url ?? '#' }}">
                                                    <h4>{{ $service->title }}</h4>
                                                </a>
                                            @endif

                                            @if (!empty($service->description))
                                                <div class="desc-flex-sec">
                                                    {!! $service->description !!}
                                                </div>
                                            @endif

                                            @if (!empty($service->url_title))
                                                <div class="services-link">
                                                    <a
                                                        href="{{ $service->service_url ?? '#' }}">{{ $service->url_title }}</a>
                                                </div>
                                            @endif
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endif





<!-- <style>
    @media (max-width: 767px) {

.service-box-section article p{padding: 0;margin:0}


.service-box-section  .new-flex-sec{display: flex;
    flex-wrap: wrap;
    padding: 20px 20px 30px;
    flex-direction: column;
    height: 100%;}
.service-box-section article h4{padding: 0;margin:0}
.services-link{margin-top: auto;padding: 0;}

.service-box-section  .new-flex-sec a:first-of-type{margin-bottom:20px}
.service-box-section  .new-flex-sec .desc-flex-sec{margin-bottom:20px}

.garage-door-maintenance-sec .mobile-service-sec .owl-stage{display:flex}
.garage-door-maintenance-sec .mobile-service-sec .owl-carousel .owl-item{display: flex;height:auto}

.service-box-section article {height:100%}
        
    }
</style>  -->