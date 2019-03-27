Placeholder = {
	/* IE9 이하 placeholder 사용가능하게 */
	setPlaceholder: function () {
		if (UserAgent.isIE9() || UserAgent.isIE9() || UserAgent.isIE7() || UserAgent.isIE6() || UserAgent.isQuirks()) {
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
};