<?php

$str = '4589715';

function factorial($num) {
  if (1 == $num) {
    return 1;
  }
  return $num*factorial($num-1);
}

function numOccur($str,$char) {
  $oc = 0;
  foreach (str_split($str) as $letter) {
    if ($char === $letter) {
      $oc += 1;
    }
  }
  return $oc;
}

function numPerms($str) {
  $numerator = factorial(strlen($str));
  $denom = 1;
  foreach (array_unique(str_split($str)) as $letter) {
    $oc = numOccur($str,$letter);
    $denom = $denom*factorial($oc);
  }
  return $numerator/$denom;
}

$num_perms = numPerms($str);
$result = array();

while (count($result) < $num_perms) {
  $parts = str_split($str);
  shuffle($parts);
  $new_str = join('',$parts);
  $result[$new_str] = 1;
}

ksort($result);

print_r($result);
