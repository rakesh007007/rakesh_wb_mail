<?php
	$ch = curl_init();
	$urlc='?http.protocol.handle-redirects=true';
	$urlp = "https://api.webengage.com/v1/notification";
	$url = $urlp.$urlc;
	echo $url;
	$varak='{"licenseCode":"826170b8","title":"unique","description":"unique bhaai unique Add a small description for your notification; this can be rich<\/b> text ...","theme":"WebEngage Classic","startOn":"","endOn":"","skipTargetPage":null,"maxTimesPerUser":null,"status":null,"emptyTokenCheck":false,"canMinimize":true,"canClose":true,"showTitle":true,"actionLink":"http:\/\/www.google.com","actionText":"Click Me","goalEId":"","notificationLayoutEId":null,"notificationActions":[{"notificationId":null,"actionText":"Click Me","actionLink":"http:\/\/www.google.com","notificationActionTarget":"TOP","isPrime":true}],"id":"","actionTarget":"TOP","tokens":[],"layoutId":"i78egaf","layoutConfig":{"alignment":"BOTTOM_RIGHT","width":500,"button_alignment":"RIGHT"},"themeId":"aea1de3"}';
	$fuck=json_decode($varak,true);
	$fuck2 = json_encode($fuck);
	// 2. set the options, including the url
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Authorization: bearer bf4d5b5b-59f2-475d-b941-c63be866f6ed",
    	"Content-Type: application/json; charset=UTF-8"
	));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fuck2);
	 
	// 3. execute and fetch the resulting HTML output
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$output = (curl_exec($ch));
	if ($output === FALSE) { 
	    echo "cURL Error: " . curl_error($ch);
	} else {
		echo "working<br>";
	}
	 
	// 4. free up the curl handle
	curl_close($ch);
	$duck=json_decode($output,true);
	echo "fuck you";
	$NotificationId=$duck ['response']['data']['id'] ;
?>

<?php
	$ch = curl_init();
	$urlc='?http.protocol.handle-redirects=true';
	$urlp = "https://api.webengage.com/v1/notification";
	$url = $urlp.'/'.$NotificationId.'/'.'saveActivation'.$urlc;
	$JsonBody = '{
   "licenseCode":"826170b8",
   "title":null,
   "description":null,
   "theme":null,
   "startOn":"13-05-2015 00:00",
   "endOn":"31-05-3015 23:59",
   "skipTargetPage":true,
   "maxTimesPerUser":99,
   "status":"ACTIVE",
   "emptyTokenCheck":false,
   "canMinimize":true,
   "canClose":true,
   "showTitle":false,
   "actionLink":null,
   "actionText":null,
   "goalEId":null,
   "notificationLayoutEId":null,
   "notificationActions":[

   ],
   "id":"~10cb5a15",
   "actionTarget":"TOP",
   "tokens":[

   ],
   "layoutId":null,
   "layoutConfig":null,
   "themeId":null
}';
    $body2 = json_decode($JsonBody, true);
	echo "checkmate<br>";
	$body2['id'] = $NotificationId;
	$body3 = json_encode($body2);
	print_r($body2['id']);
	 
	// 2. set the options, including the url
	echo "<br>url<br>";
	echo $url;
	echo "<br>url<br>";
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Authorization: bearer bf4d5b5b-59f2-475d-b941-c63be866f6ed",
    	"Content-Type: application/json; charset=UTF-8"
	));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$body3);
	 
	// 3. execute and fetch the resulting HTML output
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$output = (curl_exec($ch));
	if ($output === FALSE) { 
	    echo "cURL Error: " . curl_error($ch);
	} else {
		echo $output;
	}
	 
	// 4. free up the curl handle
	curl_close($ch);
?>

		
		