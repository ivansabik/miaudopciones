#!/usr/bin/php -q
<?php
    // TODO: Throw error if file not found, no file param
    // TODO: from $argv[1] generate img url
    // TODO: doc and variables naming
    array_shift($argv);
    if (count($argv) == 0) {
      $argv[0] = "php://stdin";
    }
    $strOutput = 
    $file = $argv[0];
    $myFile = pathinfo($file)['filename'].'.yuml';
    $fh = fopen($myFile, 'w') or die("can't open file");
    $strLines = file_get_contents($file);
    preg_match_all("#\[#", $strLines, $arrStarts, PREG_OFFSET_CAPTURE);
    preg_match_all("#\]#", $strLines, $arrEndings, PREG_OFFSET_CAPTURE);
      
    // TODO: If not same length throw error
    for($indexArr1 = 0; $indexArr1 < count($arrStarts);  $indexArr1++) {
      $arr1 = $arrStarts[$indexArr1];
      for($indexArr2 = 0; $indexArr2 < count($arr1);  $indexArr2++) {
        $arr2 = $arrStarts[$indexArr1][$indexArr2];
        $strLine = substr($strLines, $arrStarts[$indexArr1][$indexArr2][1], $arrEndings[$indexArr1][$indexArr2][1]+1);
        $strLine = str_replace(array("\r\n", "\n", "\r", '    ','  '), '', $strLine);
        $strLine = str_replace('[  ','[', $strLine);
        fwrite($fh, $strLine.PHP_EOL);
        }
     }
     echo 'Done, check your file : '.$myFile.PHP_EOL;
     fclose($fh);
?>
