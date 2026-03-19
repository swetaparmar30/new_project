

<?php if(isset($service_head_sec) || isset($services_sec)): ?>
    <section class="garage-door-maintenance-sec new-services-sec sandk-common-padding sandk-common">
        <div class="container-md">
            <div class="row align-items-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 services-sec">
                    <?php if($service_head_sec->title): ?>
                        <h2><?php echo e($service_head_sec->title); ?></h2>
                    <?php else: ?>
                        <h2>Our Comprehensive <br> Garage Door Services</h2>
                    <?php endif; ?>
                    <?php if($service_head_sec->description): ?>
                        <?php echo $service_head_sec->description; ?>

                    <?php else: ?>
                        <p>At <b>Clark and Sons</b>, our experienced team delivers professional, high-quality garage
                            door
                            solutions tailored specifically to your needs. With over 60 years serving Delaware and the
                            Delmarva
                            Peninsula, we guarantee reliable and efficient services that keep your garage doors safe,
                            secure,
                            and performing smoothly.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
            function fetchImgPath($imgId)
            {
                $img = App\Models\MediaImage::find($imgId);
                return asset('uploads/' . $img->name);
            }
        ?>
        <div class="container-md">
            <div class="row align-items-center desktop-garage-door-maintenance-sec">
                <div class="left-side">
                    <div class="row left-side-tab-items">
                        <?php $__currentLoopData = $services_sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div
                                class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section upper-box">
                                <article>
                                    <?php if($service->img != ''): ?>
                                        <img src="<?php echo e(fetchImgPath($service->img)); ?>" width="auto" height="auto"
                                            class="img-fluid" alt="">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('front-assets/src/images/garage-door-installation-and-replacement-delaware.webp')); ?>"
                                            width="auto" height="auto" class="img-fluid" alt="delaware garage door installation and replacement" loading="lazy">
                                    <?php endif; ?>
                                    <?php if($service->title != ''): ?>
                                        <h4><?php echo e($service->title); ?></h4>
                                    <?php else: ?>
                                        <h4>Garage Door Installation & Replacement</h4>
                                    <?php endif; ?>

                                    <div>
                                        <?php if($service->description != ''): ?>
                                            <?php echo $service->description; ?>

                                        <?php else: ?>
                                            <p>Enhance your property's value and curb appeal with our premium
                                                residential
                                                and
                                                commercial garage doors. We offer a wide variety of styles, materials,
                                                and
                                                customization options, expertly installed by our skilled professionals
                                                to
                                                match
                                                your
                                                specific requirements.</p>
                                        <?php endif; ?>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        


                    </div>
                </div>
            </div>
            <div class="row align-items-center mobile-service-sec">
                <div class="left-side">
                    <div class="left-side-tab-items">
                        <?php $__currentLoopData = $services_sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div
                                class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section upper-box">
                                <article>
                                    <?php if($service->img != ''): ?>
                                        <img src="<?php echo e(fetchImgPath($service->img)); ?>" width="auto" height="auto"
                                            class="img-fluid" alt="" loading="lazy">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('front-assets/src/images/garage-door-installation-and-replacement-delaware.webp')); ?>"
                                            width="auto" height="auto" class="img-fluid" alt="delaware garage door installation and replacement" loading="lazy">
                                    <?php endif; ?>
                                    <?php if($service->title != ''): ?>
                                        <h4><?php echo e($service->title); ?></h4>
                                    <?php else: ?>
                                        <h4>Garage Door Installation & Replacement</h4>
                                    <?php endif; ?>

                                    <div>
                                        <?php if($service->description != ''): ?>
                                            <?php echo $service->description; ?>

                                        <?php else: ?>
                                            <p>Enhance your property's value and curb appeal with our premium
                                                residential
                                                and
                                                commercial garage doors. We offer a wide variety of styles, materials,
                                                and
                                                customization options, expertly installed by our skilled professionals
                                                to
                                                match
                                                your
                                                specific requirements.</p>
                                        <?php endif; ?>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        


                    </div>
                </div>
            </div>
    </section>
