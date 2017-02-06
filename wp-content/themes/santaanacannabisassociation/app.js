

jQuery(document).ready(function($) {
  
  // Here we are toggling the Mobile Menu on and off
  $(".menu-toggle").on('click', function() {
    $(this).toggleClass("on");
    $('.menu-section').toggleClass("on");
    $("nav ul").toggleClass('hidden');
  });

});
