/**
 * String.prototype으로 만들지 않은 이유
 * - 다른 라이브러리와 충돌 가능성
 * - 다른 언어와의 문법적 동일성
 * */
StringUtil = {
	/*구분자 뒤에 문자열을 리턴
	비추 substr이나 substring 추천
	* */
	/*afterStr: function (scope, sep) {
		scope = scope.toString();
		sep = sep.toString();

		return scope.substring(scope.indexOf(sep) + sep.length);
	},*/
	/*숫자앞에 0추가 후 문자열 리턴*/
	addZero: function (str, wish_size) {
		var str =  str.toString();
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
		str = str.replace(/,/g, '');
		str = str.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
		return str;
	},
	/**
	 * 문자열이 포함되어 있는지
	 * 사용 비추 (모듈화) match 추천
	 */
	/*hasString: function (scope, search) {
		scope = scope.toString();
		search = search.toString();

		if (search.length) {
			if (scope.indexOf(search) > -1) {
				return true;
			}
		}
	},*/
	/**좌우 공백제거 단어만 된다. $.trim 추천*/
	/*trim: function (str) {
		str = str.toString();
		return str.split(" ").join("");
	},*/
	/**
	 * 해당 문자열 제거
	 * 사용비추 (모듈화) replace 추천
	 * */
	/*removeStr: function (scope, remove_str) {
		return scope.split(remove_str).join("");
	}*/
};