<?php

date_default_timezone_set('Asia/Jakarta');

include "../vendor/autoload.php";

try {
	$runner = new \Akane\Core\Runner;
	$runner->boot();
} catch (Exception $e) {
    echo 'Internal Error: '.$e->getMessage();
}