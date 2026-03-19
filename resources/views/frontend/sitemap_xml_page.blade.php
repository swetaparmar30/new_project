<?php
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
        xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
    
    @if(!in_array(route('home').'/', $exselectpages))
    <url>
        <loc>{{route('home')}}/</loc>
        <lastmod>2024-02-24T09:52:56+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    @endif
    @if(!in_array(route('about.us').'/', $exselectpages))
    <url>
        <loc>{{route('about.us')}}/</loc>
        <lastmod>2024-07-30T09:52:56+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    @endif
    @if(!in_array(route('contact').'/', $exselectpages))
    <url>
        <loc>{{route('contact')}}/</loc>
        <lastmod>2024-07-30T09:52:56+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    @endif
    @php
        $excludedSlugs = ['sitemap', 'newport-garage-doors', 'dover-garage-doors', 'georgetown-garage-doors', 'salisbury-garage-doors'];
    @endphp

    @foreach($pages as $page)
        @if(!in_array($page->slug, $excludedSlugs) && !in_array(route('frontend.page.index',['slug' => $page->slug]).'/', $exselectpages))
            <url>
                <loc>{{ route('frontend.page.index', ['slug' => $page->slug]) }}/</loc>
                <lastmod>2024-07-30T09:52:56+00:00</lastmod>
                <priority>0.80</priority>
            </url>
        @endif
    @endforeach


    @foreach ($locations as $loc)
        @if (!empty($loc->slug))
            @if(!in_array(url('locations/' . $loc->slug).'/', $exselectpages))
            <url>
                <loc>{{ url('locations/' . $loc->slug) }}/</loc>
                <lastmod>{{ $loc->updated_at->tz('UTC')->toAtomString() }}</lastmod>
                <priority>0.80</priority>
            </url>
            @endif
        @endif
    @endforeach

    <url>
        <loc>{{route('get.residential.products')}}/</loc>
        <lastmod>2024-07-30T09:52:56+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    @if (count($residential_menus) > 0)
 
        @foreach ($residential_menus as $reskey => $resmenu)
            @if (count($resmenu) > 0)
                @foreach ($resmenu as $fkey => $fval)
                    @if(!in_array(route('residential.products', [$fval['slug']]).'/', $rexselectpages))
                    <url>
                        <loc>{{ route('residential.products', [$fval['slug']]) }}/</loc>
                        <lastmod>2024-07-30T09:52:56+00:00</lastmod>
                        <priority>0.80</priority>
                    </url>
                    @endif
                   
                    @if(count($fval['subcategories']) > 0)
                        @foreach ($fval['subcategories'] as $fkey1 => $fval1)
                            @if(!in_array(route('residential.products', [$fval1['slug']]).'/', $rexselectpages))
                            <url>
                                <loc>{{ route('residential.products', [$fval1['slug']]) }}/</loc>
                                <lastmod>2024-07-30T09:52:56+00:00</lastmod>
                                <priority>0.80</priority>
                            </url>
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

            <url>
                <loc>{{ $productLink }}/</loc>
                <lastmod>2024-07-30T09:52:56+00:00</lastmod>
                <priority>0.80</priority>
            </url>
          
            @endforeach
        @endif


    @endif


    @foreach ($serviceRepair as $ser)
        @if (!empty($ser->slug))
            @if(!in_array(url($ser->slug).'/', $exselectpages))
            <url>
                <loc>{{ url( $ser->slug) }}/</loc>
                <lastmod>2024-07-30T09:52:56+00:00</lastmod>
                <priority>0.80</priority>
            </url>
            @endif
        @endif
    @endforeach
    
    @if(!in_array(route('serviceareas').'/', $exselectpages))
    <url>
        <loc>{{route('serviceareas')}}/</loc>
        <lastmod>2024-07-30T09:52:56+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    @endif

    @foreach ($serviceAreas as $serv)
        @if (!empty($serv->slug))
            @if(!in_array(url('service-areas/' . $serv->slug).'/', $exselectpages))
            <url>
                <loc>{{ url('service-areas/' . $serv->slug) }}/</loc>
                <lastmod>{{ $serv->updated_at->tz('UTC')->toAtomString() }}</lastmod>
                <priority>0.80</priority>
            </url>
            @endif
        @endif
    @endforeach



    <url>
        <loc>{{route('get.commercial.products')}}/</loc>
        <lastmod>2024-07-30T09:52:56+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    

    @php
        $datacategorys = App\Models\Apicategorydata::where('menutype', 'commercial')
           ->where('category', '!=', 'traffic-doors')
            ->get()
            ->unique('category')
            ->values()
            ->toArray();
    @endphp 
    @if(count($datacategorys) > 0)
            @foreach($datacategorys as $cates => $cate)
            @php
                $category_json = json_decode($cate['category_json'],true);
            @endphp
                @if(!in_array(route('commercial.products', [$cate['category']]).'/', $cexselectpages))
                <url>
                    <loc>{{ route('commercial.products', [$cate['category']]) }}/</loc>
                    <lastmod>2024-07-30T09:52:56+00:00</lastmod>
                    <priority>0.80</priority>
                </url>
                @endif
            @endforeach
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
            @foreach($datasubcategorys as $subcates => $subcate)
                @php
                    $category_json_sub = json_decode($subcate['category_json'],true);
                @endphp
                @if(!in_array(route('commercial.products', [$subcate['subcategory']]).'/', $cexselectpages))
                <url>
                    <loc>{{ route('commercial.products', [$subcate['subcategory']]) }}/</loc>
                    <lastmod>2024-07-30T09:52:56+00:00</lastmod>
                    <priority>0.80</priority>
                </url>
                @endif
            @endforeach
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
            <url>
                <loc>{{ $productLink }}/</loc>
                <lastmod>2024-07-30T09:52:56+00:00</lastmod>
                <priority>0.80</priority>
            </url>
            @endif
            @endforeach
    @endif


    @if(!in_array(url('loading-dock').'/', $cexselectpages))
    <url>
        <loc>{{url('loading-dock')}}/</loc>
        <lastmod>2024-07-30T09:52:56+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    @endif

    @if(!in_array(url('hollow-metal-door').'/', $cexselectpages))
    <url>
        <loc>{{url('hollow-metal-door')}}/</loc>
        <lastmod>2024-07-30T09:52:56+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    @endif

   
</urlset>
               