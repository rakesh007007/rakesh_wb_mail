<?php
$csv = array_map("str_getcsv", file("contacts.txt", "r")); 
$header = array_shift($csv); 
// Seperate the header from data

$col = array_search("Value", $header); 
 foreach ($csv as $row) {      
 $array[] = $row[$col]; 
}
