<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$B->$page->setTitle('');
$B->$page->setLayout('sub');
$B->$page->setTag('');

$B->$page->setTitle('');

require_once $B->page->getPage();
?>
<!doctype html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>q test</title>
	<script src="/-/js/jquery/jquery-latest.min.js"></script>
</head>
<body>

<div class="p">
	<li></li>
</div>

<script>
	var v = $('.p').find('li');
	v.addClass('c');
	console.log(v);
	
	var v = $('.p').has('li');
	console.log(v);
	v.addClass('k');
</script>

<ul>
	<li>
		a
		<ul>
			
			<li>
				b
				<ul>
					<li>
					<span></span>
					</li>
				</ul>
			</li>
		</ul>
	</li>
</ul>
<script>
	$('li').each(function() {
		var $li = $(this);
		var v = $li.has('> ul');
		
		if (v) {
			$li.css({'background': 'blue'})
		} else {
			$li.css({'background': 'red'})
		}
		
		//console.log(v.length);
		
	});
</script>
</body>
</html>