<?php

  function sumOfOddFab($max, $init = 0, $add = 1) {
    $sum = $init + $add;
    while(($current = $init + $add) <= $max) {
      if ($current%2 == 1) {
        $sum += $current;
      }
      $init = $add;
      $add = $current;
    }
    return $sum;
  }
  
  echo sumOfOddFab(22);
?>
