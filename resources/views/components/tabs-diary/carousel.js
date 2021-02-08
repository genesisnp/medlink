$('.tabs-timetable__content').slick({
    infinite: false,
    slidesToShow: 8,
    nextArrow:'<button class="slick-next" type="button"><span class="icon-polygon"></span></button>',
	prevArrow:'<button class="slick-prev" type="button"><span class="icon-polygon"></span></button>',
    responsive: [
        {
            breakpoint: 1250,
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
            breakpoint: 700,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
    ]
  });
