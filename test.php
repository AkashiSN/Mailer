<?php
  require 'vendor/autoload.php';
  
  $apiKey = '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';
  $sendgrid = new SendGrid($apiKey);

  $mail = new SendGrid\Email();
  $mail->addTo('btorntireinvynriy@gmail.com');
  $mail->setSubject('Test');
  $mail->setHTML('<h1>Test</h1>');
  $sendgrid->send($mail);
?>