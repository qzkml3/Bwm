Form = {
	isSubmit: false
	,
	submit: function (form, action) {
		if (! this.isSubmit) {
			this.isSubmit = true;

			$.post(action, $(form).serialize(), function (res) {
				$("body").append(res);
			});
		} else {
			alert("요청을 처리중입니다. 잠시 기다려 주시기 바랍니다.");
		}
	}
};