<?php
  require 'vendor/autoload.php';

  $request_body = json_decode('{
    "personalizations": [
      {
        "to": [
          {
            "email": "'.$_POST["To"].'"
          }
        ],
        "subject": "'.$_POST["From"].'"
      }
    ],
    "from": {
      "email": "'.$_POST["Subject"].'"
    },
    "content": [
      {
        "type": "text/plain",
        "value": "'.$_POST["Body"].'"
      }
    ]
  }');

  $apiKey = getenv('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');
  $sg = new \SendGrid($apiKey);

  $response = $sg->client->mail()->send()->post($request_body);
  echo $response->statusCode();
  echo $response->body();
  echo $response->headers();