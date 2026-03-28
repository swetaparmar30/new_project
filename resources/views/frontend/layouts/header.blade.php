<?php


 $setting = App\Models\Setting::first();
 $menus = App\Models\Menu::where('header_menu',1)->get();

 if (isset($menus) && $menus != ""&& count($menus)) {
      $menu_lists = [];
      foreach($menus as $menus_item){
         $menu_lists[] = App\Models\Menu_list::with('children')->whereNull('parent_id')->where('menus_id', $menus_item->id)->get();
      }
 }

?>


<style>
    #selectdoor{display: flex; align-items: center; justify-content: center;}
    #selectdoor .modal-dialog{margin: auto;padding: 0;justify-content: center;min-height: 100vh; min-width: 85%;}
    #selectdoor .modal-content{border-radius: 10px; border: 0;/*max-height: 100vh;*/margin-top: 25px;padding: 15px 0;overflow: hidden;}
    #selectdoor .header{box-shadow: unset !important;}
    #selectdoor .modal-body{padding: 20px 20px 40px 20px;}
    #selectdoor .row{padding: 0;}
    #selectdoor .modal-header{border-bottom: unset;}
    #selectdoor .each-product h3{font-size: 25px; line-height: 36px;}
    #selectdoor .each-product h4{font-size: 21px;line-height: 22px;margin-bottom: 15px;}
    #selectdoor .each-product .inner-content{border-right: unset;}
    #selectdoor .modal-header{padding: 40px 20px 20px;}
    #selectdoor .each-product ul{margin-bottom: 5px;}
    .select-door-popup .modal-header .btn-close {
        top: 10px;
        right:18px;
    }
</style>

