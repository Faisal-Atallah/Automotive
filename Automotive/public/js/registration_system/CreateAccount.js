$(document).ready(function() {
    $('#registerform').validate({
        rules: {
            username: {
                minlength: 3,
                required: true
            },
            lastname:{
                minlength:3,
                required:true
            },
            email: {
                required: true,
                email: true
            },
            phonenum:{
              required:true,
                minlength:10
            },
            country:{
                required:true,
            },
            password:{
              required:true,
                minlength:8,

            }


            ,
            password_conf:{
                required:true,
                equalTo: "#password"
            }
                ,
            date:{
                required:true
            }
        },
        highlight: function(element) {
            $(element).closest('form-control').removeClass('success').addClass('error');
        },
        success: function(element) {
            element.text('OK!').addClass('valid').closest('.form-group').removeClass('error').addClass('success');
        }, errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function( form ) {

            $.ajax({
                url : 'http://localhost/Automotive/home/accept.html',
                data : $('#registerform').serialize(),
                type: "POST",
                success: function (data) {
                    if (data == 'ACCEPT') {

                        $("#signmodal").hide('4343433');
                        setTimeout(function () {
                            $("#log").modal();
                            $('#messagess').html('Now You Can Login');
                        }, 1000);
                    }
                    else if (data == 'EMAIL_EXIST') {

                        $('#message').html('The email is already exists in our database,please use a different one' )

                    }
                }
            })
            return false;
        }

    });




});

