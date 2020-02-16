$(function () {
    var el = document.querySelector(".darkBg");
    snowFall.snow(el, { image: "asset//img/heart.png", minSize: 10, maxSize: 32 });
    $('#start').click(function () {
        $('#clickme').css('display', 'none');
        $(this).fadeOut("slow",function (){
            $('.darkBg').fadeIn("slow", function () {
                $('.darkBg').css('background-color', '#86cbf3d0');
            });
         
            snowFall.snow(el, "clear");
            snowFall.snow(el, { image: "asset//img/flake.png", minSize: 10, maxSize: 32 });
        });

    });
    $('#start').hover(function () {

        $('#clickme').addClass("fadeInDown").fadeIn(100);
        $('#clickme').removeClass("fadeOutUp");

    }, function () {
        $('#clickme').removeClass("fadeInDown")
        $('#clickme').addClass("fadeOutUp");
    });


});
