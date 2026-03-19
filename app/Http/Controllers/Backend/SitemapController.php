<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitemap;
use Spatie\Sitemap\Sitemap as SpatieSitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Article;
use App\Models\Page;
use ReflectionClass;
use App\Models\Apiproductdata;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Apicategorydata;
use App\Models\Apisubcategorydata;


class SitemapController extends Controller
{
    public function index()
    {
        // 1️⃣ Pages Sitemap
        $pagesSitemap = SpatieSitemap::create();
        $pagesSitemapUrls = []; // plain array for Blade

        $staticRoutes = [
            'home',
            'about.us',
            'contact',
            'privacypolicy',
            'serviceAndRepair',
            'serviceareas',
        ];

        foreach ($staticRoutes as $routeName) {
            if (Route::has($routeName)) {
                $url = route($routeName) . '/';
                $pagesSitemap->add(Url::create($url));
                $pagesSitemapUrls[] = $url;
            }
        }

        $excludedSlugs = [
            'sitemap',
            'newport-garage-doors',
            'dover-garage-doors',
            'georgetown-garage-doors',
            'salisbury-garage-doors'
        ];

        $pages = Page::where('publish_status', 'Published')->get();

        foreach ($pages as $page) {
            if (!in_array($page->slug, $excludedSlugs)) {
                $url = route('frontend.page.index', $page->slug) . '/';
                $pagesSitemap->add(Url::create($url));
                $pagesSitemapUrls[] = $url;
            }
        }

        // Get all routes
        $routes = Route::getRoutes();

        foreach ($routes as $route) {

            $routeName = $route->getName();

            // Include only garage door pages
            if ($routeName && str_contains($routeName, '.garagedoor')) {

                $url = route($routeName) . '/';

                $pagesSitemap->add(Url::create($url));
                $pagesSitemapUrls[] = $url;
            }
        }

        // 2️⃣ Blog Sitemap (example)
        // $blogPosts = Article::where('status', 1)->get();
        // $blogSitemapUrls = [];

        // foreach ($blogPosts as $post) {
        //     $url = url('blog/' . $post->slug);
        //     $blogSitemapUrls[] = $url;
        // }

        $blogPosts = Article::where('status', 1)->get();
        $blogSitemapUrls = [];

        foreach ($blogPosts as $post) {
            $blogSitemapUrls[] = [
                'title' => $post->title,  // real title from DB
                'url' => url('blog/' . $post->slug),
            ];
        }

        // 1️⃣ Loop through the global residential menus

        $residential_menus = View::shared('residential_menus');
        if (count($residential_menus) > 0) {
            foreach ($residential_menus as $resmenu) {
                if (count($resmenu) > 0) {
                    foreach ($resmenu as $menuItem) {
                        // Main category URL
                        $residentialUrls[] = route('residential.products', [$menuItem['slug']]) . '/';

                        // Subcategory URLs
                        if (isset($menuItem['subcategories']) && count($menuItem['subcategories']) > 0) {
                            foreach ($menuItem['subcategories'] as $subcat) {
                                $residentialUrls[] = route('residential.products', [$subcat['slug']]) . '/';
                            }
                        }
                    }
                }
            }
        }

        // 2️⃣ Include individual product URLs from Apiproductdata
        $dataproduct = Apiproductdata::select('subcategory', 'maincat', 'product_json')
            ->where('menutype', 'residential')
            ->get()
            ->unique('product_json')
            ->values()
            ->toArray();

        foreach ($dataproduct as $dval) {
            $products_j = json_decode($dval['product_json'], true);

            if (isset($products_j['direct_file']) && $products_j['direct_file'] != null) {
                $productLink = $products_j['direct_file'];
            } elseif ($dval['subcategory'] == 'smart-garage-accessories') {
                $productLink = route('residential.products', 'openers/' . $products_j['product_slug']);
            } elseif (isset($dval['maincat']) && $dval['maincat'] != '') {
                $productLink = route('residential.products', $dval['maincat'] . '/' . $products_j['product_slug']);
            } else {
                $productLink = route('residential.products', $products_j['product_slug']);
            }

            $residentialUrls[] = $productLink . '/';
        }

        // 3️⃣ Make URLs unique
        $residentialUrls = array_unique($residentialUrls);

        $commercialUrls = [];

        // 1️⃣ Categories
        $categories = Apicategorydata::where('menutype', 'commercial')
            ->where('category', '!=', 'traffic-doors')
            ->get()
            ->unique('category')
            ->values();

        foreach ($categories as $cat) {
            $commercialUrls[] = route('commercial.products', [$cat->category]) . '/';
        }

        // 2️⃣ Subcategories
        $excludedSubcategories = [
            'sectional-thermaseal-doors',
            'thermaseal',
            'thermaseal-thermal-sectional-insulated-steel-doors',
            'extruded-alumaview-aluminum-rail-and-stile-doors',
            'alumaview-aluminum-rail-and-stile-doors',
            'firehoist-operators',
            'energycore',
            'rolling-steel-solutions',
            'controlhoist-commercial-door-operators',
            'steelpro-sectional-ribbed-steel-overhead-doors',
            'customized-solutions',
            'th160-thermal-sectional-door'
        ];

        $subcategories = Apisubcategorydata::where('menutype', 'commercial')
            ->whereNotIn('subcategory', $excludedSubcategories)
            ->get()
            ->unique('subcategory')
            ->values();

        foreach ($subcategories as $sub) {
            $commercialUrls[] = route('commercial.products', [$sub->subcategory]) . '/';
        }

        // 3️⃣ Products
        $excludedProducts = ['steelform-series', 'steelform-sectional-ribbed-steel-overhead-doors', 'energycore-ec200'];
        $products = Apiproductdata::where('menutype', 'commercial')
            ->whereNotIn('product', $excludedProducts)
            ->get()
            ->unique('product_json')
            ->values();

        foreach ($products as $prod) {
            $decoded = json_decode($prod->product_json, true);

            if (isset($decoded['direct_file']) && $decoded['direct_file']) {
                $commercialUrls[] = $decoded['direct_file'];
            } elseif ($prod->subcategory === 'openers') {
                $commercialUrls[] = route('commercial.products', 'openers/' . $decoded['product_slug']) . '/';
            } elseif (!empty($prod->maincat)) {
                $commercialUrls[] = route('commercial.products', $prod->maincat . '/' . $decoded['product_slug']) . '/';
            } else {
                $commercialUrls[] = route('commercial.products', $prod->category . '/' . $decoded['product_slug']) . '/';
            }
        }

        // 4️⃣ Additional static URLs
        $commercialUrls[] = url('loading-dock') . '/';
        $commercialUrls[] = url('hollow-metal-door') . '/';
        $commercialUrls = array_values(array_unique($commercialUrls));

        // Other data for Blade
        $listsitemaps = Sitemap::all() ?? collect();

        $sitemappages = Page::where('publish_status', 'Published')->get() ?? collect();
        $sitemapTags = Article::where('status', 1)->get() ?? collect();
        $sitemapPages = Sitemap::where('type', 'pages')->first();
        $sitemapPosts = Sitemap::where('type', 'posts')->first();

        // ✅ Return all arrays to Blade
        return view('sitemap-setting.index', [
            'pagesSitemap' => $pagesSitemapUrls,
            'blogSitemap' => $blogSitemapUrls,
            'residentialSitemap' => $residentialUrls,
            'commercialSitemap' => $commercialUrls,
            'commercialUrls' => $commercialUrls,
            'listsitemaps' => $listsitemaps,
            'sitemappages' => $sitemappages,
            'sitemapTags' => $sitemapTags,
            'sitemapPages' => $sitemapPages,
            'sitemapPosts' => $sitemapPosts

        ]);
    }

