$('.open-modal').on('click', function () {
    let modalTarget = $(this).data('modal-link');
    let modal = document.querySelector('.' + modalTarget);
    console.log(modalTarget);
    console.log(modal);
    $(modal).toggleClass('is-show');
});
$('.modal-close').on('click', function () {
    $(this).parents('.modal').toggleClass('is-show');
});