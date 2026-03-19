<?php
 $setting = App\Models\Setting::first();

 $menus_company = App\Models\Menu::where('footre_quick_links',1)->get();
 if (isset($menus_company) && $menus_company != ""&& count($menus_company)) {
    $menu_lists_services = [];
    foreach($menus_company as $menus_company_item){
        $menu_lists_services[] = App\Models\Menu_list::with('children')->whereNull('parent_id')->where('menus_id', $menus_company_item->id)->get();
    }
 }
 $menus_residential = App\Models\Menu::where('residential',1)->get();
 if (isset($menus_residential) && $menus_residential != ""&& count($menus_residential)) {
       $menu_lists_residential = [];
     foreach($menus_residential as $menus_residential_item){
     $menu_lists_residential[] = App\Models\Menu_list::with('children')->whereNull('parent_id')->where('menus_id', $menus_residential_item->id)->get();
     }
 }

 $menus_commercial = App\Models\Menu::where('commercial',1)->get();
 if (isset($menus_commercial) && $menus_commercial != ""&& count($menus_commercial)) {
       $menu_lists_commercial = [];
     foreach($menus_commercial as $menus_commercial_item){
     $menu_lists_commercial[] = App\Models\Menu_list::with('children')->whereNull('parent_id')->where('menus_id', $menus_commercial_item->id)->get();
     }
 }
 ?>

<style type="text/css">
    
    .footer-4-location .footer-multiple-location .all-locations{
        margin-bottom: 15px !important;
    }
    .footer-sec .footer-4-location .diffrent-brand-sec.footer-multiple-location{
        padding-top: 50px;
        padding-bottom: 0px !important;
        padding-right: 0px;
        padding-left: 0px;
    }
    @media (max-width: 767.98px){
        .footer-sec .footer-4-location .footer-multiple-location .location-line .footer-map-link iframe{
            width: 100%;
            padding-right: 5px;
        }
        .footer-4-location .footer-multiple-location .location-line{
            text-align: left;
        }
    }
    @media (min-width: 576px) and (max-width: 767.98px){
        .footer-sec .footer-4-location .diffrent-brand-sec.footer-multiple-location{
            padding-top: 0px !important;
        }
        .footer-sec .footer-4-location .footer-multiple-location .location-line .first-location{
            margin-bottom: 35px !important;
        }
        .footer-sec .footer-4-location .footer-multiple-location .location-line .second-location{
            margin-bottom: 35px !important;
        }
    }
    @media (min-width: 1200px) and (max-width: 1400px){
        .footer-sec .footer-4-location .footer-multiple-location .location-line .footer-map-link iframe{
            width: 100%;
            padding-right: 5px;
        }
    }
    @media (min-width: 768px) and (max-width: 991.98px){
        .footer-sec .footer-4-location .footer-multiple-location .location-line .first-location{
            margin-bottom: 30px !important;
        }
        .footer-sec .footer-4-location .footer-multiple-location .location-line .second-location{
            margin-bottom: 30px !important;
        }
    }
    @media (min-width: 992px) and (max-width: 1199.98px){
        .footer-sec .footer-4-location .footer-multiple-location .location-line .first-location{
            margin-bottom: 30px !important;
        }
        .footer-sec .footer-4-location .footer-multiple-location .location-line .second-location{
            margin-bottom: 30px !important;
        }
    }
</style>

