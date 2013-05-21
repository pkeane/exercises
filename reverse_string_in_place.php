<?php

$tests = array(
  'once upon a time there was a red frog',
  'a',
  'an even string',
  'an odd string',
  'a man a plan a canal panama!',
  '',
);


function revstr($str) {
  $new_str = array();
  foreach (str_split($str) as $ch) {
    array_unshift($new_str,$ch);
  }
  return join('',$new_str);
}

function firstShallBeLast($str,$index=0) {
  $len = strlen($str);
  if ($index+1 > $len/2) {
    return $str;
  }
  $first = $str[$index];
  $last = $str[$len-($index+1)];
  $str[$index] = $last;
  $str[$len-($index+1)] = $first;
  $index++;
  return firstShallBeLast($str,$index);
}

foreach ($tests as $s) {
  if (firstShallBeLast($s) == revstr($s)) {
    print "OK! $s\n";
  } else {
    print "FAIL! $s\n";
  }
}

