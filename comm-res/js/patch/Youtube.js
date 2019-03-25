Youtube = {
	/* IE8 이하 youtube 지원종료안내 */
	setInfo: function () {
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
	},
};