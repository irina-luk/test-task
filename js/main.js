jQuery(function($) {

  var reviews__inner = $('#reviews__inner');
  reviews__inner.slick({
 //   infinite: true,
//    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    arrows: false,
    dots: true,
    utoplay: true,
    autoplaySpeed: 2000,
  });

});
