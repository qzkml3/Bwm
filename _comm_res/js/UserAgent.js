UserAgent = {
	isWin7: function () {
		if (navigator.userAgent.match("Windows NT 6.1")) {
			return true;
		}
	},
	isIE: function () {
		if (navigator.userAgent.match("Trident")) {
			return true;
		}
	},
	isIE11: function () {
		if (
			navigator.userAgent.match("Trident") &&
			navigator.userAgent.match("rv:11.0")
		) {
			return true;
		}
	},
	isIE10: function () {
		if (navigator.userAgent.match("MSIE 10")) {
			return true;
		}
	},
	isIE9: function () {
		if (navigator.userAgent.match("MSIE 9")) {
			return true;
		}
	},
	isIE8: function () {
		if (navigator.userAgent.match("MSIE 8")) {
			return true;
		}
	},
	isIE7: function () {
		if (navigator.userAgent.match("MSIE 7")) {
			return true;
		}
	},
	isIE6: function () {
		if (navigator.userAgent.match("MSIE 6")) {
			return true;
		}
	},
	isQuirks: function () {
		if (navigator.userAgent.match("MSIE 5")) {
			return true;
		}
	},
	isChrome: function () {
		if (navigator.userAgent.match("Chrome")) {
			return true;
		}
	},
	isFireFox: function () {
		if (navigator.userAgent.match("Firefox")) {
			return true;
		}
	},
	isIOS: function () {
		if (
			navigator.userAgent.match("iPhone") ||
			navigator.userAgent.match("iPad")
		) {
			return true;
		}
	}
};