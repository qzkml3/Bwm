var cntChkImg = 0;
$(function () {
	$('.img-list > *').on('click', function () {
		var $clickedImg = $(this);
		var clickedNum = parseInt($clickedImg.find('.chk-img').text());

		if ($clickedImg.hasClass('on')) { //끄기
			$clickedImg.removeClass('on');

			cntChkImg--;

			$('.chk-img').each(function () { //한개씩 줄이기
				var $chkImg = $(this);

				if ($chkImg.text() > clickedNum) {
					$chkImg.text($chkImg.text() - 1);
				}
			});


		} else { //켜기
			$clickedImg.addClass('on');
			cntChkImg++;
			$clickedImg.find('.chk-img').text(cntChkImg);
		}



		//console.log('tot: ' + cntChkImg);
		//console.log('clickedText: ' + $clickedImg_chkImg.text());

	});
});

