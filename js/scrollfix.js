
/*スクロール固定*/
$(window).load(function() {
	var tab = $('.scrollfix'), //固定したい要素名
    offset = tab.offset();

$(window).scroll(function () {
  if($(window).scrollTop() > offset.top-10 ) {
    tab.addClass('fixed');
  } else {
    tab.removeClass('fixed');
  }
});
});