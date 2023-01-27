jQuery(document).ready(function($) {
  $('main img').css('display','block')
  $('.my-slider').unslider({
      autoplay: true,
       arrows: false
})
  $('.multiple-items').slick({
    infinite: true,
    dots:true,
    autoplay:true,
    slidesToShow: 3,
    slidesToScroll: 3
});
});