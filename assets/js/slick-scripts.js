jQuery(document).ready(function() {

  jQuery(".carousel").slick({
    dots: true,
    autoplay: true,
    infinite: true,
    autoplaySpeed: 5000,
    fade: true,
    cssEase: 'linear',
    prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>'
  });

});
