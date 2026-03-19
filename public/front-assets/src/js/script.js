// var loadimages=[];function preloadImages(){var loadedCount=0;for(var i=0;i<arguments.length;i++){loadimages[i]=new Image();loadimages[i].src=preloadImages.arguments[i];loadimages[i].onload=function(){loadedCount++;if(loadedCount===arguments.length){setTimeout(function(){$('.garage-door-popup-button').fadeIn(200)},500)}}}}
// $(document).ready(function(){var fixedPosition=270;$(window).scroll(function(){if($(window).scrollTop()>fixedPosition){$('.need-new-garage-door.desktop').fadeIn(400)}else{$('.need-new-garage-door.desktop').fadeOut(300)}});var stickyButton=$('.garage-door-popup-button');var fadeInDuration=200;var fadeOutDuration=200;var scrollThreshold=200;var showDelay=1000;var hideDelay=2000;$(window).scroll(function(){if($(this).scrollTop()>scrollThreshold){stickyButton.fadeIn(fadeInDuration);clearTimeout($.data(this,'scrollTimer'));$.data(this,'scrollTimer',setTimeout(function(){stickyButton.fadeOut(fadeOutDuration)},hideDelay))}});setTimeout(function(){stickyButton.fadeIn(fadeInDuration);setTimeout(function(){stickyButton.fadeOut(fadeOutDuration)},hideDelay)},showDelay)});$('.logo-mobile-images').owlCarousel({nav:!1,navText:!1,dot:!0,margin:10,loop:!1,autoplay:!1,responsive:{0:{items:1,loop:!0,autoplay:!0},480:{items:1},768:{items:2}}});$('.for-mobile-features').owlCarousel({loop:!0,responsiveClass:!0,nav:!1,margin:0,autoplay:!0,autoplayTimeout:4000,smartSpeed:400,center:!0,navText:['&#8592;','&#8594;'],responsive:{0:{items:1,},600:{items:1},1200:{items:5}}});$('.mobile-gallery-sec').owlCarousel({nav:!1,navText:!1,dot:!0,margin:10,loop:!1,autoplay:!1,responsive:{0:{items:1,loop:!1,autoplay:!0},480:{items:1,loop:!1,autoplay:!0},768:{items:2}}});$('.desktop-gallery').magnificPopup({delegate:'figure a',type:'image',removalDelay:500,callbacks:{beforeOpen:function(){this.st.image.markup=this.st.image.markup.replace('mfp-figure','mfp-figure mfp-with-anim');this.st.mainClass=this.st.el.attr('data-effect')}},tLoading:'Loading image #%curr%...',mainClass:'mfp-img-mobile',gallery:{enabled:!0,navigateByImgClick:!0,preload:[0,1]},image:{tError:'<a href="%url%">The image #%curr%</a> could not be loaded.',titleSrc:function(item){return item.el.attr('title')+'<small></small>'}}});$('.mobile-gallery-sec-main').magnificPopup({delegate:'figure a',type:'image',removalDelay:500,callbacks:{beforeOpen:function(){this.st.image.markup=this.st.image.markup.replace('mfp-figure','mfp-figure mfp-with-anim');this.st.mainClass=this.st.el.attr('data-effect')}},tLoading:'Loading image #%curr%...',mainClass:'mfp-img-mobile',gallery:{enabled:!0,navigateByImgClick:!0,preload:[0,1]},image:{tError:'<a href="%url%">The image #%curr%</a> could not be loaded.',titleSrc:function(item){return item.el.attr('title')+'<small></small>'}}});$('.gallery-page').magnificPopup({delegate:'figure a',type:'image',removalDelay:500,callbacks:{beforeOpen:function(){this.st.image.markup=this.st.image.markup.replace('mfp-figure','mfp-figure mfp-with-anim');this.st.mainClass=this.st.el.attr('data-effect')}},tLoading:'Loading image #%curr%...',mainClass:'mfp-img-mobile',gallery:{enabled:!0,navigateByImgClick:!0,preload:[0,1]},image:{tError:'<a href="%url%">The image #%curr%</a> could not be loaded.',titleSrc:function(item){return item.el.attr('title')+'<small></small>'}}});$('.navbar-toggler').on('click',function(){if($('.header-menu-mobile').hasClass("show")){$('.header-menu-mobile').removeClass('show');$('.open-icon').show()}else{$('.header-menu-mobile').addClass('show');$('.open-icon').show()}});window.onscroll=function(){myFunction()};var headerMobile=document.getElementById("myHeader_mobile");var header=document.getElementById("myHeader");var stickyMobile=headerMobile.offsetTop;var sticky=header.offsetTop;function myFunction(){if(window.pageYOffset>stickyMobile){headerMobile.classList.add("sticky")}else{headerMobile.classList.remove("sticky")}
// if(window.pageYOffset>sticky){header.classList.add("sticky")}else{header.classList.remove("sticky")}}
// $(document).ready(function(){function updateDropdownAttributes(){if($(window).width()>767){$('nav ul li.dropdown a.dropdown-a').not('.header-menu-mobile li.dropdown a.dropdown-a').attr('data-bs-toggle','');$('nav .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').not('.header-menu-mobile .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').attr('data-bs-toggle','')}else{$('nav ul li.dropdown a.dropdown-a').not('.header-menu-mobile li.dropdown a.dropdown-a').attr('data-bs-toggle','dropdown');$('nav .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').not('.header-menu-mobile .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').attr('data-bs-toggle','dropdown')}}
// updateDropdownAttributes();$(window).resize(updateDropdownAttributes)});function attachMenuEventListeners(){const primaryMenuItems=document.querySelectorAll('.mobile-header .dropdown > a');primaryMenuItems.forEach(function(menuItem){menuItem.addEventListener('click',handleMenuItemClick)});const dropdowns=document.querySelectorAll('.mobile-header .dropdown');dropdowns.forEach(function(dropdown){const subMenu=dropdown.querySelector('.mobile-header .dropdown-menu');if(subMenu){const parentTitle=dropdown.querySelector('a').innerText;createBackLink(subMenu,parentTitle);dropdown.querySelector('a').addEventListener('click',function(event){event.preventDefault();dropdown.classList.add('active');subMenu.classList.add('active')});const nestedDropdowns=subMenu.querySelectorAll('.mobile-header .dropdown');nestedDropdowns.forEach(function(nestedDropdown){const nestedSubMenu=nestedDropdown.querySelector('.mobile-header .dropdown-menu');if(nestedSubMenu){const nestedParentTitle=nestedDropdown.querySelector('a').innerText;createBackLink(nestedSubMenu,nestedParentTitle);nestedDropdown.querySelector('a').addEventListener('click',handleMenuItemClick)}});subMenu.querySelectorAll('li > a').forEach(function(link){if(link.nextElementSibling&&link.nextElementSibling.classList.contains('dropdown-menu')){link.addEventListener('click',handleMenuItemClick)}})}})}
// function handleMenuItemClick(event){event.preventDefault();const subMenu=this.nextElementSibling;if(subMenu&&subMenu.classList.contains('dropdown-menu')){subMenu.classList.toggle('active');const siblingSubMenus=this.parentElement.parentElement.querySelectorAll('.mobile-header .dropdown-menu.active');siblingSubMenus.forEach(function(siblingMenu){if(siblingMenu!==subMenu){siblingMenu.classList.remove('active')}})}else{window.location.href=this.href}}
// function createBackLink(subMenu,parentTitle){if(!subMenu.dataset.backLinkAdded){const backLinkHTML=`
//         <li class="nav-back-item">
//           <a class="nav-back-link" href="javascript:;">Back</a>
//         </li>
//         <li class="menu-title dropdown-menu-title-tag">${parentTitle}</li>
//       `;subMenu.insertAdjacentHTML('afterbegin',backLinkHTML);subMenu.dataset.backLinkAdded=!0;subMenu.querySelector('.nav-back-link').addEventListener('click',function(){subMenu.classList.remove('active');subMenu.parentElement.classList.remove('active')})}}
// attachMenuEventListeners();$(document).on("click",".mobile-close-icon-new",function(){$('.header-menu-mobile').removeClass('show');$('.header-menu-mobile').load(window.location.href+' .header-menu-mobile > *',function(){attachMenuEventListeners()})})

