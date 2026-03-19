<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageSetting;
use App\Models\Location;
use App\Models\ClientLogo;
use App\Models\Collection;
use App\Models\Apicategorydata;
use App\Models\Apiproductdata;
use App\Models\Apisubcategorydata;
use App\Models\CollectionsImage;
use App\Models\DoorSelection;
use App\Models\Apibannerdata;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use GuzzleHttp\HandlerStack;

class ProductController extends Controller
{

    public function details($type, $slug)
    {
        $home = HomePageSetting::first();
        $design = json_decode($home->design_sec);
        $form = json_decode($home->form_sec);
        $locations = Location::select('*')->where('deleted_at', null)->latest()->limit(6)->get();
        $client_logo = ClientLogo::select('*')->where('status', '1')->where('deleted_at', null)->latest()->get();
        $collection = Collection::select('*')->where('deleted_at', null)->where('slug', $slug)->first();
        $collectionImages = CollectionsImage::select('*')->where('deleted_at', null)->where('collection_id', $collection->id)->get();
        $doorSelection = DoorSelection::select('*')->where('deleted_at', null)->where('collection_id', $collection->id)->get();

        return view('frontend.product.detail', compact('design', 'locations', 'form', 'client_logo', 'collection', 'collectionImages', 'doorSelection'));
    }

    public function test()
    {
        return view('frontend.product.test');
    }

    public function residential()
    {

        $meta_title = "Residential Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
        $meta_description = "";
        $meta_keywords = "residential garage door";

        $data = Apicategorydata::where('menutype', 'residential')->where('category_type', '!=', null)->get();
        $banners = Apibannerdata::where('category', 'residential')->get();

        $result = [];
        if ($data->count() > 0) {
            foreach ($data as $key => $val) {
                $jsonn = json_decode($val->category_json);
                $pdata = Apiproductdata::where('menutype', 'residential')->where('category', $jsonn->slug)->where('status', 1)->orderBy('order', 'asc')->get();

                $result[$jsonn->category]['category'] = ['category' => $jsonn->category, 'title' => $jsonn->title, 'description' => $jsonn->description, 'slug' => $jsonn->slug];

                foreach ($pdata as $pkey => $pval) {
                    // $result[$jsonn->category]['product'][] = json_decode($pval->product_json,true); 

                    $productData = json_decode($pval->product_json, true);
                    $productData['maincat'] = $pval->maincat; // add maincat inside each product

                    $result[$jsonn->category]['product'][] = $productData;
                }
            }

            return view('frontend.product.residential', compact('result', 'banners', 'meta_title', 'meta_description', 'meta_keywords'));
        } else {
            abort(404);
        }

    }

