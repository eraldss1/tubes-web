$(document).ready(function () {
  $("#headerDropupButton").click(function () {
    $(document.getElementById("headerDropup")).slideToggle("slow", "swing");
  });

  $(".items").slick({
    variableWidth: true,
    dots: true,
    infinite: true,
    speed: 800,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});

function closeHeader() {
  $(document.getElementById("headerDropup")).slideToggle("fast", "linear");
}
