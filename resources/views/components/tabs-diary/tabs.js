$('.tabs-header .tabs-header-link').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('.tabs-header .tabs-header-link').removeClass('current');
    $('.tabs-content__item').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
    
    $('.tabs-timetable__content').slick('setPosition');

})



