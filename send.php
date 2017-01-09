<?php
  require 'vendor/autoload.php';

  $to = $_POST['To'];
  $subject = $_POST['Subject'];
  $from = $_POST['From'];
  $body = $_POST['Body'];

  $request_body['personalizations'][0]['to'][0]['email'] = $to;
  $request_body['personalizations'][0]['subject'] = $subject;
  $request_body['from']['email'] = $from;
  $request_body['content'][0]['type'] = 'text/plain';
  $request_body['content'][0]['value'] = $body;

  $apiKey = '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';
  $sg = new \SendGrid($apiKey);

  $response = $sg->client->mail()->send()->post($request_body);
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: /index.php");
  exit();