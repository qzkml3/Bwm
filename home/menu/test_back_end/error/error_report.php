<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pre_proc_home.php';
define('B_LAYOUT', 'sub_test_back_end');
define('B_TITLE', 'error_report');
define('B_DESC', '');
BLayout::getHeader();
?>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
''
?>

<?php
BLayout::getFooter();
?>