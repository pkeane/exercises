<?php

$pattern = '/[0-9]{3}-?[0-9]{4}/';

$tests = array(
  '333-4444',
  '34-3333',
  '1231234',
  '453-1231234',
  '53-1231-234',
  'fddffvdf556661231234'
);

foreach ($tests as $t) {
  if (preg_match($pattern,$t)) {
    print "yes $t\n";
  } else {
    print "no $t\n";
  }
}

