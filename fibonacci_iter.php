<?php

$recurs = getFib(32);
$iter = getFibIter(32);

print_r(array_diff($recurs,$iter));

function getFib($len,$fib = array(0,1)) {
  if (count($fib) == $len) {
    return $fib;
  }
  $copy = $fib;
  $fib[count($fib)] = array_pop($copy) + array_pop($copy);
  return getFib($len,$fib);
}


function getFibIter($len) {

  $series[0] = 0;
  $series[1] = 1;

  while (count($series) < $len) {
    $copy = $series;
    $series[count($series)] = array_pop($copy) + array_pop($copy); 
  }
  return $series;
}

