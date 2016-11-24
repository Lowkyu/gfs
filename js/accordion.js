(function($){

	//accordion31
	$(function(){

		//オブジェクトを保存
		var accordionItem=$('#accordion');
		//一旦全部消す
		accordionItem.find('ul').hide();

		//active要素を指定して開く
		var no=0;
		//accordionItem.find('span').eq(no).addClass('active').next('ul').show();

		//click-action
		accordionItem.find('span').click(function () {

			//slide
			$(this).next('ul').slideToggle(500)
			.siblings('div:visible').slideUp(10);
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