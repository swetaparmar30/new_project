@extends('frontend.layouts.index')

@section('title') {{ isset($meta_title) ? $meta_title : '' }} @endsection

@section('description') {{ isset($meta_description) ? $meta_description : '' }} @endsection

@section('robots') noindex @endsection

<style>

.other-service-categories h3.other-service-main-sec-heading::before {

    content: '';

    width: 6px;

    height: 100%;

    background-color: #EAAA00;

    display: inline-block;

    position: absolute;

    left: 0;

    top: 0;

    bottom: 0;

}



.other-service-categories h3.other-service-main-sec-heading {

    padding-left: 24px;

    position: relative;

    font-size: 22px;

    color: #1C1C1C;

    line-height: 32px;

    font-weight: 600;

    margin-bottom: 22px;

}

.menu-contain{

     padding-left: 24px;

}



.mrg-li-residential{

    margin-bottom: 10px;

    margin-top: 10px;

    color: black;

}

.custom-menu li{

    margin-bottom:5px;

}



</style>

@section('content')



@if($sitemaps)

    <section class="other-service-sec sandk-common-padding sandk-common">

        <div class="container-md">

            <div class="other-service-section">

                <div class="row align-items-center">

                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 other-service-content">

                      <h2>Sitemap</h2>

                      <div class="other-service-item-sec first-sec">

                            <div class="row main-row-other-service">



                                <!-- page main -->

                                <div class="other-service-categories col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                                    @if($sitemappage)

                                        <h3 class="other-service-main-sec-heading">Main Pages</h3>

                                    @elseif($sitemappost)

                                        <h3 class="other-service-main-sec-heading">Blog</h3>

                                    @endif



                                    <div class="menu-other-service-main-pages-menu-container menu-contain">

                                        <ul class="custom-menu">



                                            @php

                                                // 🔥 Master Exclude List (Pages + Posts combined)

                                                $excludedUrls = collect($pages_select ?? [])->map(fn($url) => rtrim($url, '/'))->toArray();



                                                // Make sure the sitemap URLs are unique and normalized

                                                $sitemapUrls = collect($pagesSitemapUrls ?? [])->map(fn($url) => rtrim($url, '/'))->unique()->toArray();



                                                // Separate Home page and other pages

                                                $homeUrl = rtrim(url('/'), '/');

                                                $otherPages = array_filter($sitemapUrls, fn($url) => $url !== $homeUrl && !in_array($url, $excludedUrls));



                                                // Sort pages A-Z

                                                sort($otherPages);



                                                // Filter posts and sort A-Z

                                                $postsList = collect($posts ?? [])->filter(function($post) use ($excludedUrls) {

                                                    $postUrl = rtrim(route('front.single_blog_detail', ['slug' => $post->slug]), '/');

                                                    return !in_array($postUrl, $excludedUrls);

                                                })->sortBy('title')->values();

                                            @endphp



                                            {{-- Home Page --}}

                                            @if(in_array($homeUrl, $sitemapUrls) && !in_array($homeUrl, $excludedUrls))

                                                <li>

                                                    <a href="{{ $homeUrl }}/">Home</a>

                                                </li>

                                            @endif



                                            {{-- Other Pages A-Z --}}

                                            @foreach($otherPages as $url)

                                                <li>

                                                    <a href="{{ $url }}/">{{ ucwords(str_replace(['-', '_'], ' ', basename($url))) }}</a>

                                                </li>



                                                @if (strpos($url, '/blog') !== false)

                                                    {{-- Blog Section --}}

                                                    @if($sitemappost && $postsList->count() > 0)

                                                        <div class="sitemap-page-section">

                                                            <ul>

                                                                @foreach($postsList as $post)

                                                                    @php

                                                                        $postUrl = rtrim(route('front.single_blog_detail', ['slug' => $post->slug]), '/');

                                                                    @endphp

                                                                    <li>

                                                                        <a href="{{ $postUrl }}/">{{ $post->title }}</a>

                                                                    </li>

                                                                @endforeach

                                                            </ul>

                                                        </div>

                                                    @endif

                                                @endif

                                            @endforeach





                                        </ul>

                                    </div>

                                </div>

                                <div class="other-service-categories col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                                    @if($sitemappage)

                                        <h3 class="other-service-main-sec-heading">Residential</h3>

                                    @endif

                                    <div class="menu-other-service-main-pages-menu-container">

                                        @if($sitemappage)

                                            <ul class="custom-menu menu-contain">

                                                

                                                @php

                                                    $residential_select_pages = array_map(function ($url) {

                                                        return rtrim($url, '/');

                                                    }, $residential_select ?? []);

                                                @endphp



                                                {{-- Residential main page --}}

                                                @php $mainResidentialUrl = rtrim(route('get.residential.products'), '/'); @endphp

                                                @if(!in_array($mainResidentialUrl, $residential_select_pages))

                                                    <li><a href="{{ route('get.residential.products') }}/">Residential</a></li>

                                                @endif



                                                {{-- Categories --}}

                                                @foreach($residentialCategories as $catUrl)

                                                    @if(!in_array(rtrim($catUrl, '/'), $residential_select_pages))

                                                        <li>

                                                            <a href="{{ $catUrl }}">{{ ucwords(str_replace('-', ' ', basename($catUrl))) }}</a>

                                                        </li>

                                                    @endif

                                                @endforeach



                                                {{-- Products --}}

                                                @foreach($residentialProducts as $prodUrl)

                                                    @if(!in_array(rtrim($prodUrl, '/'), $residential_select_pages))

                                                        <li>

                                                            <a href="{{ $prodUrl }}" target="_blank">{{ ucwords(str_replace('-', ' ', basename($prodUrl))) }}</a>

                                                        </li>

                                                    @endif

                                                @endforeach



                                            </ul>

                                        @endif

                                    </div>

                                </div>





                                <div class="other-service-categories col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                                    @if($sitemappage)

                                        <h3 class="other-service-main-sec-heading">Commercial</h3>

                                    @endif



                                    <div class="menu-other-service-main-pages-menu-container">

                                        @if($sitemappage)

                                            <ul class="custom-menu menu-contain">

                                                @php

                                                    // Remove trailing slashes for comparison

                                                    $commercial_select_pages = isset($commercials_select) ? array_map(fn($url) => rtrim($url, '/'), $commercials_select) : [];

                                                    

                                                @endphp

                                         

                                                @if(isset($commercialUrls) && count($commercialUrls) > 0)

                                                    @foreach($commercialUrls as $url)

                                                        @php

                                                            $trimmedUrl = rtrim($url, '/');

                                                        @endphp



                                                        @if(!in_array($trimmedUrl, $commercial_select_pages))

                                                            <li>

                                                                <a href="{{ $url }}">

                                                                    {{ basename($trimmedUrl) == 'commercial' ? 'Commercial' : ucwords(str_replace(['-', '/'], ' ', basename($trimmedUrl))) }}

                                                                </a>

                                                            </li>

                                                        @endif

                                                    @endforeach

                                                @endif

                                            </ul>

                                        @endif

                                    </div>

                                </div>





                                <!-- categories -->

                              <!--   <div class="other-service-categories col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                                     <h3 class="other-service-main-sec-heading">Categories</h3>

                                   <div class="menu-other-service-main-pages-menu-container">

                                   </div>

                                </div>  -->  





                            </div>      

                        </div>

                    </div>

                </div>

            </div>

        </div>            

    </section>    

@endif

@if(count($client_logo) > 0)

        @include('frontend.includes.client-logo-sec')

    @endif



@endsection