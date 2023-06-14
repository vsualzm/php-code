<?php


// 'd' : Menghasilkan tanggal saat ini dalam format dua digit (01 hingga 31).
// 'm' : Menghasilkan bulan saat ini dalam format dua digit (01 hingga 12).
// 'Y' : Menghasilkan tahun empat digit (misalnya, 2023).
// 'H' : Menghasilkan jam saat ini dalam format 24 jam (00 hingga 23).
// 'i' : Menghasilkan menit saat ini dalam format dua digit (00 hingga 59).
// 's' : Menghasilkan detik saat ini dalam format dua digit (00 hingga 59).

$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}