<?php
$file = fopen("contacts.txt","r");

while(! feof($file))
  {
  $line=  fgets($file);
  $ph = explode(" ", $line);
  echo $ph[0];
  }

fclose($file);
?>
