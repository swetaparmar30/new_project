<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\HomePageSetting;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function about()
    {
        


        $about = About::first();
        $mission_vlues = json_decode($about->mission_values);
        $meta_title = $about->meta_title ?? "Clark & Sons Garage Doors";
        $meta_description = $about->meta_description ?? "";
        // $banner = json_decode($home->banner_sec);
        // $system_setting = json_decode($home->system_setting_sec);
        // $faqs = json_decode($home->faq_sec);
        // $garage_door = json_decode($home->garage_door);
        // $residential = json_decode($home->residential_sec);
        // $gallery = json_decode($home->gallery_sec);
        // $design = json_decode($home->design_sec);
        // $areas = json_decode($home->areas_sec);
        // $calltoaction = json_decode($home->calltoaction);
        // $newgarage = json_decode($home->newgarage);
        // $quote = json_decode($home->quote_sec);
        // $testimonial = json_decode($home->testimonial);
        // // $Resicollections = Collection::select('*')->where('deleted_at', null)->where('type','Residential')->latest()->limit(4)->get();
        // // $garage_doors = GarageDoor::select('*')->where('deleted_at', null)->get();
        // // $client_logo = ClientLogo::select('*')->where('status','1')->where('deleted_at', null)->latest()->get();
        // // $gallery_images = ProjectGallery::where('is_publish', 1)->where('is_featured', 1)->take(5)->latest()->get();
        // $testimonials = Testimonial::where('is_featured', 1)->take(5)->latest()->get();
        // // $faq_data = Faq::get();

        if(isset($about) && $about != '' && $about != null)
        {   
            return view('frontend.aboutus.index', compact('about','mission_vlues','meta_title','meta_description'));
        }else{
            return view('frontend.aboutus.index', compact('meta_title','meta_description'));
        }
    }
}
