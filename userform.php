<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }
        ?>
    </h1>
    
<form action="write.php" method="post">
    <label for="save_name">Save file</label>
        <input type="text" name="save_name" id="">

<button type="submit" value="save">Save</button>
</form>


</body>
</html>