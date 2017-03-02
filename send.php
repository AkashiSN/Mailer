<?php
  require 'vendor/autoload.php';
  session_start();
  
  $request_body = json_decode("{
  \"personalizations\": [
    {
      \"to\": [
        {
          \"email\": \"${_POST['Destination']}\"
        }
      ],
      \"subject\": \"${_POST['Subject']}\"
    }
  ],
  \"from\": {
    \"email\": \"${_POST['From']}\"
  },
  \"content\": [
    {
      \"type\": \"text/plain\",
      \"value\": \"${_POST['Body']}\"
    }
  ]
}");

  $apiKey = '';
  $sg = new \SendGrid($apiKey);

  $response = $sg->client->mail()->send()->post($request_body);

  $_SESSION['statusCode'] = $response->statusCode();
  
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: index.php");