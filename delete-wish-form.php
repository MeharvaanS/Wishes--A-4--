<?php

    $wishId = $_GET['wishId'];

    //connect
    $dsn = "mysql:host=localhost:3307;dbname=wish_database;charset=utf8mb4";
    $dbusername="Meharvaan";
    $dbpassword="cChTjnewB7eTZmIe";
    
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    //prepare

    $stmt = $pdo->prepare("SELECT * FROM `wish_table` WHERE `wishId` = $wishId;");

    //execute
    $stmt->execute();

    $row = $stmt->fetch();
?>

<h1>Are you sure you want to delete this Wish?</h1></br>
<p><b>Name: </b> <?= $row['name'] ?></p>
<p><b>Friend's Name: </b> <?= $row['friendName'] ?></p>
<p><b>E-mail: </b><?= $row['email'] ?></p>
<p><b>Friend's E-mail: </b><?= $row['friendEmail'] ?></p>
<p><b>wish: </b><?= $row['wish'] ?></p>
<p><b>URL: </b><?= $row['imageURL'] ?></p>
<a href="select-wishes.php?wishId=">No</a></br></br>

<form action="process-delete-wish-form.php" method="POST">
    <input type="hidden" name ="wishId" value="<?= $row['wishId']?>"/>
	<input type="submit" value="Yes">
</form>
