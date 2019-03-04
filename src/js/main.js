/*sliders*/ 
$(document).ready(function(){
  $('.your-class').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    infinite: false,
    speed: 300
  });
});
$(document).ready(function(){
  $('.your-gallery').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    infinite: false,
    speed: 300
  });
});
/*menu toggle*/ 
$(document).ready(function(){
    $('.header-menu-nav').hide();  
    $('.header-menu').click(function(e) {
        $('.header-menu-nav').slideToggle("slow");     
      });
})

/*color*/
$(document).ready(function(){       
    var scroll_pos = 0;
    $(document).scroll(function() { 
        scroll_pos = $(this).scrollTop();
        if(scroll_pos > 680) {
            $("header").css('background-color', 'rgba(0,0,0,1)');
        } else {
            $("header").css('background-color', 'rgba(0,0,0,0)');
        }
    });
});