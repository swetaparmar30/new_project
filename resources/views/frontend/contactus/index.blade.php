@extends('frontend.layouts.index') 
@section('title') {{ isset($meta_title) ? $meta_title : '' }} @endsection
@section('description') {{ isset($meta_description) ? $meta_description : '' }} @endsection
@section('content')

<section class="contact-page-banner-section sandk-common">
    <div class="banner-content">
        <div class="container-md">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 left-side">
                    @if (isset($form->form_sub_title) && $form->form_sub_title != '')
                    <h1 class="get-touch">{{ $form->form_sub_title }}</h1>
                    @endif @if (isset($form->form_short_desc) && $form->form_short_desc != '') {!! $form->form_short_desc !!} @endif

                    <div class="contact-info-section desktop-contact-info-section">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 contact-location-sec">
                                <h4>Locations</h4>
                                <div class="accordion" id="contactAccordion">
                                    
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="headingOne">
                                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"><span>Hastings, NE</span></button>
                                        </h3>
                                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#contactAccordion">
                                            <div class="card-body">
                                                <ul>
                                                    @if (isset($setting->location) && $setting->location != '')
                                                        <li class="lc_m">{!! html_entity_decode($setting->location) !!}</li>
                                                    @endif
                                                    @if (isset($setting->contact_no2) && $setting->contact_no2 != '')
                                                        <li class="lc_c"><a
                                                                href="{{ isset($setting->contact_no2) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no2) : '' }}"
                                                                class="custom_fonts_amiko">{{ isset($setting->contact_no2) ? $setting->contact_no2 : '' }}</a>
                                                        </li>
                                                    @endif
                                                    @if (isset($setting->email) && $setting->email != '')
                                                        <li class="lc_e"><a href="mailto:{!! strip_tags(html_entity_decode($setting->email)) !!}">{!! html_entity_decode($setting->email) !!}</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="headingTwo">
                                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"><span>Lincoln, NE</span></button>
                                        </h3>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#contactAccordion">
                                            <div class="card-body">
                                                <ul>
                                                    @if (isset($setting->location2) && $setting->location2 != '')
                                                        <li class="lc_m">{!! html_entity_decode($setting->location2) !!}</li>
                                                    @endif
                                                    @if (isset($setting->contact_no3) && $setting->contact_no3 != '')
                                                        <li class="lc_c"><a
                                                                href="{{ isset($setting->contact_no3) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no3) : '' }}"
                                                                class="custom_fonts_amiko">{{ isset($setting->contact_no3) ? $setting->contact_no3 : '' }}</a>
                                                        </li>
                                                    @endif
                                                    @if (isset($setting->email2) && $setting->email2 != '')
                                                        <li class="lc_e"><a href="mailto:{!! strip_tags(html_entity_decode($setting->email2)) !!}">{!! html_entity_decode($setting->email2) !!}</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                        
                        
                                </div>
                            </div>
                        

                        

                    
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 hours-section">
                            <h4>Hours</h4>
                            <div class="row">
                                @if (isset($setting)) 
                                @php $monday = json_decode($setting->monday); 
                                    $tuesday = json_decode($setting->tuesday); 
                                    $wedsday = json_decode($setting->wedsday); 
                                    $thursday = json_decode($setting->thursday); 
                                    $friday = json_decode($setting->friday); 
                                    $saturday = json_decode($setting->saturday); 
                                    $sunday = json_decode($setting->sunday); 
                                @endphp
                                <div class="col-md-12 day-hours">
                                    <ul>
                                        <li>
                                            <span class="hours-day">MON - FRI:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($monday->status) && $monday->status != 0) {{ date('g:i A', strtotime($monday->from)) }} – {{ date('g:i A', strtotime($monday->to)) }}
                                                 &<br>  {{ date('g:i A', strtotime($monday->from2)) }} – {{ date('g:i A', strtotime($monday->to2)) }} 
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hours-day">SAT - SUN:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($saturday->status) && $saturday->status != 0) {{ date('g:i A', strtotime($saturday->from)) }} - {{ date('g:i A', strtotime($saturday->to)) }}
                                 
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- <div class="col-md-6 day-hours">
                                    <ul>
                                        <li>
                                            <span class="hours-day">MON:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($monday->status) && $monday->status != 0) {{ date('g:i A', strtotime($monday->from)) }} – {{ date('g:i A', strtotime($monday->to)) }}
                                       
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hours-day">TUE:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($tuesday->status) && $tuesday->status != 0) {{ date('g:i A', strtotime($tuesday->from)) }} - {{ date('g:i A', strtotime($tuesday->to)) }}
                                               
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hours-day">WED:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($wedsday->status) && $wedsday->status != 0) {{ date('g:i A', strtotime($wedsday->from)) }} - {{ date('g:i A', strtotime($wedsday->to)) }}
                                               
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hours-day">THU:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($thursday->status) && $thursday->status != 0) {{ date('g:i A', strtotime($thursday->from)) }} - {{ date('g:i A', strtotime($thursday->to)) }}
                                              
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 day-hours">
                                    <ul>
                                        <li>
                                            <span class="hours-day">FRI:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($friday->status) && $friday->status != 0) {{ date('g:i A', strtotime($friday->from)) }} - {{ date('g:i A', strtotime($friday->to)) }}
                                                
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hours-day">SAT:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($saturday->status) && $saturday->status != 0) {{ date('g:i A', strtotime($saturday->from)) }} - {{ date('g:i A', strtotime($saturday->to)) }}
                                               
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hours-day">SUN:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($sunday->status) && $sunday->status != 0) {{ date('g:i A', strtotime($sunday->from)) }} - {{ date('g:i A', strtotime($sunday->to)) }}
                                               
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                    </ul>
                                </div> -->
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 right-side">
                    @include('frontend.includes.contactform')

                    <div class="contact-info-section mobile-contact-info-section">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 contact-location-sec">
                                <h4>Locations</h4>
                                <div class="accordion" id="contactAccordion_mo">
                                    
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="headingOne">
                                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne_mo" aria-expanded="false"><span>Hastings, NE</span></button>
                                        </h3>
                                        <div id="collapseOne_mo" class="accordion-collapse collapse" data-bs-parent="#contactAccordion_mo">
                                            <div class="card-body">
                                                <ul>
                                                    @if (isset($setting->location) && $setting->location != '')
                                                        <li class="lc_m">{!! html_entity_decode($setting->location) !!}</li>
                                                    @endif
                                                    @if (isset($setting->contact_no2) && $setting->contact_no2 != '')
                                                        <li class="lc_c"><a
                                                                href="{{ isset($setting->contact_no2) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no2) : '' }}"
                                                                class="custom_fonts_amiko">{{ isset($setting->contact_no2) ? $setting->contact_no2 : '' }}</a>
                                                        </li>
                                                    @endif
                                                    @if (isset($setting->email) && $setting->email != '')
                                                        <li class="lc_e"><a href="mailto:{!! strip_tags(html_entity_decode($setting->email)) !!}">{!! html_entity_decode($setting->email) !!}</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="headingTwo">
                                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo_mo" aria-expanded="false"><span>Lincoln, NE</span></button>
                                        </h3>
                                        <div id="collapseTwo_mo" class="accordion-collapse collapse" data-bs-parent="#contactAccordion_mo">
                                            <div class="card-body">
                                                <ul>
                                                    @if (isset($setting->location2) && $setting->location2 != '')
                                                        <li class="lc_m">{!! html_entity_decode($setting->location2) !!}</li>
                                                    @endif
                                                    @if (isset($setting->contact_no3) && $setting->contact_no3 != '')
                                                        <li class="lc_c"><a
                                                                href="{{ isset($setting->contact_no3) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no3) : '' }}"
                                                                class="custom_fonts_amiko">{{ isset($setting->contact_no3) ? $setting->contact_no3 : '' }}</a>
                                                        </li>
                                                    @endif
                                                    @if (isset($setting->email2) && $setting->email2 != '')
                                                        <li class="lc_e"><a href="mailto:{!! strip_tags(html_entity_decode($setting->email2)) !!}">{!! html_entity_decode($setting->email2) !!}</a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                        
                                </div>
                            </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12  hours-section">
                            <h4>Hours</h4>
                            <div class="row">
                                 @if (isset($setting)) 
                                    @php $monday = json_decode($setting->monday); 
                                        $tuesday = json_decode($setting->tuesday); 
                                        $wedsday = json_decode($setting->wedsday); 
                                        $thursday = json_decode($setting->thursday); 
                                        $friday = json_decode($setting->friday); 
                                        $saturday = json_decode($setting->saturday); 
                                        $sunday = json_decode($setting->sunday); 
                                    @endphp
                                    <div class="col-md-12 day-hours">
                                    <ul>
                                        <li>
                                            <span class="hours-day">MON - FRI:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($monday->status) && $monday->status != 0) {{ date('g:i A', strtotime($monday->from)) }} – {{ date('g:i A', strtotime($monday->to)) }}
                                                <!-- &<br>  {{ date('g:i A', strtotime($monday->from2)) }} – {{ date('g:i A', strtotime($monday->to2)) }} -->
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hours-day">SAT - SUN:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($saturday->status) && $saturday->status != 0) {{ date('g:i A', strtotime($saturday->from)) }} - {{ date('g:i A', strtotime($saturday->to)) }}
                                 
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="col-md-6 day-hours">
                                    <ul>
                                        <li>
                                            <span class="hours-day">MON:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($monday->status) && $monday->status != 0) {{ date('g:i A', strtotime($monday->from)) }} - {{ date('g:i A', strtotime($monday->to)) }}
                                                                                               @else CLOSED @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hours-day">TUE:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($tuesday->status) && $tuesday->status != 0) {{ date('g:i A', strtotime($tuesday->from)) }} - {{ date('g:i A', strtotime($tuesday->to)) }}
                                              
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hours-day">WED:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($wedsday->status) && $wedsday->status != 0) {{ date('g:i A', strtotime($wedsday->from)) }} - {{ date('g:i A', strtotime($wedsday->to)) }}
                                               
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hours-day">THU:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($thursday->status) && $thursday->status != 0) {{ date('g:i A', strtotime($thursday->from)) }} - {{ date('g:i A', strtotime($thursday->to)) }}
                                              
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 day-hours">
                                    <ul>
                                        <li>
                                            <span class="hours-day">FRI:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($friday->status) && $friday->status != 0) {{ date('g:i A', strtotime($friday->from)) }} - {{ date('g:i A', strtotime($friday->to)) }}
                                              
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hours-day">SAT:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($saturday->status) && $saturday->status != 0) {{ date('g:i A', strtotime($saturday->from)) }} - {{ date('g:i A', strtotime($saturday->to)) }}
                                              
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                        <li>
                                            <span class="hours-day">SUN:&nbsp;</span>
                                            <span class="hours-time">
                                                @if (isset($sunday->status) && $sunday->status != 0) {{ date('g:i A', strtotime($sunday->from)) }} - {{ date('g:i A', strtotime($sunday->to)) }}
                                               
                                                @else CLOSED @endif
                                            </span>
                                        </li>
                                    </ul>
                                </div> -->
                                @endif
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if (count($client_logo) > 0) 
@include('frontend.includes.client-logo-sec') 
@endif 
@endsection
