$(document).ready(function () {
	b_onImgChk();
});

/**이미지 체크박스 온*/
function b_onImgChk() {
	$('.b-img-chk').each(function() {
		var btn = '<button type="button" class="b-img-chk-btn">';
		$(this).after(btn);
	});
}