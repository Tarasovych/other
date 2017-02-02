<?php

error_reporting(-1);

$text = 'here is a text but sоmewhere there is cyrillic symbоl try to find';
$regexp = '/[а-я]/ui';
$result = preg_replace($regexp, '[$0]', $text);
echo $result;