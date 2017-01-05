<?php 
	require 'vendor/autoload.php';

	$request_body = json_decode('{
	  "personalizations": [
	    {
	      "to": [
	        {
	          "email": "btorntireinvynriy@gmail.com"
	        }
	      ],
	      "subject": "Hello World from the SendGrid PHP Library!"
	    }
	  ],
	  "from": {
	    "email": "test@example.com"
	  },
	  "content": [
	    {
	      "type": "text/plain",
	      "value": "Hello, Email!"
	    }
	  ]
	}');

	$apiKey = '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';
	$sg = new \SendGrid($apiKey);

	$response = $sg->client->mail()->send()->post($request_body);
	echo $response->statusCode();
	echo $response->body();
	echo $response->headers();
?>