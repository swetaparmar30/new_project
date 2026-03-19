@extends('frontend.layouts.index')
@section('title') {{ isset($meta_title) ? $meta_title : '' }} @endsection
@section('description') {{ isset($meta_description) ? $meta_description : '' }} @endsection
@section('robots') noindex @endsection
@section('content')
<section class="faq-sec sandk-common-padding sandk-common sitemap-page-section">
        <div class="container-md">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="sitemap">Sitemap</h1>
                </div>
            </div>
        </div>

    <section>  
        <div class="container-md">
                <div class="row"> 
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul>
                      
                            @if(!in_array(route('home').'/', $exselectpages))
                            <li>
                                <a href="{{route('home')}}/">Home</a>
                            </li>
                            @endif
                            @if(!in_array(route('about.us').'/', $exselectpages))
                            <li>
                                <a href="{{route('about.us')}}/">About</a>
                            </li>
                            @endif
                            @if(!in_array(route('contact').'/', $exselectpages))
                            <li>
                                <a href="{{route('contact')}}/">Contact</a>
                            </li>
                            @endif
                            @php
                                $excludedSlugs = ['sitemap', 'newport-garage-doors', 'dover-garage-doors', 'georgetown-garage-doors','salisbury-garage-doors'];
                            @endphp
                            @foreach($pages as $page)
                                @if(!in_array($page->slug, $excludedSlugs) && !in_array(route('frontend.page.index',['slug' => $page->slug]).'/', $exselectpages))
                                    <li>
                                        <a href="{{route('frontend.page.index',['slug' => $page->slug])}}/">{{$page->title}}</a>
                                    </li>
                                    @if(isset($page->id) && $page->id == 1)

                                        @if(isset($posts) && count($posts) > 0)
                                            <ul>
                                            @foreach($posts as $post)
                                                @php
                                                    $purl = route('front.single_blog_detail',['slug' => $post->slug]);
                                                @endphp
                                                @if(!in_array($purl, $exselectposts))
                                                <li>
                                                    <a href="{{$purl}}/">{{$post->title}}</a>
                                                </li>
                                                @endif
                                            @endforeach
                                            </ul>
                                        @endif
                                    @endif

                                @endif
                            @endforeach
                            <!-- for location -->


                            @foreach ($locations as $loc)
                                @if (!empty($loc->slug))
                                    @if(!in_array(url('locations/' . $loc->slug).'/', $exselectpages))
                                    <li>
                                        <a href="{{ url('locations/' . $loc->slug) }}/">
                                            {{ ucwords(str_replace('-', ' ', $loc->slug)) }}
                                        </a>
                                    </li>
                                    @endif
                                @endif
                            @endforeach

                            <li>
                                <a href="{{route('get.residential.products')}}">Residential</a>
                            </li>
                          

                            @if (count($residential_menus) > 0)
                                <ul>
                                    @foreach ($residential_menus as $reskey => $resmenu)
                                        @if (count($resmenu) > 0)
                                            @foreach ($resmenu as $fkey => $fval)
                                                @if(!in_array(route('residential.products', [$fval['slug']]).'/', $rexselectpages))
                                                <li>
                                                    <a href="{{ route('residential.products', [$fval['slug']]) }}/">
                                                        {{ $fval['title'] }}
                                                    </a>
                                                </li>
                                                @endif
                                                @if(count($fval['subcategories']) > 0)
                                                    @foreach ($fval['subcategories'] as $fkey1 => $fval1)
                                                        @if(!in_array(route('residential.products', [$fval1['slug']]).'/', $rexselectpages))
                                                        <li>
                                                            <a href="{{ route('residential.products', [$fval1['slug']]) }}/">
                                                                {{ $fval1['title'] }}
                                                            </a>
                                                        </li>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    @php
                                        $dataproduct = App\Models\Apiproductdata::select('subcategory','maincat', 'product_json')
                                            ->where('menutype', 'residential')
                                            ->get()
                                            ->unique('product_json')
                                            ->values()
                                            ->toArray();
                                    @endphp 

                                    @if(count($dataproduct) > 0)
                                        @foreach($dataproduct as $fkey => $dval)
                                        @php

                                            $products_j = json_decode($dval['product_json'],true);

                                            if(isset($products_j['direct_file']) && $products_j['direct_file'] != null){
                                                $productLink = $products_j['direct_file'];
                                                $isExternal = true;
                                            }elseif($dval['subcategory'] == 'smart-garage-accessories'){
                                                $productLink = route('residential.products', 'openers/'.$products_j['product_slug']);
                                                $isExternal = false;
                                            } elseif(isset($dval['maincat']) && $dval['maincat'] != ''){
                                                $productLink = route('residential.products', $dval['maincat'].'/'.$products_j['product_slug']);
                                                $isExternal = false;
                                            } else {
                                                $productLink = route('residential.products', $products_j['product_slug']);
                                                $isExternal = false;
                                            }
                                        @endphp
                                        <li>
                                            <a href="{{ $productLink }}/" @if($isExternal) target="_blank" @endif>
                                                {{ strip_tags($products_j['product_title']) }}
                                            </a>
                                        </li>
                                        @endforeach
                                    @endif

                                          
                                </ul>
                            @endif
                            <br>

                             
                           <!-- new service area -->
                            {{-- <li>
                                <a href="{{route('serviceAndRepair')}}/">Service and Repair</a>
                            </li> --}}


                            @foreach ($serviceRepair as $ser)
                                @if (!empty($ser->slug))
                                    @if(!in_array(url($ser->slug).'/', $exselectpages))
                                    <li>
                                        <a href="{{ url( $ser->slug) }}/">
                                            {{ ucwords(str_replace('-', ' ', $ser->slug)) }}
                                        </a>
                                    </li>
                                    @endif
                                @endif
                            @endforeach
                            
                            @if(!in_array(route('serviceareas').'/', $exselectpages))
                            <li>
                                <a href="{{route('serviceareas')}}/">Service Areas</a>
                            </li>
                            @endif

                            @foreach ($serviceAreas as $serv)
                                @if (!empty($serv->slug))
                                    @if(!in_array(url('service-areas/' . $serv->slug).'/', $exselectpages))
                                    <li>
                                        <a href="{{ url('service-areas/' . $serv->slug) }}/">
                                            {{ ucwords(str_replace('-', ' ', $serv->slug)) }}
                                        </a>
                                    </li>
                                    @endif
                                @endif
                            @endforeach
                           
                        
                            <br>
                            <!-- end -->


                            <li>
                                <a href="{{route('get.commercial.products')}}/">Commercial</a>
                            </li>

                            <!-- @if (count($commercial_menus) > 0)
                                <ul>
                                    @foreach ($commercial_menus as $reskey => $resmenu)
                                        @if (count($resmenu) > 0)
                                            @foreach ($resmenu as $fkey => $fval)
                                                <li>
                                                    <a href="{{ route('commercial.products', [$fval['slug']]) }}/">
                                                        {{ $fval['title'] }}
                                                    </a>
                                                </li>
                                                @if(count($fval['subcategories']) > 0)
                                                    @foreach ($fval['subcategories'] as $fkey1 => $fval1)
                                                    <li>
                                                        <a href="{{ route('commercial.products', [$fval1['slug']]) }}/">
                                                            {{ $fval1['title'] }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    @php
                                        $dataproduct = App\Models\Apiproductdata::select('subcategory','maincat', 'product_json')
                                            ->where('menutype', 'commercial')
                                            ->get()
                                            ->unique('product_json')
                                            ->values()
                                            ->toArray();
                                    @endphp 

                                    @if(count($dataproduct) > 0)
                                        @foreach($dataproduct as $fkey => $dval)
                                        @php

                                            $products_j = json_decode($dval['product_json'],true);

                                            if(isset($products_j['direct_file']) && $products_j['direct_file'] != null){
                                                $productLink = $products_j['direct_file'];
                                                $isExternal = true;
                                            }elseif($dval['subcategory'] == 'smart-garage-accessories'){
                                                $productLink = route('commercial.products', 'openers/'.$products_j['product_slug']);
                                                $isExternal = false;
                                            } elseif(isset($dval['maincat']) && $dval['maincat'] != ''){
                                                $productLink = route('commercial.products', $dval['maincat'].'/'.$products_j['product_slug']);
                                                $isExternal = false;
                                            } else {
                                                $productLink = route('commercial.products', $products_j['product_slug']);
                                                $isExternal = false;
                                            }
                                        @endphp
                                        <li>
                                            <a href="{{ $productLink }}/" @if($isExternal) target="_blank" @endif>
                                                {{ strip_tags($products_j['product_title']) }}
                                            </a>
                                        </li>
                                        @endforeach
                                    @endif                                          
                                </ul>
                            @endif -->

                            <!-- ronak code -->
                            @php
                                $datacategorys = App\Models\Apicategorydata::where('menutype', 'commercial')
                                     ->where('category', '!=', 'traffic-doors')
                                    ->get()
                                    ->unique('category')
                                    ->values()
                                    ->toArray();
                            @endphp 
                            @if(count($datacategorys) > 0)
                                <ul>
                                    @foreach($datacategorys as $cates => $cate)
                                    @php
                                        $category_json = json_decode($cate['category_json'],true);
                                    @endphp
                                        @if(!in_array(route('commercial.products', [$cate['category']]).'/', $cexselectpages))
                                        <li>
                                            <a href="{{ route('commercial.products', [$cate['category']]) }}/">
                                                {{ $category_json['category'] }}
                                            </a>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif

                            @php
                                $datasubcategorys = App\Models\Apisubcategorydata::where('menutype', 'commercial')
                                    ->whereNotIn('subcategory', ['sectional-thermaseal-doors', 'thermaseal', 'thermaseal-thermal-sectional-insulated-steel-doors', 'extruded-alumaview-aluminum-rail-and-stile-doors', 'alumaview-aluminum-rail-and-stile-doors', 'firehoist-operators', 'energycore', 'rolling-steel-solutions', 'controlhoist-commercial-door-operators', 'steelpro-sectional-ribbed-steel-overhead-doors', 'customized-solutions','th160-thermal-sectional-door'])
                                    ->get()
                                    ->unique('subcategory')
                                    ->values()
                                    ->toArray();
                            @endphp 

                            @if(count($datacategorys) > 0)
                                <ul>
                                    @foreach($datasubcategorys as $subcates => $subcate)
                                        @php
                                            $category_json_sub = json_decode($subcate['category_json'],true);
                                        @endphp
                                        @if(!in_array(route('commercial.products', [$subcate['subcategory']]).'/', $cexselectpages))
                                        <li>
                                            <a href="{{ route('commercial.products', [$subcate['subcategory']]) }}/">
                                                {{ $category_json_sub['title'] }}
                                            </a>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif

                         
                            @php
                                $dataproduct = App\Models\Apiproductdata::select('category', 'subcategory','maincat', 'product_json')
                                    ->where('menutype', 'commercial')->whereNotIn('subcategory', ['steelform-series', 'steelform-sectional-ribbed-steel-overhead-doors'])
                                    ->get()
                                    ->unique('product_json')
                                    ->values()
                                    ->toArray();
                            @endphp 
                            
                            @if(count($dataproduct) > 0)
                                <ul>
                                    @foreach($dataproduct as $fkey => $dval)
                                    @php

                                        $products_j_data = json_decode($dval['product_json'],true);
                                        if(isset($products_j_data['product_slug']) && $products_j_data['product_slug'] == 'energycore-ec200') {
                                            continue;
                                        }


                                        if(isset($products_j_data['direct_file']) && $products_j_data['direct_file'] != null){
                                            $productLink = $products_j_data['direct_file'];
                                            $isExternal = true;
                                        }elseif($dval['subcategory'] == 'openers'){
                                            $productLink = route('commercial.products', 'openers/'.$products_j_data['product_slug']);
                                            $isExternal = false;
                                        } elseif(isset($dval['maincat']) && $dval['maincat'] != ''){
                                            $productLink = route('commercial.products', $dval['maincat'].'/'.$products_j_data['product_slug']);
                                            $isExternal = false;
                                        } else {
                                            $productLink = route('commercial.products', $dval['category'].'/'.$products_j_data['product_slug']);
                                            $isExternal = false;
                                        }
                                    @endphp

                                    @if(!in_array($productLink.'/', $cexselectpages))
                                    <li>
                                        <a href="{{ $productLink }}/" @if($isExternal) target="_blank" @endif>
                                            {{ strip_tags($products_j_data['product_title']) }}
                                        </a>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            @endif
                            <!-- end -->

                           

                           
                        </ul>
                    </div>
                </div>
        </div>
    </section>
</section>

@if(count($client_logo) > 0)
        @include('frontend.includes.client-logo-sec')
    @endif

@endsection