<?php
// WiC script to email from the contact form

//if form data is filled out, send email
  if (isset($_POST['yourName']))  {
  
  //Email information
 	$admin_email = "ltvvse@rit.edu";
	$to = $_POST['recipient'];
	$message = $_POST['message'];
    $from = $_POST['yourEmail'];
  	$name = $_POST['yourName'];
	
	$message = str_replace("\n.", "\n..", $message);
	$from = str_replace("\n.", "\n..", $from);
	$name = str_replace("\n.", "\n..", $name);
	
	$subject = "WiC Website Message";
	$body = "Message from: " . $name . "\n Email: " . $from . "\n The message: " . $message . "\n";
	
	$headers = "From: $from\r\n";
   	$headers .= "Content-type: text/html\r\n";
	
  	//send email
  	
  	// one mail goes to the WiC coordinator
  	mail($admin_email, $subject,  $body);
  	// one mail goes to the committee head chosen from the drop menu
  	mail($to, $subject, $body);
  	 
  
   //Email response
   
  echo "Thank you " . $name . " for contacting us!";
 }
  
//if "email" variable is not filled out, display the form
  else  {
	echo "There was a problem sending this email.";
	}

?>
