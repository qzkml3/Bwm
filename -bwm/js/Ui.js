Ui = {
	addCss: function (id, file) {
		if (!$('#' + id).length) {
			$css = '<link id="' + id + '" rel="stylesheet" href="' + file + '">';
			$('head').append($css);
		}
	},
	removeCss: function (id) {
		$('#' + id).remove();
	},
	chkStarPoint: function (wrap, field) {
		$(wrap).find('button').on('click', function () {
			var $btn = $(this);
			var idx = $btn.index();
			var $btns = $(this).parent().find('button');
			$btns.removeClass('on');
			$btns.each(function (i) {
				$(this).addClass('on');
				if (i == idx) {
					$(field).val(idx + 1);
					return false;
				}
			});
		});
	}
	,
	//현재 경로에 포함되어있는 링크를 on 시킨다.
	chkMenuCurPage: function (sel) {
		var $links = $(sel).find('a');
		$links.each(function () {
			var $link = $(this);
			if (location.href.match($link.attr('href'))) {
				$link.addClass('on');
			}
		});
	}
	,
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

			if (href && href != "#" && href.match("#")) {
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

		if (href == "#_top") {
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
	,
	/*제목 길때 쩜쩜으로*/
	cutStrToWidth: function (wrap, separ, customGap) {
		$(wrap).each(function () {
			var $wrap = $(this);
			var wrapWidth = $wrap.width();

			var $text = $wrap.find("span");
			var textWidth = 0;
			var text_cache = "";

			var $btns = $wrap.find("img");
			var hasBtn = false;

			//css
			$text.css("white-space", "nowrap");

			//text to cache
			text_cache = $text.text();
			$text.text("");

			//calc wrapWidth
			$btns.each(function () {
				var $btn = $(this);
				var btnWidth = $btn.width();
				var btnOuterWidth = $btn.outerWidth(true);

				if (btnWidth == btnOuterWidth) { //no margin (auto margin)
					hasBtn = true;
					btnWidth += 4; //set default margin
				} else { //has margin
					btnWidth = btnOuterWidth;
				}

				wrapWidth -= btnWidth;
			});

			if (hasBtn) {
				wrapWidth -= 7;
			}

			wrapWidth -= customGap;

			//proc
			for (var i = 0; i <= text_cache.length; i++) {
				$text.text($text.text() + text_cache.charAt(i));
				textWidth = $text.outerWidth(true);
				if (textWidth >= wrapWidth) {
					$text.text($text.text().substring(0, $text.text().length - 2));
					$text.text($text.text() + separ);
					break;
				}
			}

			//debug
			/*console.log(textWidth + " : " + wrapWidth);
			console.log($text.text());*/
		});
	}
	,
	resizeIframe: function (ifm) {
		resizeIframe_trigger(ifm);
		$(ifm).css("transition", "all 1s");
		$(window).on("resize", function () {
			setTimeout(function () {
				resizeIframe_trigger(ifm);
			}, 500);
		});

		function resizeIframe_trigger(ifm) {
			var $ifm = $(ifm);
			var content_height = $ifm.contents().find("body").outerHeight(true);

			$ifm.height(content_height);
		}
	}
};