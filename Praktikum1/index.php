<?php 
// ini sebuah komentar
/* ini juga sebuah komentar 
    Komentar adalah sejenis anotasi yang bisa digunakan untuk mengklarifikasi 
    tujuan dan maksud satu bagian kode. Ketika menggunakan PHP, ada beberapa opsi 
    untuk menulis komentar yang dapat dipilih, dan opsi-opsi tersebut diangkat 
    dari bahasa pemrograman lama yang populer.
*/
# ini komentar pake kres

// echo "Hello World <br>";
// echo 'Hello World <br>';
// print_r("Adam Malik <br>");
// var_dump("STT Nurul Fikri");


// Membuat variabel User
$nama = "Adam Malik";
$umur = 19;
$berat = 70.2;
$mahasiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya $umur <br>";
// echo "Berat badan saya mencapai $berat kg";

// Membuat variabel Sistem
// echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo 'Nama File '.$_SERVER["PHP_SELF"];


// Membuat variabel Konstanta
define('PHI', 3.14);
$jari = 10;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari-jari $jari = $luas <br>";
// echo "Luas lingkaran dengan jari-jari $jari = $keliling";

// Membuat Array
$programs = ["PHP", "Javascript", "HTML", "CSS"];
// echo $programs[0];
// echo "Jumlah data variabel programs sebanyak " . count($programs);
foreach($programs as $program){
    echo "Bahasa $program <br>";
}

?>