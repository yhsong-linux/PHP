<?php
	//create short variable name
	$DOCUMENT_ROOT = $_SERVER[ 'DOCUMENT_ROOT' ];
?>
<html>
<head>
	<title>Bob's Auto Parts - Customer Orders</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?php
	if (file_exists("$DOCUMENT_ROOT/order.txt")){
		echo 'There are orders waiting to be processed.<br />';
		echo 'This size is ';
		echo filesize("$DOCUMENT_ROOT/order.txt");
		echo '.<br />';
		echo 'Following is file text:<br />';
		@ $fp = fopen("$DOCUMENT_ROOT/order.txt", 'rb');
		if (!$fp){
			echo '<p><strong>No orders pending.
			Please try again later.</strong></p>';
			exit;
		}

		while (!feof($fp)){
			$char = fgetc($fp);
			if (!feof($fp))
				echo ($char == "\n" ? "<br />" : $char);
		}
	}else {
		echo 'There are currently no orders.';
	}
?>
</body>
</html>