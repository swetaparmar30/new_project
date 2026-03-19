<?php $__env->startSection('title'); ?> <?php echo e(isset($meta_title) ? $meta_title : ''); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> <?php echo e(isset($meta_description) ? $meta_description : ''); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('robots'); ?> noindex <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="faq-sec sandk-common-padding sandk-common sitemap-page-section">
        <div class="container-md">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="sitemap">Sitemap</h1>
                </div>
            </div>
        </div>

    <section>  
        <div class="container-md">
                <div class="row"> 
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul>
                            <li>
                                <a href="<?php echo e(route('home')); ?>/">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('about.us')); ?>/">About</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('contact')); ?>/">Contact</a>
                            </li>

                            <?php
                                $excludedSlugs = ['sitemap', 'newport-garage-doors', 'dover-garage-doors', 'georgetown-garage-doors','salisbury-garage-doors'];
                            ?>
                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!in_array($page->slug, $excludedSlugs)): ?>
                                    <li>
                                        <a href="<?php echo e(route('frontend.page.index',['slug' => $page->slug])); ?>/"><?php echo e($page->title); ?></a>
                                    </li>
                                    <?php if(isset($page->id) && $page->id == 1): ?>

                                        <?php if(isset($posts) && count($posts) > 0): ?>
                                            <ul>
                                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a href="<?php echo e(route('front.single_blog_detail',['slug' => $post->slug])); ?>/"><?php echo e($post->title); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- for location -->
                            <li>
                                <a href="<?php echo e(url('locations/newport-garage-doors')); ?>/">Newport Garage Doors</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('locations/dover-garage-doors')); ?>/">Dover Garage Doors</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('locations/georgetown-garage-doors')); ?>/">Georgetown Garage Doors</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('locations/salisbury-garage-doors')); ?>/">Salisbury Garage Doors</a>
                            </li>
                            <!-- end location -->

                           
                            <li>
                                <a href="<?php echo e(route('privacypolicy')); ?>/">Privacy Policy</a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('get.residential.products')); ?>">Residential</a>
                            </li>
                            <!--<?php if(count($residential_menus) > 0): ?>
                                <ul>
                                <?php $__currentLoopData = $residential_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reskey => $resmenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <?php if(count($resmenu) > 0): ?>
                                        <ul>
                                        <?php $__currentLoopData = $resmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkey=>$fval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <li><a href="<?php echo e(route('residential.products', [$fval['slug']])); ?>"><?php echo e($fval['title']); ?></a></li>
                                            <?php
                                            $dataproduct = App\Models\Apiproductdata::select('maincat','product_json')->where('menutype','residential')->where('category',$fval['slug'])->get()->toArray();
                                     
                                            ?> 
                                            <?php if($dataproduct > 0): ?>  
                                            
                                                <ul>
                                                <?php $__currentLoopData = $dataproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dkey=>$vls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php
                                                        $arp = json_decode($vls['product_json'],true);
                                                        if(isset($vls['maincat']) && $vls['maincat'] != ''){
                                                            $productLink = route('residential.products', $vls['maincat'].'/'.$arp['product_slug']);
                                                            $isExternal = false;
                                                        }
                                                        else{
                                                            $productLink = route('residential.products', $arp['product_slug']);
                                                            $isExternal = false;
                                                        }
                                                    ?>

                                                    <?php if($arp): ?>
                                                        <?php if(isset($arp['product_slug'])): ?>
                                                            <li><a href="<?php echo e($productLink); ?>"><?php echo e($arp['list_title']); ?></a></li>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>-->


                            <!-- <?php if(count($residential_menus) > 0): ?>
                                <ul>
                                    <?php $__currentLoopData = $residential_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reskey => $resmenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(count($resmenu) > 0): ?>
                                            <?php $__currentLoopData = $resmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkey => $fval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a href="<?php echo e(route('residential.products', [$fval['slug']])); ?>/">
                                                        <?php echo e($fval['title']); ?>

                                                    </a>
                                                </li>
                                                <?php if(count($fval['subcategories']) > 0): ?>
                                                    <?php $__currentLoopData = $fval['subcategories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkey1 => $fval1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a href="<?php echo e(route('residential.products', [$fval1['slug']])); ?>/">
                                                            <?php echo e($fval1['title']); ?>

                                                        </a>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $dataproduct = App\Models\Apiproductdata::select('subcategory','maincat', 'product_json')
                                            ->where('menutype', 'residential')
                                            ->get()
                                            ->unique('product_json')
                                            ->values()
                                            ->toArray();
                                    ?> 

                                    <?php if(count($dataproduct) > 0): ?>
                                        <?php $__currentLoopData = $dataproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkey => $dval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php

                                            $products_j = json_decode($dval['product_json'],true);

                                            if(isset($products_j['direct_file']) && $products_j['direct_file'] != null){
                                                $productLink = $products_j['direct_file'];
                                                $isExternal = true;
                                            }elseif($dval['subcategory'] == 'smart-garage-accessories'){
                                                $productLink = route('residential.products', 'openers/'.$products_j['product_slug']);
                                                $isExternal = false;
                                            } elseif(isset($dval['maincat']) && $dval['maincat'] != ''){
                                                $productLink = route('residential.products', $dval['maincat'].'/'.$products_j['product_slug']);
                                                $isExternal = false;
                                            } else {
                                                $productLink = route('residential.products', $products_j['product_slug']);
                                                $isExternal = false;
                                            }
                                        ?>
                                        <li>
                                            <a href="<?php echo e($productLink); ?>/" <?php if($isExternal): ?> target="_blank" <?php endif; ?>>
                                                <?php echo e(strip_tags($products_j['product_title'])); ?>

                                            </a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>   
                                </ul>
                            <?php endif; ?> -->

                            <?php if(count($residential_menus) > 0): ?>
                                <ul>
                                    <?php $__currentLoopData = $residential_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reskey => $resmenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(count($resmenu) > 0): ?>
                                            <?php $__currentLoopData = $resmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkey => $fval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a href="<?php echo e(route('residential.products', [$fval['slug']])); ?>/">
                                                        <?php echo e($fval['title']); ?>

                                                    </a>
                                                </li>
                                                <?php if(count($fval['subcategories']) > 0): ?>
                                                    <?php $__currentLoopData = $fval['subcategories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkey1 => $fval1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a href="<?php echo e(route('residential.products', [$fval1['slug']])); ?>/">
                                                            <?php echo e($fval1['title']); ?>

                                                        </a>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $dataproduct = App\Models\Apiproductdata::select('subcategory','maincat', 'product_json')
                                            ->where('menutype', 'residential')
                                            ->get()
                                            ->unique('product_json')
                                            ->values()
                                            ->toArray();
                                    ?> 

                                    <?php if(count($dataproduct) > 0): ?>
                                        <?php $__currentLoopData = $dataproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkey => $dval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php

                                            $products_j = json_decode($dval['product_json'],true);

                                            if(isset($products_j['direct_file']) && $products_j['direct_file'] != null){
                                                $productLink = $products_j['direct_file'];
                                                $isExternal = true;
                                            }elseif($dval['subcategory'] == 'smart-garage-accessories'){
                                                $productLink = route('residential.products', 'openers/'.$products_j['product_slug']);
                                                $isExternal = false;
                                            } elseif(isset($dval['maincat']) && $dval['maincat'] != ''){
                                                $productLink = route('residential.products', $dval['maincat'].'/'.$products_j['product_slug']);
                                                $isExternal = false;
                                            } else {
                                                $productLink = route('residential.products', $products_j['product_slug']);
                                                $isExternal = false;
                                            }
                                        ?>
                                        <li>
                                            <a href="<?php echo e($productLink); ?>/" <?php if($isExternal): ?> target="_blank" <?php endif; ?>>
                                                <?php echo e(strip_tags($products_j['product_title'])); ?>

                                            </a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>

                                          
                                </ul>
                            <?php endif; ?>
                            <br>


                           <!-- new service area -->
                            <li>
                                <a href="<?php echo e(route('serviceAndRepair')); ?>/">Service and Repair</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('serviceareas')); ?>/">Service Areas</a>
                            </li>
                           
                            <li><a href="<?php echo e(route('bethany.garagedoor')); ?>/">Bethany Beach Garage Doors</a></li>
                            <li><a href="<?php echo e(route('berlin.garagedoor')); ?>/">Berlin Garage Doors</a></li>
                            <li><a href="<?php echo e(route('camdenwyoming.garagedoor')); ?>/">Camden Wyoming Garage Doors</a></li>
                            <li><a href="<?php echo e(route('dewey.garagedoor')); ?>/">Dewey Beach Garage Doors</a></li>
                            <li><a href="<?php echo e(route('fenwickIsland.garagedoor')); ?>/">Fenwick Island Garage Doors</a></li>
                            <li><a href="<?php echo e(route('frederica.garagedoor')); ?>/">Frederica Garage Doors</a></li>
                            <li><a href="<?php echo e(route('lewes.garagedoor')); ?>/">Lewes Garage Doors</a></li>
                            <li><a href="<?php echo e(route('magnolia.garagedoor')); ?>/">Magnolia Garage Doors</a></li>
                            <li><a href="<?php echo e(route('middletown.garagedoor')); ?>/">Middletown Garage Doors</a></li>
                            <li><a href="<?php echo e(route('newark.garagedoor')); ?>/">Newark Garage Doors</a></li>
                            <li><a href="<?php echo e(route('oceanCity.garagedoor')); ?>/">Ocean City Garage Doors</a></li>
                            <li><a href="<?php echo e(route('oceanPines.garagedoor')); ?>/">Ocean Pines Garage Doors</a></li>
                            <li><a href="<?php echo e(route('odessa.garagedoor')); ?>/">Odessa Garage Doors</a></li>
                            <li><a href="<?php echo e(route('rehobothBeach.garagedoor')); ?>/">Rehoboth Beach Garage Doors</a></li>
                            <li><a href="<?php echo e(route('smyrna.garagedoor')); ?>/">Smyrna Garage Doors</a></li>
                            <li><a href="<?php echo e(route('townsend.garagedoor')); ?>/">Townsend Garage Doors</a></li>

                            <br>
                            <!-- end -->


                            <li>
                                <a href="<?php echo e(route('get.commercial.products')); ?>/">Commercial</a>
                            </li>

                            <!-- <?php if(count($commercial_menus) > 0): ?>
                                <ul>
                                    <?php $__currentLoopData = $commercial_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reskey => $resmenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(count($resmenu) > 0): ?>
                                            <?php $__currentLoopData = $resmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkey => $fval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a href="<?php echo e(route('commercial.products', [$fval['slug']])); ?>/">
                                                        <?php echo e($fval['title']); ?>

                                                    </a>
                                                </li>
                                                <?php if(count($fval['subcategories']) > 0): ?>
                                                    <?php $__currentLoopData = $fval['subcategories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkey1 => $fval1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a href="<?php echo e(route('commercial.products', [$fval1['slug']])); ?>/">
                                                            <?php echo e($fval1['title']); ?>

                                                        </a>
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $dataproduct = App\Models\Apiproductdata::select('subcategory','maincat', 'product_json')
                                            ->where('menutype', 'commercial')
                                            ->get()
                                            ->unique('product_json')
                                            ->values()
                                            ->toArray();
                                    ?> 

                                    <?php if(count($dataproduct) > 0): ?>
                                        <?php $__currentLoopData = $dataproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkey => $dval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php

                                            $products_j = json_decode($dval['product_json'],true);

                                            if(isset($products_j['direct_file']) && $products_j['direct_file'] != null){
                                                $productLink = $products_j['direct_file'];
                                                $isExternal = true;
                                            }elseif($dval['subcategory'] == 'smart-garage-accessories'){
                                                $productLink = route('commercial.products', 'openers/'.$products_j['product_slug']);
                                                $isExternal = false;
                                            } elseif(isset($dval['maincat']) && $dval['maincat'] != ''){
                                                $productLink = route('commercial.products', $dval['maincat'].'/'.$products_j['product_slug']);
                                                $isExternal = false;
                                            } else {
                                                $productLink = route('commercial.products', $products_j['product_slug']);
                                                $isExternal = false;
                                            }
                                        ?>
                                        <li>
                                            <a href="<?php echo e($productLink); ?>/" <?php if($isExternal): ?> target="_blank" <?php endif; ?>>
                                                <?php echo e(strip_tags($products_j['product_title'])); ?>

                                            </a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>                                          
                                </ul>
                            <?php endif; ?> -->

                            <!-- ronak code -->
                            <?php
                                $datacategorys = App\Models\Apicategorydata::where('menutype', 'commercial')
                                    ->get()
                                    ->unique('category')
                                    ->values()
                                    ->toArray();
                            ?> 
                            <?php if(count($datacategorys) > 0): ?>
                                <ul>
                                    <?php $__currentLoopData = $datacategorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cates => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $category_json = json_decode($cate['category_json'],true);
                                    ?>
                                        <li>
                                            <a href="<?php echo e(route('commercial.products', [$cate['category']])); ?>/">
                                                <?php echo e($category_json['category']); ?>

                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>

                            <?php
                                $datasubcategorys = App\Models\Apisubcategorydata::where('menutype', 'commercial')
                                    ->whereNotIn('subcategory', ['sectional-thermaseal-doors', 'thermaseal', 'thermaseal-thermal-sectional-insulated-steel-doors', 'extruded-alumaview-aluminum-rail-and-stile-doors', 'alumaview-aluminum-rail-and-stile-doors', 'firehoist-operators', 'energycore', 'rolling-steel-solutions', 'controlhoist-commercial-door-operators', 'steelpro-sectional-ribbed-steel-overhead-doors', 'customized-solutions'])
                                    ->get()
                                    ->unique('subcategory')
                                    ->values()
                                    ->toArray();
                            ?> 

                            <?php if(count($datacategorys) > 0): ?>
                                <ul>
                                    <?php $__currentLoopData = $datasubcategorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcates => $subcate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $category_json_sub = json_decode($subcate['category_json'],true);
                                        ?>
                                        <li>
                                            <a href="<?php echo e(route('commercial.products', [$subcate['subcategory']])); ?>/">
                                                <?php echo e($category_json_sub['title']); ?>

                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>

                         
                            <?php
                                $dataproduct = App\Models\Apiproductdata::select('category', 'subcategory','maincat', 'product_json')
                                    ->where('menutype', 'commercial')->whereNotIn('subcategory', ['steelform-series', 'steelform-sectional-ribbed-steel-overhead-doors'])
                                    ->get()
                                    ->unique('product_json')
                                    ->values()
                                    ->toArray();
                            ?> 
                            
                            <?php if(count($dataproduct) > 0): ?>
                                <ul>
                                    <?php $__currentLoopData = $dataproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fkey => $dval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php

                                        $products_j_data = json_decode($dval['product_json'],true);
                                        if(isset($products_j_data['product_slug']) && $products_j_data['product_slug'] == 'energycore-ec200') {
                                            continue;
                                        }


                                        if(isset($products_j_data['direct_file']) && $products_j_data['direct_file'] != null){
                                            $productLink = $products_j_data['direct_file'];
                                            $isExternal = true;
                                        }elseif($dval['subcategory'] == 'openers'){
                                            $productLink = route('commercial.products', 'openers/'.$products_j_data['product_slug']);
                                            $isExternal = false;
                                        } elseif(isset($dval['maincat']) && $dval['maincat'] != ''){
                                            $productLink = route('commercial.products', $dval['maincat'].'/'.$products_j_data['product_slug']);
                                            $isExternal = false;
                                        } else {
                                            $productLink = route('commercial.products', $dval['category'].'/'.$products_j_data['product_slug']);
                                            $isExternal = false;
                                        }
                                    ?>
                                    <li>
                                        <a href="<?php echo e($productLink); ?>/" <?php if($isExternal): ?> target="_blank" <?php endif; ?>>
                                            <?php echo e(strip_tags($products_j_data['product_title'])); ?>

                                        </a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                            <!-- end -->


                            <li><a href="<?php echo e(url('loading-dock')); ?>/">Loading Docks</a></li>
                            <li><a href="<?php echo e(url('hollow-metal-door')); ?>/">Hollow Metal Doors</a></li>

                           
                        </ul>
                    </div>
                </div>
        </div>
    </section>
</section>

<?php if(count($client_logo) > 0): ?>
        <?php echo $__env->make('frontend.includes.client-logo-sec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/clarkandsonsdoors.com/public_html/resources/views/frontend/sitemap.blade.php ENDPATH**/ ?>