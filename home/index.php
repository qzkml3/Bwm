<!doctype html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php
echo phpversion();
require_once $_SERVER['DOCUMENT_ROOT'] . '/bwm/class/file/BFile.php';

$file = new BFile();
$file->getRecurFileList('.');



BFile::getFolderList('./');

?>
</body>
</html>