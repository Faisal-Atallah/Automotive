
$(document).ready(function() {
    $('#billing').validate({
  
        submitHandler: function( form ) {

            $.ajax({
                url: 'http://localhost/Automotive/shopping/save_order',
                data : $('#billing').serialize(),
                type: "POST",
                success: function (data) {
                    if (data == 'suc') {


                        $("#billing").hide('12121');
                        $("#BillingSuc").modal();
                        $('.modal-body').text('Your order was sent successfully ,please check your email for order info');


                    }
                    else if (data == 'sorry') {
                       
                    }
                }
            })
            return false;
        }
    });

});

