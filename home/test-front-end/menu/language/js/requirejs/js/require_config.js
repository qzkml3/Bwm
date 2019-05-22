require.config({
	paths: {
		"jquery": "/-bwm/js/jquery/jquery-1.8.3.min",
		"common": "/home/comm/js/common",
        "inner": "/home/test-front-end/menu/language/js/requirejs/js/inner",
        "inner2": "/home/test-front-end/menu/language/js/requirejs/js/inner2",
        "outer": "/home/test-front-end/menu/language/js/requirejs/js/outer",
        "outer2": "/home/test-front-end/menu/language/js/requirejs/js/outer2"
	},
	shim: {
        "common": {
            deps: ["jquery", "inner", "inner2"]
        },
        "inner": {
            deps: ["jquery"]
        },
        "inner2": {
            deps: ["jquery"]
        },
        "outer": {
            deps: ["jquery"]
        },
        "outer2": {
            deps: ["jquery"]
        }
	}
});