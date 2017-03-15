<?php

// Get full path to this file (very usefull)
// __FILE__ is a magic constant that gives current file path
// dirname() is a function that gives the parent directory of a file or a directory
$basePath = dirname(__FILE__);

// Get all contacts within contacts dir
// (see ben.php to know how to create your own contact)
$contactsList = array();

// Read contacts dir
if ($handle = opendir($basePath.DIRECTORY_SEPARATOR.'contacts')) {
	while (false !== ($entry = readdir($handle))) {
		if ($entry != '.' && $entry != '..') {
			$currentFullFilePath = $basePath . DIRECTORY_SEPARATOR . 'contacts' . DIRECTORY_SEPARATOR . $entry;

			require $currentFullFilePath;

			if (isset($data) && is_array($data) && array_key_exists('fname', $data) && array_key_exists('lname', $data) && array_key_exists('email', $data)) {
				$contactsList[$entry] = $data;
			}
		}
	}

	closedir($handle);
}
// DEBUG
// echo '<pre>'.print_r($contactsList, 1).'</pre>';


// Display
require dirname(__FILE__).'/view'.DIRECTORY_SEPARATOR.'header.php';
require dirname(__FILE__).'/view'.DIRECTORY_SEPARATOR.'home.php';
require dirname(__FILE__).'/view'.DIRECTORY_SEPARATOR.'footer.php';