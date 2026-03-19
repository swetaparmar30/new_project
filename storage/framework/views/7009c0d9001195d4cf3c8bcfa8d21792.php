<?php $__env->startSection('title'); ?> <?php echo e(isset($meta_title) ? $meta_title : ''); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?> <?php echo e(isset($meta_description) ? $meta_description : ''); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('robots'); ?> noindex <?php $__env->stopSection(); ?>

<style>

.other-service-categories h3.other-service-main-sec-heading::before {

    content: '';

    width: 6px;

    height: 100%;

    background-color: #EAAA00;

    display: inline-block;

    position: absolute;

    left: 0;

    top: 0;

    bottom: 0;

}



.other-service-categories h3.other-service-main-sec-heading {

    padding-left: 24px;

    position: relative;

    font-size: 22px;

    color: #1C1C1C;

    line-height: 32px;

    font-weight: 600;

    margin-bottom: 22px;

}

.menu-contain{

     padding-left: 24px;

}



.mrg-li-residential{

    margin-bottom: 10px;

    margin-top: 10px;

    color: black;

}

.custom-menu li{

    margin-bottom:5px;

}



</style>

<?php $__env->startSection('content'); ?>



<?php if($sitemaps): ?>

    <section class="other-service-sec sandk-common-padding sandk-common">

        <div class="container-md">

            <div class="other-service-section">

                <div class="row align-items-center">

                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 other-service-content">

                      <h2>Sitemap</h2>

                      <div class="other-service-item-sec first-sec">

                            <div class="row main-row-other-service">



                                <!-- page main -->

                                <div class="other-service-categories col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                                    <?php if($sitemappage): ?>

                                        <h3 class="other-service-main-sec-heading">Main Pages</h3>

                                    <?php elseif($sitemappost): ?>

                                        <h3 class="other-service-main-sec-heading">Blog</h3>

                                    <?php endif; ?>



                                    <div class="menu-other-service-main-pages-menu-container menu-contain">

                                        <ul class="custom-menu">



                                            <?php

                                                // 🔥 Master Exclude List (Pages + Posts combined)

                                                $excludedUrls = collect($pages_select ?? [])->map(fn($url) => rtrim($url, '/'))->toArray();



                                                // Make sure the sitemap URLs are unique and normalized

                                                $sitemapUrls = collect($pagesSitemapUrls ?? [])->map(fn($url) => rtrim($url, '/'))->unique()->toArray();



                                                // Separate Home page and other pages

                                                $homeUrl = rtrim(url('/'), '/');

                                                $otherPages = array_filter($sitemapUrls, fn($url) => $url !== $homeUrl && !in_array($url, $excludedUrls));



                                                // Sort pages A-Z

                                                sort($otherPages);



                                                // Filter posts and sort A-Z

                                                $postsList = collect($posts ?? [])->filter(function($post) use ($excludedUrls) {

                                                    $postUrl = rtrim(route('front.single_blog_detail', ['slug' => $post->slug]), '/');

                                                    return !in_array($postUrl, $excludedUrls);

                                                })->sortBy('title')->values();

                                            ?>



                                            

                                            <?php if(in_array($homeUrl, $sitemapUrls) && !in_array($homeUrl, $excludedUrls)): ?>

                                                <li>

                                                    <a href="<?php echo e($homeUrl); ?>/">Home</a>

                                                </li>

                                            <?php endif; ?>



                                            

                                            <?php $__currentLoopData = $otherPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <li>

                                                    <a href="<?php echo e($url); ?>/"><?php echo e(ucwords(str_replace(['-', '_'], ' ', basename($url)))); ?></a>

                                                </li>



                                                <?php if(strpos($url, '/blog') !== false): ?>

                                                    

                                                    <?php if($sitemappost && $postsList->count() > 0): ?>

                                                        <div class="sitemap-page-section">

                                                            <ul>

                                                                <?php $__currentLoopData = $postsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                    <?php

                                                                        $postUrl = rtrim(route('front.single_blog_detail', ['slug' => $post->slug]), '/');

                                                                    ?>

                                                                    <li>

                                                                        <a href="<?php echo e($postUrl); ?>/"><?php echo e($post->title); ?></a>

                                                                    </li>

                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                            </ul>

                                                        </div>

                                                    <?php endif; ?>

                                                <?php endif; ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                                        </ul>

                                    </div>

                                </div>

                                <div class="other-service-categories col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                                    <?php if($sitemappage): ?>

                                        <h3 class="other-service-main-sec-heading">Residential</h3>

                                    <?php endif; ?>

                                    <div class="menu-other-service-main-pages-menu-container">

                                        <?php if($sitemappage): ?>

                                            <ul class="custom-menu menu-contain">

                                                

                                                <?php

                                                    $residential_select_pages = array_map(function ($url) {

                                                        return rtrim($url, '/');

                                                    }, $residential_select ?? []);

                                                ?>



                                                

                                                <?php $mainResidentialUrl = rtrim(route('get.residential.products'), '/'); ?>

                                                <?php if(!in_array($mainResidentialUrl, $residential_select_pages)): ?>

                                                    <li><a href="<?php echo e(route('get.residential.products')); ?>/">Residential</a></li>

                                                <?php endif; ?>



                                                

                                                <?php $__currentLoopData = $residentialCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catUrl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <?php if(!in_array(rtrim($catUrl, '/'), $residential_select_pages)): ?>

                                                        <li>

                                                            <a href="<?php echo e($catUrl); ?>"><?php echo e(ucwords(str_replace('-', ' ', basename($catUrl)))); ?></a>

                                                        </li>

                                                    <?php endif; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                                

                                                <?php $__currentLoopData = $residentialProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prodUrl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <?php if(!in_array(rtrim($prodUrl, '/'), $residential_select_pages)): ?>

                                                        <li>

                                                            <a href="<?php echo e($prodUrl); ?>" target="_blank"><?php echo e(ucwords(str_replace('-', ' ', basename($prodUrl)))); ?></a>

                                                        </li>

                                                    <?php endif; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                            </ul>

                                        <?php endif; ?>

                                    </div>

                                </div>





                                <div class="other-service-categories col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                                    <?php if($sitemappage): ?>

                                        <h3 class="other-service-main-sec-heading">Commercial</h3>

                                    <?php endif; ?>



                                    <div class="menu-other-service-main-pages-menu-container">

                                        <?php if($sitemappage): ?>

                                            <ul class="custom-menu menu-contain">

                                                <?php

                                                    // Remove trailing slashes for comparison

                                                    $commercial_select_pages = isset($commercials_select) ? array_map(fn($url) => rtrim($url, '/'), $commercials_select) : [];

                                                    

                                                ?>

                                         

                                                <?php if(isset($commercialUrls) && count($commercialUrls) > 0): ?>

                                                    <?php $__currentLoopData = $commercialUrls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                        <?php

                                                            $trimmedUrl = rtrim($url, '/');

                                                        ?>



                                                        <?php if(!in_array($trimmedUrl, $commercial_select_pages)): ?>

                                                            <li>

                                                                <a href="<?php echo e($url); ?>">

                                                                    <?php echo e(basename($trimmedUrl) == 'commercial' ? 'Commercial' : ucwords(str_replace(['-', '/'], ' ', basename($trimmedUrl)))); ?>


                                                                </a>

                                                            </li>

                                                        <?php endif; ?>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <?php endif; ?>

                                            </ul>

                                        <?php endif; ?>

                                    </div>

                                </div>





                                <!-- categories -->

                              <!--   <div class="other-service-categories col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                                     <h3 class="other-service-main-sec-heading">Categories</h3>

                                   <div class="menu-other-service-main-pages-menu-container">

                                   </div>

                                </div>  -->  





                            </div>      

                        </div>

                    </div>

                </div>

            </div>

        </div>            

    </section>    

<?php endif; ?>

<?php if(count($client_logo) > 0): ?>

        <?php echo $__env->make('frontend.includes.client-logo-sec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/nateb61.sg-host.com/public_html/resources/views/frontend/sitemap_n.blade.php ENDPATH**/ ?>