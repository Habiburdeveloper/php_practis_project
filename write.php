<?php
require('file.php');
   $open_file = fopen($file_path,'a');
   $save_name = $_POST['save_name'];
   $fwrite = fwrite($open_file, $save_name.PHP_EOL);
   fclose($open_file);
    header('location: userform.php?msg= file save');
    
?>