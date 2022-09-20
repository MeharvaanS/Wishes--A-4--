<?php

    $wishId = $_POST["wishId"];

    //connect
    $dsn = "mysql:host=localhost:3307;dbname=wish_database;charset=utf8mb4";
    $dbusername="Meharvaan";
    $dbpassword="cChTjnewB7eTZmIe";
        
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    //prepare

    $stmt = $pdo->prepare("DELETE FROM `wish_table` WHERE `wish_table`.`wishId` = $wishId;");

    //execute
    $stmt->execute();

?>
<h1>The record was deleted</h1>
<a href="select-wishes.php?wishId=">Back to wishes</a>

