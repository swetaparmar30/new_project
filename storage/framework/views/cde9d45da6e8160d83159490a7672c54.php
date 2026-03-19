 
<?php $__env->startSection('title'); ?> <?php echo e(isset($meta_title) ? $meta_title : ''); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> <?php echo e(isset($meta_description) ? $meta_description : ''); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> <?php echo e(isset($meta_keywords) ? $meta_keywords : ''); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<style>
    /*Mobile Slider*/
    .mobile-configurations-sec {
        display: none;
    }
    .hollow-metal-door-handling-section .mobile-single-soor-sec {
        display: none;
    }
    .hollow-metal-door-handling-section .mobile-double-soor-sec {
        display: none;
    }
    .metal-door-frame-config-section .mobile-meta-frames-sec {
        display: none;
    }
    .hollow-metal-door-hardware-section .mobile-metal-hardware-sec{
        display: none;
    }
    .mobile-slider-sec figure a {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: zoom-in;
    }
    /*.mobile-slider-sec figure .normal-img { width: 100%; height: auto; object-fit: cover; }*/
    .mobile-slider-sec img.prev-img-mb {
        transform: rotate(180deg);
        margin-bottom: 50px;
    }
    .mobile-slider-sec img.next-img-mb {
        margin-bottom: 50px;
    }
    .mobile-slider-sec .text-sec {
        margin-top: 18px;
    }
    .mobile-slider-sec .text-sec h6 {
        font-size: 20px;
        text-align: center;
        line-height: 25px;
        color: #002855;
        font-weight: 700;
        padding-bottom: 10px;
    }
    .mobile-slider-sec .text-sec p {
        font-size: 18px;
        line-height: 18px;
        text-align: center;
        font-weight: 700;
        color: #333333;
    }
    .mobile-slider-sec .carousel-indicators [data-bs-target] {
        width: 11px;
        height: 11px;
        border-radius: 50%;
        margin: 0px 5px;
        background-color: #000866;
    }
    .mobile-slider-sec .carousel-indicators {
        display: block;
        position: unset;
        margin: 10px 0 0 0;
    }

    .hollow-metal-door-hardware-section .each-box .inner-sec {
        margin: 0 8px;
        text-align: center;
        border: 1px solid #0028554d;
        margin-bottom: 40px;
    }
    .hollow-metal-door-hardware-section .each-box .inner-sec .item-image {
        background-color: #eeeeee;
    }
    .hollow-metal-door-hardware-section .each-box .inner-sec h4 {
        color: #002855;
        font-size: 30px;
        line-height: 31px;
        font-weight: 700;
    }
    .hollow-metal-door-hardware-section .each-box .inner-sec .item-name {
        padding: 25px 0;
    }
    .metal-door-frame-config-section .width-requirement-sec {
        margin-top: 90px;
    }
    .metal-door-frame-config-section .meta-door-frames-items-sec {
        justify-content: center;
        margin-top: 50px;
    }
    .metal-door-frame-config-section .configurations-headings-section p {
        padding: 0 100px;
    }
    .metal-door-frame-config-section .configurations-box-section {
        text-align: center;
    }
    .metal-door-frame-config-section .configurations-box-section p {
        font-size: 22px;
        line-height: 28px;
        color: #333333;
        font-weight: 700;
    }
    .metal-door-frame-config-section .width-requirement-sec h2 {
        text-align: left;
    }
    .metal-door-frame-config-section .width-requirement-sec .right-side {
        text-align: center;
    }
    .metal-door-frame-config-section.sandk-inner-common .width-requirement-sec h2::after {
        margin: 30px 0 35px 0 !important;
    }
    .metal-door-frame-config-section .width-requirement-sec p strong {
        color: #002855;
        font-weight: 700;
    }
    .metal-door-frame-config-section .width-requirement-sec p {
        margin-bottom: 20px;
    }
    .metal-door-frames-sec {
        background-color: #f1f1f1;
    }
    .metal-door-frames-sec .right-side p {
        padding-right: 90px;
    }
    .metal-door-frames-sec h2 {
        text-align: left;
    }
    .metal-door-frames-sec.sandk-inner-common h2::after {
        margin-left: 0 !important;
        margin-right: 0 !important;
    }
    .all-service-sections .planned-maintenance-programme-sec h2,
    .all-service-sections .commercial-emergency-service-sec h2 {
        text-align: left;
    }
    .all-service-sections .planned-maintenance-programme-sec,
    .all-service-sections .commercial-emergency-service-sec {
        margin-bottom: 70px;
    }
    .all-service-sections .row {
        justify-content: center;
        align-items: flex-start;
    }
    .all-service-sections .planned-maintenance-programme-sec h2::after,
    .all-service-sections .commercial-emergency-service-sec h2::after {
        margin: 30px 0 35px 0 !important;
    }
    .all-service-sections .planned-maintenance-programme-sec p,
    .all-service-sections .commercial-emergency-service-sec p {
        padding-right: 120px;
    }
    .all-service-sections .makes-model-service-sec ul li {
        font-size: 20px;
        line-height: 30px;
        font-weight: 700;
        color: #333333;
        background-image: url("/front-assets/src/images/loading-dock-accessories.svg");
        background-repeat: no-repeat;
        background-position: 0 4px;
        padding: 0 0 1px 30px;
        margin-bottom: 15px;
    }
    .all-service-sections .makes-model-service-sec ul {
        column-count: 2;
        max-width: max-content;
        gap: 90px;
        margin: 0 auto;
    }
    .all-service-sections {
        background-color: #f1f1f1;
    }
    .hollow-metal-door-handling-section h3 {
        font-size: 32px;
        line-height: 40px;
        font-weight: 700;
        color: #002855;
    }
    .hollow-metal-door-handling-section h3::after {
        content: "";
        display: block;
        width: 150px;
        height: 2px;
        background-color: #002855;
        margin: 16px auto 70px auto !important;
        font-weight: 700;
    }

    @media (min-width: 1401px) and (max-width: 1800px) {
        .loading-dock-banner-section .loading-dock-banner-content {
            padding: 60px 23px 60px;
        }
        .hollow-metal-door-handling-section .handling-headings-section p {
            padding: 0 125px;
        }
        .sandk-inner-common h2::after {
            margin: 16px auto 55px auto !important;
        }
        .metal-door-frames-sec .right-side p {
            padding-right: 50px;
        }
        .metal-door-frame-config-section .configurations-headings-section p {
            padding: 0 70px;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec .item-name {
            padding: 22px 0;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec h4 {
            font-size: 27px;
            line-height: 30px;
        }
        .all-service-sections .planned-maintenance-programme-sec p,
        .all-service-sections .commercial-emergency-service-sec p {
            padding-right: 40px;
        }
        .all-service-sections .planned-maintenance-programme-sec h2::after,
        .all-service-sections .commercial-emergency-service-sec h2::after {
            margin: 23px 0 29px 0 !important;
        }
    }

    @media (min-width: 1200px) and (max-width: 1399.98px) {
        .sandk-inner-common h2::after {
            margin: 16px auto 55px auto !important;
        }
        .loading-dock-banner-section .loading-dock-banner-content {
            padding: 60px 23px 60px;
            width: 680px;
        }
        .metal-door-frames-sec .right-side p {
            padding-right: 30px;
        }
        .metal-door-frame-config-section.sandk-inner-common h2::after {
            margin: 16px auto 50px auto !important;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec h4 {
            font-size: 23px;
            line-height: 26px;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec .item-name {
            padding: 20px 0;
        }
        .sandk-common h2 {
            font-size: 29px;
        }
        .all-service-sections .planned-maintenance-programme-sec h2::after,
        .all-service-sections .commercial-emergency-service-sec h2::after {
            margin: 20px 0 25px 0 !important;
        }
        .all-service-sections .planned-maintenance-programme-sec p,
        .all-service-sections .commercial-emergency-service-sec p {
            padding-right: 30px;
        }
        .all-service-sections .makes-model-service-sec ul {
            gap: 70px;
        }
        .metal-door-frames-sec .right-side {
            padding-left: 15px;
        }
        .hollow-metal-door-handling-section h3 {
            font-size: 29px;
            line-height: 38px;
        }
        .hollow-metal-door-handling-section h3::after {
            margin: 16px auto 50px auto !important;
        }
    }

    @media (max-width: 575.98px) {
        .hollow-metal-door-hardware-section .desktop-metal-hardware-sec{
            display: none;
        }
        .hollow-metal-door-hardware-section .mobile-metal-hardware-sec{
            display: block;
        }
        .loading-dock-accessories-sec h2.models {
            font-size: 24px;
            line-height: 34px;
        }
        .loading-dock-accessories-sec h2.models br {
            display: none;
        }
        .hollow-metal-door-handling-section .mobile-double-soor-sec {
            display: none;
            display: block;
        }
        .hollow-metal-door-handling-section .desktop-single-door-sec {
            display: none;
        }
        .hollow-metal-door-handling-section .desktop-double-door-sec {
            display: none;
        }
        .metal-door-frame-config-section .desktop-meta-frame-sec {
            display: none;
        }
        .metal-door-frame-config-section .mobile-meta-frames-sec {
            display: block;
        }
        .hollow-metal-door-handling-section .mobile-single-soor-sec {
            display: block;
            margin-top: 50px;
        }
        .mobile-configurations-sec {
            display: block;
        }
        .inner-hollow-configurations-section .inner-hollow-content {
            display: none;
        }
        .loading-dock-banner-section.hollow-metal-door-banner-section .loading-dock-banner-content {
            padding: 15px 12px 15px;
            text-align: center;
            width: 90%;
        }
        .loading-dock-banner-section.hollow-metal-door-banner-section .loading-dock-banner-content h2 {
            padding: 0 0;
        }
        .hollow-metal-configurations-section p {
            letter-spacing: -0.1px;
        }
        .hollow-metal-doors-sec h4 {
            font-size: 25px;
            line-height: 25px;
            text-align: center;
        }
        .hollow-metal-doors-sec h4::after {
            margin: 15px auto 35px auto !important;
        }
        .inner-hollow-configurations-section .configurations-headings-section p {
            padding: 0 0px;
        }
        .inner-hollow-configurations-section .configurations-box-section article p {
            margin-top: 15px;
            font-size: 20px;
            line-height: 24px;
        }
        .inner-hollow-configurations-section .configurations-box-section {
            margin-bottom: 40px;
        }
        .inner-hollow-configurations-section .configurations-box-section:last-child {
            margin-bottom: 0;
        }
        .hollow-metal-door-handling-section .handling-headings-section p {
            padding: 0 0px;
        }
        .hollow-metal-door-handling-section h3 {
            font-size: 28px;
            line-height: 35px;
        }
        .hollow-metal-door-handling-section h3::after {
            margin: 15px auto 30px auto !important;
        }
        .hollow-metal-door-handling-section .single-door-box-section article .text-content {
            margin-top: 20px;
        }
        .hollow-metal-door-handling-section .single-door-box-section article h6 {
            font-size: 20px;
            line-height: 25px;
        }
        .hollow-metal-door-handling-section .single-door-box-section article p {
            font-size: 18px;
            line-height: 18px;
        }
        .hollow-metal-door-handling-section .single-door-box-section {
            margin-bottom: 40px;
        }
        .double-door-section {
            padding: 50px 0 50px;
        }
        .hollow-metal-door-handling-section .double-door-box-section.box-sec {
            margin-top: 0px;
            text-align: center;
        }
        .hollow-metal-door-handling-section .double-door-box-section article h6 {
            font-size: 20px;
            line-height: 25px;
        }
        .hollow-metal-door-handling-section .double-door-box-section article p {
            font-size: 18px;
            line-height: 24px;
        }
        .metal-door-frames-sec .left-side {
            display: none;
        }
        .hollow-metal-door-handling-section .double-door-box-section {
            margin-bottom: 30px;
        }
        .hollow-metal-door-handling-section .double-door-box-section article .text-content {
            margin-top: 15px;
        }
        /*.hollow-metal-door-handling-section{padding-bottom: 10px;}*/
        .metal-door-frames-sec .right-side {
            padding-left: 12px;
        }
        .metal-door-frames-sec h2 {
            text-align: center;
        }
        .metal-door-frames-sec.sandk-inner-common h2::after {
            margin-left: auto !important;
            margin-right: auto !important;
        }
        .metal-door-frames-sec .right-side p {
            padding-right: 0;
            text-align: center;
        }
        .metal-door-frame-config-section .configurations-headings-section p {
            padding: 0 0px;
        }
        .metal-door-frame-config-section .configurations-box-section p {
            font-size: 20px;
            line-height: 23px;
        }
        .metal-door-frame-config-section .configurations-box-section {
            margin-bottom: 40px;
        }
        .metal-door-frame-config-section .width-requirement-sec h2 {
            text-align: center;
        }
        .metal-door-frame-config-section .width-requirement-sec {
            margin-top: 60px;
        }
        .metal-door-frame-config-section .width-requirement-sec p {
            margin-bottom: 15px;
        }
        .metal-door-frame-config-section .width-requirement-sec .right-side {
            display: none;
        }
        .metal-door-frame-config-section .width-requirement-sec h2 {
            text-align: center;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec h4 {
            font-size: 20px;
            line-height: 20px;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec .item-name {
            padding: 14px 0;
        }
        .hollow-metal-door-hardware-section {
            padding-bottom: 20px;
        }
        .all-service-sections .planned-maintenance-programme-sec p,
        .all-service-sections .commercial-emergency-service-sec p {
            padding-right: 0;
            text-align: center;
        }
        .all-service-sections .planned-maintenance-programme-sec h2,
        .all-service-sections .commercial-emergency-service-sec h2 {
            text-align: center;
        }
        .all-service-sections .makes-model-service-sec ul {
            column-count: 1;
        }
        .all-service-sections .makes-model-service-sec ul li {
            font-size: 16px;
            line-height: 24px;
            background-size: 13px;
            background-position: 0 6px;
            padding-left: 22px;
            margin-bottom: 12px;
        }
        .all-service-sections .planned-maintenance-programme-sec .right-side {
            margin-top: 0px;
        }
        .all-service-sections .planned-maintenance-programme-sec .right-side h2 {
            margin-bottom: 25px;
        }
        .all-service-sections .commercial-emergency-service-sec .left-side h2 {
            margin-bottom: 20px;
        }

        .all-service-sections .planned-maintenance-programme-sec .left-side {
            display: none;
        }
        .all-service-sections .commercial-emergency-service-sec .right-side {
            display: none;
        }
    }
    @media (min-width: 576px) and (max-width: 767.98px) {
        .loading-dock-banner-section .loading-dock-banner-content{
            padding: 30px 30px 30px;
            width: 80%;
        }
        .metal-door-frames-sec .left-side {
            display: none;
        }
        .metal-door-frame-config-section .width-requirement-sec h2{
            text-align: center;
        }
        .all-service-sections .planned-maintenance-programme-sec .left-side {
            display: none;
        }
        .all-service-sections .commercial-emergency-service-sec h2{
            text-align: center;
        }
        .metal-door-frames-sec .right-side p{
            padding-right: 0;
        }
        .inner-hollow-configurations-section .configurations-headings-section p{
            padding: 0;
        }
        .hollow-metal-door-handling-section .handling-headings-section p{
            padding: 0;
        }
        .metal-door-frame-config-section .configurations-headings-section p
        {
            padding: 0;
        }
        .all-service-sections .commercial-emergency-service-sec p{
            padding-right: 0;
        }
        .all-service-sections .planned-maintenance-programme-sec p{
            padding-right: 0;
        }
        .all-service-sections .commercial-emergency-service-sec h2::after {
            margin: 16px auto 20px auto !important;
        }
        .metal-door-frame-config-section.sandk-inner-common .width-requirement-sec h2::after{
            margin: 16px auto 20px auto !important;
        }
        .all-service-sections .commercial-emergency-service-sec .right-side {
            display: none;
        }
        .all-service-sections .planned-maintenance-programme-sec h2{
            text-align: center;
        }
        .all-service-sections .planned-maintenance-programme-sec h2::after
        {
            margin: 16px auto 20px auto !important;
        }
        .metal-door-frame-config-section .width-requirement-sec .right-side {
            display: none;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec h4{
            font-size: 25px;
        }
        .hollow-metal-door-hardware-section .desktop-metal-hardware-sec{
            display: none;
        }
        .hollow-metal-door-hardware-section .mobile-metal-hardware-sec{
            display: block;
        }
        .hollow-metal-door-handling-section .mobile-double-soor-sec {
            display: none;
            display: block;
        }
        .hollow-metal-door-handling-section .desktop-single-door-sec {
            display: none;
        }
        .hollow-metal-door-handling-section .desktop-double-door-sec {
            display: none;
        }
        .metal-door-frame-config-section .desktop-meta-frame-sec {
            display: none;
        }
        .metal-door-frame-config-section .mobile-meta-frames-sec {
            display: block;
        }
        .hollow-metal-door-handling-section .mobile-single-soor-sec {
            display: block;
            margin-top: 50px;
        }
        .mobile-configurations-sec {
            display: block;
        }
        .inner-hollow-configurations-section .inner-hollow-content {
            display: none;
        }
    }
    @media (max-width: 767.98px) and (orientation: landscape) {
        .loading-dock-banner-section.hollow-metal-door-banner-section .loading-dock-banner-content {
            padding: 15px 12px 15px;
            text-align: center;
            width: 90%;
        }
        .loading-dock-banner-section.hollow-metal-door-banner-section .loading-dock-banner-content h2 {
            padding: 0 0;
        }
        .hollow-metal-configurations-section p {
            letter-spacing: -0.1px;
        }
        .hollow-metal-doors-sec h4 {
            font-size: 25px;
            line-height: 25px;
            text-align: center;
        }
        .hollow-metal-doors-sec h4::after {
            margin: 15px auto 35px auto !important;
        }
        .inner-hollow-configurations-section .configurations-headings-section p {
            padding: 0 0px;
        }
        .inner-hollow-configurations-section .configurations-box-section article p {
            margin-top: 15px;
            font-size: 20px;
            line-height: 24px;
        }
        .inner-hollow-configurations-section .configurations-box-section {
            margin-bottom: 40px;
        }
        .inner-hollow-configurations-section .configurations-box-section:last-child {
            margin-bottom: 0;
        }
        .hollow-metal-door-handling-section .handling-headings-section p {
            padding: 0 0px;
        }
        .hollow-metal-door-handling-section h3 {
            font-size: 28px;
            line-height: 35px;
        }
        .hollow-metal-door-handling-section h3::after {
            margin: 15px auto 30px auto !important;
        }
        .hollow-metal-door-handling-section .single-door-box-section article .text-content {
            margin-top: 20px;
        }
        .hollow-metal-door-handling-section .single-door-box-section article h6 {
            font-size: 20px;
            line-height: 25px;
        }
        .hollow-metal-door-handling-section .single-door-box-section article p {
            font-size: 18px;
            line-height: 18px;
        }
        .hollow-metal-door-handling-section .single-door-box-section {
            margin-bottom: 40px;
        }
        .double-door-section {
            padding: 50px 0 50px;
        }
        .hollow-metal-door-handling-section .double-door-box-section.box-sec {
            margin-top: 0px;
            text-align: center;
        }
        .hollow-metal-door-handling-section .double-door-box-section article h6 {
            font-size: 20px;
            line-height: 25px;
        }
        .hollow-metal-door-handling-section .double-door-box-section article p {
            font-size: 18px;
            line-height: 24px;
        }
        .metal-door-frames-sec .left-side {
            display: none;
        }
        .hollow-metal-door-handling-section .double-door-box-section {
            margin-bottom: 30px;
        }
        .hollow-metal-door-handling-section .double-door-box-section article .text-content {
            margin-top: 15px;
        }
        .hollow-metal-door-handling-section {
            padding-bottom: 10px;
        }
        .metal-door-frames-sec .right-side {
            padding-left: 12px;
        }
        .metal-door-frames-sec h2 {
            text-align: center;
        }
        .metal-door-frames-sec.sandk-inner-common h2::after {
            margin-left: auto !important;
            margin-right: auto !important;
        }
        .metal-door-frames-sec .right-side p {
            padding-right: 0;
            text-align: center;
        }
        .metal-door-frame-config-section .configurations-headings-section p {
            padding: 0 0px;
        }
        .metal-door-frame-config-section .configurations-box-section p {
            font-size: 20px;
            line-height: 23px;
        }
        .metal-door-frame-config-section .configurations-box-section {
            margin-bottom: 40px;
        }
        .metal-door-frame-config-section .width-requirement-sec h2 {
            text-align: center;
        }
        .metal-door-frame-config-section .width-requirement-sec {
            margin-top: 60px;
        }
        .metal-door-frame-config-section .width-requirement-sec p {
            margin-bottom: 15px;
        }
        .metal-door-frame-config-section .width-requirement-sec .right-side {
            display: none;
        }
        .metal-door-frame-config-section .width-requirement-sec h2 {
            text-align: center;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec h4 {
            font-size: 20px;
            line-height: 20px;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec .item-name {
            padding: 14px 0;
        }
        .hollow-metal-door-hardware-section {
            padding-bottom: 20px;
        }
        .all-service-sections .planned-maintenance-programme-sec p,
        .all-service-sections .commercial-emergency-service-sec p {
            padding-right: 0;
            text-align: center;
        }
        .all-service-sections .planned-maintenance-programme-sec h2,
        .all-service-sections .commercial-emergency-service-sec h2 {
            text-align: center;
        }
        .all-service-sections .makes-model-service-sec ul {
            column-count: 1;
        }
        .all-service-sections .makes-model-service-sec ul li {
            font-size: 16px;
            line-height: 24px;
            background-size: 13px;
            background-position: 0 6px;
            padding-left: 22px;
            margin-bottom: 12px;
        }
        .all-service-sections .planned-maintenance-programme-sec .right-side {
            margin-top: 0px;
        }
        .all-service-sections .planned-maintenance-programme-sec .right-side h2 {
            margin-bottom: 25px;
        }
        .all-service-sections .commercial-emergency-service-sec .left-side h2 {
            margin-bottom: 20px;
        }

        .all-service-sections .planned-maintenance-programme-sec .left-side {
            display: none;
        }
        .all-service-sections .commercial-emergency-service-sec .right-side {
            display: none;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .loading-dock-banner-section.hollow-metal-door-banner-section .loading-dock-banner-content {
            padding: 30px 30px 30px;
            text-align: center;
            width: 70%;
        }
        .loading-dock-banner-section.hollow-metal-door-banner-section .loading-dock-banner-content h2 {
            padding: 0 0;
        }
        .inner-hollow-configurations-section .configurations-box-section article p {
            font-size: 18px;
            line-height: 21px;
            margin-top: 15px;
        }
        .hollow-metal-door-handling-section h3::after {
            margin: 16px auto 30px auto !important;
        }
        .hollow-metal-door-handling-section h3 {
            font-size: 26px;
            line-height: 33px;
        }
        .hollow-metal-door-handling-section .single-door-box-section article h6 {
            font-size: 20px;
            line-height: 27px;
        }
        .hollow-metal-door-handling-section .single-door-box-section article p {
            font-size: 18px;
            line-height: 21px;
        }
        .hollow-metal-door-handling-section .single-door-box-section article .text-content {
            margin-top: 15px;
        }
        .double-door-section {
            padding: 50px 0 50px;
        }
        .hollow-metal-door-handling-section .double-door-box-section article h6 {
            font-size: 20px;
            line-height: 27px;
        }
        .hollow-metal-door-handling-section .double-door-box-section article p {
            font-size: 18px;
            line-height: 21px;
        }
        .metal-door-frames-sec .right-side {
            padding-left: 15px;
        }
        .metal-door-frames-sec .right-side p {
            padding-right: 0;
        }
        .metal-door-frame-config-section .configurations-headings-section p {
            padding: 0 50px;
        }
        .metal-door-frame-config-section .configurations-box-section p {
            font-size: 18px;
            line-height: 23px;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec .item-name {
            padding: 15px 0;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec h4 {
            font-size: 18px;
            line-height: 23px;
            padding: 0 13px;
        }
        .all-service-sections .planned-maintenance-programme-sec p,
        .all-service-sections .commercial-emergency-service-sec p {
            padding-right: 0px;
        }
        .all-service-sections .planned-maintenance-programme-sec h2::after,
        .all-service-sections .commercial-emergency-service-sec h2::after {
            margin: 15px 0 20px 0 !important;
        }
        .all-service-sections .planned-maintenance-programme-sec h2,
        .all-service-sections .commercial-emergency-service-sec h2 {
            text-align: left;
            font-size: 21px;
            line-height: 24px;
        }
        .all-service-sections .makes-model-service-sec h2 {
            padding: 0 100px;
        }
        .all-service-sections .makes-model-service-sec ul li {
            font-size: 18px;
            line-height: 28px;
            background-position: 0 5px;
        }
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
        .loading-dock-banner-section.hollow-metal-door-banner-section .loading-dock-banner-content {
            padding: 30px 30px 30px;
            text-align: center;
            width: 60%;
        }
        .loading-dock-banner-section.hollow-metal-door-banner-section .loading-dock-banner-content h2 {
            padding: 0 0;
        }
        .inner-hollow-configurations-section .configurations-box-section article p {
            font-size: 18px;
            line-height: 21px;
            margin-top: 15px;
        }
        .hollow-metal-door-handling-section h3::after {
            margin: 16px auto 30px auto !important;
        }
        .hollow-metal-door-handling-section h3 {
            font-size: 26px;
            line-height: 33px;
        }
        .hollow-metal-door-handling-section .single-door-box-section article h6 {
            font-size: 20px;
            line-height: 27px;
        }
        .hollow-metal-door-handling-section .single-door-box-section article p {
            font-size: 18px;
            line-height: 21px;
        }
        .hollow-metal-door-handling-section .single-door-box-section article .text-content {
            margin-top: 15px;
        }
        .double-door-section {
            padding: 50px 0 50px;
        }
        .hollow-metal-door-handling-section .double-door-box-section article h6 {
            font-size: 20px;
            line-height: 27px;
        }
        .hollow-metal-door-handling-section .double-door-box-section article p {
            font-size: 18px;
            line-height: 21px;
        }
        .metal-door-frames-sec .right-side {
            padding-left: 15px;
        }
        .metal-door-frames-sec .right-side p {
            padding-right: 0;
        }
        .metal-door-frame-config-section .configurations-headings-section p {
            padding: 0 50px;
        }
        .metal-door-frame-config-section .configurations-box-section p {
            font-size: 18px;
            line-height: 23px;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec .item-name {
            padding: 15px 0;
        }
        .hollow-metal-door-hardware-section .each-box .inner-sec h4 {
            font-size: 18px;
            line-height: 23px;
            padding: 0 13px;
        }
        .all-service-sections .planned-maintenance-programme-sec p,
        .all-service-sections .commercial-emergency-service-sec p {
            padding-right: 0px;
        }
        .all-service-sections .planned-maintenance-programme-sec h2::after,
        .all-service-sections .commercial-emergency-service-sec h2::after {
            margin: 15px 0 20px 0 !important;
        }
        .all-service-sections .planned-maintenance-programme-sec h2,
        .all-service-sections .commercial-emergency-service-sec h2 {
            text-align: left;
            font-size: 21px;
            line-height: 24px;
        }
        .all-service-sections .makes-model-service-sec h2 {
            padding: 0 100px;
        }
        .all-service-sections .makes-model-service-sec ul li {
            font-size: 18px;
            line-height: 28px;
            background-position: 0 5px;
        }
    }
</style>

<section class="loading-dock-banner-section hollow-metal-door-banner-section sandk-common">
    <img src="<?php echo e(asset('front-assets/src/images/residential-images/hollow-metal-door-banner.webp')); ?>" class="img-fluid ld-banner-img" width="auto" height="auto" alt="residential banner" />
    <div class="loading-dock-banner-content">
        <h1 class="loading-title">Hollow Metal Doors, <br> Frames & Hardware Delaware</h1>
        <p>
            We specialize in hollow metal doors, frames, and hardware, along with dock levelers, shelters, seals, and bumpers. Our services include parts, accessories, and expert repairs. Trust us for precision and care in every
            project.
        </p>
        <!-- <a href="#" class="get-quote-btn common-btn">GET A FREE QUOTE</a> -->
        <button class="common-btn first-btn" data-bs-target="#getafreequote" data-bs-toggle="modal">
            GET A FREE QUOTE
        </button>
    </div>
</section>
<section class="hollow-metal-configurations-section sandk-common sandk-common-padding sandk-inner-common">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center hollow-headings-section">
                <h2>Hollow Metal Door Configurations</h2>
                <p>
                    Welcome to Clark and Sons, where excellence meets innovation in hollow metal doors and frames solutions. For years, we've been dedicated to providing top-quality products paired with trusted, leading-edge technology
                    designed to enhance security and durability. Our commitment goes beyond supplying doors and frames—we partner with you to ensure every aspect of your project is seamless. Whether you need fire-rated doors, custom frames,
                    or durable hardware, our solutions are tailored to fit your unique needs.<br />
                    <br />
                    Serving the greater area, we take pride in offering a full range of services, including expert consultation, professional installation, and dependable ongoing support.<br />
                    <br />
                    At Clark and Sons, we understand the importance of durable and secure hollow metal doors and frames for smooth operations and workplace safety. Let us help you complete your requirements with precision and care—because your
                    success is our mission.
                </p>
            </div>

            <div class="need-new-garage-door desktop preload-images" type="button" data-bs-toggle="modal" data-bs-target="#selectdoor" id="door" style="display: block;">
                <div class="inner-sec">
                    <div class="text-sec">
                        <h3>
                            Need a new <br />
                            garage door?
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hollow-metal-doors-sec sandk-common sandk-common-padding">
    <div class="container-md">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 left-side">
                <h4>Hollow Metal Doors</h4>
                <img src="<?php echo e(asset('front-assets/src/images/residential-images/ld-hollow-metal.webp')); ?>" class="img-fluid mobile-img" width="auto" height="auto" alt="" loading="lazy" />
                <p>
                    At Clark and Sons, our flush hollow metal doors are crafted with high-quality 16, 18, or 20-gauge steel for unmatched durability and versatility. Available in a variety of widths and heights, these doors are suitable for
                    both interior and exterior applications. Whether you need fire-rated doors or standard options, we have the perfect solution for your project. Combining strength, economy, and reliability, our hollow metal doors are an
                    ideal choice for any job. Trust Clark and Sons to deliver quality and precision for all your hollow metal door needs.
                </p>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 right-side">
                <img src="<?php echo e(asset('front-assets/src/images/residential-images/ld-hollow-metal.webp')); ?>" class="img-fluid desktop-image" width="auto" height="auto" alt="" loading="lazy" />
            </div>
        </div>
    </div>
</section>
<section class="inner-hollow-configurations-section sandk-common sandk-common-padding sandk-inner-common">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center configurations-headings-section">
                <h2>Hollow Metal Door Configurations</h2>
                <p>
                    Our hollow metal doors are available in a wide range of configurations to meet your specific needs. Choose from single or double doors, with options for flush, paneled, or vision lite designs. These doors can be
                    fire-rated, soundproof, or insulated for enhanced functionality. Ideal for interior or exterior use, they are crafted with precision and high-quality steel for long-lasting durability. Custom sizes, hardware
                    preparations, and finish options ensure a perfect fit for any application. At Clark and Sons, we provide reliable, versatile solutions tailored to your unique requirements.
                </p>
            </div>
        </div>
        <div class="row inner-hollow-content">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center configurations-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/hollow-metal-door-double.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <p>Hollow Metal Door Double</p>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center configurations-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/hollow-metal-door-with-glass.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <p>Hollow Metal Door with Glass</p>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center configurations-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/hollow-metal-door-single.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <p>Hollow Metal Door Single</p>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center configurations-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/hollow-metal-door-single-1.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <p>Hollow Metal Door Single</p>
                </article>
            </div>
        </div>
        <div class="mobile-configurations-sec mobile-slider-sec text-center">
            <div id="mobilConfigCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/hollow-metal-door-double.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <p>Hollow Metal Door Double</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/hollow-metal-door-with-glass.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <p>Hollow Metal Door with Glass</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/hollow-metal-door-single.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <p>Hollow Metal Door Single</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/hollow-metal-door-single-1.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <p>Hollow Metal Door Single</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mobilConfigCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mobilConfigCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mobilConfigCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#mobilConfigCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hollow-metal-door-handling-section sandk-common sandk-common-padding sandk-inner-common">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center handling-headings-section">
                <h2>Hollow Metal Door Handing</h2>
                <h3>Single Doors</h3>
                <p>
                    Our hollow metal single doors are crafted from high-quality steel, ensuring durability, security, and versatility. Designed for both interior and exterior applications, these doors are available in various sizes, gauges,
                    and finishes to suit any project. With options for fire-rated, soundproof, and insulated designs, they provide enhanced functionality and safety. Perfect for commercial, industrial, and institutional use, our single
                    doors offer a reliable solution for long-lasting performance. Trust Clark and Sons for expertly crafted doors tailored to your needs.
                </p>
            </div>
        </div>
        <div class="row inner-hollow-handling-content desktop-single-door-sec">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center single-door-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/Left-Hand-Reverse-2.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <div class="text-content">
                        <h6>LHR</h6>
                        <p>Left Hand Reverse</p>
                    </div>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center single-door-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/left-hand.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <div class="text-content">
                        <h6>LH</h6>
                        <p>Left Hand</p>
                    </div>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center single-door-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/Right-Hand-2-1.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <div class="text-content">
                        <h6>RH</h6>
                        <p>Right Hand</p>
                    </div>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center single-door-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/Right-Hand-Reverse-2.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <div class="text-content">
                        <h6>RH</h6>
                        <p>Right Hand Reverse</p>
                    </div>
                </article>
            </div>
        </div>
        <div class="mobile-single-soor-sec mobile-slider-sec text-center">
            <div id="mobilSingleCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/Left-Hand-Reverse-2.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <h6>LHR</h6>
                            <p>Left Hand Reverse</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/left-hand.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <h6>LH</h6>
                            <p>Left Hand</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/Right-Hand-2-1.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <h6>RH</h6>
                            <p>Right Hand</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/Right-Hand-Reverse-2.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <h6>RH</h6>
                            <p>Right Hand Reverse</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mobilSingleCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mobilSingleCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mobilSingleCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#mobilSingleCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
            </div>
        </div>
        <!-- Double Door -->
        <div class="row double-door-section">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center handling-headings-section">
                <h2>Double Doors</h2>
                <p>
                    Our hollow metal double doors are built for strength, durability, and versatility, making them ideal for high-traffic areas. Designed for both interior and exterior use, these doors offer enhanced functionality with
                    options for fire-rated, soundproof, or insulated designs. Available in various sizes, gauges, and finishes, they are perfect for commercial, industrial, and institutional applications. With their robust construction and
                    customizable features, our double doors ensure security and long-lasting performance. Trust Clark and Sons for reliable and expertly crafted hollow metal door solutions.
                </p>
            </div>
        </div>
        <div class="row inner-hollow-double-content desktop-double-door-sec">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center double-door-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/Left-Hand-Reverse-Active.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <div class="text-content">
                        <h6>LHRA</h6>
                        <p>Left Hand Reverse Active</p>
                    </div>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center double-door-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/Left-Hand-Active.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <div class="text-content">
                        <h6>LHA</h6>
                        <p>Left Hand Active</p>
                    </div>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center double-door-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/Right-Hand-Active.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <div class="text-content">
                        <h6>RHA</h6>
                        <p>Right Hand Active</p>
                    </div>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center double-door-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/Right-Hand-Reverse-Active.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <div class="text-content">
                        <h6>RHRA</h6>
                        <p>Right Hand Reverse Active</p>
                    </div>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center double-door-box-section box-sec">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/Both-Active-Push_Pull.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <div class="text-content">
                        <h6>Both Active</h6>
                        <p>Push / Pull</p>
                    </div>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center double-door-box-section box-sec">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/Both-Active-Vertical-Rod.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <div class="text-content">
                        <h6>Both Active</h6>
                        <p>Vertical Rod Exit Devices</p>
                    </div>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 align-items-center double-door-box-section box-sec">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/residential-images/Both-Active-Rim-Exist.png')); ?>" class="img-fluid" width="265" height="343" alt="" loading="lazy" />
                    <div class="text-content">
                        <h6>Both Active</h6>
                        <p>RIM Exit Devices with Mullion</p>
                    </div>
                </article>
            </div>
        </div>
        <div class="mobile-double-soor-sec mobile-slider-sec text-center">
            <div id="mobilDoubleCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/Left-Hand-Reverse-Active.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <h6>LHRA</h6>
                            <p>Left Hand Reverse Active</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/Left-Hand-Active.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <h6>LHA</h6>
                            <p>Left Hand Active</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/Right-Hand-Active.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <h6>RHA</h6>
                            <p>Right Hand Active</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/Right-Hand-Reverse-Active.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <h6>RHRA</h6>
                            <p>Right Hand Reverse Active</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/Both-Active-Push_Pull.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <h6>Both Active</h6>
                            <p>Push / Pull</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/Both-Active-Vertical-Rod.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <h6>Both Active</h6>
                            <p>Vertical Rod Exit Devices</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/residential-images/Both-Active-Rim-Exist.png')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <h6>Both Active</h6>
                            <p>RIM Exit Devices with Mullion</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mobilDoubleCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mobilDoubleCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mobilDoubleCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#mobilDoubleCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#mobilDoubleCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#mobilDoubleCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#mobilDoubleCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="metal-door-frames-sec sandk-common sandk-common-padding sandk-inner-common">
    <div class="container-md">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 left-side">
                <img src="<?php echo e(asset('front-assets/src/images/Metal-Door-Frames-image.webp')); ?>" class="img-fluid" alt="" loading="lazy" width="777" height="350" />
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 right-side">
                <h2>Metal Door Frames</h2>
                <img src="<?php echo e(asset('front-assets/src/images/Metal-Door-Frames-image.webp')); ?>" class="img-fluid mobile-img" alt="" loading="lazy" width="777" height="350" />
                <p>
                    The frame products we offer include 16 and 14 gauge masonry frames and 16 and 18 gauge drywall frames in both standard and custom jamb depths. Also available are 18 gauge expandable drywall frames and 20 gauge interior
                    drywall frames. Fire-rated doors and frames play a vital role in keeping people safe and minimizing property damage during a fire. Hollow metal is the only door material widely available with a 3-hour label.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="metal-door-frame-config-section sandk-common sandk-common-padding sandk-inner-common">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center configurations-headings-section">
                <h2>Metal Door Frame Configuration</h2>
                <p>
                    Clark and Sons provides welded, knock-down, and custom-built metal door frames in a variety of gauges and finishes. These frames are designed to complement hollow metal doors, offering options like fire-rated and
                    soundproof configurations. Reinforced hardware preparations ensure added security and functionality. Perfect for commercial, industrial, and institutional use, our frames are durable and built for long-lasting
                    performance. Trust Clark and Sons to deliver reliable, customizable metal door frame solutions tailored to your needs.
                </p>
            </div>
        </div>
        <div class="row meta-door-frames-items-sec desktop-meta-frame-sec">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 align-items-center configurations-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/Drywall-HM-Frame-image.webp')); ?>" class="img-fluid" width="322" height="417" alt="" loading="lazy" />
                    <p>Drywall HM Frame</p>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 align-items-center configurations-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/Masonary-HM-Frame-image.webp')); ?>" class="img-fluid" width="322" height="417" alt="" loading="lazy" />
                    <p>Masonary HM Frame</p>
                </article>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 align-items-center configurations-box-section">
                <article>
                    <img src="<?php echo e(asset('front-assets/src/images/Welded-HM-Frame-image.webp')); ?>" class="img-fluid" width="322" height="417" alt="" loading="lazy" />
                    <p>Welded HM Frame - Block or Studs</p>
                </article>
            </div>
        </div>
        <div class="mobile-meta-frames-sec mobile-slider-sec text-center">
            <div id="mobilFramesCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/Drywall-HM-Frame-image.webp')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <p>Drywall HM Frame</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/Masonary-HM-Frame-image.webp')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <p>Masonary HM Frame</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <figure>
                            <a>
                                <img src="<?php echo e(asset('front-assets/src/images/Welded-HM-Frame-image.webp')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </a>
                        </figure>
                        <div class="text-sec">
                            <p>Welded HM Frame - Block or Studs</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mobilFramesCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mobilFramesCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mobilFramesCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
        </div>

        <div class="row align-items-center width-requirement-sec">
            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 left-side">
                <h2>Width Requirements</h2>
                <img src="<?php echo e(asset('front-assets/src/images/metal-door-Width-Requirements.webp')); ?>" class="img-fluid mobile-img" alt="" loading="lazy" width="635" height="476" />
                <p>
                    <strong>Clear Width: </strong> Door openings must provide a clear width of 32 inches minimum and 48 inches maximum. The measurement is taken between the door face and the stop, with the door open at 90 degrees. For
                    openings deeper than 24 inches, a minimum clear opening of 36 inches is required.
                </p>
                <p><strong>Exception: </strong> Doors operated solely by security personnel are exempt from compliance.</p>
                <p><strong>Double-Leaf Doors: </strong> For double doors, at least one active leaf must meet the clear width requirements to ensure accessibility and functionality.</p>
            </div>

            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 right-side">
                <img src="<?php echo e(asset('front-assets/src/images/metal-door-Width-Requirements.webp')); ?>" class="img-fluid" alt="" loading="lazy" width="635" height="476" />
            </div>
        </div>
    </div>
</section>

<section class="hollow-metal-door-hardware-section sandk-common sandk-common-padding">
    <div class="container-md">
        <div class="row desktop-metal-hardware-sec">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 top-heading-sec">
                <h2>Hollow Metal Door Hardware</h2>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 each-box">
                <div class="inner-sec">
                    <div class="item-image">
                        <img src="<?php echo e(asset('front-assets/src/images/Deadbolts-hardware-image.webp')); ?>" alt="" class="img-fluid" width="349" height="280" alt="" loading="lazy" />
                    </div>
                    <div class="item-name">
                        <h4>Deadbolts</h4>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 each-box">
                <div class="inner-sec">
                    <div class="item-image">
                        <img src="<?php echo e(asset('front-assets/src/images/Door-Closers-image.webp')); ?>" alt="" class="img-fluid" width="349" height="280" alt="" loading="lazy" />
                    </div>
                    <div class="item-name">
                        <h4>Door Closers</h4>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 each-box">
                <div class="inner-sec">
                    <div class="item-image">
                        <img src="<?php echo e(asset('front-assets/src/images/Exit-Devices-image.webp')); ?>" alt="" class="img-fluid" width="349" height="280" alt="" loading="lazy" />
                    </div>
                    <div class="item-name">
                        <h4>Exit Devices</h4>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 each-box">
                <div class="inner-sec">
                    <div class="item-image">
                        <img src="<?php echo e(asset('front-assets/src/images/Hinges-image.webp')); ?>" alt="" class="img-fluid" width="349" height="280" alt="" loading="lazy" />
                    </div>
                    <div class="item-name">
                        <h4>Hinges</h4>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 each-box">
                <div class="inner-sec">
                    <div class="item-image">
                        <img src="<?php echo e(asset('front-assets/src/images/Lockset-image.webp')); ?>" alt="" class="img-fluid" width="349" height="280" alt="" loading="lazy" />
                    </div>
                    <div class="item-name">
                        <h4>Lockset</h4>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 each-box">
                <div class="inner-sec">
                    <div class="item-image">
                        <img src="<?php echo e(asset('front-assets/src/images/Miscellaneous-parts-image.webp')); ?>" alt="" class="img-fluid" width="349" height="280" alt="" loading="lazy" />
                    </div>
                    <div class="item-name">
                        <h4>Miscellaneous parts</h4>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 each-box">
                <div class="inner-sec">
                    <div class="item-image">
                        <img src="<?php echo e(asset('front-assets/src/images/Push-Pull-Handles-Plates-image.webp')); ?>" alt="" class="img-fluid" width="349" height="280" alt="" loading="lazy" />
                    </div>
                    <div class="item-name">
                        <h4>Push Pull Handles & Plates</h4>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 each-box">
                <div class="inner-sec">
                    <div class="item-image">
                        <img src="<?php echo e(asset('front-assets/src/images/Stops-Holders-image.webp')); ?>" alt="" class="img-fluid" width="349" height="280" alt="" loading="lazy" />
                    </div>
                    <div class="item-name">
                        <h4>Stops & Holders</h4>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 each-box">
                <div class="inner-sec">
                    <div class="item-image">
                        <img src="<?php echo e(asset('front-assets/src/images/Stops-Holders-op-2.webp')); ?>" alt="" class="img-fluid" width="349" height="280" alt="" loading="lazy" />
                    </div>
                    <div class="item-name">
                        <h4>Stops & Holders</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-metal-hardware-sec mobile-slider-sec text-center">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 top-heading-sec">
                <h2>Hollow Metal Door Hardware</h2>
            </div>
            <div id="mobilHardwareCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item each-box active">
                       <div class="inner-sec">
                            <div class="item-image">
                                <img src="<?php echo e(asset('front-assets/src/images/Deadbolts-hardware-image.webp')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </div>
                            <div class="item-name">
                                <h4>Deadbolts</h4>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item each-box">
                        <div class="inner-sec">
                           <div class="item-image">
                                <img src="<?php echo e(asset('front-assets/src/images/Door-Closers-image.webp')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </div>
                            <div class="item-name">
                                <h4>Door Closers</h4>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item each-box">
                       <div class="inner-sec">
                            <div class="item-image">
                                <img src="<?php echo e(asset('front-assets/src/images/Exit-Devices-image.webp')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </div>
                            <div class="item-name">
                                <h4>Exit Devices</h4>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item each-box">
                       <div class="inner-sec">
                            <div class="item-image">
                                <img src="<?php echo e(asset('front-assets/src/images/Hinges-image.webp')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </div>
                            <div class="item-name">
                                <h4>Hinges</h4>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item each-box">
                       <div class="inner-sec">
                            <div class="item-image">
                                <img src="<?php echo e(asset('front-assets/src/images/Lockset-image.webp')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </div>
                            <div class="item-name">
                                <h4>Lockset</h4>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item each-box">
                       <div class="inner-sec">
                            <div class="item-image">
                                <img src="<?php echo e(asset('front-assets/src/images/Miscellaneous-parts-image.webp')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </div>
                            <div class="item-name">
                                <h4>Miscellaneous parts</h4>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item each-box">
                       <div class="inner-sec">
                            <div class="item-image">
                                <img src="<?php echo e(asset('front-assets/src/images/Push-Pull-Handles-Plates-image.webp')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </div>
                            <div class="item-name">
                                <h4>Push Pull Handles & Plates</h4>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item each-box">
                       <div class="inner-sec">
                            <div class="item-image">
                                <img src="<?php echo e(asset('front-assets/src/images/Stops-Holders-image.webp')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </div>
                            <div class="item-name">
                                <h4>Stops & Holders</h4>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item each-box">
                       <div class="inner-sec">
                            <div class="item-image">
                                <img src="<?php echo e(asset('front-assets/src/images/Stops-Holders-op-2.webp')); ?>" class="img-fluid normal-img" loading="lazy" alt="banner image" width="auto" height="auto" />
                            </div>
                            <div class="item-name">
                                <h4>Stops & Holders</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mobilHardwareCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mobilHardwareCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mobilHardwareCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#mobilHardwareCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#mobilHardwareCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#mobilHardwareCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#mobilHardwareCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#mobilHardwareCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    <button type="button" data-bs-target="#mobilHardwareCarousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="all-service-sections sandk-common sandk-common-padding sandk-inner-common">
    <div class="container-md">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center top-heading-sec">
                <h2>Commercial Service</h2>
            </div>
        </div>

        <div class="row planned-maintenance-programme-sec">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 left-side">
                <img src="<?php echo e(asset('front-assets/src/images/Planned-Maintenance-Programs-image.webp')); ?>" class="img-fluid" alt="" loading="lazy" width="777" height="350" />
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 right-side">
                <h2>Planned Maintenance Programs</h2>
                <img src="<?php echo e(asset('front-assets/src/images/Planned-Maintenance-Programs-image.webp')); ?>" class="img-fluid mobile-img" alt="" loading="lazy" width="777" height="350" />
                <p>
                    Clark and Sons specializes in Planned Maintenance Programs for Overhead Door, Dock, and Gate Equipment. Contact our team today to schedule your next PM inspection and ensure your equipment stays in top condition. Based on
                    usage, we may recommend inspection frequencies such as Monthly, Quarterly, Semi-Annually, Annually, or Bi-Annually. Each inspection includes a detailed report on your door’s health and recommended replacement parts.
                    Prefer to complete all work at once? No problem—we’re here to accommodate your schedule and make maintenance convenient for you
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center top-heading-sec">
                <h2>Replacement Parts & Service</h2>
            </div>
        </div>

        <div class="row commercial-emergency-service-sec">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 left-side">
                <h2>Commercial Emergency Service</h2>
                <img src="<?php echo e(asset('front-assets/src/images/Commercial-Emergency-Service-image.webp')); ?>" class="img-fluid mobile-img" alt="" loading="lazy" width="777" height="350" />
                <p>
                    At Clark and Sons, we’re here for you during any emergency—day or night, weekend or holiday, summer or winter. Our team works year-round to resolve your issues promptly and efficiently. Rely on our knowledgeable staff to
                    deliver exceptional service when you need it most. Transform your expectations with Clark and Sons reliable emergency solutions.
                </p>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 right-side">
                <img src="<?php echo e(asset('front-assets/src/images/Commercial-Emergency-Service-image.webp')); ?>" class="img-fluid" alt="" loading="lazy" width="777" height="350" />
            </div>
        </div>

        <!-- <div class="row makes-model-service-sec">
            <div class="col-xxl-9 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <h2>We service all makes and models of the following products:</h2>
                <ul>
                    <li>Sectional Overhead Doors</li>
                    <li>Rolling Steel Doors</li>
                    <li>Rolling Steel Security Grills</li>
                    <li>Fire Rated and Security Counter Shutters</li>
                    <li>Roll-Up Truck Doors</li>
                    <li>Traffic & Impact Doors</li>
                    <li>PVC Strip Curtain Doors</li>
                    <li>Full View Overhead Doors</li>
                    <li>Rolling Steel Fire Doors</li>
                    <li>Mini Warehouse Sheet Doors</li>
                    <li>Door & Gate Operators</li>
                    <li>High-Speed Doors</li>
                    <li>Hollow Metal Doors</li>
                </ul>
            </div>
        </div> -->

        <div class="row loading-dock-accessories-sec">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="models">
                    We service all makes and models <br />
                    of the following products:
                </h2>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 list-left">
                <ul class="two-column-list">
                    <li>Sectional Overhead Doors</li>
                    <li>Rolling Steel Doors</li>
                    <li>Rolling Steel Security Grills</li>
                    <li>Fire Rated and Security Counter Shutters</li>
                    <li>Roll-Up Truck Doors</li>
                    <li>Traffic & Impact Doors</li>
                    <li>PVC Strip Curtain Doors</li>
                </ul>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 list-right">
                <ul class="two-column-list">
                    <li>Full View Overhead Doors</li>
                    <li>Rolling Steel Fire Doors</li>
                    <li>Mini Warehouse Sheet Doors</li>
                    <li>Door & Gate Operators</li>
                    <li>High-Speed Doors</li>
                    <li>Hollow Metal Doors</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('frontend.includes.areas-sec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php echo $__env->make('frontend.includes.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php echo $__env->make('frontend.includes.quote-sec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php if(count($client_logo) > 0): ?> 
<?php echo $__env->make('frontend.includes.client-logo-sec', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php endif; ?> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/clarkandsonsdoors.com/public_html/resources/views/frontend/landing_page/hollow-metal-door.blade.php ENDPATH**/ ?>