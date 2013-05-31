<?php
ini_set('memory_limit','3000M');

//from a steve yegge article on phone interviewing
//gorgeous but sloooowwwwww

//compute nth fibonacci number
function fib($n) {
  //http://stevephillips.me/blog/quick-and-dirty-php-memoization
  static $memo;

  if ($memo && isset($memo[$n])) {
    return $memo[$n];
  }

  $res = $n <= 1 ? $n : fib($n-1) + fib($n-2);
  $memo[$n] = $res;
  return $res;
}


foreach (range(0,100) as $i) {
  print $i." ";
  print fib($i);
  print "\n";
}


//good commnent from HN abt this : good oppportunity to memoize!!
//https://news.ycombinator.com/item?id=1005892

