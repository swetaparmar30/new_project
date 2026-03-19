<?php
    use Illuminate\Support\Facades\Request;

    $path = Request::path(); // e.g. "locations/newport-garage-doors"
    $filename = 'garage-door-repair-delaware.webp'; // default for homepage or unknown

    // Match different paths
    if ($path === '/') {
        $filename = 'garage-door-repair-delaware.webp';
    } elseif (str_contains($path, 'newport')) {
        $filename = 'garage-door-repair-newport.webp';
    } elseif (str_contains($path, 'dover')) {
        $filename = 'garage-door-repair-dover.webp';
    } elseif (str_contains($path, 'georgetown')) {
        $filename = 'garage-door-repair-georgetown.webp';
    } elseif (str_contains($path, 'salisbury')) {
        $filename = 'garage-door-repair-salisbury.webp';
    } elseif (str_contains($path, 'berlin')) {
        $filename = 'garage-door-repair-berlin.webp';
    }elseif (str_contains($path, 'bethany-beach')) {
        $filename = 'garage-door-repair-bethany-beach.webp';
    }elseif (str_contains($path, 'dewey-beach')) {
        $filename = 'garage-door-repair-dewey-beach.webp';
    }elseif (str_contains($path, 'fenwick-island')) {
        $filename = 'garage-door-repair-fenwick-island.webp';
    }elseif (str_contains($path, 'lewes')) {
        $filename = 'garage-door-repair-lewes.webp';
    }elseif (str_contains($path, 'ocean-city')) {
        $filename = 'garage-door-repair-ocean-city.webp';
    }elseif (str_contains($path, 'ocean-pines')) {
        $filename = 'garage-door-repair-ocean-pines.webp';
    }elseif (str_contains($path, 'rehoboth-beach')) {
        $filename = 'garage-door-repair-rehoboth-beach.webp';
        
    }elseif (str_contains($path, 'smyrna')) {
        $filename = 'garage-door-repair-smyrna.webp';
    }
    elseif (str_contains($path, 'townsend')) {
        $filename = 'garage-door-repair-townsend.webp';
    }
    elseif (str_contains($path, 'middletown')) {
        $filename = 'garage-door-repair-middletown.webp';
    }
    elseif (str_contains($path, 'odessa')) {
        $filename = 'garage-door-repair-odessa.webp';
    }
    elseif (str_contains($path, 'magnolia')) {
        $filename = 'garage-door-repair-magnolia.webp';
    }
    elseif (str_contains($path, 'frederica')) {
        $filename = 'garage-door-repair-frederica.webp';
    }
    elseif (str_contains($path, 'newark')) {
        $filename = 'garage-door-repair-newark.webp';
    }
    elseif (str_contains($path, 'camden-wyoming')) {
        $filename = 'garage-door-repair-camden-wyoming.webp';
    }

    $imageUrl = asset('uploads/' . $filename);
?>



<?php
    $commonGarageDoorImageAlt = 'Common Garage';

    if (request()->is('/')) {
        $commonGarageDoorImageAlt = 'residential garage door repair delaware';
    } elseif (request()->is('locations/newport-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair newport';
    } elseif (request()->is('locations/dover-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair dover';
    } elseif (request()->is('locations/georgetown-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair georgetown';
    } elseif (request()->is('locations/salisbury-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair salisbury';
    } elseif (request()->is('service-areas/berlin-md-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair berlin';
    } elseif (request()->is('service-areas/bethany-beach-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair bethany beach';
    } 
     elseif (request()->is('service-areas/dewey-beach-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair dewey beach';
    } elseif (request()->is('service-areas/fenwick-island-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair fenwick island';
    } elseif (request()->is('service-areas/lewes-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair lewes';
    } elseif (request()->is('service-areas/ocean-city-md-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair ocean city';
    } elseif (request()->is('service-areas/ocean-pines-md-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair ocean pines';
    } elseif (request()->is('service-areas/rehoboth-beach-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair rehoboth beach';

    } elseif (request()->is('service-areas/smyrna-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair smyrna';
    } 
     elseif (request()->is('service-areas/townsend-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair townsend';
    } 
     elseif (request()->is('service-areas/odessa-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair odessa';
    } 
    elseif (request()->is('service-areas/middletown-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair middletown';
    } 
    elseif (request()->is('service-areas/camden-wyoming-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair camden wyoming';
    } 
    elseif (request()->is('service-areas/magnolia-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair magnolia';
    } 
    elseif (request()->is('service-areas/frederica-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair frederica';
    } 
    elseif (request()->is('service-areas/newark-de-garage-doors')) {
        $commonGarageDoorImageAlt = 'residential garage door repair newark';
    } 
    
    
    elseif (!empty($garage_door->door_title)) {
        $commonGarageDoorImageAlt = $garage_door->door_title;
    }
?>
<section class="common-problems-sec sandk-common-padding sandk-common">
    <div class="container-md">
        <div class="row align-items-center">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 left-side">
                <?php if(isset($garage_door->garage_img) && $garage_door->garage_img != null): ?>
                    <?php
                        $img = App\Models\MediaImage::select('name')->where('id', $garage_door->garage_img)->first();
                    ?>
                    <?php if(isset($img->name) && $img->name != null): ?>
                        <img src="<?php echo e($imageUrl); ?>" srcset="<?php echo e($imageUrl); ?> 602w"
                            sizes="(max-width: 600px) 400px, (max-width: 900px) 600px, 602px" class="img-fluid"
                            width="602" height="588" loading="lazy"  
                            alt="<?php echo e($commonGarageDoorImageAlt); ?>">
                    <?php endif; ?>
                <?php else: ?>
                    <img src="<?php echo e(asset('front-assets/src/images/More-Common-Problems.webp')); ?>" class="img-fluid"
                        width="602" height="588" alt="Garage Door" loading="lazy">
                <?php endif; ?>
            </div>

            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 right-side">
                <h2><?php echo e(isset($garage_door->door_title) ? $garage_door->door_title : ''); ?> <?php if(isset($garage_door->door_sub_title) && $garage_door->door_sub_title != ''): ?>
                        <?php echo e($garage_door->door_sub_title); ?>

                    <?php endif; ?>
                </h2>
                <h2 class="mobile-heading"><?php echo e(isset($garage_door->door_title) ? $garage_door->door_title : ''); ?>

                    <?php echo e(isset($garage_door->door_sub_title) ? $garage_door->door_sub_title : ''); ?></h2>
                <?php echo $garage_door->garage_door_description; ?>

                <?php if(isset($residential->resi_button_name) && $residential->resi_button_name != ''): ?>
                    <?php if(isset($residential->resi_button_url) && $residential->resi_button_url != ''): ?>
                        <a class="common-btn" href="<?php echo e($residential->resi_button_url); ?>">
                        <?php else: ?>
                            <a class="common-btn">
                    <?php endif; ?>
                    <img src="<?php echo e(asset('front-assets/src/images/white-yellow-call-icon.webp')); ?>" class="normal-icon"
                        alt=""><img src="<?php echo e(asset('front-assets/src/images/blue-white-call-icon.webp')); ?>"
                        class="hover-icon" alt="" width="25"
                        height="25"><?php echo e($residential->resi_button_name); ?>

                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/customer/www/clarkandsonsdoors.com/public_html/resources/views/frontend/includes/garagedoor.blade.php ENDPATH**/ ?>