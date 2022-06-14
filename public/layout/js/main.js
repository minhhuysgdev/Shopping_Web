// $('#sliderShuffle').cycle({
//     next: '#next',
//     prev: '#prev'
// });

// $('.owl-carousel').owlCarousel({
//     items: 4,
//     loop: true,
//     margin: 15,
//     autoplay: true,
//     autoplayTimeout: 3000, //3 Second
//     nav: true,
//     responsiveClass: true,
//     responsive: {
//         0: {
//             items: 1,
//             nav: true
//         },
//         600: {
//             items: 3,
//             nav: true
//         },
//         1000: {
//             items: 4,
//             nav: true
//         }
//     }

// });

// $(function () {

//     $(".sp-wrap").smoothproducts();
// });
// function closeMenu() {
//     const toggle = document.querySelector(".toggle");
//     const menu = document.querySelector(".menu");
//     toggle.classList.toggle("active");
//     menu.classList.toggle("active2");
// }
// /*-------------------
//        Quantity change
//    --------------------- */
// (function ($) {
//     var proQty = $('.pro-qty');
//     proQty.prepend('<span class="dec qtybtn">-</span>');
//     proQty.append('<span class="inc qtybtn">+</span>');
//     proQty.on('click', '.qtybtn', function () {
//         var $button = $(this);
//         var oldValue = $button.parent().find('input').val();
//         if ($button.hasClass('inc')) {
//             var newVal = parseFloat(oldValue) + 1;
//         } else {
//             // Don't allow decrementing below zero
//             if (oldValue > 0) {
//                 var newVal = parseFloat(oldValue) - 1;
//             } else {
//                 newVal = 0;
//             }
//         }
//         $button.parent().find('input').val(newVal);
//     });
// })(jQuery);
// /*header*/
// $(document).ready(function () {
//     //hieu ung click cua mainmenu
//     $(".menu-item>a").click(function (e) {
//         $(".active").removeClass("active1");
//         $(this).addClass("active1");
//     });
//     /*quantity  change in cart*/

//     document.querySelector(".minus-btn").setAttribute("disable", "disable");
//     var valueCount;
//     //plus button
//     document.querySelector(".plus-btn").addEventListener("click", function () {

//         //getting value of input 
//         valueCount = document.getElementById("quantityValue").value;
//         valueCount++;
//         //setting increment input value
//         document.getElementById("quantityValue").value = valueCount;
//         if (valueCount > 1) {
//             document.querySelector(".minus-btn").removeAttribute("disable");
//             document.querySelector(".minus-btn").classList.remove("disable");
//         }

//     })
//     //minus button
//     document.querySelector(".minus-btn").addEventListener("click", function () {

//         //getting value of input 
//         valueCount = document.getElementById("quantityValue").value;
//         valueCount--;
//         //setting increment input value
//         document.getElementById("quantityValue").value = valueCount;
//         if (valueCount == 1) {
//             document.querySelector(".minus-btn").setAttribute("disable", "disable");
//         }

//     })
// })
