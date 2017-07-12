
 $(document).ready(function() {
 $('#LoginForm').validate({
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
             url: 'http://localhost/Automotive/Home/validation_user',
             data : $('#LoginForm').serialize(),
             type: "POST",
             success: function (data) {
                 if (data == 'HELLO') {

                     $('#messagess').html('You are login');
                     $("#LoginForm").hide('12121');
                     setTimeout(function () {

                         window.location.href ='http://localhost/Automotive/Home/user_area';
                     },1000);
                     
                 }
                 else if (data == 'sorry') {

                     $('#messagess').html('Incorrect Email/password');
                 }
             }
         })
         return false;
     }
 });

 });
