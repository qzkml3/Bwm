<?php
//#Site config.
define('SITE_NAME', 'test-2');

//#Path config.
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);
define('PRJ_URL', '/test-2');
define('PRJ_DIR', ROOT_DIR . PRJ_URL);

//#Load page.
$v = $_SERVER['PHP_SELF'];
$v = str_replace('.php', '.html', $v);
$_view = ROOT_DIR . $v;
require_once PRJ_DIR . '/inc/layout/layout.php';