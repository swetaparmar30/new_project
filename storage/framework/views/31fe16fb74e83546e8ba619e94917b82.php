<style>
    .custom-gallery-title-class {
        <?php if(isset($config['gallery_title_color'])): ?>
        color: <?php echo e($config['gallery_title_color']); ?>;
        <?php endif; ?>
    }
    .custom-gallery-title-class:hover{
        <?php if(isset($config['gallery_title_hover_color'])): ?>
        color: <?php echo e($config['gallery_title_hover_color']); ?>;
        <?php endif; ?>
    }
    .custom-gallery-sub-title-class {
        <?php if(isset($config['gallery_subtitle_color'])): ?>
        color: <?php echo e($config['gallery_subtitle_color']); ?>;
        <?php endif; ?>
    }
    .custom-gallery-sub-title-class:hover{
        <?php if(isset($config['gallery_subtitle_hover_color'])): ?>
        color: <?php echo e($config['gallery_subtitle_hover_color']); ?>;
        <?php endif; ?>
    }
    .custom-gallery-class{
        <?php if(isset($config['gallery_bg_img']) && $config['gallery_bg_img'] != null): ?>
        background-image: url('<?php echo e($config['gallery_bg_img']); ?>');
        <?php endif; ?>
        <?php if(isset($config['gallery_bg_color']) && $config['gallery_bg_color'] != null): ?>
        background-color: <?php echo e($config['gallery_bg_color']); ?>;
        <?php endif; ?>
        <?php if(isset($config['gallery_bg_size']) && $config['gallery_bg_size'] != null): ?>
        background-size: <?php echo e($config['gallery_bg_size']); ?>;
        <?php endif; ?>
        <?php if(isset($config['gallery_bg_position']) && $config['gallery_bg_position'] != null): ?>
        background-position: <?php echo e($config['gallery_bg_position']); ?>;
        <?php endif; ?>
        <?php if(isset($config['gallery_bg_repeate']) && $config['gallery_bg_repeate'] != null): ?>
        background-repeat: <?php echo e($config['gallery_bg_repeate']); ?>;
        <?php endif; ?>
    }
</style>
<?php
if(isset($config['gallery_style']) && $config['gallery_style'] != '' && $config['gallery_style'] != null && $config['gallery_style'] == '0')
{
    $gallery_slider = true;
}else{
    $gallery_slider = false;
}
if(isset($config['gallery_column']) && $config['gallery_column'] != '' && $config['gallery_column'] != null)
{
    if($config['gallery_column'] == 'col-4')
    {
        $gallery_col = 'col-xxl-4 col-xl-4 xol-lg-4 col-md-12 col-sm-12 col-xs-12';
    }else if($config['gallery_column'] == 'col-6')
    {
        $gallery_col = 'col-xxl-6 col-xl-6 xol-lg-6 col-md-12 col-sm-12 col-xs-12';
    }else if($config['gallery_column'] == 'col-12')
    {
        $gallery_col = 'col-xxl-12 col-xl-12 xol-lg-12 col-md-12 col-sm-12 col-xs-12';
    }else{
        $gallery_col = 'col-xxl-12 col-xl-12 xol-lg-12 col-md-12 col-sm-12 col-xs-12';
    }
}
if($gallery_slider == true && $config['gallery_column'] == 'col-4')
{
    $g_slider_4 = true;
    $gallery_col = 'col-sm-12 col-xs-12';
}
if($gallery_slider == true && $config['gallery_column'] == 'col-6')
{
    $g_slider_6 = true;
    $gallery_col = 'col-sm-12 col-xs-12';
}

if($gallery_slider == true && $config['gallery_column'] == 'col-12')
{
    $g_slider_12 = true;
    $gallery_col = 'col-sm-12 col-xs-12';
}
?>
<div class="our-gallery common-text text-center custom-gallery-class <?php echo e(isset($config['gallery_div_class']) && $config['gallery_div_class'] != null ? $config['gallery_div_class'] : ''); ?>" id="<?php echo e(isset($config['gallery_div_id']) && $config['gallery_div_id'] != null ? $config['gallery_div_id'] : ''); ?>">
    <div class="">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 xol-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h4 class="petit-text custom-gallery-title-class">Our Gallery</h4>
                <h2 class="custom-gallery-sub-title-class">Captured Moments</h2>
            </div>
        </div>

        <div class="row popup-gallery <?php echo e(isset($gallery_slider) && $gallery_slider != false ? 'dynamic-gallery-carousel' : ''); ?>">
            <?php if(isset($data['gallery']) && count($data['gallery']) > 0 && !empty($data['gallery'])): ?>
            <?php $__currentLoopData = $data['gallery']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <div class="<?php echo e($gallery_col); ?> text-center">
                <figure>
                    <div class="gallery-item">
                        <?php if(isset($image->banner_image) && $image->banner_image != '' && $image->banner_image != null): ?>
                        <?php
                                $img_2 = App\Models\MediaImage::select('name')->where('id', $image->banner_image)->first();
                        ?>
                        <a data-effect="mfp-zoom-in" href="<?php echo e(asset('uploads/'.$img_2->name)); ?>" title="" class="a">
                        <?php endif; ?>
                            <?php if(isset($image->featured_img) && $image->featured_img != '' && $image->featured_img != null): ?>
                            <?php
                                $img_1 = App\Models\MediaImage::select('name')->where('id', $image->featured_img)->first();
                            ?>
                            <img class="img-fluid" src="<?php echo e(asset('uploads/'.$img_1->name)); ?>" />
                            <?php endif; ?>
                            <h4 class="petit-text"><img class="img-fluid" src="<?php echo e(asset('assets/src/images/gallery-plus-img.webp')); ?>" /></h4>
                        </a>
                    </div>

                </figure>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

      

    </div>
</div>
<?php $__env->startSection('script'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('script'); ?>
<?php if(isset($g_slider_4) && $g_slider_4 == true): ?>
<script>
    $(document).ready(function () {
    $('.dynamic-gallery-carousel').owlCarousel({
        loop:true,
        margin:24,
        nav: true,
        dot:false,
        autoplay: false,
        slideTransition: 'linear',
        autoplayTimeout: 0,
        autoplaySpeed: 30000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    });
</script>
<?php endif; ?>
<?php if(isset($g_slider_6) && $g_slider_6 == true): ?>
<script>
    $(document).ready(function () {
    $('.dynamic-gallery-carousel').owlCarousel({
        loop:true,
        margin:24,
        nav: true,
        dot:false,
        autoplay: false,
        slideTransition: 'linear',
        autoplayTimeout: 0,
        autoplaySpeed: 30000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    })
    });
</script>
<?php endif; ?>
<?php if(isset($g_slider_12) && $g_slider_12 == true): ?>
<script>
    $(document).ready(function () {
    $('.dynamic-gallery-carousel').owlCarousel({
        loop:true,
        margin:24,
        nav: true,
        dot:false,
        autoplay: false,
        slideTransition: 'linear',
        autoplayTimeout: 0,
        autoplaySpeed: 30000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:1
            }
        }
    })
    });
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH D:\xampp\htdocs\new_project\resources\views/widgets/our_gallery.blade.php ENDPATH**/ ?>