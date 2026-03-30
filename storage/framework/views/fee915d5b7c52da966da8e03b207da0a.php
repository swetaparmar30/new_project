<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
      
        $currentRoute = \Request::route() ? \Request::route()->getName() : null;
        $title = html_entity_decode(trim($__env->yieldContent('title', 'Raynor Doors of Nebraska')));
        if ($currentRoute === 'front.single_blog_detail' && isset($article) && !empty($article->meta_title)) {
            $title = $article->meta_title;
        }
    ?>

    <?php if(Request::is('/') || $currentRoute == 'front.single_blog_detail'): ?>
        <title><?php echo e($title); ?></title>
    <?php else: ?>
        <title><?php echo e($title); ?></title>
    <?php endif; ?>

    <meta name="description" content="<?php echo $__env->yieldContent('description', ' '); ?>" />
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords', ' '); ?>">

    <?php
    $setting = App\Models\Setting::first();
    ?>
    <?php if(isset($setting->site_favicon) && $setting->site_favicon != '' && $setting->site_favicon != null): ?>
        <?php
            $favicon_name = App\Models\MediaImage::where('id', $setting->site_favicon)->first();
            if (isset($favicon_name) && $favicon_name != null) {
                $h_path = asset('uploads/' . $favicon_name->name);
            } else {
                $h_path = asset('front-assets/images/welcome-logo.png');
            }
        ?>
        <link rel="icon" type="image/x-icon" href="<?php echo e($h_path); ?>">
    <?php else: ?>
        <link rel="icon" type="image/x-icon" href="<?php echo e($h_path); ?>">
    <?php endif; ?>
   

    

     <?php if(Request::is('thank-you')): ?>
    <meta name="robots" content="noindex">
    <?php else: ?>
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>

    <meta name="p:domain_verify" content="9ef4218168f9a9549cb13eace74635f6" />
    <?php if(str_ends_with(url()->current(), '/') || url()->current() == url('/')): ?>
        <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
    <?php else: ?>
        <link rel="canonical" href="<?php echo e(url()->current()); ?>/" />
    <?php endif; ?>


    <link rel="preload" as="image" href="<?php echo e(asset('uploads/67ebedfdcb37d.webp')); ?>" fetchpriority="high" />
    <link rel="preload" as="image" href="<?php echo e(asset('uploads/67d16b0342bc2.webp')); ?>" fetchpriority="high" />
    <link rel="preload" as="image" href="<?php echo e(asset('front-assets/src/images/home-page-banner1100.webp')); ?>"
        fetchpriority="high" />
    <!-- <link rel="preload" as="image" href="<?php echo e(asset('uploads/675aa5d5ab11f.webp')); ?>" fetchpriority="high"/> -->
    <link rel="preload" as="image" href="<?php echo e(asset('front-assets/src/images/banner1100.webp')); ?>"
        fetchpriority="high" />
    <link rel="preload" as="image" href="<?php echo e(asset('uploads/67ca884f73e05.webp')); ?>" fetchpriority="high" />
    <link rel="preload" as="image" href="<?php echo e(asset('front-assets/src/images/get-a-free-quote-bg-image.webp')); ?>"
        fetchpriority="high" />
    <link rel="preload" as="image" href="<?php echo e(asset('front-assets/src/images/mobile-open-bar.webp')); ?>"
        fetchpriority="high" />
    <link rel="preload" as="image" href="<?php echo e(asset('front-assets/src/images/desktop-form-bg.webp')); ?>"
        fetchpriority="high" />
    <link rel="preload" as="image" href="<?php echo e(asset('front-assets/src/images/hollow-metal-doors-delaware.webp')); ?>"
        fetchpriority="high" />

    <!-- 05-08-2025 -->
    <link rel="preload" as="image" href="<?php echo e(asset('uploads/small/garage-door-installation-delaware.webp')); ?>"
        fetchpriority="high" />
    <!-- <link rel="preload" as="image" href="<?php echo e(asset('uploads/68480922ea745.webp')); ?>" fetchpriority="high"/> -->
    <link rel="preload" as="image" href="<?php echo e(asset('uploads/small/garage-door-company-delaware.webp')); ?>"
        fetchpriority="high" />

    <!-- new Preload -->
    <link rel="preload" as="image" href="<?php echo e(asset('uploads/garage-door-installation-delaware.webp')); ?>" />
    <link rel="preload" as="image"
        href="<?php echo e(asset('front-assets/src/images/garage-door-installation-and-replacement-delaware.webp')); ?>" />
    <link rel="preload" as="image"
        href="<?php echo e(asset('front-assets/src/images/garage-door-repairs-and-parts-replacement-delaware.webp')); ?>" />
    <link rel="preload" as="image"
        href="<?php echo e(asset('front-assets/src/images/garage-door-openers-delaware.webp')); ?>" />
    <link rel="preload" as="image"
        href="<?php echo e(asset('front-assets/src/images/garage-door-maintenance-and-service-delaware.webp')); ?>" />
    <link rel="preload" as="image"
        href="<?php echo e(asset('front-assets/src/images/garage-door-maintenance-and-service-delaware.webp')); ?>" />
    <link rel="preload" as="image"
        href="<?php echo e(asset('front-assets/front-assets/src/images/loading-dock-equipment-services-delaware.webp')); ?>" />

    <!-- new Preload -->

    <!-- Preload critical CSS files -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Mulish:wght@200..1000&display=swap">
    <!-- Load font asynchronously -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200..1000&display=swap" rel="stylesheet"
        media="print" onload="this.onload=null;this.removeAttribute('media');">

    <link rel="preload" as="style" href="<?php echo e(asset('front-assets/src/css/bootstrap.min.css')); ?>" />
    <link rel="preload" as="style" href="<?php echo e(asset('front-assets/src/css/owl.carousel.min.css')); ?>" />
    <link rel="preload" as="style" href="<?php echo e(asset('front-assets/src/css/owl.theme.default.min.css')); ?>" />
    <link rel="preload" as="style" href="<?php echo e(asset('front-assets/src/css/magnific-popup.css')); ?>" />
    <link rel="preload" as="style" href="<?php echo e(asset('front-assets/src/css/custom_container.css')); ?>" />
    <link rel="preload" as="style" href="<?php echo e(asset('front-assets/src/css/main.css')); ?>?v=1.3.0" />
    <link rel="preload" as="style" href="<?php echo e(url('/api-custom-css')); ?>" />
    <link rel="preload" as="style" href="<?php echo e(asset('front-assets/src/css/font-awesome.min.css')); ?>">
    <link rel="preload" as="style" href="<?php echo e(asset('front-assets/src/css/new-header.css')); ?>">

    <link rel="preload" as="script" href="<?php echo e(asset('front-assets/src/js/vendor/jquery.min.js')); ?>" />
    <link rel="preload" as="script" href="<?php echo e(asset('front-assets/src/js/vendor/bootstrap.bundle.min.js')); ?>" />
    <link rel="preload" as="script" href="<?php echo e(asset('front-assets/src/js/vendor/owl.carousel.min.js')); ?>" />
    <link rel="preload" as="script"
        href="<?php echo e(asset('front-assets/src/js/vendor/jquery.magnific-popup.min.js')); ?>" />
    <!-- <link rel="preload" as="script" href="<?php echo e(asset('front-assets/src/js/parsley.min.js')); ?>"/> -->
    <link rel="preload" as="script" href="<?php echo e(asset('front-assets/src/js/jquery.mask.js')); ?>" />
    <link rel="preload" as="script" href="<?php echo e(asset('front-assets/src/js/script.js')); ?>" />
    <link rel="preload" href="https://www.google.com/recaptcha/api.js" as="script">

    <?php if(\Request::route()->getName() != 'home'): ?>
        <style>
            @media  (max-width:767.97px){
                /*.why-choose-us-sec h2 {
                    max-width: 100% !important;
                }*/                
            }
            @media (min-width: 992px) and (max-width: 1199.98px) {
                h2.about-history-h2.main_about_title:after {
                    margin: 10px auto 30px 0!important;
                }
            }
        </style>
    <?php endif; ?>

    <style>
        body {
            margin: 0;
            padding: 0;
            text-decoration: none;
            color: inherit;
            font-family: "Mulish", sans-serif;
            font-size: 18px;
        }

        .banner img,
        .banner .desk-banner-left-side {
            display: block !important;
        }

        .banner .mobile-banner-left-side {
            display: none;
        }

        /*    Home Page Gallery Section*/
        .photo-gallery-sec .left-side-image figure:first-child img.normal-img,
        .photo-gallery-sec .right-side-image figure:last-child img.normal-img {
            aspect-ratio: 2;
        }

        .photo-gallery-sec .left-side-image figure:nth-child(2) img.normal-img,
        .photo-gallery-sec .right-side-image figure:nth-child(1) img.normal-img {
            aspect-ratio: 1.5;
        }

        .photo-gallery-sec img.normal-img {
            object-fit: cover;
        }

        .photo-gallery-sec .other-images img.normal-img {
            aspect-ratio: 1.5;
        }

        .year-of-excilence .left-side img {
            object-fit: cover;
        }

        .product-page-product-item-section .image-and-title.revival-wood-collection .col-3 {
            margin-bottom: 30px;
        }

        .product-page-product-item-section .inner-row.revival-wood-notes {
            margin-top: 0;
        }

        .product-page-product-item-section .image-and-title h2.optional-h2-color {
            font-size: 30px !important;
            line-height: 45px !important;
            text-align: left;
        }

        .product-page-product-item-section .image-and-title.revival-wood-collection .col-3 {
            margin-bottom: 30px;
        }

        .product-page-product-item-section .inner-row.revival-wood-notes {
            margin-top: 0;
        }

        .product-page-product-item-section .image-and-title h2.optional-h2-color::after {
            margin-left: 0 !important;
        }

        .get-free-quote-sec h2 {
            color: #fff !important;
            font-size: 42px;
            line-height: 50px;
        }

        .design-center-sec {
            background-color: #F1F1F1;
        }
