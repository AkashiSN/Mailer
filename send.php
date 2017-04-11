<?php
  require 'vendor/autoload.php';
  session_start();

  for($i = 0; $i < sizeof($_POST['Destination']); $i++){
    $DestinationName = $_POST['Destination-Name'][$i];
    $Destination = $_POST['Destination'][$i];
    $request_body = json_decode("{
      \"personalizations\": [
        {
          \"to\": [
            {
              \"name\": \"$DestinationName\",
              \"email\": \"$Destination\"
            }
          ],
          \"subject\": \"${_POST['Subject']}\"
        }
      ],
      \"from\": {
        \"name\": \"${_POST['From-Name']}\",
        \"email\": \"${_POST['From']}\"
      },
      \"content\": [
        {
          \"type\": \"${_POST['MIME']}\",
          \"value\": \"${_POST['Body']}\"
        }
      ]
    }");
  }   

  $apiKey = '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';
  $sg = new \SendGrid($apiKey);

  $response = $sg->client->mail()->send()->post($request_body);

  $_SESSION['statusCode'] = $response->statusCode();
  
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: index.php");