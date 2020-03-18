<?php
require_once 'db/DB.php';
require_once 'db/TB.php';

echo
DB::table(TB::$member)->col('a as kkk')
	->where('1 = 1')->where('1 = 1')
	->orderByAsc('aaa')->orderByDesc('bbb')
	->getQuery();
