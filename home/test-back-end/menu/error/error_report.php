<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pre-proc-home.php';
define('B_LAYOUT', 'test-back-end-sub');
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