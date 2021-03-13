<?php

$pdo = new PDO("mysql:host=localhost;dbname=ad_database","root","root");


if (isset($_GET ["add"])) {
    $text = $_POST["text"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    
    echo  $text;
    echo  $name;
    echo  $phone;
    
    $query = $pdo -> prepare("INSERT INTO ads (text, name, phone) value (:text, :name, :phone)");
    $query ->bindValue(":text",$text);
    $query ->bindValue(":name",$name);
    $query ->bindValue(":phone",$phone);
    $query ->execute();


}

else if (isset($_GET ["all"])){
    include_once "api_all.php";


}