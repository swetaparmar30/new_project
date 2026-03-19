// Preload images
var loadimages = [];
function preloadImages() {
  var loadedCount = 0;
  for (var i = 0; i < arguments.length; i++) {
    loadimages[i] = new Image();
    loadimages[i].src = preloadImages.arguments[i];
    loadimages[i].onload = function() {
      loadedCount++;
      // Check if all images are loaded
      if (loadedCount === arguments.length) {
        // Show the button after a delay once all images are loaded
        setTimeout(function() {
          $('.garage-door-popup-button').fadeIn(200);
        }, 500); // Adjust the delay as needed
      }
    };
  }
}
// preloadImages(
//   "/images/full-open-door.webp",
//   "/images/open-door-frame-2.webp",
//   "/images/open-door-frame-3.webp",
//   "/images/open-door-frame-4.webp",
//   "/images/full-close-door.webp"
// );


$(document).ready(function(){
    
    // if (window.history && window.history.pushState) {

    // window.history.pushState('forward', null, './#forward');

    // $(window).on('popstate', function() {
    //   alert('Back button was pressed.');
    // });

  //}

  // const form = document.getElementById('ContactForm');
  // const name = document.getElementById('name');
  // const email = document.getElementById('email');
  
  // //Show input error messages
  // function showError(input, message) {
  //     const formControl = input.parentElement;
  //     formControl.className = 'form-group error';
  //     const small = formControl.querySelector('small');
  //     small.innerText = message;
  // }
  
  // //show success colour
  // function showSucces(input) {
  //     const formControl = input.parentElement;
  //     formControl.className = 'form-group success';
  // }
  
  // //check email is valid
  // function checkEmail(input) {
  //     const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  //     if(re.test(input.value.trim())) {
  //         showSucces(input)
  //     }else {
  //         showError(input,'Email is not invalid');
  //     }
  // }
  
  
  // //checkRequired fields
  // function checkRequired(inputArr) {
  //     inputArr.forEach(function(input){
  //         if(input.value.trim() === ''){
  //             showError(input,`${getFieldName(input)} is required`)
  //         }else {
  //             showSucces(input);
  //         }
  //     });
  // }
  
  
  // //check input Length
  // function checkLength(input, min ,max) {
  //     if(input.value.length < min) {
  //         showError(input, `${getFieldName(input)} must be at least ${min} characters`);
  //     }else if(input.value.length > max) {
  //         showError(input, `${getFieldName(input)} must be les than ${max} characters`);
  //     }else {
  //         showSucces(input);
  //     }
  // }
  
  // //get FieldName
  // function getFieldName(input) {
  //     return input.id.charAt(0).toUpperCase() + input.id.slice(1);
  // }
  
  // //Event Listeners
  // form.addEventListener('submit',function(e) {
  //     e.preventDefault();
  
  //     checkRequired([name, email]);
  //     checkLength(name,3,15);
  //     checkEmail(email);
  // });

var fixedPosition = 270; 

$(window).scroll(function(){
    if ($(window).scrollTop() > fixedPosition) {
        $('.need-new-garage-door.desktop').fadeIn(400);
    } else {
        $('.need-new-garage-door.desktop').fadeOut(300);
    }
});

//  -------- For Mobile -------
var stickyButton = $('.garage-door-popup-button');
var fadeInDuration = 200;
var fadeOutDuration = 200;
var scrollThreshold = 200; // Scroll threshold in pixels
var showDelay = 1000; // Time in milliseconds before showing the button
var hideDelay = 2000; // Time in milliseconds before hiding the button

$(window).scroll(function() {
  if ($(this).scrollTop() > scrollThreshold) {
    stickyButton.fadeIn(fadeInDuration);
    clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function() {
      stickyButton.fadeOut(fadeOutDuration);
    }, hideDelay));
  }
});

setTimeout(function() {
  stickyButton.fadeIn(fadeInDuration);
  setTimeout(function() {
    stickyButton.fadeOut(fadeOutDuration);
  }, hideDelay);
}, showDelay);


});


