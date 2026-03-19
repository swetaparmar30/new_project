<section class="banner">
    <!-- <img src="<?php echo e(asset('front-assets/src/images/banner-image.webp')); ?>" class="banner-img" alt="" width="1900" height="780"> -->
    <!-- <img class="lazyload banner-img" src="<?php echo e(asset('front-assets/src/images/banner-image.webp')); ?>" data-src="<?php echo e(asset('front-assets/src/images/banner-image.webp')); ?>" srcset="<?php echo e(asset('front-assets/src/images/banner780.webp')); ?> 991w, <?php echo e(asset('front-assets/src/images/banner1100.webp')); ?> 1100w, <?php echo e(asset('front-assets/src/images/banner1100.webp')); ?> 1300w, <?php echo e(asset('front-assets/src/images/banner1100.webp')); ?> 1500w" class="banner-img" alt="" width="1900" height="780" /> -->
    


    <?php
        use Illuminate\Support\Facades\Request;
        use Illuminate\Support\Facades\Route;

        $img = App\Models\MediaImage::select('id', 'name')->find($banner->banner_img);
        $src = asset('uploads/' . $img->name);

        if (!function_exists('imageAsset')) {
            function imageAsset($screen): string
            {
                $currentPath = Request::path();

                $filename = 'garage-door-company-delaware.webp';

              
                 if (str_contains($currentPath, 'newport-garage-doors')) {
                    $filename = 'garage-door-company-newport.webp';
                } elseif (str_contains($currentPath, 'georgetown-garage-doors')) {
                    $filename = 'garage-door-company-georgetown.webp';
                } elseif (str_contains($currentPath, 'dover-garage-doors')) {
                    $filename = 'garage-door-company-dover.webp';
                } elseif (str_contains($currentPath, 'salisbury-garage-doors')) {
                    $filename = 'garage-door-company-salisbury.webp';
                } elseif (str_contains($currentPath, 'berlin-md-garage-doors')) {
                    $filename = 'garage-door-company-berlin.webp';
                } 
                elseif (str_contains($currentPath, 'bethany-beach-de-garage-doors')) {
                    $filename = 'garage-door-company-bethany-beach.webp';
                }elseif (str_contains($currentPath, 'dewey-beach-de-garage-doors')) {
                    $filename = 'garage-door-company-dewey-beach.webp';
                }elseif (str_contains($currentPath, 'fenwick-island-de-garage-doors')) {
                    $filename = 'garage-door-company-fenwick-island.webp';
                }elseif (str_contains($currentPath, 'lewes-de-garage-doors')) {
                    $filename = 'garage-door-company-lewes.webp';
                }elseif (str_contains($currentPath, 'ocean-city-md-garage-doors')) {
                    $filename = 'garage-door-company-ocean-city.webp';
                }elseif (str_contains($currentPath, 'ocean-pines-md-garage-doors')) {
                    $filename = 'garage-door-company-ocean-pines.webp';
                
                }elseif (str_contains($currentPath, 'rehoboth-beach-de-garage-doors')) {
                    $filename = 'garage-door-company-rehoboth-beach.webp';

                }elseif (str_contains($currentPath, 'smyrna-de-garage-doors')) {
                    $filename = 'garage-door-company-smyrna.webp';
                
                }elseif (str_contains($currentPath, 'townsend-de-garage-doors')) {
                    $filename = 'garage-door-company-townsend.webp';
                }
                elseif (str_contains($currentPath, 'odessa-de-garage-doors')) {
                    $filename = 'garage-door-company-odessa.webp';
                }
                elseif (str_contains($currentPath, 'middletown-de-garage-doors')) {
                    $filename = 'garage-door-company-middletown.webp';

                }elseif (str_contains($currentPath, 'camden-wyoming-de-garage-doors')) {
                    $filename = 'garage-door-company-camden-wyoming.webp';

                }elseif (str_contains($currentPath, 'newark-de-garage-doors')) {
                    $filename = 'garage-door-company-newark.webp';

                }elseif (str_contains($currentPath, 'frederica-de-garage-doors')) {
                    $filename = 'garage-door-company-frederica.webp';

                }elseif (str_contains($currentPath, 'magnolia-de-garage-doors')) {
                    $filename = 'garage-door-company-magnolia.webp';
                }

               return $screen === 575
                ? asset('uploads/small/' . $filename)
                : asset('uploads/' . $filename);
                }

                
                
            }
        
    ?>


    <?php

        $altText = 'Banner Image';

        if (request()->is('/')) {
            $altText = 'delaware garage door company';
        } elseif (request()->is('locations/newport-garage-doors')) {
            $altText = 'newport garage door company';
        } elseif (request()->is('locations/dover-garage-doors')) {
            $altText = 'dover garage door company';
        } elseif (request()->is('locations/georgetown-garage-doors')) {
            $altText = 'georgetown garage door company';
        } elseif (request()->is('locations/salisbury-garage-doors')) {
            $altText = 'salisbury garage door company';
        } elseif (request()->is('service-areas/berlin-md-garage-doors')) {
            $altText = 'berlin garage door company';
        }elseif (request()->is('service-areas/bethany-beach-de-garage-doors')) {
            $altText = 'bethany beach garage door company';
        }
        elseif (request()->is('service-areas/dewey-beach-de-garage-doors')) {
            $altText = 'dewey beach garage door company';
        }
         elseif (request()->is('service-areas/fenwick-island-de-garage-doors')) {
            $altText = 'fenwick island  garage door company';
        }
         elseif (request()->is('service-areas/lewes-de-garage-doors')) {
            $altText = 'lewes garage door company';
        }
         elseif (request()->is('service-areas/ocean-city-md-garage-doors')) {
            $altText = 'ocean city garage door company';
        }
         elseif (request()->is('service-areas/ocean-pines-md-garage-doors')) {
            $altText = 'ocean pines garage door company';
        }
         elseif (request()->is('service-areas/rehoboth-beach-de-garage-doors')) {
            $altText = 'rehoboth beach garage door company';
        }elseif (request()->is('service-areas/smyrna-de-garage-doors')) {
            $altText = 'smyrna garage door company';
        }
        elseif (request()->is('service-areas/townsend-de-garage-doors')) {
            $altText = 'townsend garage door company';
        }
        elseif (request()->is('service-areas/odessa-de-garage-doors')) {
            $altText = 'odessa garage door company';
        }
        elseif (request()->is('service-areas/middletown-de-garage-doors')) {
            $altText = 'middletown garage door company';
        }
        elseif (request()->is('service-areas/camden-wyoming-de-garage-doors')) {
            $altText = 'camden wyoming garage door company';
        }
        elseif (request()->is('service-areas/newark-de-garage-doors')) {
            $altText = 'newark garage door company';
        }
        elseif (request()->is('service-areas/frederica-de-garage-doors')) {
            $altText = 'frederica garage door company';
        }
        elseif (request()->is('service-areas/magnolia-de-garage-doors')) {
            $altText = 'magnolia garage door company';
        }
         elseif (!empty($banner->banner_subtitle)) {
            $altText = $banner->banner_subtitle;
        }
    ?>

    <picture>
        <source srcset="<?php echo e(imageAsset(575)); ?>" media="(max-width: 575px)" type="image/webp">
        <source srcset="<?php echo e(imageAsset(991)); ?>" media="(max-width: 991px)" type="image/webp">
        <source srcset="<?php echo e(imageAsset(1100)); ?>" media="(max-width: 1100px)" type="image/webp">
        <!-- <source srcset="<?php echo e(imageAsset(1300)); ?>" media="(max-width: 1300px)" type="image/webp"> -->
        <source srcset="<?php echo e(imageAsset(1500)); ?>" media="(max-width: 1500px)" type="image/webp">
        <img class="banner-img" src="<?php echo e($src); ?>" data-src="<?php echo e($src); ?>"
            srcset="<?php echo e(imageAsset(575) .
                ' 575w,' .
                imageAsset(991) .
                ' 991w,' .
                imageAsset(1100) .
                ' 1100w,' .
                imageAsset(1300) .
                ' 1300w,' .
                imageAsset(1500) .
                ' 1500w'); ?>"
            sizes="(max-width: 575px) 575px, 
                (max-width: 991px) 991px, 
                (max-width: 1100px) 1100px, 
                1500px"
                fetchpriority="high" decoding="async" width="500" height="415"
            alt="<?php echo e($altText); ?>"   >
    </picture>


    <div class="banner-content">
        <div class="container-md">
            <div class="row">
                
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 left-side desk-banner-left-side">
                    <?php if(!empty($banner->banner_subtitle)): ?>
                        <h4><?php echo e($banner->banner_subtitle); ?></h4>
                    <?php endif; ?>

                    <?php
                        $slug = request()->segment(count(request()->segments()));
                    ?>

                    <?php switch(true):
                        case (request()->is('/')): ?>
                            <h1 class="home">Delaware & Delmarva's Most Trusted Garage Door Company</h1>
                            <!-- <h1 class="home">Delaware's Most Trusted Garage Door Company</h1> -->
                        <?php break; ?>

                        
                        <?php case ($slug === 'service-and-repair'): ?>
                            <h1 class="service-and-repair">Residential Garage Door, <br> and Commercial <br class="over">
                                Overhead Door Repair</h1>
                        <?php break; ?>

                        <?php default: ?>
                            <?php if(!empty($banner->banner_title)): ?>
                                <h1><?php echo $banner->banner_title; ?></h1>
                            <?php endif; ?>
                    <?php endswitch; ?>

                    <?php if($slug === 'service-and-repair'): ?>
                        <p>Servicing all of Delaware for over 60 years.</p>
                    <?php elseif(request()->is('/')): ?>
                        <!-- <p>Proudly Serving Delaware Families for Over 60 Years</p> -->
                        <!-- <p>Proudly Serving the Entire Delmarva Peninsula for Over 60 Years</p> -->
                        <p class="home-banner-text">Proudly Serving Delaware & the Entire Delmarva Peninsula for Over 60 Years</p>
                    <?php elseif(!empty($banner->banner_description)): ?>
                        <?php echo $banner->banner_description; ?>

                    <?php endif; ?>
                </div>


                <?php
                    $mobileimg = App\Models\MediaImage::select('name')
                        ->where('id', $banner->mobile_banner_img)
                        ->first();
                    $bgImage = $mobileimg
                        ? asset('uploads/' . $mobileimg->name)
                        : asset('front-assets/src/images/home-mobile-banner-image.webp');
                ?>



                <!--<div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 left-side mobile-banner-left-side" style="background-image: url('<?php echo e($bgImage); ?>'); ">
                    <?php if(isset($banner->banner_subtitle) && $banner->banner_subtitle != ''): ?>
<h4><?php echo e($banner->banner_subtitle); ?></h4>
<?php endif; ?>
                <?php if(isset($banner->banner_title) && $banner->banner_title != ''): ?>
<h1><?php echo $banner->banner_title; ?></h1>
<?php endif; ?>
                <?php if(isset($banner->banner_description) && $banner->banner_description != ''): ?>
<?php echo $banner->banner_description; ?>

<?php endif; ?>
                </div>-->

                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 right-side">
                    <?php echo $__env->make('frontend.includes.contactform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/customer/www/clarkandsonsdoors.com/public_html/resources/views/frontend/includes/bannersection.blade.php ENDPATH**/ ?>