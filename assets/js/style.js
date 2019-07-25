
     document.getElementById("elevator").style.display = "none";

    $('.js-anchor-link').click(function(e){
  e.preventDefault();
  var target = $($(this).attr('href'));
  if(target.length){
    var scrollTo = target.offset().top;
    $('body, html').animate({scrollTop: scrollTo+'px'}, 1000);
  }
});


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    document.getElementById("elevator").style.display = "block";
  } 
  else
  {
       document.getElementById("elevator").style.display = "none";
  }
}
