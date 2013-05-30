<?php


function isPowerOf($num,$exponent) {
  //exit condition
  if ($num/$exponent == $exponent) {
    return true;
  }
  if ($num/$exponent < $exponent) {
    return false;
  }
  return isPowerOf($num/$exponent,$exponent);
}



$tests = array(
  array(8,2,true),
  array(27,3,true),
  array(28,3,false),
  array(2048,2,true),
  array(2057,2,false),
);



foreach ($tests as $test) {
  if ($test[2] == isPowerOf($test[0],$test[1])) {
    print "PASSED ".$test[0]." ".$test[1]."\n";
  } else {
    print "FAILED ".$test[0]." ".$test[1]."\n";
  }
}