var loadimages = [];

function preloadImages() {
   var loadedCount = 0;
   for (var i = 0; i < arguments.length; i++) {
      loadimages[i] = new Image();
      loadimages[i].src = preloadImages.arguments[i];
      loadimages[i].onload = function () {
         loadedCount++;
         if (loadedCount === arguments.length) {
            setTimeout(function () {
               $('.garage-door-popup-button').fadeIn(200)
            }, 500)
         }
      }
   }
}
$(document).ready(function () {
   var fixedPosition = 270;
   $(window).scroll(function () {
      if ($(window).scrollTop() > fixedPosition) {
         $('.need-new-garage-door.desktop').fadeIn(400)
      } else {
         $('.need-new-garage-door.desktop').fadeOut(300)
      }
   });
   var stickyButton = $('.garage-door-popup-button');
   var fadeInDuration = 200;
   var fadeOutDuration = 200;
   var scrollThreshold = 200;
   var showDelay = 1000;
   var hideDelay = 2000;
   $(window).scroll(function () {
      if ($(this).scrollTop() > scrollThreshold) {
         stickyButton.fadeIn(fadeInDuration);
         clearTimeout($.data(this, 'scrollTimer'));
         $.data(this, 'scrollTimer', setTimeout(function () {
            stickyButton.fadeOut(fadeOutDuration)
         }, hideDelay))
      }
   });
   setTimeout(function () {
      stickyButton.fadeIn(fadeInDuration);
      setTimeout(function () {
         stickyButton.fadeOut(fadeOutDuration)
      }, hideDelay)
   }, showDelay)
});
// $('.logo-mobile-images').owlCarousel({
//    nav: !1,
//    navText: !1,
//    dot: !0,
//    margin: 10,
//    loop: !1,
//    autoplay: !1,
//    responsive: {
//       0: {
//          items: 1,
//          loop: !0,
//          autoplay: !0
//       },
//       480: {
//          items: 1
//       },
//       768: {
//          items: 2
//       }
//    }
// });

	$(window).on('load', function () {
var $carousel = $('.logo-mobile-images');
var itemCount = $carousel.find('figure').length;
$carousel.owlCarousel({
   nav: false,
   navText: false,
   dots: itemCount > 5,
   margin: 30,
   loop: true,
   autoplay: itemCount > 5,
   responsive: {
      0: {
         center: true,
         items: 4.5,
         loop: true,
         autoplay: true,
         margin: 30,
         dots: false,
         autoWidth: true,
         autoplayTimeout: 1500,
         autoplaySpeed: 600,  
         loop:true,

      },
      480: {
           center: true,
         items: 4.5,
         loop: true,
         autoplay: true,
         margin: 30,
         dots: false,
         autoWidth: true,
         autoplayTimeout: 1500,
         autoplaySpeed: 600,  
         loop:true,
      },


      576: { // ✅ NEW: applies from 576px to 767px
           center: true,
         items: 4.5,
         loop: true,
         autoplay: true,
         margin: 30,
         dots: false,
         autoWidth: true,
         autoplayTimeout: 1500,
         autoplaySpeed: 600,  
         loop:true,
      },

     

      768: {
         items: 2
      },
      992: {
         items: 3
      },
      1200: {
         items: 3
      },
      1500: {
         items: 5
      },
      1800: {
         items: 5
      }
   }
});
});


