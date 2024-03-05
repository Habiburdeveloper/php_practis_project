
<?php
    // $file_path = 'info.txt';
    
    //readfile

    // $file_read = readfile($file_path);
    // echo $file_read;
    // $openfile = fopen( $file_path, 'r' );
    // $file_lenth = filesize($file_path);
    // $fread = fread($openfile, $file_lenth);
    // echo $fread;
    // $get_content = file_get_contents($file_path);
    // echo $get_content;
    // $name = array(
    //     'habib',
    //     'habibur',
    //     'hamim'
    // );
    // $put_content = file_put_contents($file_path, $name);
    // echo $put_content;
        
        // if(unlink('hm.php')){
        //     echo 'remove done';
        // }
        // else{
        //     echo 'remove hoyni';
        // }
        // mkdir('habib.php');
        // rmdir('habib.php');
        $file_path = 'photo/all-photo/test.jpg';
        $file_info = pathinfo($file_path);
        print_r($file_info);
?>