$('.logo-mobile-images').owlCarousel({
		nav:      false,
		navText:  false,
    dot: true,
		margin:   10,
		loop:     false,
		autoplay: false,
		responsive:{
			0:{
				items:1,
                loop: true,
		        autoplay: true
			},
			480:{
					items:1
			},
			768:{
					items:2
			}
		}
});
$('.for-mobile-features').owlCarousel({
        
        loop: true,
        responsiveClass: true,
        nav: false,
        margin: 0,  
        autoplay: true,  
        autoplayTimeout: 4000,
        smartSpeed: 400,
        center: true,
        navText: ['&#8592;', '&#8594;'],
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

$('.mobile-gallery-sec').owlCarousel({
    nav:      false,
    navText:  false,
    dot: true,
    margin:   10,
    loop:     false,
    autoplay: false,
    responsive:{
        0:{
            items:1,
            loop: false,
            autoplay: true
        },
        480:{
          items:1,
          loop: false,
          autoplay: true
        },
        768:{
                items:2
        }
    }
});


$('.desktop-gallery').magnificPopup({
            delegate: 'figure a',
            type: 'image',
            removalDelay: 500, //delay removal by X to allow out-animation
            callbacks: {
                beforeOpen: function () {
                    // just a hack that adds mfp-anim class to markup 
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function (item) {
                    return item.el.attr('title') + '<small></small>';
                }
            }
        });

        $('.mobile-gallery-sec-main').magnificPopup({
            delegate: 'figure a',
            type: 'image',
            removalDelay: 500, //delay removal by X to allow out-animation
            callbacks: {
                beforeOpen: function () {
                    // just a hack that adds mfp-anim class to markup 
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function (item) {
                    return item.el.attr('title') + '<small></small>';
                }
            }
        });
// $('.photo-gallery-sec').magnificPopup({
//             delegate: 'figure a',
//             type: 'image',
//             removalDelay: 500, //delay removal by X to allow out-animation
//             callbacks: {
//                 beforeOpen: function () {
//                     // just a hack that adds mfp-anim class to markup 
//                     this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
//                     this.st.mainClass = this.st.el.attr('data-effect');
//                 }
//             },
//             tLoading: 'Loading image #%curr%...',
//             mainClass: 'mfp-img-mobile',
//             gallery: {
//                 enabled: true,
//                 navigateByImgClick: true,
//                 preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
//             },
//             image: {
//                 tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
//                 titleSrc: function (item) {
//                     return item.el.attr('title') + '<small></small>';
//                 }
//             }
//         });

$('.gallery-page').magnificPopup({
  delegate: 'figure a',
  type: 'image',
  removalDelay: 500, //delay removal by X to allow out-animation
  callbacks: {
      beforeOpen: function () {
          // just a hack that adds mfp-anim class to markup 
          this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
          this.st.mainClass = this.st.el.attr('data-effect');
      }
  },
  tLoading: 'Loading image #%curr%...',
  mainClass: 'mfp-img-mobile',
  gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
  },
  image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function (item) {
          return item.el.attr('title') + '<small></small>';
      }
  }
});







$('.navbar-toggler').on('click', function() {
  if ($('.header-menu-mobile').hasClass("show")) {
      $('.header-menu-mobile').removeClass('show');
      $('.open-icon').show();
      // $('.close-icon').hide();
  } else {
      $('.header-menu-mobile').addClass('show');
      $('.open-icon').show();
      // $('.close-icon').show();
  }
});

// window.onscroll = function() {myFunction()};
    
// var header = document.getElementById("myHeader_mobile");
// var sticky = header.offsetTop;
        
// function myFunction() {
//     if (window.pageYOffset > sticky) {
//         header.classList.add("sticky");
//     } else {
//         header.classList.remove("sticky");
//     }
// }



// window.onscroll = function() {myFunction()};
    
// var header = document.getElementById("myHeader");
// var sticky = header.offsetTop;
        
// function myFunction() {
//     if (window.pageYOffset > sticky) {
//         header.classList.add("sticky");
//     } else {
//         header.classList.remove("sticky");
//     }
// }

window.onscroll = function() { myFunction(); };

var headerMobile = document.getElementById("myHeader_mobile");
var header = document.getElementById("myHeader");

var stickyMobile = headerMobile.offsetTop;
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > stickyMobile) {
        headerMobile.classList.add("sticky");
    } else {
        headerMobile.classList.remove("sticky");
    }

    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}



// $(document).ready(function() {
//   function updateDropdownAttributes() {
//       if ($(window).width() > 767) {
//         $('nav ul li.dropdown a.dropdown-a').attr('data-bs-toggle', '');
//           $('nav .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').attr('data-bs-toggle', '');
//       } else {
//         $('nav ul li.dropdown a.dropdown-a').attr('data-bs-toggle', 'dropdown');
//           $('nav .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').attr('data-bs-toggle', 'dropdown');
//       }
//   }