.footer-sec .footer-content.footer-full-sec {
    padding-top: 50px;
    padding-bottom: 0px !important;
}
        @media (min-width: 576px) and (max-width: 767.98px) {
            .banner .left-side {
                position: absolute !important;
                top: 0;
                background: none !important;
            }

            .banner img {
                height: 320px !important;
            }

            .product-page-banner-section h1 br.distinctions {
                display: none;
            }

        }

        @media (min-width: 200px) and (max-width: 576px) {
            .banner .left-side h1 br {
                display: none;
            }

            .banner .left-side {
                position: absolute !important;
                top: 0;
                background: none !important;
            }

            .banner img {
                height: 415px !important;
            }

            .banner .left-side h1 {
                max-width: 340px;
            }

            .banner .left-side p {
                /* max-width: 400px; */
            }
        }

        @media (min-width: 992px) and (max-width: 1199.98px) {
            .banner .left-side h1 {
                max-width: 425px !important;
            }
        }
    </style>
    <?php if(Request::is('/')): ?>
        <style>
            @media (min-width: 1201px) and (max-width: 1499.98px) {
                .year-of-excilence .right-side h2 {
                    max-width: 450px !important;
                }

                .banner .left-side p {
                    max-width: 600px !important;
                }
            }

            @media (min-width: 768px) and (max-width: 991.98px) {
                .year-of-excilence .right-side h2 {
                    max-width: 445px !important;
                }
            }

            @media (max-width: 575.98px) {
                .banner .left-side p {
                    max-width: 325px !important;
                }
            }

            @media (min-width: 575.98px) and (max-width: 767.98px) {
                .banner .left-side p {
                    max-width: 640px !important;
                }
            }
        </style>
    <?php endif; ?>

    <link href="<?php echo e(asset('front-assets/src/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front-assets/src/css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front-assets/src/css/owl.theme.default.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front-assets/src/css/magnific-popup.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('front-assets/src/css/custom_container.css')); ?>">
    <link type="script" href="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js">
    <link rel="stylesheet" href="<?php echo e(asset('front-assets/src/css/main.css')); ?>?v=1.3.0">
    <link rel="stylesheet" href="<?php echo e(asset('front-assets/src/css/new-model.css')); ?>?v=0.0.1">
    <link rel="stylesheet" href="<?php echo e(asset('front-assets/src/css/hollowmetal.css')); ?>?v=1.1.2">
    <link rel="stylesheet" href="<?php echo e(asset('front-assets/src/css/new-header.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/api-custom-css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front-assets/src/css/font-awesome.min.css')); ?>">

    <style type="text/css">
        .banner .banner-content {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
        }

        .banner .right-side h2 {
            font-size: 60px;
            line-height: 80px;
            font-weight: 800;
            color: #fff;
            text-align: center;
            margin-bottom: 55px;
        }

        .arrow {
            position: fixed;
            bottom: 10px;
            /* Adjust as needed */
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            z-index: 30;
            transition: opacity 0.3s;
        }
    </style>

   




  
