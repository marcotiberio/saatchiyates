$(".slider").slick({
    infinite: true,
    arrows: false,
    dots: false,
    autoplay: false,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1
});

var percentTime;
var tick;
var time = 1;
var progressBarIndex = 0;

var progress = $('.inProgress');

$('.progressBarContainer .progressBar').each(function (index) {
    var progress = "<div class='inProgress inProgress" + index + "'></div>";
    $(this).html(progress);
});

function startProgressbar() {
    resetProgressbar();
    percentTime = 0;
    tick = setInterval(interval, 10);
}

var slideCount = $( ".progressBarContainer" ).data( "slide-count" );

function interval() {
    if (($('.slider .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
        progressBarIndex = $('.slider .slick-track div[aria-hidden="false"]').data("slickIndex");

        if (progressBarIndex == 1) {
            $(".inProgress0").addClass('on');
            $(".inProgress1").removeClass('on');
        }
        else if (progressBarIndex == 2) {
            $(".inProgress0").addClass('on');
            $(".inProgress1").addClass('on');
            $(".inProgress2").removeClass('on');

        }
        else if (progressBarIndex == 3) {
            $(".inProgress0").addClass('on');
            $(".inProgress1").addClass('on')
            $(".inProgress2").addClass('on');
            $(".inProgress3").removeClass('on');

        }
        else if (progressBarIndex == 4) {
            $(".inProgress0").addClass('on');
            $(".inProgress1").addClass('on');
            $(".inProgress2").addClass('on')
            $(".inProgress3").addClass('on')
            $(".inProgress4").removeClass('on');

        }
        else if (progressBarIndex == 5) {
            $(".inProgress0").addClass('on');
            $(".inProgress1").addClass('on');
            $(".inProgress2").addClass('on')
            $(".inProgress3").addClass('on')
            $(".inProgress4").addClass('on')
            $(".inProgress5").removeClass('on');

        }
        else if (progressBarIndex == 0) {

            // $(".inProgress0").removeClass('on');
            // $(".inProgress1").removeClass('on');
            // $(".inProgress2").removeClass('on')
            // $(".inProgress3").removeClass('on')
            // $(".inProgress4").removeClass('on')
            // $(".inProgress5").removeClass('on');
            for (var i = 0; i < 15; i++) {
              $(".inProgress"+ i ).removeClass('on');
            }
        }
        startProgressbar();

      } else {
          percentTime += 1 / (time + 2);
          $('.inProgress' + progressBarIndex).css({
              width: percentTime + "%"
          });
          if (percentTime >= 100) {
              $('.single-item').slick('slickNext');

              if (progressBarIndex == 0) {
                  $(".inProgress0").addClass('on');

              }
              else if (progressBarIndex == 1) {
                  $(".inProgress0").addClass('on');
                  $(".inProgress1").addClass('on');
              }
              else if (progressBarIndex == 2) {
                  $(".inProgress0").addClass('on');
                  $(".inProgress1").addClass('on');
                  $(".inProgress2").addClass('on');
              }
              else if (progressBarIndex == 3) {
                  $(".inProgress0").addClass('on');
                  $(".inProgress1").addClass('on');
                  $(".inProgress2").addClass('on');
                  $(".inProgress3").addClass('on');

              }
              else if (progressBarIndex == 4) {
                  $(".inProgress0").addClass('on');
                  $(".inProgress1").addClass('on');
                  $(".inProgress2").addClass('on');
                  $(".inProgress3").addClass('on');
                  $(".inProgress4").addClass('on');
              }
              else if (progressBarIndex == 5) {
                  // $(".inProgress0").removeClass('on');
                  // $(".inProgress1").removeClass('on');
                  // $(".inProgress2").removeClass('on');
                  // $(".inProgress3").removeClass('on');
                  // $(".inProgress4").removeClass('on');
                  for (var i = 0; i < 6; i++) {
                    $(".inProgress"+ i ).addClass('on');
                  }
              }
              else if (progressBarIndex == 6) {
                for (var i = 0; i < 7; i++) {
                  $(".inProgress"+ i ).addClass('on');
                }
              }
              else if (progressBarIndex == 7) {
                for (var i = 0; i < 8; i++) {
                  $(".inProgress"+ i ).addClass('on');
                }
              }
              else if (progressBarIndex == 8) {
                for (var i = 0; i < 9; i++) {
                  $(".inProgress"+ i ).addClass('on');
                }
              }
              else if (progressBarIndex == 9) {
                for (var i = 0; i < 10; i++) {
                  $(".inProgress"+ i ).addClass('on');
                }
              }
              else if (progressBarIndex == 10) {
                for (var i = 0; i < 11; i++) {
                  $(".inProgress"+ i ).addClass('on');
                }
              }
              else if (progressBarIndex == 11) {
                for (var i = 0; i < 12; i++) {
                  $(".inProgress"+ i ).addClass('on');
                }
              }
              else if (progressBarIndex == 12) {
                for (var i = 0; i < 13; i++) {
                  $(".inProgress"+ i ).addClass('on');
                }
              }
              else if (progressBarIndex == 13) {
                for (var i = 0; i < 14; i++) {
                  $(".inProgress"+ i ).addClass('on');
                }
              }
              else if (progressBarIndex == 14) {
                for (var i = 0; i < 15; i++) {
                  $(".inProgress"+ i ).addClass('on');
                }
              }

              progressBarIndex++;

              if (progressBarIndex > slideCount) {
                  progressBarIndex = 0;
              }
              startProgressbar();

          }
      }
  }

  function resetProgressbar() {
      $('.inProgress').css({
          width: 0 + '%'
      });
      clearInterval(tick);
  }

  startProgressbar();

if ($('.item img').not(".slider .item img")) {
  $('.item img').not(".slider .item img").click(openModal);

}

  $( ".slider img" ).each(function(index) {
      $(this).on("click", function(){
          currentSlide(index);
      });
  });

  var slideIndex = 1;
  showSlides(slideIndex);

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("modalSlides");

    if (n > slides.length) {
      slideIndex = 1
    }

    if (n < 1) {
      slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      if (slides[i]) {
        slides[i].style.display = "none";
      }
    }
    if (slides[slideIndex-1]) {
      slides[slideIndex-1].style.display = "block";
    }

  }

  var barCount = $( ".progressBarContainer" ).data( "slide-count" );

  var marginTotal = 3 * (barCount - 1);

  var newString = '(100% - ' + marginTotal + 'px) / ' + barCount;

  $(".progressBarContainer .barWrap ").css("width", "calc("+ newString +")");

  var element = document.getElementById('panzoom');
  var panzoomEle = "";

  if (element) {
    panzoomEle = Panzoom(element, {
      maxScale: 5
    });
  }

  function resetZoom() {
    panzoomEle.reset();
    $('.inputWrap input').val(1);
}

  $('input[type=range]').on('input', function (event) {
     panzoomEle.zoom(event.target.valueAsNumber)
  });

  $('.close').click(closeModal);

  function openModal() {
    $("#myModal").css("display", "block")
    modalImage = document.querySelector('#panzoom img');
    // console.log(this);
    if (this.src) {
      // modalImage.src = this.src;
    }
  }

  function closeModal() {
    $("#myModal").css("display", "none")
    resetZoom(panzoomEle);
  }
