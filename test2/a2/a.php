<?php

use Service\TestService;

require_once $_SERVER['DOCUMENT_ROOT'] . '/new/class/Service/TestService.php';

$tSvc = new TestService();
$testList = $tSvc->getTestList();