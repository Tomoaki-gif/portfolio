var swiper = new Swiper('.result-wrap', {
	//loop: true,
	pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
		clickable: true
	}
});

//アコーディオン処理
$(function(){
	$('.accordion-wrap').click(function(){
		$(this).next('.accordion-answer').slideToggle();

		//+の時
		if ($(this).find(".accordion_icon1").hasClass('active')) {
			//回答表示時の高さを変更
			$(this).css('height','21%');
			$(this).children().children(".accordion_icon1").removeClass('active');
			$(this).children().children(".accordion_icon2").addClass('active');
			$(this).children('.accordion-answer').addClass('active');
		}
		//-の時
		else{
			$(this).children().children(".accordion_icon2").removeClass('active');
			$(this).children().children(".accordion_icon1").addClass('active');
			$(this).children('.accordion-answer').removeClass('active');
			//回答表示時の高さを変更
			$(this).css('height','8.5%');
		}
	});
});

//ハンバーガーメニュークリック
$(function(){
	$('.drawer-hamburger').on("click", function() {
		$("body").append('<button type="button" class="navbar_close"><span><img src="img/batsu.svg" alt=""></span></button>');

		if($('body').hasClass('drawer-close')){
			$('body').removeClass('drawer-close');
			$('body').addClass('drawer-open');
		} else {
			$('body').addClass('drawer-open');
		}
	});
});
//メニュークローズボタンクリック
$(function(){
	$(document).on("click", '.navbar_close', function() {
		$(this).remove();
		
		if($('body').hasClass('drawer-open')){
			$('body').removeClass('drawer-open');
			$('body').addClass('drawer-close');
		}
	});
});
//メニュークリック
$(function(){
	$(document).on("click", '.nav-item', function() {
		$('.navbar_close').remove();
		
		if($('body').hasClass('drawer-open')){
			$('body').removeClass('drawer-open');
			$('body').addClass('drawer-close');
		}
	});
});