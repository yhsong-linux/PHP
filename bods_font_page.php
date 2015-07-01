<?php
	$pictures = array('xpn.png', 'xqf_32x32.png', 'xrced.png', 'xtide.png',
			'yabause.png', 'yakuake.png', 'zim.png', 'yoshimi.png'
	);

	shuffle($pictures);
?>
<html>
<head>
	<title>Bob's Auto Parts</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<div align="center">
		<table>
			<tr>
				<?php
					for ($i = 0; $i < 3; $i++){
						echo "<td align=\"center\"><img src=\"icon/";
						echo $pictures[$i];
						echo "\" /></td>";
					}
				?>
			</tr>
		</table>
	</div>
</body>
</html>