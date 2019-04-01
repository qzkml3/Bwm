/*
* encodeURI 나 encodeURIComponent 를 쓰면 Uncaught URIError: URI malformed 가 나므로
* deprecated 지만 escape을 쓴다...
* */
Cookie = {
	setCookie: function (name, value) {
		this.setCookieByDate(name, value, null);
	}
	,
	setCookieByDate: function (name, value, expireDay) {
		var todayDate = new Date();
		todayDate.setDate(todayDate.getDate() + parseInt(expireDay));
		document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
	}
	,
	setCookieByHour: function (name, value, expireTime) {
		var todayDate = new Date();
		todayDate.setHours(todayDate.getHours() + parseInt(expireTime));
		document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
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
				return getCookieVal(j);
			i = document.cookie.indexOf(" ", i) + 1;
			if (i == 0) break;
		}
		return null;


		function getCookieVal (offset) {
			var endstr = document.cookie.indexOf(";", offset);
			if (endstr == -1)
				endstr = document.cookie.length;
			return unescape(document.cookie.substring(offset, endstr));
		}
	}
	,
	delCookie: function(name) {
		this.setCookieByDate(name, null, -1);
	}
};