    public function edit(Request $request)
    {

        $sitemapupdate = Sitemap::where('type', $request->type)->first();
        return response()->json($sitemapupdate);
    }



    public function storeupdate(Request $request)
    {

        // $type="Html Sitemap";
        $sitemapupdate = Sitemap::where('type', $request->type)->first();

        if ($sitemapupdate->type == 'htmlsitemaps') {
            $sitemapupdate->update([
                'html_sitemap' => isset($request->sitemap_html) && $request->sitemap_html === 'on' ? 1 : null,
                'html_short_by' => isset($request->sort_by) ? $request->sort_by : null,
                'html_show_date' => isset($request->show_date) && $request->show_date === 'on' ? 1 : null,

            ]);
        } elseif ($sitemapupdate->type == 'pages') {
            $sitemapupdate->update([
                'p_include_sitemap' => isset($request->in_sitemap) && $request->in_sitemap === 'on' ? 1 : null,
                'p_include_html_sitemap' => isset($request->in_html_sitemap) && $request->in_html_sitemap === 'on' ? 1 : null,
                'select_page' => isset($request->pages) ? json_encode($request->pages) : null,
                'r_select_page' => isset($request->residential) ? json_encode($request->residential) : null,
                'c_select_page' => isset($request->commercials) ? json_encode($request->commercials) : null,


                'meta_title' => isset($request->meta_title) ? $request->meta_title : null,
                'meta_keyword' => isset($request->meta_keyword) ? $request->meta_keyword : null,
                'meta_description' => isset($request->meta_description) ? $request->meta_description : null,
            ]);


        } elseif ($sitemapupdate->type == 'posts') {
            $sitemapupdate->update([
                'post_include_sitemap' => isset($request->post_include_sitemap) && $request->post_include_sitemap === 'on' ? 1 : null,
                'post_include_h_sitemap' => isset($request->post_include_h_sitemap) && $request->post_include_h_sitemap === 'on' ? 1 : null,
                'post_exclude' => isset($request->post_exclude) ? $request->post_exclude : null,
                'select_posts' => isset($request->post) ? json_encode($request->post) : null,
                'meta_title' => isset($request->meta_title) ? $request->meta_title : null,
                'meta_keyword' => isset($request->meta_keyword) ? $request->meta_keyword : null,
                'meta_description' => isset($request->meta_description) ? $request->meta_description : null,

            ]);
        } elseif ($sitemapupdate->type == 'categories') {
            $sitemapupdate->update([
                'c_include_sitemap' => isset($request->c_include_sitemap) && $request->c_include_sitemap === 'on' ? 1 : null,
                'c_include_html_sitemap' => isset($request->c_include_html_sitemap) && $request->c_include_html_sitemap === 'on' ? 1 : null,
                'c_include_empty_terms' => isset($request->c_include_empty_terms) && $request->c_include_empty_terms === 'on' ? 1 : null,



            ]);
        }


        return redirect()->back()->with('success', 'Update site html sucessfully');
    }


    public function reset(Request $request)
    {
        $sitemap = Sitemap::where('type', $request->type)->first();

        // dd($sitemap);
        if ($sitemap) {
            if ($request->type === 'htmlsitemaps') {
                $sitemap->update([
                    'html_sitemap' => null,
                    'html_short_by' => null,
                    'html_show_date' => null,
                ]);
            } elseif ($request->type === 'pages') {
                $sitemap->update([
                    'p_include_sitemap' => null,
                    'p_include_html_sitemap' => null,
                    'select_page' => null,
                    'r_select_page' => null,
                    'c_select_page' => null,
                ]);
            } elseif ($request->type === 'posts') {
                $sitemap->update([
                    'post_include_sitemap' => null,
                    'post_include_h_sitemap' => null,
                    'post_exclude' => null,
                    'select_posts' => null,
                ]);
            } elseif ($request->type === 'categories') {
                $sitemap->update([
                    'c_include_sitemap' => null,
                    'c_include_html_sitemap' => null,
                    'c_include_empty_terms' => null,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Options reset successfully.');
    }

}
