<a href="insert-wish-form.php">Add a new wish</a>
</br></br>
<?

    $wishId = $_GET["wishId"];

    //connect
    $dsn = "mysql:host=localhost:3307;dbname=wish_database;charset=utf8mb4";
    $dbusername="Meharvaan";
    $dbpassword="cChTjnewB7eTZmIe";
        
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    //prepare

    $stmt = $pdo->prepare("SELECT * FROM `wish_table`;");

    //execute
    $stmt->execute();


    
    if( $wishId != "" ){
        while($row = $stmt->fetch()) {  
            if($row["wishId"] == $wishId){
                ?><div>
                        <p><b>Name: </b> <?= $row["name"] ;?></p>
                        <p><b>Friend's Name: </b><?= $row["friendName"] ;?></p>
                        <p><b>E-mail: </b><?= $row["email"] ;?></p>
                        <p><b>Friend's E-mail: </b><?= $row["friendEmail"] ;?></p>
                        <p><b>Wish: </b><?= $row["wish"] ;?></p>
                        <p><b>URL: </b><?= $row["imageURL"] ;?></p>
                        <p><a href="edit-wish-form.php?wishId=<?= $row["wishId"] ;?>">Edit</a>
                        <a href="delete-wish-form.php?wishId=<?= $row["wishId"];?>">Delete</a>
                        <hr>
                    </div>
                <?
                break;
            }
        }
    }else{
        while($row = $stmt->fetch()) {  
            ?><div>
                    <p><b>Name: </b><?= $row["name"] ;?></p>
                    <p><b>Friend's Name: </b><?= $row["friendName"] ;?></p>
                    <p><b>E-mail: </b><?= $row["email"] ;?></p>
                    <p><b>Friend's E-mail: </b><?= $row["friendEmail"] ;?></p>
                    <p><b>Wish: </b><?= $row["wish"] ;?></p>
                    <p><b>URL: </b><?= $row["imageURL"] ;?></p>
                    </br>
                    <p><a href="edit-wish-form.php?wishId=<?= $row["wishId"] ;?>">Edit</a>
                    <a href="delete-wish-form.php?wishId=<?= $row["wishId"] ;?>">Delete</a>
                    <hr>
                </div>
            <? 
        }        
    }
?>