    public function residentialproducts($slug)
    {

        if ($slug == 'openers') {
            $meta_title = "Residential Garage Door Openers - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "garage door openers, residential garage door openers";
            $banner_title = "Residential Garage Door Openers";

        } elseif ($slug == 'distinctions-series-custom-garage-doors') {

            $meta_title = "Distinctions Series™ Custom Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "Distinctions Series™ Custom Garage Doors";
            $banner_title = "Distinctions Series™ Custom Garage Doors";

        } elseif ($slug == 'aspen-series') {

            $meta_title = "Aspen™ Series Steel Residential Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "Aspen™ Series Steel Residential Garage Doors";
            $banner_title = "Aspen™ Series Steel Residential Garage Doors";

        } elseif ($slug == 'encore-series') {

            $meta_title = "Encore™ Series Insulated Steel Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "Encore™ Series Insulated Steel Garage Doors";
            $banner_title = "Encore™ Series Insulated Steel Garage Doors";

        } elseif ($slug == 'advantage-series-steel-pan-garage-doors') {

            $meta_title = "Advantage Series™ Steel Pan Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "Advantage Series™ Steel Pan Garage Doors";
            $banner_title = "Advantage Series™ Steel Pan Garage Doors";

        } elseif ($slug == 'classic-style-garage-doors') {

            $meta_title = "Classic Style Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "classic style garage doors";
            $banner_title = "Classic Style Garage Doors";

        } elseif ($slug == 'farmhouse-style-garage-doors') {

            $meta_title = "Farmhouse Style Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "farmhouse style garage doors";
            $banner_title = "Farmhouse Style Garage Doors";

        } elseif ($slug == 'contemporary-style-garage-doors') {

            $meta_title = "Contemporary Style Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "contemporary style garage doors";
            $banner_title = "Contemporary Style Garage Doors";

        } elseif ($slug == 'woodlook-garage-doors') {

            $meta_title = "Woodlook Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "wood look garage doors";
            $banner_title = "Woodlook Garage Doors";

        } elseif ($slug == 'uninsulated-garage-doors') {

            $meta_title = "Uninsulated Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "uninsulated garage doors";
            $banner_title = "Uninsulated Garage Doors";

        } elseif ($slug == 'polystyrene-insulated-garage-doors') {

            $meta_title = "Polystyrene Insulated Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "polystyrene insulated garage doors";
            $banner_title = "Polystyrene Insulated Garage Doors";

        } elseif ($slug == 'polyurethane-insulated-garage-doors') {

            $meta_title = "Polyurethane Insulated Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "polyurethane insulated garage doors";
            $banner_title = "Polyurethane Insulated Garage Doors";

        } else {

            $meta_title = "";
            $meta_description = "";
            $meta_keywords = "";
            $banner_title = "";
        }

        $data = Apicategorydata::where('menutype', 'residential')->where('category', $slug)->get();


        $result = [];
        if ($data->count() > 0) {
            foreach ($data as $key => $val) {
                $jsonn = json_decode($val->category_json);
                $pdata = Apiproductdata::where('menutype', 'residential')->where('category', $val->category)->where('subcategory', null)->where('status', 1)->orderBy('order', 'asc')->get();
                $result[$jsonn->category]['category'] = ['category' => $jsonn->category, 'title' => $jsonn->title, 'description' => $jsonn->description, 'slug' => $jsonn->slug];



                $cdata = Apisubcategorydata::where('menutype', 'residential')->where('category', $jsonn->slug)->orderBy('order', 'asc')->get();

                if ($cdata->count() > 0) {
                    foreach ($cdata as $pkey => $pval) {
                        $result[$jsonn->category]['subcategories'][] = json_decode($pval->category_json, true);
                    }
                } else {
                    $result[$jsonn->category]['subcategories'] = [];
                }

                foreach ($pdata as $pkey => $pval) {
                    // $result[$jsonn->category]['product'][] = json_decode($pval->product_json,true); 

                    $productData = json_decode($pval->product_json, true);
                    $productData['maincat'] = $pval->maincat; // add maincat inside each product

                    $result[$jsonn->category]['product'][] = $productData;
                }

            }
            return view('frontend.product.residentialcategory', compact('result', 'meta_title', 'meta_description', 'meta_keywords', 'banner_title'));
        } else {

            $cdata = Apisubcategorydata::where('menutype', 'residential')->where('subcategory', $slug)->orderBy('order', 'asc')->get();

            if ($cdata->count() > 0) {
                foreach ($cdata as $pkey => $pval) {

                    $json = json_decode($pval->category_json, true);

                    $arp = [];
                    $dataproduct = Apiproductdata::select('product_json')->where('menutype', 'residential')->where('subcategory', $json['slug'])->where('status', 1)->orderBy('order', 'asc')->get()->toArray();

                    foreach ($dataproduct as $dkey => $vls) {
                        $arp[] = json_decode($vls['product_json'], true);
                    }
                    $result[$pkey]['category'] = $pval['category'];
                    $result[$pkey]['subcategory'][] = $json;
                    $result[$pkey]['product'] = $arp;
                }

                return view('frontend.product.residentialsubcategory', compact('result'));
            } else {
                $pdata = Apiproductdata::where('menutype', 'residential')->where('product', $slug)->where('status', 1)->orderBy('order', 'asc')->first();

                if ($pdata) {
                    $result = isset($pdata->product_json) ? json_decode($pdata->product_json, true) : [];
                    $result = $result;
                    return view('frontend.product.residentialdetail', compact('result'));
                } else {
                    abort(404);
                }
            }
        }
    }