//   // Run on page load
//   updateDropdownAttributes();

//   // Run on window resize
//   $(window).resize(function() {
//       updateDropdownAttributes();
//   });
  
  
// });


$(document).ready(function() {
  function updateDropdownAttributes() {
    if ($(window).width() > 767) {
      $('nav ul li.dropdown a.dropdown-a').not('.header-menu-mobile li.dropdown a.dropdown-a').attr('data-bs-toggle', '');
      $('nav .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').not('.header-menu-mobile .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').attr('data-bs-toggle', '');
    } else {
      $('nav ul li.dropdown a.dropdown-a').not('.header-menu-mobile li.dropdown a.dropdown-a').attr('data-bs-toggle', 'dropdown');
      $('nav .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').not('.header-menu-mobile .dropdown-menu li.dropdown a.dropdown-a.dropdown-sub-a').attr('data-bs-toggle', 'dropdown');
    }
  }
  

  // Initial call
  updateDropdownAttributes();

  // Update on window resize
  $(window).resize(updateDropdownAttributes);
});






// $(document).ready(function() {
//   $( ".submenu" ).on( "click", function() {
//       $(".submenu.active-parent").not(this).removeClass('active-parent');
//       $(this).toggleClass('active-parent');
//       $(".dropdown-menu").not($(this).next('.dropdown-menu')).hide();
//       $(this).next('.dropdown-menu').toggle();




      


//   });


// $(".sub-dropdown-arrow").on("click", function(e) {
//    $(".sub-dropdown-arrow").not(this).removeClass('active-parent');
//   $(this).toggleClass('active-parent');
//   $(".sub-dropdown-menu").not($(this).next('.dropdown-menu')).hide();
//   $(this).next('.sub-dropdown-menu').toggle();
// });


// });



// // Click event for submenu
// $(".submenu").on("click", function() {
//   // Remove active classes from other submenus and their dropdowns
//   $(".submenu.active-parent").not(this).removeClass('active-parent');
//   $(".dropdown-menu.active-drop").not($(this).next('.dropdown-menu')).removeClass('active-drop').hide();

//   // Toggle active class for clicked submenu and its dropdown
//   $(this).toggleClass('active-parent');
//   $(this).next('.dropdown-menu').toggle().toggleClass('active-drop', $(this).hasClass('active-parent'));

 


// });

// // Click event for submenu
// $(".sub-dropdown-arrow").on("click", function() {
//   // Remove active classes from other submenus and their dropdowns
//   $(".sub-dropdown-arrow.active-parent").not(this).removeClass('active-parent');
//   $(".dropdown-menu.active-drop").not($(this).next('.dropdown-menu')).removeClass('active-drop').hide();

//   // Toggle active class for clicked submenu and its dropdown
//   $(this).toggleClass('active-parent');
//   $(this).next('.dropdown-menu').toggle().toggleClass('active-drop', $(this).hasClass('active-parent'));
// });


// $(".sub-dropdown-arrow").on("click", function(e) {
//   $(".sub-dropdown-arrow").not(this).removeClass('active-parent');
//   $(this).toggleClass('active-parent');
//   $(".sub-dropdown-menu").not($(this).next('.dropdown-menu')).hide();
//   $(this).next('.sub-dropdown-menu').toggle();
// });





/* ============ New Mobile Header ============= */

// $('.mobile-close-icon-new').on('click', function() {
//   $('.header-menu-mobile.show').removeClass('show');
//   $('.header-menu-mobile').load(window.location.href + ' .header-menu-mobile > *');
// });



// $(document.addEventListener('DOMContentLoaded', function() {
//   var headerMenu = document.getElementById('myHeader_mobile');
//   var menuItems = document.querySelectorAll('.header-menu-mobile .dropdown > a');
//   var navExpand = [].slice.call(document.querySelectorAll('.header-menu-mobile .dropdown'));


//   menuItems.forEach(function(item) {
//     item.addEventListener('click', function(event) {
//       event.preventDefault();
//       var subMenu = this.nextElementSibling;
//       subMenu.classList.toggle('active');

//     });
//   });
// }));



// console.clear()

