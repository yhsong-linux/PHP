<?php
	$prices = array('Tires' => 100, 'oil' => 10, 'spark plug' => 4);
	foreach ($prices as $key => $value)
		echo $key. ' - ' .$value. '<br />';
	reset($prices);
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
?>