    public function openers($slug)
    {
        $slug = explode('-', $slug);
        $data = $this->getrecords('POST', ['token' => env("API_TOKEN"), 'type' => $slug[0], 'slug' => $slug[1]], 'seriespage');
        $result = [];

        if (isset($data) && $data->status == 'Success') {
            foreach ($data->data as $key => $val) {
                $result[$val->category]['category'] = ['category' => $val->category, 'title' => $val->title, 'description' => $val->description, 'slug' => $val->slug];
                $result[$val->category]['product'] = $val->products;
            }

            return view('frontend.product.openerscategory', compact('result'));
        } else {
            $result = $this->openersproductdetail($slug);
            if ($result) {
                $result = $result[0];
                return view('frontend.product.openersdetail', compact('result'));
            } else {
                abort(404);
            }

        }
    }

    public function residentialproductdetail($slug)
    {
        $data = $this->getrecords('POST', ['token' => env("API_TOKEN"), 'type' => 'residential', 'slug' => $slug], 'product_detail');

        $result = [];
        if ($data) {
            if ($data['status'] == 'Success') {
                $result = $data['data'];
            }
            return $result;
        } else {
            return false;
        }

    }

    public function residentialproductdata($slug, $slug2)
    {
        // $data = $this->getrecords('POST',['token'=>env("API_TOKEN"), 'type'=>'residential', 'slug'=>$slug2], 'product_detail');

        // $result = [];
        // if($data){
        //     if($data['status'] == 'Success'){
        //         $result = $data['data'][0];
        //         dd($result);
        //         return view('frontend.product.residentialdetail',compact('result'));
        //     }else{
        //         abort(404);
        //     }
        // }else{
        //     abort(404);
        // }

        $pdata = Apiproductdata::where('menutype', 'residential')->where('category', $slug)->where('status', 1)->where('product', $slug2)->first();

        if ($pdata) {
            $result = isset($pdata->product_json) ? json_decode($pdata->product_json, true) : [];
            $result = $result;
            return view('frontend.product.residentialdetail', compact('result'));
        } else {
            abort(404);
        }

    }

    public function commercial()
    {

        $meta_title = "Commercial Overhead Doors";
        $meta_description = "";
        $meta_keywords = "commercial door, overhead commercial door";

        $data = Apicategorydata::where('menutype', 'commercial')->get();
        $banners = Apibannerdata::where('category', 'commercial')->get();
        $result = [];
        if ($data->count() > 0) {
            foreach ($data as $key => $val) {
                $jsonn = json_decode($val->category_json);
                $pdata = Apiproductdata::where('menutype', 'commercial')->where('category', $jsonn->slug)->where('subcategory', null)->where('status', 1)->orderBy('order', 'asc')->get();

                $result[$jsonn->category]['category'] = ['category' => $jsonn->category, 'title' => $jsonn->title, 'description' => $jsonn->description, 'slug' => $jsonn->slug];

                if ($pdata->count() > 0) {
                    foreach ($pdata as $pkey => $pval) {
                        $result[$jsonn->category]['product'][] = json_decode($pval->product_json, true);
                    }
                } else {
                    $result[$jsonn->category]['product'] = [];
                }

                $cdata = Apisubcategorydata::where('menutype', 'commercial')->where('category', $jsonn->slug)->orderBy('order', 'asc')->get();

                if ($cdata->count() > 0) {
                    foreach ($cdata as $pkey => $pval) {

                        $subpr = json_decode($pval->category_json, true);

                        //foreach($subpr as $subk=>$subv){
                        $psdata = Apiproductdata::where('menutype', 'commercial')->where('subcategory', $subpr['slug'])->where('status', 1)->orderBy('order', 'asc')->get();
                        $psd = [];
                        if ($psdata->count() > 0) {
                            foreach ($psdata as $pkey => $pvalue) {
                                $psd[] = json_decode($pvalue->product_json, true);
                            }
                        }
                        //}
                        $subpr['products'] = $psd;
                        $result[$jsonn->category]['subcategories'][] = $subpr;
                    }
                } else {
                    $result[$jsonn->category]['subcategories'] = [];
                }

            }

            return view('frontend.product.commercial', compact('result', 'banners', 'meta_title', 'meta_description', 'meta_keywords'));
        } else {
            abort(404);
        }
    }

