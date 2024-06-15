
$('.delete-button').click(function() {
    var button = $(this);
    var productId = $(this).data('product-id');
    var token = $('#token').val();
    $.ajax({
        url: '/destroy/' + productId,
        method: 'DELETE',
        data: {
            '_token': token,
        },
        success: function(){
            button.closest('.card').remove();
        },
        error: function(xhr, status, error){
            button.closest('.card').find('.server-error').css('display', 'block');

            setTimeout(() => {
                button.closest('.card').find('.server-error').css('display', 'none');
            }, 3000);
        }
    });
});