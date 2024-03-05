<?php
  $jsonData = file_get_contents('student_data.json');
  $jsonDecode = json_decode($jsonData);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
    
        <?php
        foreach($jsonDecode as $data){
           
        ?>
        <div class="pr_data">
            <h1><?php echo "name: ".$data[0] -> name;?></h1>
            <h1><?php echo "Age: ".$data[0] -> age;?></h1>
            <h1><?php echo "cgpa: ". $data[0]->cgpa;?></h1>
            <h1><?php echo "language: ". $data[0]->language[0];?></h1>
            <h1><?php echo "Friend Name: ".$data[0]->friends[0] -> name;?></h1>
            <h1><?php echo "Friend Age: ". $data[0]->friends[0] -> age;?></h1>
        </div>
        <div>
            <h1><?php echo $data['1'] -> name;?></h1>
            <h1><?php echo $data['1'] -> age;?></h1>
        </div>
        <?php
        }
        ?>
    </table>

  
</body>
</html>