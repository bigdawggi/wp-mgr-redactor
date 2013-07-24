<?php
/*
Plugin Name: MGR Redactor
Plugin URI:
Description: For logged out visitors, this removes content from a post that's surrounded by <code>[redact]</code> and replaces it with an ellipsis.
Version: 1.0.2
Author: Matthew Richmond
Author URI: http://matthewgrichmond.com
License: Apache License v2.0
*/

class MGR_Redactor {
	static $ver = '1.0.2';

	static $i = null;
	public function i() {
		if (self::$i === null) {
			self::$i = new MGR_Redactor;
		}
		return self::$i;
	}

	public function init() {
		add_shortcode('redact', array($this, 'redact'));
	}

	public function redact($atts = array(), $content = null) {
		$content = is_user_logged_in()
			? '<del>'.$content.'</del>'
			: '<span class="redacted"> &hellip; </span>';
		return $content;
	}
}
MGR_Redactor::i()->init();
