<?php $__env->startSection('title'); ?> <?php echo e(isset($meta_title) ? $meta_title : ''); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> <?php echo e(isset($meta_description) ? $meta_description : ''); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
@media (max-width: 768px) {
    .about-page-banner-section.sandk-common {
        /* background-image: url('https://nateb19.sg-host.com/uploads/about-slider-Phone.webp') !important; Replace with the static background image for mobile */
        /*background-size: cover; */
/*        background-position: center; */
    }
}
@media (max-width: 575.98px) {
  .mission-and-values-section .inner-box-col article{margin-top: 35px;}
  .mission-and-values-section .inner-row .inner-box-col:first-child article{margin-top:0;}
  .mission-and-values-section .inner-box-col article .ambition-section {display: flex; flex-direction: row;}
  .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-icon{width: 20%;}
  .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-icon img{width: 60px;height: auto;}
  .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-content{padding-left: 15px;width: 80%;}
  .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-content h3{padding: 0; text-align: left;font-size: 22px;margin: 0px 0 10px;line-height: 22px;}
  .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-content p{padding: 0; text-align: left;}
}

@media (min-width: 576px) and (max-width: 767.98px) {
  .mission-and-values-section .inner-box-col article{margin-top: 35px;}
  .mission-and-values-section .inner-row .inner-box-col:first-child article{margin-top:0;}
  .mission-and-values-section .inner-box-col article .ambition-section {display: flex; flex-direction: row;}
  .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-icon{padding-left: 10px;width: 20%;}
  .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-icon img{width: 75px;height: auto;}
  .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-content{width: 80%;}
  .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-content h3{padding: 0; text-align: left;font-size: 22px;margin: 0px 0 10px;line-height: 22px;}
  .mission-and-values-section .inner-box-col article .ambition-section .ambition-step-content p{padding: 0; text-align: left;}
}
</style>
  <?php if(isset($about->title) || isset($about->description) || $about->title != '' || $about->description != ''): ?>
    <?php
        $bgurl = ''; // Initialize the variable
          $mobileBgUrl = '';
    ?>
    <?php if(isset($about->bannerimage) && $about->bannerimage != null): ?>
        <?php
            $img = App\Models\MediaImage::select('name')->where('id', $about->bannerimage)->first();
            // Check if $img is not null before accessing name
            if($img && isset($img->name)) {
                $bgurl = asset('uploads/'.$img->name);
                $mobileBgUrl = asset('uploads/about-slider-Phone.webp');
            }
        ?>
    <?php endif; ?>
    
     <style type="text/css">
    @media (max-width: 575.98px) {
        .about-page-banner-section {
        background-image: url('<?php echo e($mobileBgUrl); ?>') !important;
        }
    }
