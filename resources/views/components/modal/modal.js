$('.open-modal').on('click', function () {
    let modalTarget = $(this).data('modal-link');
    let modal = document.querySelector('.' + modalTarget);
    $(modal).toggleClass('is-show');
});
$('.modal-close').on('click', function () {
    $(this).parents('.modal').toggleClass('is-show');
});