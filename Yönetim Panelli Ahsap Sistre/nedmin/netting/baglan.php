<?php
$kdHost = "localhost";
$kdDbName = "ahsap";
$kdCharset = "utf8";
$kdUser = "root";
$kdPassword = "berkay123456";
try{
    $db = new PDO("mysql:host=$kdHost; dbname=$kdDbName; charset=$kdCharset", $kdUser, $kdPassword);


    //echo "connection is successfull!";
}
catch(PDOException $x) {
    echo $x->getMessage();
}
?>