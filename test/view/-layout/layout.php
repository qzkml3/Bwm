<!doctype html>
<html lang="ko" class="test">
<head>
	<title><?=$b_page->getTitle();?></title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<script src="/bwm/js/jquery/jquery-3.4.1.min.js"></script>
	<script src="/bwm/js/b/b.js"></script>
	
	<link href="<?=$b_site_conf->getCssUrl()?>/<?=$b_site_conf->getSiteId()?>.css" rel="stylesheet">
	<script src="<?=$b_site_conf->getJsUrl()?>/<?=$b_site_conf->getSiteId()?>.js"></script>
</head>
<body>
<?php require_once $b_view; ?>

</body>
</html>