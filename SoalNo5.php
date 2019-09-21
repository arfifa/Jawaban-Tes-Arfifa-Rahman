<?php 
function buyNoodle($tanggal, $uangBelanja)
{
    $jumlahMie = $uangBelanja / 2500;

    if ($tanggal % 2 == 0) {
        $jumlahBonus = floor($jumlahMie / 4);
        if ($tanggal % 5 == 0) {
            if ($jumlahBonus % 2 == 0) {
                $jumlahBonus *= 10;
            } else {
                $jumlahBonus *= 5;
            }
        }

    } else {
        $jumlahBonus = floor($jumlahMie / 3);
        if ($tanggal % 5 == 0) {
            if ($jumlahBonus % 2 == 0) {
                $jumlahBonus *= 10;
            } else {
                $jumlahBonus *= 5;
            }
        }
    }

    $jumlahMie += $jumlahBonus;
    echo $jumlahMie;

}

buyNoodle(25, 100000);

?>
