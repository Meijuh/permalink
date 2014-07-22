<?php

$isCLI = ( php_sapi_name() == 'cli' );

if (!$isCLI) {
	var_dump($_SERVER);
} else {
	var_dump($_SERVER);
}

