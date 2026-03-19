
<section class="faq-sec sandk-common-padding sandk-common">

    <div class="container-md">
        <div class="row">
            <h2>FAQ’s</h2>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 left-side-image">
                @if ($faqs->faq_img)
                    @php
                        $img = App\Models\MediaImage::where('id', $faqs->faq_img)->first();
                    @endphp
                    <figure>
                        @if (isset($img->name) && $img->name != null)
                           <img src="{{ asset('uploads/'.$img->name) }}" width="626" height="670" 
                                loading="lazy" class="img-fluid"  alt="{{ $img->alt_text ?: ($faqs->faq_title ?? 'Faq') }}">
                        @endif
                    </figure>
                @endif
            </div>

            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 right-faq-sec">
                @if ($faq_data->count() > 0)
                    <div class="accordion" id="bestAccordion">
                        @foreach ($faq_data as $dkey => $dval)
                            @if ($dkey == 7)
                                @php
                                    break;
                                @endphp
                            @endif
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="heading{{ $dkey }}">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $dkey }}">{{ $dval['title'] }}</button>
                                </h4>
                                <div id="collapse{{ $dkey }}" class="accordion-collapse collapse"
                                    data-bs-parent="#bestAccordion">
                                    <div class="card-body">
                                        <p>{{ $dval['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('frontend.page.index', 'faqs') }}/" class="common-btn">View More FAQ's</a>
                @endif

            </div>
        </div>
    </div>
</section>
