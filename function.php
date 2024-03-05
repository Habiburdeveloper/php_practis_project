<?php
declare(strict_types=1);

function totall( int $a, int|string $b ) {
    $c = $a + $b;
    echo "Totall $c<br>";
}
totall(1,1);

function defult( string $a, string $b, string $d=' ' ) {
    $c = $a.$d.$b;
    echo $c;
}
defult(b: 'Rahman', a: 'Habibur');


// "DROP INDEX catName ON categorielist";

?>