<?php
	//create short variable name
	$DOCUMENT_ROOT = $_SERVER[ 'DOCUMENT_ROOT' ];
	$FILE = "$DOCUMENT_ROOT/order.txt";
?>
<html>
<head>
	<title>Bob's Auto Parts - Customer Orders</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?php
	if (file_exists($FILE)){
		echo 'There are orders waiting to be processed.<br />';
		echo 'This size is ';
		echo filesize($FILE);
		echo '.<br />';
		echo 'Following is file text:<br />';
		@ $fp = fopen($FILE, 'rb');
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
		echo 'Final position of the file pointer is '.(ftell($fp));
		echo '.<br />';
		//rewind($fp);
		fseek($fp, 0, SEEK_SET);
		echo 'After fseek(rewind), the position is '.(ftell($fp));
		echo '.<br />';
		fclose($fp);
	}else {
		echo 'There are currently no orders.';
	}
?>
</body>
</html>