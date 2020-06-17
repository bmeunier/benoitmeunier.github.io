<?php	
	if(empty($_POST['name_8056_3886']) && strlen($_POST['name_8056_3886']) == 0 || empty($_POST['name_8056_3886']) && strlen($_POST['name_8056_3886']) == 0 || empty($_POST['name_8056_3886']) && strlen($_POST['name_8056_3886']) == 0 || empty($_POST['name_8056_3886']) && strlen($_POST['name_8056_3886']) == 0 || empty($_POST['email_8056_3886']) && strlen($_POST['email_8056_3886']) == 0 || empty($_POST['message_8056_3886']) && strlen($_POST['message_8056_3886']) == 0)
	{
		return false;
	}
	
	$name_8056_3886 = $_POST['name_8056_3886'];
	$name_8056_3886 = $_POST['name_8056_3886'];
	$name_8056_3886 = $_POST['name_8056_3886'];
	$name_8056_3886 = $_POST['name_8056_3886'];
	$email_8056_3886 = $_POST['email_8056_3886'];
	$message_8056_3886 = $_POST['message_8056_3886'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_8056_3886: $name_8056_3886 \nName_8056_3886: $name_8056_3886 \nName_8056_3886: $name_8056_3886 \nName_8056_3886: $name_8056_3886 \nEmail_8056_3886: $email_8056_3886 \nMessage_8056_3886: $message_8056_3886 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_8056_3886";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>