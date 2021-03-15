<?php

// Nama : Fadrul Arhan
// NIM : 12191661

// array 
$ikanku = ["Teri","Lele","Bawal","Tuna"];


//menampilkan array 
echo "Soal No.1";
echo "<br>";

echo "Ikan $ikanku[0] sering dijumpai di nasi kucing
angkringan dan saya konsumsi pas tanggal tua.
Kalo tanggal muda sering kuliner $ikanku[1], $ikanku[2],
dan $ikanku[3]";

echo "<br> <br> <br>";

//mengubah format tanggal menjadi format indonesia
echo "Soal No.2";
echo "<br>";

echo date('d-m-Y', strtotime('2017-03-14')); // Hasil 14-03-2017

?>
