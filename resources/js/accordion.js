//$('.accordion > li:eq(0) a').addClass('active').next().slideDown();

$('.accordion .accordion__item').click(function (j) {
    var dropDown = $(this).closest('li').find('.accordion__info');

    $(this).closest('.accordion').find('.accordion__info').not(dropDown).slideUp();

    if ($(this).hasClass('active')) {
        $(this).removeClass('active');

        $(this).closest('li').find('.accordion__delete').removeClass('active');
    } else {
        $(this).closest('.accordion').find('.accordion__item.active').removeClass('active');
        $(this).addClass('active');
        $(this).closest('li').find('.accordion__delete').addClass('active');
    }

    dropDown.stop(false, true).slideToggle();

    j.preventDefault();
});