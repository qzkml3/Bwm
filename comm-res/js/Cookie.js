Cookie = {
	setCookie: function (name, value, expiredays) {
		var todayDate = new Date();
		todayDate.setDate(todayDate.getDate() + parseInt(expiredays));
		document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
	},
	getCookie: function (name) {
		var arg = name + "=";
		var alen = arg.length;
		var clen = document.cookie.length;
		var i = 0;
		while (i < clen) {
			var j = i + alen;
			if (document.cookie.substring(i, j) == arg)
				return this.getCookieVal(j);
			i = document.cookie.indexOf(" ", i) + 1;
			if (i == 0) break;
		}
		return null;
	},
	delCookie: function(name) {
		this.setCookie(name, null, -1);
	},
	getCookieVal: function (offset) {
		var endstr = document.cookie.indexOf(";", offset);
		if (endstr == -1)
			endstr = document.cookie.length;
		return unescape(document.cookie.substring(offset, endstr));
	}
};