// const navExpand = [].slice.call(document.querySelectorAll('.header-menu-mobile .dropdown'))
// const backLink = `<li class="nav-back-item">
// 	<a class="nav-back-link" href="javascript:;">
// 		Back
// 	</a>
// </li> `;
// console.log(navExpand);
// navExpand.forEach(item => {
//   console.log(item);
//   if (item.closest('.header-menu-mobile')) {
//     console.log(item);
//   var subMenu = item.querySelector('.dropdown-menu');

//     var parentTitle = item.querySelector('a').innerText;
//     const backLink = `<li class="nav-back-item">
//       <a class="nav-back-link" href="javascript:;">Back</a>
//     </li>
//     <li class="menu-title dropdown-menu-title-tag">${parentTitle}</li>`;

//     var mainLink = item.querySelector('.header-menu-mobile .dropdown-menu a');
//     var backLinkElement = subMenu.querySelector('.nav-back-link');

//     item.querySelector('.header-menu-mobile .dropdown-menu').insertAdjacentHTML('afterbegin', backLink);
    
//     item.querySelector('.header-menu-mobile .dropdown a').addEventListener('click', function(event) {
//       event.preventDefault();
//       item.classList.add('active');
//       // item.classList.toggle('active');
//     });
//     item.querySelector('.nav-back-link').addEventListener('click', function() {
//       item.classList.remove('active');
//       $('.dropdown-menu.active').removeClass('active');
//     });
//   }

//   });


// document.addEventListener('DOMContentLoaded', function() {
//   var menuItems = document.querySelectorAll('.header-menu-mobile .dropdown > a');
  
//   menuItems.forEach(function(item) {
//     item.addEventListener('click', function(event) {
//       event.preventDefault();
//       var subMenu = this.nextElementSibling;
//       subMenu.classList.toggle('active');
//     });
//   });

//   const navExpand = [].slice.call(document.querySelectorAll('.header-menu-mobile .dropdown'));
//   const backLinkHTML = `
//     <li class="nav-back-item">
//       <a class="nav-back-link" href="javascript:;">Back</a>
//     </li>
//   `;
  
//   navExpand.forEach(item => {
//     if (item.closest('.header-menu-mobile')) {
//       var subMenu = item.querySelector('.dropdown-menu');
//       var parentTitle = item.querySelector('a').innerText;
//       const menuTitleHTML = `
//         <li class="menu-title dropdown-menu-title-tag">${parentTitle}</li>
//       `;
      
//       subMenu.insertAdjacentHTML('afterbegin', backLinkHTML + menuTitleHTML);
      
//       item.querySelector('a').addEventListener('click', function(event) {
//         event.preventDefault();
//         item.classList.add('active');
//       });
      
//       item.querySelector('.nav-back-link').addEventListener('click', function() {
//         item.classList.remove('active');
//         subMenu.classList.remove('active');
//       });
//     }
//   });
// });

// document.addEventListener('DOMContentLoaded', function() {
//   // Select all primary menu items with submenus
//   const primaryMenuItems = document.querySelectorAll('.header-menu-mobile .dropdown > a');

//   // Add click event listener to each primary menu item
//   primaryMenuItems.forEach(function(menuItem) {
//     menuItem.addEventListener('click', function(event) {
//       event.preventDefault();
//       const subMenu = this.nextElementSibling;
//       if (subMenu && subMenu.classList.contains('dropdown-menu')) {
//         subMenu.classList.toggle('active');
//       }
//     });
//   });

//   // Function to create back link and title for submenus
//   function createBackLink(subMenu, parentTitle) {
//     const backLinkHTML = `
//       <li class="nav-back-item">
//         <a class="nav-back-link" href="javascript:;">Back</a>
//       </li>
//       <li class="menu-title dropdown-menu-title-tag">${parentTitle}</li>
//     `;
//     subMenu.insertAdjacentHTML('afterbegin', backLinkHTML);

//     // Add event listener to back link
//     subMenu.querySelector('.nav-back-link').addEventListener('click', function() {
//       subMenu.classList.remove('active');
//       subMenu.parentElement.classList.remove('active');
//     });
//   }

//   // Select all dropdowns
//   const dropdowns = document.querySelectorAll('.header-menu-mobile .dropdown');

//   dropdowns.forEach(function(dropdown) {
//     if (dropdown.closest('.header-menu-mobile')) {
//       const subMenu = dropdown.querySelector('.dropdown-menu');
//       if (subMenu) {
//         const parentTitle = dropdown.querySelector('a').innerText;
//         createBackLink(subMenu, parentTitle);

