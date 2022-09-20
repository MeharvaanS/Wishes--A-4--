<?php
?>
<h1>WISH FORM</h1></br>
<form action="process-insert-wish-form.php" method="POST">
    <b>Name: </b> <input type="text" name="name"/></br></br>
    <b>Friend's Name: </b><input type="text" name="friendName"/></br></br>
    <b>Email: </b><input type="text" name="email"/></br></br>
    <b>Friend's Email: </b><input type="text" name="friendEmail"/></br></br>
    <b>Wish: </b><input type="text" name="wish"/></br></br>
    <b>Image URL: </b><input type="text" name="imageURL"/></br></br>
    <input type="submit" name="submitButton"/>
</form>
</br>
<a href="select-wishes.php?wishId=">Go to Wishes</a>