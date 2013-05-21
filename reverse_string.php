<?php

$str = 'once upon a time there was a red frog';

$new_str = array();
foreach (str_split($str) as $ch) {
  array_unshift($new_str,$ch);
}

print join('',$new_str);
