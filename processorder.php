<html>
<head>
	<title>Bob's Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php
	echo '<p>Order processed at ';
	echo date('H:i, jS F Y');
	echo '</p>';
	$tireqty = $_POST[ 'tireqty' ];
	$oilqty = $_POST[ 'oilqty' ];
	$sparkplugs = $_POST[ 'sparkplugs' ];
	echo '<p>Your order is as follow:</p>';
	echo $tireqty. ' tires<br />';
	echo $oilqty. ' bottles of oil<br />';
	echo $sparkplugs. ' spark plugs<br />';
?>
</body>
</html>
