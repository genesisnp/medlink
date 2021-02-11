$('.card-digital-file__input').on('change',function () {
    readImgUrlAndPreview(this);
    function readImgUrlAndPreview(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            const name = input.name;
            reader.onload = function (e) {
                $('.card-digital-file__preview-img.' + name).attr('src', e.target.result);
                $('.card-digital-file__preview-img.' + name).css('opacity', 1);
                $( `.card-digital-file__background.${name} span`).text('editar').css({
                    'width': '91px',
                    'height': '91px'
                })
            }
            reader.readAsDataURL(input.files[0]);
        };
        
    }
});