OldPatcher = {
	/*v1.0 이미지를 부모안에 포함시킨다. */
	containImg: function (sel) {
		$(sel).each(function (i) {
			$img_w = $(this).parent();
			$img = $(this);

			if ($img_w.css("position") != "absolute" && $img_w.css("position") != "fixed") {
				$img_w.css({"position": "relative"});
			}

			//$img.on("load, ready", function () {
				$img = $(this);
				var type;

				if ($img.width() >= $img.height()) {
					type = "hori";
				} else {
					type = "verti";
				}

				$img.css({
					"position":"absolute",
					"top":"0",
					"bottom":"0",
					"left":"0",
					"right":"0",
					"margin":"auto"
				});

				if (type == "hori") {
					$img.css({
						"width": "100%",
						"height": "auto"
					});
				} else {
					$img.css({
						"width": "auto",
						"height": "100%"
					});
				}

			//});
		});
	}
	,
	/* WIN7 IE11 맑은 고딕 상하 정렬 문제 패치*/
	fixFontPos: function () {
		if (UserAgent.WIN7) {
			$("a > span, button > span").each(function () {
				var $el = $(this);

				if (
					StringUtil.hasString($el.css("font-family"), "맑은 고딕") ||
					StringUtil.hasString($el.css("font-family").toLowerCase(), "malgun gothic")
				) {
					$el.css({
						"top": "-0.15em",
						"position": "relative"
					});
				}
			});
		}
	}
	,
	/* IE9 이하 placeholder 사용가능하게 */
	setPlaceholder: function () {
		if (UserAgent.isIE9() || UserAgent.isIE8() || UserAgent.isIE7() || UserAgent.isIE6() || UserAgent.isQuirks()) {
			var target = 'input[placeholder], textarea[placeholder]';
			$(target).each(function (i) {
				//Set Html
				var $el = $(this);
				var $el_w;
				var $el_place;

				$el.wrap('<div class="js-patchPlaceholder-w"></div>');
				$el_w = $el.closest(".js-patchPlaceholder-w");

				$el_w.append('<div class="js-place-holder"></div>');
				$el_place = $el_w.find(".js-place-holder");
				$el_place.text($el.attr("placeholder"));

				//Set CSS
				$el_w.css({position: "relative"});

				if (Ui.getPercentWidth($el) == "100%" || Ui.getPercentWidth($el) == "NaN%") {
					$el_w.css({display: "block"});
				} else {
					$el_w.css({display: "inline-block"});
				}

				$el_place.css({
					position: "absolute",
					top: "0.2em",
					left: "0.2em"
				});

				//Set Event
				$el.on("focus", function () {
					var $el = $(this);
					var $el_w = $el.closest(".js-patchPlaceholder-w");
					var $el_place = $el_w.find(".js-place-holder");

					$el_place.hide();
				});

				$el.on("blur", function () {
					var $el = $(this);
					var $el_w = $el.closest(".js-patchPlaceholder-w");
					var $el_place = $el_w.find(".js-place-holder");

					if ($el.val() == "") {
						$el_place.show();
					}
				});

				$el_place.on("focus", function () {
					$el.trigger("focus");
				});
			});
		}
	}
	,
		/* IE8 이하 youtube 지원종료안내 */
	setYoutubeInfo: function () {
		if (UserAgent.isIE8() || UserAgent.isIE7() || UserAgent.isIE6() || UserAgent.isQuirks()) {
			var target = 'iframe';
			$(target).each(function (i) {
				$iframe = $(this);

				if (StringUtil.hasString($iframe.attr("src"), ("youtube"))) {

					//Set Html
					var $el = $(this);
					var $el_w;
					var $el_place;

					$el.wrap('<div class="js-youtube-w"></div>');
					$el_w = $el.closest(".js-youtube-w");

					$el_w.append('<div class="js-youtube-info"></div>');
					$el_place = $el_w.find(".js-youtube-info");
					$el_place.text($el.attr("patchPlaceholder"));

					//Set CSS
					$el_w.css({
						"position": "relative",
						"display": "inline-block"
					});

					$el_place.css({
						"position": "absolute",
						"top": "0.2em",
						"left": "0",
						"color": "white",
						"z-ndex": "100",
						"line-height": "1.5",
						"background": "black",
						"padding": "10px",
						"width": "100%",
						"box-sizing": "border-box"
					});

					$el_place.html("유튜브 서비스는 더이상 익스플로러8 이하 브라우저를 지원하지 않습니다. 동영상을 확인하시려면 익스플로러를 업데이트해 주시거나 다른 브라우저를 사용해 주시기 바랍니다.")
					//Set Event
				}
			});
		}
	}
};