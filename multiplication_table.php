<?php

$table = array();

foreach (range(1,12) as $i) {
  $row = array();
  foreach (range(1,12) as $j) {
    $row[] = $i*$j;
  }
  $table[] = $row;
}

foreach ($table as $row) {
  foreach ($row as $cell) {
    print $cell;
    foreach (range(1,4-strlen($cell)) as $na) {
      print " ";
    }
  }
  print "\n";
}

