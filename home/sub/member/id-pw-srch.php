<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/home/load-bwm.php';

$site->setLayout('sub');
$site->setTitle('아이디 비밀번호 찾기');

require_once $site->getPage();
?>