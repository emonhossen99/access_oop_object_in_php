<?php
include('oop.php');


$copyCode = new SpecialPerson();

$Name = $copyCode -> Name;
$Age = $copyCode ->Age;
$Hobby = $copyCode -> Hobby;
$Work = $copyCode -> Work;

// echo $Name.$Age.$Hobby.$Work;


// echo $copyCode-> MyNaming();

$copyCode -> setPerson("MD Emon Hossen",21,"Coding","Student");
echo  $copyCode -> getPerson();
$copyCode -> setPerson("Emon Hossen",22,"Coding","Student");
echo  $copyCode -> getPerson();
$copyCode -> setPerson("MD Emon Hossen",23,"Coding","Student");
echo  $copyCode -> getPerson();
$copyCode -> setPerson("MD Emon Hossen",24,"Coding","Student");
echo  $copyCode -> getPerson();
$copyCode -> setPerson("MD Emon Hossen",25,"Coding","Student");
echo  $copyCode -> getPerson();

?>