$('.blog-carousel').owlCarousel({
   loop: true,
   center: true,
   margin: 0,
   nav: true,

   dots: true,
   dotsEach: true,
   autoplay: true,
   responsive: {
      0: {
         items: 1,
         dots:false,
         loop:true,
         stagePadding:30,
         dots:false,
         margin:15,

      },
      480: {
         items: 1,
         dots:false,
         loop:true,
         stagePadding:50,
         dots:false,
         margin:15,
      },
      1000: {
         items: 1
      }
   }
})


$('.mobile-service-sec .left-side .left-side-tab-items').owlCarousel({
   loop: true,
   responsiveClass: !0,
   nav: !1,
   margin: 0,
   autoplay: false,
   autoplayTimeout: 4000,
   autoHeight: false, 
   smartSpeed: 400,
   navText: ['←', '→'],
   responsive: {
      0: {
         items: 1,
         center: false,
         margin:15,
         dots:false,
         stagePadding:30,
         loop: true,
      },
      480:{
        items: 1,
      margin: 15,
      dots: false,
      stagePadding: 50,
      center: false,   // 🔥 FIX
      loop: true

      },

      768: {
         items: 2,
         center: 0,
         margin: 10,
      },
      1200: {
         items: 5
      }
   }
});



















$('.for-mobile-features').owlCarousel({
   loop: !0,
   responsiveClass: !0,
   nav: !1,
   margin: 0,
   autoplay: !0,
   autoplayTimeout: 4000,
   smartSpeed: 400,
   center: !0,
   navText: ['←', '→'],
   responsive: {
      0: {
         items: 1,
      },
      600: {
         items: 1
      },
      1200: {
         items: 5
      }
   }
});



