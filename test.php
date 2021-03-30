<?php
// Your ID and token



// The data to send to the API
$postData = array(
    'user' => array(
    'username' => 'jeffrey',
    'password' => '12345678',
    'name' => 'A new post',
    'company_id' => 'With <b>exciting</b> content...'
)
);

// Setup cURL
$ch = curl_init('https://kasir-tester.free.beeceptor.com/asd');
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    
    CURLOPT_POSTFIELDS => json_encode($postData)
));

// Send the request
$response = curl_exec($ch);

// Check for errors
if($response === FALSE){
    die(curl_error($ch));
}

// Decode the response
$responseData = json_decode($response, TRUE);

// Close the cURL handler
curl_close($ch);

// Print the date from the response
echo $responseData['published'];



?>