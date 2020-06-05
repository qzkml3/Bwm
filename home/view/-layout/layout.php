<!doctype html>
<html lang="ko" class="test">
<head>
	<title><?=$b->getTitle();?></title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--bwm lib-->
	<link href="<?=$b->site_conf->getBwmRootUrl()?>/css/b-css.css" rel="stylesheet">
	<script src="<?=$b->site_conf->getBwmRootUrl()?>/js/jquery/jquery-3.5.1.min.js"></script>
	<script src="<?=$b->site_conf->getBwmRootUrl()?>/js/b-js.js"></script>
	<!--site lib-->
	<link href="<?=$b->site_conf->getSiteRootUrl()?>/css/<?=$b->site_conf->getSiteId()?>.css" rel="stylesheet">
	<script src="<?=$b->site_conf->getSiteRootUrl()?>/js/<?=$b->site_conf->getSiteId()?>.js"></script>
</head>
<body class="<?=$b->getLayout();?> b_init">
<?php require_once 'gnb.php' ?>
<main class="b_page">
	<?php if ($b->getPageTitle()) { ?>
		<h1><?=$b->getPageTitle()?></h1>
	<?php } ?>
	<?php

	require_once $b->getView();
	$b->postProc();
	?>
</main>
</body>
</html>