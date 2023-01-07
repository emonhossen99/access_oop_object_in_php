<?php 
include('product.php');

$productDetails = new product();

$productDetails -> setDetails("Laravel",15000,3);
echo $productDetails->getData();

$productDetails -> setDetails("Lenovo",45000,3);
echo $productDetails->getData();

$productDetails -> setDetails("Samsung",18000,3);
echo $productDetails->getData();


?>