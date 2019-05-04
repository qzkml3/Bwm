<?php
	class BHtml {
		static function getTitle() {
			if (B_TITLE) {
				$title = B_TITLE . B_TITLE_DELIMETER . B_SITE_NAME;
			} else {
				$title = B_SITE_NAME;
			}
			return $title;
		}
	}