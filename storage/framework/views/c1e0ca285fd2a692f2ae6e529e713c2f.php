<?php $__env->startSection('custom_css'); ?>
<style>
   select#select_location option {
   text-transform: capitalize;
   }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>
<div class="pcoded-wrapper">
   <div class="pcoded-content">
      <div class="pcoded-inner-content">
         <div class="main-body">
            <div class="page-wrapper">
               <form action="<?php echo e(route('locationpage_setting.store')); ?>" method="POST" data-parsley-validate=""
                  enctype="multipart/form-data" id="location_form">
                  <?php echo csrf_field(); ?>
                  <div class="row">
                     <div
                        class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 cpl-sm-12 col-xs-12 add-article form-main-sec ">
                        <div class="card Recent-Users">
                           <div class="d-flex justify-content-between">
                              <h5>Location Page Settings</h5>
                              <button type="submit" class="btn btn-lg btn-primary" id="submit_form"
                                 style="display: none;">Update
                              Settings</button>
                           </div>
                           <div class="card-block my-3">
                              <label for="">Location</label>
                              <select name="location" id="select_location">
                                 <option value="default">Select Location</option>
                                 <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($item->location); ?>">
                                    <?php echo e($item->location); ?>

                                 </option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                           </div>
                           <div id="location_other_fields" class="card-block px-0 py-3">
                              <div class="row form-sec row-parent">
                                 <div
                                    class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 label-sec">
                                    <label for="">Banner Section </label>
                                 </div>
                                 <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <label class="switch">
                                       <input type="checkbox" class="accordian-checkbox"
                                          id="bannerSecbutton" name="banner_checked">
                                       <div class="slider round">
                                          <span class="on">Enable</span>
                                          <span class="off">Disable</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="accordion" id="serviceSecAccordionBody" style="display: none;">
                                    <div class="accordion-item">
                                       <h2 class="accordion-header" id="headingtwo">
                                          <button class="accordion-button collapsed" type="button"
                                             data-bs-toggle="collapse" data-bs-target="#collapsetwo"
                                             aria-expanded="true" aria-controls="collapsetwo">
                                          Banner Section Setting
                                          </button>
                                       </h2>
                                       <div id="collapsetwo" class="accordion-collapse collapse"
                                          aria-labelledby="headingtwo" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                             <div class="row">
                                                <div
                                                   class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">Title </label>
                                                      </div>
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <input type="text" name="banner_title"
                                                            id="banner_title" placeholder="Title"
                                                            data-parsley-required-message="Please Enter Title">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">Sub title</label>
                                                      </div>
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <input type="text" name="banner_subtitle"
                                                            id="banner_subtitle"
                                                            placeholder="Sub Title"
                                                            data-parsley-required-message="Please Enter Sub Title">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">Banner
                                                         Content</label>
                                                      </div>
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <textarea class="form-control" id="banner_description" name="banner_description" style="height: 150px;"
                                                            data-parsley-errors-container="#banner_content_required" data-parsley-required-message="Please Enter Description"></textarea>
                                                         <span id="banner_content_required"
                                                            class="parsley-required"
                                                            style="font-weight: 500 !important;"></span>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">Banner
                                                         Image</label>
                                                         <div class="upload-img-sec">
                                                            <input type="hidden" name="banner_img"
                                                               id="video_sec_img_id_video_sec_id">
                                                            <div class="image_preview_div">
                                                               <img src="<?php echo e(asset('assets/images/user/img-demo_1041.jpg')); ?>"
                                                                  alt=""
                                                                  id="video_sec_profile_avtar_video_sec_id"
                                                                  class="profile-img">
                                                               <a id="video_sec_img_id_video_sec_id"
                                                                  style="display: none;"
                                                                  class="remove_image_media"
                                                                  data-val="video_sec"
                                                                  data-id="video_sec_id">
                                                               <i class="fa fa-times"
                                                                  aria-hidden="true"></i></a>
                                                            </div>
                                                            <label for=""
                                                               style="cursor: pointer;"
                                                               class="choose_file hm-choose-img-title"
                                                               data-val="video_sec"
                                                               data-id="video_sec_id"> Choose
                                                            image</label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">Mobile Banner
                                                         Image </label>
                                                         <div class="upload-img-sec">
                                                            <input type="hidden"
                                                               name="mobile_banner_img"
                                                               id="mobile_banner_img">
                                                            <div class="image_preview_div">
                                                               <img src="<?php echo e(asset('assets/images/user/img-demo_1041.jpg')); ?>"
                                                                  alt=""
                                                                  id="mobile_banner_avtar"
                                                                  class="profile-img">
                                                               <a id="mobile_banner_remove_image"
                                                                  style="display: none;">
                                                               <i class="fa fa-times"
                                                                  aria-hidden="true"></i></a>
                                                            </div>
                                                            <label for=""
                                                               style="cursor: pointer;"
                                                               class="choose_file hm-choose-img-title"
                                                               data-val="mobile_banner_img">Choose
                                                            image</label>
                                                            <span id="img_alert1"
                                                               class="parsley-required"
                                                               style="font-weight: 500 !important;color: red !important;"></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row form-sec row-parent">
                                 <div
                                    class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 label-sec">
                                    <label for="">About Section</label>
                                 </div>
                                 <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <label class="switch">
                                       <input type="checkbox" class="accordian-checkbox"
                                          id="aboutsecbutton" name="system_setting_checked">
                                       <div class="slider round">
                                          <span class="on">Enable</span>
                                          <span class="off">Disable</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="accordion" id="aboutSecAccordionBody" style="display: none;">
                                    <div class="accordion-item">
                                       <h2 class="accordion-header" id="headingOne">
                                          <button class="accordion-button collapsed" type="button"
                                             data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                             aria-expanded="true" aria-controls="collapseOne">
                                          About Section options
                                          </button>
                                       </h2>
                                       <div id="collapseOne" class="accordion-collapse collapse"
                                          aria-labelledby="headingOne"
                                          data-bs-parent="#accordionExample">
                                          <?php echo $__env->make('settings.system_setting_sec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row form-sec row-parent">
                                 <div
                                    class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 label-sec">
                                    <label for="">Service Section </label>
                                 </div>
                                 <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <label class="switch">
                                       <input type="checkbox" class="accordian-checkbox"
                                          id="serviceSecbutton" name="service_sec_checked">
                                       <div class="slider round">
                                          <span class="on">Enable</span>
                                          <span class="off">Disable</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="accordion" id="serviceSecAccordionBody"
                                    style="display: none;">
                                    <div class="accordion-item">
                                       <h2 class="accordion-header" id="headingtwo">
                                          <button class="accordion-button collapsed" type="button"
                                             data-bs-toggle="collapse" data-bs-target="#collapsetwo"
                                             aria-expanded="true" aria-controls="collapsetwo">
                                          Service Section Setting
                                          </button>
                                       </h2>
                                       <div id="collapsetwo" class="accordion-collapse collapse"
                                          aria-labelledby="headingtwo"
                                          data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                             <div class="row">
                                                <div
                                                   class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                   <label for="">Title</label>
                                                </div>
                                                <div
                                                   class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                   <input type="text" name="service_head_title"
                                                      id="service_head_title"
                                                      placeholder="Enter Title"
                                                      data-parsley-required-message="Please Enter Title">
                                                </div>
                                                <div
                                                   class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                   <label for="">Description</label>
                                                </div>
                                                <div
                                                   class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                   <textarea id="service_head_description" name="service_head_description" style="height: 150px;"
                                                      data-parsley-errors-container="#service_head_content_required" placeholder="Enter Description"
                                                      data-parsley-required-message="Please Enter Description"></textarea>
                                                   <span id="service_head_content_required"
                                                      class="parsley-required"
                                                      style="font-weight: 500 !important;"></span>
                                                </div>
                                             </div>
                                             <hr>
                                             <div class="row services-append-sec">
                                                <label for="" id="service_number_1"
                                                   style="display:none;">Service&nbsp;1</label>
                                                <div
                                                   class="col-xxl-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">Service&nbsp;Title
                                                         </label>
                                                      </div>
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <input type="text"
                                                            name="service_title[]"
                                                            id="service_title"
                                                            placeholder="Enter Service Title"
                                                            data-parsley-required-message="Please Enter Title">
                                                      </div>
                                                   </div>
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label
                                                            for="">Service&nbsp;Content</label>
                                                      </div>
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <textarea id="service_description" name="service_description[]" style="height: 150px;"
                                                            data-parsley-errors-container="#service_content_required" placeholder="Enter Service Description"
                                                            data-parsley-required-message="Please Enter Service Description"></textarea>
                                                         <span id="service_content_required"
                                                            class="parsley-required"
                                                            style="font-weight: 500 !important;"></span>
                                                      </div>
                                                   </div>


                                                    <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">URL&nbsp;Title
                                                         </label>
                                                      </div>
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <input type="text"
                                                            name="url_title[]"
                                                            id="url_title"
                                                            placeholder="Enter URL Title"
                                                            data-parsley-required-message="Please Enter URL title">
                                                      </div>
                                                   </div>
                                                   
                                                      <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">Service&nbsp;URL
                                                         </label>
                                                      </div>
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <input type="text"
                                                            name="service_url[]"
                                                            id="service_url"
                                                            placeholder="Enter Service url"
                                                            data-parsley-required-message="Please Enter URL">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label
                                                            for="">Service&nbsp;Image</label>
                                                      </div>
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <div class="upload-img-sec">
                                                            <input type="hidden"
                                                               name="service_img[]"
                                                               id="service_img">
                                                            <div class="image_preview_div">
                                                               <img src="<?php echo e(asset('assets/images/user/img-demo_1041.jpg')); ?>"
                                                                  alt=""
                                                                  id="service_preview"
                                                                  class="profile-img">
                                                               <a id="service_remove_image"
                                                                  style="display: none;">
                                                               <i class="fa fa-times"
                                                                  aria-hidden="true"></i></a>
                                                            </div>
                                                            <label for=""
                                                               style="cursor: pointer;"
                                                               class="choose_file hm-choose-img-title"
                                                               data-val="service_img">Choose
                                                            image</label>
                                                            <span id="img_alert1"
                                                               class="parsley-required"
                                                               style="font-weight: 500 !important;color: red !important;"></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <button type="button" id="add_service_btn"
                                                class="btn btn-primary mt-3">Add Service</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- here -->
                              <div class="row form-sec row-parent">
                                 <div
                                    class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 label-sec">
                                    <label for="">Areas We Serve </label>
                                 </div>
                                 <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <label class="switch">
                                       <input type="checkbox" class="accordian-checkbox"
                                          id="areaSecbutton" name="areas_checked">
                                       <div class="slider round">
                                          <span class="on">Enable</span>
                                          <span class="off">Disable</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="accordion" id="serviceSecAccordionBody" style="display: none;">
                                    <div class="accordion-item">
                                       <h2 class="accordion-header" id="headingtwo">
                                          <button class="accordion-button collapsed" type="button"
                                             data-bs-toggle="collapse" data-bs-target="#collapsetwo"
                                             aria-expanded="true" aria-controls="collapsetwo">
                                          Areas We Serve Section Setting
                                          </button>
                                       </h2>
                                       <div id="collapsetwo" class="accordion-collapse collapse"
                                          aria-labelledby="headingtwo" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                             <div class="row">
                                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">Title </label>
                                                      </div>
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <input type="text" name="areas_title"
                                                            id="areas_title" placeholder="Title"
                                                            data-parsley-required-message="Please Enter Title">

                                                      </div>
                                                   </div>
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">Button Name</label>
                                                      </div>
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <input type="text" name="areas_button_name"
                                                            id="areas_button_name"
                                                            placeholder="Button Name">
                                                      </div>
                                                   </div>
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">Button Url</label>
                                                      </div>
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <input type="text" name="areas_button_url"
                                                            id="areas_button_url"
                                                            placeholder="Button Url">
                                                      </div>
                                                   </div>
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">
                                                         Image</label>
                                                         <div class="upload-img-sec">
                                                            <input type="hidden" name="areas_img"
                                                               id="story_img_id">
                                                            <div class="image_preview_div">
                                                               <img src="<?php echo e(asset('assets/images/user/img-demo_1041.jpg')); ?>"
                                                                  alt=""
                                                                  id="profile_avtar_story"
                                                                  class="profile-img">
                                                               <a id="story_img_id"
                                                                  style="display: none;"
                                                                  class="story_remove_image"
                                                                  data-val="area_sec"
                                                                  data-id="area_sec_id">
                                                               <i class="fa fa-times"
                                                                  aria-hidden="true"></i></a>
                                                            </div>
                                                            <label for=""
                                                               style="cursor: pointer;"
                                                               class="choose_file hm-choose-img-title"
                                                               data-val="profile_avtar_story"
                                                               data-id="area_sec_id"> Choose
                                                            image</label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                
                                                
                                                 <div
                                                   class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
                                                   <div class="row form-sec">
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                         <label for="">
                                                         Description</label>
                                                      </div>
                                                      <div
                                                         class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                         <textarea class="form-control" id="areas_sub_title" name="areas_sub_title" style="height: 150px;"
                                                            data-parsley-errors-container="#area_content_required" data-parsley-required-message="Please Enter Description" style="height: 300px;"></textarea>
                                                         <span id="area_content_required"
                                                            class="parsley-required"
                                                            style="font-weight: 500 !important;"></span>
                                                      </div>
                                                   </div>
                                                </div>
                                                
                                                
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="spinner-border" role="status" style="display: none;">
                              <span class="visually-hidden">Loading...</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
   $(document).ready(function() {
   
       $('#code_preview0').summernote({
   
           height: 300
   
       });
   
       $('#code_preview2').summernote({
   
           height: 250
   
       });
   
       $('#system_setting_title').summernote({
   
           height: 250
   
       });
   
       $('#design_sub_title').summernote({
   
           height: 250
   
       });
   
       $('#form_title').summernote({
   
           height: 160
   
       });
   
   
   
       // let switches = document.querySelectorAll('.switch');
   
       // if (switches.length) {
   
       //     switches[switches.length - 1].click();
   
       // }
   
   
   
       function getServiceSectionHtml(index) {
   
           return `
   
   <div class="row services-append-sec" data-index="${index}">
   
   <label for="" id="service_number_${index}" style="display:none;">Service&nbsp;${index}</label>
   
   <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 label-sec">
   
       <div class="row form-sec">
   
           <div class="col-xxl-12 label-sec">
   
               <label for="">Service&nbsp;Title</label>
   
           </div>
   
           <div class="col-xxl-12">
   
               <input type="text"
   
                   name="service_title[]"
   
                   id="service_title_${index}"
   
                   placeholder="Enter Service Title"
   
                   data-parsley-required-message="Please Enter Title">
   
           </div>
   
       </div>
   
       <div class="row form-sec">
   
           <div class="col-xxl-12 label-sec">
   
               <label for="">Service&nbsp;Content</label>
   
           </div>
   
           <div class="col-xxl-12">
   
               <textarea id="service_description_${index}" name="service_description[]" style="height: 150px;"
   
                   data-parsley-errors-container="#service_content_required_${index}" placeholder="Enter Service Description"
   
                   data-parsley-required-message="Please Enter Service Description"></textarea>
   
               <span id="service_content_required_${index}"
   
                   class="parsley-required"
   
                   style="font-weight: 500 !important;"></span>
   
           </div>
   
       </div>

        <div class="row form-sec">
   
           <div class="col-xxl-12 label-sec">
   
               <label for="">URL&nbsp;Title</label>
   
           </div>
   
           <div class="col-xxl-12">
   
               <input type="text"
   
                   name="url_title[]"
   
                   id="url_title_${index}"
   
                   placeholder="Enter Service url"
   
                   data-parsley-required-message="Please Enter url">
   
           </div>
   
       </div>

        <div class="row form-sec">
   
           <div class="col-xxl-12 label-sec">
   
               <label for="">Service&nbsp;URL</label>
   
           </div>
   
           <div class="col-xxl-12">
   
               <input type="text"
   
                   name="service_url[]"
   
                   id="service_url_${index}"
   
                   placeholder="Enter Service url"
   
                   data-parsley-required-message="Please Enter url">
   
           </div>
   
       </div>
   
   </div>
   
   <div class="col-xxl-6 label-sec">
   
       <div class="row form-sec">
   
           <div class="col-xxl-12 label-sec">
   
               <label for="">Service&nbsp;Image</label>
   
           </div>
   
           <div class="col-xxl-12 label-sec">
   
               <div class="upload-img-sec">
   
                   <input type="hidden"
   
                       name="service_img[]"
   
                       id="service_img_${index}">
   
                   <div class="image_preview_div">
   
                       <img src="<?php echo e(asset('assets/images/user/img-demo_1041.jpg')); ?>"
   
                           alt=""
   
                           id="service_preview_${index}"
   
                           class="profile-img">
   
                       <a id="service_remove_image_${index}" class="remove-service-image" style="display: none; cursor:pointer;">
   
                           <i class="fa fa-times" aria-hidden="true"></i>
   
                       </a>
   
                   </div>
   
                   <label style="cursor: pointer;"
   
                       class="choose_file hm-choose-img-title"
   
                       data-val="service_img_${index}">
   
                       Choose image
   
                   </label>
   
                   <span id="img_alert_${index}"
   
                       class="parsley-required"
   
                       style="font-weight: 500 !important;color: red !important;"></span>
   
               </div>
   
           </div>
   
       </div>
   
   </div>
   
   <div class="mx-1">
   
       <button type="button" class="btn btn-danger remove-service-btn mt-2" data-index="${index}">Remove Service</button>
   
   </div>
   
   </div>
   
   `;
   
       }
   
   
   
       // Add Service button logic
   
       $('#add_service_btn').on('click', function() {
   
           // Find used indexes among appended sections (2-6)
   
           let used = [];
   
           $('.services-append-sec').each(function() {
   
               let idx = parseInt($(this).attr('data-index'), 10);
   
               if (idx >= 2 && idx <= 6) used.push(idx);
   
           });
   
   
   
           // Find the lowest unused index from 2 to 6
   
           let nextIndex = null;
   
           for (let i = 2; i <= 6; i++) {
   
               if (!used.includes(i)) {
   
                   nextIndex = i;
   
                   break;
   
               }
   
           }
   
   
   
           if (nextIndex === 6) {
   
               $(this).hide();
   
           }
   
           if (nextIndex) {
   
               // Append after the last .services-append-sec
   
               $('.services-append-sec:last').after(getServiceSectionHtml(nextIndex));
   
           }
   
           // else: do nothing (max 6 reached)
   
       });
   
   
   
       // Remove service section
   
       $(document).on('click', '.remove-service-btn', function() {
   
           $('#add_service_btn').show();
   
           $(this).closest('.services-append-sec').remove();
   
       });
   
   
   
       // Image preview logic
   
       $(document).on('change', '.service-image-input', function(e) {
   
           const index = $(this).data('index');
   
           const input = this;
   
           if (input.files && input.files[0]) {
   
               const reader = new FileReader();
   
               reader.onload = function(e) {
   
                   $(`#service_preview_${index}`).attr('src', e.target.result);
   
                   $(`#service_remove_image_${index}`).show();
   
               }
   
               reader.readAsDataURL(input.files[0]);
   
           }
   
       });
   
   
   
       // Remove image logic
   
       $(document).on('click', '.remove-service-image', function() {
   
           const id = $(this).attr('id'); // e.g., service_remove_image_2
   
           const index = id.split('_').pop();
   
           $(`#service_img_${index}`).val('');
   
           $(`#service_preview_${index}`).attr('src',
   
               "<?php echo e(asset('assets/images/user/img-demo_1041.jpg')); ?>");
   
           $(this).hide();
   
       });
   
   
   
       async function fetchImgPath(id) {
   
           try {
   
               const res = await $.ajax({
   
                   url: `<?php echo e(route('media.get.detail')); ?>`,
   
                   type: 'POST',
   
                   headers: {
   
                       'Accept': 'application/json',
   
                       'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
   
                   },
   
                   data: {
   
                       id: id
   
                   },
   
                   dataType: 'json'
   
               });
   
               return res.details;
   
           } catch (error) {
   
               console.error('Error fetching location page setting:', error);
   
               return null;
   
           }
   
       }
   
   
   
       async function previewImg(imgId, inputId) {
   
           const img = await fetchImgPath(imgId);
   
           if (!img) return;
   
           const imgInput = $(`#${inputId}`),
   
               imgContainer = imgInput.closest('.upload-img-sec').find('.image_preview_div'),
   
               basePath = "<?php echo e(asset('/uploads')); ?>";
   
           hideImageAlert(`#${inputId}`);
   
           imgInput.val(imgId);
   
           imgContainer.find('a').show();
   
           imgContainer.find('img').attr('src', `${basePath}/${img.name}`);
   
       }
   
   
   
       // Place this function in your script section
   
       function hideImageAlert(imgInputSelector, alertSelector = '#img_alert1') {
   
           const uploadImgSec = $(imgInputSelector).closest('.upload-img-sec');
   
           uploadImgSec.find(alertSelector).hide();
   
       }
   
       $('#select_location').on('change', function() {
   
           let selectedValue = $(this).val();
   
           if (selectedValue === 'default') {
   
               return;
   
           }
   
           $('.spinner-border').show();
   
           $('#location_other_fields').hide();
   
           $.ajax({
   
                   url: `<?php echo e(route('fetch.location.page-setting')); ?>`,
   
                   type: 'POST',
   
                   headers: {
   
                       'Accept': 'application/json',
   
                       'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
   
                   },
   
                   data: {
   
                       location: $('#select_location').val(),
   
                   },
   
                   dataType: 'json'
   
               })
   
               .done(function(res) {
   
                   if (!res.success) return;
   
                   const {
   
                       banner,
   
                       system_setting,
                       
                       area_serve,
   
                       services_sec,
   
                       services_head_sec,
   
                   } = res.data;
   
   
   
                   const locationForm = $('#location_form');
   
                   // Banner Section
   
                   const bannerSwitch = locationForm.find('#bannerSecbutton');
   
                   const bannerTitle = locationForm.find('#banner_title');
   
                   const bannerSTitle = locationForm.find('#banner_subtitle');
   
                   const bannerDesc = locationForm.find('#banner_description');
   
                   const bannerImg = locationForm.find(
   
                       'input#video_sec_img_id_video_sec_id');
   
                   const bannerMobileImg = locationForm.find('input#mobile_banner_img');
   
   
   
                   if (banner?.checked) {
   
                       bannerSwitch.prop('checked', true).trigger('change');
   
                       bannerTitle.val(banner.banner_title || '');
   
                       bannerSTitle.val(banner.banner_subtitle || '');
   
                       bannerDesc.val(banner.banner_description || '');
   
                       bannerMobileImg.val(banner.mobile_banner_img || '');
   
                       bannerImg.val(banner.banner_img || '');
   
                       if (banner.mobile_banner_img) previewImg(banner.mobile_banner_img,
   
                           'mobile_banner_img');
   
                       if (banner.banner_img) previewImg(banner.banner_img,
   
                           'video_sec_img_id_video_sec_id');
   
                   } else {
   
                       bannerSwitch.prop('checked', false).trigger('change');
   
                       bannerTitle.val('');
   
                       bannerSTitle.val('');
   
                       bannerDesc.val('');
   
                       bannerMobileImg.val('');
   
                       bannerImg.val('');
   
                   }


                   //Area Section

                   const areaSwitch = locationForm.find('#areaSecbutton');
   
                   const areaTitle = locationForm.find('#areas_title');
   
                   const areaButton = locationForm.find('#areas_button_name');
   
                   const areaButtonurl = locationForm.find('#areas_button_url');
                   
                   const areaSubtitle = locationForm.find('#areas_sub_title');
   
                   const areaImg = locationForm.find(
   
                       'input#story_img_id');
   
           

                   if (area_serve?.checked) {
   
                       areaSwitch.prop('checked', true).trigger('change');
   
                       areaTitle.val(area_serve.areas_title || '');
   
                       areaButton.val(area_serve.areas_button_name || '');
   
                       areaButtonurl.val(area_serve.areas_button_url || '');

                       areaSubtitle.val(area_serve.areas_sub_title || '');
   
                       areaImg.val(area_serve.areas_img || '');
   
                    
                       if (area_serve.areas_img) previewImg(area_serve.areas_img,
   
                           'story_img_id');
   
                   } else {
   
                       areaSwitch.prop('checked', false).trigger('change');
   
                       areaTitle.val('');
   
                       areaButton.val('');
   
                       areaButtonurl.val('');
   
                       areaSubtitle.val('');
   
                       areaImg.val('');
   
                   }

   
                   // About/System Setting Section
   
                   const aboutUsSwitch = locationForm.find('#aboutsecbutton');
   
                   const aboutTitle = locationForm.find('#setting_title');
   
                   const aboutSTitle = locationForm.find('#system_sub_title');
   
                   const aboutDesc = locationForm.find('#system_setting_description');
   
                   const aboutSysImg = locationForm.find('#system_img_id');
   
                   const aboutSysImgOne = locationForm.find('#system_img_id1');
   
                   const aboutSysImgTwo = locationForm.find('#system_img_id2');
   
                   const aboutSysImgThree = locationForm.find('#system_img_id3');
   
                   const aboutSysImgFour = locationForm.find('#system_img_id4');
   
                   const titleOne = locationForm.find('#title1');
   
                   const titleTwo = locationForm.find('#title2');
   
                   const titleThree = locationForm.find('#title3');
   
                   const titleFour = locationForm.find('#title4');
   
                   
   
   
   
                   if (system_setting?.checked) {
   
                       aboutUsSwitch.prop('checked', true).trigger('change');
   
                       aboutTitle.val(system_setting.system_setting_title || '');
   
                       aboutSTitle.val(system_setting.system_sub_title || '');
   
                       aboutDesc.val(system_setting.system_setting_description || '');
   
   
   
                       if (system_setting.system_img) previewImg(system_setting.system_img,
   
                           'system_img_id');
   
                       if (system_setting.system_img1) previewImg(system_setting
   
                           .system_img1, 'system_img_id1');
   
                       if (system_setting.system_img2) previewImg(system_setting
   
                           .system_img2, 'system_img_id2');
   
                       if (system_setting.system_img3) previewImg(system_setting
   
                           .system_img3, 'system_img_id3');
   
                       if (system_setting.system_img4) previewImg(system_setting
   
                           .system_img4, 'system_img_id4');
   
   
   
                       aboutSysImg.val(system_setting.system_img || '');
   
                       aboutSysImgOne.val(system_setting.system_img1 || '');
   
                       aboutSysImgTwo.val(system_setting.system_img2 || '');
   
                       aboutSysImgThree.val(system_setting.system_img3 || '');
   
                       aboutSysImgFour.val(system_setting.system_img4 || '');
   
                       titleOne.val(system_setting.title1 || '');
   
                       titleTwo.val(system_setting.title2 || '');
   
                       titleThree.val(system_setting.title3 || '');
   
                       titleFour.val(system_setting.title4 || '');
   
                   } else {
   
                       aboutUsSwitch.prop('checked', false).trigger('change');
   
                       aboutTitle.val('');
   
                       aboutSTitle.val('');
   
                       aboutDesc.val('');
   
                       aboutSysImg.val('');
   
                       aboutSysImgOne.val('');
   
                       aboutSysImgTwo.val('');
   
                       aboutSysImgThree.val('');
   
                       aboutSysImgFour.val('');
   
                       titleOne.val('');
   
                       titleTwo.val('');
   
                       titleThree.val('');
   
                       titleFour.val('');
   
                   }


                   const ServiceHeadTitle = locationForm.find('#service_head_title');
   
                   const ServiceHeadDesc = locationForm.find('#service_head_description');
                   const ServiceHeadurl = locationForm.find('#service_url');
                   const ServiceHeadUrlTitle = locationForm.find('#url_title');


   
                   if (services_head_sec?.title) {
   
                       ServiceHeadTitle.val(services_head_sec?.title ?? '');
   
                   } else {
   
                       ServiceHeadTitle.val('');
   
                   }
   
                   if (services_head_sec?.description) {
   
                       ServiceHeadDesc.val(services_head_sec?.description ?? '');
   
                   } else {
   
                       ServiceHeadDesc.val('');
   
                   }
                   if (services_head_sec?.url) {
   
                       ServiceHeadurl.val(services_head_sec?.url ?? '');
   
                   } else {
   
                       ServiceHeadurl.val('');
   
                   }
                   if (services_head_sec?.urltitle) {
   
                       ServiceHeadUrlTitle.val(services_head_sec?.urltitle ?? '');
   
                   } else {
   
                       ServiceHeadUrlTitle.val('');
   
                   }
   
   
   
                   if (services_sec?.length) {
   
                       $('#serviceSecbutton').prop('checked', true).trigger('change');
   
                       for (let i = 0; i < services_sec.length; i++) {
   
                           let titleId, descriptionId, imgId;
   
                           if (i === 0) {
   
                               titleId = 'service_title';
   
                               descriptionId = 'service_description';
   
                               imgId = 'service_img';
                               urlId = 'service_url';
                               urlTitle = 'url_title';
   
                           } else {
   
                               titleId = 'service_title_' + (i + 1);
   
                               descriptionId = 'service_description_' + (i + 1);
   
                               imgId = 'service_img_' + (i + 1);
                                urlId = 'service_url_' + (i + 1);

                               urlTitle = 'url_title_' + (i + 1);
   
                           }
   
                           $(`#${titleId}`).val(services_sec[i].title);
   
                           $(`#${descriptionId}`).val(services_sec[i].description);
   
                           if (services_sec[i].img) previewImg(services_sec[i].img, imgId);
                           $(`#${urlId}`).val(services_sec[i].url);

                           $(`#${urlTitle}`).val(services_sec[i].urltitle);
   
                           if (i < (services_sec.length - 1)) {
   
                               $('#add_service_btn').click();
   
                           }
   
                       }
   
                   }
   
                   $('#submit_form').show();
   
               })
   
               .fail(function(xhr, status, error) {
   
                   console.error('Error fetching location page setting:', error);
   
               })
   
               .always(function() {
   
                   $('.spinner-border').hide();
   
                   $('#location_other_fields').show();
   
               });
   
       });
   
   });
   
</script>
<script>
   const assetPath = "<?php echo e(asset('assets/images/user/img-demo_1041.jpg')); ?>";
   
   // $('#remove_image').click(function(event) {
   
   //     event.stopPropagation();
   
   //     $('#img_id').val(null);
   
   //     $('#profile_avtar').attr('src', assetPath);
   
   //     $('#remove_image').css('display', 'none');
   
   //     $('#profile_avtar').css('opacity', '1.0');
   
   // });
   
   // $('#remove_favi_image').click(function(event) {
   
   //     event.stopPropagation();
   
   //     $('#favicon_id').val(null);
   
   //     $('#favicon_avtar').attr('src', assetPath);
   
   //     $('#remove_favi_image').css('display', 'none');
   
   //     $('#favicon_avtar').css('opacity', '1.0');
   
   // });
   
   // $('#story_remove_image').click(function(event) {
   
   //     event.stopPropagation();
   
   //     $('#story_img_id').val(null);
   
   //     $('#profile_avtar_story').attr('src', assetPath);
   
   //     $('#story_remove_image').css('display', 'none');
   
   //     $('#profile_avtar_story').css('opacity', '1.0');
   
   // });
   
   $('#remove_system_image').click(function(event) {
   
       event.stopPropagation();
   
       $('#system_img_id').val(null);
   
       $('#system_avtar').attr('src', assetPath);
   
       $('#remove_system_image').css('display', 'none');
   
       $('#system_avtar').css('opacity', '1.0');
   
   });
   
   $('#remove_system_image1').click(function(event) {
   
       event.stopPropagation();
   
       $('#system_img_id1').val(null);
   
       $('#system_avtar1').attr('src', assetPath);
   
       $('#remove_system_image1').css('display', 'none');
   
       $('#system_avtar1').css('opacity', '1.0');
   
   });
   
   $('#remove_system_image2').click(function(event) {
   
       event.stopPropagation();
   
       $('#system_img_id2').val(null);
   
       $('#system_avtar2').attr('src', assetPath);
   
       $('#remove_system_image2').css('display', 'none');
   
       $('#system_avtar2').css('opacity', '1.0');
   
   });
   
   $('#remove_system_image3').click(function(event) {
   
       event.stopPropagation();
   
       $('#system_img_id3').val(null);
   
       $('#system_avtar3').attr('src', assetPath);
   
       $('#remove_system_image3').css('display', 'none');
   
       $('#system_avtar3').css('opacity', '1.0');
   
   });
   
   $('#remove_system_image4').click(function(event) {
   
       event.stopPropagation();
   
       $('#system_img_id4').val(null);
   
       $('#system_avtar4').attr('src', assetPath);
   
       $('#remove_system_image4').css('display', 'none');
   
       $('#system_avtar4').css('opacity', '1.0');
   
   });
   
   // $('#faq_remove_image').click(function(event) {
   
   //     event.stopPropagation();
   
   //     $('#faq_img').val(null);
   
   //     $('#faq_avtar').attr('src', assetPath);
   
   //     $('#faq_remove_image').css('display', 'none');
   
   //     $('#faq_avtar').css('opacity', '1.0');
   
   // });
   
   // $('#video_remove_image').click(function(event) {
   
   //     event.stopPropagation();
   
   //     $('#video_img_id').val(null);
   
   //     $('#profile_avtar_video').attr('src', assetPath);
   
   //     $('#video_remove_image').css('display', 'none');
   
   //     $('#profile_avtar_video').css('opacity', '1.0');
   
   // });
   
   $('#mobile_banner_remove_image').click(function(event) {
   
       event.stopPropagation();
   
       $('#mobile_banner_img').val(null);
   
       $('#mobile_banner_avtar').attr('src', assetPath);
   
       $('#mobile_banner_remove_image').css('display', 'none');
   
       $('#mobile_banner_avtar').css('opacity', '1.0');
   
   });
   
   $('#video_sec_img_id_video_sec_id').click(function(event) {
   
       event.stopPropagation();
   
       $('input#video_sec_img_id_video_sec_id').val(null);
   
       $('#video_sec_profile_avtar_video_sec_id').attr('src', assetPath);
   
       $('a#video_sec_img_id_video_sec_id').css('display', 'none');
   
       $('#video_sec_profile_avtar_video_sec_id').css('opacity', '1.0');
   
   });

    $('#story_img_id').click(function(event) {
   
       event.stopPropagation();
   
       $('input#story_img_id').val(null);
   
       $('#profile_avtar_story').attr('src', assetPath);
   
       $('a#story_img_id').css('display', 'none');
   
       $('#profile_avtar_story').css('opacity', '1.0');
   
   });
   
</script>
<script>
   $('.accordian-checkbox').on('change', function() {
   
       const isChecked = $(this).is(':checked'),
   
           wrapper = $(this).closest('.row-parent'),
   
           accordion = wrapper.find('.accordion');
   
       if (isChecked) {
   
           accordion.show();
   
           let accBtn = accordion.find('.accordion-button.collapsed');
   
           if (accBtn) {
   
               accBtn.click();
   
           }
   
       } else {
   
           accordion.hide();
   
       }
   
   })
   
</script>
<script>
   $("#submit_form").on("click", function() {
   
       var isValid = $('#location_form').parsley().isValid();
   
       if (isValid) {
   
           $('#location_form').submit();
   
       } else {
   
           toastr.error('Form validation failed. Please check the highlighted fields.');
   
       }
   
   });
   
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/clarkandsonsdoors.com/public_html/resources/views/settings/locationpagesetting.blade.php ENDPATH**/ ?>