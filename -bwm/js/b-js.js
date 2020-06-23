window.b = function (o) {
	return console.log(o);
};


b.str = {};

/** # 문자열에 문자가 있는지 판별*/
b.str.hasStr = function (full_str, keyword) {
	return full_str.indexOf(keyword) > -1;
}


b.img = {};

b.img.resImgMap = function() {
	$('map').imageMapResize();
}

b.img.imgInCont = function (sel) {
	var $imgs = $(sel).find('img');

	$($imgs).each(function () {
		var $img = $(this);
		var parentTagName = $img.parent().get(0).tagName;

		$img.css({'width': '100%'});

		if (parentTagName != 'A') {
			$img.wrap('<a target="_blank" href="' + $img.attr('src') + '">');
		}
	});
}