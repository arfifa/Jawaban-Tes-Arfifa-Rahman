<?php 
function fibo($kolom, $baris)
{
    $fn = 0;
    $fn_2 = 0;
    $fn_1 = 1;

    for ($a = 0; $a < $baris; $a++) {
        for ($b = 0; $b < $kolom; $b++) {
            if ($fn == 0) {
                echo $fn . ",";
                $fn += 1;
            } else {
                echo $fn . ",";
                $fn = $fn_1 + $fn_2;
                $fn_2 = $fn_1;
                $fn_1 = $fn;
            }
        }
        echo "<br>";
    }
}

fibo(4, 3);

?>