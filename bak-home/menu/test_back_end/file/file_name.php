<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . '/pre_proc_home.php';
	define('B_LAYOUT', 'sub_test_back_end');
	define('B_TITLE', BPage::getTitleByFileName());
?>
<?php BLayout::getHeader(); ?>
    <h2>BFile::getFullPath();   </h2>
<?php echo BFile::getFullPath(); ?>

    <h2>BFile::getName();</h2>
<?php echo BFile::getName(); ?>

    <h2>BWM::getView();</h2>
<?php echo BWM::getView(); ?>

<?php

	function getTitle () {
		global $_title;
		return $_title;
	}


   require_once BWM::getView();
	echo 'kkk: ' . getTitle();



?>
<?php BLayout::getFooter(); ?>