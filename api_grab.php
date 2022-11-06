<?php

if (isset($_GET['action']) && ($_GET['action'] == "_get_patients")) {
  get_patient();
}


function get_patient() {
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
}


if (isset($_GET['action']) && ($_GET['action'] == "_get_patient_name")) {
  get_patient_name();
}

function get_patient_name() {
  $ch = curl_init();

  $ptName = isset($_GET['ptName']) ? $_GET['ptName'] : 0;

  curl_setopt($ch, CURLOPT_URL, 'https://new.unimedrx.com/crm/common/ajaxHandler.php');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "ptName=".$ptName."&getPatientListsByNameLikeWhere=getPatientListsByNameLikeWhere");
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
  
  $headers = array();
  $headers[] = 'Authority: new.unimedrx.com';
  $headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
  $headers[] = 'Accept-Language: en-US,en;q=0.9';
  $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
  $headers[] = 'Cookie: PHPSESSID=32dfb9dad771868f2303663b28b7c928;';
  $headers[] = 'Origin: https://new.unimedrx.com';
  $headers[] = 'Referer: https://new.unimedrx.com/crm/MSO/selectPatient.php?1656139445';
  $headers[] = 'Sec-Ch-Ua: ^^Google';
  $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
  $headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
  $headers[] = 'Sec-Fetch-Dest: empty';
  $headers[] = 'Sec-Fetch-Mode: cors';
  $headers[] = 'Sec-Fetch-Site: same-origin';
  $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36';
  $headers[] = 'X-Requested-With: XMLHttpRequest';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
  $result = curl_exec($ch);
  echo $result;
  if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
  }
  curl_close($ch);
}
