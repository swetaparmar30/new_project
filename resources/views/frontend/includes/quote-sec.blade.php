<section class="get-free-quote-sec sandk-common">
    <img src="{{ asset('front-assets/src/images/get-free-quote-bg.webp') }}" class="background-image" width="100%"
        height="789" alt="" loading="lazy">



    {{-- @if ($quote->quote_img)
        @php
            $img = App\Models\MediaImage::where('id', $quote->quote_img)->first();
        @endphp

        @if (isset($img->name) && $img->name != null)
            <img src="{{ asset('uploads/' . $img->name) }}" class="background-image" width="100%" height="789"
                alt="" loading="lazy" alt="{{ $img->alt_text ?: $quote->faq_title ?? 'Faq' }}">
        @endif

    @endif --}}
    <div class="get-quote-content-sec">
        <div class="container-md">
            <div class="row align-items-center justify-content-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">



                    @if (isset($quote->quote_title) && $quote->quote_title != '')
                        @if (Route::currentRouteName() == 'smyrna.garagedoor')
                            <h2 class="smyrna-h2">{!! $quote->quote_title !!}</h2>
                        @else
                            <h2>{!! $quote->quote_title !!}</h2>
                        @endif
                    @endif



                    @if (isset($quote->quotesub_title) && $quote->quotesub_title != '')
                        @if (Route::currentRouteName() == 'smyrna.garagedoor')
                            <h3 class="smyrna-content">{!! $quote->quotesub_title !!}</h3>
                        @else
                            <h3>{!! $quote->quotesub_title !!}</h3>
                        @endif
                    @endif



                    <div class="get-quote-content-sec-button">
                        @if (isset($quote->quote_button_name) && $quote->quote_button_name != '')
                            @if (isset($quote->quote_button_url) && $quote->quote_button_url != '')
                                @if ($quote->quote_button_url == '#getafreequote')
                                    <button class="common-btn first-btn" data-bs-target="#getafreequote"
                                        data-bs-toggle="modal">
                                    @else
                                        <a class="common-btn first-btn" href="{{ $quote->quote_button_url }}">
                                @endif
                            @else
                                <a class="common-btn first-btn">
                            @endif
                            {{ $quote->quote_button_name }}

                            @if ($quote->quote_button_url == '#getafreequote')
                                </button>
                            @else
                                </a>
                            @endif
                        @endif

                        @if (isset($quote->quotecall_button_name) && $quote->quotecall_button_name != '')
                            @if (isset($quote->quotecall_button_url) && $quote->quotecall_button_url != '')
                                <!-- <a class="common-btn second-btn" href="{{ $quote->quotecall_button_url }}"> -->
                                <a class="common-btn second-btn" data-bs-toggle="modal" data-bs-target="#locationcontact">
                                @else
                                    <a class="common-btn second-btn" data-bs-toggle="modal" data-bs-target="#locationcontact">
                            @endif
                            <img src="{{ asset('front-assets/src/images/white-yellow-call-icon.webp') }}"
                                class="normal-icon" alt="" height="25" width="25"><img
                                src="{{ asset('front-assets/src/images/blue-white-call-icon.webp') }}"
                                class="hover-icon" alt="" height="25"
                                width="25">{{ $quote->quotecall_button_name }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
