$(window).on('load', function () {

});

$(document).on('ready', function () {
    //call modal
    $('.ec_box button').click(function () {
        $('.ui.modal.customer_modal').modal('show');
    });

    //edit and save button
    $('.make_edits').on('click', function () {
        $('.customer_modal').find('input,textarea').prop('disabled', false);
    });
    $('.save_edits').on('click', function () {
        $('.customer_modal').find('input,textarea').prop('disabled', true);
    });
    
    //duplicate field set
    var toAppend = $('.duplicate_this').html();
    $('.duplicator_button').on('click',function(){
        $('.order_detail_form').append(toAppend);
    });
    
});