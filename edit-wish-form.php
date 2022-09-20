<?php
    $wishId = $_GET["wishId"];
    //connect
    $dsn = "mysql:host=localhost:3307;dbname=wish_database;charset=utf8mb4";
    $dbusername="Meharvaan";
    $dbpassword="cChTjnewB7eTZmIe";
        
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    //prepare

    $stmt = $pdo->prepare("SELECT * FROM `wish_table` WHERE `wishId`= $wishId");

    //execute
    $stmt->execute();

    //fetch
    $row = $stmt->fetch();
?>

<form action="process-edit-wish-form.php" method="POST">
    <b>Name: </b> <input type="text" name="name" value="<?= $row['name']?>"/></br></br>
    <b>Friend's Name: </b><input type="text" name="friendName" value="<?= $row['friendName']?>"/></br></br>
    <b>Email: </b><input type="text" name="email" value="<?= $row['email']?>"/></br></br>
    <b>Friend's Email: </b><input type="text" name="friendEmail" value="<?= $row['friendEmail']?>"/></br></br>
    <b>Wish: </b><input type="text" name="wish" value="<?= $row['wish']?>"/></br></br>
    <b>Image URL: </b><input type="text" name="imageURL" value="<?= $row['imageURL']?>"/></br></br>

    <input type="hidden" name ="wishId" value="<?= $wishId?>"/>

    <input type="submit" value="Edit"/>
</form>