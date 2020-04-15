<?php

  function sumOfOddFab($max) {
    $ele1 = 0;
    $ele2 = 1;
    $sum = 1;
    while($ele1 + $ele2 <= $max) {
      $current = $ele1 + $ele2;
      if ($current%2 == 1) {
        $sum += $current;
      }
      $ele1 = $ele2;
      $ele2 = $current;
    }
    return $sum;
  }
  
  echo sumOfOddFab(22);
?>
