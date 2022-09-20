<?php 

$wishId = $_POST["wishId"];
$name = $_POST["name"];
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

$stmt = $pdo->prepare("UPDATE `wish_table` 
	SET 
	`name` = '$name', 
	`friendName` = '$friendName', 
	`email` = '$email',
    `friendEmail` = '$friendEmail',
    `wish` = '$wish',  
    `imageURL` = '$imageURL' 
	WHERE `wish_table`.`wishId` = $wishId;");

//execute
$stmt->execute();

?>

<h1>Your wish was updated to:</h1>
</br>
<p><b>Name: </b><?= $name?></p>
<p><b>Friend's Name: </b><?= $friendName?></p>
<p><b>E-mail: </b><?= $email?></p>
<p><b>Friend's E-mail: </b><?= $friendEmail?></p>
<p><b>Wish: </b><?= $wish?></p>
<p><b>URL: </b><?= $imageURL?></p>
</br>
<a href="select-wishes.php?wishId=">Return to all records</a>