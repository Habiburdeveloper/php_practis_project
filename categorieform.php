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
                         <label for="categoriename">categorie name</label>
                        <input type="text" name="categoriename" id="">
                        <label for="categoriecode">categorie code</label>
                        <input type="text" name="categoriecode" id="">
                        <label for="categorieimage">categorie image</label>
                        <input type="file" name="photo" id="">
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
</body>
</html>
