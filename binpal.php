<?php

//fron Steve Yegge question
//function that tells you if binary representation of dec is a palindrome

function isDecBinPal($dec) {
  return isPal(dec2bin($dec));
}


function isPal($str) {
  if (!$str) {
    return true;
  }
  if (1 == strlen($str)) {
    return true;
  }
  $parts = str_split($str);
  $first = array_shift($parts);
  $last = array_pop($parts);
  if ($first != $last) {
    return false;
  } else {
    return isPal(join($parts));
  }
}

/*
$tests = [
  'amanaplanacanalpanama',
  'onetwoowteno',
  'hello',
  'goodbye'
  ];

foreach ($tests as $t) {
  if (isPal($t)) {
    print $t." yes\n";
  } else {
    print $t." no\n";
  }
}
 */

function dec2bin ($dec) {
  if ($dec > pow(2,16)) {
    die('sorry, too big');
  }
  if ($dec == 0) {
    return "0";
  }
  $chars =array();
  $started = false;
  for ($i=16;$i >= 0; $i--) {
    if ($dec == 1 && $i < 1) {
      $chars[] = "1";
      $started = true;
      $dec = 0;
    } elseif ($dec - pow(2,$i) >= 0) {
      $started = true;
      $chars[] = "1";
      $dec = $dec - pow(2,$i);
    } else {
      if ($started) {
        $chars[] = "0";
      }
    }
  }
  return join($chars);
}


/*
foreach(range(0,pow(2,16)) as $i) {
  if (decbin($i) == dec2bin($i)) {
    print $i." PASS\n";
  } else {
    print $i." Fail\n";
  }
}
 */


foreach(range(0,pow(2,16)) as $i) {
  if (isDecBinPal($i)) {
    print $i." ".dec2bin($i)."\n";
  }
}





