<?php 

if (isset($_POST['buy-data'])){

  $network = $_POST['network'];  
  $dataplan = $_POST['dataplan']; 
  $numb = $_POST['numb']; 
  $amount = $_POST['amount']; 

}
  if (empty($network) || empty($dataplan) || empty($numb) || empty($amount)){
    header("Location: ../index.php?buydata=empty");
    exit();
  }//elseif (!preg_match("/^[a-zA-Z]*$/", $msg) || !preg_match("/^[a-zA-Z]*$/", $msg)){
      //header("Location: ../home.php?sendsms=charerror");
      //exit();
  //}
else{
    

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://www.yemightnetworks.com/api/data/',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>'{
        "network": "'.$network.'",
        "mobile_number": "'.$numb.'",
        "plan": "'.$dataplan.'", 
        "Ported_number": "true"
    }',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Token cfbd19a97a7a4dafd2d0f665492e55d24bda71bc'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;


    echo $numb;



    //header("Location: ../home.php?sendsms=res");
    //exit();
  }
 

