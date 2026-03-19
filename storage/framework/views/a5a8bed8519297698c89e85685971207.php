<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> <?php echo e($description); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> <?php echo e($keywords); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<?php $setting = App\Models\Setting::first(); ?>


<?php echo $__env->make('frontend.includes.servicesareas-area-sec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
  $(document).ready(function () {
    $('.each-offer-item').on('click', function (e) {
      e.preventDefault();

      $('.each-offer-item').removeClass('active');
      $('.tab-description').removeClass('active').stop(true, true).slideUp(250);

      $(this).addClass('active');

      var descSelector = $(this).data('desc');
      if (descSelector) {
        $(descSelector).addClass('active').hide().slideDown(250);
      }

    });
    $('.tab-description').not('.active').hide();
  });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/nateb61.sg-host.com/public_html/resources/views/frontend/landing_page/servicesareas.blade.php ENDPATH**/ ?>