</style>
        <section class="about-page-banner-section sandk-common" <?php if(isset($bgurl) && $bgurl != ''): ?> style="background-image:url(<?php echo e($bgurl); ?>)" <?php endif; ?>>
            <div class="container-md">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center about-text-banner">
                        <?php if(isset($about->title) && $about->title != ''): ?>
                            <h1 class="about-title"><?php echo e($about->title); ?></h1>
                        <?php endif; ?>
                        <?php if(isset($about->description) && $about->description != ''): ?>
                            <?php echo $about->description; ?>

                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if(isset($about->historytitle) || isset($about->historydescription) || $about->historytitle != '' || $about->historydescription != '' || $about->historysubtitle != '' || $about->historysubdescription != '' ): ?>
    <section class="our-history-section sandk-common sandk-common-padding">
        <div class="container-md">
            <div class="row align-items-center">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 left-side">
                    <?php if(isset($about->historytitle) && $about->historytitle != ''): ?>
                        <h2 class="about-history-h2 main_about_title"><?php echo $about->historytitle; ?></h2>
                    <?php endif; ?>
                    <?php if(isset($about->historysubtitle) && $about->historysubtitle != ''): ?>
                        <h3><?php echo $about->historysubtitle; ?></h3>
                    <?php endif; ?>

                    <?php if(isset($about->historyimage) && $about->historyimage != null): ?>
                        <?php
                        $img = App\Models\MediaImage::select('name')->where('id', $about->historyimage)->first();
                        ?>
                        <?php if(isset($img->name) && $img->name != null): ?>
                        <img src="<?php echo e(asset('uploads/'.$img->name)); ?>" alt="<?php echo e(isset($about->historytitle) ? $about->historytitle : ''); ?>" class="img-fluid mobile-img" width="auto" height="auto" alt="" loading="lazy">
                        <?php endif; ?>
                    <?php else: ?>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/history-about.png')); ?>" class="img-fluid mobile-img" width="auto" height="auto" alt="" loading="lazy">
                    <?php endif; ?>

                    <?php if(isset($about->historydescription) && $about->historydescription != ''): ?>
                    
                        <?php
                            $slug = request()->segment(count(request()->segments()));
                            $aboutyearDesc = $about->historydescription;
                            if ($slug === 'about') 
                            {
                                $find = 'garage and door company in Delaware';
                                $replace = '<a class="in-link" href="https://clarkandsonsdoors.com/">garage door company in Delaware</a>';
                                $aboutyearDesc = str_replace($find, $replace, $aboutyearDesc);
                            }
                        ?>

                        <?php if(!empty($aboutyearDesc)): ?>
                            <?php echo $aboutyearDesc; ?>

                        <?php endif; ?>

                    <?php endif; ?>

                    <?php if(isset($about->historybuttonurl) && $about->historybuttonurl != '' && $about->historybuttonurl != '#'): ?>
                        <a href="#" class="common-btn" data-bs-target="#getafreequote" data-bs-toggle="modal">GET A FREE QUOTE</a>
                    <?php endif; ?>
                </div>

                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 right-side">
                    <?php if(isset($img)): ?>
                        <img src="<?php echo e(asset('uploads/'.$img->name)); ?>" alt="<?php echo e(isset($about->historytitle) ? $about->historytitle : ''); ?>" class="img-fluid desktop-image" width="auto" height="auto" alt="" loading="lazy">
                    <?php else: ?>
                        <img src="<?php echo e(asset('front-assets/src/images/residential-images/history-about.png')); ?>" class="img-fluid desktop-image" width="auto" height="auto" alt="" loading="lazy">
                    <?php endif; ?>
                </div>

            </div>
        </div>

    </section>
    <?php endif; ?>


   <section class="our-history-section-coontent sandk-common sandk-common-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="ab container">
                    <h2 class="about-history-h2">Our History</h2>
                    <!-- <p>Incorporated in Quincy, Illinois, on Tuesday, October 17th, 1944, Raynor is the oldest door company in the industry. We take pride in our long history of quality products, continually building upon it to offer the exceptional line of residential Premium Garage Doors available today.</p> -->
                    </div>

                    <article class="desktop">
                        <div class="inner-history-section">
                            <div class="half-section">
                                <div class="history-1980 history-year">
                                    <ul>
                                        <li>After 12 years, Paul Clark Sr. dissolved the partnership with Zgoba and rebranded to form Clark & Sons, Inc out of Newport, DE. With two of the four sons joining the company; Paul Clark Jr. joined the company in 1972.</li>
                                    </ul>
                                    <h6>1963</h6>
                                </div>
                                <div class="history-2013 history-year">
                                    <ul>
                                        <li>In 1976 the third son, Wayne Clark joined the company and Paul Sr. opened a second location in Georgetown, DE managed by his brother-in-law, Graham Bloxom Sr.</li>
                                    </ul>
                                    
                                    <h6>1973</h6>
                                </div>
                                <div class="history-2016 history-year">
                                    <ul>
                                        <li>By the early 80's Clark and Sons, Inc. had already been awarded many honors; from sales achievements to million-dollar club awards, and the first ever two-million-dollar club award from Raynor.</li>
                                        <li>In 1981 the third location was opened in Salisbury, MD where Cliff Clark managed this location. </li>
                                    </ul>
                                    
                                    <h6>1980</h6>
                                </div>
                                <div class="history-2021 history-year">
                                    <ul>
                                        <li>In 1995 Paul opened his fourth location in Dover, De managed by his longtime employee Gerald 'Corky' Funk.</li>
                                    </ul>
                                    <h6>1995</h6>
                                </div>
                                <div class="history-2005 history-year">
                                    <ul>
                                        <li>Upon Paul's retirement in 2000, he enjoyed a few great years before his untimely death in 2004.</li>
                                    </ul>
                                    <h6>2005</h6>
                                </div>
                                <div class="history-2020 history-year">
                                    <ul>
                                        <li>Cliff Clark passed away in 2006.</li>
                                    </ul>
                                    <h6>2020</h6>
                                </div>
                            </div>
                            <div class="half-section next-section">
                                <div class="history-2010 history-year">
                                    <h6>1972</h6>
                                    <ul>
                                        <li>Paul Clark Sr. and Lou Zgoba formed Clark & Zgoba, buying Raynor Garage Doors in Hammonton, NJ.</li>
                                    </ul>
                                    
                                </div>                        
                                <div class="history-2014 history-year">
                                    <h6>1976</h6>
                                    <ul>
                                        <li>Cliff Clark in 1973 along with other loyal employees, the business was thriving.</li>
                                    </ul>
                                </div>

                                <div class="history-2017 history-year">
                                    <h6>1981</h6>
                                    <ul>
                                        <li>In 1980, Paul's last son, Jim Clark joined the company.</li>
                                        
                                    </ul>
                                </div>
                                <div class="history-2000 history-year">
                                    <h6>2000</h6>
                                    <ul>
                                        <li>Mrs. Clark passed away in 2005.</li>
                                        <li></li>
                                        <li>Tragedy struck again in 2020 when Paul Clark Jr. passed from a COVID-related illness. Wayne, Jim, and loyal employees continue to run the company with the same dignity and pride as they carried through the years. Clark and Sons, Inc. still thrives today and operates the largest and oldest privately owned door company in Delaware.</li>
                                    </ul>
                                </div>
                                <div class="history-2006 history-year">
                                    <h6>2006</h6>
                                    <ul>
                                        <li>The Clark family suffered years of tragedy, but Paul Jr., Wayne, Jim, along with countless loyal employees always continued to do what needed to be done; providing the best customer service to their community. </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>

                    <div class="mobile container">
                        <div class="mobile-inner">
                            <h6>1963</h6>
                            <ul>
                                <li>Paul Clark Sr. and Lou Zgoba formed Clark & Zgoba, buying Raynor Garage Doors in Hammonton, NJ.</li>
                         
                            </ul>
                        </div>
                        <div class="mobile-inner">
                            <h6>1972</h6>
                            <ul>
                                <li>After 12 years, Paul Clark Sr. dissolved the partnership with Zgoba and rebranded to form Clark & Sons, Inc out of Newport, DE. With two of the four sons joining the company; Paul Clark Jr. joined the company in 1972.</li>
                            </ul>
                        </div>

                        <div class="mobile-inner">
                            <h6>1973</h6>
                            <ul>
                                <li>Cliff Clark in 1973 along with other loyal employees, the business was thriving.</li>
                            </ul>
                        </div>

                        <div class="mobile-inner">
                            <h6>1976</h6>
                            <ul>
                                <li>In 1976 the third son, Wayne Clark joined the company and Paul Sr. opened a second location in Georgetown, DE managed by his brother-in-law, Graham Bloxom Sr.</li>
                            </ul>
                        </div>

                        <div class="mobile-inner">
                            <h6>1980</h6>
                            <ul>
                                <li>In 1980, Paul's last son, Jim Clark joined the company.</li>
                            </ul>
                        </div>

                        <div class="mobile-inner">
                            <h6>1981</h6>
                            <ul>
                                <li>In 1981 the third location was opened in Salisbury, MD where Cliff Clark managed this location.</li>
                                <li>By the early 80's Clark and Sons, Inc. had already been awarded many honors; from sales achievements to million-dollar club awards, and the first ever two-million-dollar club award from Raynor.</li>
                            </ul>
                        </div>

                        <div class="mobile-inner">
                            <h6>1995</h6>
                            <ul>
                                <li>In 1995 Paul opened his fourth location in Dover, De managed by his longtime employee Gerald 'Corky' Funk.</li>
                            </ul>
                        </div>
                        <div class="mobile-inner">
                            <h6>2000</h6>
                            <ul>
                                <li>Upon Paul's retirement in 2000, he enjoyed a few great years before his untimely death in 2004.</li>
                            </ul>
                        </div>
                        <div class="mobile-inner">
                            <h6>2005</h6>
                            <ul>
                                <li>Mrs. Clark passed away in 2005.</li>
                            </ul>
                        </div>
                         <div class="mobile-inner">
                            <h6>2006</h6>
                            <ul>
                                <li>Cliff Clark passed away in 2006.</li>
                            </ul>
                        </div>
                        <div class="mobile-inner">
                            <h6>2020</h6>
                            <ul>
                                <li>The Clark family suffered years of tragedy, but Paul Jr., Wayne, Jim, along with countless loyal employees always continued to do what needed to be done; providing the best customer service to their community.</li>
                                <li>Tragedy struck again in 2020 when Paul Clark Jr. passed from a COVID-related illness. Wayne, Jim, and loyal employees continue to run the company with the same dignity and pride as they carried through the years. Clark and Sons, Inc. still thrives today and operates the largest and oldest privately owned door company in Delaware.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> 

