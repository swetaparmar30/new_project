@extends('frontend.layouts.index')
@section('title') {{ isset($meta_title) ? $meta_title : '' }} @endsection
@section('description') {{ isset($meta_description) ? $meta_description : '' }} @endsection
@section('content')
<section class="faq-sec faq-page sandk-common-padding sandk-common">

    <div class="container-md">
        <div class="row align-items-center">
            <h1 class="faq">FAQ’s</h1>
            <!-- <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 left-side-image">
                @if(isset($faqs->faq_img))
                    @php
                        $img = App\Models\MediaImage::select('name')->where('id', $faqs->faq_img)->first();
                    @endphp
                    <figure>
                        <img src="{{ asset('uploads/'.$img->name) }}" width="auto" height="auto" alt="" loading="lazy" class="img-fluid">
                    </figure>
                @endif
            </div> -->

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 right-faq-sec">
                @if($faqs->count() > 0)
                    <div class="accordion" id="bestAccordion">
                        @foreach($faqs as $dkey=>$dval)
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="heading{{$dkey}}">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse{{$dkey}}">{{$dval['title']}}</button>
                                </h4>
                                <div id="collapse{{$dkey}}" class="accordion-collapse collapse" data-bs-parent="#bestAccordion">
                                    <div class="card-body">
                                        <p>{{$dval['description']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

@if(count($client_logo) > 0)
    @include('frontend.includes.client-logo-sec')
@endif

@endsection