// $('.mobile-gallery-sec').owlCarousel({
//    nav: !1,
//    navText: !1,
//    dot: !0,
//    margin: 10,
//    loop: !1,
//    autoplay: !1,
//    responsive: {
//       0: {
//          items: 1,
//          autoplay: !0,
//          dots:false,
//          stagePadding:28,
//          loop: true,
//          center:true,
//          margin: 14,
//       },
//       480: {
//          items: 1,
//          autoplay: !0,
//          dots:false,
//          stagePadding:50,
//          loop: true,
//          center:true,
//          margin: 14,
//       },
//       768: {
//          items: 2
//       }
//    }
// });

/* =========================
   MAIN MOBILE GALLERY
========================= */
$('.mobile-gallery-sec').owlCarousel({
   nav: false,
   dots: true,
   margin: 10,
   loop: false,
   autoplay: false,
   responsive: {
      0: {
         items: 1,
         autoplay: true,
         dots: false,
         stagePadding: 28,
         loop: true,
         center: true,
         margin: 14,
      },
      480: {
         items: 1,
         autoplay: true,
         dots: false,
         stagePadding: 50,
         loop: true,
         center: true,
         margin: 14,
      },
      768: {
         items: 2
      }
   }
});


/* =========================
   POPUP SLIDER INIT
========================= */
var popupWrapper = $('#customGalleryPopup');
var popupSlider  = $('#popupGallerySlider');

/* INIT SLIDER */
popupSlider.owlCarousel({
   items: 1,
   loop: true,
   nav: true,
   dots: true,
   autoplay: false,
   navText:[
      '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>',
      '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>'
   ]
});


/* =========================
   OPEN POPUP
========================= */
$(document).on('click', '.open-gallery-popup', function () {

   var index = $(this).data('index');

   // SHOW POPUP
   popupWrapper.addClass('is-open');

   // refresh + go to clicked slide
   popupSlider
      .trigger('refresh.owl.carousel')
      .trigger('to.owl.carousel', [index, 0, true]);
});


/* =========================
   CLOSE POPUP
========================= */
$(document).on('click', '.popup-close, .popup-overlay', function () {
   popupWrapper.removeClass('is-open');
});







// ========================


$('.desktop-gallery').magnificPopup({
   delegate: 'figure a',
   type: 'image',
   removalDelay: 500,
   callbacks: {
      beforeOpen: function () {
         this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
         this.st.mainClass = this.st.el.attr('data-effect')
      }
   },
   tLoading: 'Loading image #%curr%...',
   mainClass: 'mfp-img-mobile',
   gallery: {
      enabled: !0,
      navigateByImgClick: !0,
      preload: [0, 1]
   },
   image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function (item) {
         return item.el.attr('title') + '<small></small>'
      }
   }
});



// $('.mobile-gallery-sec-main').magnificPopup({
//    delegate: 'figure a',
//    type: 'image',
//    removalDelay: 500,
//    callbacks: {
//       beforeOpen: function () {
//          this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
//          this.st.mainClass = this.st.el.attr('data-effect')
//       }
//    },
//    tLoading: 'Loading image #%curr%...',
//    mainClass: 'mfp-img-mobile',
//    gallery: {
//       enabled: !0,
//       navigateByImgClick: !0,
//       preload: [0, 1]
//    },
//    image: {
//       tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
//       titleSrc: function (item) {
//          return item.el.attr('title') + '<small></small>'
//       }
//    }
// });
$('.gallery-page').magnificPopup({
   delegate: 'figure a',
   type: 'image',
   removalDelay: 500,
   callbacks: {
      beforeOpen: function () {
         this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
         this.st.mainClass = this.st.el.attr('data-effect')
      }
   },
   tLoading: 'Loading image #%curr%...',
   mainClass: 'mfp-img-mobile',
   gallery: {
      enabled: !0,
      navigateByImgClick: !0,
      preload: [0, 1]
   },
   image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function (item) {
         return item.el.attr('title') + '<small></small>'
      }
   }
});
$('.navbar-toggler').on('click', function () {
   if ($('.header-menu-mobile').hasClass("show")) {
      $('.header-menu-mobile').removeClass('show');
      $('.open-icon').show()
   } else {
      $('.header-menu-mobile').addClass('show');
      $('.open-icon').show()
   }
});
window.onscroll = function () {
   myFunction()
};
var headerMobile = document.getElementById("myHeader_mobile");
var header = document.getElementById("myHeader");
var stickyMobile = headerMobile.offsetTop;
var sticky = header.offsetTop;

