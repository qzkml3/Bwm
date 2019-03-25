Cookie = {
	setCookie: function (name, value) {
		this.setCookieByDate(name, value, null);
	}
	,
	setCookieByDate: function (name, value, expireDay) {
		var todayDate = new Date();
		todayDate.setDate(todayDate.getDate() + parseInt(expireDay));
		document.cookie = name + "=" + encodeURIComponent(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
	}
	,
	setCookieByHour: function (name, value, expireTime) {
		var todayDate = new Date();
		todayDate.setHours(todayDate.getHours() + parseInt(expireTime));
		document.cookie = name + "=" + encodeURIComponent(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
	}
	,
	getVal: function (name) {
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
	}
	,
	getCookieVal: function (offset) {
		var endstr = document.cookie.indexOf(";", offset);
		if (endstr == -1)
			endstr = document.cookie.length;
		return decodeURIComponent(document.cookie.substring(offset, endstr));
	},
	delCookie: function(name) {
		this.setCookieByDate(name, null, -1);
	}
};