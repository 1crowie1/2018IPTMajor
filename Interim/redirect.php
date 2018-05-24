<?php
function redirect($url) {
	if (!headers_sent()) {
		//if headers not sent yet... then do php redirect
		header('Location: '.$url);
		exit;
	}
	else {
		echo '<script type="text/javascript">';
		echo 'window.location.href="'.$url.'";';
		echo '</script>';
		echo '<noscript>';
		echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
		echo '</noscript>';
		exit;
	}
}
?>