/**
 * String.prototype으로 만들지 않은 이유
 * - 다른 라이브러리와 충돌 가능성
 * - 다른 언어와의 문법적 동일성
 * */
StringUtil = {
	/*구분자 뒤에 문자열을 리턴*/
	strAfter: function (scope, sep) {
		scope = scope.toString();
		sep = sep.toString();

		return scope.substring(scope.indexOf(sep) + sep.length);
	},
	/*숫자앞에 0추가 후 문자열 리턴*/
	addZero: function (str, wish_size) {
		str =  str.toString();
		var rtnStr = str;

		if (str.length < wish_size) {
			for (var i = 0; i < wish_size - str.length; i++) {
				rtnStr = "0" + rtnStr;
			}
		}
		return rtnStr;
	},
	/*숫자를 돈형식으로 바꾼 후 문자열 리턴*/
	//todo 소수자리
	toMoney: function (str) {
		str = str.toString();
		str = StringUtil.removeStr(str, ",");
		str = str.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
		return str;
	},
	/*문자열이 포함되어 있는지*/
	hasString: function (scope, search) {
		scope = scope.toString();
		search = search.toString();

		if (search.length) {
			if (scope.indexOf(search) > -1) { //String.search 를 안쓴느 이유는 정규식 문자가 들어갈 시 오작동
				return true;
			}
		}
	},
	/*좌우 공백제거*/
	trim: function (str) {
		str = str.toString();
		return str.split(" ").join("");
	},
	/*해당 문자열 제거*/
	removeStr: function (scope, remove_str) {
		return scope.split(remove_str).join("");
	}
};