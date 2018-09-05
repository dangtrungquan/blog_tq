(function($) {"use strict";

/* ==========================================================================
   Owl Blog Landing
   ========================================================================== */
$("#owl-blog-landing").owlCarousel({
           
  autoPlay: false , //Set AutoPlay to 3 seconds
  items : 3,
  itemsDesktop      : [1199,3],
  itemsDesktopSmall     : [979,3],
  itemsTablet       : [768,2],
  itemsMobile       : [479,1],
  pagination:true,
  navigation:false,
});
/* 

/* 
   Core Feature
   ========================================================================== */
$("#owl-core-feature").owlCarousel({
           
  autoPlay: false, //Set AutoPlay to 3 seconds
  items : 3,
  itemsDesktop      : [1199,3],
  itemsDesktopSmall     : [979,3],
  itemsTablet       : [768,2],
  itemsMobile       : [479,1],
  pagination:false,
  navigation:false,
});
var owlCoreFeature = $("#owl-core-feature");
// Custom Navigation Events

$("body").on("click",".next-core-feature",function(event){
owlCoreFeature.trigger("owl.next");
});
$("body").on("click",".prev-core-feature",function(event){
owlCoreFeature.trigger("owl.prev");
});


/* ==========================================================================
   Blog Gallery Post Type
   ========================================================================== */
$("#owl-gallery-blog-post").owlCarousel({
           
        autoPlay: true, //Set AutoPlay to 3 seconds
        items : 1,
        itemsDesktop      : [1199,1],
        itemsDesktopSmall     : [979,1],
        itemsTablet       : [768,1],
        itemsMobile       : [479,1],
        pagination:false,
        navigation:false,
        transitionStyle : "fade"
    });
var owlGalleryBlogPost = $("#owl-gallery-blog-post");
// Custom Navigation Events

$("body").on("click",".next-image",function(event){
  owlGalleryBlogPost.trigger("owl.next");
});
$("body").on("click",".prev-image",function(event){
  owlGalleryBlogPost.trigger("owl.prev");
});
/* ==========================================================================
   Relate Blog
   ========================================================================== */
$("#owl-relate-blog").owlCarousel({
           
    autoPlay: true, //Set AutoPlay to 3 seconds
    items : 3,
    itemsDesktop      : [1199,3],
    itemsDesktopSmall     : [979,2],
    itemsTablet       : [768,2],
    itemsMobile       : [479,1],
    pagination:false,
    navigation:false,
});
var owlRelateBlog = $("#owl-relate-blog");
// Custom Navigation Events

$("body").on("click",".prev-relate-blog",function(event){
  owlRelateBlog.trigger("owl.next");
});
$("body").on("click",".next-relate-blog",function(event){
  owlRelateBlog.trigger("owl.prev");
});

/* ==========================================================================
   Portfolio Gallery Post Type
   ========================================================================== */
$("#owl-gallery-portfolio-post").owlCarousel({
           
    autoPlay: true, //Set AutoPlay to 3 seconds
    items : 1,
    itemsDesktop      : [1199,1],
    itemsDesktopSmall     : [979,1],
    itemsTablet       : [768,1],
    itemsMobile       : [479,1],
    pagination:true,
    navigation:false,
    transitionStyle : "fade"
});
var owlGalleryPortfolioPost = $("#owl-gallery-portfolio-post");
// Custom Navigation Events

$("body").on("click",".next-portfolio-image",function(event){
  owlGalleryPortfolioPost.trigger("owl.next");
});
$("body").on("click",".prev-portfolio-image",function(event){
  owlGalleryPortfolioPost.trigger("owl.prev");
});

/* ==========================================================================
   Relate Blog
   ========================================================================== */
$("#owl-relate-portfolio").owlCarousel({
           
    autoPlay: true, //Set AutoPlay to 3 seconds
    items : 3,
    itemsDesktop      : [1199,3],
    itemsDesktopSmall     : [979,3],
    itemsTablet       : [768,2],
    itemsMobile       : [479,1],
    pagination:false,
    navigation:false,
});
var owlRelatePortfolio = $("#owl-relate-portfolio");
// Custom Navigation Events

$("body").on("click",".prev-relate-portfolio",function(event){
  owlRelatePortfolio.trigger("owl.next");
});
$("body").on("click",".next-relate-portfolio",function(event){
  owlRelatePortfolio.trigger("owl.prev");
});


})(jQuery);