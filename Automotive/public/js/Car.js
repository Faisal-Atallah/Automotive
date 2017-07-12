$(document).ready(function() {
    $('#CarClass').carousel({
        interval: 10000
    })

    $('#CarClass').on('slid.bs.carousel', function() {
        //alert("slid");
    });


});