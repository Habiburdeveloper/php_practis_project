<?php
    
    function Myresult($n){
        try{
            if( $n < 80){
                throw new Exception('You Error.');
            }
            echo 'A+'.'<br>';
        }
        catch(Exception $e){
            echo 'Erorr: '.$e -> getMessage().' line number '.$e -> getLine().'<br>';
        }
        finally{
            echo 'final';
        }
    }
    
    Myresult(80);







?>