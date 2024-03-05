<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/bfc8471a77.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
   
</head>
<body>


   
    
    
<div class="page-wrapper">
<h2>
    
    <?php

        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }
    
    ?>

</h2>
 <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
 <div class="content-wrapper">
    <div class="content">                
        <!-- Top Statistics -->
        <div class="row">
                <div class="col-xl-12 col-sm-8">
    
                    <form action="user-save.php" method="post">

                            <div class="username">
                             <label for="first_name">first name</label>
                                <input type="text" name="first_name" id="">
                            </div>

                            <div class="username">
                                <label for="last_name">last name</label>
                                    <input type="text" name="last_name" id="">
                            </div>

                             <div class="userphone">
                                <label for="phone">Phone Number</label>
                                    <input type="text" name="phone" id="">
                            </div>

                            <div class="user_disegnetion">
                                <label for="disegnetion">user disegnetion</label>
                                    <input type="text" name="disegnetion" id="">
                            </div>


                         <div class="description">
                             <label for="description">user Description</label>
                                <textarea name="description" id="myTextarea" cols="30" rows="10"></textarea>
                        </div>
                        
                         
                        <input type="submit" value="Save" id="submit">
                    </form>

                    

                </div>

             </div>

             <!-- Botstrap Table -->
    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#id</th>
                                <th scope="col">First name</th>
                                <th scope="col">Last name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Disegnetion</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php
                            require('header-script.php');
                            require('sideber.php');
                            require('header.php');
                            require('footer.php');
                            require('config.php');
                                
                                // Query..............
                                $query = "SELECT * FROM `userlist` ";
                                $sql = mysqli_query($conn, $query);
                                $serial_no=1;
                                // loop........
                                while( $object_assoc = mysqli_fetch_assoc($sql) ){
                                    
                        ?>
                            <tr>
                                <th scope="$object_assoc">
                                    <?php 
                                        echo $serial_no++;
                                    ?>
                                </th>

                                <td>
                                    <?php 
                                        echo $object_assoc['first_name'];
                                    ?>
                                </td>

                                <td>
                                    <?php 
                                        echo $object_assoc['last_name'];
                                    ?>
                                </td>

                                <td>
                                    <?php 
                                        echo $object_assoc['userphone'];
                                    ?>
                                </td>

                                <td>
                                    <?php 
                                        echo $object_assoc['user_disegnetion'];
                                    ?>
                                </td>

                                <td>
                                    <?php 
                                        echo $object_assoc['_description'];
                                    ?>
                                </td>

                                <td>
                                <a href="update.php?id=<?php echo $object_assoc['id']; ?>" style="padding-right: 10px;"><i class="fa-solid fa-pen-to-square"></i></a>

                                <a href="delate.php?id=<?php echo $object_assoc['id']; ?>" onclick="return confirm('Delete Confirm')"><i class="fa-solid fa-trash"></i></a>
                                </td>

                            </tr>
                         <?php
                                
                            }      
                         ?>
                

                        </tbody>

        </table>
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