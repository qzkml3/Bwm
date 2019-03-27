Test = {
	//todo 사용성이 있는지 체크
	
	/* 인풋과 버튼이 있을시 두개의 간격 나눔*/
	divideWidth: function (el, offset) {
		$(el).each(function () {
			$el = $(this);
			$parent = $el.parent();
			$next = $el.next();

			$el.width($parent.width() - $next.width() - offset);
		});
	}
	,
	/* body height */
	setBodyHeightPx: function () {
		var bodyHeight = $("body").outerHeight(true);
		$("body").outerHeight(bodyHeight);
	}
	,
	/**
	 * 체크박스 목록을 다른 체크박스로 복사한다.
	 * 체크한 값들 넘길때 사용
	 */
	cloneCheck: function (chk, chk_clone) {
		$(chk).each(function (i) {
			$(this).on("click", function () {
				$chk = $(this);
				$chk_clone = $(chk_clone);
				if ($chk.prop("checked")) {
					$chk_clone.eq(i).prop("checked", true);
					$chk_clone.eq(i).attr("preview_checked", true);
				} else {
					$chk_clone.eq(i).prop("checked", false);
					$chk_clone.eq(i).attr("preview_checked", false);
				}
			})
		});
	},
};