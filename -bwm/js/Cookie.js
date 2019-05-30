/**
- encodeURI 나 encodeURIComponent 를 쓰면 Uncaught URIError: URI malformed 가 나므로 deprecated 지만 escape을 쓴다...
- expires 설정안하면 세션쿠키 설정하면 영구쿠키
- 세션쿠키: 익스는 브라우저를 닫으면 사라지고 크폼, 파폭은 브라우저를 닫았다가 열어도 세션이 복구되어 사라지지 않는다.
- 파폭 개발자도구에서 테스트하면 새로고침을 하지 않아도 쿠키가 생성 삭제됨을 확인할 수 있어서 편함.
* */
Cookie = {
	setCookOnlyToday: function (name, value) {
		var d = new Date();
		d.setHours(24);
		d.setMinutes(0);
		d.setSeconds(0);
		document.cookie = name + "=" + escape(value) + "; path=/; expires=" + d.toUTCString() + ";"
	}
	,
	setSessCook: function (name, value) {
		this.setCookByDate(name, value, null);
	}
	,
	setCookByDate: function (name, value, expireDay) {
		var todayDate = new Date();
		todayDate.setDate(todayDate.getDate() + parseInt(expireDay));
		document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toUTCString() + ";"
	}
	,
	setCookByHour: function (name, value, expireTime) {
		var todayDate = new Date();
		todayDate.setHours(todayDate.getHours() + parseInt(expireTime));
		document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toUTCString() + ";"
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
	delCook: function(name) {
		this.setCookByDate(name, null, -1);
	}
};