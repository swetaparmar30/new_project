<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Updatelog;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        $mission_values = json_decode($about->mission_values);
        if (isset($about) && $about != '' && $about != null) {

            return view('about.index', compact('about', 'mission_values'));
        } else {
            return view('about.index');
        }

    }
    public function save(Request $request)
    {


        $id = $request->about_id;
        $input = [

            'meta_title' => isset($request->meta_title) ? $request->meta_title : null,
            'meta_keyword' => isset($request->meta_keyword) ? $request->meta_keyword : null,
            'meta_description' => isset($request->meta_description) ? $request->meta_description : null,
            'title' => isset($request->title) ? $request->title : null,
            'description' => isset($request->description) ? $request->description : null,
            'missiontitle' => isset($request->missiontitle) ? $request->missiontitle : null,
            'bannerimage' => isset($request->bannerimage) ? $request->bannerimage : null,
            'abt_mb_bannerimage' => isset($request->abt_mb_bannerimage) ? $request->abt_mb_bannerimage : null,
            'missiondescription' => isset($request->missiondescription) ? $request->missiondescription : null,
            'missionbutton' => isset($request->missionbutton) ? $request->missionbutton : null,
            'missionbuttonurl' => isset($request->missionbuttonurl) ? $request->missionbuttonurl : null,
            'teamtitle' => isset($request->teamtitle) ? $request->teamtitle : null,
            'teambackground' => isset($request->teambackground) ? $request->teambackground : null,
            'teamdescription' => isset($request->teamdescription) ? $request->teamdescription : null,
            'button1' => isset($request->button1) ? $request->button1 : null,
            'button1url' => isset($request->button1url) ? $request->button1url : null,
            'button2' => isset($request->button2) ? $request->button2 : null,
            'button2url' => isset($request->button2url) ? $request->button2url : null,
            'historytitle' => isset($request->historytitle) ? $request->historytitle : null,
            'historyimage' => isset($request->historyimage) ? $request->historyimage : null,
            'historysubtitle' => isset($request->historysubtitle) ? $request->historysubtitle : null,
            'historydescription' => isset($request->historydescription) ? $request->historydescription : null,
            'historybutton' => isset($request->historybutton) ? $request->historybutton : null,
            'historybuttonurl' => isset($request->historybuttonurl) ? $request->historybuttonurl : null,
            'our_history_title' => isset($request->our_history_title) ? $request->our_history_title : null,
            'our_history_desc' => isset($request->our_history_desc) ? $request->our_history_desc : null,

        ];

        $mission_values = json_encode([
            'status' => 1,
            'mv_title_1' => isset($request->mv_title_1) ? $request->mv_title_1 : '',
            'mv_title_2' => isset($request->mv_title_2) ? $request->mv_title_2 : '',
            'mv_title_3' => isset($request->mv_title_3) ? $request->mv_title_3 : '',
            'mv_title_4' => isset($request->mv_title_4) ? $request->mv_title_4 : '',
            'mv_title_5' => isset($request->mv_title_5) ? $request->mv_title_5 : '',
            'mv_title_6' => isset($request->mv_title_6) ? $request->mv_title_6 : '',
            'mv_description_1' => isset($request->mv_description_1) ? $request->mv_description_1 : '',
            'mv_description_2' => isset($request->mv_description_2) ? $request->mv_description_2 : '',
            'mv_description_3' => isset($request->mv_description_3) ? $request->mv_description_3 : '',
            'mv_description_4' => isset($request->mv_description_4) ? $request->mv_description_4 : '',
            'mv_description_5' => isset($request->mv_description_5) ? $request->mv_description_5 : '',
            'mv_description_6' => isset($request->mv_description_6) ? $request->mv_description_6 : '',
            'mv_icon_1' => isset($request->mv_icon_1) ? $request->mv_icon_1 : '',
            'mv_icon_2' => isset($request->mv_icon_2) ? $request->mv_icon_2 : '',
            'mv_icon_3' => isset($request->mv_icon_3) ? $request->mv_icon_3 : '',
            'mv_icon_4' => isset($request->mv_icon_4) ? $request->mv_icon_4 : '',
            'mv_icon_5' => isset($request->mv_icon_5) ? $request->mv_icon_5 : '',
            'mv_icon_6' => isset($request->mv_icon_6) ? $request->mv_icon_6 : '',
        ]);

        $input['mission_values'] = isset($mission_values) ? $mission_values : '';

        if (isset($id) && $id != '') {
            $about = About::findOrFail($id);
            $edata = json_encode($about);

            if ($about) {
                $about->fill($input);
                $about->update();

                // Log the update
                Updatelog::create(['tablename' => 'abouts', 'table_primary_id' => $about->id, 'edit_log' => $edata]);

                return redirect()->route('about.index')->with('success', 'About Setting Updated Successfully.');
            } else {
                return redirect()->route('about.index')->with('error', 'About Setting Update Failed!');
            }
        } else {
            $about = new About();
            $about->fill($input);
            $about->save();

            return redirect()->route('about.index')->with('success', 'About Setting Created Successfully.');
        }
    }
}