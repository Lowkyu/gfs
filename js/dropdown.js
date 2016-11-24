$(function () {
  $('span').click(function() { 
    if ($(this).attr('class') == 'selected') {
      // メニュー非表示
      $(this).removeClass('selected').next('ul').slideUp('fast');
    } else {
      // 表示しているメニューを閉じる
      $('span').removeClass('selected');
      $('ul').hide();

      // メニュー表示
      $(this).addClass('selected').next('ul').slideDown('fast');
    }    
  });
  
  // マウスカーソルがメニュー上/メニュー外
  $('span,ul').hover(function(){
    over_flg = true;
  }, function(){
    over_flg = false;
  });  
  
  // メニュー領域外をクリックしたらメニューを閉じる
  $('body').click(function() {
    if (over_flg == false) {
      $('span').removeClass('selected');
      $('ul').slideUp('fast');
    }
  });
});

(function($){



	$(function(){

		//オブジェクトを保存
		var accordionItem=$('#accordion');
		//一旦全部消す
		accordionItem.find('li').hide();

		//active要素を指定して開く
		var no=0;
		//accordionItem.find('span').eq(no).addClass('active').next('div').show();

		//click-action
		accordionItem.find('span').click(function () {

			//slide
			$(this).next('div').slideToggle('slow')
			.siblings('div:visible').slideUp('slow');
			//activeクラス切り替え
			$(this).toggleClass('active');
			$(this).siblings('span').removeClass('active');

		});

		//hover-toggle
		accordionItem.find('span').hover(function () {

			//toggle hoveredクラス
			$(this).toggleClass('hovered');

		});
	});

})(jQuery);