Ui = {
	//todo 모듈화 필요 체크와 뒷배경 on
	chkAll: function (btnAllChk, btnChk) {
		$(btnAllChk).on("click", function () {
			var $tr = $(this).closest("table").children("tbody").children("tr");
			var $btnChk = $(btnChk);

			if ($(this).prop("checked")) {
				$tr.addClass("on");
				$btnChk.prop("checked", true);
			} else {
				$tr.removeClass("on");
				$btnChk.prop("checked", false);
			}
		});

		$(btnChk).on("click", function () {
			if ($(this).prop("checked")) {
				$(this).closest("tr").addClass("on");
			} else {
				$(this).closest("tr").removeClass("on");
			}
		});
	}
	,
	tab: function (btnWrap, contWrap) {
		var $tabBtn = $(btnWrap).children("*");
		var $tabCont = $(contWrap).children("*");
		;

		$tabBtn.eq(0).addClass('on');

		$tabBtn.each(function (i) {

			$(this).on("click", function () {
				$(".tabBtn").removeClass("on");
				$(this).eq(i).addClass("on");

				$tabCont.hide();
				$tabCont.eq(i).show();

				return false;
			});
		});
	}
	,
	getPercentWidth: function (el) {
		var $el = $(el);
		var width = parseFloat($el.css('width')) / parseFloat($el.parent().css('width'));
		return Math.round(100 * width) + '%';
	}
	,
	responsiveImgMap: function () {
		$('img[usemap]').rwdImageMaps();
	}
	,
	setAnimatedHash: function () {
		$("a, area").on("click", function (e) {
			var $link = $(this);
			var href = $link.attr("href");

			if (href && href != "#" && StringUtil.hasString(href, "#")) {
				e.preventDefault();
				Ui.goAnimatedHash(href);
			}
		});
	}
	,
	/* v.1.0.1 애니메이트된 해시로 이동
	 *  IE10 부터 pushState 사용
	 *  IE9 이하 hash 사용 깜박임 있음 home 갈때 주소에 #제거 안됨
	 *  #은 미적용 위로 올라가는것 막는것이 안됨
	 *  #top 은 top으로 이동
	 *  */
	goAnimatedHash: function (href) {
		var loc = window.location;
		var doc = window.document;
		var gotoScroll;

		if (href == "#top") {
			gotoScroll = 0;
			href = "";
		} else { //sub 일때
			gotoScroll = $(href).offset().top;
		}

		if ("pushState" in history) {
			$("html, body").animate({scrollTop: gotoScroll});
			history.pushState(null, doc.title, loc.pathname + loc.search + href);
		} else {
			$("html, body").animate({scrollTop: gotoScroll}); //이걸 hash 위에서 호출해야 애니메이션이 먹음
			location.hash = href;
		}
	}
};