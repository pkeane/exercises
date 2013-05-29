<?php

$str = '4589715';

//use formula to determine expected number
//of permutation
$num_perms = numPerms($str);

//now perform a simulation: shuffle 
//the string and make it an assoc array key
//continue until length of array is equal to
//number of permutations

//(should be able to do many beyoned that w/o the
//array ever getting largers

$result = array();

while (count($result) < $num_perms) {
  $parts = str_split($str);
  shuffle($parts);
  $new_str = join('',$parts);
  $result[$new_str] = 1;
}

ksort($result);

print_r($result);

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


/*
 from http://www.mathwarehouse.com/probability/permutations-repeated-items.php
If A out of N items are identical, then the number of different
permutations of the N items is N!A! If a set of N items contains A
identical items, B identical items, and C identical items etc.., then
the total number of different permutations of N objects is
  N!/(A!*B!*C!...!)
 */

function numPerms($str) {
  //n!
  $numerator = factorial(strlen($str));
  $denom = 1;
  //a!*b!*c!....
  foreach (array_unique(str_split($str)) as $letter) {
    $oc = numOccur($str,$letter);
    $denom = $denom*factorial($oc);
  }
  return $numerator/$denom;
}

