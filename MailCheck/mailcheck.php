<?php
function MailCheck($mail){
  $ch = curl_init();
             $url = 'https://api.mailgun.net/v2/address/validate?address=';
             $mail =trim($mail);
             $url = $url.$mail;

  // 2. set the options, including the url
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Basic YXBpOnB1YmtleS05bGF4M2U1enhjN3Z5dDYxbjI4Z2FnMmx4YXllaDVkMg==",
                          "Accept: application/json",
  ));


  // 3. execute and fetch the resulting HTML output
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output = (curl_exec($ch));
        // 4. free up the curl handle
  curl_close($ch);
  if ($output === FALSE) {
      echo "cURL Error: " . curl_error($ch);
  } else {
                          $output2 = json_decode($output,true);
    $rak=$output2['is_valid'];
                           $rak2 = $rak;
                           if($rak2===false){
                                  return "Invalid";

                           }
                           else{
                              return "valid";
                           }
  }

  }
$fileData=fopen('contacts.txt','r');
$file2=fopen('validMails.txt','w');
$file3=fopen('nonValidMails.txt','w');

while($row=fgets($fileData)){
    // can parse further $row by usingstr_getcsv
    $row = trim($row);
    $var = MailCheck($row);
    if($var =="valid"){
          fwrite($file2, $row."\n");
          echo "valid";
          echo $row."<br>";
    }
    else {
       fwrite($file3, $row."\n");
}

   }
