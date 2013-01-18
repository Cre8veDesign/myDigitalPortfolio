<?php
if(isset($_POST['submitted'])) {
	if($_POST['name'] == '') {
		$nameError = '*Please enter your name';
	} 
	
	if($_POST['emailFrom'] == '') {
		$emailFromError = '*Please specify an email';
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", $_POST['emailFrom'])) {
		$emailFromError = '(Invalid email)';
	}
	
	if($_POST['subject'] == '') {
		$subjectError = '*Please specify a subject';
	}
	
	if($_POST['message'] == '') {
		$messageError = '*Please write a message';
	}

	if(!isset($nameError) && !isset($emailFromError) && !isset($subjectError) && !isset($messageError)) {
		include('sendemail.php');
		
	}
}

?>