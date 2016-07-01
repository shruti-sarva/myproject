$(document).ready(function() {
  $('.popup_log').click(function(e) {
    e.stopPropagation();
    $('.hold').toggle();

  });
  $('body').click(function(e){
    $('.hold').hide();

  });
  $('.hold').click(function(e){
    e.stopPropagation();
  });
});
