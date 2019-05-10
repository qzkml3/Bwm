$(document).ready(function () {
	asideToCont();
});

function asideToCont() {
	$('#aside-left a').on('click', function () {
		var cateText = $(this).text();
		$('#main li').each(function () {
			if (StringUtil.hasString($(this).text(), cateText)) {
				var v = $(this).text();
				$('html, body').animate({scrollTop: $(this).position().top});
				return false;
			}
		});
		return false;
	});
}