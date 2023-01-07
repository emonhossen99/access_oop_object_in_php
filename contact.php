<?php
include('oop.php');

$blue_print = new Person();
$name = $blue_print->name;
$age = $blue_print->age;
$hobby = $blue_print->hobby;
$work = $blue_print->work;
echo $name.$age.$hobby.$work;

?>