//         // Add click event listener to dropdown links
//         dropdown.querySelector('a').addEventListener('click', function(event) {
//           event.preventDefault();
//           dropdown.classList.add('active');
//           subMenu.classList.add('active');
//         });
//       }
//     }
//   });
// });




// document.addEventListener('DOMContentLoaded', function() {
//   // Function to handle click events on menu items
//   function handleMenuItemClick(event) {
//     event.preventDefault();
//     const subMenu = this.nextElementSibling;
//     if (subMenu && subMenu.classList.contains('dropdown-menu')) {
//       subMenu.classList.toggle('active');
//     }
//   }

//   function createBackLink(subMenu, parentTitle) {
//     // Check if back link already exists
//     if (!subMenu.dataset.backLinkAdded) {
//       const backLinkHTML = `
//         <li class="nav-back-item">
//           <a class="nav-back-link" href="javascript:;">Back</a>
//         </li>
//         <li class="menu-title dropdown-menu-title-tag">${parentTitle}</li>
//       `;
//       subMenu.insertAdjacentHTML('afterbegin', backLinkHTML);
//       subMenu.dataset.backLinkAdded = true; // Mark as added

//       // Add event listener to back link
//       subMenu.querySelector('.nav-back-link').addEventListener('click', function() {
//         subMenu.classList.remove('active');
//         subMenu.parentElement.classList.remove('active');
//       });
//     }
//   }

//   // Add event listeners to primary menu items
//   const primaryMenuItems = document.querySelectorAll('.header-menu-mobile .dropdown > a');
//   primaryMenuItems.forEach(function(menuItem) {
//     menuItem.addEventListener('click', handleMenuItemClick);
//   });

//   // Add event listeners and back links to all dropdowns
//   const dropdowns = document.querySelectorAll('.header-menu-mobile .dropdown');
//   dropdowns.forEach(function(dropdown) {
//     if (dropdown.closest('.header-menu-mobile')) {
//       const subMenu = dropdown.querySelector('.dropdown-menu');
//       if (subMenu) {
//         const parentTitle = dropdown.querySelector('a').innerText;
//         createBackLink(subMenu, parentTitle);

//         // Add click event listener to dropdown links
//         dropdown.querySelector('a').addEventListener('click', function(event) {
//           event.preventDefault();
//           dropdown.classList.add('active');
//           subMenu.classList.add('active');
//         });

//         // Add event listeners to nested dropdowns recursively
//         const nestedDropdowns = subMenu.querySelectorAll('.dropdown');
//         nestedDropdowns.forEach(function(nestedDropdown) {
//           const nestedSubMenu = nestedDropdown.querySelector('.dropdown-menu');
//           if (nestedSubMenu) {
//             const nestedParentTitle = nestedDropdown.querySelector('a').innerText;
//             createBackLink(nestedSubMenu, nestedParentTitle);
//             nestedDropdown.querySelector('a').addEventListener('click', handleMenuItemClick);
//           }
//         });
//       }
//     }
//   });
// });


// document.addEventListener('DOMContentLoaded', function() {
//   // Function to handle click events on menu items
//   function handleMenuItemClick(event) {
//     event.preventDefault();
//     const subMenu = this.nextElementSibling;
//     if (subMenu && subMenu.classList.contains('dropdown-menu')) {
//       subMenu.classList.toggle('active');
//     }
//   }

//   // Function to create back link and title for submenus
//   function createBackLink(subMenu, parentTitle) {
//     // Check if back link already exists
//     if (!subMenu.dataset.backLinkAdded) {
//       const backLinkHTML = `
//         <li class="nav-back-item">
//           <a class="nav-back-link" href="javascript:;">Back</a>
//         </li>
//         <li class="menu-title dropdown-menu-title-tag">${parentTitle}</li>
//       `;
//       subMenu.insertAdjacentHTML('afterbegin', backLinkHTML);
//       subMenu.dataset.backLinkAdded = true; // Mark as added

//       // Add event listener to back link
//       subMenu.querySelector('.nav-back-link').addEventListener('click', function() {
//         subMenu.classList.remove('active');
//         subMenu.parentElement.classList.remove('active');
//       });
//     }
//   }

//   // Add event listeners to primary menu items
//   const primaryMenuItems = document.querySelectorAll('.header-menu-mobile .dropdown > a');
//   primaryMenuItems.forEach(function(menuItem) {
//     menuItem.addEventListener('click', handleMenuItemClick);
//   });

