<?php	
	if(empty($_POST['email_4914']) && strlen($_POST['email_4914']) == 0)
	{
		return false;
	}
	
	$email_4914 = $_POST['email_4914'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Email_4914: $email_4914 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_4914";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>