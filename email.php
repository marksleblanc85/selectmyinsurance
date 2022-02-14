<?php
	$zip = $_POST['zip'];
	$type = $_POST['type'];
	$email = 'mark@marksleblanc.com';
	$blank = $_POST['blank'];
	if($blank == ''){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$headers = "From: mark@marksleblanc.com\r\n";
			$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r";
			$message = 'Zip: '.$zip.'<br/>Type: '.$type;
			if(mail($email, 'Form Submission from SelectMyInsurance', $message, $headers)) {
				echo 'Thanks. Your email was sent successfully.';
			} else {
				echo 'There was a problem sending your email.';
			}
		} else {
			echo 'Please enter a valid email address.';
		}
	} else {
		echo 'Caught by honeypot.';
	}
?>