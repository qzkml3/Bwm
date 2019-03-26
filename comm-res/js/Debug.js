Debug = {
	showJsCode: function () {
		$("script.code").each(function() {
			$code = $(this);

			$code.before("<xmp/>");
			$code.prev().css("font-family", "ubuntu mono");
			$code.prev().html($code.html())
		});
	}
};