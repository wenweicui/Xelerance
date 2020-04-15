<?php

  // Output with echo
  function getNameByProvince1($csv, $province) {
    if (($file = fopen($csv, "r") !== FALSE) {
      // Loop the row of csv file
      while ( ($row = fgetcsv($file) ) !== FALSE ) {
        if($row[3] == $province) {
          echo $row[0] . '<br>';
        } 
        fclose($file);
      } else {
        throw new Exception('ERROR: The csv file can not be found!');
      } 
  }
  
  getNameByProvince1("address - address.csv", 'Ontario');
  
  // Output with result csv file
  function getNameByProvince2($csv, $province, $outPath = 'result.csv') {
    if (($file = fopen($csv, "r") !== FALSE) {
      if (file_exists($outPath)) {
        unlink($outPath);
      }
      $output = fopen($outPath, "a");
      $isTitle = true;
      // Loop the row of csv file
      while ( ($row = fgetcsv($file) ) !== FALSE ) {
        // if this is the first line, put the title in the file
        if ($isTitle) {
          fputcsv($output, array('Name'));
          $isTitle = false;
        }
        if ($row[3] == $province) {
          fputcsv($output, array($row[0]));
        }
      }
        fclose($output);
        fclose($file);
      } else {
        throw new Exception('ERROR: The csv file can not be found!');
      } 
  }
  
  getNameByProvince2('address - address.csv', 'Ontario', 'test.csv');
        
?>
