// main animation images
$(function(){
  setInterval(function(){
    $(".header-image-animation li:last-child").animate(
      {opacity: 0},
      800,
      "linear",
      function(){
       $(".header-image-animation li:last-child").prependTo(".header-image-animation");
       $(".header-image-animation li:first-child").css({"opacity":1});
     }
   );
 },4000);
});
