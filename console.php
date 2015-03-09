<?php

if ($argv[0] == basename(__FILE__)) {	
	unset($argv[0]);
}

echo 'Hello, ' . $argv[1] . '!';