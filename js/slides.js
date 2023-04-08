jQuery(document).ready(function($) {
  $('.my-slider').unslider({
      autoplay: true,
       arrows: false
})
  if($(window).width() >= '1000'){
    $('.multiple-items').slick({
    infinite: true,
    dots:true,
    autoplay:true,
    slidesToShow: 3,
    slidesToScroll: 3
});
  }
  if($(window).width() < '1000' && $(window).width() >= '650'){
    $('.multiple-items').slick({
    infinite: true,
    dots:true,
    autoplay:true,
    slidesToShow: 2,
    slidesToScroll: 2
});
  }
  if($(window).width() < '649'){
    $('.multiple-items').slick({
    infinite: true,
    dots:true,
    autoplay:true,
    slidesToShow: 1,
    slidesToScroll: 1
});
  }
  
});