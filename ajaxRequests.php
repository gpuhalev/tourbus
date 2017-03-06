<?php

if (!empty($_POST['ajax']) && $_POST['ajax'] = 1 && !empty($_POST['toMail'])) {
	//Checking mail field
	(!empty($_POST['mail']) && preg_match('/([a-z0-9\\+_\\-]+)(\\.[a-z0-9\\+_\\-]+)*@([a-z0-9\\-]+\\.)+[a-z]{2,6}$/',$_POST['mail'])) ? $mail = $_POST['mail'] : $mailError = 1;
	
	//Checking name field
	(!empty($_POST['name']) && preg_match('/[a-zA-Z ]+$/',$_POST['name']) && strlen($_POST['name']) >=3) ? $name = $_POST['name'] : $nameError = 1;
	
	//Checking mail field
	(preg_match('/([a-z0-9\\+_\\-]+)(\\.[a-z0-9\\+_\\-]+)*@([a-z0-9\\-]+\\.)+[a-z]{2,6}$/',$_POST['toMail'])) ? $toMail = $_POST['toMail'] : $toMailError = 1;
	
	//Checking message field
	(!empty($_POST['message']) && strlen($_POST['message']) >=5) ? $message = $_POST['message'] : $messageError = 1;
	
	if (empty($mailError) && empty($nameError) && empty($messageError) && empty($toMailError)) {
		$messageSend = "Name: {$name}\nE-mail: {$mail}\nMessage: {$message}";
		if (mail($toMail,'site query',$messageSend)) {
			echo 'success';
		} else {
			echo 'error';
		}
	}
}

?>