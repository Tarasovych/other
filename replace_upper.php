<?php

error_reporting(-1);
mb_internal_encoding('utf-8');

$text = "text. with small. letters.";
print_r (explode(". ",$text));
print_r (ucwords($text));