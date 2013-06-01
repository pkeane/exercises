<?php

$red = 123;
$green = 9;
$blue = 255;

print toRGB($red,$green,$blue);
print "\n";

/*
 * test _dec2hex
foreach (range(0,255) as $i) {
  print _dec2hex($i)."\n";
}
 */

function _dec2hex($dec) {
  $chars = '0123456789abcdef';
  $char_array = str_split($chars);
  if ($dec > 255) {
    die('error: decimal number must be <= 255');
  }
  $second = floor($dec/16);
  $second_char = $char_array[$second];
  $first = $dec%16;
  $first_char = $char_array[$first];
  return $second_char.$first_char;
}


function toRGB($red,$green,$blue) {
  return _dec2hex($red)._dec2hex($green)._dec2hex($blue);
}
