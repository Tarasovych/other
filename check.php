<?php

$text = 'a123bc';
$regexp = '/[a-z][0-9][0-9][0-9][a-z][a-z]/';
if (preg_match($regexp, $text)) {
	echo "OK";
} else {echo"WRONG";}