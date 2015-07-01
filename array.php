<?php
	$prices = array('Tires' => 100, 'Oil' => 10, 'Spark Plugs' => 4);

	asort($prices);

	foreach ($prices as $key => $value)
		echo $key. ' - ' .$value. '<br />';

	reset($prices);
	ksort($prices);

	while ($element = each($prices)){
		echo $element[ 'key' ];
		echo ' - ';
		echo $element[ 'value' ];
		echo '<br />';
	}

	reset($prices);

	while (list($product, $price) = each($prices)){
		echo $product. ' - ' .$price. '<br />';
	}

	$products = array(array('Code' => 'TIR', 'Description' => 'Tires', 'Price' => 100),
			array('Code' => 'OIL', 'Description' => 'Oil', 'Price' => 10),
			array('Code' => 'SPK', 'Description' => 'Spaks Plugs', 'Price' => 4)
	);
	for ($row = 0; $row < 3; $row++){
		while (list($key, $value) = each($products[$row])) {
			echo '|' .$value;
		}
		echo '|<br />';
	}
?>