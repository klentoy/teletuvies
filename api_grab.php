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
    CURLOPT_POSTFIELDS => 'start='.$start .'&length='.$len,
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
  $get_session_id = isset($_GET['get_session_id']) ? $_GET['get_session_id'] : 0;
  setcookie('PHPSESSID', $get_session_id, 'Session');

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
  $headers[] = 'Cookie: PHPSESSID='. $get_session_id .';';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
  $result = curl_exec($ch);
  echo $result;
  if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
  }
  curl_close($ch);
}


if (isset($_GET['action']) && ($_GET['action'] == "_get_session_id")) {
  get_session_id();
}

function get_session_id () {
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://new.unimedrx.com/login.php',
    CURLOPT_HEADER => 1,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => 'email=j%40am.com&password=1',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/x-www-form-urlencoded'
    ),
    
  ));

  $response = curl_exec($curl);

  $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
  $header = substr($response, 0, $header_size);
  $body = substr($response, $header_size);


  curl_close($curl);
  $get_session_id = headersToArray($header)['Set-Cookie'];
  echo preg_replace("/.*PHPSESSID=([^;]*);.*/", "\\1", $get_session_id);

}   

function headersToArray( $str )
{
    $headers = array();
    $headersTmpArray = explode( "\r\n" , $str );
    for ( $i = 0 ; $i < count( $headersTmpArray ) ; ++$i )
    {
        // we dont care about the two \r\n lines at the end of the headers
        if ( strlen( $headersTmpArray[$i] ) > 0 )
        {
            // the headers start with HTTP status codes, which do not contain a colon so we can filter them out too
            if ( strpos( $headersTmpArray[$i] , ":" ) )
            {
                $headerName = substr( $headersTmpArray[$i] , 0 , strpos( $headersTmpArray[$i] , ":" ) );
                $headerValue = substr( $headersTmpArray[$i] , strpos( $headersTmpArray[$i] , ":" )+1 );
                $headers[$headerName] = $headerValue;
            }
        }
    }
    return $headers;
}