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
    slidesToShow: 3,
    dots:true
  });

  $('.pop').slick({
    centerMode: true,
    centerPadding: '10px',
    slidesToShow: 1,
    arrows: true,
    dots: true,
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


  $("#demo").on("hide.bs.collapse", function(){
    $(".btn").html('<span class="glyphicon glyphicon-collapse-down"></span> Open');
  });
  $("#demo").on("show.bs.collapse", function(){
    $(".btn").html('<span class="glyphicon glyphicon-collapse-up"></span> Close');
  });

});


