<?php
	//create short variable names
	$name = $_POST[ 'name' ];
	$email = $_POST[ 'email' ];
	$feedback = $_POST[ 'feedback' ];
	
	//set up some static informtion
	$toaddress = "yhsong@linx-info.com";
	
	$subject = "Feedback from web site";
	
	$mailcontent = "Customer name:".$name."\n".
					 "Customer email:".$email."\n".
					 "Customer comments:\n".$feedback."\n";
	
	$fromaddress = "From: webserver@example.com";
	
	//invoke mail() function to send mail
	mail($toaddress, $subject, $mailcontent, $fromaddress);
?>
<html>
<head>
	<title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
<h1>Feedback submitted</h1>
<p>Your feedback has been sent.</p>
<p>With trim:</p>
<p><?php echo trim($mailcontent); ?></p>
<p>With nl12br:</p>
<p><?php echo nl2br($mailcontent); ?></p>
</body>
</html>