<?php else: ?>
<section class="garage-door-maintenance-sec new-services-sec sandk-common-padding sandk-common">
   <div class="container-md">
      <div class="row align-items-center">
         <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 services-sec">
            <h2>Our Comprehensive <br> Garage Door Services</h2>
            <p>At <b>Clark and Sons</b>, our experienced team delivers professional, high-quality garage door solutions tailored specifically to your needs. With over 60 years serving Delaware and the Delmarva Peninsula, we guarantee reliable and efficient services that keep your garage doors safe, secure, and performing smoothly.</p>
         </div>
      </div>
   </div> 
   <div class="container-md">
      <div class="row align-items-center desktop-garage-door-maintenance-sec">
         <div class="left-side">
            <div class="row left-side-tab-items">
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section upper-box">
                  <article>
                      <a href="<?php echo e(route('get.residential.products')); ?>/"><img src="<?php echo e(asset('front-assets/src/images/garage-door-installation-and-replacement-delaware.webp')); ?>" width="auto" height="auto" class="img-fluid" alt="delaware garage door installation and replacement">    </a>              
                      <a href="<?php echo e(route('get.residential.products')); ?>/"><h4>Garage Door Installation & Replacement</h4></a>
                     <div>
                        <p>Enhance your property's value and curb appeal with our premium residential and commercial garage doors. We offer a wide variety of styles, materials, and customization options, expertly installed by our skilled professionals to match your specific requirements.</p>                                                                                        
                     </div>
                    <div class="services-link">
                        <a href="<?php echo e(route('get.residential.products')); ?>/">Residential Garage Doors</a>
                    </div>
                  </article>
               </div>
               
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section upper-box">
                  <article>
                      <a href="<?php echo e(route('serviceAndRepair')); ?>/"> <img src="<?php echo e(asset('front-assets/src/images/garage-door-repairs-and-parts-replacement-delaware.webp')); ?>" width="auto" height="auto" class="img-fluid" alt="delaware garage door repairs and parts replacement" loading="lazy">     </a>             
                      <a href="<?php echo e(route('serviceAndRepair')); ?>/"> <h4>Garage Door Repairs & Parts Replacement</h4></a>
                     <div>
                        <p>Facing garage door troubles? Our skilled technicians offer prompt repairs and reliable parts replacement to quickly address any issues. From broken springs and snapped cables to damaged rollers, hinges, and weather seals—we handle it all. Our emergency repair services are available 24/7, ensuring minimal disruption to your daily routine.</p>                                                                                 
                     </div>
                     <div class="services-link">
                        <a href="<?php echo e(route('serviceAndRepair')); ?>/">Garage Door Repairs</a>
                    </div>
                  </article>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section upper-box">
                  <article>
                     <a href="<?php echo e(route('residential.products', ['openers'])); ?>/"><img src="<?php echo e(asset('front-assets/src/images/garage-door-openers-delaware.webp')); ?>" width="auto" height="auto" class="img-fluid" alt="residential garage door openers delaware" loading="lazy">    </a>              
                     <a href="<?php echo e(route('residential.products', ['openers'])); ?>/"><h4>Garage Door Opener Services</h4></a>
                     <div>
                        <p>For seamless, secure garage access, our technicians specialize in installing, repairing, and servicing garage door openers. From traditional systems to advanced smart technology, we ensure your opener functions reliably and securely, providing maximum convenience and peace of mind.</p>                                                                           
                     </div>
                     <div class="services-link">
                        <a href="<?php echo e(route('residential.products', ['openers'])); ?>/">Garage Door Openers</a>
                    </div>
                  </article>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section">
                  <article>
                     <a href="<?php echo e(route('serviceAndRepair')); ?>/"><img src="<?php echo e(asset('front-assets/src/images/garage-door-maintenance-and-service-delaware.webp')); ?>" width="auto" height="auto" class="img-fluid" alt="delaware garage door maintenance and service" loading="lazy">    </a>               
                     <a href="<?php echo e(route('serviceAndRepair')); ?>/"><h4>Garage Door Maintenance & Service</h4></a>
                     <div>
                        <p>Regular maintenance and professional servicing significantly extend your garage door’s lifespan and reliability. Our comprehensive tune-ups include safety inspections, lubrication, balance adjustments, hardware tightening, and detailed performance checks to proactively prevent common problems and ensure seamless operation.</p>                                                                                   
                     </div>
                     <div class="services-link">
                        <a href="<?php echo e(route('serviceAndRepair')); ?>/">Garage Door Maintenance & Service</a>
                    </div>
                  </article>
               </div>
               
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section">
                  <article>
                      <a href="<?php echo e(route('hollow.metal')); ?>/"><img src="<?php echo e(asset('front-assets/src/images/hollow-metal-doors-delaware.webp')); ?>" width="auto" height="auto" class="img-fluid" alt="delaware hollow metal doors" loading="lazy">         </a>          
                      <a href="<?php echo e(route('hollow.metal')); ?>/"><h4>Hollow Metal Entry Door Systems</h4></a>
                     <div>
                        <p>Secure and strengthen your commercial or industrial property with our durable hollow metal entry door solutions. We offer expert installation, repair, and replacement of high-performance metal doors designed for enhanced security, fire protection, and longevity—ideal for warehouses, retail centers, and office buildings.</p>                                                                               
                     </div>
                     <div class="services-link">
                        <a href="<?php echo e(route('hollow.metal')); ?>/">Hollow Metal Door</a>
                    </div>
                  </article>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section">
                  <article>
                     <a href="<?php echo e(route('loading.dock')); ?>/"><img src="<?php echo e(asset('front-assets/src/images/loading-dock-equipment-services-delaware.webp')); ?>" width="auto" height="auto" class="img-fluid" alt="loading dock equipment installers delaware" loading="lazy"></a>
                                     
                     <a href="<?php echo e(route('loading.dock')); ?>/"><h4>Loading Dock Equipment Services</h4></a>
                     <div>
                        <p>Streamline your business operations with our expert loading dock solutions. We install, maintain, and repair loading dock levelers, seals, shelters, and bumpers to ensure safe, efficient loading and unloading at your facility. Our team keeps your loading areas running smoothly and minimizes downtime.</p>                                                                        
                     </div>
                     <div class="services-link">
                        <a href="<?php echo e(route('loading.dock')); ?>/">Loading Dock Equipment</a>
                    </div>
                  </article>
               </div>
              
            
            </div>
        </div>
     </div>
     <div class="row align-items-center mobile-service-sec">
         <div class="left-side">
            <div class="left-side-tab-items">
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section upper-box">
                  <article>
                      <a href="<?php echo e(route('get.residential.products')); ?>/"><img src="<?php echo e(asset('front-assets/src/images/garage-door-installation-and-replacement-delaware.webp')); ?>" width="auto" height="auto" class="img-fluid" alt="delaware garage door installation and replacement" loading="lazy">   </a>               
                      <a href="<?php echo e(route('get.residential.products')); ?>/"><h4>Garage Door Installation & Replacement</h4></a>
                     <div>
                        <p>Enhance your property's value and curb appeal with our premium residential and commercial garage doors. We offer a wide variety of styles, materials, and customization options, expertly installed by our skilled professionals to match your specific requirements.</p>                                                                                        
                     </div>
                      <div class="services-link">
                        <a href="<?php echo e(route('get.residential.products')); ?>/">Residential Garage Doors</a>
                    </div>
                  </article>
               </div>
               
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section upper-box">
                  <article>
                      <a href="<?php echo e(route('serviceAndRepair')); ?>/"><img src="<?php echo e(asset('front-assets/src/images/garage-door-repairs-and-parts-replacement-delaware.webp')); ?>" width="auto" height="auto" class="img-fluid" alt="delaware garage door repairs and parts replacement" loading="lazy"> </a>             
                      <a href="<?php echo e(route('serviceAndRepair')); ?>/"><h4>Garage Door Repairs & Parts Replacement</h4></a>
                     <div>
                        <p>Facing garage door troubles? Our skilled technicians offer prompt repairs and reliable parts replacement to quickly address any issues. From broken springs and snapped cables to damaged rollers, hinges, and weather seals—we handle it all. Our emergency repair services are available 24/7, ensuring minimal disruption to your daily routine.</p>                                                                                 
                     </div>
                      <div class="services-link">
                        <a href="<?php echo e(route('serviceAndRepair')); ?>/">Garage Door Repairs</a>
                    </div>
                  </article>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section upper-box">
                  <article>
                      <a href="<?php echo e(route('residential.products', ['openers'])); ?>/"><img src="<?php echo e(asset('front-assets/src/images/garage-door-openers-delaware.webp')); ?>" width="auto" height="auto" class="img-fluid" alt="residential garage door openers delaware" loading="lazy">       </a>           
                      <a href="<?php echo e(route('residential.products', ['openers'])); ?>/"><h4>Garage Door Opener Services</h4></a>
                     <div>
                        <p>For seamless, secure garage access, our technicians specialize in installing, repairing, and servicing garage door openers. From traditional systems to advanced smart technology, we ensure your opener functions reliably and securely, providing maximum convenience and peace of mind.</p>                                                                           
                     </div>
                      <div class="services-link">
                        <a href="<?php echo e(route('residential.products', ['openers'])); ?>/">Garage Door Openers</a>
                    </div>
                  </article>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section">
                  <article>
                    <a href="<?php echo e(route('serviceAndRepair')); ?>/"> <img src="<?php echo e(asset('front-assets/src/images/garage-door-maintenance-and-service-delaware.webp')); ?>" width="auto" height="auto" class="img-fluid" alt="delaware garage door maintenance and service" loading="lazy">    </a>               
                     <a href="<?php echo e(route('serviceAndRepair')); ?>/"><h4>Garage Door Maintenance & Service</h4></a>
                     <div>
                        <p>Regular maintenance and professional servicing significantly extend your garage door’s lifespan and reliability. Our comprehensive tune-ups include safety inspections, lubrication, balance adjustments, hardware tightening, and detailed performance checks to proactively prevent common problems and ensure seamless operation.</p>                                                                                   
                     </div>
                      <div class="services-link">
                        <a href="<?php echo e(route('serviceAndRepair')); ?>/">Garage Door Maintenance & Service</a>
                    </div>
                  </article>
               </div>
               
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section">
                  <article>
                     <a href="<?php echo e(route('hollow.metal')); ?>/"><img src="<?php echo e(asset('front-assets/src/images/hollow-metal-doors-delaware.webp')); ?>" width="auto" height="auto" class="img-fluid" alt="delaware hollow metal doors" loading="lazy">    </a>               
                     <a href="<?php echo e(route('hollow.metal')); ?>/"><h4>Hollow Metal Entry Door Systems</h4></a>
                     <div>
                        <p>Secure and strengthen your commercial or industrial property with our durable hollow metal entry door solutions. We offer expert installation, repair, and replacement of high-performance metal doors designed for enhanced security, fire protection, and longevity—ideal for warehouses, retail centers, and office buildings.</p>                                                                               
                     </div>
                      <div class="services-link">
                        <a href="<?php echo e(route('hollow.metal')); ?>/">Hollow Metal Door</a>
                    </div>
                  </article>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 service-box-section">
                  <article>
                     <a href="<?php echo e(route('loading.dock')); ?>/"><img src="<?php echo e(asset('front-assets/src/images/loading-dock-equipment-services-delaware.webp')); ?>" width="auto" height="auto" class="img-fluid" alt="loading dock equipment installers delaware" loading="lazy"></a>
                                     
                    <a href="<?php echo e(route('loading.dock')); ?>/"> <h4>Loading Dock Equipment Services</h4></a>
                     <div>
                        <p>Streamline your business operations with our expert loading dock solutions. We install, maintain, and repair loading dock levelers, seals, shelters, and bumpers to ensure safe, efficient loading and unloading at your facility. Our team keeps your loading areas running smoothly and minimizes downtime.</p>                                                                        
                     </div>
                      <div class="services-link">
                        <a href="<?php echo e(route('loading.dock')); ?>/">Loading Dock Equipment</a>
                    </div>
                  </article>
               </div>
              
            
            </div>
      </div>
   </div>
</section>

<?php endif; ?>
<?php /**PATH /home/customer/www/clarkandsonsdoors.com/public_html/resources/views/frontend/includes/services-sec.blade.php ENDPATH**/ ?>