
<section class="year-of-excilence sandk-common">
    <div class="container-md">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 left-side">
                @if (isset($system_setting->system_img) && $system_setting->system_img != null)
                    @php
                        $img = App\Models\MediaImage::where('id', $system_setting->system_img)->first();
                    @endphp
                    @if (isset($img->name) && $img->name != null)
                        <img src="{{ asset('uploads/' . $img->name) }}" class="img-fluid"
                            alt="{{ $img->alt_text ?: $system_setting->system_setting_title ?? 'Garage Door' }}"
                            loading="lazy" width="1000" height="592.88">
                    @endif
                @else
                    <img src="{{ asset('front-assets/src/images/51-Years-Of-Excellence.webp') }}"
                        class="img-fluid desktop-image" width="1000" height="592.88" alt="" loading="lazy">
                @endif
            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 right-side">

                <div class="need-new-garage-door mobile garage-door-popup-button" type="button" data-bs-toggle="modal"
                    data-bs-target="#selectdoor" style="display: none;" loading="lazy">
                    <div class="inner-sec">
                        <img src="{{ asset('front-assets/src/images/full-open-door.webp') }}" class="img-fluid"
                            width="auto" height="auto" alt="" loading="lazy">
                        <div class="text-sec">
                            <h3>Need a new <br>garage door?</h3>
                        </div>
                    </div>
                </div>

                @if (isset($system_setting->system_setting_title) && $system_setting->system_setting_title != '')
                    <h2>{{ $system_setting->system_setting_title }} <span>
                            {{ $system_setting->system_sub_title }}</span></h2>
                @endif

                @if (isset($system_setting->system_img) && $system_setting->system_img != null && $img->name && $img->name != null)
                    @if (isset($img->name) && $img->name != null)
                        <img src="{{ asset('uploads/' . $img->name) }}" class="img-fluid mobile-img"
                            alt="{{ $img->alt_text ?: $system_setting->system_setting_title ?? 'Garage Door' }}"
                            loading="lazy" width="1000" height="500">
                    @endif
                @endif

                @if (isset($system_setting->system_setting_description) && $system_setting->system_setting_description != '')

                    @php
                        $slug = request()->segment(count(request()->segments()));
                        $yearDesc = $system_setting->system_setting_description;
                        if ($slug === 'service-and-repair') {
                            $find = 'garage and door company in Delaware';
                            $replace =
                                '<a class="in-link" href="http://127.0.0.1:8000/">garage door company in Delaware</a>';
                            $yearDesc = str_replace($find, $replace, $yearDesc);
                        }
                    @endphp

                    @if (!empty($yearDesc))
                        {!! $yearDesc !!}
                    @endif

                @endif
                <div class="need-new-garage-door desktop preload-images" type="button" data-bs-toggle="modal"
                    data-bs-target="#selectdoor" id="door" style="display: block;">
                    <div class="inner-sec">
                        <div class="text-sec">
                            <h3>Need a new <br>garage door?</h3>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 center-side-list desktop">
                <ul class="with-icon-list ">
                    @if (isset($system_setting->title1) && $system_setting->title1 != '')
                        @if (isset($system_setting->system_img1) && $system_setting->system_img1 != null)
                            @php
                                $img1 = App\Models\MediaImage::select('name')
                                    ->where('id', $system_setting->system_img1)
                                    ->first();

                            @endphp
                            @if (isset($img1->name) && $img1->name != null)
                                @php
                                    $url1 = asset('uploads/' . $img1->name);
                                @endphp
                            @endif
                        @endif
                        <li
                            @if (isset($url1)) style="background-image: url({{ $url1 }})" @endif>
                            <div>
                                <span class="text-span">{!! $system_setting->title1 !!}</span>
                            </div>
                        </li>
                    @endif
                    @if (isset($system_setting->title2) && $system_setting->title2 != '')
                        @if (isset($system_setting->system_img2) && $system_setting->system_img2 != null)
                            @php
                                $img2 = App\Models\MediaImage::select('name')
                                    ->where('id', $system_setting->system_img2)
                                    ->first();

                            @endphp
                            @if (isset($img2->name) && $img2->name != null)
                                @php
                                    $url2 = asset('uploads/' . $img2->name);
                                @endphp
                            @endif
                        @endif
                        <li
                            @if (isset($url2)) style="background-image: url({{ $url2 }})" @endif>
                            <div>
                                <span class="text-span">{!! $system_setting->title2 !!}</span>
                            </div>
                        </li>
                    @endif
                    @if (isset($system_setting->title3) && $system_setting->title3 != '')
                        @if (isset($system_setting->system_img3) && $system_setting->system_img3 != null)
                            @php
                                $img3 = App\Models\MediaImage::select('name')
                                    ->where('id', $system_setting->system_img3)
                                    ->first();

                            @endphp
                            @if (isset($img3->name) && $img3->name != null)
                                @php
                                    $url3 = asset('uploads/' . $img3->name);
                                @endphp
                            @endif
                        @endif
                        <li
                            @if (isset($url3)) style="background-image: url({{ $url3 }})" @endif>
                            <div>
                                <span class="text-span">{!! $system_setting->title3 !!}</span>
                            </div>
                        </li>
                    @endif
                    @if (isset($system_setting->title4) && $system_setting->title4 != '')
                        @if (isset($system_setting->system_img4) && $system_setting->system_img4 != null)
                            @php
                                $img4 = App\Models\MediaImage::select('name')
                                    ->where('id', $system_setting->system_img4)
                                    ->first();
                            @endphp
                            @if (isset($img4->name) && $img4->name != null)
                                @php
                                    $url4 = asset('uploads/' . $img4->name);
                                @endphp
                            @endif
                        @endif
                        <li
                            @if (isset($url4)) style="background-image: url({{ $url4 }})" @endif>
                            <div>
                                <span class="text-span">{!! $system_setting->title4 !!}</span>
                            </div>
                        </li>
                    @endif

                </ul>
            </div>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 center-side-list mobile">
                {{-- <ul>
                    @if (isset($system_setting->title1) && $system_setting->title1 != '')
                        <li>{{ strip_tags($system_setting->title1) }}</li>
                    @endif
                    @if (isset($system_setting->title2) && $system_setting->title2 != '')
                        <li>{{ strip_tags($system_setting->title2) }}</li>
                    @endif
                    @if (isset($system_setting->title3) && $system_setting->title3 != '')
                        <li>{{ strip_tags($system_setting->title3) }}</li>
                    @endif
                    @if (isset($system_setting->title4) && $system_setting->title4 != '')
                        <li>{{ strip_tags($system_setting->title4) }}</li>
                    @endif
                </ul> --}}


              <ul class="mobile-feature-list">

    @if (!empty($system_setting->title1))
        @php
            $url1 = null;
            if (!empty($system_setting->system_img1)) {
                $img1 = App\Models\MediaImage::select('name')->find($system_setting->system_img1);
                $url1 = $img1? asset('uploads/' . $img1->name) : null;
            }
        @endphp
        <li>
            @if($url1)
                <img src="{{ $url1 }}" alt="{{ strip_tags($system_setting->title1) }}">
            @endif
            <span>{!! $system_setting->title1 !!}</span>
        </li>
    @endif

    @if (!empty($system_setting->title2))
        @php
            $url2 = null;
            if (!empty($system_setting->system_img2)) {
                $img2 = App\Models\MediaImage::select('name')->find($system_setting->system_img2);
                $url2 = $img2? asset('uploads/' . $img2->name) : null;
            }
        @endphp
        <li>
            @if($url2)
                <img src="{{ $url2 }}" alt="{{ strip_tags($system_setting->title2) }}">
            @endif
            <span>{!! $system_setting->title2 !!}</span>
        </li>
    @endif

    @if (!empty($system_setting->title3))
        @php
            $url3 = null;
            if (!empty($system_setting->system_img3)) {
                $img3 = App\Models\MediaImage::select('name')->find($system_setting->system_img3);
                $url3 = $img3? asset('uploads/' . $img3->name) : null;
            }
        @endphp
        <li>
            @if($url3)
                <img src="{{ $url3 }}" alt="{{ strip_tags($system_setting->title3) }}">
            @endif
            <span>{!! $system_setting->title3 !!}</span>
        </li>
    @endif

    @if (!empty($system_setting->title4))
        @php
            $url4 = null;
            if (!empty($system_setting->system_img4)) {
                $img4 = App\Models\MediaImage::select('name')->find($system_setting->system_img4);
                $url4 = $img4? asset('uploads/' . $img4->name) : null;
            }
        @endphp
        <li>
            @if($url4)
                <img src="{{ $url4 }}" alt="{{ strip_tags($system_setting->title4) }}">
            @endif
            <span>{!! $system_setting->title4 !!}</span>
        </li>
    @endif

</ul>


            </div>

        </div>

    </div>
</section>
