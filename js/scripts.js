$(function(){

	$(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

  $('#menu-toggle').click(function(){
  $('ul.menu').toggleClass('visibleNav');
})


}); // end document ready

$(document).ready(function(){
    $(".serviceIconBox").click(function(){
        $(".servicesModal").fadeOut('medium');
        $(this).parent().next().fadeIn('medium');
    });
    $(".serviceModalClose").click(function(){
        $(".servicesModal").fadeOut('medium');
    });
});
