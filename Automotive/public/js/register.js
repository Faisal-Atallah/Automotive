
///     Cretated for test 
$(document).ready(function () {


$("#registerform").validate(

    {
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },


        rules:{

            username:{
                required: true,
                minlength:3

            },
            lastname:{
                required: true,
                minlength:3
            },
            email:{
                required:true,
                email:true
            },
            password:{
                required:true

            },
            password_conf:{
                required:true,
                equalTo: "#password"
            },
            date:{
                required:true
            },
            phonenum:{
                required:true,
                min:10
            },
            country:{
                required:true
            }

        },
        messages:{

            username:
            {
                required: "Please Enter Your Name",
                minlength:"Minimum 3 Character"

            },
            lastname:{
                required:"Please Enter Your Last Name",
                minlength:"Minimum 3 Character"
            },
            email:
            {
                required: "Please Enter Your Email Address",
                email: true
            },
            password:{
                required:"Please enter your password",
                equalTo:"Password does not Matching"

            },
            password_conf:{
                required:"Please confirm your password"
            },
            date:{
                required:"Please enter your date"
            },
            phonenum:{
                required:"please Enter Your phone Number"

            },
            country:{
                required:"please Enter Your Country"
            }

        },
        errorElement : 'div',
        errorLabelContainer: '#errortext',
        submitHandler: function( form ) {

            $.ajax({
                url : 'http://localhost/Automotive/home/accept.html',
                data : $('#registerform').serialize(),
                type: "POST",
                success : function(data){
                    $("#signmodal").hide('slow');
                    $('#results').html(data);
                }
            })
            return false;
        }


    });


});


    //----- OPEN
    
