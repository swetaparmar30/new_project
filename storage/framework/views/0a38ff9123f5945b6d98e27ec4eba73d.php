
<?php $__env->startSection('main_content'); ?>
<div class="pcoded-wrapper">
   <div class="pcoded-content">
      <div class="pcoded-inner-content">
         <!-- [ breadcrumb ] start -->
         <!-- [ breadcrumb ] end -->
         <div class="main-body">
            <div class="page-wrapper">
               <!-- [ Main Content ] start -->
               <form action="<?php echo e(route('newsletters.store')); ?>"" method="POST" data-parsley-validate=""
                  enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" id="newsletter_id" name="newsletter_id" value=" <?php echo e(isset($newsletter->id) ? $newsletter->id : ''); ?> ">
                  <div class="row">
                     <div
                        class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 cpl-sm-12 col-xs-12 add-article form-main-sec ">
                        <div class="card Recent-Users">
                           <?php if(isset($newsletter) && $newsletter != ''): ?>
                           <h5>Edit Newsletter</h5>
                           <?php else: ?>
                           <h5>Add Newsletter</h5>
                           <?php endif; ?>
                           <div class="card-block px-0 py-3">
                              <div class="row form-sec">
                                 <div
                                    class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12 label-sec">
                                    <label for="">Title <span style="color: red;margin: 0;">*</span></label>
                                 </div>
                                 <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <input type="text" class="form-control" id="name" name="name" required
                                       data-parsley-required-message="Please Enter Title"
                                       placeholder="Title"
                                       value="<?php echo e(isset($newsletter->name) ? $newsletter->name : ''); ?>">
                                 </div>
                              </div>

                              <div class="row form-sec">
                                 <div
                                    class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12 label-sec">
                                    <label for="">Email <span style="color: red;margin: 0;">*</span></label>
                                 </div>
                                 <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <input type="text" class="form-control" id="email" name="email" required
                                       data-parsley-required-message="Please Enter Subtitle"
                                       placeholder="Sub Title"
                                       value="<?php echo e(isset($newsletter->email) ? $newsletter->email : ''); ?>">
                                 </div>
                              </div>
                                  
                              <div class="row form-sec">
                                 <div
                                    class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12 label-sec">
                                    <label for="">Password <span style="color: red;margin: 0;">*</span></label>
                                 </div>
                                 <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                    <input type="password" class="form-control" id="password" name="password" required
                                       data-parsley-required-message="Please Enter password Name"
                                       placeholder="password Name"
                                       value="<?php echo e(isset($newsletter->password) ? $newsletter->password : ''); ?>">
                                 </div>
                              </div>

                              <div class="mb-3 text-end">
                                 <button type="submit" id="submit_form" class="btn btn-lg btn-primary">Save</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 cpl-sm-12 col-xs-12 add-article form-main-sec">
                             <div class="card Recent-Users">
                                    <h5>Image</h5>
                                    <div class="card-block px-0 py-3">
                                        <div class="row form-sec">
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 label-sec">
                                                <input type="hidden"
                                                    value="<?php echo e(isset($garage->image) ? $garage->image : ''); ?>"
                                                    name="img_id" id="img_id" required data-parsley-errors-container="#logo_required" data-parsley-trigger="change" data-parsley-required-message="Please Choose an Image.">
                                                <div class="upload-img-sec text-center image_preview_div">
                                                    <?php if(isset($image_name->name) && $image_name->name != ''): ?>
                                                    <img src="<?php echo e(asset('uploads/' . $image_name->name)); ?>" alt=""
                                                        class="img-fluid profile_avtar" id="profile_avtar"
                                                        style="width:125px;height:125px;">
                                                    <a id="remove_image"> <i class="fa fa-times"
                                                            aria-hidden="true"></i></a>
                                                    <?php else: ?>
                                                    <img src="<?php echo e(asset('assets/images/user/img-demo_1041.jpg')); ?>" alt=""
                                                        id="profile_avtar" class="profile-img">
                                                    <a id="remove_image" style="display: none;"> <i class="fa fa-times"
                                                            aria-hidden="true"></i></a>
                                                    <?php endif; ?>
                                                    <label for="file" style="cursor: pointer;"
                                                        class="form-label upload_image choose_file hm-choose-img-title">Choose image</label>
                                                </div>
                                                <span class="error_field" id="logo_required"></span>
                                            </div>

                                        </div>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\new_project\resources\views/newsletters/add.blade.php ENDPATH**/ ?>