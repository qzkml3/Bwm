Html = {
	setHtml5Tag: function () {
		if (UserAgent.isQuirks() || UserAgent.isIE6() || UserAgent.isIE7() || UserAgent.isIE8()) {
			document.createElement("main");
			document.createElement("header");
			document.createElement("footer");
			document.createElement("nav");
			document.createElement("aside");
		}
	}
};