LayerPopup = {
	isCssAttached: false
	,
	open: function (param) {
		var cssPath = '/-bwm/js/ui/popup/layer-popup/layer-popup.css';
		var htmlPath = '/-bwm/js/ui/popup/layer-popup/layer-popup.html';

		$.get(htmlPath, function (data) {
			var $pop = $(data);

			// set prop
			$pop.attr("id", param.id);
			$pop.find("img").attr("src", param.src);

			// css pop
			$pop.css("width", param.width);
			$pop.css("left", param.left);
			$pop.css("top", param.top);

			if (param.leftFromCenter != null) {
				$pop.css("left", "50%");
				$pop.css("margin-left", param.leftFromCenter);
			}

			//event pop
			var cookieName = param.id;
			var $chkBox = $pop.find(".layer_popup_control_chk");
			var $btnClose = $pop.find(".layer_popup_control_btn");

			$($btnClose).on("click", function () {
				if ($chkBox.prop("checked")) {
					Cookie.setCookOnlyToday(cookieName, "closed");
				}
				$pop.hide();
			});

			//add href
			if (param.href) {
				$pop.find(".layer_popup_img_w a").attr('href', param.href);
			}

			//add target
			if (param.target) {
				$pop.find(".layer_popup_img_w a").attr('target', param.target);
			}

			//append pop
			if (Cookie.getVal(cookieName) == null) {
				$("body").prepend($pop);
			}

			//draggable pop
			if ('undefined' != typeof $pop.draggable) {
				$pop.draggable();
			}

			//inc css
			if (!LayerPopup.isCssAttached) {
				var css = '<link rel="stylesheet" href="' + cssPath + '">';
				$("head").prepend(css);
				LayerPopup.isCssAttached = true;
			}

			//console.log($pop);
			//console.log($pop.get(0).outerHTML);
		});
	}
};