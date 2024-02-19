$(window).on("scroll", function () {
  var scrollTop = $(this).scrollTop();
  var score = "15px";
  if (scrollTop > 1) {
    score = "5px 15px";
  }
  $("#navbar").css("padding", score);
});

$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    responsive:{
        0:{
            items:1
            
        },
        600:{
            items:2
            
        },
        1000:{
            items:3
            
        }
    }
  });
});

$('.to-top').click(function(){
    $('html,body').animate({scrollTop: '0px'}, 800)
})

document.querySelector('.facebook-share').addEventListener('click', function(e) {
    e.preventDefault();
    window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href), '_blank');
});
document.querySelector('.line-share').addEventListener('click', function(e) {
    e.preventDefault();
    window.open('https://social-plugins.line.me/lineit/share?url=' + encodeURIComponent(window.location.href), '_blank');
});
  
document.querySelector('.twitter-share').addEventListener('click', function(e) {
    e.preventDefault();
    window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(window.location.href), '_blank');
});
