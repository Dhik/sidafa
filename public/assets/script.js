$(function(){
  $('.slider').click(function () { 
    $('#nav').slideToggle(300);
  });

  $('.sub').click(function () { 
    var cur = $(this).prev();
    $('#nav li ul').each(function() {
      if ($(this)[0] != $(cur)[0])
        $(this).slideUp(300);
    });
    $(cur).slideToggle(300);
  });
});