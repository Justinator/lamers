$('.regular').slick({
  centerMode: true,
  dots: true,
  centerPadding: '60px',
  slidesToShow: 3,
  initialSlide: 1,
  responsive: [
    {
      breakpoint: 983,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1,
        initialSlide: 0
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1,
        initialSlide: 0
      }
    }
  ]
});
$('.center').slick({
  centerMode: true,
  centerPadding: '200px',
  slidesToShow: 1,
  dots: true,
  responsive: [
    {
      breakpoint: 983,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '5px',
        slidesToShow: 1
      }
    }
  ]
});
