<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="php/style.css">
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script> -->
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
    
                    <form action="result-save.php" method="post">
                         <label for="student_name">Student name</label>
                            <input type="text" name="student_name" id="">
                        <label for="roll_number">Roll Number</label>
                            <input type="number" name="roll_number" id="">
                        <label for="ragi">Ragistration Number</label>
                            <input type="number" name="ragi" id="">
                        <label for="exam_year">Exam Year</label>
                            <input type="number" name="exam_year" id="">
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

<!-- <script>ClassicEditor
    .create(document.querySelector("#myTextarea"))
    .catch(error => {
        console.error( error );
    } );
</script> -->

</body>
</html>