<section class="clark-history-section sandk-common sandk-common-padding" style="display: none;">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h2 class="about-history-h2">History</h2>
            <article class="desktop">
                <div class="row inner-row g-4">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 custom-col-4 history-content">
                        <div class="year-section">
                           <h3>1963</h3>
                           <p>Paul Clark Sr. and Lou Zgoba formed Clark & Zgoba, buying Raynor Garage Doors in Hammonton, NJ.</p>
                        </div>
                   </div>
                   <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 custom-col-4 history-content">
                        <div class="year-section">
                           <h3>1972</h3>
                           <p>After 12 years, Paul Clark Sr. dissolved the partnership with Zgoba and rebranded to form Clark & Sons, Inc out of Newport, DE. With two of the four sons joining the company; Paul Clark Jr. joined the company in 1972.</p>
                        </div>
                   </div>
                   <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 custom-col-4 history-content">
                        <div class="year-section">
                           <h3>1973</h3>
                           <p>Cliff Clark in 1973 along with other loyal employees, the business was thriving.</p>
                        </div>
                   </div>
                   <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 custom-col-4 history-content">
                        <div class="year-section">
                          <h3>1976</h3>
                          <p>In 1976 the third son, Wayne Clark joined the company and Paul Sr. opened a second location in Georgetown, DE managed by his brother-in-law, Graham Bloxom Sr.</p>
                        </div>
                   </div>
                   <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 custom-col-4 history-content">
                        <div class="year-section">
                           <h3>1980</h3>
                            <p>In 1980, Paul's last son, Jim Clark joined the company.</p>
                        </div>
                   </div>
                   <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 custom-col-4 history-content">
                        <div class="year-section">
                           <h3>1981</h3>
                             <p>In 1981 the third location was opened in Salisbury, MD where Cliff Clark managed this location. By the early 80's Clark and Sons, Inc. had already been awarded many honors; from sales achievements to million-dollar club awards, and the first ever two-million-dollar club award from Raynor.</p>
                        </div>
                   </div>
                   <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 custom-col-4 history-content">
                        <div class="year-section">
                           <h3>1995</h3>
                            <p>In 1995 Paul opened his fourth location in Dover, De managed by his longtime employee Gerald 'Corky' Funk.</p>
                        </div>
                   </div>
                   <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 custom-col-4 history-content">
                      <div class="year-section">
                          <h3>2000</h3>
                          <p>Upon Paul's retirement in 2000, he enjoyed a few great years before his untimely death in 2004.</p>
                      </div>
                  </div>
                  <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 custom-col-4 history-content">
                      <div class="year-section">
                          <h3>2005</h3>
                          <p>Mrs. Clark passed away in 2005.</p>
                      </div>
                  </div>

                  <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 custom-col-4 history-content">
                      <div class="year-section">
                          <h3>2006</h3>
                          <p>Cliff Clark passed away in 2006.</p>
                      </div>
                  </div>
                   <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 custom-col-8 history-content">
                      <div class="year-section">
                          <h3>2020</h3>
                          <p>The Clark family suffered years of tragedy, but Paul Jr., Wayne, Jim, along with countless loyal employees always continued to do what needed to be done; providing the best customer service to their community. Tragedy struck again in 2020 when Paul Clark Jr. passed from a COVID-related illness. Wayne, Jim, and loyal employees continue to run the company with the same dignity and pride as they carried through the years. Clark and Sons, Inc. still thrives today and operates the largest and oldest privately owned door company in Delaware.</p>
                      </div>
                  </div>

                </div>
            </article>
        </div>
    </div>
