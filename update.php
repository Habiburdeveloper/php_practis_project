<?php

require('config.php');
$id = $_GET['id'];
$updateQ = "SELECT * FROM `userlist` WHERE id=$id";
$dbOparetion = new dbOparetion(); // class instant/object...
$sql = $dbOparetion -> updateQuery($conn, $updateQ); // method call.....
$object_assoc = mysqli_fetch_assoc($sql);

?>

<form action="update_user.php">
    <input type="text" name="first_name" id="first_name" value="<?php echo $object_assoc['first_name'];?>">
    <input type="hidden" name="id" value="<?php echo $object_assoc['id'];?>">
    
    <input type="text" name="last_name" id="last_name" value="<?php echo $object_assoc['last_name'];?>">

    <button type="submit">Submit</button>
</form>