<?php 
	require 'vendor/autoload.php';

	$sendgrid = new SendGrid(getenv('SENDGRID_USERNAME'), getenv('SENDGRID_PASSWORD'));
	$email = new SendGrid\Email();
	$email->addTo('btorntireinvynriy@gmail.com')->
	    setFrom('from@example.com')->
	    setSubject('件名')->
	    setText('こんにちは！');

	$sendgrid->send($email);
?>