<header class="header desk-header" id="myHeader">
      <div class="container-md">
            <div class="row">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 header-logo">
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
                           <img src="{{$h_path}}" class="img-fluid header-logo-img" alt="Header Logo Imgae" height="33" width="248"></a>
                     @else
                        <a href="{{route('home')}}" aria-label="Header Logo">
                           <img src="{{asset('front-assets/images/header-logo.webp')}}" class="img-fluid header-logo-img" alt="Header Logo Imgae" height="33" width="248">
                        </a>
                     @endif

                    <div class="mobile-toggle-sec">
                        <div class="menu-toggle">
                            <a href="{{ isset($setting->contact_no) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no) : '' }}" class="tel mobile-tel1"><img
                                    src="{{asset('front-assets/src/images/mobile-call-header.webp')}}" class="img-fluid" alt="Contact"></a>

                            <button class="navbar-toggler" type="button">
                                <img src="{{asset('front-assets/src/images/mobile-open-bar.webp')}}" class="open-icon" height="47" width="47" alt="Open Menu">
                                <img src="{{asset('front-assets/src/images/mobile-close-brown-icon.webp')}}" class="close-icon"
                                    style="display: none;" alt="Close Menu">

                            </button>
                        </div>
                    </div>
                </div>
               
                <div class="col-xxl- col-xl- col-lg- col-md-12 col-sm-12 col-12 header-menu header-new">
                    <div class="header-menu-mobile-desk">
                    <nav class="navigation">
                        <ul>
                                <li @if (Route::currentRouteName() == 'home') class="active" @endif><a href="{{route('home')}}/">Home</a></li>
                            
                                <li @if ((Route::currentRouteName() == 'get.residential.products' || Route::currentRouteName() == 'residential.product_detail' || Route::currentRouteName() == 'residential.products') && !request()->is('residential/openers') && !request()->is('residential/openers/*')) class="dropdown active" @else class="dropdown" @endif>
                                    <a class="dropdown-a submenu" href="{{route('get.residential.products')}}/">Residential</a>

                                    <ul class="dropdown-menu first-dropdown ">
                                        @if(count($residential_menus) > 0)
                                            @foreach($residential_menus as $reskey => $resmenu)
                                                @if($reskey == 'series')
                                                <li class="dropdown sub-dropdown">
                                                    <a href="{{route('get.residential.products')}}/" class="dropdown-sub-a sub-dropdown-arrow">Explore by Series</a>
                                                    @if(count($resmenu) > 0)
                                                        <ul class=" main-list-sec">
                                                            <li><a href="{{route('get.residential.products')}}/" class="dropdown-a dropdown-sub-a">Explore by Series</a></li>
                                                        @foreach($resmenu as $fkey=>$fval)
                                                            
                                                            <li class="main-list-li"><a href="{{route('residential.products', [$fval['slug']])}}/">{{$fval['category']}}</a></li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endif

                                                @if($reskey == 'style')
                                                <li class="dropdown sub-dropdown">
                                                    <a class="dropdown-sub-a sub-dropdown-arrow" href="javascript:">Explore by Style</a>
                                                    @if(count($resmenu) > 0)
                                                        <ul class=" main-list-sec" >
                                                            <li><a class="dropdown-a dropdown-sub-a" href="javascript:">Explore by Style</a></li>
                                                        @foreach($resmenu as $fkey=>$fval)
                                                            <li class="main-list-li"><a href="{{route('residential.products', [$fval['slug']])}}/">{{$fval['category']}}</a></li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endif

                                                @if($reskey == 'insulation_type')
                                                <li class="dropdown sub-dropdown">
                                                    <a href="javascript:" class="dropdown-sub-a sub-dropdown-arrow">Explore by Insulation Type</a>
                                                    @if(count($resmenu) > 0)
                                                        <ul class=" main-list-sec">
                                                            <li><a href="javascript:" class="dropdown-a dropdown-sub-a">Explore by Insulation Type</a></li>
                                                        @foreach($resmenu as $fkey=>$fval)
                                                            <li class="main-list-li"><a href="{{route('residential.products', [$fval['slug']])}}/">{{$fval['category']}}</a></li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endif

                                                @if($reskey == 'main')
                                                    @if(count($resmenu) > 0)
                                                        @foreach($resmenu as $fkey=>$fval)
                                                            <li>
                                                                <a href="{{route('residential.products', [$fval['slug']])}}/">{{$fval['category']}}</a>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                @endif

                                            @endforeach
                                        @endif
                                        <li>
                                            <a href="{{route('serviceAndRepair')}}/">Service and Repair</a>
                                        </li>
                                    </ul>

                                </li>

                                <li @if (Route::currentRouteName() == 'get.commercial.products' || Route::currentRouteName() == 'commercial.product_detail' || Route::currentRouteName() == 'commercial.products') class="dropdown active" @else class="dropdown" @endif>
                                    <a class="dropdown-a submenu" href="{{route('get.commercial.products')}}/">Commercial</a>

                                    <ul class="dropdown-menu first-dropdown">
                                        
                                        @if(count($commercial_menus) > 0)
                                            @foreach($commercial_menus as $reskey => $resmenu)
                                                @if($reskey == 'door_type')
                                                <li class="dropdown sub-dropdown">
                                                    <a href="{{route('get.commercial.products')}}/" class="dropdown-sub-a sub-dropdown-arrow">Explore by Type</a>
                                                    @if(count($resmenu) > 0)
                                                        <ul class="main-box main-list-sec">
                                                        @foreach($resmenu as $fkey=>$fval)
															
                                                            @php
                                                             $prdctcat = $fval['products'];
                                                             $first = null;

                                                             if( $fval['slug'] == 'commercial-sectional-garage-doors'){
                                                                $first = isset($fval['subcategories'][0]) ? $fval['subcategories'][0] : null;
                                                                if(isset($first)){
                                                                    unset($fval['subcategories'][0]);
                                                                }
                                                             }
                                                             
                                                             $subcat = $fval['subcategories'];
                                                            @endphp
                                                            <li class="main-list-li">
                                                                <a href="{{route('commercial.products', [$fval['slug']])}}/" @if(count($subcat) > 0 || count($prdctcat) > 0) class="dropdown-a dropdown-sub-a"   @endif>{{$fval['category']}}</a>
                                                                @if(count($subcat) > 0 || count($prdctcat) > 0)
                                                                <ul class="inner-four-sec main-list-inner-list">
                                                                    @if(isset($first))
                                                                        <li><a href="{{route('commercial.products', [$first['slug']])}}/">{{$first['title']}}</a></li>
                                                                    @endif
																	@if(count($prdctcat) > 0)
																		@foreach($prdctcat as $ss=>$vls)
																			<li><a href="{{route('commercial.product_detail', [$fval['slug'],$vls['product_slug']])}}/">{{$vls['list_title']}}</a></li>
																		@endforeach
																	@endif
                                                                    @foreach($subcat as $s=>$vl)
                                                                        <li><a href="{{route('commercial.products', [$vl['slug']])}}/">{{$vl['title']}}</a></li> 
                                                                    @endforeach
                                                                </ul>
                                                                @endif
                                                            </li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endif

                                                @if($reskey == 'application')
                                                <li class="dropdown sub-dropdown">
                                                    <a href="javascript:" class=" dropdown-sub-a sub-dropdown-arrow">Explore by Application</a>
                                                    @if(count($resmenu) > 0)
                                                        <ul class=" main-list-sec">
                                                            <li><a href="javascript:" class="dropdown-a dropdown-sub-a">Explore by Application</a></li>
                                                        @foreach($resmenu as $fkey=>$fval)
                                                            @php
                                                             $subcat = $fval['subcategories'];
                                                            @endphp
                                                            <li class="main-list-li">
                                                                <a href="{{route('commercial.products', [$fval['slug']])}}/">{{$fval['category']}}</a>
                                                                
                                                            </li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endif

                                                @if($reskey == 'main')
                                                    @if(count($resmenu) > 0)
                                                        @foreach($resmenu as $fkey=>$fval)
                                                        @php
                                                            if($fval['slug'] == 'thermal-efficient-loading-dock-doors' || $fval['slug'] == 'secure-and-durable-loading-dock-doors'){
                                                                continue;
                                                            }
                                                        @endphp
                                                            <li>
                                                                <a href="{{route('commercial.products', [$fval['slug']])}}/">{{$fval['category']}}</a>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                @endif

                                            @endforeach
                                        @endif

                                        
                                    </ul>
                                </li>

                                {{-- Location --}}
                                <li @if (Route::currentRouteName() == 'lincoln.garagedoor' || Route::currentRouteName() == 'hastings.garagedoor' || Route::currentRouteName() == 'serviceareas') class="dropdown active" @else class="dropdown" @endif>
                                    <a href="javascript:;" style="cursor: default;" class="dropdown-a submenu">Locations</a>

                                    <ul class="dropdown-menu first-dropdown">
                                    
                                        
                                
                                        <li>
                                            <a href="{{url('locations/hastings-garage-doors')}}/">Hastings, NE</a>
                                        </li>
                                        <li>
                                            <a href="{{url('locations/lincoln-garage-doors')}}/">Lincoln, NE</a>
                                        </li>
                                        <li>
                                            <a href="{{url('locations/demo-garage-doors')}}/">Demo, NE</a>
                                        </li>
                                       

                                        {{-- <li>
                                            <a href="{{url('service-areas')}}/">Service Areas</a>
                                        </li> --}}
                                    
                                    </ul>
                                </li>
                             
                            
                                <li @if (Route::currentRouteName() == 'about.us') class="active" @endif><a href="{{route('about.us')}}/">About</a></li>
                                <li @if (Route::currentRouteName() == 'contact') class="active" @endif><a href="{{route('contact')}}/">Contact</a></li>
                            </ul>
                            <a href="https://raynor.chameleonpower.com/?dealer=true&did=0027" target="_blank" class="header-design-center">Design Center</a>
                            <a class="common-btn call-buton" data-bs-toggle="modal" data-bs-target="#locationcontact">
                                <img src="{{asset('front-assets/src/images/white-yellow-call-icon.webp')}}" class="normal-icon" alt=""><img src="{{asset('front-assets/src/images/blue-white-call-icon.webp')}}" class="hover-icon" alt="" width="25" height="25">Call Now
                            </a>
    
                            <div class="mobile-btn">
                               <a href="https://raynor.chameleonpower.com/?dealer=true&did=0027" target="_blank" class="header-bottom-btn">Design Center</a>
                            </div>
                        </nav>
                    </div>
                    
                </div>

              

            </div>
      </div>
