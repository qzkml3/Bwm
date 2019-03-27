Ui = {
	//todo 모듈화 필요 체크와 뒷배경 on
	chkAll: function (btnAllChk, btnChk) {
		$(btnAllChk).on("click", function () {
			var $tr = $(this).closest("table").children("tbody").children("tr");
			var $btnChk = $(btnChk);

			if ($(this).prop("checked")) {
				$tr.addClass("on");
				$btnChk.prop("checked", true);
			} else {
				$tr.removeClass("on");
				$btnChk.prop("checked", false);
			}
		});

		$(btnChk).on("click", function () {
			if ($(this).prop("checked")) {
				$(this).closest("tr").addClass("on");
			} else {
				$(this).closest("tr").removeClass("on");
			}
		});
	}
};