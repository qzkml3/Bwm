<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/test/load-bwm.php';
echo iconv( "EUC-KR", "UTF-8", '가.php');
echo '<hr>';
echo iconv( "UTF-8", "EUC-KR", '가.php');
echo '<hr>';
echo iconv( "UTF-8", "UTF-8", '가.php');
echo '<hr>';


require_once iconv( "UTF-8", "EUC-KR", '가.php');
exit; 
 

$b->layout('sub');
$b->title('');

require_once $b->page();
?>