    public function commercialproducts($slug)
    {

        if ($slug == 'commercial-high-speed-fabric-doors') {
            $meta_title = "High Speed Overhead Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "high speed overhead doors";
            $banner_title = "RapidCoil™ Commercial High Speed Fabric Doors";

        } elseif ($slug == 'fire-station-doors') {

            $meta_title = "Fire Station Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "fire station doors";
            $banner_title = "Fire Station Doors";

        } elseif ($slug == 'agricultural-doors') {

            $meta_title = "Agricultural Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "agricultural doors";
            $banner_title = "Agricultural Doors";

        } elseif ($slug == 'parking-garage-doors') {

            $meta_title = "Parking Garage Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "parking garage doors, parking facility garage door";
            $banner_title = "Parking Facility Doors";

        } elseif ($slug == 'loading-dock-doors') {

            $meta_title = "Loading Dock Doors - Raynor Garage Doors of Central Nebraska Inc";
            $meta_description = "";
            $meta_keywords = "loading dock doors";
            $banner_title = "Loading Dock Doors";

        } else {

            $meta_title = "";
            $meta_description = "";
            $meta_keywords = "";
            $banner_title = "";
        }

        $data = Apicategorydata::where('menutype', 'commercial')->where('category', $slug)->get();

        $result = [];
        if ($data->count() > 0) {
            foreach ($data as $key => $val) {
                $jsonn = json_decode($val->category_json);
                $pdata = Apiproductdata::where('menutype', 'commercial')->where('category', $jsonn->slug)->where('subcategory', null)->where('status', 1)->orderBy('order', 'asc')->get();

                $result[$jsonn->category]['category'] = ['category' => $jsonn->category, 'title' => $jsonn->title, 'description' => $jsonn->description, 'slug' => $jsonn->slug];

                $result[$jsonn->category]['product'] = [];
                foreach ($pdata as $pkey => $pval) {
                    $result[$jsonn->category]['product'][] = json_decode($pval->product_json, true);
                }

                $cdata = Apisubcategorydata::where('menutype', 'commercial')->where('category', $jsonn->slug)->orderBy('order', 'asc')->get();

                if ($cdata->count() > 0) {
                    foreach ($cdata as $pkey => $pval) {
                        $result[$jsonn->category]['subcategories'][] = json_decode($pval->category_json, true);
                    }
                } else {
                    $result[$jsonn->category]['subcategories'] = [];
                }

                if ($jsonn->title == 'Loading Dock Doors') {
                    $result[$pkey]['subcategories_dts'] = [];
                    $datadts = Apicategorydata::where('menutype', 'commercial')->whereIn('category', ['thermal-efficient-loading-dock-doors', 'secure-and-durable-loading-dock-doors'])->get();

                    foreach ($datadts as $key => $val) {
                        $rs = [];
                        $jsonns = json_decode($val->category_json);
                        $pdata = Apiproductdata::where('menutype', 'commercial')->where('category', $jsonns->slug)->where('subcategory', null)->where('status', 1)->get();

                        $rs['category'] = ['category' => $jsonns->category, 'title' => $jsonns->title, 'description' => $jsonns->description, 'slug' => $jsonns->slug];

                        $rs['product'] = [];
                        foreach ($pdata as $pkey => $pval) {
                            // $rs[$key]['product'][] = json_decode($pval->product_json,true); 
                            $rs[$key]['product'][$pky] = json_decode($pval->product_json, true);
                            $rs[$key]['product'][$pky]['maincat'] = isset($pval->maincat) ? $pval->maincat : '';

                        }

                        $cdata = Apisubcategorydata::where('menutype', 'commercial')->where('category', $jsonns->slug)->orderBy('order', 'asc')->get();

                        if ($cdata->count() > 0) {
                            foreach ($cdata as $pkey => $pval) {
                                $rs['subcategories'][] = json_decode($pval->category_json, true);
                            }
                        } else {
                            $rs['subcategories'] = [];
                        }
                        $result[$jsonn->category]['subcategories_dts'][] = $rs;
                    }

                }

            }

            return view('frontend.product.commercialcategory', compact('result', 'meta_title', 'meta_description', 'meta_keywords', 'banner_title'));
        } else {

            $cdata = Apisubcategorydata::where('menutype', 'commercial')->where('subcategory', $slug)->orderBy('order', 'asc')->get();

            if ($cdata->count() > 0) {
                foreach ($cdata as $pkey => $pval) {

                    $json = json_decode($pval->category_json, true);

                    $arp = [];
                    $dataproduct = Apiproductdata::select('maincat', 'product_json', 'product')->where('menutype', 'commercial')->where('subcategory', $json['slug'])->where('status', 1)->orderBy('order', 'asc')->get()->toArray();
                    //dd($dataproduct);
                    $dup = [];

                    foreach ($dataproduct as $dkey => $vls) {
                        // $dup[] = $vls['product'];
                        // if (!in_array($vls['product'], $dup))
                        // $arp[] = json_decode($vls['product_json'],true);
                        $ars = json_decode($vls['product_json'], true);
                        $ars['maincat'] = $vls['maincat'];
                        $arp[$dkey] = $ars;
                    }
                    $result[$pkey]['category'] = $pval['category'];
                    $result[$pkey]['product'] = $arp;
                    $result[$pkey]['subcategory'][] = $json;
                }

                return view('frontend.product.commercialsubcategory', compact('result'));
            } else {
                $pdata = Apiproductdata::where('menutype', 'commercial')->where('product', $slug)->where('status', 1)->first();

                if ($pdata) {
                    $result = isset($pdata->product_json) ? json_decode($pdata->product_json, true) : [];
                    $result = $result;
                    return view('frontend.product.commercialdetail', compact('result'));
                } else {
                    abort(404);
                }
            }
        }
    }

