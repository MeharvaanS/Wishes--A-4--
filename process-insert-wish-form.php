<?php 
    $myName = $_POST["name"];
    $friendName = $_POST["friendName"];
    $email = $_POST["email"];
    $friendEmail = $_POST["friendEmail"];
    $wish = $_POST["wish"];
    $imageURL = $_POST["imageURL"];

    //connect
    $dsn = "mysql:host=localhost:3307;dbname=wish_database;charset=utf8mb4";
    $dbusername="Meharvaan";
    $dbpassword="cChTjnewB7eTZmIe";
    
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    //prepare

    $stmt = $pdo->prepare("INSERT INTO `wish_table` 
        (`wishId`, `name`, `friendName`, `eMail`, `friendEmail`, `wish`, `imageURL`) 
        VALUES 
        (NULL, '$myName', '$friendName', '$email', '$friendEmail', '$wish', '$imageURL');");

    //execute
    $stmt->execute();

?>
<h1>NEW USER:</h1>
<p><b>Name: </b><?=$myName?></p>
<p><b>Friend's name: </b><?=$friendName?></p>
<p><b>E-mail: </b><?=$email?></p>
<p><b>Friend's E-mail: </b><?=$friendEmail?></p>
<p><b>Wish: </b><?=$wish?></p>
<p><b>Image URL: </b><?=$imageURL?></p>

<a href="select-wishes.php?wishId=">Go to Wishes</a>