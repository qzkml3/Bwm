require.config({
	paths: {
		"jquery": "/comm_res/js/jquery/jquery-1.8.3.min",
		"common": "/home/res/js/common",
        "inner": "/home/menu/test_front_end/language/js/requirejs/js/inner",
        "inner2": "/home/menu/test_front_end/language/js/requirejs/js/inner2",
        "outer": "/home/menu/test_front_end/language/js/requirejs/js/outer",
        "outer2": "/home/menu/test_front_end/language/js/requirejs/js/outer2"
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