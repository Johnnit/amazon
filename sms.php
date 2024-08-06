<?php
//Send an SMS using Gatewayapi.com
$url = "https://gatewayapi.com/rest/mtsms";
$api_token = "Oee8Bm-PTiWCYuQ2Fl9b-7yGabJj7_IxeDtvyZpELMFp-SmdYr5hiFm5juVrKTEt";

$otp = mt_rand(1000000,9999999);
//Set SMS recipients and content
$recipients = [9057326602];
$json = [
    'sender' => 'AMAzon store',
    'message' => "Hello world your verification code is $otp",
    'recipients' => [],
];
foreach ($recipients as $msisdn) {
    $json['recipients'][] = ['msisdn' => $msisdn];
}

//Make and execute the http request
//Using the built-in 'curl' library
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
curl_setopt($ch,CURLOPT_USERPWD, $api_token.":");
curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($json));
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
print($result);
$json = json_decode($result);
print_r($json);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/" method="post">

    </form>
</body>
</html>