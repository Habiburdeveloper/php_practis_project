<?php
    require('config.php');
    $id = $_GET['id'];
    $updateQ = "SELECT * FROM categorielist WHERE id= $id";
    $dbOparetion = new dbOparetion(); // class instant/object...
    $sql = $dbOparetion -> updateQuery($conn, $updateQ); // method call.....
    $object_assoc = mysqli_fetch_assoc($sql);



?>

<form action="categorie_update.php" enctype="multipart/form-data">

    Cat Name: <input type="text" name="categorie_name" id="categorie_name" value="<?php echo $object_assoc['categorie_name'];?>"> <br><br>
    <input type="hidden" name="id" value="<?php echo $object_assoc['id'];?>">

    Cat Code: <input type="text" name="categorie_code" id="categorie_code" value="<?php echo $object_assoc['categorie_code'];?>"><br><br>

    Cat Image: <input type="file" name="categorie_image" id="categorie_image" value="<?php echo $object_assoc['categorie_image'];?>"><br><br>

    <button type="submit">Submit</button>


</form>