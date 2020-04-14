<?php
require_once 'config/conf-site.php';

/*# Load page.*/
$v = $_SERVER['PHP_SELF'];
$v = str_replace('.php', '.html', $v);
$_view = ROOT_DIR . $v;

require_once INC_DIR  . '/layout.php';