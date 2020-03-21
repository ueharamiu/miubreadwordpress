$(function() {
  $('#nav-input').click(function() {
    $(this).toggleClass('active');

    if($(this).hasClass('active')) {
      $('.ham_line').addClass('active');
      $('body').addClass('overflowHidden');
    } else {
      $('.ham_line').removeClass('active');
      $('body').removeClass('overflowHidden');
    }
  });
});
