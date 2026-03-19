<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GetInTouch;
use App\Models\Location;
use App\Models\ClientLogo;
use App\Models\HomePageSetting;
use App\Models\Setting;
use App\Mail\InquiryMail;
use App\Mail\NotifyMail;
use Carbon\Carbon; 
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Mail;


class InquiryController extends Controller
{

    public function contact()
    {
        

        $home = HomePageSetting::first();

        $setting = Setting::first();
         $meta_title = $setting->meta_title ?? "Clark & Sons Garage Doors";
        $meta_description = $setting->meta_description ?? "";
        $form = json_decode($home->form_sec);
        $location = json_decode($home->location_sec);
        $locations = Location::select('*')->where('deleted_at', null)->latest()->get();
        $client_logo = ClientLogo::select('*')->where('status','1')->where('deleted_at', null)->latest()->get();
        
        return view('frontend.contactus.index',compact('client_logo','locations','form','location','setting','meta_title','meta_description'));
    }

    public function getInTouchStore(Request $request)
    {

        if ($request->has('g-recaptcha-response')
            || ($request->has('mobileRecaptchaToken') && !empty($request->get('mobileRecaptchaToken')))
            || ($request->has('modelRecaptchaToken') && !empty($request->get('modelRecaptchaToken')))) {
            $GformToken = $request->input('g-recaptcha-response') ?? $request->get('mobileRecaptchaToken') ?? $request->get('modelRecaptchaToken');
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $GformToken,
                'remoteip' => $request->ip()
            ]);
            if (!$response->json()['success']) {
                return redirect()->back()->with('error', 'Google Recaptcha verification failed.');
            }
        } else {
            return redirect()->back()->with('error', 'Google Recaptcha token missing.');
        }

       if($request->hname != '' || $request->hname != null || $request->hemail != null || $request->hemail != ''){
            return redirect()->back()->with('error',"Spamming Detected.");
        }

        $GetTouch = new GetInTouch;
        $GetTouch->name = isset($request->name) ? $request->name : '';
        $GetTouch->phone = isset($request->phone) ? $request->phone : '';
        $GetTouch->zipcode = isset($request->zipcode) ? $request->zipcode : '';
		$GetTouch->url = isset($request->url) ? $request->url : '';
        $GetTouch->email = isset($request->email) ? $request->email : '';
        $GetTouch->message = isset($request->message) ? $request->message : '';

        $GetTouch->save();

        $contact_data = $request->all();

        Mail::to("sales@clarkandsonsdoors.com")
            ->cc(["clarkandsonsdoors@gmail.com", "soni@logikdigital.com"])
            ->send(new InquiryMail($contact_data, $contact_data['url']));

        return redirect()->route('front.thankyou');
      
    }

}
