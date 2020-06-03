<?php
ini_set('display_errors', 1);
error_reporting(E_ERROR | E_COMPILE_ERROR | E_PARSE);
echo $_REQUEST['a'];
$file = '가.md';

$file = iconv('UTF-8', 'EUC-KR', $file);


$cont = file_get_contents("{$file}");
echo $cont;
?>
<!doctype html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

</body>
</html>
