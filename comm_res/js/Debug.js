Debug = {
	showJsCode: function () {
		$("script.code, style.code").each(function() {
			var $script = $(this);
			$script.after('<code/>');

			var $code = $script.next();
			$code.append('<xmp/>');

			var $xmp = $code.children('xmp');
			$xmp.html($script.html())

			$xmp.css({
				'font-family': 'ubuntu mono, consolas, monoco, source code pro'
				, 'background': '#eee'
				, 'line-height': '1.5'
				, 'overflow-x': 'auto'
				, 'tab-size': '3'
				, 'display': 'block'
			});
		});
	}
};