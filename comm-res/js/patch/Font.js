Font = {
	/* WIN7 IE11 맑은 고딕 상하 정렬 문제 패치*/
	fixFontPos: function () {
		if (UserAgent.WIN7) {
			$("a > span, button > span").each(function () {
				var $el = $(this);

				if (StringUtil.hasString($el.css("font-family"), "맑은 고딕")) {
					$el.css({
						"top": "-0.15em",
						"position": "relative"
					});
				}
			});
		}
	},
};