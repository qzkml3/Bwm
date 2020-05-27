<!doctype html>
<html lang="ko" class="test">
<head>
	<title><?=$b->getTitle();?></title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="<?=$b->getSiteRootUrl()?>/js/jquery/jquery-3.4.1.min.js"></script>
	<script src="<?=$b->getSiteRootUrl()?>/js/b/b.js"></script>

	<link href="<?=$b->getSiteRootUrl()?>" rel="stylesheet">
	<script src="<?=$b->getSiteRootUrl()?>/<?=$b->getSiteId()?>.js"></script>
</head>
<body>
<?php
require_once $b->getView();
$b->postProc();
?>

</body>
</html>