    public function commercialsubcategory($slug)
    {
        $cdata = Apisubcategorydata::where('menutype', 'commercial')->where('subcategory', $slug)->orderBy('order', 'asc')->get();

        if ($cdata->count() > 0) {
            foreach ($cdata as $pkey => $pval) {

                $json = json_decode($pval->category_json, true);

                //if(count($json['products']) > 0)
                //  $result[$pkey]['product'] = $json['products'];
                //else{
                $arp = [];
                $dataproduct = Apiproductdata::select('product_json')->where('menutype', 'commercial')->where('subcategory', $json['slug'])->where('status', 1)->orderBy('order', 'asc')->get()->toArray();

                foreach ($dataproduct as $dkey => $vls) {
                    $arp[] = json_decode($vls['product_json'], true);
                }

                $result[$pkey]['product'] = $arp;
                //}

                $result[$pkey]['subcategory'][] = $json;
            }
            return view('frontend.product.commercialsubcategory', compact('result'));
        } else {
            $pdata = Apiproductdata::where('menutype', 'commercial')->where('product', $slug)->where('status', 1)->first();

            if ($pdata) {
                $result = isset($pdata->product_json) ? json_decode($pdata->product_json, true) : [];
                $result = $result;
                return view('frontend.product.commercialdetail', compact('result'));
            } else {
                abort(404);
            }
        }
    }

