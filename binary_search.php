<?php

function binarySearch($arr,$size,$targ) {
  if ($size == 1) {
    return $targ == $arr[0];
  }
  $index_at_half = floor($size/2);
  if ($targ == $arr[$index_at_half]) {
    return true;
  } 
  if ($targ > $arr[$index_at_half]) {
    $new_array = array_slice($arr,$index_at_half);
    return binarySearch($new_array,count($new_array),$targ);
  }
  if ($targ < $arr[$index_at_half]) {
    $new_array = array_slice($arr,0,$index_at_half);
    return binarySearch($new_array,count($new_array),$targ);
  }
}


$test = [77,2,3,2,3,45,6,76,5,43,5,6,7,7,6,45,3,17,44];
sort($test);


foreach (range(0,100) as $i) {
  if (binarySearch($test,count($test),$i)) {
    print "$i found\n";
  } else {
    print "$i not found\n";
  }
}
