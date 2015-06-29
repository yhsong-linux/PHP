<html>
<head>
    <title>Bob 's Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob 's Auto Parts</h1>
<h2>Order Results</h2>
<?php
    echo "<p>Order processed at ";
    echo date('H:i, jS F Y');
    echo ".</p>";

    /* Create short variable names */
    $tireqty = $_POST[ 'tireqty' ];
    $oilqty = $_POST[ 'oilqty' ];
    $sparkqty = $_POST[ 'sparkplugs' ];

    $totalqty = 0;
    $totalqty = $tireqty + $oilqty + $sparkqty;
    if ($totalqty == 0){
	echo '<p style="color:red">';
	echo 'You did not order anything on the preview page.';
	echo '</p>';
    } else{
	echo '<p>Your order is as follows: </p>';
	echo $tireqty. ' tires<br />';
	echo $oilqty. ' bottles of oil<br />';
	echo $sparkqty. ' spark plugs<br />'; 
	echo 'Items ordered: '.$totalqty.'<br />';
    }
    $totalamount = 0.00;

    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);

    $totalamount = $tireqty * TIREPRICE 
		+ $oilqty * OILPRICE 
		+ $sparkqty * SPARKPRICE;

    echo "Subtotal: $".number_format($totalamount,2)."<br />";

    $taxrate = 0.10;	//local scales tax is 10%
    $totalamount = $totalamount * (1 + $taxrate);
    echo "Total including tax: $".number_format($totalamount,2)."<br />";

/*  echo 'isset($tireqty):'.isset($tireqty). '<br />';
    echo 'isset($nothere):'.isset($nothere). '<br />';
    echo 'empty($tireqty):'.empty($tireqty). '<br />';
    echo 'empty($nothere):'.empty($nothere). '<br />';
*/
?>
</body>
</html>
