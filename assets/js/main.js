$(document).ready(function(){

    function getWidth() {
      return Math.max(
        document.body.scrollWidth,
        document.documentElement.scrollWidth,
        document.body.offsetWidth,
        document.documentElement.offsetWidth,
        document.documentElement.clientWidth
      );
    }

    if(getWidth()>=1024){
        $(".link h2").hover(function(){
            $(this).parent().find('span').stop().fadeToggle('fast');
            $(".artists-list-img").eq($(this).parent().index()).stop().fadeToggle('fast');
        });
    }

    $("#bio-btnSide").click(function(){
        $(".bio-container-center").slideToggle('fast');
    });

    $("#bio-btnCenter").click(function(){
        $(".bio-container-center").slideToggle('fast');
    });

    $("#qr-btn").click(function(){
        $(".qr-container").slideToggle('fast');
    });

    $("#cat-btn").click(function(){
        var elmnt = document.getElementsByClassName("cat-buy")[0];
        window.scroll({
          top: elmnt.offsetTop, 
          left: 0, 
          behavior: 'smooth'
        });
    });

    $("#cat-btnSide").click(function(){
        var elmnt = document.getElementsByClassName("cat-buy")[0];
        window.scroll({
          top: elmnt.offsetTop, 
          left: 0, 
          behavior: 'smooth'
        });
    });

    $(window).scroll(function() {
        if(window.outerWidth > 1024) {
            if ($(this).scrollTop() > 250) {
                $('.side-info').fadeIn();
            } else {
                $('.side-info').fadeOut();
            }
        }
    });

    $(window).scroll(function() {
        if(window.outerWidth < 1024) {
            if ($(this).scrollTop() > 250) {
                $('.profile-pic').fadeOut();
            } else {
                $('.profile-pic').fadeIn();
            }
        }
    });  

    $("#view-as-grid-btn").click(function(){
        $(".bio-container").slideToggle('fast');
    });

    $(".view-index-btn").click(function(){
        $(".item").removeClass("w1");
        $(this).find("img").addClass("active");
        $(".view-stack-btn").find("img").removeClass("active");
    });

    $(".view-stack-btn").click(function(){
        $(".item").addClass("w1");
        $(this).find("img").addClass("active");
        $(".view-index-btn").find("img").removeClass("active");
    });

    $(".menu-btn").click(function(){
        $(".mobile nav").css({"display": "flex"});
    }); 

    $(".close-btn").click(function(){
        $(".mobile nav").fadeToggle('fast');
    });

    $('#maindiv').width($('#div1').width());


});


$(function(){
    var x = 0;
    setInterval(function(){
        x-=1;
        $('.animation').css('margin-left', x + 'px 0');
    }, 10);
})

$(window).load(function() {
    $('.video-element').get(0).play();
});
