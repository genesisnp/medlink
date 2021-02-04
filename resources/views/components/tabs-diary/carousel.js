$('.tabs-timetable__content').slick({
    infinite: false,
    slidesToShow: 7,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 5,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 475,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
    ]
  });