<div class="modal select-door-popup" id="selectdoor" style="display: none;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
    
        <!-- Modal Header -->
        <div class="container">
        <div class="modal-header">
            <h2 class="modal-title">Select Your Door</h2>
            <button type="button" class="btn-close geta-door-close" data-bs-dismiss="modal">
                <img src="{{asset('front-assets/src/images/mobile-close-brown-icon.webp')}}" alt="">
            </button>
        </div>
    
        <!-- Modal body -->
        <div class="modal-body">

            <div class="row">
            @php
                $garage_doors_footer = \App\Models\GarageDoor::select('*')->where('deleted_at', null)->get();
            @endphp
            @if($garage_doors_footer->count() > 0)
                <div class="row justify-content-center desktop-garage-door-sec">
                    @foreach($garage_doors_footer as $gky=>$gvl)
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 left-side each-product">
                            <div class="inner-content">
                                <div class="heading-sec">
                                    @if(isset($gvl->title) && $gvl->title != '')<h3><a href="@if(isset($gvl->button_url) && $gvl->button_url !='') {{$gvl->button_url}} @endif ">{{$gvl->title}}</a></h3>@endif
                          
                                    @if(isset($gvl->subtitle) && $gvl->subtitle != '')<h4><a href="@if(isset($gvl->button_url) && $gvl->button_url !='') {{$gvl->button_url}} @endif ">{{$gvl->subtitle}}</a></h4>@endif
                                </div>
                                @if(isset($gvl->image) && $gvl->image != null)
                                    @php
                                    $img = App\Models\MediaImage::select('name')->where('id', $gvl->image)->first();
                                    @endphp
                                    @if($img && isset($img->name) && $img->name != null)
                                    <a @if(isset($gvl->button_url) && $gvl->button_url !='') href="{{$gvl->button_url}}" @endif aria-label="{{$gvl->title}}"><img src="{{ asset('uploads/'.$img->name) }}" class="img-fluid" width="486" height="205" alt="" loading="lazy"></a>
                                    @endif
                                @else
                                <figure>
                                    <a @if(isset($gvl->button_url) && $gvl->button_url !='') href="{{$gvl->button_url}}" @endif aria-label="{{$gvl->title}}"><img src="{{ asset('front-assets/src/images/new-residential-garage-doors.webp')}}" class="img-fluid" width="486" height="205" alt="" loading="lazy"></a>
                                </figure>
                                @endif
                                <br>
                                @if(isset($gvl->bullets) && $gvl->bullets != '')
                                    {!! $gvl->bullets !!}
                                @endif
                        
                                @if(isset($gvl->button) && $gvl->button !='')
                                    @if(isset($gvl->button_url) && $gvl->button_url !='')
                                        <a class="common-btn first-btn" href="{{$gvl->button_url}}" title="{{$gvl->title}}" aria-label="{{$gvl->title}}"> 
                                    @else
                                    <a class="common-btn first-btn" title="{{$gvl->title}}"  aria-label="{{$gvl->title}}"> 
                                    @endif
                                        {{$gvl->button}}
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            </div>
        </div>
    </div>
        </div>
    </div>
</div>



<div class="modal locationcontact" id="locationcontact" style="display: none;" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-body">
              <div class="popup-content-sec exploration-session-sec patient-logik">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="inner-div">
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style=" background: transparent; ">
                                    <img src="{{asset('front-assets/src/images/new-mobile-close-brown-icon.svg')}}" loading="lazy" alt="close-button"></button>
                                  <h2>Choose Your Location</h2>
                                  <div class="location-grid">
                                      @if(isset($setting->contact_no2))
                                      <div class="location-item">
                                        <p>Hastings</p>
                                        <a href="{{ isset($setting->contact_no2) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no2) : '' }}" class="common-btn header-booking-apt-btn"><img src="{{asset('uploads/phone-image-new.svg')}}"><span>{{ isset($setting->contact_no2) ? $setting->contact_no2 : '' }}</span></a>
                                       </div>
                                      @endif
                                      @if(isset($setting->contact_no3))
                                      <div class="location-item">
                                        <p>Lincoln</p>
                                        <a href="{{ isset($setting->contact_no3) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no3) : '' }}" class="common-btn header-booking-apt-btn"><img src="{{asset('uploads/phone-image-new.svg')}}"><span>{{ isset($setting->contact_no3) ? $setting->contact_no3 : '' }}</a>
                                        </div>
                                      @endif
                                      
                                  </div>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- model for location contact -->







