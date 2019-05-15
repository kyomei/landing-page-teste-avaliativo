$(document).ready(function(){
   $("button.navbar-toggle").click(function(){
      $(".navbar-header").hide();
      $("#topo #navbar ul").show().animate({width: '235px'});
      $("#topo #navbar li").slideDown(1000);
   });
   $("#topo #navbar .fa-times").click(function(){      
      $("#topo #navbar ul").animate({width: '0'}).hide(1000);
      $(".navbar-header").slideDown();
   });
});