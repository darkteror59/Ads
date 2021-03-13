<?php


$text = $_POST["text"];
$name = $_POST["name"];
$phone = $_POST["phone"];

echo  $text;
echo  $name;
echo  $phone;

$query = $pdo -> prepare("INSERT INTO ads (text,name,phone)
value (:text, :name, :phone)");
$query ->bindValue(":text",$text);
$query ->bindValue(":name",$name);
$query ->bindValue(":phone",$phone);
$query ->execute();