
    <?php
        $a = 'Habibur Rahamn';
        $pattern = "/Rahamn/i";
        echo preg_match($pattern, $a).'<br>';
        $b = 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available';
        $pattern = "/(publishing|graphic) design/i";
        // echo preg_match_all($pattern, $b);
        // echo preg_replace($pattern, 'an', $b);
        echo preg_match($pattern, $b, $array).'<br>';
        // echo "<pre>";
        // print_r($array);
        // echo "</pre>";
        // echo $array[0];

        $c = 'In publishing and colorrr graphic design 509, Lorem ipsum is a Placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. colour Lorem ipsum may be used as colo a placeholder before the final copy is available.';
        $pattern = "/available\.$/i";
        echo preg_match_all($pattern, $c, $array).'<br>';
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        // echo $array[0];
    ?>
