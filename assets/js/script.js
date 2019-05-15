$(document).ready(function(){
   
   // Menu mobile
   $("button.navbar-toggle").click(function(){
      $(".navbar-header").hide();
      $("#topo #navbar ul").show().animate({width: '235px'});
      $("#topo #navbar li").slideDown(1000);
   });
   $("#topo #navbar .fa-times").click(function(){      
      $("#topo #navbar ul").animate({width: '0'}).hide(1000);
      $(".navbar-header").slideDown();
   });
   
   // Carousel
   $(".carousel-controls div").click(function(){
      toggleCarousel($(this).attr('data-slide-to'));
      $(this).addClass('active');
   });
});

function toggleCarousel(e) {
   // Oculta todos e remove active do button
   $('.carousel-item').hide();
   $('.carousel-controls div').removeClass('active');
   // Exibe o conteudo do elemento e
   $('div[data-slide=' + e +']').show();
}