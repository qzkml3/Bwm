/**
 *
 * @type {{addZero: (function(*, *): string)}}
 */
StringUtil = {
	addZero: function (str, count) {
		var str =  str.toString();
		var returnObj = str;

		if (str.length < count) {
			for (var i = 0; i < count - str.length; i++) {
				returnObj = "0" + returnObj;
			}
		}
		return returnObj;
	}
};