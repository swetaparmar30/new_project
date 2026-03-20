<div class="accordion-body">
    <div class="row"> 
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="row form-sec">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                    <label for="">Title</label>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="text" name="system_setting_title" id="setting_title" placeholder="Title" data-parsley-required-message="Please Enter Title" value="{{ isset($system_setting->system_setting_title) ? $system_setting->system_setting_title : '' }}">
                </div>
            </div>
            <div class="row form-sec">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                    <label for="">Sub Title</label>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="text" name="system_sub_title" id="system_sub_title" placeholder="Title" data-parsley-required-message="Please Enter Title" value="{{ isset($system_setting->system_sub_title) ? $system_setting->system_sub_title : '' }}">
                </div>
            </div>
            <div class="row form-sec">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                    <label for="">Description</label>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <textarea class="form-control rich-text-editor" id="system_setting_description" name="system_setting_description" style="height: 300px;"  data-parsley-errors-container="#content_required" data-parsley-required-message="Please Enter Description">{{ isset($system_setting->system_setting_description) ? $system_setting->system_setting_description : '' }}</textarea>
                    <span id="content_required" class="parsley-required" style="font-weight: 500 !important;"></span>
                </div>
            </div>
             <div class="row form-sec">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                    <label for="">Description</label>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <textarea class="form-control rich-text-editor" id="system_setting_description_1" name="system_setting_description_1" style="height: 300px;"  data-parsley-errors-container="#content_required" data-parsley-required-message="Please Enter Description">{{ isset($system_setting->system_setting_description_1) ? $system_setting->system_setting_description_1 : '' }}</textarea>
                    <span id="content_required" class="parsley-required" style="font-weight: 500 !important;"></span>
                </div>
            </div>

            <div class="row form-sec">
                <label for="">Image </label>
                 <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                    <div class="upload-img-sec">
                        <input type="hidden" name="system_img" id="system_img_id" value="{{ isset($system_setting->system_img) ? $system_setting->system_img : '' }}">
                        @if(isset($system_setting->system_img) && $system_setting->system_img != '' && $system_setting->system_img != null)
                        @php
                        $img = App\Models\MediaImage::select('name')->where('id', $system_setting->system_img)->first();
                        @endphp
                        <div class="image_preview_div">
                            <img src="{{ asset('uploads/'.$img->name) }}" alt="" id="system_avtar" class="profile-img" > 
                            <a id="remove_system_image"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @else
                        <div class="image_preview_div">
                            <img src="{{ asset('assets/images/user/img-demo_1041.jpg') }}" alt="" id="system_avtar" class="profile-img"> 
                            <a id="remove_system_image" style="display: none;"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @endif

                        <label for="" style="cursor: pointer;" class="choose_file hm-choose-img-title" data-val="system_img">Choose image</label>
                        @if(isset($system_setting->system_img) && $system_setting->system_img != '' && $system_setting->system_img != null)
                        @else
                        <span id="img_alert1" class="parsley-required" style="font-weight: 500 !important;color: red !important;">Please Add Image </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="row form-sec">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                    <label for="">Title 1</label>
                    <input type="text" name="title1" id="title1" placeholder="Title" data-parsley-required-message="Please Enter Title" value="{{ isset($system_setting->title1) ? $system_setting->title1 : '' }}">
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="">Icon 1</label>
                    <div class="upload-img-sec">
                        <input type="hidden" name="system_img1" id="system_img_id1" value="{{ isset($system_setting->system_img1) ? $system_setting->system_img1 : '' }}">
                        @if(isset($system_setting->system_img1) && $system_setting->system_img1 != '' && $system_setting->system_img1 != null)
                        @php
                        $img = App\Models\MediaImage::select('name')->where('id', $system_setting->system_img1)->first();
                        @endphp
                        <div class="image_preview_div">
                            <img src="{{ asset('uploads/'.$img->name) }}" alt="" id="system_avtar1" class="profile-img" > 
                            <a id="remove_system_image1"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @else
                        <div class="image_preview_div">
                            <img src="{{ asset('assets/images/user/img-demo_1041.jpg') }}" alt="" id="system_avtar1" class="profile-img"> 
                            <a id="remove_system_image1" style="display: none;"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @endif

                        <label for="" style="cursor: pointer;" class="choose_file hm-choose-img-title" data-val="system_img1">Choose image</label>
                        @if(isset($system_setting->system_img1) && $system_setting->system_img1 != '' && $system_setting->system_img1 != null)
                        @else
                        <span id="img_alert1" class="parsley-required" style="font-weight: 500 !important;color: red !important;"></span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row form-sec">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                    <label for="">Title 2</label>
                    <input type="text" name="title2" id="title2" placeholder="Title" data-parsley-required-message="Please Enter Title" value="{{ isset($system_setting->title2) ? $system_setting->title2 : '' }}">
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="">Icon 2</label>
                    <div class="upload-img-sec">
                        <input type="hidden" name="system_img2" id="system_img_id2" value="{{ isset($system_setting->system_img2) ? $system_setting->system_img2 : '' }}">
                        @if(isset($system_setting->system_img2) && $system_setting->system_img2 != '' && $system_setting->system_img2 != null)
                        @php
                        $img = App\Models\MediaImage::select('name')->where('id', $system_setting->system_img2)->first();
                        @endphp
                        <div class="image_preview_div">
                            <img src="{{ asset('uploads/'.$img->name) }}" alt="" id="system_avtar2" class="profile-img" > 
                            <a id="remove_system_image2"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @else
                        <div class="image_preview_div">
                            <img src="{{ asset('assets/images/user/img-demo_1041.jpg') }}" alt="" id="system_avtar2" class="profile-img"> 
                            <a id="remove_system_image2" style="display: none;"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @endif

                        <label for="" style="cursor: pointer;" class="choose_file hm-choose-img-title" data-val="system_img2">Choose image</label>
                        @if(isset($system_setting->system_img2) && $system_setting->system_img2 != '' && $system_setting->system_img2 != null)
                        @else
                        <span id="img_alert1" class="parsley-required" style="font-weight: 500 !important;color: red !important;"></span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row form-sec">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                    <label for="">Title 3</label>
                    <input type="text" name="title3" id="title3" placeholder="Title" data-parsley-required-message="Please Enter Title" value="{{ isset($system_setting->title3) ? $system_setting->title3 : '' }}">
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="">Icon 3</label>
                    <div class="upload-img-sec">
                        <input type="hidden" name="system_img3" id="system_img_id3" value="{{ isset($system_setting->system_img3) ? $system_setting->system_img3 : '' }}">
                        @if(isset($system_setting->system_img3) && $system_setting->system_img3 != '' && $system_setting->system_img3 != null)
                        @php
                        $img = App\Models\MediaImage::select('name')->where('id', $system_setting->system_img3)->first();
                        @endphp
                        <div class="image_preview_div">
                            <img src="{{ asset('uploads/'.$img->name) }}" alt="" id="system_avtar3" class="profile-img" > 
                            <a id="remove_system_image3"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @else
                        <div class="image_preview_div">
                            <img src="{{ asset('assets/images/user/img-demo_1041.jpg') }}" alt="" id="system_avtar3" class="profile-img"> 
                            <a id="remove_system_image3" style="display: none;"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @endif

                        <label for="" style="cursor: pointer;" class="choose_file hm-choose-img-title" data-val="system_img3">Choose image</label>
                        @if(isset($system_setting->system_img3) && $system_setting->system_img3 != '' && $system_setting->system_img3 != null)
                        @else
                        <span id="img_alert1" class="parsley-required" style="font-weight: 500 !important;color: red !important;"></span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row form-sec">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                    <label for="">Title 4</label>
                    <input type="text" name="title4" id="title4" placeholder="Title" data-parsley-required-message="Please Enter Title" value="{{ isset($system_setting->title4) ? $system_setting->title4 : '' }}">
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="">Icon 4</label>
                    <div class="upload-img-sec">
                        <input type="hidden" name="system_img4" id="system_img_id4" value="{{ isset($system_setting->system_img4) ? $system_setting->system_img4 : '' }}">
                        @if(isset($system_setting->system_img4) && $system_setting->system_img4 != '' && $system_setting->system_img4 != null)
                        @php
                        $img = App\Models\MediaImage::select('name')->where('id', $system_setting->system_img4)->first();
                        @endphp
                        <div class="image_preview_div">
                            <img src="{{ asset('uploads/'.$img->name) }}" alt="" id="system_avtar4" class="profile-img" > 
                            <a id="remove_system_image4"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @else
                        <div class="image_preview_div">
                            <img src="{{ asset('assets/images/user/img-demo_1041.jpg') }}" alt="" id="system_avtar4" class="profile-img"> 
                            <a id="remove_system_image4" style="display: none;"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @endif

                        <label for="" style="cursor: pointer;" class="choose_file hm-choose-img-title" data-val="system_img4">Choose image</label>
                        @if(isset($system_setting->system_img4) && $system_setting->system_img4 != '' && $system_setting->system_img4 != null)
                        @else
                        <span id="img_alert1" class="parsley-required" style="font-weight: 500 !important;color: red !important;"></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="accordion-body">
    <div class="row"> 
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="row form-sec">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                    <label for="">Title 1</label>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="text" name="system_setting_title_1" id="setting_title_1" placeholder="Title" data-parsley-required-message="Please Enter Title" value="{{ isset($system_setting->system_setting_title_1) ? $system_setting->system_setting_title_1 : '' }}">
                </div>
            </div>
            <div class="row form-sec">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                    <label for="">Sub Title 1</label>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="text" name="system_sub_title_1" id="system_sub_title_1" placeholder="Title" data-parsley-required-message="Please Enter Title" value="{{ isset($system_setting->system_sub_title_1) ? $system_setting->system_sub_title_1 : '' }}">
                </div>
            </div>
            <div class="row form-sec">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                    <label for="">Description 1</label>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <textarea class="form-control rich-text-editor" id="system_setting_description_2" name="system_setting_description_2" style="height: 300px;"  data-parsley-errors-container="#content_required" data-parsley-required-message="Please Enter Description">{{ isset($system_setting->system_setting_description_2) ? $system_setting->system_setting_description_2 : '' }}</textarea>
                    <span id="content_required" class="parsley-required" style="font-weight: 500 !important;"></span>
                </div>
            </div>
             <div class="row form-sec">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                    <label for="">Description 1 </label>
                </div>
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <textarea class="form-control rich-text-editor" id="system_setting_description_3" name="system_setting_description_3" style="height: 300px;"  data-parsley-errors-container="#content_required" data-parsley-required-message="Please Enter Description">{{ isset($system_setting->system_setting_description_3) ? $system_setting->system_setting_description_3 : '' }}</textarea>
                    <span id="content_required" class="parsley-required" style="font-weight: 500 !important;"></span>
                </div>
            </div>

            <div class="row form-sec">
                <label for="">Image 1</label>
                 <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                    <div class="upload-img-sec">
                        <input type="hidden" name="system_img9" id="system_img9" value="{{ isset($system_setting->system_img9) ? $system_setting->system_img9 : '' }}">
                        @if(isset($system_setting->system_img9) && $system_setting->system_img9 != '' && $system_setting->system_img9 != null)
                        @php
                        $img = App\Models\MediaImage::select('name')->where('id', $system_setting->system_img9)->first();
                        @endphp
                        <div class="image_preview_div">
                            <img src="{{ asset('uploads/'.$img->name) }}" alt="" id="system_avtar9" class="profile-img" > 
                            <a id="remove_system_image9"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @else
                        <div class="image_preview_div">
                            <img src="{{ asset('assets/images/user/img-demo_1041.jpg') }}" alt="" id="system_avtar9" class="profile-img"> 
                            <a id="remove_system_image9" style="display: none;"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @endif

                        <label for="" style="cursor: pointer;" class="choose_file hm-choose-img-title" data-val="system_img9">Choose image</label>
                        @if(isset($system_setting->system_img9) && $system_setting->system_img9 != '' && $system_setting->system_img9 != null)
                        @else
                        <span id="img_alert9" class="parsley-required" style="font-weight: 500 !important;color: red !important;">Please Add Image </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="row form-sec">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                    <label for="">Title 5</label>
                    <input type="text" name="title5" id="title5" placeholder="Title" data-parsley-required-message="Please Enter Title" value="{{ isset($system_setting->title5) ? $system_setting->title5 : '' }}">
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="">Icon 5</label>
                    <div class="upload-img-sec">
                        <input type="hidden" name="system_img5" id="system_img5" value="{{ isset($system_setting->system_img5) ? $system_setting->system_img5 : '' }}">
                        @if(isset($system_setting->system_img5) && $system_setting->system_img5 != '' && $system_setting->system_img5 != null)
                        @php
                        $img = App\Models\MediaImage::select('name')->where('id', $system_setting->system_img5)->first();
                        @endphp
                        <div class="image_preview_div">
                            <img src="{{ asset('uploads/'.$img->name) }}" alt="" id="system_avtar5" class="profile-img" > 
                            <a id="remove_system_image5"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @else
                        <div class="image_preview_div">
                            <img src="{{ asset('assets/images/user/img-demo_1041.jpg') }}" alt="" id="system_avtar5" class="profile-img"> 
                            <a id="remove_system_image5" style="display: none;"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @endif

                        <label for="" style="cursor: pointer;" class="choose_file hm-choose-img-title" data-val="system_img5">Choose image</label>
                        @if(isset($system_setting->system_img5) && $system_setting->system_img5 != '' && $system_setting->system_img5 != null)
                        @else
                        <span id="img_alert5" class="parsley-required" style="font-weight: 500 !important;color: red !important;"></span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row form-sec">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                    <label for="">Title 6</label>
                    <input type="text" name="title6" id="title6" placeholder="Title" data-parsley-required-message="Please Enter Title" value="{{ isset($system_setting->title6) ? $system_setting->title6 : '' }}">
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="">Icon 6</label>
                    <div class="upload-img-sec">
                        <input type="hidden" name="system_img6" id="system_img6" value="{{ isset($system_setting->system_img6) ? $system_setting->system_img6 : '' }}">
                        @if(isset($system_setting->system_img6) && $system_setting->system_img6 != '' && $system_setting->system_img6 != null)
                        @php
                        $img = App\Models\MediaImage::select('name')->where('id', $system_setting->system_img6)->first();
                        @endphp
                        <div class="image_preview_div">
                            <img src="{{ asset('uploads/'.$img->name) }}" alt="" id="system_avtar6" class="profile-img" > 
                            <a id="remove_system_image6"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @else
                        <div class="image_preview_div">
                            <img src="{{ asset('assets/images/user/img-demo_1041.jpg') }}" alt="" id="system_avtar6" class="profile-img"> 
                            <a id="remove_system_image6" style="display: none;"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @endif

                        <label for="" style="cursor: pointer;" class="choose_file hm-choose-img-title" data-val="system_img6">Choose image</label>
                        @if(isset($system_setting->system_img6) && $system_setting->system_img6 != '' && $system_setting->system_img6 != null)
                        @else
                        <span id="img_alert1" class="parsley-required" style="font-weight: 500 !important;color: red !important;"></span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row form-sec">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                    <label for="">Title 7</label>
                    <input type="text" name="title7" id="title7" placeholder="Title" data-parsley-required-message="Please Enter Title" value="{{ isset($system_setting->title7) ? $system_setting->title7 : '' }}">
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="">Icon 7</label>
                    <div class="upload-img-sec">
                        <input type="hidden" name="system_img7" id="system_img7" value="{{ isset($system_setting->system_img7) ? $system_setting->system_img7 : '' }}">
                        @if(isset($system_setting->system_img7) && $system_setting->system_img7 != '' && $system_setting->system_img7 != null)
                        @php
                        $img = App\Models\MediaImage::select('name')->where('id', $system_setting->system_img7)->first();
                        @endphp
                        <div class="image_preview_div">
                            <img src="{{ asset('uploads/'.$img->name) }}" alt="" id="system_avtar7" class="profile-img" > 
                            <a id="remove_system_image7"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @else
                        <div class="image_preview_div">
                            <img src="{{ asset('assets/images/user/img-demo_1041.jpg') }}" alt="" id="system_avtar7" class="profile-img"> 
                            <a id="remove_system_image7" style="display: none;"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @endif

                        <label for="" style="cursor: pointer;" class="choose_file hm-choose-img-title" data-val="system_img7">Choose image</label>
                        @if(isset($system_setting->system_img7) && $system_setting->system_img7 != '' && $system_setting->system_img7 != null)
                        @else
                        <span id="img_alert1" class="parsley-required" style="font-weight: 500 !important;color: red !important;"></span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row form-sec">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                    <label for="">Title 8</label>
                    <input type="text" name="title8" id="title8" placeholder="Title" data-parsley-required-message="Please Enter Title" value="{{ isset($system_setting->title8) ? $system_setting->title8 : '' }}">
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="">Icon 8</label>
                    <div class="upload-img-sec">
                        <input type="hidden" name="system_img8" id="system_img8" value="{{ isset($system_setting->system_img8) ? $system_setting->system_img8 : '' }}">
                        @if(isset($system_setting->system_img8) && $system_setting->system_img8 != '' && $system_setting->system_img8 != null)
                        @php
                        $img = App\Models\MediaImage::select('name')->where('id', $system_setting->system_img8)->first();
                        @endphp
                        <div class="image_preview_div">
                            <img src="{{ asset('uploads/'.$img->name) }}" alt="" id="system_avtar8" class="profile-img" > 
                            <a id="remove_system_image8"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @else
                        <div class="image_preview_div">
                            <img src="{{ asset('assets/images/user/img-demo_1041.jpg') }}" alt="" id="system_avtar8" class="profile-img"> 
                            <a id="remove_system_image8" style="display: none;"> <i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                        @endif

                        <label for="" style="cursor: pointer;" class="choose_file hm-choose-img-title" data-val="system_img8">Choose image</label>
                        @if(isset($system_setting->system_img8) && $system_setting->system_img8 != '' && $system_setting->system_img8 != null)
                        @else
                        <span id="img_alert1" class="parsley-required" style="font-weight: 500 !important;color: red !important;"></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
