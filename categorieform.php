<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div>
    <?php
        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }
    
    ?>
</div>
    
<div class="page-wrapper">
 <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
 <div class="content-wrapper">
    <div class="content">                
        <!-- Top Statistics -->
        <div class="row">
            <h1> Add Categorie</h1>
                <div class="col-xl-12 col-sm-8">
    
                    <form action="categorie-save.php" method="post" enctype="multipart/form-data">
                         <label for="cat_name">categorie name</label>
                            <input type="text" name="cat_name" id="cat_name">
                        <label for="cat_code">categorie code</label>
                            <input type="text" name="cat_code" id="cat_code">
                        <label for="cat_image">categorie image</label>
                            <input type="file" name="cat_image" id="cat_image">
                         </br>
                            <input type="submit" value="Save" id="submit">
                    </form>
                </div>
                </div>
        </div>
    </div>
          
</div>


<?php

  require('header-script.php');
  require('sideber.php');
  require('header.php');
  require('footer.php');

?>

<!-- Botstrap Table -->

        <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">categorie_name</th>
            <th scope="col">categorie_code</th>
            <th scope="col">categorie_image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>


        <tbody>
            <?php
            require('config.php');
                $query = "SELECT * FROM categorielist";
                $sql = mysqli_query($conn, $query);
                $serial_number = 1;
                while($object_assoc = mysqli_fetch_assoc($sql)){

            ?>
            <tr>
            <th scope="$object_assoc">
                <?php
                    echo $serial_number++;
                
                ?>
            </th>

            <td>
                <?php
                    echo $object_assoc['categorie_name'];
                    
                 ?>
            </td>

            <td>
            <?php
                 echo $object_assoc['categorie_code'];
                    
             ?>
            </td>

            <td>
                <img src="<?php echo $object_assoc['categorie_image'];?>" alt="img" style="width: 50px;">
           
            </td>

            <td>
                <a href="categorie_edit.php?id=<?php echo $object_assoc['id'];?>">Edit</a> ||
                <a href="cat-delete.php?id=<?php echo $object_assoc['id'];?>">Delete</a>
            </td>
            </tr>
                    <?php
                    
                }
                    ?>
        </tbody>


        </table>



</body>
</html>
