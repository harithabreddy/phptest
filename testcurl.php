<?php
    $gspappid = "7B381CC79ED9467B94DB4BFE4BA0C8DE";
	$gspappsecret ="C42B3644G635AG4744GB0C6G0D6925729B1C";
	$ch = curl_init('https://gsp.adaequare.com/gsp/authenticate?grant_type=token');
	
    curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
	CURLOPT_HTTPHEADER => array(
        
        'gspappid: '.$gspappid,
		'gspappsecret: '.$gspappsecret
		),
		));
		$response = curl_exec($ch);
		//var_dump($response);
		
		//echo '<pre>' , var_dump($response) , '</pre>';
		//exit;
		if(!$response){
               die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
        }
        //curl_close($ch);
		// Check for errors
		if($response === FALSE){
			//die(curl_error($ch));
		}

		// Decode the response
		$responseData = json_decode($response, TRUE);
        //var_dump($responseData);
		// Close the cURL handler
		//curl_close($ch);
          print_r($responseData);
//print_r(curl_getinfo($ch));
//print_r(curl_errno($ch));
 //echo curl_getinfo($ch) . '<br/>';
//echo curl_errno($ch) . '<br/>';
//echo curl_error($ch) . '<br/>';


?>