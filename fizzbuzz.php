<?php

$fizz = 3;
$buzz = 5;

$range = 100;

print fizzBuzz($fizz,$buzz,$range);



function fizzbuzz($fizz,$buzz,$range) {
  foreach (range(1,$range) as $i) {
    print $i." ";
    if (0 == $i%15) {
      print "FIZZBUZZ";
    } elseif (0 == $i%3) {
      print "FIZZ"; 
    } elseif (0 == $i%5) {
      print "BUZZ";
    }
    print "\n";
  }
}

