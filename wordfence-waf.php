<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/home/cyberma4/public_html/staging/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/home/cyberma4/public_html/staging/wp-content/wflogs/');
	include_once '/home/cyberma4/public_html/staging/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>