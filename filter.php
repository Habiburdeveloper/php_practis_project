<?php
    // filter sanitize...
    $str = "<h1>Allah Mohan .</h1>";
    echo $str."<br>";
    $mail = '(rmd/habi bu%r$621)@gmail,.co m';
    $sntMail = filter_var($mail, FILTER_SANITIZE_EMAIL);
    if (filter_var( $sntMail, FILTER_VALIDATE_EMAIL)){
        echo "$sntMail is Valid mail address"."<br>";
    }
    else{
        echo "$sntMail is not Valid mail address"."<br>";
    }

    $_INT ='10E';
    $sntInt = filter_var($_INT, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_SCIENTIFIC);
    if (filter_var( $sntInt, FILTER_VALIDATE_FLOAT)){
        echo "$sntInt is Valid float"."<br>";
    }
    else{
        echo "$sntInt is not Valid float"."<br>";
    }

    // validate filter....
    $url = 'http://loca lhost/phpmy ad min?id=1';
    $sntUrl = filter_var($url, FILTER_SANITIZE_URL);
    if (filter_var( $sntUrl, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
        echo "$sntUrl is Valid web address"."<br>";
    }
    else{
        echo "$sntUrl is not Valid web address"."<br>";
    }

    // advanc filter......
    $intTotall = 300;
    $min  = 1;
    $max = 250;
    if (filter_var($intTotall, FILTER_VALIDATE_INT,
        array('options' => array('min_range' => $min,
                                 'max_range' => $max)))){
                                    echo 'It is Valid Range.'."<br>";
    }
    else{
        echo  'It is not Valid Range.'."<br>";
    }
    $str = ">Valobasha & mohan";
    echo filter_var($str, FILTER_SANITIZE_SPECIAL_CHARS)."<br>";

    // filter Var array.........
    $stInfo = array(
        "st_name" => "Md Habibur Rahman",
        "st_roll" => 01,
        "st_email" => "r mdha bibur621@gmail.com"
    );
    $filter = array(
        "st_name" => array(
            "string_flag" => FILTER_FLAG_STRIP_HIGH
        ), 
        "st_roll" => FILTER_VALIDATE_INT,
        "st_email" => FILTER_SANITIZE_EMAIL
    );

    echo '<pre>';
    print_r(filter_var_array($stInfo, $filter));
    echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        E-mail: <input type="email" name="email" id="">

        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if(isset($_REQUEST['submit'])){
            if(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
                echo "Email is Valid";
            }
            else{
                echo "Email is Not Valid";
            }
        }
        else{
            echo "Value Not Set";
        }
    
    ?>
</body>
</html>