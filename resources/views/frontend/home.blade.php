@extends('frontend.layouts.index')

@section('title') {{ isset($meta_title) ? $meta_title : '' }} @endsection
@section('description') {{ isset($meta_description) ? $meta_description : '' }} @endsection
@section('keywords') {{ isset($meta_keywords) ? $meta_keywords : '' }} @endsection

@section('content')

<?php $setting = App\Models\Setting::first(); ?>
<div class="new-home-page-banner">
@if(isset($banner->checked) && $banner->checked == 1)
    @include('frontend.includes.bannersection')
@endif
</div>
<div>
@if(isset($system_setting->checked) && $system_setting->checked == 1)
    @include('frontend.includes.systemsetting')
@endif



@if(isset($newgarage) && $newgarage->checked == 1)
    @include('frontend.includes.newgarage')
@endif

@if(isset($design) && $design->checked == 1)
    @include('frontend.includes.designs-sec')
@endif


{{-- @include('frontend.includes.services-sec') --}}



 @if(isset($residential) && $residential->checked == 1)
    @include('frontend.includes.door-maintainance')
@endif 
</div>

<div>
@if(isset($garage_door) && $garage_door->checked == 1)
    @include('frontend.includes.garagedoor')
@endif


@if(isset($calltoaction) && $calltoaction->checked == 1)
    @include('frontend.includes.calltoaction')
@endif
</div>

<div>



</div>
@include('frontend.includes.why-choose-us')
<div>
@if(isset($gallery) && $gallery->checked == 1)
    @include('frontend.includes.gallery-sec')
@endif
</div>

<div>
@if(isset($testimonial) && $gallery->checked == 1)
    @include('frontend.includes.testimonial')
@endif

@if(isset($areas) && $gallery->checked == 1)
    @include('frontend.includes.areas-sec')
@endif

@if($faqs && $faqs->checked == 1)
    @include('frontend.includes.faq-sec')
@endif

@if(isset($blog_sec) && $blog_sec->checked == 1)
@include('frontend.includes.blog-sec')
@endif

@if(isset($quote) && $quote->checked == 1)
    @include('frontend.includes.quote-sec')
@endif

@if(count($client_logo) > 0)
    @include('frontend.includes.client-logo-sec')
@endif
</div>
@endsection
@section('script')
<script>
  $(document).ready(function () {
    $('.each-offer-item').on('click', function (e) {
      e.preventDefault();

      $('.each-offer-item').removeClass('active');
      $('.tab-description').removeClass('active').stop(true, true).slideUp(250);

      $(this).addClass('active');

      var descSelector = $(this).data('desc');
      if (descSelector) {
        $(descSelector).addClass('active').hide().slideDown(250);
      }

    });
    $('.tab-description').not('.active').hide();
  });
</script>

@endsection