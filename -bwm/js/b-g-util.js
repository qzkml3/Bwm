$(document).ready(function() {
	b_on_bOn();
});

/**온오프 컨트롤을 켠다*/
function b_on_bOn() {
	var bOn = '.b-on';
	
	$(bOn).each(function() {
		var $chk = $(this);
		var $btn = $('<button type="button" class="b-on-btn">');
		var $txt = $('<span class="b-on-txt"></span>');
		var $toggle = $('<span class="b-on-toggle"></span>');
		var $par = $chk.parent();

		$btn = $btn.insertAfter($chk);
		$txt.appendTo($btn);
		$toggle.appendTo($btn);
		
		$btn.on('click', function() {
			var $btn = $(this);
			var $chk = $btn.prev();
			$chk.prop('checked', !$chk.prop('checked'));
		});
	});
}