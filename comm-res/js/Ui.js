Ui = {
	/*인풋값을 돈형식으로 치환*/
	toMoney: function (el) {
		$(el).on("keyup paste", function () {
			var $el = $(this);
			setTimeout(function() {
				var val = $el.val();
				val = StringUtil.toMoney(val);
				$el.val(val);
			}, 100);
		});
	}
};