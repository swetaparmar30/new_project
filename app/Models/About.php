<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;
use Illuminate\Support\Carbon;

class About extends Model
{
    use HasFactory, SoftDeletes;
    use Userstamps;
    public $timestamps = true;
    protected $userstamps = [
       'created_by' => 'created_by', 
       'updated_by' => 'updated_by',
       'deleted_by' => 'deleted_by',
    ];

    protected $fillable = [
       'meta_title',
        'meta_keyword',
        'meta_description',
        'title',
        'description',
        'bannerimage',
        'abt_mb_bannerimage',
        'mission_values',
        'missiontitle',
        'missiondescription',
        'missionbutton',
        'missionbuttonurl',
        'teamtitle',
        'teamdescription',
        'teambackground',
        'button1',
        'button1url',
        'button2',
        'button2url',
        'historytitle',
        'historysubtitle',
        'historydescription',
        'historyimage',
        'historybutton',
        'historybuttonurl', 
        'our_history_title',
        'our_history_desc'
    ];

}
