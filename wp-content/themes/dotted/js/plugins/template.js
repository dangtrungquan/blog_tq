(function($) {"use strict";
  

  $('.number-3').parents('.relate-post').addClass('show-nav');
  //Preloader
  $(window).load(function() {
      $('.images-preloader').fadeOut();
  });

  $(window).load(function(){
    $('.mm-listview').removeClass('dropdown-menu');
  });

  $('.full-masonry-layout').masonry({
    // options
    itemSelector: '.grid-item',
    gutter: 15
  });
    
    
  /* 
   Backtotop
   ========================================================================== */
  var offset = 450;
  var duration = 500;   
  $(window).on('scroll', function(){
       if ($(this).scrollTop() > offset) {
              $('#to-the-top').fadeIn(duration);
          } else {
              $('#to-the-top').fadeOut(duration);
          }
  });

  $('#to-the-top').on('click', function(event){
      event.preventDefault();
      $('html, body').animate({scrollTop: 0}, duration);
      return false;
  });



  /* 
    DebouncedResize Function
     ========================================================================== */

    (function ($) { 
      var $event = $.event, 
        $special, 
        resizeTimeout;
      
      
      $special = $event.special.debouncedresize = { 
        setup : function () { 
          $(this).on('resize', $special.handler);
        }, 
        teardown : function () { 
          $(this).off('resize', $special.handler);
        }, 
        handler : function (event, execAsap) { 
          var context = this, 
            args = arguments, 
            dispatch = function () { 
              event.type = 'debouncedresize';
              
              $event.dispatch.apply(context, args);
            };
          
          
          if (resizeTimeout) {
            clearTimeout(resizeTimeout);
          }
          
          
          execAsap ? dispatch() : resizeTimeout = setTimeout(dispatch, $special.threshold);
        }, 
        threshold : 150 
      };
    } )(jQuery);
  
   
  
     
   $('.progress .progress-bar').progressbar({
      update: function(current_percentage, $this) {
          $this.parent().parent().find(".update-h").html(current_percentage  + '%');
      }
    });

   $('.counter').counterUp({
        delay: 10,
        time: 2000
    });

  //Slider Blog Widget

  $('.slider8').bxSlider({
    mode: 'vertical',
    auto:true,
    slideWidth: 300,
    minSlides: 2,
    slideMargin: 10,
    moveSlides: 1,
    controls:false,
    speed: 500,
    pause: 5000,
    pager:false
  });

})(jQuery);