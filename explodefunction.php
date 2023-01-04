<!DOCTYPE html>
<html>
<body>

<?php

//the initial strings in an array

$initialArray = array(
"action: Added; quantity: 1; item_code: RNA1; product_name: Mens Organic T-shirt; colour: white; size: XL",
"action: Subtracted; quantity: 7; item_code: RNC1; product_name: Kids Basic T-shirt; colour: denim blue; size: 3-4y",
"action: Added; quantity: 20; item_code: RNV1; product_name: Gift Voucher; style: Mens; Value: £20",
);

// A for loop to apply instructions to each string seperately

for($y=0; $y < count($initialArray); $y++){

// Setting the arrays to NULL to avoid previous runs of the loop bleeding into the next array (I kept getting denim blue gift vouchers)

$keysAndValues = NULL;
$appendList = NULL;

// exploding the string into arrays where each item is a key and its associated value

$keysAndValues = explode(";" , $initialArray[$y]);

// Going through each item on the array one by one, exploding them and adding them to a single array

for($x = 0; $x < count($keysAndValues) ; $x++) {
$bigSplit = explode(":" , $keysAndValues[$x]);
$appendList["$bigSplit[0]"] = "$bigSplit[1]";
$bigSplit = NULL;
}

//printing out the completed array formed from the string

foreach($appendList as $key => $value) {
echo $key . "     =>      " . $value;
echo "<br>";
}

// Formatting in preparation for the next string to be broken down

echo "<br>";
}


?>

</body>
</html>