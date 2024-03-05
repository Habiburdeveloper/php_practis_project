
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="php/style.css">
    <script src="https://kit.fontawesome.com/bfc8471a77.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
</head>
<body>
<?php

require('header-script.php');
require('sideber.php');
require('header.php');
require('footer.php');


?>


    <h2>
        <?php
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }
        
        ?>

    </h2>
    
    
<div class="page-wrapper">

         

 <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
 <div class="content-wrapper">
    <div class="content">                
        <!-- Top Statistics -->
        <div class="row">
                <div class="col-xl-12 col-sm-8">
    
                    <form action="product-save.php" method="post">
                        <select name="categorie_name" id="">
                            <?php
                                require('config.php');
                                $query = "SELECT * FROM `categorielist`";
                                $sql_cat = mysqli_query($conn,$query);
                                while($object_assoc = mysqli_fetch_assoc($sql_cat)){
                            
                            ?>
                            <option value="<?php echo $object_assoc['id'];?>"><?php echo $object_assoc['categorie_name'];?></option>
                            <?php
                                }
                            ?>
                        </select>


                         <label for="cat-name">cat name</label>
                        <input type="text" name="cat-name" id="">
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" id="">
                        <label for="price_sell">Sell Price</label>
                        <input type="text" name="price_sell" id="">
                        <label for="buy_price">Buy price</label>
                        <input type="text" name="buy_price" id="">
                        <label for="description">Description</label>
                        <textarea name="description" id="myTextarea" cols="30" rows="10"></textarea>
                         </br>
                        <input type="submit" value="Save" id="submit">
                    </form>
                </div>
            <!-- Botstrap table -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">cat_id</th>
                    <th scope="col">product_name</th>
                    <th scope="col">buy_price</th>
                    <th scope="col">sell_price</th>
                    <th scope="col">description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query_p = "SELECT * FROM `product`";
                    $sql_product = mysqli_query($conn,$query_p);
                    $serial_n=1;
                    while($object_asso = mysqli_fetch_assoc($sql_product)){
                
                
                ?>
                <tr>
                    <th scope="$object_asso">
                    <?php 
                        echo $serial_n++;
                    ?>
                    </th>
                    <td>
                        <?php 
                            echo $object_asso['cat_id'];
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo $object_asso['product_name'];
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo $object_asso['buy_price'];
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo $object_asso['sell_price'];
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo $object_asso['description'];
                        ?>
                    </td>
                    <td>
                    <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                    
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>


            </div>
        </div>
    </div>
          
</div>




<script>ClassicEditor
    .create(document.querySelector("#myTextarea"))
    .catch(error => {
        console.error( error );
    } );
</script>

</body>
</html>
