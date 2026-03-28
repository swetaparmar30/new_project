<section class="area-we-cover-sec sandk-common-padding sandk-common">
    <div class="container-md">
        <div class="row align-items-center">
          

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 left-side">
                
            </div>

            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 right-side">
                <?php if(isset($areas->areas_title) && $areas->areas_title != ''): ?>
                    <h2><?php echo e($areas->areas_title ?: 'Areas We Serve'); ?></h2>
                <?php endif; ?>
                <?php echo $areas->areas_sub_title; ?>

            </div>
        </div>
    </div>
</section><?php /**PATH D:\xampp\htdocs\new_project\resources\views/frontend/includes/areas-sec.blade.php ENDPATH**/ ?>