function myFunction() {
   if (window.pageYOffset > stickyMobile) {
      headerMobile.classList.add("sticky")
   } else {
      headerMobile.classList.remove("sticky")
   }
   if (window.pageYOffset > sticky) {
      header.classList.add("sticky")
   } else {
      header.classList.remove("sticky")
   }
}
$(document).ready(function () {
   function updateDropdownAttributes() {
      if ($(window).width() > 767) {
         $('nav ul li.dropdown a.dropdown-a').not('.header-menu-mobile li.dropdown a.dropdown-a').attr('data-bs-toggle', '');
         $('nav .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').not('.header-menu-mobile .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').attr('data-bs-toggle', '')
      } else {
         $('nav ul li.dropdown a.dropdown-a').not('.header-menu-mobile li.dropdown a.dropdown-a').attr('data-bs-toggle', 'dropdown');
         $('nav .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').not('.header-menu-mobile .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').attr('data-bs-toggle', 'dropdown')
      }
   }
   updateDropdownAttributes();
   $(window).resize(updateDropdownAttributes)
});

function attachMenuEventListeners() {
   const primaryMenuItems = document.querySelectorAll('.mobile-header .dropdown > a');
   primaryMenuItems.forEach(function (menuItem) {
      menuItem.addEventListener('click', handleMenuItemClick)
   });
   const dropdowns = document.querySelectorAll('.mobile-header .dropdown');
   dropdowns.forEach(function (dropdown) {
      const subMenu = dropdown.querySelector('.mobile-header .dropdown-menu');
      if (subMenu) {
         const parentTitle = dropdown.querySelector('a').innerText;
         createBackLink(subMenu, parentTitle);
         dropdown.querySelector('a').addEventListener('click', function (event) {
            event.preventDefault();
            dropdown.classList.add('active');
            subMenu.classList.add('active')
         });
         const nestedDropdowns = subMenu.querySelectorAll('.mobile-header .dropdown');
         nestedDropdowns.forEach(function (nestedDropdown) {
            const nestedSubMenu = nestedDropdown.querySelector('.mobile-header .dropdown-menu');
            if (nestedSubMenu) {
               const nestedParentTitle = nestedDropdown.querySelector('a').innerText;
               createBackLink(nestedSubMenu, nestedParentTitle);
               nestedDropdown.querySelector('a').addEventListener('click', handleMenuItemClick)
            }
         });
         subMenu.querySelectorAll('li > a').forEach(function (link) {
            if (link.nextElementSibling && link.nextElementSibling.classList.contains('dropdown-menu')) {
               link.addEventListener('click', handleMenuItemClick)
            }
         })
      }
   })
}

function handleMenuItemClick(event) {
   event.preventDefault();
   const subMenu = this.nextElementSibling;
   if (subMenu && subMenu.classList.contains('dropdown-menu')) {
      subMenu.classList.toggle('active');
      const siblingSubMenus = this.parentElement.parentElement.querySelectorAll('.mobile-header .dropdown-menu.active');
      siblingSubMenus.forEach(function (siblingMenu) {
         if (siblingMenu !== subMenu) {
            siblingMenu.classList.remove('active')
         }
      })
   } else {
      window.location.href = this.href
   }
}

function createBackLink(subMenu, parentTitle) {
   if (!subMenu.dataset.backLinkAdded) {
      const backLinkHTML = `
        <li class="nav-back-item">
          <a class="nav-back-link" href="javascript:;">Back</a>
        </li>
        <li class="menu-title dropdown-menu-title-tag">${parentTitle}</li>
      `;
      subMenu.insertAdjacentHTML('afterbegin', backLinkHTML);
      subMenu.dataset.backLinkAdded = !0;
      subMenu.querySelector('.nav-back-link').addEventListener('click', function () {
         subMenu.classList.remove('active');
         subMenu.parentElement.classList.remove('active')
      })
   }
}
attachMenuEventListeners();
$(document).on("click", ".mobile-close-icon-new", function () {
   $('.header-menu-mobile').removeClass('show');
   $('.header-menu-mobile').load(window.location.href + ' .header-menu-mobile > *', function () {
      attachMenuEventListeners()
   })
})