$(document).ready(function () {
	$(document).on("click", function (e) {
		var el = $(e.target);

		if (el.css("display") != "block") {
			el = el.parent();
		}
		var v = el.contents().unwrap().wrapAll('<h1/>').addClass("guided").addClass("guide-h1");
		console.log(v);
		el.addClass("guided").addClass("guide-h1");
		console.log(el);
	});
	$("p").addClass("guided");
	$("p").addClass("p-guide");
});