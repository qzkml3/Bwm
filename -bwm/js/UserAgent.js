UserAgent = {
	isWin7: function () {
		if (StringUtil.hasString(navigator.userAgent, "Windows NT 6.1")) {
			return true;
		}
	},
	isIE: function () {
		if (StringUtil.hasString(navigator.userAgent, "Trident")) {
			return true;
		}
	},
	isIE11: function () {
		if (
			StringUtil.hasString(navigator.userAgent, "Trident") &&
			StringUtil.hasString(navigator.userAgent, "rv:11.0")
		) {
			return true;
		}
	},
	isIE10: function () {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 10")) {
			return true;
		}
	},
	isIE9: function () {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 9")) {
			return true;
		}
	},
	isIE8: function () {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 8")) {
			return true;
		}
	},
	isIE7: function () {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 7")) {
			return true;
		}
	},
	isIE6: function () {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 6")) {
			return true;
		}
	},
	isQuirks: function () {
		if (StringUtil.hasString(navigator.userAgent, "MSIE 5")) {
			return true;
		}
	},
	isChrome: function () {
		if (StringUtil.hasString(navigator.userAgent, "Chrome")) {
			return true;
		}
	},
	isFireFox: function () {
		if (StringUtil.hasString(navigator.userAgent, "Firefox")) {
			return true;
		}
	},
	isIOS: function () {
		if (
			StringUtil.hasString(navigator.userAgent, "iPhone") ||
			StringUtil.hasString(navigator.userAgent, "iPad")
		) {
			return true;
		}
	}
};