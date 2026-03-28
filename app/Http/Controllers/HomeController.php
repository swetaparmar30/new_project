<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MeetingMail;
use App\Models\Setting;
use App\Models\HomePageSetting;
use App\Models\ServiceAreas;
use App\Models\LocationPageSetting;
use Spatie\Sitemap\Sitemap as SpatieSitemap;
use App\Models\ProductService;
use App\Models\Testimonial;
use App\Models\Slider;
use App\Models\Married;
use App\Models\Article;
use App\Models\GalleryCategory;
use App\Models\SidebarWidget;
use App\Models\GarageDoor;
use App\Models\Garageservice;
use App\Models\CommentSetting;
use App\Models\Comment;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use App\Models\Page;
use App\Models\Faq;
use Illuminate\Support\Facades\View;
use App\Models\CollectionsImage;
use App\Models\Collection;
use App\Models\ClientLogo;
use App\Models\Apisetting;
use App\Models\Apiproductdata;
use App\Models\Apicategorydata;
use App\Models\Apisubcategorydata;
use App\Models\Location;
use App\Models\ProjectGallery;
use App\Models\Loadingdockdoor;
use App\Models\Hollowmetaldoors;
use App\Models\Sitemap;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Tags\Url;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $home = HomePageSetting::first();
        $meta_title = $home->meta_title ?? "Clark & Sons Garage Doors";
        $meta_description = $home->meta_description ?? "";
        $meta_keywords = $home->meta_keyword ?? "";

        $banner = json_decode($home->banner_sec);
        $system_setting = json_decode($home->system_setting_sec);
        $faqs = json_decode($home->faq_sec);
        $garage_door = json_decode($home->garage_door);
        $residential = json_decode($home->residential_sec);
        $gallery = json_decode($home->gallery_sec);
        $newgarage = json_decode($home->newgarage);
        $testimonial = json_decode($home->testimonial);
        $blog_sec = json_decode($home->blog_sec);
        $Resicollections = Collection::select('*')->where('deleted_at', null)->where('type', 'Residential')->latest()->limit(4)->get();
        //$garage_doors = GarageDoor::select('*')->where('deleted_at', null)->get();
        $garage_doors = GarageDoor::where('deleted_at',null)->where('pages', 'home')->get();
        $garage_services = Garageservice::select('*')->where('deleted_at', null)->take(6)->get();
        $gallery_images = ProjectGallery::where('is_publish', 1)->where('is_featured', 1)->latest()->get();
        $faq_data = Faq::orderBy('updated_at', 'asc')->get();
        $blogs = Article::where('status', 1)->latest()->take(3)->get();
        $why_choose = json_decode($home->why_choose_sec);
        $service_head_sec = json_decode($home->service_heading_section);
        $services_sec = json_decode($home->services_sec);

        return view('frontend.home', compact('home', 'garage_services', 'testimonial', 'newgarage', 'banner', 'system_setting', 'faqs', 'garage_door', 'faq_data', 'gallery', 'residential', 'garage_doors', 'gallery_images', 'Resicollections', 'blogs', 'blog_sec', 'meta_title', 'meta_description', 'meta_keywords', 'services_sec', 'service_head_sec', 'why_choose'));
    }
   

    public function hastings()
    {

        $location = LocationPageSetting::where('location', 'hastings')->first();
        $home = HomePageSetting::first();
        $meta_tags = json_decode($location->meta_tags_sec);
        $checked = $meta_tags->checked ?? 0;

        $meta_title = $checked ? ($meta_tags->meta_title ?? null) : null;
        $meta_description = $checked ? ($meta_tags->meta_description ?? null) : null;
        $meta_keywords = $checked ? ($meta_tags->meta_keyword ?? null) : null;

        $banner = json_decode($location->banner_sec);
        $system_setting = json_decode($location->system_setting_sec);
        $services_sec = json_decode($location->services_sec);
        $service_head_sec = json_decode($location->service_heading_section);
        $areas = json_decode($location->areas_sec);
        $faqs = json_decode($location->faq_sec);
        $garage_door = json_decode($location->garage_door);
        $residential = json_decode($home->residential_sec);
        $gallery = json_decode($home->gallery_sec);
        $newgarage = json_decode($home->newgarage);
        $testimonial = json_decode($home->testimonial);
        $blog_sec = json_decode($home->blog_sec);
        $why_choose = json_decode($location->why_choose_sec);
        $quote = json_decode($location->quote_sec);
        $calltoaction = json_decode($location->calltoaction);
        $Resicollections = Collection::select('*')->where('deleted_at', null)->where('type', 'Residential')->latest()->limit(4)->get();
        //$garage_doors = GarageDoor::select('*')->where('deleted_at', null)->get();
        $garage_doors = GarageDoor::where('deleted_at',null)->where('pages', 'services')->get();
        $garage_services = Garageservice::select('*')->where('deleted_at', null)->take(6)->get();
        $gallery_images = ProjectGallery::where('is_publish', 1)->where('is_featured', 1)->latest()->get();
        $faq_data = Faq::orderBy('updated_at', 'asc')->get();
        $blogs = Article::where('status', 1)->latest()->take(3)->get();
        return view('frontend.landing_page.location-page', compact('home', 'garage_services', 'testimonial', 'newgarage', 'banner', 'system_setting', 'services_sec', 'service_head_sec', 'faqs', 'garage_door', 'faq_data', 'gallery', 'residential', 'garage_doors', 'gallery_images', 'Resicollections', 'blogs', 'blog_sec', 'meta_title', 'meta_description', 'meta_keywords', 'areas', 'why_choose', 'quote', 'calltoaction', 'meta_tags'));
    }
    public function lincoln()
    {
        $location = LocationPageSetting::where('location', 'lincoln')->first();
        $home = HomePageSetting::first();
        $meta_tags = json_decode($location->meta_tags_sec);
        $checked = $meta_tags->checked ?? 0;

        $meta_title = $checked ? ($meta_tags->meta_title ?? null) : null;
        $meta_description = $checked ? ($meta_tags->meta_description ?? null) : null;
        $meta_keywords = $checked ? ($meta_tags->meta_keyword ?? null) : null;

        $banner = json_decode($location->banner_sec);
        $system_setting = json_decode($location->system_setting_sec);
        $services_sec = json_decode($location->services_sec);
        $service_head_sec = json_decode($location->service_heading_section);
        $areas = json_decode($location->areas_sec);
        $faqs = json_decode($location->faq_sec);
        $garage_door = json_decode($location->garage_door);
        $residential = json_decode($home->residential_sec);
        $gallery = json_decode($home->gallery_sec);
        $newgarage = json_decode($home->newgarage);
        $testimonial = json_decode($home->testimonial);
        $blog_sec = json_decode($home->blog_sec);
        $why_choose = json_decode($location->why_choose_sec);
        $quote = json_decode($location->quote_sec);
        $calltoaction = json_decode($location->calltoaction);
        $Resicollections = Collection::select('*')->where('deleted_at', null)->where('type', 'Residential')->latest()->limit(4)->get();
        $garage_doors = GarageDoor::select('*')->where('deleted_at', null)->get();
        $garage_services = Garageservice::select('*')->where('deleted_at', null)->take(6)->get();
        $gallery_images = ProjectGallery::where('is_publish', 1)->where('is_featured', 1)->latest()->get();
        $faq_data = Faq::orderBy('updated_at', 'asc')->get();
        $blogs = Article::where('status', 1)->latest()->take(3)->get();
        return view('frontend.landing_page.location-page', compact('home', 'garage_services', 'testimonial', 'newgarage', 'banner', 'system_setting', 'services_sec', 'service_head_sec', 'faqs', 'garage_door', 'faq_data', 'gallery', 'residential', 'garage_doors', 'gallery_images', 'Resicollections', 'blogs', 'blog_sec', 'meta_title', 'meta_description', 'meta_keywords', 'areas', 'why_choose', 'quote', 'calltoaction', 'meta_tags'));
    }



    public function demo()
    {
        $location = LocationPageSetting::where('location', 'demo')->first();
        $home = HomePageSetting::first();
        $meta_tags = json_decode($location->meta_tags_sec);
        $checked = $meta_tags->checked ?? 0;

        $meta_title = $checked ? ($meta_tags->meta_title ?? null) : null;
        $meta_description = $checked ? ($meta_tags->meta_description ?? null) : null;
        $meta_keywords = $checked ? ($meta_tags->meta_keyword ?? null) : null;

        $banner = json_decode($location->banner_sec);
        $system_setting = json_decode($location->system_setting_sec);
        $services_sec = json_decode($location->services_sec);
        $service_head_sec = json_decode($location->service_heading_section);
        $areas = json_decode($location->areas_sec);
        $faqs = json_decode($location->faq_sec);
        $garage_door = json_decode($location->garage_door);
        $residential = json_decode($home->residential_sec);
        $gallery = json_decode($home->gallery_sec);
        $newgarage = json_decode($home->newgarage);
        $testimonial = json_decode($home->testimonial);
        $blog_sec = json_decode($home->blog_sec);
        $why_choose = json_decode($location->why_choose_sec);
        $quote = json_decode($location->quote_sec);
        $calltoaction = json_decode($location->calltoaction);
        $Resicollections = Collection::select('*')->where('deleted_at', null)->where('type', 'Residential')->latest()->limit(4)->get();
        $garage_doors = GarageDoor::select('*')->where('deleted_at', null)->get();
        $garage_services = Garageservice::select('*')->where('deleted_at', null)->take(6)->get();
        $gallery_images = ProjectGallery::where('is_publish', 1)->where('is_featured', 1)->latest()->get();
        $faq_data = Faq::orderBy('updated_at', 'asc')->get();
        $blogs = Article::where('status', 1)->latest()->take(3)->get();
        return view('frontend.landing_page.location-page', compact('home', 'garage_services', 'testimonial', 'newgarage', 'banner', 'system_setting', 'services_sec', 'service_head_sec', 'faqs', 'garage_door', 'faq_data', 'gallery', 'residential', 'garage_doors', 'gallery_images', 'Resicollections', 'blogs', 'blog_sec', 'meta_title', 'meta_description', 'meta_keywords', 'areas', 'why_choose', 'quote', 'calltoaction', 'meta_tags'));
    }




    // Services Areas

    public function ServiceAreas()
    {

        $home = HomePageSetting::first();
        $serviceareas = ServiceAreas::first();

        $title = "Service Area";
        $description = "Explore Clark & Sons service areas across Maryland and Delaware. Providing reliable garage door installation, repair, and service wherever you are. Call Now";
        $keywords = "";

        if ($serviceareas) {
            $title = $serviceareas->meta_title ?? $title;
            $description = $serviceareas->meta_description ?? $description;
            $keywords = $serviceareas->meta_keyword ?? $keywords;
        }

        return view('frontend.landing_page.servicesareas', compact('home', 'title', 'description', 'keywords', 'serviceareas'));
    }
  



    public function generateCustomCss()
    {
        $apisetting = Apisetting::first();

        if ($apisetting && isset($apisetting->custom_css)) {
            $customCss = $apisetting->custom_css;

            return response($customCss)
                ->header('Content-Type', 'text/css')
                ->header('Cache-Control', 'public, max-age=86400');
        }

        return response('')
            ->header('Content-Type', 'text/css');
    }
    public function hollowMetalDoor()
    {

        $hollowmetaldoors = Hollowmetaldoors::first();

        $meta_title = $hollowmetaldoors->meta_title ?? "Clark & Sons Garage Doors";
        $meta_description = $hollowmetaldoors->meta_description ?? "";
        $meta_keywords = $hollowmetaldoors->meta_keyword ?? "";

        $hm_d_section2 = json_decode($hollowmetaldoors->hm_d_section2);
        $hm_d_section3 = json_decode($hollowmetaldoors->hm_d_section3);
        $hm_d_section4 = json_decode($hollowmetaldoors->hm_d_section4);
        $hm_d_section5 = json_decode($hollowmetaldoors->hm_d_section5);
        $hm_d_section6 = json_decode($hollowmetaldoors->hm_d_section6);
        $hm_d_section7 = json_decode($hollowmetaldoors->hm_d_section7);
        $hm_d_section8 = json_decode($hollowmetaldoors->hm_d_section8);
        $hm_d_section9 = json_decode($hollowmetaldoors->hm_d_section9);

        return view('frontend.landing_page.hollow-metal-door', compact('meta_title', 'meta_description', 'meta_keywords', 'hollowmetaldoors', 'hm_d_section2', 'hm_d_section3', 'hm_d_section4', 'hm_d_section5', 'hm_d_section6', 'hm_d_section7', 'hm_d_section8', 'hm_d_section9'));
    }
    public function loadingDock()
    {




        $loadingdockdoor = Loadingdockdoor::first();
        $meta_title = $loadingdockdoor->meta_title ?? "Clark & Sons Garage Doors";
        $meta_description = $loadingdockdoor->meta_description ?? "";
        $meta_keywords = $loadingdockdoor->meta_keyword ?? "";
        $section2 = json_decode($loadingdockdoor->section2);
        $section3 = json_decode($loadingdockdoor->section3);
        $section4 = json_decode($loadingdockdoor->section4);
        $section5 = json_decode($loadingdockdoor->section5);
        $section6 = json_decode($loadingdockdoor->section6);
        $section7 = json_decode($loadingdockdoor->section7);

        return view('frontend.landing_page.loading-dock', compact('meta_title', 'meta_description', 'meta_keywords', 'loadingdockdoor', 'section2', 'section3', 'section4', 'section5', 'section6', 'section7'));
    }
    public function about_us()
    {
        return view('front.about_us');
    }
    public function ServiceandRepair()
    {


        $location = LocationPageSetting::where('location', 'servicerepair')->first();
        $home = HomePageSetting::first();
        $meta_tags = json_decode($location->meta_tags_sec);
        $checked = $meta_tags->checked ?? 0;

        $meta_title = $checked ? ($meta_tags->meta_title ?? null) : null;
        $meta_description = $checked ? ($meta_tags->meta_description ?? null) : null;
        $meta_keywords = $checked ? ($meta_tags->meta_keyword ?? null) : null;
        $banner = json_decode($location->banner_sec);
        $system_setting = json_decode($home->system_setting_sec);
        $faqs = json_decode($home->faq_sec);
        $garage_door = json_decode($home->garage_door);
        $residential = json_decode($home->residential_sec);
        $gallery = json_decode($home->gallery_sec);
        $newgarage = json_decode($home->newgarage);
        $testimonial = json_decode($home->testimonial);
        $Resicollections = Collection::select('*')->where('deleted_at', null)->where('type', 'Residential')->latest()->limit(4)->get();
        $garage_doors = GarageDoor::select('*')->where('deleted_at', null)->get();
        $garage_services = Garageservice::select('*')->where('deleted_at', null)->take(6)->get();
        $gallery_images = ProjectGallery::where('is_publish', 1)->where('is_featured', 1)->latest()->get();
        $faq_data = Faq::get();
        return view('frontend.landing_page.service-and-repair', compact('home', 'garage_services', 'testimonial', 'newgarage', 'banner', 'system_setting', 'faqs', 'garage_door', 'faq_data', 'gallery', 'residential', 'garage_doors', 'gallery_images', 'Resicollections', 'meta_title', 'meta_description', 'meta_keywords', 'location', 'meta_tags'));
    }


    public function photo_gallary()
    {
        return view('front.photogallary');
    }
    public function services()
    {
        return view('front.service');
    }
    public function servicesnew()
    {
        return view('front.servicenext');
    }
    public function service_detail($slug)
    {
        $service = ProductService::where('slug', $slug)->first();
        $gallery_images = ProjectGallery::where('is_publish', 1)->where('is_featured', 1)->take(5)->latest()->get();
        if ($service) {
            $pagename = "formal_wedding";
            return view('front.service_detail', compact('pagename', 'service', 'gallery_images'));
        } else {
            abort(404);
        }
    }

    public function contact_us()
    {
        return view('front.contact_us');
    }
    public function posts()
    {
        $blogs = Article::where('status', 1)->latest()->paginate(10);
        return view('front.blogs', compact('blogs'));
    }
    public function blog_detail()
    {
        return view('front.blog_detail');
    }
    public function blog_detail_2()
    {
        return view('front.blog_detail_next');
    }
    public function meeting_form(Request $request)
    {
        if ($request->contact_me_by_whatsapp == 1) {
            return redirect()->back()->with(['error' => 'Seems You are spammer.'])->withInput()->withFragment('recaptcha-error');
        }

        if (!$request->has('g-recaptcha-response') || !$request->filled('g-recaptcha-response')) {
            return redirect()->back()->with(['error' => 'The reCAPTCHA verification is required.'])->withInput()->withFragment('recaptcha-error');
        }
        $request->validate([
            'g-recaptcha-response' => [
                'required',
                function ($attribute, $value, $fail) {
                    $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
                        'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
                        'response' => $value,
                    ]);

                },
            ],
        ]);
        $user_data = $request->all();
        Mail::to("")->send(new MeetingMail($user_data));
        // return redirect()->back()->with(['success' => 'Your inquiry has been successfully sent via email.']);
        return view('frontend.thankyou');
    }

    public function sendinquiry(Request $request)
    {
        if ($request->contact_me_by_whatsapp == 1) {
            return redirect()->back()->with(['error' => 'Seems You are spammer.'])->withInput()->withFragment('recaptcha-error');
        }

        $user_data = $request->all();
        Mail::to("")->send(new InquiryMail($user_data));

        return view('frontend.thankyou');
    }

    public function home_dynamic()
    {
        $home = HomePageSetting::first();
        $about = json_decode($home->about_us_sec);
        $service = json_decode($home->our_service_sec);
        $story = json_decode($home->the_story_sec);
        $testi = json_decode($home->testimonial_sec);
        $video = json_decode($home->video_sec);
        $married = json_decode($home->married_sec);
        $gallery = json_decode($home->gallery_sec);
        $recent = json_decode($home->recent_post_sec);
        $product_services = ProductService::take(4)->latest()->get();
        $testimonials = Testimonial::where('is_featured', 1)->take(5)->latest()->get();
        $slider = Slider::where('status', 1)->take(5)->latest()->get();
        $how_to_get = Married::where('status', 1)->whereNotIn('id', [4])->take(5)->latest()->get();
        $gallery_images = ProjectGallery::where('is_publish', 1)->take(5)->latest()->get();
        $recent_articles = Article::where('status', 1)->take(5)->latest()->get();
        // dd($product_services);
        return view('front.home_new', compact('home', 'about', 'service', 'story', 'product_services', 'testi', 'married', 'gallery', 'recent', 'testimonials', 'slider', 'how_to_get', 'recent_articles', 'gallery_images', 'video'));
    }

    public function single_blog_detail($slug)
    {
        $blog_widgets = SidebarWidget::where('sidebar_id', 2)->orderby('sequence')->get();
        $article = Article::where('slug', $slug)->where('status', 1)->first();
        $related = Article::where('id', '!=', $article->id)->where('status', 1)->get();
        $recent = Article::latest()->where('id', '!=', $article->id)->where('status', 1)->get();
        $comment_setting = CommentSetting::first();
        $all_comments = Comment::where('blog_id', $article->id)->where('parent_id', '=', null)->where('approved_status', 1)->where('spam_status', 0)->latest()->get();
        return view('front.blog_detail', compact('article', 'related', 'recent', 'blog_widgets', 'comment_setting', 'all_comments'));
    }
    public function testimonials()
    {
        $testi_list = Testimonial::select('testimonials.*')->orderBy('id', 'desc')->where('is_featured', 1)->paginate(10);


        return view('front.testimonial', compact('testi_list'));
    }
    public function married_detail($slug)
    {
        $married = Married::where('status', 1)->where('slug', $slug)->latest()->first();
        $all_married = Married::where('status', 1)->latest()->get();
        return view('front.married_details', compact('married', 'all_married'));
    }

    public function gallery()
    {
        $categories = GalleryCategory::get();

        $photos = ProjectGallery::where('is_publish', 1)->where('is_featured', '!=', 1)->latest()->get();
        return view('front.new_project_gallery', compact('photos', 'categories'));
    }

    public function store_comment(Request $request)
    {
        $comment = new Comment();
        $comment->blog_id = isset($request->blog_id) ? $request->blog_id : null;
        $comment->parent_id = isset($request->parent_id) ? $request->parent_id : null;
        $comment->user_name = isset($request->user_name) ? $request->user_name : null;
        $comment->user_email = isset($request->user_email) ? $request->user_email : null;
        $comment->subject = isset($request->user_subject) ? $request->user_subject : null;
        $comment->comment = isset($request->user_comment) ? $request->user_comment : null;
        $comment->approved_status = 1;
        $comment->spam_status = 0;
        $comment->save();
        if ($comment) {
            return response()->json(['data' => $comment, 'message' => 'Comment Added Sccessfully', 'status' => 1]);
        } else {
            return response()->json(['message' => 'Somethig Went Wrong!', 'status' => 0]);
        }
    }
    public function sitemap()
    {
        $stposts = Sitemap::where('type', 'htmlsitemaps')->where('html_sitemap', 1)->first();
        if (!$stposts) {
            return redirect()->route('home');
        }

        $exselectpages = [];
        $rexselectpages = [];
        $cexselectpages = [];

        $meta_title = "";
        $meta_description = "";

        $stpage_o = Sitemap::where('type', 'pages')->where('p_include_sitemap', 1)->first();
        if ($stpage_o) {
            // $stposts = Sitemap::where('type', 'posts')->where('post_include_h_sitemap', 1)->pluck('select_posts')->toArray();
            $stpages = $stpage_o->select_page;
            $exselectpages = json_decode($stpages, true) ?: [];

            $rstpages = $stpage_o->r_select_page;
            $rexselectpages = json_decode($rstpages, true) ?: [];

            $cstpages = $stpage_o->c_select_page;
            $cexselectpages = json_decode($cstpages, true) ?: [];


            $meta_title = $stpage_o->meta_title ?? '';
            $meta_keyword = $stpage_o->meta_keyword ?? '';
            $meta_description = $stpage_o->meta_description ?? '';

            $pages = Page::where('publish_status', '=', 'Published')->get();
            $locations = LocationPageSetting::where('status', 1)->where('type', 'location')->get();
            $serviceAreas = LocationPageSetting::where('status', 1)->where('type', 'service-area')->orderBy('slug', 'asc')->get();
            $serviceRepair = LocationPageSetting::where('status', 1)->where('type', 'servicerepair')->orderBy('slug', 'asc')->get();
        } else {
            $pages = collect();
            $locations = collect();
            $serviceAreas = collect();
            $serviceRepair = collect();

        }


        $stposts_o = Sitemap::where('type', 'posts')->where('post_include_h_sitemap', 1)->first();
        if ($stposts_o) {
            // $stposts = Sitemap::where('type', 'posts')->where('post_include_h_sitemap', 1)->pluck('select_posts')->toArray();
            $stposts = $stposts_o->select_posts;
            $exselectposts = json_decode($stposts, true) ?: [];
            $posts = Article::where('status', 1)->latest()->get();
        } else {
            $posts = collect();
        }

        return response()->view('frontend.sitemap', compact('cexselectpages', 'rexselectpages', 'exselectpages', 'exselectposts', 'pages', 'posts', 'meta_title', 'meta_description', 'locations', 'serviceAreas', 'serviceRepair'));
    }

    public function sitemap_xml()
    {

        $pages = Page::where('publish_status', '=', 'Published')->get();

        $posts = Article::where('status', 1)->latest()->get();


        return response()->view('frontend.sitemap_xml', compact('pages', 'posts'))->header('Content-Type', 'application/xml');
    }

    public function page_sitemap_xml()
    {
        $exselectpages = [];
        $rexselectpages = [];
        $cexselectpages = [];

        $stpage_o = Sitemap::where('type', 'pages')->where('p_include_sitemap', 1)->first();
        if ($stpage_o) {
            // $stposts = Sitemap::where('type', 'posts')->where('post_include_h_sitemap', 1)->pluck('select_posts')->toArray();
            $stpages = $stpage_o->select_page;
            $exselectpages = json_decode($stpages, true) ?: [];
            $pages = Page::where('publish_status', '=', 'Published')->get();
            $locations = LocationPageSetting::where('status', 1)->where('type', 'location')->get();

            $rstpages = $stpage_o->r_select_page;
            $rexselectpages = json_decode($rstpages, true) ?: [];

            $cstpages = $stpage_o->c_select_page;
            $cexselectpages = json_decode($cstpages, true) ?: [];

            $serviceAreas = LocationPageSetting::where('status', 1)->where('type', 'service-area')->orderBy('slug', 'asc')->get();
            $serviceRepair = LocationPageSetting::where('status', 1)->where('type', 'servicerepair')->orderBy('slug', 'asc')->get();
        } else {
            return redirect()->route('home');
        }

        $pages = Page::where('publish_status', '=', 'Published')->get();

        $posts = Article::where('status', 1)->latest()->get();
        $locations = LocationPageSetting::where('status', 1)->where('type', 'location')->get();
        $serviceAreas = LocationPageSetting::where('status', 1)->where('type', 'service-area')->orderBy('slug', 'asc')->get();

        return response()->view('frontend.sitemap_xml_page', compact('serviceRepair', 'rexselectpages', 'cexselectpages', 'exselectpages', 'pages', 'posts', 'locations', 'serviceAreas'))->header('Content-Type', 'application/xml');
    }

    public function post_sitemap_xml()
    {
        $stposts_o = Sitemap::where('type', 'posts')->where('post_include_sitemap', 1)->first();
        if (!$stposts_o) {
            return redirect()->route('home');
        }

        $pages = Page::where('publish_status', '=', 'Published')->get();

        //$posts = Article::where('status', 1)->latest()->get();

        if ($stposts_o) {
            // $stposts = Sitemap::where('type', 'posts')->where('post_include_h_sitemap', 1)->pluck('select_posts')->toArray();
            $stposts = $stposts_o->select_posts;
            $exselectposts = json_decode($stposts, true) ?: [];
            $posts = Article::where('status', 1)->latest()->get();
        } else {
            $posts = collect();
        }

        return response()->view('frontend.sitemap_xml_post', compact('exselectposts', 'pages', 'posts'))->header('Content-Type', 'application/xml');
    }


    public function thankyou()
    {
        return view('frontend.thankyou');
    }
    public function privacyPolicy()
    {
        $meta_title = "Privacy Policy ";
        $meta_description = "";


        return view('frontend.privacypolicy', compact('meta_title', 'meta_description'));
    }

    public function sitemap_n()
    {
        $meta_title = "Sitemap";
        $meta_description = "";

        $pages = Page::where('publish_status', '=', 'Published')->get();

        $posts = Article::where('status', 1)->latest()->get();

        $sitemaphtmls = Sitemap::get();

        $sitemappost = null;
        $sitemappage = null;
        $sitemaps = null;
        $pages_select = [];
        $commercials_select = [];
        $residential_select = [];
        $posts_select = [];


        foreach ($sitemaphtmls as $sitemaphtml) {
            if ($sitemaphtml->type == 'htmlsitemaps' && $sitemaphtml->html_sitemap == 1) {
                $sitemaps = $sitemaphtml;
            } elseif ($sitemaphtml->type == 'posts' && $sitemaphtml->post_include_h_sitemap == 1) {
                $sitemappost = $sitemaphtml;
            } elseif ($sitemaphtml->type == 'pages' && $sitemaphtml->p_include_html_sitemap == 1) {
                $sitemappage = $sitemaphtml;
            }



            if (!isset($sitemaphtml->html_sitemap) && $sitemaphtml->type == 'htmlsitemaps') {
                return redirect()->route('home');
            }

            if ($sitemaphtml->type == 'pages') {
                $alreadyStoredPages = Sitemap::whereNotNull('select_page')
                    ->pluck('select_page')
                    ->toArray();
                $selectpages = json_decode($sitemaphtml->select_page, true) ?: [];

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

                $pagesSitemapUrls = array_unique($pagesSitemapUrls);

                foreach ($selectpages as $key => $spage) {
                    if (!in_array($spage, $alreadyStoredPages)) {
                        $pages_select[] = $spage;
                    }
                }

            }

            if ($sitemaphtml->type == 'pages') {

                $alreadyStoredPagesrPages = Sitemap::whereNotNull('r_select_page')
                    ->pluck('select_page')
                    ->toArray();

                $selectresidential = json_decode($sitemaphtml->r_select_page, true) ?: [];

                foreach ($selectresidential as $key => $rpage) {
                    // $residential_select[] =$rpage;
                    if (!in_array($rpage, $alreadyStoredPagesrPages)) {
                        $residential_select[] = $rpage;
                    }

                }

            }

            if ($sitemaphtml->type == 'pages') {

                $alreadyStoredPagescPages = Sitemap::whereNotNull('c_select_page')
                    ->pluck('select_page')
                    ->toArray();

                $selectcommercials = json_decode($sitemaphtml->c_select_page, true) ?: [];

                foreach ($selectcommercials as $key => $spage) {
                    // $commercials_select[] =$spage;
                    if (!in_array($spage, $alreadyStoredPagescPages)) {
                        $commercials_select[] = $spage;
                    }
                }

            }

            if ($sitemaphtml->type == 'posts') {

                $alreadyPosts = Sitemap::whereNotNull('c_select_page')
                    ->pluck('select_page')
                    ->toArray();
                $selectposts = json_decode($sitemaphtml->select_posts, true) ?: [];
                // dd()
                foreach ($selectposts as $key => $sposts) {
                    // $posts_select[] =$sposts;
                    if (!in_array($sposts, $alreadyPosts)) {
                        $posts_select[] = $sposts;
                    }

                }
            }
        }


        $residentialCategories = [];
        $residentialProducts = [];

        $residential_menus = View::shared('residential_menus');

        // 1️⃣ Collect all category & subcategory URLs
        if (!empty($residential_menus)) {
            foreach ($residential_menus as $resmenu) {
                if (!empty($resmenu)) {
                    foreach ($resmenu as $menuItem) {
                        $residentialCategories[] = route('residential.products', [$menuItem['slug']]) . '/';

                        if (!empty($menuItem['subcategories'])) {
                            foreach ($menuItem['subcategories'] as $subcat) {
                                $residentialCategories[] = route('residential.products', [$subcat['slug']]) . '/';
                            }
                        }
                    }
                }
            }
        }

        // 2️⃣ Collect all product URLs
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
            } elseif (!empty($dval['maincat'])) {
                $productLink = route('residential.products', $dval['maincat'] . '/' . $products_j['product_slug']);
            } else {
                $productLink = route('residential.products', $products_j['product_slug']);
            }

            $residentialProducts[] = $productLink . '/';
        }

        // 3️⃣ Make unique
        $residentialCategories = array_unique($residentialCategories);
        $residentialProducts = array_unique($residentialProducts);

        $commercialUrls = [];

        // 2️⃣ Categories
        $categories = Apicategorydata::where('menutype', 'commercial')
            ->where('category', '!=', 'traffic-doors')
            ->get()
            ->unique('category')
            ->values();

        foreach ($categories as $cat) {
            $commercialUrls[] = route('commercial.products', [$cat->category]) . '/';
        }

        // 3️⃣ Subcategories
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

        // 4️⃣ Products
        $products = Apiproductdata::where('menutype', 'commercial')
            ->whereNotIn('subcategory', ['steelform-series', 'steelform-sectional-ribbed-steel-overhead-doors'])
            ->get()
            ->unique('product_json')
            ->values();

        foreach ($products as $product) {
            $data = json_decode($product->product_json, true);

            if (isset($data['product_slug']) && $data['product_slug'] == 'energycore-ec200') {
                continue; // skip this specific product
            }

            if (isset($data['direct_file']) && $data['direct_file'] != null) {
                $url = $data['direct_file'];
            } elseif ($product->subcategory == 'openers') {
                $url = route('commercial.products', 'openers/' . $data['product_slug']) . '/';
            } elseif (!empty($product->maincat)) {
                $url = route('commercial.products', $product->maincat . '/' . $data['product_slug']) . '/';
            } else {
                $url = route('commercial.products', $product->category . '/' . $data['product_slug']) . '/';
            }

            $commercialUrls[] = $url;
        }

        // 5️⃣ Additional static URLs
        $commercialUrls[] = url('loading-dock') . '/';
        $commercialUrls[] = url('hollow-metal-door') . '/';

        // 6️⃣ Remove duplicates if any
        $commercialUrls = array_unique($commercialUrls);

        // 7️⃣ Filter out already stored pages (from sitemap)
        $alreadyStoredPages = Sitemap::whereNotNull('c_select_page')
            ->pluck('select_page')
            ->toArray();



        if (!$sitemappage && !$sitemappost) {
            return redirect()->route('home');
        }
        return response()->view('frontend.sitemap_n', compact('commercialUrls', 'residentialProducts', 'residentialCategories', 'pages', 'pagesSitemapUrls', 'posts', 'meta_title', 'meta_description', 'sitemaphtml', 'sitemaps', 'sitemappost', 'sitemappage', 'pages_select', 'posts_select', 'residential_select', 'commercials_select'));
    }



}
