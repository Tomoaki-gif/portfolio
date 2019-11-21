//フローティングボタンの処理
// jQuery(function($){
// 		(window).on("scroll", function() {
// 		if (jQuery(this).scrollTop() > 100) {
// 			jQuery('.totop').show();
// 		} else {
// 			jQuery('.totop').hide();
// 		}
// 	});
// });

// jQuery(function($){
// 		('.totop').click(function () {
// 		jQuery('body,html').animate({
// 			scrollTop: 0
// 		}, 500);
// 		return false;
// 	});
// });

// hiraku.js
jQuery(function($){
	$(document).ready(function () {
		$(".offcanvas-right").hiraku({
			btn:"#offcanvas-btn-right",
			direction:"right"
		});

		// スマホメニューを閉じるとき
		$(document).click(function(event) {
			if(!$(event.target).closest('.offcanvas-right').length 
			&& !$(event.target).closest('.hiraku-open-btn').length) {

				// ヘッダーの表示を切り替える
				$('header').removeAttr('style');
				$('.hiraku-open-btn').removeAttr('style');
			}
		});

		// リンクを押したとき
		$('a[href^="#"]').click(function() {

			// 画面のロックを解除する
			$('body').css('position', 'static');
			$('body').css('overflow', 'scroll');
			$('body').css('overflow-y', 'scroll');

			// メニューを閉じる
			$('.js-hiraku-offcanvas-open').hide();
			$('.js-hiraku-offcanvas-body-right').removeAttr('style');

			// ヘッダーの表示を切り替える
			$('header').removeAttr('style');
			$('.hiraku-open-btn').removeAttr('style');

			// classを初期化する
			$('body').removeClass('js-hiraku-offcanvas-body-right');
			$('.hiraku-open-btn').removeClass('js-hiraku-offcanvas-btn-active');
			$('.hiraku-open-btn').attr({'aria-expanded' : 'false'});
			$('.js-hiraku-offcanvas').removeClass('js-hiraku-offcanvas-open');
			$('.js-hiraku-offcanvas-sidebar').removeClass('active');

			// styleを初期化
			$('html').removeAttr('style');
			$('body').removeAttr('style');
			$('header').removeAttr('style');
			$('.hiraku-open-btn').removeAttr('style');
			$('.js-hiraku-offcanvas').removeAttr('style');
		});
	});
});