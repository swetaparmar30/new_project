<section class="area-we-cover-sec sandk-common-padding sandk-common">
    <div class="container-md">
        <div class="row align-items-center">
          

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 left-side">
                {{-- @if(isset($areas->areas_img) && $areas->areas_img != null)
                    @php
                    $img = App\Models\MediaImage::select('name')->where('id', $areas->areas_img)->first();
                    @endphp
                    <img src="{{ asset('uploads/'.$img->name) }}" class="img-fluid" width="auto" height="auto" alt="" loading="lazy">
                @else
                    <img src="{{ asset('front-assets/src/images/Raynor-authorized-Dealer-logo.webp') }}" class="img-fluid" width="auto" height="auto" alt="" loading="lazy">
                    @endif --}}
            </div>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 right-side">
                @if(isset($areas->areas_title) && $areas->areas_title != '')
                    <h2>{{ $areas->areas_title ?: 'Areas We Serve' }}</h2>
                @endif
                {!! $areas->areas_sub_title !!}
            </div>
        </div>
    </div>
</section>