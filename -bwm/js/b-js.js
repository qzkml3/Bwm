$(document).ready(function () {
	$b.debug.showScript('.on');
	$b.pop.closePopPopClickShadow();
});

window.$b = function () {
	return 'b-js.js v0.01 dev';
}

$b.ajax = {};

/**Charset of ajax*/
$b.ajax.charset = function (charset) {
	$.ajaxSetup({
		'beforeSend': function (xhr) {
			xhr.overrideMimeType('text/html; charset=' + charset);
		},
	});
}

/**
- encodeURIComponent를 추천한다지만 쓰면 Uncaught URIError: URI malformed 가 나므로 deprecated 지만 escape을 쓴다...
- expires 설정안하면 세션쿠키 설정하면 영구쿠키
- 세션쿠키: 익스는 브라우저를 닫으면 사라지고 크폼, 파폭은 브라우저를 닫았다가 열어도 세션이 복구되어 사라지지 않는다.
- 크롬 설정에 브라우저 닫을때 쿠키 지우는 옵션이 있음. 
- 파폭 개발자도구에서는 새로고침시 날짜 지난 쿠키도 표시해 준다. 수동으로 삭제하기 전까지.
 * */
$b.cook = {};

$b.cook.delCook = function(name) {
	var today = new Date();
	document.cookie = name + "=; path=/; expires=" + today.toUTCString() + ";"
}

