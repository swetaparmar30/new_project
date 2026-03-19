            <div class="row landing-page">
                <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12 footer-content footer-second-sec">
                    <h3>Quick Links</h3>
                    @if(isset($menu_lists_services) && count($menu_lists_services))
                        <ul>
                            @foreach($menu_lists_services as $servicesLinks)
                                @foreach($servicesLinks as $key => $menu_links_services)
                                   
                                    <li><a href="{{ $menu_links_services->slug }}">{{$menu_links_services->name}}</a></li>
                                       
                                @endforeach
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12 footer-content footer-residential">
                     <h3>Residential</h3>
                     @if(isset($menu_lists_residential) && count($menu_lists_residential))
                     <ul>

                        @foreach($menu_lists_residential as $reslinks)
                        <!-- @php
                            $limitedMenu = collect($reslinks)->flatten()->take(9);
                        @endphp -->
                             @foreach($reslinks as $key => $resmenu_links)
                                <li><a href="{{ $resmenu_links->slug }}">{{$resmenu_links->name}}</a></li>
                             @endforeach
                        @endforeach
                     </ul>
                     @endif
                  </div>

                  <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-6 col-sm-6 col-xs-12 footer-content footer-commercial">

                     <h3>Commercial</h3>
                     @if(isset($menu_lists_commercial) && count($menu_lists_commercial))
                     <ul>
                        @foreach($menu_lists_commercial as $comlinks)
                        <!--  @php
                            $comlimitedMenu = collect($comlinks)->flatten()->take(9);
                        @endphp -->
                             @foreach($comlinks as $key => $commenu_links)
                                <li><a href="{{ $commenu_links->slug }}">{{$commenu_links->name}}</a></li>
                             @endforeach
                        @endforeach
                     </ul>
                     @endif
                  </div>
                  @if($showLocationAndMap)
                  <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-content footer-location">
                     <h3>Location</h3>
                     @if($slug == 'hastings-garage-doors')
                        @php $mapLink = $setting->map_link ?? ''; @endphp
                         <h4>Hastings, NE</h4>
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

                    @elseif($slug == 'lincoln-garage-doors')
                        @php $mapLink = $setting->map_link2 ?? ''; @endphp
                        <h4>Lincoln , NE</h4>
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
                    @elseif($slug == 'georgetown-garage-doors')
                        @php $mapLink = $setting->map_link3 ?? ''; @endphp
                        <h4>Georgetown, Delaware</h4>
                        <ul>
                            @if (isset($setting->location3) && $setting->location3 != '')
                                <li class="lc_m">{!! html_entity_decode($setting->location3) !!}</li>
                            @endif
                            @if (isset($setting->contact_no4) && $setting->contact_no4 != '')
                                <li class="lc_c"><a
                                        href="{{ isset($setting->contact_no4) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no4) : '' }}"
                                        class="custom_fonts_amiko">{{ isset($setting->contact_no4) ? $setting->contact_no4 : '' }}</a>
                                </li>
                            @endif
                            @if (isset($setting->email3) && $setting->email3 != '')
                                <li class="lc_e"><a href="mailto:{!! strip_tags(html_entity_decode($setting->email3)) !!}">{!! html_entity_decode($setting->email3) !!}</a>
                                </li>
                            @endif
                        </ul>
                    @elseif($slug == 'salisbury-garage-doors')
                        @php $mapLink = $setting->map_link4 ?? ''; @endphp
                        <h4>Salisbury, Maryland</h4>
                        <ul>
                            @if (isset($setting->location4) && $setting->location4 != '')
                                <li class="lc_m">{!! html_entity_decode($setting->location4) !!}</li>
                            @endif
                            @if (isset($setting->contact_no5) && $setting->contact_no5 != '')
                                <li class="lc_c"><a
                                        href="{{ isset($setting->contact_no5) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no5) : '' }}"
                                        class="custom_fonts_amiko">{{ isset($setting->contact_no5) ? $setting->contact_no5 : '' }}</a>
                                </li>
                            @endif
                            @if (isset($setting->email4) && $setting->email4 != '')
                                <li class="lc_e"><a
                                        href="mailto:{!! strip_tags(html_entity_decode($setting->email4)) !!}">{!! html_entity_decode($setting->email4) !!}</a></li>
                            @endif
                        </ul>
                    @endif
                    @if(
                        isset($setting->google_url) && $setting->google_url != null ||
                        isset($setting->facebook_url) && $setting->facebook_url != null ||
                        isset($setting->insta_url) && $setting->insta_url != null ||
                        isset($setting->linked_url) && $setting->linked_url != null ||
                        isset($setting->twitter_url) && $setting->twitter_url != null ||
                        isset($setting->youtube_url) && $setting->youtube_url != null ||
                        isset($setting->dover_location_url) && $setting->dover_location_url != null ||
                        isset($setting->newport_location_url) && $setting->newport_location_url != null ||
                        isset($setting->pinterest_url) && $setting->pinterest_url != null
                    )
                    <div class="social desktop-social-sec landing-page">
                        <h3 class="connect-text">Connect With Us</h3>
                        <ul>
                            @if(isset($setting->google_url) && $setting->google_url != null)<li><a href="{{ $setting->google_url }}" target="blank" title="Google"><img src="{{asset('front-assets/src/images/google-black.webp')}}" alt="Google" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(isset($setting->facebook_url) && $setting->facebook_url != null)<li><a href="{{ $setting->facebook_url }}" target="blank" title="Facebook"><img src="{{asset('front-assets/src/images/new_facbook.svg')}}" alt="Facebook" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(isset($setting->insta_url) && $setting->insta_url != null)<li><a href="{{ $setting->insta_url }}" target="blank" title="Instagram"><img src="{{asset('front-assets/src/images/new_instagram.svg')}}" alt="Instagram" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(isset($setting->linked_url) && $setting->linked_url != null)<li><a href="{{ $setting->linked_url }}" target="blank" title="Linkedin"><img src="{{asset('front-assets/src/images/new_LinkedIn.svg')}}" alt="Linkedin" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(isset($setting->twitter_url) && $setting->twitter_url != null)<li><a href="{{ $setting->twitter_url }}" target="blank" title="Twitter"><img src="{{asset('front-assets/src/images/new_Twitter.svg')}}" alt="Twitter" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(isset($setting->pinterest_url) && $setting->pinterest_url != null)<li><a href="{{ $setting->pinterest_url }}" target="blank" title="Pintrest"><img src="{{asset('front-assets/src/images/new_pinterest.svg')}}" alt="Pintrest" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(isset($setting->youtube_url) && $setting->youtube_url != null)<li><a href="{{ $setting->youtube_url }}" target="blank" title="Youtube"><img src="{{asset('front-assets/src/images/new_you tube.svg')}}" alt="Youtube" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(Request::is('locations/lincoln-garage-doors'))
                                @if(isset($setting->dover_location_url) && $setting->dover_location_url != null)<li><a href="{{ $setting->dover_location_url }}" target="blank" title="Dover Location"><img src="{{asset('front-assets/src/images/new_location.svg')}}" alt="Dover" class="img-fluid" width="40" height="40"></a></li> @endif
                            @endif
                            @if(Request::is('locations/hastings-garage-doors'))
                                @if(isset($setting->newport_location_url) && $setting->newport_location_url != null)<li><a href="{{ $setting->newport_location_url }}" target="blank" title="Newport Location"><img src="{{asset('front-assets/src/images/new_location.svg')}}" alt="Newport" class="img-fluid" width="40" height="40"></a></li> @endif
                            @endif
                        </ul>
                    </div>
                    @endif
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-12 col-sm-12 col-xs-12 footer-content footer-map">
                    <div class="footer-map-link">
                        @if(isset($mapLink) && $mapLink != '')
                            {!! html_entity_decode($mapLink) !!}
                        @endif
                    </div>
                    

                    <div class="location mobile-locations-sec landing-page">
                    <h3>Location</h3>

                    <div class="accordion" id="footerAccordion">
                        @if($slug == 'lincoln-garage-doors')
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"><span>Lincoln , NE</span></button>
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
                                                <li class="lc_e"><a href="mailto:{!! strip_tags(html_entity_decode($setting->email2)) !!}">{!! html_entity_decode($setting->email2) !!}</a>
                                                </li>
                                            @endif
                                        </ul>

                                        @if(isset($setting->map_link2) && $setting->map_link2 != "" && $setting->map_link2 != null)
                                           {!! html_entity_decode($setting->map_link2) !!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @elseif($slug == 'hastings-garage-doors')
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"><span>Hastings, NE</span></button>
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
                                                <li class="lc_e"><a href="mailto:{!! strip_tags(html_entity_decode($setting->email)) !!}">{!! html_entity_decode($setting->email) !!}</a>
                                                </li>
                                            @endif
                                        </ul>

                                        @if(isset($setting->map_link) && $setting->map_link != "" && $setting->map_link != null)
                                           {!! html_entity_decode($setting->map_link) !!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @elseif($slug == 'georgetown-garage-doors')
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"><span>Georgetown, Delaware</span></button>
                                </h3>

                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#footerAccordion">
                                    <div class="card-body">
                                        <ul>
                                            @if (isset($setting->location3) && $setting->location3 != '')
                                                <li class="lc_m">{!! html_entity_decode($setting->location3) !!}</li>
                                            @endif
                                            @if (isset($setting->contact_no4) && $setting->contact_no4 != '')
                                                <li class="lc_c"><a
                                                        href="{{ isset($setting->contact_no4) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no4) : '' }}"
                                                        class="custom_fonts_amiko">{{ isset($setting->contact_no4) ? $setting->contact_no4 : '' }}</a>
                                                </li>
                                            @endif
                                            @if (isset($setting->email3) && $setting->email3 != '')
                                                <li class="lc_e"><a href="mailto:{!! strip_tags(html_entity_decode($setting->email3)) !!}">{!! html_entity_decode($setting->email3) !!}</a>
                                                </li>
                                            @endif
                                        </ul>

                                        @if(isset($setting->map_link3) && $setting->map_link3 != "" && $setting->map_link3 != null)
                                           {!! html_entity_decode($setting->map_link3) !!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @elseif($slug == 'salisbury-garage-doors')
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingFour">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"><span>Salisbury, Maryland</span></button>
                                </h3>

                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#footerAccordion">
                                    <div class="card-body">
                                        <ul>
                                            @if (isset($setting->location4) && $setting->location4 != '')
                                                <li class="lc_m">{!! html_entity_decode($setting->location4) !!}</li>
                                            @endif
                                            @if (isset($setting->contact_no5) && $setting->contact_no5 != '')
                                                <li class="lc_c"><a
                                                        href="{{ isset($setting->contact_no5) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no5) : '' }}"
                                                        class="custom_fonts_amiko">{{ isset($setting->contact_no5) ? $setting->contact_no5 : '' }}</a>
                                                </li>
                                            @endif
                                            @if (isset($setting->email4) && $setting->email4 != '')
                                                <li class="lc_e"><a
                                                        href="mailto:{!! strip_tags(html_entity_decode($setting->email4)) !!}">{!! html_entity_decode($setting->email4) !!}</a></li>
                                            @endif
                                        </ul>

                                        @if(isset($setting->map_link4) && $setting->map_link4 != "" && $setting->map_link4 != null)
                                           {!! html_entity_decode($setting->map_link4) !!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    </div>
                    @if(
                        isset($setting->google_url) && $setting->google_url != null ||
                        isset($setting->facebook_url) && $setting->facebook_url != null ||
                        isset($setting->insta_url) && $setting->insta_url != null ||
                        isset($setting->linked_url) && $setting->linked_url != null ||
                        isset($setting->twitter_url) && $setting->twitter_url != null ||
                        isset($setting->youtube_url) && $setting->youtube_url != null ||
                        isset($setting->dover_location_url) && $setting->dover_location_url != null ||
                        isset($setting->newport_location_url) && $setting->newport_location_url != null ||
                        isset($setting->pinterest_url) && $setting->pinterest_url != null
                    )
                    <div class="social mobile-social-sec landing-page">
                        <h3 class="connect-text">Connect With Us</h3>
                        <ul>
                            @if(isset($setting->google_url) && $setting->google_url != null)<li><a href="{{ $setting->google_url }}" target="blank" title="Google"><img src="{{asset('front-assets/src/images/google-black.webp')}}" alt="Google" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(isset($setting->facebook_url) && $setting->facebook_url != null)<li><a href="{{ $setting->facebook_url }}" target="blank" title="Facebook"><img src="{{asset('front-assets/src/images/new_facbook.svg')}}" alt="Facebook" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(isset($setting->insta_url) && $setting->insta_url != null)<li><a href="{{ $setting->insta_url }}" target="blank" title="Instagram"><img src="{{asset('front-assets/src/images/new_instagram.svg')}}" alt="Instagram" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(isset($setting->linked_url) && $setting->linked_url != null)<li><a href="{{ $setting->linked_url }}" target="blank" title="Linkedin"><img src="{{asset('front-assets/src/images/new_LinkedIn.svg')}}" alt="Linkedin" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(isset($setting->twitter_url) && $setting->twitter_url != null)<li><a href="{{ $setting->twitter_url }}" target="blank" title="Twitter"><img src="{{asset('front-assets/src/images/new_Twitter.svg')}}" alt="Twitter" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(isset($setting->pinterest_url) && $setting->pinterest_url != null)<li><a href="{{ $setting->pinterest_url }}" target="blank" title="Pintrest"><img src="{{asset('front-assets/src/images/new_pinterest.svg')}}" alt="Pintrest" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(isset($setting->youtube_url) && $setting->youtube_url != null)<li><a href="{{ $setting->youtube_url }}" target="blank" title="Youtube"><img src="{{asset('front-assets/src/images/new_you tube.svg')}}" alt="Youtube" class="img-fluid" width="40" height="40"></a></li> @endif
                            @if(Request::is('locations/lincoln-garage-doors'))
                                @if(isset($setting->dover_location_url) && $setting->dover_location_url != null)<li><a href="{{ $setting->dover_location_url }}" target="blank" title="Dover Location"><img src="{{asset('front-assets/src/images/new_location.svg')}}" alt="Dover" class="img-fluid" width="40" height="40"></a></li> @endif
                            @endif
                            @if(Request::is('locations/hastings-garage-doors'))
                                @if(isset($setting->newport_location_url) && $setting->newport_location_url != null)<li><a href="{{ $setting->newport_location_url }}" target="blank" title="Newport Location"><img src="{{asset('front-assets/src/images/new_location.svg')}}" alt="Newport" class="img-fluid" width="40" height="40"></a></li> @endif
                            @endif
                        </ul>
                    </div>
                    @endif
                  </div>
                  @endif
                  <!-- <div class="col-12 justify-content-center align-items-center flex-column text-center footer-logo-sec">
                     <figure>
                        @if(isset($setting->footer_logo) && $setting->footer_logo != "" && $setting->footer_logo != null)
                        @php
                        $image_name = App\Models\MediaImage::where('id' ,$setting->footer_logo)->first();
                        if(isset($image_name) && $image_name != null)
                        {
                            $f_path = asset('uploads/' . $image_name->name);
                        }else{
                            $f_path = asset('front-assets/src/images/footer-logo.webp');
                        }
                        @endphp
                        <a href="{{route('home')}}" aria-label="Footer Logo">
                            <img src="{{$f_path}}" alt="Footer Logo" width="210" height="56" loading="lazy" class="img-fluid footer-logo-img landing-page">
                        </a>
                        @else
                        <a href="{{route('home')}}" aria-label="Footer Logo">
                            <img src="{{asset('front-assets/src/images/footer-logo.webp')}}" alt="Footer Logo" width="210" height="56" loading="lazy" class="img-fluid footer-logo-img landing-page">
                        </a>
                        @endif
                    </figure>
                        <div class="landing-footer-text mt-4">
                            @if(isset($setting->content) && $setting->content != '')
                                {!! html_entity_decode($setting->content) !!}
                            @endif
                        </div>
                  </div> -->
                <!-- <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 footer-content footer-third-sec">
                    <h2>Location</h2>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 locatin-col">
                        <h4>Hastings, NE</h4>
                        <ul>
                            @if(isset($setting->location) && $setting->location != '')
                                <li>{!! html_entity_decode($setting->location) !!}</li>
                            @endif
                            @if(isset($setting->contact_no2) && $setting->contact_no2 != '')
                                <li><a href="tel:+1{{ isset($setting->contact_no2) ? $setting->contact_no2 : '' }}" class="custom_fonts_amiko">{{ isset($setting->contact_no2) ? $setting->contact_no2 : '' }}</a></li>
                            @endif
                            @if(isset($setting->email) && $setting->email != '')
                                <li><a href="mailto:{!! strip_tags(html_entity_decode($setting->email)) !!}">{!! html_entity_decode($setting->email) !!}</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <h4>Lincoln , NE </h4>
                        <ul>
                            @if(isset($setting->location2) && $setting->location2 != '')
                                <li>{!! html_entity_decode($setting->location2) !!}</li>
                            @endif
                            @if(isset($setting->contact_no3) && $setting->contact_no3 != '')
                                <li><a href="tel:+1{{ isset($setting->contact_no3) ? $setting->contact_no3 : '' }}" class="custom_fonts_amiko">{{ isset($setting->contact_no3) ? $setting->contact_no3 : '' }}</a></li>
                            @endif
                            @if(isset($setting->email2) && $setting->email2 != '')
                                <li><a href="mailto:{!! strip_tags(html_entity_decode($setting->email2)) !!}">{!! html_entity_decode($setting->email2) !!}</a></li>
                            @endif
                        </ul>
                    </div>
                    </div>
                    <div class="row location-bottom-row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 locatin-col">
                             <h4>GEORGETOWN, DELAWARE </h4>
                            <ul>
                                @if(isset($setting->location3) && $setting->location3 != '')
                                    <li>{!! html_entity_decode($setting->location3) !!}</li>
                                @endif
                                @if(isset($setting->contact_no4) && $setting->contact_no4 != '')
                                    <li><a href="tel:+1{{ isset($setting->contact_no4) ? $setting->contact_no4 : '' }}" class="custom_fonts_amiko">{{ isset($setting->contact_no4) ? $setting->contact_no4 : '' }}</a></li>
                                @endif
                                @if(isset($setting->email3) && $setting->email3 != '')
                                    <li><a href="mailto:{!! strip_tags(html_entity_decode($setting->email3)) !!}">{!! html_entity_decode($setting->email3) !!}</a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <h4>SALISBURY, MARYLAND </h4>
                            <ul>
                                @if(isset($setting->location4) && $setting->location4 != '')
                                    <li>{!! html_entity_decode($setting->location4) !!}</li>
                                @endif
                                @if(isset($setting->contact_no5) && $setting->contact_no5 != '')
                                    <li><a href="tel:+1{{ isset($setting->contact_no5) ? $setting->contact_no5 : '' }}" class="custom_fonts_amiko">{{ isset($setting->contact_no5) ? $setting->contact_no5 : '' }}</a></li>
                                @endif
                                @if(isset($setting->email4) && $setting->email4 != '')
                                    <li><a href="mailto:{!! strip_tags(html_entity_decode($setting->email4)) !!}">{!! html_entity_decode($setting->email4) !!}</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>

                </div> -->
                
            </div>