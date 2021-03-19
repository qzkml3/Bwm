/*todo독립적으로 동작할 수 있도록 변경 필요*/
Outliner = {
	create: function (selector) {
		$(selector).each(function () {
			$target = $(this);
			$("#outline ul").append('<li><a href="#' + $target.attr("id") + '">' + $target.children("h2").text() + '</a></li>');
		});
	}
};