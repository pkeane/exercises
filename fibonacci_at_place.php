<?php

ini_set('memory_limit','3000M');

function getFibAtTargetPlace($target_place,$current_place=0,$penultimate=0,$ultimate=1) {
  $current_place++;
  if (0 == $target_place) {
    return 0;
  }
  if ($current_place == $target_place) {
    return $ultimate;
  } else {
    $next = $penultimate+$ultimate;
    return getFibAtTargetPlace($target_place,$current_place,$ultimate,$next);
  }
}


foreach (range(0,100) as $i) {
  print $i." ";
  print getFibAtTargetPlace($i);
  print "\n";
}
