$(document).ready(function() {
	//OldPatcher.fixFontPos();
	OldPatcher.setPlaceholder(); //old ie placeholder 적용
	OldPatcher.setYoutubeInfo(); //old ie youtube 미지원 안내
	Ui.responsiveImgMap(); // 반응형 이미지맵
	Ui.setAnimatedHash(); //링크 클릭시 부드러운 이동
});