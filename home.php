<?php
	require 'page.php';
	
	$homepage = new Page();
	
	$homepage->content = "<p>Welcome to the home of TLA Consulting.
							Please take some time to get to know us.</p>
							<p>We specialize in serving your busniess needs 
							and hope to hear from you soon.</p>";
	
	$homepage->Display();
?>