$b.cook.getCook =  function (name) {
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

$b.cook.setCookOnlyToday = function(name, value) {
	var today = new Date();
	
	var nowHour = today.getHours();
	var nowMin = today.getMinutes()
	var nowSec = today.getSeconds()
	
	var addHour = (23 - nowHour);
	var addMin = (59 - nowMin);
	var addSec = (60 - nowSec);
	
	today.setHours(nowHour + addHour);
	today.setMinutes(nowMin + addMin);
	today.setSeconds(nowSec + addSec);
	
	document.cookie = name + "=" + escape(value) + "; path=/; expires=" + today.toUTCString() + ";"
}

$b.cook.setCookByDate = function(name, value, date) {
	var today = new Date();
	today.setDate(today.getDate() + date);
	document.cookie = name + "=" + escape(value) + "; path=/; expires=" + today.toUTCString() + ";"
}

$b.cook.setCookByHour = function(name, value, hour) {
	var today = new Date();
	today.setHours(today.getHours() + hour);
	document.cookie = name + "=" + escape(value) + "; path=/; expires=" + today.toUTCString() + ";"
}

$b.cook.setCookByMinute = function(name, value, min) {
	var today = new Date();
	today.setMinutes(today.getMinutes() + min);
	document.cookie = name + "=" + escape(value) + "; path=/; expires=" + today.toUTCString() + ";"
}

$b.cook.setCookBySecond = function(name, value, sec) {
	var today = new Date();
	today.setSeconds(today.getSeconds() + sec);
	document.cookie = name + "=" + escape(value) + "; path=/; expires=" + today.toUTCString() + ";"
}

$b.cook.setSessCook =  function (name, value) {
	document.cookie = name + "=" + escape(value) + "; path=/;"
}

$b.date = {};

$b.date.getFullDate = function (sp) {
	if (sp == null) sp = '-'; 
	var v = $b.date.getYear() + sp + $b.date.getMonth() + sp + $b.date.getDate();
	return v;
}

$b.date.getYear = function () {
	var v = new Date().getFullYear();
	return v;
}

$b.date.getMonth = function () {
	var v = new Date().getMonth() + 1;
	v = $b.str.addZero(v, 2);
	return  v;
}

$b.date.getDate = function () {
	var v = new Date().getDate();
	v = $b.str.addZero(v, 2);
	return v;
}

$b.date.getFullTime = function (sp) {
	if (sp == null) sp = ':';
	var v = $b.date.getHour() + sp + $b.date.getMinute() + sp + $b.date.getSecond();
	return v;
}

$b.date.getHour = function () {
	var v = new Date().getHours();
	v = $b.str.addZero(v, 2);
	return v;
}

$b.date.getMinute = function () {
	var v = new Date().getMinutes();
	v = $b.str.addZero(v, 2);
	return v;
}

$b.date.getSecond = function () {
	var v = new Date().getSeconds();
	v = $b.str.addZero(v, 2);
	return v;
}

$b.date.getDay = function () {
	var kor = ['일', '월', '화', '수', '목', '금', '토']; 
	var v = new Date().getDay();
	v = kor[v];
	return v;
}

$b.debug = {};

/** Show script to page
 * If no class parameter every script to page
 * */
$b.debug.showScript = function (cls) {
	var $script;

	if (cls) {
		$script = $('script').filter(cls);
	} else {
		$script = $('script');
	}

	$script.wrapInner('<div class="b_source"></div>');
	/*$script.each(function () {
		var $script = $(this);
		var script = $b.outerHtml($script);

		$script.before('<code class="b_source"><xmp>' + script + "</xmp></code>");
	});*/
}

$b.pop = {};

$b.pop.POP_CLASS = 'b_pop';
$b.pop.POP_PAGE_CLASS = 'b_pop_page';
$b.pop.POP_HEAD_CLASS = 'b_pop_head';
$b.pop.POP_BODY_CLASS = 'b_pop_body';
$b.pop.POP_FOOT_CLASS = 'b_pop_foot';

$b.pop.POP = '<section class="' + $b.pop.POP_CLASS + '"></section>';
$b.pop.POP_PAGE = '<div class="' + $b.pop.POP_PAGE_CLASS + '"></div>';
$b.pop.POP_HEAD = '<div class="' + $b.pop.POP_HEAD_CLASS + '">알림</div>';
$b.pop.POP_BODY = '<div class="' + $b.pop.POP_BODY_CLASS + '"></div>';
$b.pop.POP_FOOT = '<div class="' + $b.pop.POP_FOOT_CLASS + ' b_bt_w b_m_h_c_8px"></div>';
$b.pop.POP_BT_OK = '<button onclick="$b.pop.removePop(this);" class="b_bt_ok">확인</button>';
$b.pop.POP_BT_CANCEL = '<button onclick="$b.pop.removePop(this);" class="b_bt_cancel">취소</button>';

$b.pop.alert = function (html, tit) {
	var $pop = $($b.pop.POP);
	$pop.append($b.pop.POP_PAGE);
	if (tit) {
		$pop.find('.' + $b.pop.POP_PAGE_CLASS).append($b.pop.POP_HEAD);
	}
	$pop.find('.' + $b.pop.POP_PAGE_CLASS).append($b.pop.POP_BODY);
	$pop.find('.' + $b.pop.POP_PAGE_CLASS).append($b.pop.POP_FOOT);
	$pop.find('.' + $b.pop.POP_BODY_CLASS).html(html);
	$pop.find('.' + $b.pop.POP_FOOT_CLASS).append($b.pop.POP_BT_OK);

	$pop.appendTo('body');
	$pop.fadeIn('fast');
	$pop.find('button').eq(0).focus();
	$b.scroll.lockScroll();
}

$b.pop.confirm = function (callback, html, tit) {
	var $pop = $($b.pop.POP);
	$pop.append($b.pop.POP_PAGE);
	if (tit) {
		$pop.find('.' + $b.pop.POP_PAGE_CLASS).append($b.pop.POP_HEAD);
	}
	$pop.find('.' + $b.pop.POP_PAGE_CLASS).append($b.pop.POP_BODY);
	$pop.find('.' + $b.pop.POP_PAGE_CLASS).append($b.pop.POP_FOOT);

	$pop.find('.' + $b.pop.POP_HEAD_CLASS).html(tit);
	$pop.find('.' + $b.pop.POP_BODY_CLASS).html(html);
	$pop.find('.' + $b.pop.POP_FOOT_CLASS).append($b.pop.POP_BT_OK);
	$pop.find('.' + $b.pop.POP_FOOT_CLASS).append($b.pop.POP_BT_CANCEL);

	var $pop_ok_btn = $pop.find('button').eq(0);

	$pop.appendTo('body');
	$pop.fadeIn('fast');

	$pop_ok_btn.focus();
	$b.scroll.lockScroll();
	$pop_ok_btn.on('click', function () {
		callback();
	});
}

$b.log = function (o) {
	return console.log(o);
}

$b.result = function (o) {
	var v = '<div class="b_result">' + o + '</div>';

	document.write(v)
}

$b.outerHtml = function (jq) {
	var $jq = $(jq);
	var outerHtml = $jq.wrap('<div class="temp">').parent().html()

	$jq.unwrap();
	return outerHtml;
}

$b.write = function (s) {
	document.write(s);
}

$b.write_br = function (s) {
	document.write(s + '<br>');
}

$b.write_ln = function (s) {
	document.write(s + '\n');
}

$b.isStr = function (o) {
	return typeof o == 'string';
}

$b.isArray = function (o) {
	return o instanceof Array;
}

$b.isObj = function (o) {
	return o instanceof Object;
}

$b.isFt = function (o) {
	return o instanceof Function;
}

$b.scroll = {};

$b.scroll.lockScroll = function(target) {
	if (!target) target = 'html';
	$(target).css({'overflow-y':'hidden'});
}

$b.scroll.unlockScroll = function(target) {
	if (!target) target = 'html';
	$(target).css({'overflow-y':'scroll'});
}

$b.str = {};

$b.str.addZero = function (v, size) {
	var v  = new String(v);
	
	for (var i = 0; i < v.length; i++) {
		if (v.length < size) {
			v = '0' + v;
		}
	}
	
	return v;
}

/**Search text in contents*/
$b.str.hasStr = function (full_str, keyword) {
	return full_str.indexOf(keyword) > -1;
}

$b.tab = function (bt, ct, onClass) {
	var $aBt = $(bt);
	var aCt;

	if (onClass == null) { //default value
		onClass = 'on';
	}

	if ($b.isArray(ct)) { //default type to array
		aCt = ct;
	} else {
		aCt = new Array(ct);
	}

	$aBt.eq(0).addClass(onClass);

	for (var i = 0; i < aCt.length; i++) {
		var $ct = $(aCt[i]);
		$ct.eq(0).addClass('on');
	}

	$(document).on('click', bt, function () {
		var $btns = $(bt);
		var $clickBtn = $(this);
		var idx;

		$btns.removeClass('on');
		$clickBtn.addClass('on');

		$btns.each(function (i) {
			if ($(this).hasClass('on')) {
				idx = i;
				return false;
			}
		});

		for (var i = 0; i < aCt.length; i++) {
			var $ct = $(aCt[i]);
			$ct.removeClass('on');
			$ct.eq(idx).addClass('on');
		}

		return false;
	});
};

$b.img = {};

/**Responsive image map*/
$b.img.resImgMap = function () {
	$('map').imageMapResize();
}

/**Image in contents*/
$b.img.imgInCont = function (sel) {
	var $imgs = $(sel).find('img');

	$($imgs).each(function () {
		var $img = $(this);
		var parentTagName = $img.parent().get(0).tagName;

		$img.css({
			'display': 'block',
			'max-width': '100%',
			'margin-left': 'auto',
			'margin-right': 'auto',
		});

		if (parentTagName != 'A') {
			$img.wrap('<a target="_blank" href="' + $img.attr('src') + '">');
		}
	});
}

/**Scroll end of document*/
function b_onScrollEnd(callBackFunc, charset) {
	if (charset == null) {
		charset = 'utf-8';
	}

	$(window).on('scroll', function () {
		var w_st = $(window).scrollTop();
		var w_h = $(window).height();
		var w_b = Math.round(w_st + w_h) + 100;
		var b_h = Math.round($('body').outerHeight(true));

		window.paging_lock = false;

		if (w_b >= b_h) {
			clearTimeout($.data(this, 'b_scroll_paging'));
			$.data(this, 'b_scroll_paging', setTimeout(function () {

				callBackFunc();
				console.log('============================');
			}, 100));

		}

		console.log('w_b: ' + w_b);
		console.log('b_h: ' + b_h);
	});
}

$b.pop.openPop = function (pop) {
	var $pop = $(pop);
	var firstBtn = $pop.find('button').eq(0);

	if (!$pop.length) $b.log('pop not found.');

	$pop.fadeIn('fast');
	firstBtn.focus();
}

$b.pop.closePop = function (jq) {
	var $pop;

	if ($b.isStr(jq)) {
		$pop = $(jq);
	} else {
		$pop = $(jq).closest('.b_pop');
	}

	$pop.fadeOut('fast');
	$b.scroll.unlockScroll();
	return false;
}

$b.pop.removePop = function (jq) {
	var $pop;

	if ($b.isStr(jq)) {
		$pop = $(jq);
	} else {
		$pop = $(jq).closest('.b_pop');
	}

	$pop.fadeOut('fast', function () {
		$pop.remove()
	});
	$b.scroll.unlockScroll();
	return false;
}

/*Close pop when click shadow when if*/
$b.pop.closePopPopClickShadow = function () {
	$('.b_pop').on('click', function (e) {
		$pop = $(this);

		if (this == e.target) {
			if ($pop.data('close-when-shadow-click') == 1) {
				$b.pop.closePop($pop);
			}
		}
	});
}