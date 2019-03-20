/*sliders*/ 
$(document).ready(function() {

  $('.about-us-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    infinite: false,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 3000
  });

  $('.center').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3
  });

  $('.pop').slick({
    centerMode: true,
    centerPadding: '10px',
    slidesToShow: 1,
    arrows: true,
    dots: true,
    infinite: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          centerMode: true,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

  /*menu toggle*/ 
  $('.header-menu-nav').hide();  
  $('.header-menu').click(function() {
      $('.header-menu-nav').slideToggle("slow");     
    });

  /*color*/
  var scroll_pos = 0;
  $(document).scroll(function() { 
      scroll_pos = $(this).scrollTop();
      if(scroll_pos > 680) {
          $("header").css('background-color', 'rgba(0,0,0,1)');
          $("header").css('height', '90px');
          $(".header-logo").css('top','15px');
          $(".header-menu").css('top','20px');
      } else {
          $("header").css('background-color', 'rgba(0,0,0,0)');
          $("header").css('height', '130px');
          $(".header-logo").css('top','40px');
          $(".header-menu").css('top','40px');
      }
  });

  /*SOUND, ILUMINATION & PHOGRAPHY PAGES*/
  $('.slider-images').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    centerMode: true,
    focusOnSelect: true,
    variableWidth: true,
    arrows: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2200
  });

  /*COLLAPSE FORM*/
  /*icons*/
  $("#collapseone").on("hide.bs.collapse", function() {
    $("#colapseonetrigger").html('TUS DATOS <i class="fa fa-plus"></i>');
  });
  $("#collapseone").on("show.bs.collapse", function() {
    $("#colapseonetrigger").html('TUS DATOS <i class="fa fa-minus"></i>');
  });

  $("#collapsetwo").on("hide.bs.collapse", function(){
    $("#colapsetwotrigger").html('SOBRE TU EVENTO <i class="fa fa-plus"></i>');
  });
  $("#collapsetwo").on("show.bs.collapse", function(){
    $("#colapsetwotrigger").html('SOBRE TU EVENTO <i class="fa fa-minus"></i>');
  });
/*hide and show div*/ 
  jQuery('.colapse-div').click( function(e) {
    jQuery('.collapse').collapse('hide');
});
/*BACK TO TOP*/
jQuery(document).ready(function($){
  var offset = 200,
    offset_opacity = 1200,
    scroll_top_duration = 700,
    $back_to_top = $('.cd-top');

  //hide or show the "back to top" link
  $(window).scroll(function(){
    ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
    if( $(this).scrollTop() > offset_opacity ) { 
      $back_to_top.addClass('cd-fade-out');
    }
  });

  //smooth scroll to top
  $back_to_top.on('click', function(event){
    event.preventDefault();
    $('body,html').animate({
      scrollTop: 0 ,
        }, scroll_top_duration
    );
  });

});
  
});




