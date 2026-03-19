@extends('frontend.layouts.index')
@if(isset($result['product_title']) && $result['product_title'] != '' && $result['product_title'] != null)
@section('title') {!! strip_tags($result['product_title']) !!} @endsection
@endif
@section('content')
<style>

</style>
<div class="prdct_detail_main_page">
<section class="sandk-common-padding sandk-common product-page-banner-section @if(isset($result['product_slug']) && $result['product_slug']) {{$result['product_slug']}} @endif">
        <div class="container-md">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 left-side">
                    @if(isset($result['product_title']) && $result['product_title'])
                        <h1>{!! $result['product_title'] !!}</h1>
                    @endif
                    @if(isset($result['product_subtitle']) && $result['product_subtitle'])
                        <h4 class="desk-product-subtitle">{{$result['product_subtitle']}}</h4>
                    @endif

                    @if(isset($result['image']) && $result['image'] != null && $result['image'] != '')
                    <div class="mobile_product_image">
                        <img src="{{$result['image']}}" width="auto" height="auto" class="img-fluid" alt="{{ isset($result['product_title']) ? $result['product_title'] : ''}}">
                    </div>
                    @endif
                    @if(isset($result['product_subtitle']) && $result['product_subtitle'])
                        <h4 class="mb-product-subtitle">{{$result['product_subtitle']}}</h4>
                    @endif

                    @if(isset($result['description']) && $result['description'])
                        @php
                            $slug = request()->segment(count(request()->segments())); 
                            $fullPath = Request::path();
                            $resDetailDesc = $result['description'];
                            if ($fullPath === 'residential/distinctions-series-custom-garage-doors/styleview-collection-aluminum-garage-doors') 
                            {
                                $find = [
                                    'contemporary',
                                    'residential garage doors'
                                ];
                                $replace = [
                                    '<a class="in-link" href="http://127.0.0.1:8000/residential/contemporary-style-garage-doors/">contemporary</a>',
                                    '<a class="in-link" href="http://127.0.0.1:8000/residential/">residential garage doors</a>'
                                ];
                                $resDetailDesc = str_replace($find, $replace, $resDetailDesc);
                            }
                            elseif ($fullPath === 'residential/distinctions-series-custom-garage-doors/revival-wood-collection')
                            {
                                $find = 'Aspen base';
                                $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/aspen-series/">Aspen base</a>';
                                $resDetailDesc = str_replace($find, $replace, $resDetailDesc);
                            }
                            elseif ($fullPath === 'residential/advantage-series-steel-pan-garage-doors/trademark-steel-pan-garage-doors')
                            {
                                $find = 'garage doors';
                                $replace = '<a class="in-link" href="http://127.0.0.1:8000/">garage doors</a>';
                                $resDetailDesc = str_replace($find, $replace, $resDetailDesc);
                            }
                        @endphp
                        @if(!empty($resDetailDesc))
                            {!! $resDetailDesc !!}
                        @endif

                    @endif
                    
                    @php 
                        $LiteratureFiles = [
                            'smart-garage-camera' => 'https://raynor.dev/uploads/2025061410152910228-Smart-Accessories-0625.pdf',
                            'smart-touchscreen-deadbolt' => 'https://raynor.dev/uploads/2025061410152910228-Smart-Accessories-0625.pdf',
                            'smart-keypad-lever' => 'https://raynor.dev/uploads/2025061410152910228-Smart-Accessories-0625.pdf',
                            'myq-video-keypad' => 'https://raynor.dev/uploads/2025061410152910228-Smart-Accessories-0625.pdf',
                            'video-doorbell' => 'https://raynor.dev/uploads/2025061410152910228-Smart-Accessories-0625.pdf',
                            'outdoor-battery-camera' =>'https://raynor.dev/uploads/2025061410152910228-Smart-Accessories-0625.pdf'
                        ];
                        $LiteratureFiles = $LiteratureFiles[$result['product_slug']] ?? '';
                    @endphp
                    @if ($LiteratureFiles)
                        <div class="uploaded-files">
                            
                        <a href="{{$LiteratureFiles}}" class="file-button literature-btn" target="_blank">Literature <i class="fa fa-download"></i></a>
                        <a href="https://raynor.dev/uploads/2910304-Residential Accessories Compatibility Chart-0925-web.pdf" class="file-button compatibility-btn" target="_blank">Compatibility Chart <i class="fa fa-download"></i></a>
                        </div>
                    @endif
                <a  data-bs-toggle="modal" data-bs-target="#getafreequote" class="common-btn detail-btn" style=" cursor: pointer;">GET A QUOTE</a>
                {{-- @if ($LiteratureFiles)
                    <a href="{{$LiteratureFiles}}" class="common-btn detail-btn literature-btn" target="_blank" style="margin-left: 10px;">Literature <i class="fa fa-download"></i></a>
                @endif--}}
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 right-side desktop_product_image">
                    @if(isset($result['image']) && $result['image'] != null && $result['image'] != '')
                        <img src="{{$result['image']}}" width="auto" height="auto" class="img-fluid" alt="{{ isset($result['product_title']) ? $result['product_title'] : ''}}">
                    @endif
                </div>
            </div>
        </div>

    </section>

