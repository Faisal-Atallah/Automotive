$(document).ready(function() {
    $('#AdminForm').validate({
        rules: {
            emaillogin: {

                required: true
            },
            passwordlogin: {
                minlength: 8,
                required: true
            }
        },
        highlight: function(element) {
            $(element).closest('form-control').removeClass('success').addClass('error');
        },
        success: function(element) {
            element.text('OK!').addClass('valid').closest('.form-group').removeClass('error').addClass('success');
        },
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },

        submitHandler: function( form ) {

            $.ajax({
                url: 'http://localhost/Automotive/admin/Login/validation_admin.html',
                data : $('#AdminForm').serialize(),
                type: "POST",
                success: function (data) {
                    if (data == 'HELLO') {

                        $('#ADMS').html('You are login');
                        $("#AdminForm").hide('12121');
                        setTimeout(function () {

                            window.location.href ='http://localhost/Automotive/admin/Login/Admin_area';
                        },1000);

                    }
                    else if (data == 'sorry') {

                        $('#ADMS').html('Incorrect Email/password');
                    }
                }
            })
            return false;
        }
    });

});
