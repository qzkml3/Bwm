<!doctype html>
<html lang="ko" class="a">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>




<style>
	html, body, .chat_sec {
		height: 100%;
		
	}
	body {margin: 0; background: #dfe9f3;}
	
	
	.chat_sec {overflow-y: auto;}
	.chat_sec > * {height: 200px; border: solid 5px gray;}
</style>


<div class="chat_sec">
	<div>sadf</div>
	<div>sadf</div>
</div>


<script type="text/html" id="tpl">
	<div>1</div>
	<div>2</div>
</script>

<script src="/-/js/jquery/jquery-3.5.1.min.js"></script>
<script>
	var $tpl = $('#tpl').html();
	$tpl = $($tpl);
	
	
	var $chat_sec = $('.chat_sec');

	var current_top_element = $chat_sec.children().first();
	$chat_sec.prepend($tpl);

	$chat_sec.scrollTop(current_top_element.offset().top);
</script>


</body>
</html>