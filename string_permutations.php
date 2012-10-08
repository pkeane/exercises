<?php
ini_set('memory_limit','500M');

$str = '4589715';

print_r(getPerms($str));

function getPerms($input) {
  //use integers representing place 
  //instead of original letters so as
  //to make each letter unique --
  //this only works for strings < 10 chars
  $len = strlen($input);
  if ($len > 9) {
    die('sorry, string is too long');
  }
  $perms = array();
  $perms[1] = range(1,$len);
  foreach(range(2,$len) as $step) {
    $perms[$step] = array();
    foreach (range(1,$len) as $letter) {
      $letter = (string) $letter;
      foreach ($perms[$step-1] as $perm) {
        //only works w/ non-repeating letters
        if (false === strpos($perm,$letter)) {
          $perms[$step][] = $letter.$perm;
        }
      }
    }
  }

  // go back and reassign original letters
  $result = array();
  foreach ($perms[$len] as $perm) {
    $parts = str_split((string) $perm);
    $newperm = '';
    foreach ($parts as $place) {
      $newperm .= $input[$place-1];
    }
    $result[$newperm] = 1;
  }
  return array_keys($result);
}
