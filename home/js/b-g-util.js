$(document).ready(function () {
	b_onImgChk();
	b_onCloseBPop();
});

/**팝업 닫기버튼 이벤트*/
function b_onCloseBPop() {
	$(document).on('click', '.b-pop', function(e) {
		var $pop = $(this);
		var $clicked = $(e.target);

		if ($clicked.hasClass('b-pop--close')) {
			$pop.fadeOut('fast', function() {
				if ($pop.hasClass('b-pop--dynamic')) {
					$pop.remove();
				}
			});
		}
	});
}

function b_openBPop(sel) {
	var $pop;
	if (typeof sel == 'object') {
		var p = sel;
		var $tpl = $($('#tpl-b-pop').html());

		if (p.cont != null) {
			$tpl.find('.b-pop-cont-html').html(p.cont);
		}

		if (p.btnCloseText != null) {
			$tpl.find('.b-pop-btn-close').html(p.btnCloseText);
		}

		if (p.btnClass != null) {
			$tpl.find('button').addClass(p.btnClass);
		}

		$pop = $($tpl).appendTo('body');

	} else {
		$pop = $(sel);
	}
	b_openBPop_callback($pop);

	function b_openBPop_callback($pop) {
		$pop.css('display', 'flex');
		$pop.hide();
		$pop.fadeIn(0);
	}
}

/**이미지 체크박스 켜기*/
function b_onImgChk() {
	$('.b-img-chk').each(function() {
		var btn = '<button type="button" class="b-img-chk-btn">';
		$(this).after(btn);
	});
}