@if(empty($LiteratureFiles) && $LiteratureFiles == "")
    @if(isset($result['contents']))
        @if($result['contents'][0]['title'] != '-')
            @if(count($result['contents']) > 0)
                <section class="sandk-common-padding sandk-common product-page-product-item-section @if(isset($result['product_slug']) && $result['product_slug']) {{$result['product_slug']}}1 @endif">
                    <div class="container-md">
                        <div class="row desktop-product-sec">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 left-side">
                                <ul class="nav nav-tabs product-nav-tab ">
                                    @foreach($result['contents'] as $kc => $kval)
                                        <li data-bs-active="#tab{{$kc}}"><a data-bs-toggle="tab" href="javascript:;" data-target="#tab{{$kc}}" class="product-tab-link @if($kc == 0) active @endif">{{isset($kval['title']) ? $kval['title'] : '-'}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 right-side">
                                <div class="tab-content">
                                    @foreach($result['contents'] as $kc => $kval)
                                        <div id="tab{{$kc}}" class="tab-pane fade tab{{$kc}} @if($kc == 0) active show @endif product-tab-pan">
                                            <!-- <div class="row product-heading-content"> -->
                                                <!-- <div class="col-12"> -->
                                                    {!! $kval['content'] !!}
                                                <!-- </div> -->
                                            <!-- </div> -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="row mobile-product-details-sec">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    @foreach($result['contents'] as $kc => $kval)
                                        <div class="accordion-item">
                                            <h3 class="accordion-header" id="tab{{$kc}}">
                                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#tabcl{{$kc}}" aria-expanded="true"><span>{{isset($kval['title']) ? $kval['title'] : '-'}}</span></button>
                                            </h3>
                                            <div id="tabcl{{$kc}}" class="accordion-collapse collapse" data-bs-parent="#footerAccordion" style="">
                                                <div class="card-body">
                                                    <div class="colors">
                                                        {!! $kval['content'] !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>
            @endif
        @endif
    @endif
@endif

    @if(isset($result['features_and_options']))
        @if($result['features_and_options'][0]['title'] != '-')
            @if(count($result['features_and_options']) > 0)
                <section class="sandk-common-padding sandk-common product-features-options-section">
                    <div class="container-md">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               @if(isset($result['feature_option_title']) && $result['feature_option_title'])
                                    <h2>{{$result['feature_option_title']}}</h2>
                                @else
                                    @if(isset($result['product_title']) && $result['product_title'])
                                        <h2>{!! $result['product_title'] !!} Features & Options</h2>
                                    @else
                                        <h2>Features & Options</h2>
                                    @endif
                                @endif

                                @if(isset($result['feature_main_title']) && $result['feature_main_title'])
                                    @php
                                        $fullPath = Request::path();
                                        $resFeaturedesc = $result['feature_main_title'];
                    
                                        if ($fullPath === 'residential/advantage-series-steel-pan-garage-doors/trademark-steel-pan-garage-doors')
                                        {
                                            $find = 'residential garage doors';
                                            $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/" >residential garage doors</a>';
                                            $resFeaturedesc = str_replace($find, $replace, $resFeaturedesc);
                                        }
                                        elseif ($fullPath === 'residential/distinctions-series-custom-garage-doors/eden-coast-steel-carriage-house-garage-door')
                                        {
                                            $find = '/\bgarage door\b/';
                                            $replace = '<a class="in-link" href="http://127.0.0.1:8000/">garage door</a>';
                                            $resFeaturedesc = preg_replace($find, $replace, $resFeaturedesc);
                                        }
                                        
                                    @endphp
                                    @if(!empty($resFeaturedesc))
                                        <p>{!! $resFeaturedesc !!}</p>
                                    @endif
                                   
                                @endif
                            </div>
                        </div>

                        <div class="row product-features-options-row for-deskop-features">
                            @foreach($result['features_and_options'] as $fkey=>$fval)
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 product-features-options-boxes">
                                    <article>
                                        @if(isset($fval['file_path']) && $fval['file_path'] != '' && $fval['file_path'] != '-')
                                            <img src="{{$fval['file_path']}}" width="284" height="220" class="imgfluid" alt="">
                                            <div>
                                                @if(isset($fval['title']) && $fval['title'])
                                                    <h3>{{$fval['title']}}</h3>
                                                @endif
                                                
                                                @if(isset($fval['content']) && $fval['content'])

                                                    @php
                                                        $fullPath = Request::path();
                                                        $resFeInnerdesc = $fval['content'];
                                    
                                                        if ($fullPath === 'residential/distinctions-series-custom-garage-doors/eden-coast-steel-carriage-house-garage-door')
                                                        {
                                                            $find = 'residential garage door';
                                                            $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/">residential garage door</a>';
                                                            $resFeInnerdesc = str_replace($find, $replace, $resFeInnerdesc);
                                                        }
                                                        
                                                    @endphp
                                                    @if(!empty($resFeInnerdesc))
                                                        <p>{!! $resFeInnerdesc !!}</p>
                                                    @endif

                                                @endif
                                            </div>
                                        @else
                                            <div class="no_img_div">
                                                @if(isset($fval['title']) && $fval['title'])
                                                    <h3>{{$fval['title']}}</h3>
                                                @endif
                                                
                                                @if(isset($fval['content']) && $fval['content'])
                                                    @php
                                                        $fullPath = Request::path();
                                                        $resFeInnerdesc = $fval['content'];
                                    
                                                        if ($fullPath === 'residential/distinctions-series-custom-garage-doors/eden-coast-steel-carriage-house-garage-door')
                                                        {
                                                            $find = 'residential garage door';
                                                            $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/">residential garage door</a>';
                                                            $resFeInnerdesc = str_replace($find, $replace, $resFeInnerdesc);
                                                        }
                                                        
                                                    @endphp
                                                    @if(!empty($resFeInnerdesc))
                                                        <p>{!! $resFeInnerdesc !!}</p>
                                                    @endif
                                                @endif
                                            </div>
                                        @endif
                                    </article>
                                </div>
                            @endforeach
                        </div>

                        <div class="row product-features-options-row for-mobile-features container">
                            @foreach($result['features_and_options'] as $fkey=>$fval)
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 product-features-options-boxes">
                                    <article>
                                        @if(isset($fval['file_path']) && $fval['file_path'] != '' && $fval['file_path'] != '-')
                                            <div>
                                                @if(isset($fval['title']) && $fval['title'])
                                                    <h3>{{$fval['title']}}</h3>
                                                @endif
                                                <img src="{{$fval['file_path']}}" width="284" height="220" class="mobile-fe-image" alt="">
                                                @if(isset($fval['content']) && $fval['content'])
                                                    @php
                                                        $fullPath = Request::path();
                                                        $resFeInnerdesc = $fval['content'];
                                    
                                                        if ($fullPath === 'residential/distinctions-series-custom-garage-doors/eden-coast-steel-carriage-house-garage-door')
                                                        {
                                                            $find = 'residential garage door';
                                                            $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/">residential garage door</a>';
                                                            $resFeInnerdesc = str_replace($find, $replace, $resFeInnerdesc);
                                                        }
                                                        
                                                    @endphp
                                                    @if(!empty($resFeInnerdesc))
                                                        <p>{!! $resFeInnerdesc !!}</p>
                                                    @endif
                                                @endif
                                            </div>
                                        @else
                                            <div class="no_img_div">
                                                @if(isset($fval['title']) && $fval['title'])
                                                    <h3>{{$fval['title']}}</h3>
                                                @endif
                                                
                                                @if(isset($fval['content']) && $fval['content'])
                                                    @php
                                                        $fullPath = Request::path();
                                                        $resFeInnerdesc = $fval['content'];
                                    
                                                        if ($fullPath === 'residential/distinctions-series-custom-garage-doors/eden-coast-steel-carriage-house-garage-door')
                                                        {
                                                            $find = 'residential garage door';
                                                            $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/">residential garage door</a>';
                                                            $resFeInnerdesc = str_replace($find, $replace, $resFeInnerdesc);
                                                        }
                                                        
                                                    @endphp
                                                    @if(!empty($resFeInnerdesc))
                                                        <p>{!! $resFeInnerdesc !!}</p>
                                                    @endif
                                                @endif
                                            </div>
                                        @endif
                                    </article>
                                </div>
                            @endforeach
                        </div>
                        
                    </div>
                </section>
            @endif
        @endif
    @endif
</div>
    @include('frontend.includes.designs-sec')

    @include('frontend.includes.quote-sec')
    @if(count($client_logo) > 0)
        @include('frontend.includes.client-logo-sec')
    @endif

@endsection
@section('script')
<script>
$(document).ready(function() {
    // for desktop
    $('.product-tab-link').on('click', function(e) {
        e.preventDefault();

        var targetId = $(this).data('target');
        var $targetElement = $(targetId);

        if ($targetElement.length) {
            var tabContentOffset = $('.tab-content').offset().top;
            var scrollTop = $(window).scrollTop();
            var windowHeight = $(window).height();

            if (tabContentOffset < scrollTop || tabContentOffset > (scrollTop + windowHeight)) {
                $('html, body').animate({
                    scrollTop: tabContentOffset - 140
                }, 300);
            }

            $('.product-tab-pan').removeClass('active show');
            $targetElement.addClass('active show');

            $('.product-tab-link').removeClass('active');
            $(this).addClass('active');
        } 
    });

    // for mobile
    $(".accordion-button").click(function() {
        var target = $(this).attr("data-bs-target");

        setTimeout(function() {
            var $targetElement = $(target);
            var targetOffset = $targetElement.offset().top;
            var scrollTop = $(window).scrollTop();
            var windowHeight = $(window).height();

            if (targetOffset < scrollTop || targetOffset > (scrollTop + windowHeight)) {
                $('html, body').animate({
                    scrollTop: targetOffset - 170
                }, 300);
            }
        }, 300);
    });
});

</script>
@endsection