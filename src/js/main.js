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


jQuery(function(){

    jQuery('.center').slick({
        slidesToShow: 3,
        dots:true
      });

});
jQuery(function(){

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

/*SOUND PAGE*/
$(document).ready(function(){
  $('.slider-sound').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    centerMode: true,
    focusOnSelect: true,
    variableWidth: true
  });
});