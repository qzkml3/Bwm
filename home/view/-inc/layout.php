<!doctype html>
<html lang="ko" class="test">
<head>
	<title>
		<?php
		if ($_title) {
			echo $_title . ' : ' . SITE_NAME;
		} else {
			echo SITE_NAME;
		}
		?>
	</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link href="<?=CSS_URL?>/<?=SITE_Id?>.css" rel="stylesheet">
	
	<script src="/bwm/js/jquery/jquery-3.4.1.min.js"></script>
	
	<script src="/bwm/js/Str/Str.js"></script>
	<script src="/bwm/js/Cs/Cs.js"></script>
	
	<script src="<?=JS_URL?>/<?=SITE_Id?>.js"></script>
</head>
<body>
<script>
	console.log('[Loaded]: layout');
</script>
<?php require_once $_view; ?>
</body>
</html>