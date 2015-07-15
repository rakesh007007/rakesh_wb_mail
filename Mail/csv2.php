<?php
$fileData=fopen('contacts.txt','r');
$file2=fopen('validUrls.txt','w');
$file3=fopen('nonValidUrls.txt','w');

while($row=fgets($fileData)){  
    // can parse further $row by usingstr_getcsv
    $row = trim($row);
    
    $row = 'http://www.'.urlencode($row);
    $var = (get_headers($row, 1)[0]);
    if($var =="HTTP/1.0 200 OK" || $var =="HTTP/1.1 200 OK"){
          $rown =$row."----->".$var."\n";
          fwrite($file2, $rown);
    }
    else {
       $rown =$row."----->".$var."\n";
          fwrite($file3, $rown);
}
    
   }
