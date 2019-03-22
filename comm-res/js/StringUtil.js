StringUtil = {
	addZero: function (str, count) {
		str =  str.toString();
		var returnObj = str;

		if (str.length < count) {
			for (var i = 0; i < count - str.length; i++) {
				returnObj = "0" + returnObj;
			}
		}
		return returnObj;
	},
	hasString: function (str, search) {
		//String.search 를 안쓴느 이유는 정규식 문자가 들어갈 시 오작동
		search = search.toString();

		if (search.length) {
			if (str.indexOf(search) > -1) {
				return true;
			}
		}
	}
};