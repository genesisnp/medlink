$('.card-profile-image__input').on('change',function () {
    readImgUrlAndPreview(this);
    function readImgUrlAndPreview(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            const name = input.name;
            reader.onload = function (e) {
                $('.card-profile-image__preview-img.' + name).attr('src', e.target.result);
                $('.card-profile-image__preview-img.' + name).css('opacity', 1);
            }
            reader.readAsDataURL(input.files[0]);
        };
        
    }
});