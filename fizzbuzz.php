<?php

$fizz = 3;
$buzz = 7;

$range = 100;

print fizzBuzz($fizz,$buzz,$range);



function fizzbuzz($fizz,$buzz,$range) {
  foreach (range(1,$range) as $i) {
    if (0 == $i%($fizz*$buzz)) {
      print "FIZZBUZZ";
    } elseif (0 == $i%$fizz) {
      print "FIZZ"; 
    } elseif (0 == $i%$buzz) {
      print "BUZZ";
    } else {
      print $i;
    }
    print "\n";
  }
}

