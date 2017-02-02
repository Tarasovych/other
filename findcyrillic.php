<?php

error_reporting(-1);

$text = 'here is a text but sоmewhere there is cyrillic symbоl try to find';
$regexp = '/[а-я]/ui';
$matches = array();

$count = preg_match_all($regexp, $text, $matches);
echo "I FOUND THIS: {$count}";
var_dump ($matches);