</head>

<body>


    <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset('front-assets/src/js/vendor/jquery.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <script src="<?php echo e(asset('front-assets/src/js/vendor/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front-assets/src/js/vendor/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front-assets/src/js/vendor/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front-assets/src/js/parsley.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front-assets/src/js/jquery.mask.js')); ?>"></script>
    <script src="<?php echo e(asset('front-assets/src/js/script.js')); ?>"></script>

    <?php echo $__env->yieldContent('script'); ?>
   

    <script>
        let parentFormId;


        // Passive event listeners
        jQuery.event.special.touchstart = {
            setup: function(_, ns, handle) {
                this.addEventListener("touchstart", handle, {
                    passive: !ns.includes("noPreventDefault")
                });
            }
        };
        jQuery.event.special.touchmove = {
            setup: function(_, ns, handle) {
                this.addEventListener("touchmove", handle, {
                    passive: !ns.includes("noPreventDefault")
                });
            }
        };
        jQuery.event.special.wheel = {
            setup: function(_, ns, handle) {
                this.addEventListener("wheel", handle, {
                    passive: true
                });
            }
        };
        jQuery.event.special.mousewheel = {
            setup: function(_, ns, handle) {
                this.addEventListener("mousewheel", handle, {
                    passive: true
                });
            }
        };


        $(window).on('beforeunload', function() {
            // Remove active class from the section on the first page
            $('.header-menu-mobile').removeClass('show');
        });
        if (window.location.href === window.location.origin) {
            // Set initial state to hidden for the mobile menu and submenus
            $('.header-menu-mobile').removeClass('show'); // Close the mobile menu
            $('.header-menu-mobile .dropdown-menu').removeClass('active active-sub'); // Close all submenus
        }


        // Handle page unload events to remove the class before leaving
        $(window).on('pagehide', function() {
            // Remove the 'show' class and close any open submenus when navigating away
            $('.header-menu-mobile').removeClass('show');
            $('.header-menu-mobile .dropdown-menu').removeClass('active active-sub');
        });
        // Reset mobile menu and submenus to closed state when the page reloads
        $(window).on('load', function() {
            $('.header-menu-mobile').removeClass('show'); // Ensures menu is closed after page reload
            $('.header-menu-mobile .dropdown-menu').removeClass(
                'active active-sub'); // Ensures all submenus are closed
        });

        //Does not use passive listeners to improve scrolling performance
        document.addEventListener('DOMContentLoaded', function() {
            var owlElements = document.querySelectorAll('.carousel');
            owlElements.forEach(function(owl) {
                owl.addEventListener('touchstart', function() {}, {
                    passive: true
                });
                owl.addEventListener('wheel', function() {}, {
                    passive: true
                });
            });
        });

        

        $(document).ready(function() {
            


            $('input[name="phone"]').mask('(000) 000-0000');

        });

       

        $(window).on('load', function() {
            setTimeout(function() {
                loadReCaptcha();
            }, 6000);
        });

        function loadReCaptcha() {
            if (!window.recaptchaLoaded) { // Prevent multiple loads
                var head = document.getElementsByTagName('head')[0];
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://www.google.com/recaptcha/api.js';
                script.async = true; // Load asynchronously
                script.defer = true;
                head.appendChild(script);
                window.recaptchaLoaded = true; // Set flag to avoid reloading
            }
        }

   
        $('.submit_form').on('click', function(e) {
            e.preventDefault();
            parentFormId = $(this).closest('form').attr('id');
            if (parentFormId) {
                $(`#${parentFormId}`).parsley().validate();
            }
            grecaptcha.execute();
        });

        function onSubmit(token) {
            if ($(`#${parentFormId}`).parsley().isValid()) {
                if (parentFormId == "ContactFormMobile") {
                    $("#mobileRecaptchaToken").val(token);
                }
                if (parentFormId == "ContactFormModel") {
                    $("#modelRecaptchaToken").val(token);
                }
                document.getElementById(parentFormId).submit();
                parentFormId = '';
            }
        }


        $(document).ready(function() {
            var bottom = 0;
            var timer;
            var timeout = 2000; // Set inactivity period to 3 seconds (3000 milliseconds)

            function resetTimer() {
                clearTimeout(timer);

                if (bottom === 0) { // Only show the arrow if not at the bottom
                    $(".arrow").css('opacity', '0');
                    timer = setTimeout(onInactivity, timeout);
                } else {
                    $(".arrow").css('opacity', '0'); // Ensure the arrow is hidden at the bottom
                }
            }

            function onInactivity() {
                if (bottom === 0) {
                    $(".arrow").css('opacity', '1');
                }
            }

            $(document).on('mousemove keydown click scroll', function() {
                resetTimer();
            });

            $(window).scroll(function() {
                if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                    bottom = 1; // User is at the bottom
                    $(".arrow").css('opacity', '0'); // Hide the arrow when at the bottom
                } else {
                    bottom = 0; // User is not at the bottom
                }
                resetTimer();
            });

            // Initial check
            resetTimer();
        });
    </script>
    <?php if(request()->segment(2) !== 'openers'): ?>
        <div class="img-popup1">
            <span class="close-btn">&times;</span>
            <a href="#" target="_blank">
                <img src="" alt="Popup Image">
            </a>
        </div>
        <script>
            $(document).ready(function() {

                var imgPopup = $('.img-popup1');
                var popupImage = $('.img-popup1 img');
                var popupLink = $('.img-popup1 a');
                var closeBtn = $('.img-popup1 .close-btn');

                $('#tab0 img, #tab1 img, #tabcl0 img, #tabcl1 img').on('click', function() {
                    var img_src = $(this).attr('src');
                    popupImage.attr('src', img_src);
                    popupLink.attr('href', img_src);
                    imgPopup.addClass('opened');
                });

                imgPopup.on('click', function() {
                    imgPopup.removeClass('opened');
                    popupImage.attr('src', '');
                    popupLink.attr('href', '#');
                });

                popupImage.on('click', function(e) {
                    e.stopPropagation();
                });

                closeBtn.on('click', function() {
                    imgPopup.removeClass('opened');
                    popupImage.attr('src', '');
                    popupLink.attr('href', '#');
                });
            });
        </script>
    <?php endif; ?>






</body>

</html>
<?php /**PATH C:\laragon\www\new_project\resources\views/frontend/layouts/index.blade.php ENDPATH**/ ?>