<!-- Modal -->
<div class="modal get-a-free-quote-popup" id="getafreequote" tabindex="-1" role="dialog" aria-labelledby="getafreequoteTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered desktop-popup" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">Get a Quote</h2>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style=" background: transparent; ">
        <img src="{{asset('front-assets/src/images/mobile-close-brown-icon.webp')}}" alt="" style=" width: 22px; ">
        </button>
      </div>
      <div class="modal-body">
        <div class="row inner-row">
            <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 left-side">
                <h3>Raynor Doors of Nebraska, Inc.</h3>
                <p>For any inquiries about our company, products, or services, please do not hesitate to contact us.</p>
                <div class="popup-left-box">
                    <div>
                       <p><b>Hours</b></p>
                        <ul>
                            <li><div>Monday - Friday</div><span>7:30 AM – 4:30 PM </span></li>
                            <li><div>Saturday & Sunday</div><span>CLOSED</span></li>
                        </ul>
                    </div>
                    
                </div>

                <div class="popup-left-box">
                    <div>
                        <p><b>Phone</b></p>
                        <ul>
                            @if(isset($setting->contact_no) && $setting->contact_no != '')
                            <li><a href="{{ isset($setting->contact_no) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no) : '' }}">{{ isset($setting->contact_no) ? $setting->contact_no : '' }}</a></li>
                        @endif
                        </ul>
                    </div>
                   
                </div>

            </div>
            <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 right-side">
            <h3>Need a New Garage Door or Service?</h3>
                <form action="{{route('get-in-touch.store')}}" method="POST" id="ContactFormModel" data-parsley-validate="" novalidate="">
				@csrf
                    <div class="row">
                        <!-- H o n e y p o t -->
                        <label class="ohnohoney" for="hname"></label>
                        <input class="ohnohoney" autocomplete="newnm" type="text" id="hname" name="hname" placeholder="NAmes">
                        <label class="ohnohoney" for="hemail"></label>
                        <input class="ohnohoney" autocomplete="newnm" type="email" id="hemail" name="hemail" placeholder="Emails">
                        <!-- /H o n e y p o t -->
                        <div class="col-6">
                            <div class="form-group">
                                <input type="hidden" value="" name="modelRecaptchaToken" id="modelRecaptchaToken" />
                                <input type="text" required="" data-parsley-required-message="Please Enter Name" class="contact_input" id="name" name="name" placeholder="Name*" data-parsley-errors-container="#errorName" data-parsley-pattern="/^([a-zA-Z]+\s)*[a-zA-Z]+$/" data-parsley-pattern-message="Please Enter Valid Name">
                                <small id="errorName"></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="email" class="contact_input" id="email" name="email" placeholder="Email*" required="" data-parsley-required-message="Please Enter Email" data-parsley-type-message="Please Enter Valid Email" data-parsley-errors-container="#errorEmail">
                                <small id="errorEmail"></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="contact_input" id="phone" name="phone" placeholder="Phone*" required="" data-parsley-required-message="Please Enter Phone" data-parsley-errors-container="#errorPhone">
                                <small id="errorPhone"></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="zipcode" id="" name="zipcode" placeholder="Zip code*" required="" data-parsley-required-message="Please Enter Zip code" data-parsley-errors-container="#errorZipcode" >
                                <small id="errorZipcode"></small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="contact_input_textarea" name="message" placeholder="How can we help?" id="message"></textarea>
                            </div>
                        </div>
						<input type="hidden" name="url" value="{{url()->current()}}">
                        <div class="col-12">
                            <div class="form-btn">
                            <button class="blue-common-btn g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}" data-callback='onSubmit' data-action='submit' style="display: none;">Send Message</button>
                                 <button type="submit" class="submit_form">Get a Quote</button>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
       
      </div>
    </div>
    </div>
    <div class="modal-dialog modal-dialog-centered mobile-popup" role="document">
    <div class="modal-content">
      <div class="nav-for-slider">
        <div class="header-logo-and-close">

            @if(isset($setting->site_logo) && $setting->site_logo != "" && $setting->site_logo != null)
                @php
                   $header_image_name = App\Models\MediaImage::where('id' ,$setting->site_logo)->first();
                   if(isset($header_image_name) && $header_image_name != null)
                   {
                       $h_path = asset('uploads/' . $header_image_name->name);
                   }else{
                       $h_path = asset('front-assets/images/header-logo.webp');
                   }
                @endphp
                <a href="{{route('home')}}" aria-label="Header Logo">
                   <img src="{{$h_path}}" class="img-fluid model-logo-img" alt="Header Logo Imgae" width="93" height="93"></a>
             @else
                <a href="{{route('home')}}" aria-label="Header Logo">
                   <img src="{{asset('front-assets/images/header-logo.webp')}}" class="img-fluid model-logo-img" alt="Header Logo Imgae" width="93" height="93">
                </a>
             @endif

          

            <div class="nav-right-sec">
                    <a href="{{ isset($setting->contact_no) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no) : '' }}" class="tel mobile-tel1"><img
                            src="{{asset('front-assets/src/images/mobile-call-header.svg')}}" class="img-fluid call-icon-for-mob" style=""></a>
                        <img data-bs-dismiss="modal" src="{{asset('front-assets/src/images/mobile-close-brown-icon.webp')}}" alt="" class="model-close-cross" style="width: 30px; ">
            </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="row inner-row">
            <div class=" col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 right-side">
                <div>
                    <h3 class="get-capital">Get a Quote</h3>
                    <form action="{{route('get-in-touch.store')}}" method="POST" id="ContactFormMobile" data-parsley-validate="" novalidate="">
                    @csrf
                        <div class="row">
                             <!-- H o n e y p o t -->
                            <label class="ohnohoney" for="hname"></label>
                            <input class="ohnohoney" autocomplete="newnm" type="text" id="hname" name="hname" placeholder="NAmes">
                            <label class="ohnohoney" for="hemail"></label>
                            <input class="ohnohoney" autocomplete="newnm" type="email" id="hemail" name="hemail" placeholder="Emails">
                            <!-- /H o n e y p o t -->
                            <div class="col-6">
                                <input type="hidden" value="" name="mobileRecaptchaToken" id="mobileRecaptchaToken" />
                                <div class="form-group">
                                    <input type="text" required="" data-parsley-required-message="Please Enter Name" class="contact_input" id="name" name="name" placeholder="Name*" data-parsley-errors-container="#errorName" data-parsley-pattern="/^([a-zA-Z]+\s)*[a-zA-Z]+$/" data-parsley-pattern-message="Please Enter Valid Name">
                                    <small id="errorName"></small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="email" class="contact_input" id="email" name="email" placeholder="Email*" required="" data-parsley-required-message="Please Enter Email" data-parsley-type-message="Please Enter Valid Email" data-parsley-errors-container="#errorEmail">
                                    <small id="errorEmail"></small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="contact_input" id="phone" name="phone" placeholder="Phone*" required="" data-parsley-required-message="Please Enter Phone" data-parsley-errors-container="#errorPhone">
                                    <small id="errorPhone"></small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="zipcode" id="" name="zipcode" placeholder="Zip code*" required="" data-parsley-required-message="Please Enter Zip code" data-parsley-errors-container="#errorZipcode" >
                                    <small id="errorZipcode"></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="contact_input_textarea" name="message" placeholder="How can we help?" id="message"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="url" value="{{url()->current()}}">
                            <div class="col-12">
                                <div class="form-btn">
                                 <button class="blue-common-btn g-recaptcha"
                                   data-sitekey="{{ config('services.recaptcha.site_key') }}"
                                   data-callback='onSubmit'
                                   data-action='submit' style="display: none;"
                                   >Send Message</button>
                                    <button type="submit" class="submit_form">Get a Quote</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
       
      </div>
    </div>
</div>
  </div>
</div>
<div class="arrow" style="opacity: 0;"><i class="fa-angle-icon" aria-hidden="true"></i></div>
 <footer>
    <div class="footer-sec">
        <div class="container-md">
            @php
                $slug = request()->segment(count(request()->segments()));
                $showLocationAndMap = in_array($slug, ['hastings-garage-doors', 'lincoln-garage-doors']);
                $isHomePage = request()->url() === url('/'); 
            @endphp
            @if($showLocationAndMap)
                @include('frontend.includes.landing-page-footer')
            @else
                @include('frontend.includes.all-locations')
            @endif
        </div>
    </div>

    <div class="copyright-sec">
        <div class="container-md">
            <div class="row align-items-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    @if(isset($setting->copyright) && $setting->copyright != '')
                        <p>© {{ date('Y')}} {!! html_entity_decode($setting->copyright) !!}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
	

</footer>