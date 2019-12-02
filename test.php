<?php
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'recog.php');

ini_set('memory_limit', '2048M');

if ($argc < 2) {
	echo "usage: php test.php id_card_file_path";
	exit(1);
}

$recog = new recog($argv[1]);

try {
    echo $recog->recognize_id_number() . "\n";
} catch (recog_exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}