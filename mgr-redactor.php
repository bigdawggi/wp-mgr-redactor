<?php
/*
Plugin Name: MGR Redactor
Plugin URI:
Description: Removes content from a post that's surrounded by <code>[redact]</code> and replaces it with an ellipsis.
Version: 1.0
Author: Matthew Richmond
Author URI: http://matthewgrichmond.com
License: Apache License v2.0
*/

class MGR_Redactor {
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
		return '<span class="redacted"> &hellip; </span>';
	}
}
MGR_Redactor::i()->init();
