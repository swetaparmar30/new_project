<section class="banner home-page-banner-section-desktop-layout">

    @php
        $img = App\Models\MediaImage::select('id', 'name', 'alt_text')->find($banner->banner_img);
        $img1100 = App\Models\MediaImage::select('id', 'name', 'alt_text')->find($banner->banner_img_1100x480);
        $mobileImg = App\Models\MediaImage::select('id', 'name', 'alt_text')->find($banner->mobile_banner_img);

        $defaultBannerImg1920 = 'front-assets/src/images/home-page-banner1920.webp';
        $defaultBannerImg1100 = 'front-assets/src/images/home-page-banner1100.webp';
        $defaultMobileImg = 'front-assets/src/images/home-page-banner375.webp';

        $bannerImg1920x757 = $img ? asset('uploads/' . $img->name) : asset($defaultBannerImg1920);
        $bannerImg1100x480 = $img1100 ? asset('uploads/' . $img1100->name) : asset($defaultBannerImg1100);
        $mobileImgSrc = $mobileImg ? asset('uploads/' . $mobileImg->name) : asset($defaultMobileImg);

        $bannerAltText = $img && !empty($img->alt_text) ? $img->alt_text : 'Banner Image';

        if (!function_exists('imageAsset')) {
            function imageAsset($screen, $mobileImgSrc = null, $bannerImg1100x480 = null): string
            {
                if ($screen === 575 && $mobileImgSrc) {
                    return $mobileImgSrc;
                }
                return $bannerImg1100x480 ?: asset('front-assets/src/images/home-page-banner1100.webp');
            }
        }
    @endphp

    <picture>

        <source srcset="{{ imageAsset(575, $mobileImgSrc) }}" media="(max-width: 575px)" type="image/webp">
        <source srcset="{{ $bannerImg1100x480 }}" media="(max-width: 1100px)" type="image/webp">
        <source srcset="{{ $bannerImg1920x757 }}" media="(min-width: 1101px)" type="image/webp">

        <img class="banner-img" src="{{ $bannerImg1920x757 }}" data-src="{{ $bannerImg1920x757 }}"
            srcset="{{ imageAsset(575, $mobileImgSrc) .
                ' 575w,' .
                imageAsset(991) .
                ' 991w,' .
                $bannerImg1100x480 .
                ' 1100w,' .
                $bannerImg1920x757 .
                ' 1920w' }}"
            sizes="(max-width: 575px) 575px, 
                    (max-width: 991px) 991px, 
                    (max-width: 1100px) 1100px, 
                    (max-width: 1300px) 1300px, 
                    1500px"
            alt="{{ $bannerAltText }}" width="500" height="415" fetchpriority="high" loading="eager"
            decoding="async">
    </picture>


    <div class="banner-content">
        <div class="container-md">
            <div class="row">

                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 left-side desk-banner-left-side">


                    <div class="home-page-banner-content-padding">


                        @if (!empty($banner->banner_subtitle))
                            <h4>{{ $banner->banner_subtitle }}</h4>
                        @endif



                        @php
                            $isServiceRepair = request()->is('service-and-repair*');
                        @endphp

                        @if (!empty($banner->banner_description))
                            <h1 class="{{ $isServiceRepair ? 'service-and-repair' : '' }}">
                                {!! $banner->banner_title !!}</h1>
                        @endif



                        @if (!empty($banner->banner_description))
                            {!! $banner->banner_description !!}
                        @endif
                    </div>

                     <img src="{{ $mobileImgSrc }}" alt="{{ $bannerAltText }}" class="img-fluid home-page-banner-mobile-layout-img"> 
                    <!-- <img src="{{ asset('front-assets/src/images/mobile-banner-frame.webp') }}" class="img-fluid home-page-banner-mobile-layout-img"> -->
                </div>


                @php
                    $mobileimg = App\Models\MediaImage::select('name')
                        ->where('id', $banner->mobile_banner_img)
                        ->first();
                    $bgImage = $mobileimg
                        ? asset('uploads/' . $mobileimg->name)
                        : asset('front-assets/src/images/home-mobile-banner-image.webp');
                @endphp





                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 right-side">
                    @include('frontend.includes.contactform')
                </div>
            </div>
        </div>
    </div>
</section>
