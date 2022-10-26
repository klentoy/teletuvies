<?php

$curl = curl_init();

$start = isset($_GET['start']) ? $_GET['start'] : 0;
$len = isset($_GET['length']) ? $_GET['length'] : 0;

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://new.unimedrx.com/crm/common/patients_dtserverside.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'start='.$start.'&length='.$len,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'Cookie: PHPSESSID=a1ad70678a4c85365a53065d2cc98aeb'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
