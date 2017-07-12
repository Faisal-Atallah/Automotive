/**
 * Created by Faisal_pc on 4/7/2016.
 */


/* home hyperlink nav */

$(".homeNav").click(function () {
    $('html,body').animate({scrollTop:$("#MainCarousel").offset().top},1000)
});

/* services hyperlink nav  */

$(".serviceNav").click(function () {

    $('html,body').animate({scrollTop:$(".Ser").offset().top
    },1000)
});




/* contact us hyperlink nav */

$(document).ready(function (){
    $(".contactNav").click(function (){
        $('html, body').animate({
            scrollTop: $(".cont").offset().top
        }, 2000);

    });
});


/* about hyperlink  nav  */

$(".aboutNav").click(function () {
    $('html,body').animate({scrollTop: $(".Abt").offset().top
    },1000)
});

/*             location hyperlink nav     */

$(".locationNav").click(function () {
    $('html,body').animate({scrollTop:$("#mapWrapper").offset().top},1000)
});


/*----------- shop parts ----------*/

$("#shop_parts").click(function(event){
    $('html, body').animate({scrollTop: '+=200px'}, 800);
});


$("#home p:first").hide();
setInterval(function () {
    $('#home p:first')
        .fadeOut(500).next().fadeIn(1000).end().appendTo('#home');
},3000);

$(document).ready(function() {
    $('#MainCarousel').carousel({
        interval:6000
    })
});

$("#CloseShop").click(function(){

    $("#shop").fadeOut(1000);

});



$("#CloseShop").click(function(){

    $('html,body').animate({scrollTop:$("#our").offset().top},2000)
});