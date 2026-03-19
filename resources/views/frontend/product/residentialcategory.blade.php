
@extends('frontend.layouts.index')
@php
$topLevelKey = array_key_first($result);
@endphp

@section('title') @if(isset($meta_title) && $meta_title != null) {{ $meta_title }}
    @elseif(isset($result[$topLevelKey]['category']['title']) && $result[$topLevelKey]['category']['title'] != '' && $result[$topLevelKey]['category']['title'] != null) {{ $result[$topLevelKey]['category']['title'] }}
    @endif
@endsection

@section('description') {{ isset($meta_description) ? $meta_description : '' }} @endsection
@section('keywords') {{ isset($meta_keywords) ? $meta_keywords : '' }} @endsection

@section('content')

    @if(isset($result) &&  count($result) > 0)
        @if(isset($result))
            @foreach( $result as $key=>$res )
                <section class="inner-product-boxes-section residential-product-boxes-section sandk-common sandk-common-padding sandk-inner-common">
                    <div class="container-md">
                        @if(isset($res['category']))
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center products-headings-section">

                                @if(isset($banner_title) && $banner_title != null)
                                    <h1 class="pro-category-title">{{ $banner_title }}</h1>
                                @elseif(isset($res['category']['title']) && $res['category']['title'] != '')
                                    <h1 class="pro-category-title">{{ $res['category']['title'] }}</h1>
                                @endif

                                @if(isset($res['category']['description']))
                                    @php 
                                        $slug = request()->segment(count(request()->segments()));
                                        $rescatBanerDesc = $res['category']['description'];
                                        if ($slug === 'openers') 
                                        {
                                            $find = 'residential garage door';
                                            $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/">residential garage door</a>';
                                            $rescatBanerDesc = str_replace($find, $replace, $rescatBanerDesc);
                                        }
                                        elseif($slug === 'distinctions-series-custom-garage-doors')
                                        {
                                            $find = '/\bgarage door\b/';
                                            $replace = '<a class="in-link" href="http://127.0.0.1:8000/">garage door</a>';
                                            $rescatBanerDesc = preg_replace($find, $replace, $rescatBanerDesc);
                                        }
                                    @endphp

                                    @if(!empty($rescatBanerDesc))
                                        <p>{!! $rescatBanerDesc !!}</p>
                                    @endif
                     
                                @endif
                            </div>
                        </div>
                        @endif

                        @if((isset($res['product']) && count($res['product']) > 0) || (isset($res['subcategories']) && count($res['subcategories']) > 0))
                            @php
                                if($res['category']['slug'] == 'openers'){
                                    $ddpcount = array_merge($res['product'],$res['subcategories']);
                                }else{
                                    $ddpcount = array_merge($res['product'],$res['subcategories']);
                                }
                                
                                if(count($ddpcount)%2 != 0){
                                    $dlst = end($ddpcount);
                                    array_pop($ddpcount);
                                } 
                                
                            @endphp

                            @if(count($ddpcount) > 0)
                                <div class="row">
                                    @foreach($ddpcount as $dkey => $dval)
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 products-box-section">
                                            <article>

                                                @if(isset($dval['slug']))
                                                        @if(isset($dval['image']) && $dval['image'] != null && $dval['image'] != '')
                                                            @if(isset($dval['link_category']) && ($dval['link_category'] != null || $dval['link_category'] != ''))
                                                                <a href="{{route('residential.products', [$dval['link_category']])}}/">
                                                                    <img src="{{$dval['image']}}" width="auto" height="auto" class="img-fluid" alt="">
                                                                </a>
                                                            @elseif(isset($dval['link_sub_category']) && ($dval['link_sub_category'] != null || $dval['link_sub_category'] != ''))
                                                                <a href="{{route('residential.products', [$dval['link_sub_category']])}}/">
                                                                    <img src="{{$dval['image']}}" width="auto" height="auto" class="img-fluid" alt="">
                                                                </a>
                                                            @else
                                                                <a href="{{route('residential.products', [$dval['slug']])}}/">
                                                                    <img src="{{$dval['image']}}" width="auto" height="auto" class="img-fluid" alt="">
                                                                </a>
                                                            @endif
                                                        @endif

                                                        @if(isset($dval['title']))

                                                            @if(isset($dval['link_category']) && ($dval['link_category'] != null || $dval['link_category'] != ''))
                                                                <h3><a href="{{route('residential.products', [$dval['link_category']])}}/">{{ $dval['title'] }}</a></h3>
                                                            @elseif($dval['link_sub_category'] != null || $dval['link_sub_category'] != '')
                                                                <h3><a href="{{route('residential.products', [$dval['link_sub_category']])}}/">{{ $dval['title'] }}</a></h3>
                                                            @else
                                                                <h3><a href="{{route('residential.products', [$dval['slug']])}}/">{{ $dval['title'] }}</a></h3>
                                                            @endif
                                                        @endif

                                                        @if(isset($dval['categorysubtitle']))
                                                            <h5>{{ $dval['categorysubtitle'] }}</h5>
                                                        @endif

                                                        @if(isset($dval['description']))
                                                            <p>{{ $dval['description'] }}</p>
                                                        @endif

                                                        @if(isset($dval['bullet']))
                                                            @php
                                                                if(strpos($dval['bullet'], "//") !== false){
                                                                    $bul = explode('//',$dval['bullet']);
                                                                }else{
                                                                    $bul = explode(',',$dval['bullet']);
                                                                }
                                                                
                                                            @endphp
                                                            @if(isset($bul) && count($bul) > 0)
                                                            <ul>
                                                                @foreach($bul as $bpoint)
                                                                    <li>{{$bpoint}}</li>
                                                                @endforeach
                                                            </ul>
                                                            @endif
                                                        @endif
                                                @else

                                                    @if(isset($dval['list_image']) && $dval['list_image'] != null && $dval['list_image'] != '')

                                                            @php
                                                                $imgsl = null;
                                                                if(isset($dval['list_images'])){
                                                                    foreach($dval['list_images'] as $kim=>$kvl){
                                                                        if($kvl['category'] == $res['category']['slug']){
                                                                            $imgsl = $kvl['image'];
                                                                        }
                                                                    }
                                                                    if(isset($imgsl)){
                                                                        $imgp = $imgsl;
                                                                    }else{
                                                                        $imgp = $dval['list_image'];
                                                                    }
                                                                }

                                                            // build product link logic
                                                            if(isset($dval['direct_file']) && $dval['direct_file'] != null){
                                                                $productLink = $dval['direct_file'];
                                                                $isExternal = true;
                                                            } elseif(isset($dval['maincat']) && $dval['maincat'] != ''){
                                                                // product link if maincat exists
                                                                $productLink = route('residential.products', $dval['maincat'].'/'.$dval['product_slug']);
                                                                $isExternal = false;
                                                            } else {
                                                                // fallback product link (normal)
                                                                $productLink = route('residential.products', $dval['product_slug']);
                                                                $isExternal = false;
                                                            }
                                                            @endphp
                                                       <!--  @if(isset($dval['direct_file']) && $dval['direct_file'] != null)
                                                            <a href="{{$dval['direct_file']}}" target="_blank">
                                                                <img src="{{$imgp}}" width="auto" height="auto" class="img-fluid" alt="">
                                                            </a>
                                                        @else
                                                            <a href="{{route('residential.product_detail', [$res['category']['slug'], $dval['product_slug']])}}/">
                                                                <img src="{{$imgp}}" width="auto" height="auto" class="img-fluid" alt="">
                                                            </a>
                                                        @endif -->

                                                         <a href="{{ $productLink }}/" @if($isExternal) target="_blank" @endif>
                                                            <img src="{{ $imgp }}" width="auto" height="auto" class="img-fluid" alt="">
                                                        </a>
                                                    @endif

                                                    @if(isset($dval['list_title']))
                                                       <!--  @if(isset($dval['direct_file']) && $dval['direct_file'] != null)
                                                            <h3><a href="{{$dval['direct_file']}}" target="_blank">{{ $dval['list_title'] }}</a></h3>
                                                        @else
                                                            <h3><a href="{{route('residential.product_detail', [$res['category']['slug'], $dval['product_slug']])}}/">{{ $dval['list_title'] }}</a></h3>
                                                        @endif -->

                                                        <h3>
                                                            <a href="{{ $productLink }}/" @if($isExternal) target="_blank" @endif>
                                                                {{ $dval['list_title'] }}
                                                            </a>
                                                        </h3>
                                                    @endif

                                                    @if(isset($dval['list_subtitle']))
                                                        <h5>{{ $dval['list_subtitle'] }}</h5>
                                                    @endif

                                                    @if(isset($dval['list_description']))
                                                        @php
                                                            $slug = request()->segment(count(request()->segments())); 

                                                            $resCatDescription = $dval['list_description'];

                                                            if ($slug === 'aspen-series' && $dval['product_slug'] === 'aspen-ap200n') 
                                                            {
                                                                $find = 'contemporary';
                                                                $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/contemporary-style-garage-doors/">contemporary garage door</a>';
                                                                $resCatDescription = str_replace($find, $replace, $resCatDescription);
                                                            }
                                                            elseif ($slug === 'aspen-series' && $dval['product_slug'] === 'aspen-ap138')
                                                            {
                                                                $find = 'polyurethane insulation';
                                                                $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/polyurethane-insulated-garage-doors/">polyurethane insulation</a>';
                                                                $resCatDescription = str_replace($find, $replace, $resCatDescription);
                                                            }
                                                            elseif ($slug === 'advantage-series-steel-pan-garage-doors' && $dval['product_slug'] === 'buildmark-steel-pan-garage-doors')
                                                            {
                                                                $find = '/\bgarage door\b/';
                                                                $replace = '<a class="in-link" href="http://127.0.0.1:8000/">garage door</a>';
                                                                $resCatDescription = preg_replace($find, $replace, $resCatDescription);
                                                            }
                                                            elseif ($slug === 'classic-style-garage-doors' && $dval['product_slug'] === 'aspen-ap200')
                                                            {
                                                                $find = 'polyurethane insulation';
                                                                $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/polyurethane-insulated-garage-doors/">polyurethane insulation</a>';
                                                                $resCatDescription = str_replace($find, $replace, $resCatDescription);
                                                            }
                                                            elseif ($slug === 'classic-style-garage-doors' && $dval['product_slug'] === 'encore-en200')
                                                            {
                                                                $find = 'polystyrene insulation';
                                                                $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/polystyrene-insulated-garage-doors/">polystyrene insulation</a>';
                                                                $resCatDescription = str_replace($find, $replace, $resCatDescription);
                                                            }
                                                            elseif ($slug === 'farmhouse-style-garage-doors' && $dval['product_slug'] === 'encore-en200')
                                                            {
                                                                $find = 'residential garage door';
                                                                $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/">residential garage door</a>';
                                                                $resCatDescription = str_replace($find, $replace, $resCatDescription);
                                                            }
                                                            elseif ($slug === 'contemporary-style-garage-doors' && $dval['product_slug'] === 'encore-en200')
                                                            {
                                                                $find = 'residential garage door';
                                                                $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/">residential garage door</a>';
                                                                $resCatDescription = str_replace($find, $replace, $resCatDescription);
                                                            }
                                                            elseif ($slug === 'openers' && $dval['product_slug'] === 'ultra-ii-wifi')
                                                            {
                                                                $find = 'residential garage door';
                                                                $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/">residential garage door</a>';
                                                                $resCatDescription = str_replace($find, $replace, $resCatDescription);
                                                            }
                                                            elseif ($slug === 'openers' && $dval['product_slug'] === 'airman-ii-with-wifi')
                                                            {
                                                                $find = 'residential garage door';
                                                                $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/">residential garage door</a>';
                                                                $resCatDescription = str_replace($find, $replace, $resCatDescription);
                                                            }
                                                            elseif ($slug === 'distinctions-series-custom-garage-doors' && $dval['product_slug'] === 'revival-wood-collection')
                                                            {
                                                                $find = 'wood garage doors';
                                                                $replace = '<a class="in-link" href="http://127.0.0.1:8000/residential/woodlook-garage-doors/">wood garage doors</a>';
                                                                $resCatDescription = str_replace($find, $replace, $resCatDescription);
                                                            }

                                                        @endphp

                                                        @if(!empty($resCatDescription))
                                                            <p>{!! $resCatDescription !!}</p>
                                                        @endif
                                                      
                                                    @endif
                                                    
                                                    @if(isset($dval['list_bullet']) && count($dval['list_bullet']) > 0)
                                                    <ul>
                                                        @foreach($dval['list_bullet'] as $bpoint)
                                                            <li>{{$bpoint}}</li>
                                                        @endforeach
                                                    </ul>
                                                    @endif
                                                @endif
                                                <div class="learn-more-btn-sec">
                                                    @if(isset($dval['product_slug']))
                                                            <!-- @if(isset($dval['direct_file']) && $dval['direct_file'] != null)
                                                                <a href="{{$dval['direct_file']}}" target="_blank" class="common-btn">Learn More</a>
                                                            @else
                                                                <a href="{{route('residential.product_detail', [$res['category']['slug'], $dval['product_slug']])}}/" class="common-btn">Learn More</a>
                                                            @endif -->

                                                            <a href="{{ $productLink }}/" @if($isExternal) target="_blank" @endif class="common-btn">Learn More</a>

                                                    @endif
                                                    @if(isset($dval['slug']))
                                                            
                                                            @if(isset($dval['link_category']) && ($dval['link_category'] != null || $dval['link_category'] != ''))
                                                                <a href="{{route('residential.products', [$dval['link_category']])}}/" class="common-btn">Learn More</a>
                                                            @elseif($dval['link_sub_category'] != null || $dval['link_sub_category'] != '')
                                                                <a href="{{route('residential.products', [$dval['link_sub_category']])}}/" class="common-btn">Learn More</a>
                                                            @else
                                                                <a href="{{route('residential.products', [$dval['slug']])}}/" class="common-btn">Learn More</a>
                                                            @endif
                                                    @endif
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            @if(isset($dlst))
                                            @if((isset($dlst['categorytitle']) && $dlst['categorytitle'] != '') || (isset($dlst['list_title']) && $dlst['list_title'] != ''))
                                                <div class="row row-reverse lst_section @if(count($ddpcount) == 0) h_div @endif">
                                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 products-box-section products-full-box-section">
                                                        <article>
                                                        <div class="row">
                                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="full-box-sec">
                                                                    @if(isset($dlst['slug']))

                                                                        @if(isset($dlst['title']))
                                                                            @if($dlst['link_category'] != null || $dlst['link_category'] != '')
                                                                                <h3><a href="{{route('residential.products', [$dlst['link_category']])}}/">{{ $dlst['title'] }}</a></h3>
                                                                            @elseif($dlst['link_sub_category'] != null || $dlst['link_sub_category'] != '')
                                                                                <h3><a href="{{route('residential.products', [$dlst['link_sub_category']])}}/">{{ $dlst['title'] }}</a></h3>
                                                                            @else
                                                                                <h3><a href="{{route('residential.products', [$dlst['slug']])}}/">{{ $dlst['title'] }}</a></h3>
                                                                            @endif
                                                                        @endif

                                                                        @if(isset($dlst['categorysubtitle']))
                                                                            <h5>{{ $dlst['categorysubtitle'] }}</h5>
                                                                        @endif

                                                                        @if(isset($dlst['description']))
                                                                            <p>{{ $dlst['description'] }}</p>
                                                                        @endif

                                                                        @if(isset($dlst['bullet']))
                                                                            @php
                                                                                if(strpos($dlst['bullet'], "//") !== false){
                                                                                    $bul = explode('//',$dlst['bullet']);
                                                                                }else{
                                                                                    $bul = explode(',',$dlst['bullet']);
                                                                                }
                                                                            @endphp
                                                                            @if(isset($bul) && count($bul) > 0)
                                                                            <ul>
                                                                                @foreach($bul as $bpoint)
                                                                                    <li>{{$bpoint}}</li>
                                                                                @endforeach
                                                                            </ul>
                                                                            @endif
                                                                        @endif

                                                                    @else
                                                                        @if(isset($dlst['list_title']))
                                                                            @php
                                                                                if(isset($dlst['direct_file']) && $dlst['direct_file'] != null){
                                                                                    $titleLink = $dlst['direct_file'];
                                                                                    $isExternal = true;
                                                                                } elseif(isset($dlst['maincat']) && $dlst['maincat'] != ''){
                                                                                    $titleLink = route('residential.products', $dlst['maincat'].'/'.$dlst['product_slug']);
                                                                                    $isExternal = false;
                                                                                } else {
                                                                                    $titleLink = route('residential.products', $dlst['product_slug']);
                                                                                    $isExternal = false;
                                                                                }
                                                                            @endphp
                                                                           <!--  @if(isset($dlst['direct_file']) && $dlst['direct_file'] != null)
                                                                                <h3><a href="{{$dval['direct_file']}}" target="_blank">{{ $dlst['list_title'] }}</a></h3>
                                                                            @else
                                                                                <h3><a href="{{route('residential.product_detail', [$res['category']['slug'], $dlst['product_slug']])}}/">{{ $dlst['list_title'] }}</a></h3>
                                                                            @endif -->

                                                                            <h3>
                                                                                <a href="{{ $titleLink }}/" @if($isExternal) target="_blank" @endif>
                                                                                    {{ $dlst['list_title'] }}
                                                                                </a>
                                                                            </h3>
                                                                        @endif

                                                                        @if(isset($dlst['list_subtitle']))
                                                                            <h5>{{ $dlst['list_subtitle'] }}</h5>
                                                                        @endif

                                                                        @if(isset($dlst['list_description']))

                                                                            @php
                                                                                $slug = request()->segment(count(request()->segments())); 

                                                                                $resFullCatDesc = $dlst['list_description'];

                                                                                if ($slug === 'encore-series' && $dlst['product_slug'] === 'encore-en200') 
                                                                                {
                                                                                    $find = [
                                                                                        'residential garage door',
                                                                                        'polystyrene insulation'
                                                                                    ];
                                                                                    $replace = [
                                                                                        '<a class="in-link" href="http://127.0.0.1:8000/residential/">residential garage door</a>',
                                                                                        '<a class="in-link" href="http://127.0.0.1:8000/residential/polystyrene-insulated-garage-doors/">polystyrene insulation</a>'
                                                                                    ];

                                                                                    $resFullCatDesc = str_replace($find, $replace, $resFullCatDesc);
                                                                                }
                                                                                
                                                                            @endphp

                                                                            @if(!empty($resFullCatDesc))
                                                                                <p>{!! $resFullCatDesc !!}</p>
                                                                            @endif

                                                                        @endif

                                                                        @if(isset($dlst['list_bullet']) && count($dlst['list_bullet']) > 0)
                                                                        <ul>
                                                                            @foreach($dlst['list_bullet'] as $bpoint)
                                                                                <li>{{$bpoint}}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                        @endif
                                                                    @endif
                                                                <div class="learn-more-btn-sec">
                                                                    @if(isset($dlst['product_slug']))
                                                                       <!--  @if(isset($dlst['direct_file']) && $dlst['direct_file'] != null)
                                                                            <a href="{{$dval['direct_file']}}" target="_blank" class="common-btn">Learn More</a>
                                                                        @else
                                                                            <a href="{{route('residential.product_detail', [$res['category']['slug'], $dlst['product_slug']])}}" class="common-btn">Learn More</a>
                                                                        @endif -->
                                                                        <a href="{{ $titleLink }}/" @if($isExternal) target="_blank" @endif class="common-btn">Learn More</a>

                                                                    @endif
                                                                    

                                                                    @if(isset($dlst['link_category']) && ($dlst['link_category'] != null || $dlst['link_category'] != ''))
                                                                        <a href="{{route('residential.products', [$dlst['link_category']])}}/" class="common-btn">Learn More</a>
                                                                    @elseif(isset($dlst['link_sub_category']) && ($dlst['link_sub_category'] != null || $dlst['link_sub_category'] != ''))
                                                                        <a href="{{route('residential.products', [$dlst['link_sub_category']])}}/" class="common-btn">Learn More</a>
                                                                    @else
                                                                        @if(isset($dlst['slug']))<a href="{{route('residential.products', [$dlst['slug']])}}/" class="common-btn">Learn More</a>@endif
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            @if(isset($dlst['slug']))
                                                                @if(isset($dlst['image']) && $dlst['image'] != null && $dlst['image'] != '')
                                                                    @if($dlst['link_category'] != null || $dlst['link_category'] != '')
                                                                        <a href="{{route('residential.products', [$dlst['link_category']])}}/" class="image-link">
                                                                            <img src="{{$dlst['image']}}" width="auto" height="auto" class="img-fluid" alt="">
                                                                        </a>
                                                                    @elseif($dlst['link_sub_category'] != null || $dlst['link_sub_category'] != '')
                                                                        <a href="{{route('residential.products', [$dval['link_sub_category']])}}/" class="image-link">
                                                                            <img src="{{$dlst['image']}}" width="auto" height="auto" class="img-fluid" alt="">
                                                                        </a>
                                                                    @else
                                                                        <a href="{{route('residential.products', [$dlst['slug']])}}/" class="image-link">
                                                                            <img src="{{$dlst['image']}}" width="auto" height="auto" class="img-fluid" alt="">
                                                                        </a>
                                                                    @endif
                                                                @endif
                                                            @else
                                                                @if(isset($dlst['list_image']) && $dlst['list_image'] != null && $dlst['list_image'] != '')
                                                                    @php
                                                                        $imgsls = null;
                                                                        if(isset($dlst['list_images'])){
                                                                            foreach($dlst['list_images'] as $kim=>$kvl){
                                                                                if($kvl['category'] == $res['category']['slug']){
                                                                                    $imgsls = $kvl['image'];
                                                                                }
                                                                            }
                                                                            if(isset($imgsls)){
                                                                                $imgps = $imgsls;
                                                                            }else{
                                                                                $imgps = $dlst['list_image'];
                                                                            }
                                                                        }
                                                                         // build product link logic
                                                                        if(isset($dlst['direct_file']) && $dlst['direct_file'] != null){
                                                                            $titleLink = $dlst['direct_file'];
                                                                            $isExternal = true;
                                                                        } elseif(isset($dlst['maincat']) && $dlst['maincat'] != ''){
                                                                            // product link if maincat exists
                                                                            $titleLink = route('residential.products', $dlst['maincat'].'/'.$dlst['product_slug']);
                                                                            $isExternal = false;
                                                                        } else {
                                                                            // fallback product link (normal)
                                                                            $titleLink = route('residential.products', $dlst['product_slug']);
                                                                            $isExternal = false;
                                                                        }
                                                                    @endphp
                                                                    <!-- @if(isset($dlst['direct_file']) && $dlst['direct_file'] != null)
                                                                        <a href="{{$dval['direct_file']}}" target="_blank" class="image-link">
                                                                            <img src="{{$imgps}}" width="auto" height="auto" class="img-fluid" alt="">
                                                                        </a>
                                                                    @else
                                                                        <a href="{{route('residential.product_detail', [$res['category']['slug'], $dlst['product_slug']])}}/"  class="image-link">
                                                                            <img src="{{$imgps}}" width="auto" height="auto" class="img-fluid" alt="">
                                                                        </a>
                                                                    @endif -->

                                                                     <a href="{{ $titleLink }}/" @if($isExternal) target="_blank" @endif class="image-link">
                                                                        <img src="{{$imgps}}" width="auto" height="auto" class="img-fluid" alt="">
                                                                    </a>
                                                                @endif
                                                            @endif
                                                        </div>      
                                                    </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                  
                        @endif
                    </div>
                </section>
            @endforeach
        @endif
    @endif
    
    @include('frontend.includes.designs-sec')

    @include('frontend.includes.quote-sec')
    @if(count($client_logo) > 0)
        @include('frontend.includes.client-logo-sec')
    @endif

@endsection