    public function commercialproductdetail($slug, $slug2)
    {
        $pdata = Apiproductdata::where('menutype', 'commercial')->where('category', $slug)->where('product', $slug2)->where('status', 1)->first();

        if ($pdata) {
            $result = isset($pdata->product_json) ? json_decode($pdata->product_json, true) : [];
            $result = $result;
            return view('frontend.product.commercialdetail', compact('result'));
        } else {
            $pdata = Apiproductdata::where('menutype', 'commercial')->where('product', $slug2)->where('status', 1)->first();

            if ($pdata) {
                $result = isset($pdata->product_json) ? json_decode($pdata->product_json, true) : [];
                $result = $result;
                return view('frontend.product.commercialdetail', compact('result'));
            } else {
                abort(404);
            }
        }
    }

    public function commercialproductdetailn($slug, $slug2, $slug3)
    {
        $pdata = Apiproductdata::where('menutype', 'commercial')->where('category', $slug)->where('product', $slug3)->where('status', 1)->first();

        if ($pdata) {
            $result = isset($pdata->product_json) ? json_decode($pdata->product_json, true) : [];
            $result = $result;
            return view('frontend.product.commercialdetail', compact('result'));
        } else {
            $pdata = Apiproductdata::where('menutype', 'commercial')->where('product', $slug3)->where('status', 1)->first();

            if ($pdata) {
                $result = isset($pdata->product_json) ? json_decode($pdata->product_json, true) : [];
                $result = $result;
                return view('frontend.product.commercialdetail', compact('result'));
            } else {
                abort(404);
            }
        }
    }

    public function getrecords($method_request, $data, $cat)
    {

        $stack = HandlerStack::create();
        // Add retry middleware to the stack
        $stack->push(Middleware::retry(
            function ($retries, RequestInterface $request, ResponseInterface $response = null, \Exception $exception = null) {
                // Limit the number of retries
                if ($retries >= 3) {
                    return false;
                }

                // Retry on server errors or connection issues
                if ($response && $response->getStatusCode() >= 500) {
                    return true;
                }

                if ($exception instanceof \GuzzleHttp\Exception\ConnectException) {
                    return true;
                }

                return false;
            },
            function ($retries) {
                // Exponential backoff
                return pow(2, $retries);
            }
        ));

        $client = new Client(); // Create a new Guzzle client

        if ($cat) {
            if ($cat == 'residentialpage' || $cat == 'commercialpage' || $cat == 'seriespage') {
                $url = env("API_URL") . 'product/listcategory';
            }
            if ($cat == 'product_detail') {
                $url = env("API_URL") . 'product/detail';
            }
            if ($cat == 'subcategory') {
                $url = env("API_URL") . 'product/listsubcategory';
            }
        }

        try {
            if ($method_request == 'POST') {
                $response = $client->request('POST', $url, [
                    'json' => $data,
                    'timeout' => 60,
                    'connect_timeout' => 60
                ]);
            } else {
                $response = $client->request('GET', $url, [
                    'timeout' => 60, // Set a timeout for the request
                    'connect_timeout' => 60,
                ]);
            }

            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();

            return json_decode($body, true);
        } catch (\Exception $e) {
            // Handle the error
            return ['status' => 'Failed'];
        }

    }

    function makeApiRequest($url, $postFields = null)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); // Set a timeout

        if ($postFields) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        }

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($response === false) {
            $error = curl_error($ch);
            error_log("cURL Error: $error");
        } else if ($httpCode != 200) {
            error_log("HTTP Code: $httpCode, Response: $response");
        }

        curl_close($ch);

        return $response;
    }

}
