<?php

function limit($str) {
$str = wordwrap($str, 100);
$str = explode("\n", $str);
$result = $str[0] . '...';

return $result;
}

function limit_title($str) {
$str = wordwrap($str, 25);
$str = explode("\n", $str);
$result = $str[0] . '...';

return $result;
}