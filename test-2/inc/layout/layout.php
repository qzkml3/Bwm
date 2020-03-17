<!doctype html>
<html lang="ko" class="test">
<head>
	<title>
		<?php
		if ($_title) {
			echo $_title . ' : '. SITE_NAME;
		} else  {
			echo SITE_NAME;
		}
		?>
	</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link href="<?=PRJ_URL?>/css/style.css" rel="stylesheet">

	<script src="/comm_res/js/jquery/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php require_once 'header.php'; ?>
<?php require_once $_view; ?>
<?php require_once 'footer.php'; ?>
</body>
</html>