<?php

$name = stripslashes($_POST['name']);
$mailFrom = $_POST['emailFrom'];
$subject = stripslashes($_POST['subject']);
$message = stripslashes($_POST['message']);
$headers  = "MIME-Version: 1.0\n";
$headers  .= "From: $name <$mailFrom >\n";
$mailTo = 'daniel@cre8vedesign.com';
			
mail($mailTo, $subject, $message, $headers);

?>