//   // Add event listeners and back links to all dropdowns
//   const dropdowns = document.querySelectorAll('.header-menu-mobile .dropdown');
//   dropdowns.forEach(function(dropdown) {
//     if (dropdown.closest('.header-menu-mobile')) {
//       const subMenu = dropdown.querySelector('.dropdown-menu');
//       if (subMenu) {
//         const parentTitle = dropdown.querySelector('a').innerText;
//         createBackLink(subMenu, parentTitle);

//         // Add click event listener to dropdown links
//         dropdown.querySelector('a').addEventListener('click', function(event) {
//           event.preventDefault();
//           dropdown.classList.add('active');
//           subMenu.classList.add('active');
//         });

//         // Add event listeners to nested dropdowns recursively
//         const nestedDropdowns = subMenu.querySelectorAll('.dropdown');
//         nestedDropdowns.forEach(function(nestedDropdown) {
//           const nestedSubMenu = nestedDropdown.querySelector('.dropdown-menu');
//           if (nestedSubMenu) {
//             const nestedParentTitle = nestedDropdown.querySelector('a').innerText;
//             createBackLink(nestedSubMenu, nestedParentTitle);
//             nestedDropdown.querySelector('a').addEventListener('click', handleMenuItemClick);
//           }
//         });

//         // Prevent immediate redirection for links that have submenus
//         subMenu.querySelectorAll('li > a').forEach(function(link) {
//           if (link.nextElementSibling && link.nextElementSibling.classList.contains('dropdown-menu')) {
//             link.addEventListener('click', handleMenuItemClick);
//           }
//         });
//       }
//     }
//   });
// });

// document.addEventListener('DOMContentLoaded', function() {
//   // Function to handle click events on menu items
//   function handleMenuItemClick(event) {
//     event.preventDefault();
//     const subMenu = this.nextElementSibling;
//     if (subMenu && subMenu.classList.contains('dropdown-menu')) {
//       subMenu.classList.toggle('active');
//     } else {
//       window.location.href = this.href; // If no submenu, follow the link
//     }
//   }

//   // Function to create back link and title for submenus
//   function createBackLink(subMenu, parentTitle) {
//     // Check if back link already exists
//     if (!subMenu.dataset.backLinkAdded) {
//       const backLinkHTML = `
//         <li class="nav-back-item">
//           <a class="nav-back-link" href="javascript:;">Back</a>
//         </li>
//         <li class="menu-title dropdown-menu-title-tag">${parentTitle}</li>
//       `;
//       subMenu.insertAdjacentHTML('afterbegin', backLinkHTML);
//       subMenu.dataset.backLinkAdded = true; // Mark as added

//       // Add event listener to back link
//       subMenu.querySelector('.nav-back-link').addEventListener('click', function() {
//         subMenu.classList.remove('active');
//         subMenu.parentElement.classList.remove('active');
//       });
//     }
//   }

//   // Add event listeners to primary menu items
//   const primaryMenuItems = document.querySelectorAll('.header-menu-mobile .dropdown > a');
//   primaryMenuItems.forEach(function(menuItem) {
//     menuItem.addEventListener('click', handleMenuItemClick);
//   });

//   // Add event listeners and back links to all dropdowns
//   const dropdowns = document.querySelectorAll('.header-menu-mobile .dropdown');
//   dropdowns.forEach(function(dropdown) {
//     if (dropdown.closest('.header-menu-mobile')) {
//       const subMenu = dropdown.querySelector('.dropdown-menu');
//       if (subMenu) {
//         const parentTitle = dropdown.querySelector('a').innerText;
//         createBackLink(subMenu, parentTitle);

//         // Add click event listener to dropdown links
//         dropdown.querySelector('a').addEventListener('click', function(event) {
//           event.preventDefault();
//           dropdown.classList.add('active');
//           subMenu.classList.add('active');
//         });

//         // Add event listeners to nested dropdowns recursively
//         const nestedDropdowns = subMenu.querySelectorAll('.dropdown');
//         nestedDropdowns.forEach(function(nestedDropdown) {
//           const nestedSubMenu = nestedDropdown.querySelector('.dropdown-menu');
//           if (nestedSubMenu) {
//             const nestedParentTitle = nestedDropdown.querySelector('a').innerText;
//             createBackLink(nestedSubMenu, nestedParentTitle);
//             nestedDropdown.querySelector('a').addEventListener('click', handleMenuItemClick);
//           }
//         });

