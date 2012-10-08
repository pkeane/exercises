<?php

print_r(getFib(32));

function getFib($len,$fib = array(0,1)) {
  if (count($fib) == $len) {
    return $fib;
  }
  $copy = $fib;
  $fib[count($fib)] = array_pop($copy) + array_pop($copy);
  return getFib($len,$fib);
}
