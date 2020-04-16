<!doctype html>
<html lang="ko" class="test">
<head>
	<title>
		<?=$_page->getLayout();?>
	</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<script src="/bwm/js/jquery/jquery-3.4.1.min.js"></script>
	<script src="/bwm/js/b/b.js"></script>
	
	<link href="<?=$_site_conf->getC?>/css<?=$_site_conf->getSiteId()?>.css" rel="stylesheet">
	<script src="<?=$_site_conf->getJsUrl()?><?=$_site_conf->getSiteId()?>.js"></script>
</head>
<body>
<?php require_once $_view; ?>
</body>
</html>