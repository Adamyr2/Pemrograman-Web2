<?php 
// ini sebuah komentar
/* 
    ini sebuah komentar 
    Komentar adalah sejenis anotasi yang bisa digunakan untuk mengklarifikasi 
    tujuan dan maksud satu bagian kode. Ketika menggunakan PHP, ada beberapa opsi 
    untuk menulis komentar yang dapat dipilih, dan opsi-opsi tersebut diangkat 
    dari bahasa pemrograman lama yang populer.
*/

# ini sebuah komentar juga


// echo "Hello World <br>";
// echo 'Hello World <br>';
// print_r("Adam Yusron <br>");
// var_dump("STT Nurul Fikri");
// var_dump(123);


// Membuat variabel user
$nama = "Adam Malik";
$umur = 18;
$berat = 70.5;
$mahasiswa = true;

// echo "Hallo, Nama saya $nama";
// echo " Umurku $umur th";
// echo "dan memiliki berat badan $berat kg";


// Membuat variabel sistem
// echo "Dokument root " . $_SERVER['DOCUMENT_ROOT'];
// echo "<br>";
// echo "Nama file " . $_SERVER['PHP_SELF'];

// Membuat variabel konstanta
define('PHI', 3.14);
$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

// echo "<br> Luas lingkaran dengan jari-jari $jari = $luas";
// echo "<br> Luas lingkaran dengan jari-jari $jari = $keliling";


// Membuat array 
$programs = ["Php", "Javascript", "HTML", "CSS"];
// echo $programs[3];
echo "jumlah data sebanyak " . count($programs);


?>