</header>

<header class="header mobile-header" id="myHeader_mobile">
      <div class="container-md">
            <div class="row">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 header-logo">
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
                           <img src="{{$h_path}}" class="img-fluid header-logo-img" alt="Header Logo Imgae" height="93" width="93"></a>
                     @else
                        <a href="{{route('home')}}">
                           <img src="{{asset('front-assets/images/header-logo.webp')}}" class="img-fluid header-logo-img" alt="Header Logo Imgae" height="93" width="93">
                        </a>
                     @endif

                    <div class="mobile-toggle-sec">
                        <div class="menu-toggle">
                            <a href="{{ isset($setting->contact_no) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no) : '' }}" data-bs-toggle="modal" data-bs-target="#locationcontact" class="tel mobile-tel1"><img
                                    src="{{asset('front-assets/src/images/mobile-call-header.svg')}}" class="img-fluid" height="47" width="47" alt="Contact"></a>

                            <button class="navbar-toggler" type="button">
                                <img src="{{asset('front-assets/src/images/mobile-open-bar.webp')}}" class="open-icon" height="47" width="47" alt="Open Menu">
                                <img src="{{asset('front-assets/src/images/mobile-close-brown-icon.webp')}}" class="close-icon"
                                    style="display: none;" alt="Close Menu">

                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 header-menu">
                    <div class="header-menu-mobile">
                        <div class="header-logo-and-close">
                            <a href="{{route('home')}}" class="header-logo" aria-label="Header Logo"><img src="{{$h_path}}" alt="header logo" class="img-fluid" width="93" height="93"></a>
                            <div class="nav-right-sec">
                                    <a href="{{ isset($setting->contact_no) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no) : '' }}" class="tel mobile-tel1" data-bs-toggle="modal" data-bs-target="#locationcontact"><img
                                            src="{{asset('front-assets/src/images/mobile-call-header.svg')}}" class="img-fluid" height="47" width="47" alt="Contact"></a>

                                    <img src="{{asset('front-assets/src/images/mobile-close-brown-icon.webp')}}" alt="" class="mobile-close-icon-new" width="30" height="30">
                            </div>
                        </div>

                    <nav class="navigation">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                               
                              

                                <li class="dropdown">
                                    <a class="dropdown-a submenu" style=" cursor: default;" href="{{route('get.residential.products')}}/">Residential</a>

                                    <ul class="dropdown-menu first-dropdown resfirst_menu" >
                                        <li><a href="{{route('get.residential.products')}}/">Residential</a></li>
                                        
                                        @if(count($residential_menus) > 0)
                                            @foreach($residential_menus as $reskey => $resmenu)
                                                @if($reskey == 'series')
                                                <li class="dropdown sub-dropdown">
                                                    <a class="dropdown-sub-a sub-dropdown-arrow" href="{{route('get.residential.products')}}/">Explore by Series</a>
                                                    @if(count($resmenu) > 0)
                                                        <ul class="dropdown-menu sub-dropdown-menu" >
                                                         @foreach($resmenu as $fkey=>$fval)
                                                            <li class="dropdown sub-inner-dropdown"><a href="{{route('residential.products', [$fval['slug']])}}/">{{$fval['category']}}</a></li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endif

                                                @if($reskey == 'style')
                                                <li class="dropdown sub-dropdown">
                                                    <a class=" dropdown-sub-a sub-dropdown-arrow" href="{{route('get.residential.products')}}/">Explore by Style</a>
                                                    @if(count($resmenu) > 0)
                                                        <ul class="dropdown-menu sub-dropdown-menu" >
                                                         @foreach($resmenu as $fkey=>$fval)
                                                            <li class="dropdown sub-inner-dropdown"><a href="{{route('residential.products', [$fval['slug']])}}/">{{$fval['category']}}</a></li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endif
                                                @if($reskey == 'insulation_type')
                                                <li class="dropdown sub-dropdown">
                                                    <a class=" dropdown-sub-a sub-dropdown-arrow" href="{{route('get.residential.products')}}/">Explore by Insulation Type</a>
                                                    @if(count($resmenu) > 0)
                                                        <ul class="dropdown-menu sub-dropdown-menu" >
                                                         @foreach($resmenu as $fkey=>$fval)
                                                            <li class="dropdown sub-inner-dropdown"><a href="{{route('residential.products', [$fval['slug']])}}/">{{$fval['category']}}</a></li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endif
                                                @if($reskey == 'main')
                                                <li class="dropdown sub-dropdown">
                                                    <a class="dropdown-sub-a sub-dropdown-arrow" href="{{route('get.residential.products')}}/">Openers</a>
                                                    @if(count($resmenu) > 0)
                                                        <ul class="dropdown-menu sub-dropdown-menu">
                                                         @foreach($resmenu as $fkey=>$fval)
                                                            <li class="dropdown sub-inner-dropdown"><a href="{{route('residential.products', [$fval['slug']])}}/">{{$fval['category']}}</a></li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endif

                                            @endforeach
                                        @endif
                                        <li>
                                            <a href="{{route('serviceAndRepair')}}/">Service and Repair</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="dropdown">
                                    <a class="dropdown-a submenu" style="cursor: default;" href="{{route('get.commercial.products')}}/">Commercial</a>

                                    <ul class="dropdown-menu first-dropdown comfirst_menu" >
                                        <li><a href="{{route('get.commercial.products')}}">Commercial</a></li>
                                        
                                        @if(count($commercial_menus) > 0)
                                            @foreach($commercial_menus as $reskey => $resmenu)
                                                @if($reskey == 'door_type')
                                                <li class="dropdown sub-dropdown">
                                                    <a class="dropdown-sub-a sub-dropdown-arrow" href="{{route('get.commercial.products')}}/">Explore by Type</a>
                                                    @if(count($resmenu) > 0)
                                                        <ul class="dropdown-menu sub-dropdown-menu" >

                                                        @foreach($resmenu as $fkey=>$fval)
                                                            
                                                            @php
                                                             $prdctcat = $fval['products'];
                                                             $first = isset($fval['subcategories'][0]) ? $fval['subcategories'][0] : null;
                                                             if(isset($first)){
                                                                unset($fval['subcategories'][0]);
                                                             }
                                                             $subcat = $fval['subcategories'];
                                                            @endphp
                                                            <li class="dropdown sub-inner-dropdown">
                                                                <a href="{{route('commercial.products', [$fval['slug']])}}/" @if(count($subcat) > 0 || count($prdctcat) > 0) class="dropdown-a dropdown-sub-a"  @endif>{{$fval['category']}}</a>
                                                                @if(count($subcat) > 0 || count($prdctcat) > 0)
                                                                <ul class="dropdown-menu sub-inner-dropdown-menu">
                                                                    @if(isset($first))
                                                                        <li><a href="{{route('commercial.products', [$first['slug']])}}/">{{$first['title']}}</a></li>
                                                                    @endif
                                                                    @if(count($prdctcat) > 0)
                                                                        @foreach($prdctcat as $ss=>$vls)
                                                                            <li><a href="{{route('commercial.product_detail', [$fval['slug'],$vls['product_slug']])}}/">{{$vls['list_title']}}</a></li>
                                                                        @endforeach
                                                                    @endif
                                                                    @foreach($subcat as $s=>$vl)
                                                                        <li><a href="{{route('commercial.products', [$vl['slug']])}}/">{{$vl['title']}}</a></li> 
                                                                    @endforeach
                                                                </ul>
                                                                @endif
                                                            </li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endif

                                                @if($reskey == 'application')
                                                <li class="dropdown sub-dropdown">
                                                    <a class=" dropdown-sub-a sub-dropdown-arrow" href="{{route('get.commercial.products')}}/">Explore by Application</a>
                                                    @if(count($resmenu) > 0)
                                                        <ul class="dropdown-menu sub-dropdown-menu">
                                                        @foreach($resmenu as $fkey=>$fval)
                                                            @php
                                                             $subcat = $fval['subcategories'];
                                                            @endphp
                                                            <li class="dropdown sub-inner-dropdown">
                                                                <a href="{{route('commercial.products', [$fval['slug']])}}/">{{$fval['category']}}</a>
                                                                
                                                            </li>
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endif

                                                @if($reskey == 'main')
                                                    @if(count($resmenu) > 0)
                                                        @foreach($resmenu as $fkey=>$fval)
                                                        @if($fval['slug'] == 'secure-and-durable-loading-dock-doors' || $fval['slug'] == 'thermal-efficient-loading-dock-doors')
                                                            @php 
                                                                continue;
                                                            @endphp
                                                        @endif
                                                            <li>
                                                                <a href="{{route('commercial.products', [$fval['slug']])}}/">{{$fval['category']}}</a>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                @endif

                                            @endforeach
                                        @endif
                                      
                                    </ul>
                                </li>

                                


                                 <li @if (Route::currentRouteName() == 'lincoln.garagedoor' || Route::currentRouteName() == 'hastings.garagedoor' ||Route::currentRouteName() == 'serviceareas') class="dropdown active" @else class="dropdown" @endif>
                                    <a class="dropdown-a submenu" href="javascript:;">Locations</a>
    
                                    <ul class="dropdown-menu first-dropdown">
                                        <li>
                                            <a href="{{url('locations/hastings-garage-doors')}}/">Hastings, NE</a>
                                        </li>
                                        <li>
                                            <a href="{{url('locations/lincoln-garage-doors')}}/">Lincoln, NE</a>
                                        </li>
                                       
                                        {{-- <li>
                                            <a href="{{url('service-areas')}}/">Service Areas</a>
                                        </li> --}}
                                       
                                    </ul>
                                </li>


                                <li @if (Route::currentRouteName() == 'frontend.page.index' && Request::route('slug') == 'gallery') class="active" @endif>
                                    <a href="{{ route('frontend.page.index', ['gallery']) }}/">Gallery</a>
                                </li>








                               
                                
                                <li><a href="{{route('about.us')}}/">About</a></li>
                                <li><a href="{{route('contact')}}/">Contact</a></li>
                            </ul>
                            <a href="https://raynor.chameleonpower.com/?dealer=true&did=0027" target="_blank" class="header-design-center">Design Center</a>
    
                            <div class="mobile-btn">
                               <button data-bs-target="#getafreequote" data-bs-toggle="modal" class="header-bottom-btn quote-btn">Get A Quote</button>
                               <a href="https://raynor.chameleonpower.com/?dealer=true&did=0027" target="_blank" class="header-bottom-btn">Design Center</a>
                            </div>
                        </nav>
                    </div>
                    
                </div>

                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 header-right-side">
                    <p>Call Now</p>
                    <a href="{{ isset($setting->contact_no) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no) : '' }}" class="tel">{{ isset($setting->contact_no) ? $setting->contact_no : '' }}</a>
                </div>

            </div>
      </div>
</header>
