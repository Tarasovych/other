<?php

$text = ['(380)63-123-45-56', '(380)63-123-45-5', '(380)63-123-45-56'];
$regexp = '/[(][0-9][0-9][0-9][)][0-9][0-9][-][0-9][0-9][0-9][-][0-9][0-9][-][0-9][0-9]/';
$matches = array();
$count = preg_match_all($regexp, $text, $matches);
echo "true: {$count}\n";
var_dump($matches);