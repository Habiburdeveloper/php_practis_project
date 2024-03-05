<?php

require('config.php');
$id = $_GET['id'];
$updateQ = "SELECT * FROM `product` WHERE id=$id";
$location = 'Product.php?msg= edite Successful';
$dbOparetion = new dbOparetion(); // class instant/object...
$sql = $dbOparetion -> updateQuery($conn, $updateQ); // method call.....
$object_assoc = mysqli_fetch_assoc($sql);

?>


<form action="update_product.php" enctype="multipart/form-data">
    <input type="text" name="cat_id" id="cat_id" value="<?php echo $object_assoc['cat_id'];?>">
    <input type="hidden" name="id" value="<?php echo $object_assoc['id'];?>">
    
    <input type="text" name="product_name" id="product_name" value="<?php echo $object_assoc['product_name'];?>">

    <input type="text" name="buy_price" id="buy_price" value="<?php echo $object_assoc['buy_price'];?>">

    

    <button type="submit">Submit</button>
</form>