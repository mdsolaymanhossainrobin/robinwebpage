/*

Template name: Me ( Wordpress version )
Author: Magna Themes
Support: http://www.magna-themes.com/support

Table of contents:
------------------

                  1. Page scroll
                  2. Portfolio: show hidden details
                  3. Portfolio: load and show item page
                  4. Portfolio: filtering elements
                  5. Animate social icons
                  6. Show/hide the secondary menu
                  7. Notifiaction boxes

*/

$(window).load(function() {

     /*  1. Navigation system
     ==========================================*/
     $('ul.menu li a, div#hidden_items ul li a,  a.scroll_down, a.scroll_top').click(function(){
               var id = $(this).attr("href");
               $('html,body').stop().animate({scrollTop: $("div"+id).offset().top},'slow', function(){
                         if ( navigator.userAgent.indexOf('iPad') != -1 ) {
                                   var yPos = window.pageYOffset;
                                   var $fixedElement = $('div#hidden_menu');
                                   $fixedElement.css({ "position": "relative" });
                                   window.scroll(0,yPos);
                                   $fixedElement.css({ "position": "fixed" });
                         }
               });

     return false;
     });

     /*-- Activate superfish plugin --*/
     $('ul.menu').superfish({
               delay: 500, // one second delay on mouseout
               animation: {opacity:'show',height:'show'},  // fade-in and slide-down animation
               speed: '300', // faster animation speed
               autoArrows:  false, //keep it false:)
               disableHI: false, // set to true to disable hoverIntent detection
               onInit:        function(){}, // callback function fires once Superfish is initialised – 'this' is the containing ul
               onBeforeShow:  function(){}, // callback function fires just before reveal animation begins – 'this' is the ul about to open
               onShow:        function(){}, // callback function fires once reveal animation completed – 'this' is the opened ul
               onHide:        function(){}  // callback function fires after a sub-menu has closed – 'this' is the ul that just closed
     });


     /*  2. Portfolio: show/hide details
     ==========================================*/
     var show_effect = 'clip'; //select the animation type: 'blind', 'clip', 'drop','explode','fade','fold','scale','slide'
     var hide_effect = 'clip'; //select the animation type: 'blind', 'clip', 'drop','explode','fade','fold','scale','slide'
     $('ul.sortablePortfolio li .item_content ').hoverIntent(
               function(){ $(this).find('div.hidden').stop().show(show_effect, 200); return false; },
               function(){ $(this).find('div.hidden').stop().hide(hide_effect, 100); return false; }
     );


     /*  3. Portfolio: load and show item page
     ==========================================*/
     $("ul.sortablePortfolio li a.information").click( function(){
               var source = $(this).attr("href");
               $("div#filter_wrapper").slideUp(300, function(){
                          $('div#portfolio_loading').css("display" , "block");
                          $('html,body').animate({scrollTop: $("div#portfolio").offset().top},'slow', function(){
                                    $('div.item_container').load(source, function(){
                                              $('div#portfolio_loading').css("display" , "none");
                                              $('div.item').slideDown(500,function(){
                                                        $('.slideshow').flexslider({controlNav: false});
                                                        $('div.item a.close, div.item a.close_full').click( function(){
                                                                  $(this).parent('div.item').slideUp(300, function(){
                                                                            $('div.item_container').empty();
                                                                            $("div#filter_wrapper").slideDown(300);
                                                                  });
                                                       return false;
                                                       }); //click() ends
                                              }); //slideDown ends
                                    }); //load() ends
                          }); //animate ends
               }); //slideUp ends
     return false;
     });
     
     /*  4. Portfolio: filtering elements
     ==========================================*/
     var $filterType = $('#filterOptions li.active a').attr('class');
     var $holder = $('ul.sortablePortfolio');
     var $data = $holder.clone();

     $('#portfolioFilter li a').click(function(e) {

               $('#portfolioFilter li').removeClass('active');
               var $filterType = $(this).attr('class');
               $(this).parent().addClass('active');

               if ($filterType == 'all') {
                         var $filteredData = $data.find('li');
               } else {
                      var $filteredData = $data.find('li[data-type=' + $filterType + ']');
                      }

               $holder.quicksand($filteredData, {
                         duration: 800,
                         adjustHeight: 'auto'
               }, function() {
                              $('ul.sortablePortfolio li .item_content ').hoverIntent(
                                        function(){ $(this).find('div.hidden').stop().show(show_effect, 200); return false; },
                                        function(){ $(this).find('div.hidden').stop().hide(hide_effect, 100); return false; }
                              );
                              if ( information != "none" ) {
                                        $("a.information").tipTip({ delay: 100, content: information });
                              }
                              if ( visit != "none" ) {
                                        $("a.link").tipTip({ delay: 100, content: visit });
                              }

                              $("ul.sortablePortfolio li a.information").click( function(){
                                        var source = $(this).attr("href");
                                        $("div#filter_wrapper").slideUp(300, function(){
                                                  $('div#portfolio_loading').css("display" , "block");
                                                  $('html,body').animate({scrollTop: $("div#portfolio").offset().top},'slow', function(){
                                                            $('div.item_container').load(source, function(){
                                                                      $('div#portfolio_loading').css("display" , "none");
                                                                      $('div.item').slideDown(500,function(){
                                                                                $('.slideshow').flexslider({controlNav: false});
                                                                                $('div.item a.close, div.item a.close_full').click( function(){
                                                                                          $(this).parent('div.item').slideUp(300, function(){
                                                                                                    $('div.item_container').empty();
                                                                                                    $("div#filter_wrapper").slideDown(300);
                                                                                          });
                                                                                return false;
                                                                                }); //click() ends
                                                                      }); //slideDown ends
                                                            }); //load() ends
                                                  }); //animate ends
                                        }); //slideUp ends
                              return false;
                              });
                             }

               );
               return false;
     });
     
     /*  5. Animate social icons
     ==========================================*/
     $('#contact_info ul.social_icons li').hover(
               
               function(){
               $(this).find('img').stop().animate({marginTop: "-7px"},600);
               return false;
               },
               
               function(){
               $(this).find('img').stop().animate({marginTop: "0px"},600);
               return false;
               }
     );

});

$(document).ready(function(){

     if ( information != "none" ) {
               $("a.information").tipTip({ delay: 100, content: information });
     }
     if ( visit != "none" ) {
               $("a.link").tipTip({ delay: 100, content: visit });
     }

     /*  6. Show/hide the secondary menu
     ==========================================*/
     $(window).scroll(function(){
               var pagetop = $(this).scrollTop();
               if (pagetop >= 450) {
                         $('div#hidden_menu').slideDown();
               }
               if (pagetop <= 450) {
                         $('div#hidden_menu').slideUp();
               }
     });
     
     /*  7. Notifiaction boxes
     ==========================================*/
     $(".success a").click(function(){ $("div.success").fadeOut("slow"); return false; });
     $(".error a").click(function(){ $("div.error").fadeOut("slow"); return false; });
     $(".alert a").click(function(){ $("div.alert").fadeOut("slow"); return false; });
     $(".remember a").click(function(){ $("div.remember").fadeOut("slow"); return false; });




});