//         // Prevent immediate redirection for links that have submenus
//         subMenu.querySelectorAll('li > a').forEach(function(link) {
//           if (link.nextElementSibling && link.nextElementSibling.classList.contains('dropdown-menu')) {
//             link.addEventListener('click', handleMenuItemClick);
//           }
//         });
//       }
//     }
//   });
// });




 function attachMenuEventListeners() {
    const primaryMenuItems = document.querySelectorAll('.mobile-header .dropdown > a');
    primaryMenuItems.forEach(function(menuItem) {
      menuItem.addEventListener('click', handleMenuItemClick);
    });

    const dropdowns = document.querySelectorAll('.mobile-header .dropdown');
    dropdowns.forEach(function(dropdown) {
      const subMenu = dropdown.querySelector('.mobile-header .dropdown-menu');
      if (subMenu) {
        const parentTitle = dropdown.querySelector('a').innerText;
        createBackLink(subMenu, parentTitle);

        dropdown.querySelector('a').addEventListener('click', function(event) {
          event.preventDefault();
          dropdown.classList.add('active');
          subMenu.classList.add('active');
        });

        const nestedDropdowns = subMenu.querySelectorAll('.mobile-header .dropdown');
        nestedDropdowns.forEach(function(nestedDropdown) {
          const nestedSubMenu = nestedDropdown.querySelector('.mobile-header .dropdown-menu');
          if (nestedSubMenu) {
            const nestedParentTitle = nestedDropdown.querySelector('a').innerText;
            createBackLink(nestedSubMenu, nestedParentTitle);
            nestedDropdown.querySelector('a').addEventListener('click', handleMenuItemClick);
          }
        });

        subMenu.querySelectorAll('li > a').forEach(function(link) {
          if (link.nextElementSibling && link.nextElementSibling.classList.contains('dropdown-menu')) {
            link.addEventListener('click', handleMenuItemClick);
          }
        });
      }
    });
  }

  // Function to handle click events on menu items
  function handleMenuItemClick(event) {
    event.preventDefault();
    const subMenu = this.nextElementSibling;
    if (subMenu && subMenu.classList.contains('dropdown-menu')) {
      subMenu.classList.toggle('active');
      const siblingSubMenus = this.parentElement.parentElement.querySelectorAll('.mobile-header .dropdown-menu.active');
      siblingSubMenus.forEach(function(siblingMenu) {
        if (siblingMenu !== subMenu) {
          siblingMenu.classList.remove('active');
        }
      });
    } else {
      window.location.href = this.href;
    }
  }

  // Function to create back link and title for submenus
  function createBackLink(subMenu, parentTitle) {
    if (!subMenu.dataset.backLinkAdded) {
      const backLinkHTML = `
        <li class="nav-back-item">
          <a class="nav-back-link" href="javascript:;">Back</a>
        </li>
        <li class="menu-title dropdown-menu-title-tag">${parentTitle}</li>
      `;
      subMenu.insertAdjacentHTML('afterbegin', backLinkHTML);
      subMenu.dataset.backLinkAdded = true;

      subMenu.querySelector('.nav-back-link').addEventListener('click', function() {
        subMenu.classList.remove('active');
        subMenu.parentElement.classList.remove('active');
      });
    }
  }

  // Initial attachment of event listeners
  attachMenuEventListeners();

  // Handle the close and reload action
    $(document).on("click",".mobile-close-icon-new",function() {
    $('.header-menu-mobile').removeClass('show');

    // Reload the content inside the '.header-menu-mobile' div and reattach event listeners
    $('.header-menu-mobile').load(window.location.href + ' .header-menu-mobile > *', function() {
      attachMenuEventListeners(); // Reattach event listeners after reload
    });
  });



// $(".accordion-button").click(function() {
//   $('html, body').animate({
//       scrollTop: $(".accordion-collapse").offset().top - 200
//   });
// });




// $(".accordion-button").click(function() {
//   var target = $(this).attr("data-bs-target"); // Get the target accordion ID

//   // Wait for the accordion to expand/collapse, then scroll
//   setTimeout(function() {
//     $('html, body').animate({
//       scrollTop: $(target).offset().top - 200
//     }, 500); // Adjust the scroll speed if needed
//   }, 300); // Adjust the delay to match the bootstrap collapse transition duration (usually 300ms)
// });




  

