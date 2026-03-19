@extends('frontend.layouts.index')
@section('title')
    {{ isset($meta_title) ? $meta_title : '' }}
@endsection
@section('description')
    {{ isset($meta_description) ? $meta_description : '' }}
@endsection
@section('content')
    <style type="text/css">
        @media (max-width: 575.98px) {
            .mission-and-values-section .inner-box-col article {
                margin-top: 35px;
            }

            .mission-and-values-section .inner-row .inner-box-col:first-child article {
                margin-top: 0;
            }

            .mission-and-values-section .inner-box-col article .ambition-section {
                display: flex;
                flex-direction: row;
            }

            .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-icon {
                width: 20%;
            }

            .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-icon img {
                width: 60px;
                height: auto;
            }

            .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-content {
                padding-left: 15px;
                width: 80%;
            }

            .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-content h3 {
                padding: 0;
                text-align: left;
                font-size: 22px;
                margin: 0px 0 10px;
                line-height: 22px;
            }

            .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-content p {
                padding: 0;
                text-align: left;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            .mission-and-values-section .inner-box-col article {
                margin-top: 35px;
            }

            .mission-and-values-section .inner-row .inner-box-col:first-child article {
                margin-top: 0;
            }

            .mission-and-values-section .inner-box-col article .ambition-section {
                display: flex;
                flex-direction: row;
            }

            .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-icon {
                padding-left: 10px;
                width: 20%;
            }

            .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-icon img {
                width: 75px;
                height: auto;
            }

            .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-content {
                width: 80%;
            }

            .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-content h3 {
                padding: 0;
                text-align: left;
                font-size: 22px;
                margin: 0px 0 10px;
                line-height: 22px;
            }

            .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-content p {
                padding: 0;
                text-align: left;
            }

        }
        @media (min-width: 992px) and (max-width: 1199.98px) {
            h2.about-history-h2.main_about_title:after {
                margin: 10px auto 30px 0!important;
            }
        }
    </style>




   

    @if (
        (isset($about->title) && $about->title != '') ||
            (isset($about->description) && $about->description != '') ||
            (isset($about->bannerimage) && $about->bannerimage != null))
        @php
            $bgurl = '';
            $mobileBgUrl = '';

            if (isset($about->bannerimage) && $about->bannerimage != null) {
                $img = App\Models\MediaImage::select('name')->where('id', $about->bannerimage)->first();

                if ($img && isset($img->name)) {
                    $bgurl = asset('uploads/' . $img->name);
                }
            }
            if (isset($about->abt_mb_bannerimage) && $about->abt_mb_bannerimage != null) {
                $mobileimg = App\Models\MediaImage::select('name')->where('id', $about->abt_mb_bannerimage)->first();

                if ($mobileimg && isset($mobileimg->name)) {
                    $mobileBgUrl = asset('uploads/' . $mobileimg->name);
                }
            }
        @endphp

        {{-- Mobile background --}}
        <style>
            @media (max-width: 575.98px) {
                .about-page-banner-section {
                    /* background-image: url('{{ $mobileBgUrl }}') !important; */
                }
            }
        </style>

        <section class="about-page-banner-section sandk-common sandk-common-padding">

            <div class="container-md">
                <div class="row">
                    <div class="col-12 text-center about-text-banner">

                        @if (isset($about->title) && $about->title != '')
                            <h1 class="about-title">{{ $about->title }}</h1>
                        @endif

                        @if (isset($about->description) && $about->description != '')
                            {!! $about->description !!}
                        @endif

                    </div>
                </div>

            </div>
           
           
        </section>

        <section class="new-page-design-about sandk-common">
            <div class="container-md">
                <div class="row">
                    <div class="col-12 text-center">

                         <!-- <img class="img-fluid about-banner-mobile-layout" src="{{ $mobileBgUrl}}" alt=""> -->


                          @if ($mobileBgUrl != '')
                            <img src="{{ $mobileBgUrl }}" class="img-fluid about-banner-mobile-layout" alt="{{ $about->title ?? 'About' }}">
                        @endif

                        @if ($bgurl != '')
                            <img src="{{ $bgurl }}" class="img-fluid about-banner-desktop-layout" alt="{{ $about->title ?? 'About' }}">
                        @endif

                    </div>
                </div>
            </div>
        </section>
    @endif

    @if (isset($about->historytitle) ||
            isset($about->historydescription) ||
            $about->historytitle != '' ||
            $about->historydescription != '' ||
            $about->historysubtitle != '' ||
            $about->historysubdescription != '')
        <section class="our-history-section sandk-common sandk-common-padding">
            <div class="container-md">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 left-side">
                        @if (isset($about->historytitle) && $about->historytitle != '')
                            <h2 class="about-history-h2 main_about_title">{!! $about->historytitle !!}</h2>
                        @endif
                        @if (isset($about->historysubtitle) && $about->historysubtitle != '')
                            <h3>{!! $about->historysubtitle !!}</h3>
                        @endif

                        @if (isset($about->historyimage) && $about->historyimage != null)
                            @php
                                $img = App\Models\MediaImage::select('name')
                                    ->where('id', $about->historyimage)
                                    ->first();
                            @endphp
                            @if (isset($img->name) && $img->name != null)
                                <img src="{{ asset('uploads/' . $img->name) }}"
                                    alt="{{ isset($about->historytitle) ? $about->historytitle : '' }}"
                                    class="img-fluid mobile-img" width="auto" height="auto" alt=""
                                    loading="lazy">
                            @endif
                        @else
                            <img src="{{ asset('front-assets/src/images/residential-images/history-about.png') }}"
                                class="img-fluid mobile-img" width="auto" height="auto" alt="" loading="lazy">
                        @endif

                        @if (isset($about->historydescription) && $about->historydescription != '')
                            @php
                                $slug = request()->segment(count(request()->segments()));
                                $aboutyearDesc = $about->historydescription;
                                
                            @endphp

                            @if (!empty($aboutyearDesc))
                                {!! $aboutyearDesc !!}
                            @endif
                        @endif

                        @if (isset($about->historybuttonurl) && $about->historybuttonurl != '' && $about->historybuttonurl != '#')
                            <a href="#" class="common-btn" data-bs-target="#getafreequote" data-bs-toggle="modal">GET
                                A QUOTE</a>
                        @endif
                    </div>

                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 right-side">
                        @if (isset($img))
                            <img src="{{ asset('uploads/' . $img->name) }}"
                                alt="{{ isset($about->historytitle) ? $about->historytitle : '' }}"
                                class="img-fluid desktop-image" width="auto" height="auto" alt="" loading="lazy">
                        @else
                            <img src="{{ asset('front-assets/src/images/residential-images/history-about.png') }}"
                                class="img-fluid desktop-image" width="auto" height="auto" alt="" loading="lazy">
                        @endif
                    </div>

                </div>
            </div>

        </section>
    @endif


    <section class="our-history-section-coontent sandk-common sandk-common-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="ab container">
                        {{-- <h2 class="about-history-h2">Our History</h2> --}}


                        @if (isset($about->our_history_title) && $about->our_history_title != '')
                            <h2 class="history-title-year-wise">{!! $about->our_history_title !!}</h2>
                        @endif
                        <!-- <p>Incorporated in Quincy, Illinois, on Tuesday, October 17th, 1944, Raynor is the oldest door company in the industry. We take pride in our long history of quality products, continually building upon it to offer the exceptional line of residential Premium Garage Doors available today.</p> -->
                    </div>



                    @if (isset($about->our_history_desc) && $about->our_history_desc != '')
                        {!! $about->our_history_desc !!}
                    @endif


                </div>
            </div>
        </div>
    </section>





    


    @if (isset($about->missiontitle) ||
            isset($about->missiondescription) ||
            $about->missiontitle != '' ||
            $about->missiondescription != '')
        <section class="mission-and-values-section sandk-common sandk-common-padding">
            <div class="container-md">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        @if (isset($about->missiontitle) && $about->missiontitle != '')
                            <h2 class="about-mission-and-value">{{ $about->missiontitle }}</h2>
                        @endif

                    </div>
                </div>

                <div class="row inner-row desktop-misson-row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 inner-box-col">
                        <article>
                            <div class="ambition-section">
                                <div class="ambition-step-icon">

                                    @if (isset($mission_vlues->mv_icon_1) && $mission_vlues->mv_icon_1 != null)
                                        @php
                                            $img = App\Models\MediaImage::select('name')
                                                ->where('id', $mission_vlues->mv_icon_1)
                                                ->first();
                                        @endphp
                                        @if (isset($img->name) && $img->name != null)
                                            <img src="{{ asset('uploads/' . $img->name) }}" alt="mission" width="120"
                                                height="120">
                                        @endif
                                    @else
                                        <img src="/uploads/66a0af3a05c4f.webp" alt="mission" width="120" height="120">
                                    @endif
                                </div>
                                <div class="ambition-step-content">
                                    <h3>{{ isset($mission_vlues->mv_title_1) ? $mission_vlues->mv_title_1 : '' }}</h3>
                                    <p>{{ isset($mission_vlues->mv_description_1) ? $mission_vlues->mv_description_1 : '' }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 inner-box-col">
                        <article>
                            <div class="ambition-section">
                                <div class="ambition-step-icon">
                                    @if (isset($mission_vlues->mv_icon_2) && $mission_vlues->mv_icon_2 != null)
                                        @php
                                            $img = App\Models\MediaImage::select('name')
                                                ->where('id', $mission_vlues->mv_icon_2)
                                                ->first();
                                        @endphp
                                        @if (isset($img->name) && $img->name != null)
                                            <img src="{{ asset('uploads/' . $img->name) }}" alt="mission" width="120"
                                                height="120">
                                        @endif
                                    @else
                                        <img src="/uploads/66a0af3a05c4f.webp" alt="mission" width="120" height="120">
                                    @endif
                                </div>
                                <div class="ambition-step-content">
                                    <h3>{{ isset($mission_vlues->mv_title_2) ? $mission_vlues->mv_title_2 : '' }}</h3>
                                    <p>{{ isset($mission_vlues->mv_description_2) ? $mission_vlues->mv_description_2 : '' }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 inner-box-col">
                        <article>
                            <div class="ambition-section">
                                <div class="ambition-step-icon">
                                    @if (isset($mission_vlues->mv_icon_3) && $mission_vlues->mv_icon_3 != null)
                                        @php
                                            $img = App\Models\MediaImage::select('name')
                                                ->where('id', $mission_vlues->mv_icon_3)
                                                ->first();
                                        @endphp
                                        @if (isset($img->name) && $img->name != null)
                                            <img src="{{ asset('uploads/' . $img->name) }}" alt="mission" width="120"
                                                height="120">
                                        @endif
                                    @else
                                        <img src="/uploads/66a0af3a05c4f.webp" alt="mission" width="120" height="120">
                                    @endif
                                </div>
                                <div class="ambition-step-content">
                                    <h3>{{ isset($mission_vlues->mv_title_3) ? $mission_vlues->mv_title_3 : '' }}</h3>
                                    <p>{{ isset($mission_vlues->mv_description_3) ? $mission_vlues->mv_description_3 : '' }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 inner-box-col">
                        <article>
                            <div class="ambition-section">
                                <div class="ambition-step-icon">
                                    @if (isset($mission_vlues->mv_icon_4) && $mission_vlues->mv_icon_4 != null)
                                        @php
                                            $img = App\Models\MediaImage::select('name')
                                                ->where('id', $mission_vlues->mv_icon_4)
                                                ->first();
                                        @endphp
                                        @if (isset($img->name) && $img->name != null)
                                            <img src="{{ asset('uploads/' . $img->name) }}" alt="mission"
                                                width="120" height="120">
                                        @endif
                                    @else
                                        <img src="/uploads/66a0af3a05c4f.webp" alt="mission" width="120"
                                            height="120">
                                    @endif
                                </div>
                                <div class="ambition-step-content">
                                    <h3>{{ isset($mission_vlues->mv_title_4) ? $mission_vlues->mv_title_4 : '' }}</h3>
                                    <p>{{ isset($mission_vlues->mv_description_4) ? $mission_vlues->mv_description_4 : '' }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 inner-box-col">
                        <article>
                            <div class="ambition-section">
                                <div class="ambition-step-icon">
                                    @if (isset($mission_vlues->mv_icon_5) && $mission_vlues->mv_icon_5 != null)
                                        @php
                                            $img = App\Models\MediaImage::select('name')
                                                ->where('id', $mission_vlues->mv_icon_5)
                                                ->first();
                                        @endphp
                                        @if (isset($img->name) && $img->name != null)
                                            <img src="{{ asset('uploads/' . $img->name) }}" alt="mission"
                                                width="120" height="120">
                                        @endif
                                    @else
                                        <img src="/uploads/66a0af3a05c4f.webp" alt="mission" width="120"
                                            height="120">
                                    @endif
                                </div>
                                <div class="ambition-step-content">
                                    <h3>{{ isset($mission_vlues->mv_title_5) ? $mission_vlues->mv_title_5 : '' }}</h3>
                                    <p>{{ isset($mission_vlues->mv_description_5) ? $mission_vlues->mv_description_5 : '' }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 inner-box-col">
                        <article>
                            <div class="ambition-section">
                                <div class="ambition-step-icon">
                                    @if (isset($mission_vlues->mv_icon_6) && $mission_vlues->mv_icon_6 != null)
                                        @php
                                            $img = App\Models\MediaImage::select('name')
                                                ->where('id', $mission_vlues->mv_icon_6)
                                                ->first();
                                        @endphp
                                        @if (isset($img->name) && $img->name != null)
                                            <img src="{{ asset('uploads/' . $img->name) }}" alt="mission"
                                                width="120" height="120">
                                        @endif
                                    @else
                                        <img src="/uploads/66a0af3a05c4f.webp" alt="mission" width="120"
                                            height="120">
                                    @endif
                                </div>
                                <div class="ambition-step-content">
                                    <h3>{{ isset($mission_vlues->mv_title_6) ? $mission_vlues->mv_title_6 : '' }}</h3>
                                    <p>{{ isset($mission_vlues->mv_description_6) ? $mission_vlues->mv_description_6 : '' }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="mobile-misson-row row">


                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                       

                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="inner-list-section">

                            @for ($i = 1; $i <= 6; $i++)
                                @php
                                    $iconField = "mv_icon_$i";
                                    $titleField = "mv_title_$i";
                                    $descField = "mv_description_$i";

                                    $imgName = null;

                                    if (!empty($mission_vlues->$iconField)) {
                                        $imgData = App\Models\MediaImage::select('name')
                                            ->where('id', $mission_vlues->$iconField)
                                            ->first();
                                        $imgName = $imgData->name ?? null;
                                    }

                                    $defaultImg = '/uploads/66a0af3a05c4f.webp';
                                    $finalImg = $imgName ? asset('uploads/' . $imgName) : $defaultImg;
                                @endphp

                                @if (!empty($mission_vlues->$titleField) || !empty($mission_vlues->$descField))
                                    <div class="ambition-section">
                                        <h2 class="" id="missionHeading{{ $i }}">
                                            {{-- <button class="accordion-button @if($i > 1) collapsed @endif" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#missionCollapse{{ $i }}"
                                                    aria-expanded="{{ $i === 1 ? 'true' : 'false' }}"
                                                    aria-controls="missionCollapse{{ $i }}"> --}}
                                                <div class="ambition-step-icon">
                                                    <img src="{{ $finalImg }}" alt="mission" width="120" height="120">
                                                </div>
                                                <div class="ambition-step-content">
                                                    <h3>{{ $mission_vlues->$titleField ?? '' }}</h3>
                                                </div>
                                            {{-- </button> --}}
                                        </h2>
{{-- 
                                        <div id="missionCollapse{{ $i }}"
                                            class="accordion-collapse collapse @if($i === 1) show @endif"
                                            aria-labelledby="missionHeading{{ $i }}"
                                            data-bs-parent="#missionAccordion"> --}}
                                            {{-- <div class="accordion-body"> --}}
                                                <p>{{ $mission_vlues->$descField ?? '' }}</p>
                                            {{-- </div> --}}
                                        {{-- </div> --}}
                                    </div>
                                @endif
                            @endfor

                        </div>

                        </div>



                    </div>

                </div>

            </div>
        </section>

<style>


.mission-and-values-section .row.mobile-misson-row {
display: none;}




@media (max-width: 575.98px) {



.mission-and-values-section.sandk-common  .row.mobile-misson-row h2::after{display: none}
.mission-and-values-section .row.mobile-misson-row { display: block } 
.mission-and-values-section .row.desktop-misson-row { display: none } 
.mission-and-values-section p { text-align: left;        margin-top: 15px; } 
.mission-and-values-section .inner-list-section .ambition-section { padding: 20px 0;         border-bottom: 1px solid #e3e3e3;} 
.mission-and-values-section .inner-list-section .ambition-section:last-child { padding: 20px 0 0 0;} 
.mission-and-values-section .inner-list-section .ambition-section h2{ display: flex; align-items: center; } 


.mission-and-values-section  .row.mobile-misson-row   h2{margin-bottom: 0}
/* .mission-and-values-section .inner-list-section .ambition-section { padding: 20px; border: 1px solid #E0E0E0; border-radius: 15px; box-shadow: 4px 4px 6px 0px #00000005; margin-bottom: 30px; }  */
.mission-and-values-section .inner-list-section .ambition-section:last-of-type { margin-bottom: 0;border: unset; } 

.mission-and-values-section .row.mobile-misson-row .accordion-body { padding: 0; text-align: left !important } 

.mission-and-values-section .row.mobile-misson-row .ambition-step-icon { max-width: 70px; width: 100%; text-align: left; } 
.mission-and-values-section .row.mobile-misson-row .ambition-step-icon img { width: 70%; height: 70%; } 

.mission-and-values-section .row.mobile-misson-row { gap: 10px;padding: 0; } 
.mission-and-values-section .row.mobile-misson-row .accordion-button:not(.collapsed) { background-color: unset; border: 0; box-shadow: unset; ; align-items: center; padding: 0 } 
.mission-and-values-section .row.mobile-misson-row h3 { font-size: 20px; line-height: 30px; margin-bottom: 0; color: #002956; font-weight: 700; } 


.mission-and-values-section .row.mobile-misson-row .accordion-button::after { background-image: url(/front-assets/src/images/new-faw-down-arw.webp); background-repeat: no-repeat; background-position: center; width: 22px; height: 12px; } 
.mission-and-values-section .row.mobile-misson-row .accordion-button:not(.collapsed)::after { background-image: url(/front-assets/src/images/new-faw-down-arw.webp); background-repeat: no-repeat; background-position: center; width: 22px; height: 12px; } 

.mission-and-values-section .row.mobile-misson-row .ambition-section h2 { margin-bottom: 0 !important } 
.mission-and-values-section .row.mobile-misson-row .ambition-section .accordion-collapse { margin-top: 20px } 
.mission-and-values-section .row.mobile-misson-row .accordion-button:focus { border: 0; box-shadow: unset; }



/* .our-history-section-coontent .timeline-carousel.owl-theme .owl-dots .owl-dot{margin: 0 5px}
.our-history-section-coontent .timeline-carousel.owl-theme .owl-dots .owl-dot span{background: #ffffff98;width: 10px;height: 10px;}
.our-history-section-coontent .timeline-carousel.owl-theme .owl-dots .owl-dot.active span{background: #fff}

.our-history-section-coontent .timeline-carousel .timeline-item h3{font-size: 30px; font-weight: 600; line-height: 35px; color: #F2A900; margin-bottom: 20px; text-align: left;} */

    }







@media (min-width: 576px) and (max-width: 767.98px) {
    .year-of-excilence .right-side h2::after, h2.about-history-h2.main_about_title:after{
        margin: 15px auto 30px auto!important;
    }

.mission-and-values-section.sandk-common  .row.mobile-misson-row h2::after{display: none}

.mission-and-values-section .row.mobile-misson-row { display: block } 
.mission-and-values-section .row.desktop-misson-row { display: none } 
.mission-and-values-section p { text-align: left;font-size: 18px;line-height: 30px;margin-top: 15px; } 

.mission-and-values-section  .row.mobile-misson-row   h2{margin-bottom: 0}
.mission-and-values-section .row.mobile-misson-row .ambition-step-icon { max-width: 70px; width: 100% } 
.mission-and-values-section .row.mobile-misson-row .ambition-step-icon img { width: 70%; height: 70%; } 
.mission-and-values-section .inner-list-section .ambition-section h2{ display: flex; align-items: center; } 


.mission-and-values-section .row.mobile-misson-row { gap: 10px;padding: 0; } 
.mission-and-values-section .row.mobile-misson-row .accordion-button:not(.collapsed) { background-color: unset; border: 0; box-shadow: unset; ; align-items: center; padding: 0 } 

.mission-and-values-section .row.mobile-misson-row h3 { font-size: 24px; line-height: 32px; margin-bottom: 0; color: #002956; font-weight: 700; } 
/* .mission-and-values-section .inner-list-section .ambition-section { padding: 20px; border: 1px solid #E0E0E0; border-radius: 15px; box-shadow: 4px 4px 6px 0px #00000005; margin-bottom: 30px; }  */
.mission-and-values-section .inner-list-section .ambition-section:last-of-type { margin-bottom: 0; border: unset;} 
.mission-and-values-section .inner-list-section .ambition-section { padding: 20px 0;         border-bottom: 1px solid #e3e3e3;} 

.mission-and-values-section .row.mobile-misson-row .accordion-body { padding: 0; text-align: left !important } 

.mission-and-values-section .row.mobile-misson-row .accordion-button::after { background-image: url(/front-assets/src/images/new-faw-down-arw.webp); background-repeat: no-repeat; background-position: center; width: 22px; height: 12px; } 
.mission-and-values-section .row.mobile-misson-row .accordion-button:not(.collapsed)::after { background-image: url(/front-assets/src/images/new-faw-down-arw.webp); background-repeat: no-repeat; background-position: center; width: 22px; height: 12px; } 


.mission-and-values-section .row.mobile-misson-row .ambition-section h2 { margin-bottom: 0 !important } 
.mission-and-values-section .row.mobile-misson-row .ambition-section .accordion-collapse { margin-top: 20px } 
.mission-and-values-section .row.mobile-misson-row .accordion-button:focus { border: 0; box-shadow: unset; }
    


}



</style>
@endif





    @include('frontend.includes.areas-sec')
    @include('frontend.includes.testimonial')
    @include('frontend.includes.quote-sec')
    @if (count($client_logo) > 0)
        @include('frontend.includes.client-logo-sec')
    @endif
@endsection