</div>
</section>
    <?php if(isset($about->missiontitle) || isset($about->missiondescription) || $about->missiontitle != '' || $about->missiondescription != '' ): ?>
    <section class="mission-and-values-section sandk-common sandk-common-padding">
        <div class="container-md">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <?php if(isset($about->missiontitle) && $about->missiontitle != ''): ?>
                        <h2 class="about-history-h2"><?php echo e($about->missiontitle); ?></h2>
                    <?php endif; ?>
                    <!-- <?php if(isset($about->missiondescription) && $about->missiondescription != ''): ?>
                        <?php echo $about->missiondescription; ?>

                    <?php endif; ?> -->

                    <!-- <a href="" class="common-btn">GET STARTED</a> -->
                </div>
                </div>

                <div class="row inner-row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 inner-box-col">
                        <article>
                            <div class="ambition-section">
                                <div class="ambition-step-icon">

                                    <?php if(isset($mission_vlues->mv_icon_1) && $mission_vlues->mv_icon_1 != null): ?>
                                        <?php
                                        $img = App\Models\MediaImage::select('name')->where('id', $mission_vlues->mv_icon_1)->first();
                                        ?>
                                        <?php if(isset($img->name) && $img->name != null): ?>
                                        <img src="<?php echo e(asset('uploads/'.$img->name)); ?>" alt="mission" width="120" height="120">
                                        <?php endif; ?>
                                    <?php else: ?>
                                    <img src="/uploads/66a0af3a05c4f.webp" alt="mission" width="120" height="120">
                                    <?php endif; ?>
                                </div>
                            <div class="ambition-step-content">
                                <h3><?php echo e(isset($mission_vlues->mv_title_1) ? $mission_vlues->mv_title_1 : ''); ?></h3>
                                <p><?php echo e(isset($mission_vlues->mv_description_1) ? $mission_vlues->mv_description_1 : ''); ?></p>
                            </div>
                        </div>
                        </article>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 inner-box-col">
                        <article>
                            <div class="ambition-section">
                                <div class="ambition-step-icon">
                                    <?php if(isset($mission_vlues->mv_icon_2) && $mission_vlues->mv_icon_2 != null): ?>
                                        <?php
                                        $img = App\Models\MediaImage::select('name')->where('id', $mission_vlues->mv_icon_2)->first();
                                        ?>
                                        <?php if(isset($img->name) && $img->name != null): ?>
                                        <img src="<?php echo e(asset('uploads/'.$img->name)); ?>" alt="mission" width="120" height="120">
                                        <?php endif; ?>
                                    <?php else: ?>
                                    <img src="/uploads/66a0af3a05c4f.webp" alt="mission" width="120" height="120">
                                    <?php endif; ?>
                                </div>
                                <div class="ambition-step-content">
                                    <h3><?php echo e(isset($mission_vlues->mv_title_2) ? $mission_vlues->mv_title_2 : ''); ?></h3>
                                    <p><?php echo e(isset($mission_vlues->mv_description_2) ? $mission_vlues->mv_description_2 : ''); ?></p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 inner-box-col">
                        <article>
                            <div class="ambition-section">
                                <div class="ambition-step-icon">
                                    <?php if(isset($mission_vlues->mv_icon_3) && $mission_vlues->mv_icon_3 != null): ?>
                                        <?php
                                        $img = App\Models\MediaImage::select('name')->where('id', $mission_vlues->mv_icon_3)->first();
                                        ?>
                                        <?php if(isset($img->name) && $img->name != null): ?>
                                        <img src="<?php echo e(asset('uploads/'.$img->name)); ?>" alt="mission" width="120" height="120">
                                        <?php endif; ?>
                                    <?php else: ?>
                                    <img src="/uploads/66a0af3a05c4f.webp" alt="mission" width="120" height="120">
                                    <?php endif; ?>
                                </div>
                            <div class="ambition-step-content">
                                <h3><?php echo e(isset($mission_vlues->mv_title_3) ? $mission_vlues->mv_title_3 : ''); ?></h3>
                                <p><?php echo e(isset($mission_vlues->mv_description_3) ? $mission_vlues->mv_description_3 : ''); ?></p>
                           </div>
                        </div>
                        </article>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 inner-box-col">
                        <article>
                            <div class="ambition-section">
                                <div class="ambition-step-icon">
                                <?php if(isset($mission_vlues->mv_icon_4) && $mission_vlues->mv_icon_4 != null): ?>
                                        <?php
                                        $img = App\Models\MediaImage::select('name')->where('id', $mission_vlues->mv_icon_4)->first();
                                        ?>
                                        <?php if(isset($img->name) && $img->name != null): ?>
                                        <img src="<?php echo e(asset('uploads/'.$img->name)); ?>" alt="mission" width="120" height="120">
                                        <?php endif; ?>
                                    <?php else: ?>
                                    <img src="/uploads/66a0af3a05c4f.webp" alt="mission" width="120" height="120">
                                    <?php endif; ?>
                            </div>
                            <div class="ambition-step-content">
                                <h3><?php echo e(isset($mission_vlues->mv_title_4) ? $mission_vlues->mv_title_4 : ''); ?></h3>
                                <p><?php echo e(isset($mission_vlues->mv_description_4) ? $mission_vlues->mv_description_4 : ''); ?></p>
                           </div>
                        </div>
                        </article>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 inner-box-col">
                        <article>
                            <div class="ambition-section">
                                <div class="ambition-step-icon">
                                       <?php if(isset($mission_vlues->mv_icon_5) && $mission_vlues->mv_icon_5 != null): ?>
                                        <?php
                                        $img = App\Models\MediaImage::select('name')->where('id', $mission_vlues->mv_icon_5)->first();
                                        ?>
                                        <?php if(isset($img->name) && $img->name != null): ?>
                                        <img src="<?php echo e(asset('uploads/'.$img->name)); ?>" alt="mission" width="120" height="120">
                                        <?php endif; ?>
                                    <?php else: ?>
                                    <img src="/uploads/66a0af3a05c4f.webp" alt="mission" width="120" height="120">
                                    <?php endif; ?>
                                 </div>
                            <div class="ambition-step-content">
                                <h3><?php echo e(isset($mission_vlues->mv_title_5) ? $mission_vlues->mv_title_5 : ''); ?></h3>
                                <p><?php echo e(isset($mission_vlues->mv_description_5) ? $mission_vlues->mv_description_5 : ''); ?></p>
                           </div>
                        </div>
                        </article>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 inner-box-col">
                        <article>
                            <div class="ambition-section">
                                <div class="ambition-step-icon">
                                <?php if(isset($mission_vlues->mv_icon_6) && $mission_vlues->mv_icon_6 != null): ?>
                                        <?php
                                        $img = App\Models\MediaImage::select('name')->where('id', $mission_vlues->mv_icon_6)->first();
                                        ?>
                                        <?php if(isset($img->name) && $img->name != null): ?>
                                        <img src="<?php echo e(asset('uploads/'.$img->name)); ?>" alt="mission" width="120" height="120">
                                        <?php endif; ?>
                                    <?php else: ?>
                                    <img src="/uploads/66a0af3a05c4f.webp" alt="mission" width="120" height="120">
                                    <?php endif; ?>
                            </div>
                            <div class="ambition-step-content">
                                <h3><?php echo e(isset($mission_vlues->mv_title_6) ? $mission_vlues->mv_title_6 : ''); ?></h3>
                                <p><?php echo e(isset($mission_vlues->mv_description_6) ? $mission_vlues->mv_description_6 : ''); ?></p>
                            </div>
                         </div>
                        </article>
                    </div>
                </div>
            
        </div>
    </section>
    <?php endif; ?>

    <!-- <?php if(isset($about->teamtitle) || isset($about->teamdescription) || $about->teamtitle != '' || $about->teamdescription != '' ): ?> -->
    <!-- <section class="get-free-quote-sec sandk-common our-team-and-culture-section">
        <?php if(isset($about->teambackground) && $about->teambackground != null): ?>
            <?php
            $img = App\Models\MediaImage::select('name')->where('id', $about->teambackground)->first();
            ?>
            <img src="<?php echo e(asset('uploads/'.$img->name)); ?>" class="img-fluid" alt="<?php echo e(isset($about->teamtitle) ? $about->teamtitle : ''); ?>">
        <?php else: ?>
            <img src="<?php echo e(asset('front-assets/src/images/residential-images/our-team-and-culture.png')); ?>" class="background-image" width="100%" height="auto" alt="" loading="lazy">
        <?php endif; ?>
        </div>
        
        <div class="our-team-and-culture-sec">
            <div class="container-md">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php if(isset($about->teamtitle) && $about->teamtitle != ''): ?>
                            <h2><?php echo e($about->teamtitle); ?></h2>
                        <?php endif; ?>
                        <?php if(isset($about->teamdescription) && $about->teamdescription != ''): ?>
                            <?php echo $about->teamdescription; ?>

                        <?php endif; ?>
                        <a class="common-btn first-btn"> GET a FREE QUOTE</a>
                        <a class="common-btn second-btn" href="tel:6623236381"><img src="<?php echo e(asset('front-assets/src/images/white-yellow-call-icon.webp')); ?>" class="hover-icon" alt=""><img src="<?php echo e(asset('front-assets/src/images/blue-white-call-icon.webp')); ?>" class="normal-icon" alt="">(662)323-6381</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <?php endif; ?> -->

    

    <?php echo $__env->make('frontend.includes.areas-sec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.includes.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.includes.quote-sec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if(count($client_logo) > 0): ?>
        <?php echo $__env->make('frontend.includes.client-logo-sec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/clarkandsonsdoors.com/public_html/resources/views/frontend/aboutus/index.blade.php ENDPATH**/ ?>