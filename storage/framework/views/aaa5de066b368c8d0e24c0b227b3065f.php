<?php
    use Illuminate\Support\Facades\Request;

    $faqspath = Request::path(); // e.g. "locations/newport-garage-doors"
    $filename = 'garage-door-delaware.webp'; // default for homepage or unknown

    // Match different paths
    if ($faqspath === '/') {
        $filename = 'garage-door-delaware.webp';
    } elseif (str_contains($faqspath, 'newport')) {
        $filename = 'garage-door-newport.webp';
    } elseif (str_contains($faqspath, 'dover')) {
        $filename = 'garage-door-dover.webp';
    } elseif (str_contains($faqspath, 'georgetown')) {
        $filename = 'garage-door-georgetown.webp';
    } elseif (str_contains($faqspath, 'salisbury')) {
        $filename = 'garage-door-salisbury.webp';
    } elseif (str_contains($faqspath, 'berlin')) {
        $filename = 'garage-door-berlin.webp';
    } elseif (str_contains($faqspath, 'bethany-beach')) {
        $filename = 'garage-door-bethany-beach.webp';
    } elseif (str_contains($faqspath, 'dewey-beach')) {
        $filename = 'garage-door-dewey-beach.webp';
    } elseif (str_contains($faqspath, 'fenwick-island')) {
        $filename = 'garage-door-fenwick-island.webp';
    } elseif (str_contains($faqspath, 'lewes')) {
        $filename = 'garage-door-lewes.webp';
    } elseif (str_contains($faqspath, 'ocean-city')) {
        $filename = 'garage-door-ocean-city.webp';
    } elseif (str_contains($faqspath, 'ocean-pines')) {
        $filename = 'garage-door-ocean-pines.webp';
    } elseif (str_contains($faqspath, 'rehoboth-beach')) {
        $filename = 'garage-door-rehoboth-beach.webp';
    } elseif (str_contains($faqspath, 'smyrna')) {
        $filename = 'garage-door-smyrna.webp';
    }
     elseif (str_contains($faqspath, 'middletown')) {
        $filename = 'garage-door-middletown.webp';
    }
     elseif (str_contains($faqspath, 'odessa')) {
        $filename = 'garage-door-odessa.webp';
    }
     elseif (str_contains($faqspath, 'townsend')) {
        $filename = 'garage-door-townsend.webp';
    }
     elseif (str_contains($faqspath, 'magnolia')) {
        $filename = 'garage-door-magnolia.webp';
    }
     elseif (str_contains($faqspath, 'frederica')) {
        $filename = 'garage-door-frederica.webp';
    }
     elseif (str_contains($faqspath, 'newark')) {
        $filename = 'garage-door-newark.webp';
    }
     elseif (str_contains($faqspath, 'camden-wyoming')) {
        $filename = 'garage-door-camden-wyoming.webp';
    }

    $faqsimageUrl = asset('uploads/' . $filename);
?>



<?php
    $faqsImageAlt = 'garage door';

    if (request()->is('/')) {
        $faqsImageAlt = 'delaware garage door';
    } elseif (request()->is('locations/newport-garage-doors')) {
        $faqsImageAlt = 'newport garage door';
    } elseif (request()->is('locations/dover-garage-doors')) {
        $faqsImageAlt = 'dover garage door';
    } elseif (request()->is('locations/georgetown-garage-doors')) {
        $faqsImageAlt = 'georgetown garage door';
    } elseif (request()->is('locations/salisbury-garage-doors')) {
        $faqsImageAlt = 'salisbury garage door';
    } elseif (request()->is('service-areas/berlin-md-garage-doors')) {
        $faqsImageAlt = 'berlin garage door';
    } elseif (request()->is('service-areas/bethany-beach-de-garage-doors')) {
        $faqsImageAlt = 'bethany beach garage door';
    } elseif (request()->is('service-areas/dewey-beach-de-garage-doors')) {
        $faqsImageAlt = 'dewey beach garage door';
    } elseif (request()->is('service-areas/fenwick-island-de-garage-doors')) {
        $faqsImageAlt = 'fenwick island  garage door';
    } elseif (request()->is('service-areas/lewes-de-garage-doors')) {
        $faqsImageAlt = 'lewes garage door';
    } elseif (request()->is('service-areas/ocean-city-md-garage-doors')) {
        $faqsImageAlt = 'ocean city garage door';
    } elseif (request()->is('service-areas/ocean-pines-md-garage-doors')) {
        $faqsImageAlt = 'ocean pines  garage door';
    } elseif (request()->is('service-areas/rehoboth-beach-de-garage-doors')) {
        $faqsImageAlt = 'rehoboth beach garage door';

    }elseif (request()->is('service-areas/smyrna-de-garage-doors')) {
        $faqsImageAlt = 'smyrna garage door';

    }elseif (request()->is('service-areas/townsend-de-garage-doors')) {
        $faqsImageAlt = 'townsend garage door';
        
    }elseif (request()->is('service-areas/odessa-de-garage-doors')) {
        $faqsImageAlt = 'odessa garage door';
        
    }elseif (request()->is('service-areas/middletown-de-garage-doors')) {
        $faqsImageAlt = 'middletown garage door';
        
    }
    elseif (request()->is('service-areas/magnolia-de-garage-doors')) {
        $faqsImageAlt = 'magnolia garage door';
        
    }
    elseif (request()->is('service-areas/frederica-de-garage-doors')) {
        $faqsImageAlt = 'frederica garage door';
        
    }
    elseif (request()->is('service-areas/newark-de-garage-doors')) {
        $faqsImageAlt = 'newark garage door';
        
    }
    elseif (request()->is('service-areas/camden-wyoming-de-garage-doors')) {
        $faqsImageAlt = 'camden wyoming garage door';
        
    }
     elseif (!empty($faqs->faqs_title)) {
        $faqsImageAlt = $faqs->faqs_title;
    }
?>
<section class="faq-sec sandk-common-padding sandk-common">

    <div class="container-md">
        <div class="row">
            <h2>FAQ’s</h2>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 left-side-image">
                <?php if($faqs->faq_img): ?>
                    <?php
                        $img = App\Models\MediaImage::select('name')->where('id', $faqs->faq_img)->first();
                    ?>
                    <figure>
                        <?php if(isset($img->name) && $img->name != null): ?>
                            <img src="<?php echo e($faqsimageUrl); ?>" width="626" height="670" alt="<?php echo e($faqsImageAlt); ?>"
                                loading="lazy" class="img-fluid">
                        <?php endif; ?>
                    </figure>
                <?php endif; ?>
            </div>

            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 right-faq-sec">
                <?php if($faq_data->count() > 0): ?>
                    <div class="accordion" id="bestAccordion">
                        <?php $__currentLoopData = $faq_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dkey => $dval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($dkey == 7): ?>
                                <?php
                                    break;
                                ?>
                            <?php endif; ?>
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="heading<?php echo e($dkey); ?>">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo e($dkey); ?>"><?php echo e($dval['title']); ?></button>
                                </h4>
                                <div id="collapse<?php echo e($dkey); ?>" class="accordion-collapse collapse"
                                    data-bs-parent="#bestAccordion">
                                    <div class="card-body">
                                        <p><?php echo e($dval['description']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <a href="<?php echo e(route('frontend.page.index', 'faqs')); ?>/" class="common-btn">View More FAQ's</a>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/customer/www/clarkandsonsdoors.com/public_html/resources/views/frontend/includes/faq-sec.blade.php ENDPATH**/ ?>