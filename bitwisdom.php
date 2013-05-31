<?php


$a = 3;  //11
$b = 4;  //100

$c = $a | $b;

print $c; //111 = 7
print "\n";
print decbin($c);
print "\n";

$d = $a & $b;

print $d; //0
print "\n";
print decbin($d);
print "\n";


//who is here?

$kids = array('eamonn','mary','katie','maggie','amy','peter','jim');


$eamonn = bindec('1000000');
$mary = bindec('0100000');
$katie = bindec('0010000');
$maggie = bindec('0001000');
$amy = bindec('0000100');
$peter = bindec('0000010');
$jim = bindec('0000001');

foreach ($kids as $kid) {
  print $$kid."\n";
}

$here = $eamonn + $amy + $peter;

print decbin($here);
print "\n";
$here = $here - $amy;
print decbin($here);
print "\n";
