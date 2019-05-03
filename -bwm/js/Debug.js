Debug = {
	showJsCode: function () {
		$("script.code").each(function() {
			$code = $(this);

			$code.before("<xmp/>");
			$code.prev().css({
				'font-family': 'ubuntu mono'
				, 'background': '#eee'
				, 'padding-bottom': '1.5em'
				, 'line-height': '1.5'
			});
			$code.prev().html($code.html())
		});
	}
};