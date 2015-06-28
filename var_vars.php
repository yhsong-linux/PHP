<html>
<head>
	<title>The test variable variables</title>
</head>
<body>
<?php
	$a = "Hello";
	$$a = "World";
	echo "$a ${$a}";
?>
</body>
</html>
