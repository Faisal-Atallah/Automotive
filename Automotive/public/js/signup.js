$(document).ready(function () {


    $('#registerform').bootstrapValidator({
        container: '.yalla',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The user name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        message: 'minimum three character'
                    }
                }
            }
            ,
            lastname: {
                validators: {
                    notEmpty: {
                        message: 'last name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        message: "minimum three character"
                    }
                }
            },
            password: {
                validators: {

                    notEmpty: {
                        message: "Incorrect password"
                    },

                    stringLength: {
                        min: 8,
                        message: "Incorrect password"
                    }

                }
            },
            password_conf: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },

            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    }
                }
            },
            date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required and cannot be empty'
                    }
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'The date is required and cannot be empty'
                    }
                },
                phonenum: {
                    validators: {
                        notEmpty: {
                            message: 'The phone number is required and cannot be empty'

                        }
                    }
                }
            }
        },
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