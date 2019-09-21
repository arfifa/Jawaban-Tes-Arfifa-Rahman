<?php 
function count_handshake($jumlahOrang)
{
    $jumlahTangan = 1;
    $jumlahJabatTangan = 1;
    if ($jumlahOrang >= 2) {
        for ($jumlahMinOrang = 2; $jumlahMinOrang < $jumlahOrang; $jumlahMinOrang++) {
            if ($jumlahOrang == 2) {
                $jumlahJabatTangan;
            } else {
                $jumlahTangan += 1;
                $jumlahJabatTangan += $jumlahTangan;
            }
        }
        return $jumlahJabatTangan;
    } else {
        echo "Jumlah orang minimal 2 orang";
    }
}

echo count_handshake(6);
?>
