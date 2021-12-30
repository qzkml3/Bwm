function b_dw(o) {
	document.write('<br><br>');
	document.write(o);
}

function b_cl(o) {
	console.log('\n\n');
	console.log(o);	
}

/**
 * Test by Device.
 * See also b_testAgent
 * @returns {string} a: android, i, iPhone
 */
function b_testDevice() {
	var ua = navigator.userAgent;
	ua = ua.toLowerCase();
	
	if (ua.indexOf('android') > -1) {
		return 'a';
	} else if (ua.indexOf('iphone') > -1) {
		return 'i';
	}
}

/**
 * Test by Company.
 * @returns {string} g: google, a: apple, 
 */
function b_testAgent() {
	var ua = navigator.userAgent;
	ua = ua.toLowerCase();
	
	if (ua.indexOf('android') > -1) {
		return 'g';
	} else if (ua.indexOf('mac os') > -1) {
		return 'a';
	}
}