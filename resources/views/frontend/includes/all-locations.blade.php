 <div class="row multi-location-footer">
     <div
         class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 footer-content footer-first-sec footer-logo footer-depart">

         <figure>
             <a href="{{ route('home') }}" aria-label="Footer Logo">

                 @if (isset($setting->footer_logo) && $setting->footer_logo != '' && $setting->footer_logo != null)
                     @php
                         $image_name = App\Models\MediaImage::where('id', $setting->footer_logo)->first();
                         if (isset($image_name) && $image_name != null) {
                             $f_path = asset('uploads/' . $image_name->name);
                         } else {
                             $f_path = asset('assets/src/images/footer-logo.webp');
                         }
                     @endphp

                     <img src="{{ $f_path }}" width="188" height="56" alt="Footer Logo" class="img-fluid"
                         loading="lazy">
                 @else
                     <img src="{{ asset('front-assets/images/footer-logo.webp') }}" width="188" height="56"
                         alt="Footer Logo" class="img-fluid" loading="lazy">
                 @endif
             </a>
         </figure>

         @if (isset($setting->content) && $setting->content != '')
             {!! html_entity_decode($setting->content) !!}
         @endif

         @if (
             (isset($setting->google_url) && $setting->google_url != null) ||
                 (isset($setting->facebook_url) && $setting->facebook_url != null) ||
                 (isset($setting->insta_url) && $setting->insta_url != null) ||
                 (isset($setting->linked_url) && $setting->linked_url != null) ||
                 (isset($setting->twitter_url) && $setting->twitter_url != null) ||
                 (isset($setting->yelp_url) && $setting->yelp_url != null) ||
                 (isset($setting->houzz_url) && $setting->houzz_url != null) ||
                 (isset($setting->youtube_url) && $setting->youtube_url != null) ||
                 (isset($setting->pinterest_url) && $setting->pinterest_url != null) ||
                 (isset($setting->shawnee_location_url) && $setting->shawnee_location_url != null))

             <div class="social">
                 <h3>Connect With Us</h3>
                 <ul>
                     @if (isset($setting->google_url) && $setting->google_url != null)
                         <li><a href="{{ $setting->google_url }}" target="blank" title="Google"><img
                                     src="{{ asset('front-assets/src/images/google-black.webp') }}" alt="Google"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->facebook_url) && $setting->facebook_url != null)
                         <li><a href="{{ $setting->facebook_url }}" target="blank" title="Facebook"><img
                                     src="{{ asset('front-assets/src/images/new_facbook.svg') }}" alt="Facebook"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->insta_url) && $setting->insta_url != null)
                         <li><a href="{{ $setting->insta_url }}" target="blank" title="Instagram"><img
                                     src="{{ asset('front-assets/src/images/new_instagram.svg') }}" alt="Instagram"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->linked_url) && $setting->linked_url != null)
                         <li><a href="{{ $setting->linked_url }}" target="blank" title="Linkedin"><img
                                     src="{{ asset('front-assets/src/images/new_LinkedIn.svg') }}" alt="Linkedin"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->twitter_url) && $setting->twitter_url != null)
                         <li><a href="{{ $setting->twitter_url }}" target="blank" title="Twitter"><img
                                     src="{{ asset('front-assets/src/images/new_Twitter.svg') }}" alt="Twitter"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->pinterest_url) && $setting->pinterest_url != null)
                         <li><a href="{{ $setting->pinterest_url }}" target="blank" title="Pintrest"><img
                                     src="{{ asset('front-assets/src/images/new_pinterest.svg') }}" alt="Pintrest"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->youtube_url) && $setting->youtube_url != null)
                         <li><a href="{{ $setting->youtube_url }}" target="blank" title="Youtube"><img
                                     src="{{ asset('front-assets/src/images/new_you tube.svg') }}" alt="Youtube"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (Request::is('locations/dover-garage-doors'))
                         @if (isset($setting->dover_location_url) && $setting->dover_location_url != null)
                             <li><a href="{{ $setting->dover_location_url }}" target="blank"
                                     title="Dover Location"><img
                                         src="{{ asset('front-assets/src/images/new_location.svg') }}" alt="Dover"
                                         class="img-fluid" width="40" height="40"></a></li>
                         @endif
                     @endif
                     @if (Request::is('locations/newport-garage-doors'))
                         @if (isset($setting->newport_location_url) && $setting->newport_location_url != null)
                             <li><a href="{{ $setting->newport_location_url }}" target="blank"
                                     title="Newport Location"><img
                                         src="{{ asset('front-assets/src/images/new_location.svg') }}" alt="Newport"
                                         class="img-fluid" width="40" height="40"></a></li>
                         @endif
                     @endif

                 </ul>
             </div>
         @endif
     </div>

     <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 footer-content footer-second-sec footer-depart">
         <h3>Quick Links</h3>
         @if (isset($menu_lists_services) && count($menu_lists_services))
             <ul>
                 @foreach ($menu_lists_services as $servicesLinks)
                     @foreach ($servicesLinks as $key => $menu_links_services)
                         <li><a href="{{ $menu_links_services->slug }}">{{ $menu_links_services->name }}</a></li>
                     @endforeach
                 @endforeach
             </ul>
         @endif
     </div>

     <div
         class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 footer-content footer-residential footer-depart">
         <h3>Residential</h3>
         @if (isset($menu_lists_residential) && count($menu_lists_residential))
             <ul>

                 @foreach ($menu_lists_residential as $reslinks)
                     <!-- @php
                         $limitedMenu = collect($reslinks)->flatten()->take(9);
                     @endphp -->
                     @foreach ($reslinks as $key => $resmenu_links)
                         <li><a href="{{ $resmenu_links->slug }}">{{ $resmenu_links->name }}</a></li>
                     @endforeach
                 @endforeach
             </ul>
         @endif
     </div>

     <div
         class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 footer-content footer-commercial footer-depart">

         <h3>Commercial</h3>
         @if (isset($menu_lists_commercial) && count($menu_lists_commercial))
             <ul>
                 @foreach ($menu_lists_commercial as $comlinks)
                     <!--  @php
                         $comlimitedMenu = collect($comlinks)->flatten()->take(9);
                     @endphp -->
                     @foreach ($comlinks as $key => $commenu_links)
                         <li><a href="{{ $commenu_links->slug }}">{{ $commenu_links->name }}</a></li>
                     @endforeach
                 @endforeach
             </ul>
         @endif
     </div>




     <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 footer-content footer-full-sec">
         <h3>Locations</h3>
     </div>

     <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 footer-content footer-third-sec">
         <h4>Hastings, NE</h4>
         <ul>
             @if (isset($setting->location) && $setting->location != '')
                 <li>{!! html_entity_decode($setting->location) !!}</li>
             @endif
             @if (isset($setting->contact_no2) && $setting->contact_no2 != '')
                 <li><a href="{{ isset($setting->contact_no2) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no2) : '' }}"
                         class="custom_fonts_amiko">{{ isset($setting->contact_no2) ? $setting->contact_no2 : '' }}</a>
                 </li>
             @endif
             @if (isset($setting->fax_no) && $setting->fax_no != '')
                 <li><span class="custom_fonts_amiko">{{ isset($setting->fax_no) ? $setting->fax_no : '' }}</span></li>
             @endif
             @if (isset($setting->email) && $setting->email != '')
                 <li><a href="mailto:{!! strip_tags(html_entity_decode($setting->email)) !!}">{!! html_entity_decode($setting->email) !!}</a></li>
             @endif

         </ul>
     </div>
     <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 footer-content footer-four-sec">
         @if (isset($setting->map_link) && $setting->map_link != '')
             {!! html_entity_decode($setting->map_link) !!}
         @endif




         @if (
             (isset($setting->google_url) && $setting->google_url != null) ||
                 (isset($setting->facebook_url) && $setting->facebook_url != null) ||
                 (isset($setting->insta_url) && $setting->insta_url != null) ||
                 (isset($setting->linked_url) && $setting->linked_url != null) ||
                 (isset($setting->twitter_url) && $setting->twitter_url != null) ||
                 (isset($setting->yelp_url) && $setting->yelp_url != null) ||
                 (isset($setting->houzz_url) && $setting->houzz_url != null) ||
                 (isset($setting->youtube_url) && $setting->youtube_url != null) ||
                 (isset($setting->pinterest_url) && $setting->pinterest_url != null))
             <div class="mobile-social-sec social">
                 <h3>Connect With Us</h3>
                 <ul>
                     @if (isset($setting->google_url) && $setting->google_url != null)
                         <li><a href="{{ $setting->google_url }}" target="blank" title="Google"><img
                                     src="{{ asset('front-assets/src/images/google-black.webp') }}" alt="Google"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->facebook_url) && $setting->facebook_url != null)
                         <li><a href="{{ $setting->facebook_url }}" target="blank" title="Facebook"><img
                                     src="{{ asset('front-assets/src/images/new_facbook.svg') }}" alt="Facebook"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->insta_url) && $setting->insta_url != null)
                         <li><a href="{{ $setting->insta_url }}" target="blank" title="Instagram"><img
                                     src="{{ asset('front-assets/src/images/new_instagram.svg') }}" alt="Instagram"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->linked_url) && $setting->linked_url != null)
                         <li><a href="{{ $setting->linked_url }}" target="blank" title="Linkedin"><img
                                     src="{{ asset('front-assets/src/images/new_LinkedIn.svg') }}" alt="Linkedin"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->twitter_url) && $setting->twitter_url != null)
                         <li><a href="{{ $setting->twitter_url }}" target="blank" title="Twitter"><img
                                     src="{{ asset('front-assets/src/images/new_Twitter.svg') }}" alt="Twitter"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->pinterest_url) && $setting->pinterest_url != null)
                         <li><a href="{{ $setting->pinterest_url }}" target="blank" title="Pintrest"><img
                                     src="{{ asset('front-assets/src/images/new_pinterest.svg') }}" alt="Pintrest"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->youtube_url) && $setting->youtube_url != null)
                         <li><a href="{{ $setting->youtube_url }}" target="blank" title="Youtube"><img
                                     src="{{ asset('front-assets/src/images/new_you tube.svg') }}" alt="Youtube"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (Request::is('locations/dover-garage-doors'))
                         @if (isset($setting->dover_location_url) && $setting->dover_location_url != null)
                             <li><a href="{{ $setting->dover_location_url }}" target="blank"
                                     title="Dover Location"><img
                                         src="{{ asset('front-assets/src/images/new_location.svg') }}" alt="Dover"
                                         class="img-fluid" width="40" height="40"></a></li>
                         @endif
                     @endif
                     @if (Request::is('locations/newport-garage-doors'))
                         @if (isset($setting->newport_location_url) && $setting->newport_location_url != null)
                             <li><a href="{{ $setting->newport_location_url }}" target="blank"
                                     title="Newport Location"><img
                                         src="{{ asset('front-assets/src/images/new_location.svg') }}" alt="Newport"
                                         class="img-fluid" width="40" height="40"></a></li>
                         @endif
                     @endif
                 </ul>
             </div>
         @endif
     </div>

     <div
         class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 footer-content footer-third-sec left-side-space">
         <h4>Lincoln , NE</h4>
         <ul>
             @if (isset($setting->location2) && $setting->location2 != '')
                 <li>{!! html_entity_decode($setting->location2) !!}</li>
             @endif
             @if (isset($setting->contact_no3) && $setting->contact_no3 != '')
                 <li><a href="{{ isset($setting->contact_no3) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no3) : '' }}"
                         class="custom_fonts_amiko">{{ isset($setting->contact_no3) ? $setting->contact_no3 : '' }}</a>
                 </li>
             @endif
             @if (isset($setting->fax_no) && $setting->fax_no != '')
                 <li><span class="custom_fonts_amiko">{{ isset($setting->fax_no) ? $setting->fax_no : '' }}</span>
                 </li>
             @endif
             @if (isset($setting->email2) && $setting->email2 != '')
                 <li><a href="mailto:{!! strip_tags(html_entity_decode($setting->email2)) !!}">{!! html_entity_decode($setting->email2) !!}</a></li>
             @endif

         </ul>
     </div>

     <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 footer-content footer-four-sec">


         @if (isset($setting->map_link2) && $setting->map_link2 != '')
             {!! html_entity_decode($setting->map_link2) !!}
         @endif


         @if (
             (isset($setting->google_url) && $setting->google_url != null) ||
                 (isset($setting->facebook_url) && $setting->facebook_url != null) ||
                 (isset($setting->insta_url) && $setting->insta_url != null) ||
                 (isset($setting->linked_url) && $setting->linked_url != null) ||
                 (isset($setting->twitter_url) && $setting->twitter_url != null) ||
                 (isset($setting->yelp_url) && $setting->yelp_url != null) ||
                 (isset($setting->houzz_url) && $setting->houzz_url != null) ||
                 (isset($setting->youtube_url) && $setting->youtube_url != null) ||
                 (isset($setting->pinterest_url) && $setting->pinterest_url != null))
             <div class="mobile-social-sec social">
                 <h3>Connect With Us</h3>
                 <ul>
                     @if (isset($setting->google_url) && $setting->google_url != null)
                         <li><a href="{{ $setting->google_url }}" target="blank" title="Google"><img
                                     src="{{ asset('front-assets/src/images/google-black.webp') }}" alt="Google"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->facebook_url) && $setting->facebook_url != null)
                         <li><a href="{{ $setting->facebook_url }}" target="blank" title="Facebook"><img
                                     src="{{ asset('front-assets/src/images/new_facbook.svg') }}" alt="Facebook"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->insta_url) && $setting->insta_url != null)
                         <li><a href="{{ $setting->insta_url }}" target="blank" title="Instagram"><img
                                     src="{{ asset('front-assets/src/images/new_instagram.svg') }}" alt="Instagram"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->linked_url) && $setting->linked_url != null)
                         <li><a href="{{ $setting->linked_url }}" target="blank" title="Linkedin"><img
                                     src="{{ asset('front-assets/src/images/new_LinkedIn.svg') }}" alt="Linkedin"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->twitter_url) && $setting->twitter_url != null)
                         <li><a href="{{ $setting->twitter_url }}" target="blank" title="Twitter"><img
                                     src="{{ asset('front-assets/src/images/new_Twitter.svg') }}" alt="Twitter"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->pinterest_url) && $setting->pinterest_url != null)
                         <li><a href="{{ $setting->pinterest_url }}" target="blank" title="Pintrest"><img
                                     src="{{ asset('front-assets/src/images/new_pinterest.svg') }}" alt="Pintrest"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->youtube_url) && $setting->youtube_url != null)
                         <li><a href="{{ $setting->youtube_url }}" target="blank" title="Youtube"><img
                                     src="{{ asset('front-assets/src/images/new_you tube.svg') }}" alt="Youtube"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (Request::is('locations/dover-garage-doors'))
                         @if (isset($setting->dover_location_url) && $setting->dover_location_url != null)
                             <li><a href="{{ $setting->dover_location_url }}" target="blank"
                                     title="Dover Location"><img
                                         src="{{ asset('front-assets/src/images/new_location.svg') }}" alt="Dover"
                                         class="img-fluid" width="40" height="40"></a></li>
                         @endif
                     @endif
                     @if (Request::is('locations/newport-garage-doors'))
                         @if (isset($setting->newport_location_url) && $setting->newport_location_url != null)
                             <li><a href="{{ $setting->newport_location_url }}" target="blank"
                                     title="Newport Location"><img
                                         src="{{ asset('front-assets/src/images/new_location.svg') }}" alt="Newport"
                                         class="img-fluid" width="40" height="40"></a></li>
                         @endif
                     @endif
                 </ul>
             </div>
         @endif
     </div>

 </div>



 <div class="row locations-sec mobile-locations-sec diffrent-brand-sec">
     <h3 class="lc-h3">Locations</h3>
     <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

         <div class="accordion" id="footerAccordion">



             <div class="accordion-item">
                 <h3 class="accordion-header" id="headingTwo">
                     <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                         data-bs-target="#collapseTwo" aria-expanded="false"><span>Hastings, NE</span></button>
                 </h3>

                 <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#footerAccordion">
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
                                 <li class="lc_e"><a
                                         href="mailto:{!! strip_tags(html_entity_decode($setting->email)) !!}">{!! html_entity_decode($setting->email) !!}</a>
                                 </li>
                             @endif
                         </ul>

                         @if (isset($setting->map_link) && $setting->map_link != '' && $setting->map_link != null)
                             {!! html_entity_decode($setting->map_link) !!}
                         @endif
                     </div>
                 </div>
             </div>
             <div class="accordion-item">
                 <h3 class="accordion-header" id="headingOne">
                     <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                         data-bs-target="#collapseOne" aria-expanded="false"><span>Lincoln , NE</span></button>
                 </h3>

                 <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#footerAccordion">
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
                                 <li class="lc_e"><a
                                         href="mailto:{!! strip_tags(html_entity_decode($setting->email2)) !!}">{!! html_entity_decode($setting->email2) !!}</a>
                                 </li>
                             @endif
                         </ul>

                         @if (isset($setting->map_link2) && $setting->map_link2 != '' && $setting->map_link2 != null)
                             {!! html_entity_decode($setting->map_link2) !!}
                         @endif
                     </div>
                 </div>
             </div>


         </div>

     </div>

     @if (
         (isset($setting->google_url) && $setting->google_url != null) ||
             (isset($setting->facebook_url) && $setting->facebook_url != null) ||
             (isset($setting->insta_url) && $setting->insta_url != null) ||
             (isset($setting->linked_url) && $setting->linked_url != null) ||
             (isset($setting->twitter_url) && $setting->twitter_url != null) ||
             (isset($setting->youtube_url) && $setting->youtube_url != null) ||
             (isset($setting->newport_location_url) && $setting->newport_location_url != null) ||
             (isset($setting->pinterest_url) && $setting->pinterest_url != null))
         <div class="col-12">
             <div class="mobile-social-sec mobile-social-icons">
                 <h3>Connect With Us</h3>
                 <ul>
                     @if (isset($setting->google_url) && $setting->google_url != null)
                         <li><a href="{{ $setting->google_url }}" target="blank" title="Google"><img
                                     src="{{ asset('front-assets/src/images/google-black.webp') }}" alt="Google"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->facebook_url) && $setting->facebook_url != null)
                         <li><a href="{{ $setting->facebook_url }}" target="blank" title="Facebook"><img
                                     src="{{ asset('front-assets/src/images/new_facbook.svg') }}" alt="Facebook"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->insta_url) && $setting->insta_url != null)
                         <li><a href="{{ $setting->insta_url }}" target="blank" title="Instagram"><img
                                     src="{{ asset('front-assets/src/images/new_instagram.svg') }}" alt="Instagram"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->linked_url) && $setting->linked_url != null)
                         <li><a href="{{ $setting->linked_url }}" target="blank" title="Linkedin"><img
                                     src="{{ asset('front-assets/src/images/new_LinkedIn.svg') }}" alt="Linkedin"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->twitter_url) && $setting->twitter_url != null)
                         <li><a href="{{ $setting->twitter_url }}" target="blank" title="Twitter"><img
                                     src="{{ asset('front-assets/src/images/new_Twitter.svg') }}" alt="Twitter"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->pinterest_url) && $setting->pinterest_url != null)
                         <li><a href="{{ $setting->pinterest_url }}" target="blank" title="Pintrest"><img
                                     src="{{ asset('front-assets/src/images/new_pinterest.svg') }}" alt="Pintrest"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (isset($setting->youtube_url) && $setting->youtube_url != null)
                         <li><a href="{{ $setting->youtube_url }}" target="blank" title="Youtube"><img
                                     src="{{ asset('front-assets/src/images/new_you tube.svg') }}" alt="Youtube"
                                     class="img-fluid" width="40" height="40"></a></li>
                     @endif
                     @if (Request::is('locations/dover-garage-doors'))
                         @if (isset($setting->dover_location_url) && $setting->dover_location_url != null)
                             <li><a href="{{ $setting->dover_location_url }}" target="blank"
                                     title="Dover Location"><img
                                         src="{{ asset('front-assets/src/images/new_location.svg') }}" alt="Dover"
                                         class="img-fluid" width="40" height="40"></a></li>
                         @endif
                     @endif
                     @if (Request::is('locations/newport-garage-doors'))
                         @if (isset($setting->newport_location_url) && $setting->newport_location_url != null)
                             <li><a href="{{ $setting->newport_location_url }}" target="blank"
                                     title="Newport Location"><img
                                         src="{{ asset('front-assets/src/images/new_location.svg') }}" alt="Newport"
                                         class="img-fluid" width="40" height="40"></a></li>
                         @endif
                     @endif
                 </ul>
             </div>
         </div>
     @endif
 </div>
