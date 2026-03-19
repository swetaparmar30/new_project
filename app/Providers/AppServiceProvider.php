<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\EmailSetting;
use App\Models\ClientLogo;
use App\Models\Testimonial;
use App\Models\Apimenu;
use App\Models\HomePageSetting;
use Config;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Artisan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        $mailsetting = EmailSetting::first();
        if($mailsetting){
            $data = [
                'driver'            => $mailsetting->transport,
                'host'              => $mailsetting->host,
                'port'              => $mailsetting->port,
                'encryption'        => $mailsetting->encryption,
                'username'          => $mailsetting->username,
                'password'          => $mailsetting->password,
                'from'              => [
                    'address'=>$mailsetting->from_address,
                    'name'   => $mailsetting->from_name
                ]
            ];
            Config::set('mail',$data);
        }
        Paginator::useBootstrap();
        $client_logo = ClientLogo::select('*')->where('status','1')->where('deleted_at', null)->latest()->get();
        $testimonials = Testimonial::where('is_featured', 1)->take(20)->inRandomOrder()->get();
        $home = HomePageSetting::first();
        $areas = json_decode($home->areas_sec);
        $design = json_decode($home->design_sec);
        $quote = json_decode($home->quote_sec);
        $calltoaction = json_decode($home->calltoaction);


        $residential_menus = [];
        $commercial_menus = [];
        $openers = [];

        $res_session = Apimenu::where('menutype','residential')->first();

        if(!isset($res_session)){
            $residential_menus = getResidentialMenus();
            $apimenu = new Apimenu();
            $apimenu->menutype = 'residential';
            $apimenu->menus = json_encode($residential_menus);
            $apimenu->save();
        }else{
            $residential_menus = json_decode($res_session->menus,true);
        }

        $com_session = Apimenu::where('menutype','commercial')->first();

        if(!isset($com_session)){
            $commercial_menus = getCommercialMenus();
            $apimenu = new Apimenu();
            $apimenu->menutype = 'commercial';
            $apimenu->menus = json_encode($commercial_menus);
            $apimenu->save();
        }else{
            $commercial_menus = json_decode($com_session->menus,true);
        }

        $openers_session = Apimenu::where('menutype','openers')->first();

        if(!isset($openers_session)){
            $openers = getOpenersMenus();
            $apimenu = new Apimenu();
            $apimenu->menutype = 'openers';
            $apimenu->menus = json_encode($openers);
            $apimenu->save();
        }else{
            $openers = json_decode($openers_session->menus,true);
        }

        view()->share('home', $home);
        view()->share('client_logo', $client_logo);
        view()->share('testimonials', $testimonials);
        view()->share('areas', $areas);
        view()->share('design', $design);
        view()->share('quote', $quote);
        view()->share('calltoaction', $calltoaction);  
        view()->share('residential_menus', $residential_menus);  
        view()->share('commercial_menus', $commercial_menus);  
        view()->share('openers', $openers); 
         
          
    }
}
