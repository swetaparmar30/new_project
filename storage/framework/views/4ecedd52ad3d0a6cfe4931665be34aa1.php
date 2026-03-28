 <div class="row multi-location-footer">
     <div
         class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 footer-content footer-first-sec footer-logo footer-depart">

         <figure>
             <a href="<?php echo e(route('home')); ?>" aria-label="Footer Logo">

                 <?php if(isset($setting->footer_logo) && $setting->footer_logo != '' && $setting->footer_logo != null): ?>
                     <?php
                         $image_name = App\Models\MediaImage::where('id', $setting->footer_logo)->first();
                         if (isset($image_name) && $image_name != null) {
                             $f_path = asset('uploads/' . $image_name->name);
                         } else {
                             $f_path = asset('assets/src/images/footer-logo.webp');
                         }
                     ?>

                     <img src="<?php echo e($f_path); ?>" width="188" height="56" alt="Footer Logo" class="img-fluid"
                         loading="lazy">
                 <?php else: ?>
                     <img src="<?php echo e(asset('front-assets/images/footer-logo.webp')); ?>" width="188" height="56"
                         alt="Footer Logo" class="img-fluid" loading="lazy">
                 <?php endif; ?>
             </a>
         </figure>

         <?php if(isset($setting->content) && $setting->content != ''): ?>
             <?php echo html_entity_decode($setting->content); ?>

         <?php endif; ?>

         <?php if(
             (isset($setting->google_url) && $setting->google_url != null) ||
                 (isset($setting->facebook_url) && $setting->facebook_url != null) ||
                 (isset($setting->insta_url) && $setting->insta_url != null) ||
                 (isset($setting->linked_url) && $setting->linked_url != null) ||
                 (isset($setting->twitter_url) && $setting->twitter_url != null) ||
                 (isset($setting->yelp_url) && $setting->yelp_url != null) ||
                 (isset($setting->houzz_url) && $setting->houzz_url != null) ||
                 (isset($setting->youtube_url) && $setting->youtube_url != null) ||
                 (isset($setting->pinterest_url) && $setting->pinterest_url != null) ||
                 (isset($setting->shawnee_location_url) && $setting->shawnee_location_url != null)): ?>

             <div class="social">
                 <h3>Connect With Us</h3>
                 <ul>
                     <?php if(isset($setting->google_url) && $setting->google_url != null): ?>
                         <li><a href="<?php echo e($setting->google_url); ?>" target="blank" title="Google"><img
                                     src="<?php echo e(asset('front-assets/src/images/google-black.webp')); ?>" alt="Google"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->facebook_url) && $setting->facebook_url != null): ?>
                         <li><a href="<?php echo e($setting->facebook_url); ?>" target="blank" title="Facebook"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_facbook.svg')); ?>" alt="Facebook"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->insta_url) && $setting->insta_url != null): ?>
                         <li><a href="<?php echo e($setting->insta_url); ?>" target="blank" title="Instagram"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_instagram.svg')); ?>" alt="Instagram"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->linked_url) && $setting->linked_url != null): ?>
                         <li><a href="<?php echo e($setting->linked_url); ?>" target="blank" title="Linkedin"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_LinkedIn.svg')); ?>" alt="Linkedin"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->twitter_url) && $setting->twitter_url != null): ?>
                         <li><a href="<?php echo e($setting->twitter_url); ?>" target="blank" title="Twitter"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_Twitter.svg')); ?>" alt="Twitter"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->pinterest_url) && $setting->pinterest_url != null): ?>
                         <li><a href="<?php echo e($setting->pinterest_url); ?>" target="blank" title="Pintrest"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_pinterest.svg')); ?>" alt="Pintrest"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->youtube_url) && $setting->youtube_url != null): ?>
                         <li><a href="<?php echo e($setting->youtube_url); ?>" target="blank" title="Youtube"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_you tube.svg')); ?>" alt="Youtube"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(Request::is('locations/dover-garage-doors')): ?>
                         <?php if(isset($setting->dover_location_url) && $setting->dover_location_url != null): ?>
                             <li><a href="<?php echo e($setting->dover_location_url); ?>" target="blank"
                                     title="Dover Location"><img
                                         src="<?php echo e(asset('front-assets/src/images/new_location.svg')); ?>" alt="Dover"
                                         class="img-fluid" width="40" height="40"></a></li>
                         <?php endif; ?>
                     <?php endif; ?>
                     <?php if(Request::is('locations/newport-garage-doors')): ?>
                         <?php if(isset($setting->newport_location_url) && $setting->newport_location_url != null): ?>
                             <li><a href="<?php echo e($setting->newport_location_url); ?>" target="blank"
                                     title="Newport Location"><img
                                         src="<?php echo e(asset('front-assets/src/images/new_location.svg')); ?>" alt="Newport"
                                         class="img-fluid" width="40" height="40"></a></li>
                         <?php endif; ?>
                     <?php endif; ?>

                 </ul>
             </div>
         <?php endif; ?>
     </div>

     <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 footer-content footer-second-sec footer-depart">
         <h3>Quick Links</h3>
         <?php if(isset($menu_lists_services) && count($menu_lists_services)): ?>
             <ul>
                 <?php $__currentLoopData = $menu_lists_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicesLinks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php $__currentLoopData = $servicesLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu_links_services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li><a href="<?php echo e($menu_links_services->slug); ?>"><?php echo e($menu_links_services->name); ?></a></li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </ul>
         <?php endif; ?>
     </div>

     <div
         class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 footer-content footer-residential footer-depart">
         <h3>Residential</h3>
         <?php if(isset($menu_lists_residential) && count($menu_lists_residential)): ?>
             <ul>

                 <?php $__currentLoopData = $menu_lists_residential; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reslinks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <!-- <?php
                         $limitedMenu = collect($reslinks)->flatten()->take(9);
                     ?> -->
                     <?php $__currentLoopData = $reslinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $resmenu_links): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li><a href="<?php echo e($resmenu_links->slug); ?>"><?php echo e($resmenu_links->name); ?></a></li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </ul>
         <?php endif; ?>
     </div>

     <div
         class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 footer-content footer-commercial footer-depart">

         <h3>Commercial</h3>
         <?php if(isset($menu_lists_commercial) && count($menu_lists_commercial)): ?>
             <ul>
                 <?php $__currentLoopData = $menu_lists_commercial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comlinks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <!--  <?php
                         $comlimitedMenu = collect($comlinks)->flatten()->take(9);
                     ?> -->
                     <?php $__currentLoopData = $comlinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $commenu_links): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li><a href="<?php echo e($commenu_links->slug); ?>"><?php echo e($commenu_links->name); ?></a></li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </ul>
         <?php endif; ?>
     </div>




     <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 footer-content footer-full-sec">
         <h3>Locations</h3>
     </div>

     <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 footer-content footer-third-sec">
         <h4>Hastings, NE</h4>
         <ul>
             <?php if(isset($setting->location) && $setting->location != ''): ?>
                 <li><?php echo html_entity_decode($setting->location); ?></li>
             <?php endif; ?>
             <?php if(isset($setting->contact_no2) && $setting->contact_no2 != ''): ?>
                 <li><a href="<?php echo e(isset($setting->contact_no2) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no2) : ''); ?>"
                         class="custom_fonts_amiko"><?php echo e(isset($setting->contact_no2) ? $setting->contact_no2 : ''); ?></a>
                 </li>
             <?php endif; ?>
             <?php if(isset($setting->fax_no) && $setting->fax_no != ''): ?>
                 <li><span class="custom_fonts_amiko"><?php echo e(isset($setting->fax_no) ? $setting->fax_no : ''); ?></span></li>
             <?php endif; ?>
             <?php if(isset($setting->email) && $setting->email != ''): ?>
                 <li><a href="mailto:<?php echo strip_tags(html_entity_decode($setting->email)); ?>"><?php echo html_entity_decode($setting->email); ?></a></li>
             <?php endif; ?>

         </ul>
     </div>
     <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 footer-content footer-four-sec">
         <?php if(isset($setting->map_link) && $setting->map_link != ''): ?>
             <?php echo html_entity_decode($setting->map_link); ?>

         <?php endif; ?>




         <?php if(
             (isset($setting->google_url) && $setting->google_url != null) ||
                 (isset($setting->facebook_url) && $setting->facebook_url != null) ||
                 (isset($setting->insta_url) && $setting->insta_url != null) ||
                 (isset($setting->linked_url) && $setting->linked_url != null) ||
                 (isset($setting->twitter_url) && $setting->twitter_url != null) ||
                 (isset($setting->yelp_url) && $setting->yelp_url != null) ||
                 (isset($setting->houzz_url) && $setting->houzz_url != null) ||
                 (isset($setting->youtube_url) && $setting->youtube_url != null) ||
                 (isset($setting->pinterest_url) && $setting->pinterest_url != null)): ?>
             <div class="mobile-social-sec social">
                 <h3>Connect With Us</h3>
                 <ul>
                     <?php if(isset($setting->google_url) && $setting->google_url != null): ?>
                         <li><a href="<?php echo e($setting->google_url); ?>" target="blank" title="Google"><img
                                     src="<?php echo e(asset('front-assets/src/images/google-black.webp')); ?>" alt="Google"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->facebook_url) && $setting->facebook_url != null): ?>
                         <li><a href="<?php echo e($setting->facebook_url); ?>" target="blank" title="Facebook"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_facbook.svg')); ?>" alt="Facebook"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->insta_url) && $setting->insta_url != null): ?>
                         <li><a href="<?php echo e($setting->insta_url); ?>" target="blank" title="Instagram"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_instagram.svg')); ?>" alt="Instagram"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->linked_url) && $setting->linked_url != null): ?>
                         <li><a href="<?php echo e($setting->linked_url); ?>" target="blank" title="Linkedin"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_LinkedIn.svg')); ?>" alt="Linkedin"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->twitter_url) && $setting->twitter_url != null): ?>
                         <li><a href="<?php echo e($setting->twitter_url); ?>" target="blank" title="Twitter"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_Twitter.svg')); ?>" alt="Twitter"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->pinterest_url) && $setting->pinterest_url != null): ?>
                         <li><a href="<?php echo e($setting->pinterest_url); ?>" target="blank" title="Pintrest"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_pinterest.svg')); ?>" alt="Pintrest"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->youtube_url) && $setting->youtube_url != null): ?>
                         <li><a href="<?php echo e($setting->youtube_url); ?>" target="blank" title="Youtube"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_you tube.svg')); ?>" alt="Youtube"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(Request::is('locations/dover-garage-doors')): ?>
                         <?php if(isset($setting->dover_location_url) && $setting->dover_location_url != null): ?>
                             <li><a href="<?php echo e($setting->dover_location_url); ?>" target="blank"
                                     title="Dover Location"><img
                                         src="<?php echo e(asset('front-assets/src/images/new_location.svg')); ?>" alt="Dover"
                                         class="img-fluid" width="40" height="40"></a></li>
                         <?php endif; ?>
                     <?php endif; ?>
                     <?php if(Request::is('locations/newport-garage-doors')): ?>
                         <?php if(isset($setting->newport_location_url) && $setting->newport_location_url != null): ?>
                             <li><a href="<?php echo e($setting->newport_location_url); ?>" target="blank"
                                     title="Newport Location"><img
                                         src="<?php echo e(asset('front-assets/src/images/new_location.svg')); ?>" alt="Newport"
                                         class="img-fluid" width="40" height="40"></a></li>
                         <?php endif; ?>
                     <?php endif; ?>
                 </ul>
             </div>
         <?php endif; ?>
     </div>

     <div
         class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 footer-content footer-third-sec left-side-space">
         <h4>Lincoln , NE</h4>
         <ul>
             <?php if(isset($setting->location2) && $setting->location2 != ''): ?>
                 <li><?php echo html_entity_decode($setting->location2); ?></li>
             <?php endif; ?>
             <?php if(isset($setting->contact_no3) && $setting->contact_no3 != ''): ?>
                 <li><a href="<?php echo e(isset($setting->contact_no3) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no3) : ''); ?>"
                         class="custom_fonts_amiko"><?php echo e(isset($setting->contact_no3) ? $setting->contact_no3 : ''); ?></a>
                 </li>
             <?php endif; ?>
             <?php if(isset($setting->fax_no) && $setting->fax_no != ''): ?>
                 <li><span class="custom_fonts_amiko"><?php echo e(isset($setting->fax_no) ? $setting->fax_no : ''); ?></span>
                 </li>
             <?php endif; ?>
             <?php if(isset($setting->email2) && $setting->email2 != ''): ?>
                 <li><a href="mailto:<?php echo strip_tags(html_entity_decode($setting->email2)); ?>"><?php echo html_entity_decode($setting->email2); ?></a></li>
             <?php endif; ?>

         </ul>
     </div>

     <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 footer-content footer-four-sec">


         <?php if(isset($setting->map_link2) && $setting->map_link2 != ''): ?>
             <?php echo html_entity_decode($setting->map_link2); ?>

         <?php endif; ?>


         <?php if(
             (isset($setting->google_url) && $setting->google_url != null) ||
                 (isset($setting->facebook_url) && $setting->facebook_url != null) ||
                 (isset($setting->insta_url) && $setting->insta_url != null) ||
                 (isset($setting->linked_url) && $setting->linked_url != null) ||
                 (isset($setting->twitter_url) && $setting->twitter_url != null) ||
                 (isset($setting->yelp_url) && $setting->yelp_url != null) ||
                 (isset($setting->houzz_url) && $setting->houzz_url != null) ||
                 (isset($setting->youtube_url) && $setting->youtube_url != null) ||
                 (isset($setting->pinterest_url) && $setting->pinterest_url != null)): ?>
             <div class="mobile-social-sec social">
                 <h3>Connect With Us</h3>
                 <ul>
                     <?php if(isset($setting->google_url) && $setting->google_url != null): ?>
                         <li><a href="<?php echo e($setting->google_url); ?>" target="blank" title="Google"><img
                                     src="<?php echo e(asset('front-assets/src/images/google-black.webp')); ?>" alt="Google"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->facebook_url) && $setting->facebook_url != null): ?>
                         <li><a href="<?php echo e($setting->facebook_url); ?>" target="blank" title="Facebook"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_facbook.svg')); ?>" alt="Facebook"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->insta_url) && $setting->insta_url != null): ?>
                         <li><a href="<?php echo e($setting->insta_url); ?>" target="blank" title="Instagram"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_instagram.svg')); ?>" alt="Instagram"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->linked_url) && $setting->linked_url != null): ?>
                         <li><a href="<?php echo e($setting->linked_url); ?>" target="blank" title="Linkedin"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_LinkedIn.svg')); ?>" alt="Linkedin"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->twitter_url) && $setting->twitter_url != null): ?>
                         <li><a href="<?php echo e($setting->twitter_url); ?>" target="blank" title="Twitter"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_Twitter.svg')); ?>" alt="Twitter"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->pinterest_url) && $setting->pinterest_url != null): ?>
                         <li><a href="<?php echo e($setting->pinterest_url); ?>" target="blank" title="Pintrest"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_pinterest.svg')); ?>" alt="Pintrest"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->youtube_url) && $setting->youtube_url != null): ?>
                         <li><a href="<?php echo e($setting->youtube_url); ?>" target="blank" title="Youtube"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_you tube.svg')); ?>" alt="Youtube"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(Request::is('locations/dover-garage-doors')): ?>
                         <?php if(isset($setting->dover_location_url) && $setting->dover_location_url != null): ?>
                             <li><a href="<?php echo e($setting->dover_location_url); ?>" target="blank"
                                     title="Dover Location"><img
                                         src="<?php echo e(asset('front-assets/src/images/new_location.svg')); ?>" alt="Dover"
                                         class="img-fluid" width="40" height="40"></a></li>
                         <?php endif; ?>
                     <?php endif; ?>
                     <?php if(Request::is('locations/newport-garage-doors')): ?>
                         <?php if(isset($setting->newport_location_url) && $setting->newport_location_url != null): ?>
                             <li><a href="<?php echo e($setting->newport_location_url); ?>" target="blank"
                                     title="Newport Location"><img
                                         src="<?php echo e(asset('front-assets/src/images/new_location.svg')); ?>" alt="Newport"
                                         class="img-fluid" width="40" height="40"></a></li>
                         <?php endif; ?>
                     <?php endif; ?>
                 </ul>
             </div>
         <?php endif; ?>
     </div>

 </div>



 <div class="row locations-sec mobile-locations-sec diffrent-brand-sec">
     <h3 class="lc-h3">Locations</h3>
     <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

         <div class="accordion" id="footerAccordion">



             <div class="accordion-item">
                 <h3 class="accordion-header" id="headingTwo">
                     <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                         data-bs-target="#collapseTwo" aria-expanded="false"><span>Hastings, NE</span></button>
                 </h3>

                 <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#footerAccordion">
                     <div class="card-body">
                         <ul>
                             <?php if(isset($setting->location) && $setting->location != ''): ?>
                                 <li class="lc_m"><?php echo html_entity_decode($setting->location); ?></li>
                             <?php endif; ?>
                             <?php if(isset($setting->contact_no2) && $setting->contact_no2 != ''): ?>
                                 <li class="lc_c"><a
                                         href="<?php echo e(isset($setting->contact_no2) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no2) : ''); ?>"
                                         class="custom_fonts_amiko"><?php echo e(isset($setting->contact_no2) ? $setting->contact_no2 : ''); ?></a>
                                 </li>
                             <?php endif; ?>
                             <?php if(isset($setting->email) && $setting->email != ''): ?>
                                 <li class="lc_e"><a
                                         href="mailto:<?php echo strip_tags(html_entity_decode($setting->email)); ?>"><?php echo html_entity_decode($setting->email); ?></a>
                                 </li>
                             <?php endif; ?>
                         </ul>

                         <?php if(isset($setting->map_link) && $setting->map_link != '' && $setting->map_link != null): ?>
                             <?php echo html_entity_decode($setting->map_link); ?>

                         <?php endif; ?>
                     </div>
                 </div>
             </div>
             <div class="accordion-item">
                 <h3 class="accordion-header" id="headingOne">
                     <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                         data-bs-target="#collapseOne" aria-expanded="false"><span>Lincoln , NE</span></button>
                 </h3>

                 <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#footerAccordion">
                     <div class="card-body">
                         <ul>
                             <?php if(isset($setting->location2) && $setting->location2 != ''): ?>
                                 <li class="lc_m"><?php echo html_entity_decode($setting->location2); ?></li>
                             <?php endif; ?>
                             <?php if(isset($setting->contact_no3) && $setting->contact_no3 != ''): ?>
                                 <li class="lc_c"><a
                                         href="<?php echo e(isset($setting->contact_no3) ? 'tel:+1' . preg_replace('/[^0-9]/', '', $setting->contact_no3) : ''); ?>"
                                         class="custom_fonts_amiko"><?php echo e(isset($setting->contact_no3) ? $setting->contact_no3 : ''); ?></a>
                                 </li>
                             <?php endif; ?>
                             <?php if(isset($setting->email2) && $setting->email2 != ''): ?>
                                 <li class="lc_e"><a
                                         href="mailto:<?php echo strip_tags(html_entity_decode($setting->email2)); ?>"><?php echo html_entity_decode($setting->email2); ?></a>
                                 </li>
                             <?php endif; ?>
                         </ul>

                         <?php if(isset($setting->map_link2) && $setting->map_link2 != '' && $setting->map_link2 != null): ?>
                             <?php echo html_entity_decode($setting->map_link2); ?>

                         <?php endif; ?>
                     </div>
                 </div>
             </div>


         </div>

     </div>

     <?php if(
         (isset($setting->google_url) && $setting->google_url != null) ||
             (isset($setting->facebook_url) && $setting->facebook_url != null) ||
             (isset($setting->insta_url) && $setting->insta_url != null) ||
             (isset($setting->linked_url) && $setting->linked_url != null) ||
             (isset($setting->twitter_url) && $setting->twitter_url != null) ||
             (isset($setting->youtube_url) && $setting->youtube_url != null) ||
             (isset($setting->newport_location_url) && $setting->newport_location_url != null) ||
             (isset($setting->pinterest_url) && $setting->pinterest_url != null)): ?>
         <div class="col-12">
             <div class="mobile-social-sec mobile-social-icons">
                 <h3>Connect With Us</h3>
                 <ul>
                     <?php if(isset($setting->google_url) && $setting->google_url != null): ?>
                         <li><a href="<?php echo e($setting->google_url); ?>" target="blank" title="Google"><img
                                     src="<?php echo e(asset('front-assets/src/images/google-black.webp')); ?>" alt="Google"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->facebook_url) && $setting->facebook_url != null): ?>
                         <li><a href="<?php echo e($setting->facebook_url); ?>" target="blank" title="Facebook"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_facbook.svg')); ?>" alt="Facebook"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->insta_url) && $setting->insta_url != null): ?>
                         <li><a href="<?php echo e($setting->insta_url); ?>" target="blank" title="Instagram"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_instagram.svg')); ?>" alt="Instagram"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->linked_url) && $setting->linked_url != null): ?>
                         <li><a href="<?php echo e($setting->linked_url); ?>" target="blank" title="Linkedin"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_LinkedIn.svg')); ?>" alt="Linkedin"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->twitter_url) && $setting->twitter_url != null): ?>
                         <li><a href="<?php echo e($setting->twitter_url); ?>" target="blank" title="Twitter"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_Twitter.svg')); ?>" alt="Twitter"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->pinterest_url) && $setting->pinterest_url != null): ?>
                         <li><a href="<?php echo e($setting->pinterest_url); ?>" target="blank" title="Pintrest"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_pinterest.svg')); ?>" alt="Pintrest"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(isset($setting->youtube_url) && $setting->youtube_url != null): ?>
                         <li><a href="<?php echo e($setting->youtube_url); ?>" target="blank" title="Youtube"><img
                                     src="<?php echo e(asset('front-assets/src/images/new_you tube.svg')); ?>" alt="Youtube"
                                     class="img-fluid" width="40" height="40"></a></li>
                     <?php endif; ?>
                     <?php if(Request::is('locations/dover-garage-doors')): ?>
                         <?php if(isset($setting->dover_location_url) && $setting->dover_location_url != null): ?>
                             <li><a href="<?php echo e($setting->dover_location_url); ?>" target="blank"
                                     title="Dover Location"><img
                                         src="<?php echo e(asset('front-assets/src/images/new_location.svg')); ?>" alt="Dover"
                                         class="img-fluid" width="40" height="40"></a></li>
                         <?php endif; ?>
                     <?php endif; ?>
                     <?php if(Request::is('locations/newport-garage-doors')): ?>
                         <?php if(isset($setting->newport_location_url) && $setting->newport_location_url != null): ?>
                             <li><a href="<?php echo e($setting->newport_location_url); ?>" target="blank"
                                     title="Newport Location"><img
                                         src="<?php echo e(asset('front-assets/src/images/new_location.svg')); ?>" alt="Newport"
                                         class="img-fluid" width="40" height="40"></a></li>
                         <?php endif; ?>
                     <?php endif; ?>
                 </ul>
             </div>
         </div>
     <?php endif; ?>
 </div>
<?php /**PATH D:\xampp\htdocs\new_project\resources\views/frontend/includes/all-locations.blade.php ENDPATH**/ ?>