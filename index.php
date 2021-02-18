<?php
$brands = ['Coca-Cola', 'Nike', 'Chanel', 'Bentley', 'Justin Bridou', 'Prada', 'Logitech', 'Tesla', 'Guiness', 'Victorinox'];
$randomBrands = array_rand($brands, 3);
echo $brands[$randomBrands[0]] . "\n" . $brands[$randomBrands[1]];
?>