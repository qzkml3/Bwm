<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setLayout('sub');
$site->setTitle('$b.ajax.charset() #Charset #Encoding #MimeType #인코딩 #케릭터셋');

require_once $site->getPage();
?>