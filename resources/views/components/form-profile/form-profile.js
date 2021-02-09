const buttonEdit = $('#button-edit');
const buttonSave = $('#button-save');

buttonEdit.click(function(event){
    event.preventDefault();
    $('input, select').removeAttr("disabled")
    buttonEdit.css({
        'opacity': '0'
    })
    buttonSave.css({
        'opacity': '1'
    })
});

buttonSave.click(function(event){
    event.preventDefault();
    $('input, select').attr("disabled" , true)
    buttonEdit.css({
        'opacity': '1'
    })
    buttonSave.css({
        'opacity': '0'
    })
});