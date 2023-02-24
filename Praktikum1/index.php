<?php 
// ini sebuah komentar
/* ini juga sebuah komentar 
    Komentar adalah sejenis anotasi yang bisa digunakan untuk mengklarifikasi 
    tujuan dan maksud satu bagian kode. Ketika menggunakan PHP, ada beberapa opsi 
    untuk menulis komentar yang dapat dipilih, dan opsi-opsi tersebut diangkat 
    dari bahasa pemrograman lama yang populer.
*/
# ini komentar pake kres

echo "Hello World <br>";
echo 'Hello World <br>';
print_r("Adam Yusron <br>");
var_dump("STT NURUL FIKRI");
echo "<hr>";


$nama = "Adam Malik";
$umur = 19;
$berat = 65.2;
$mahasiswa = true;

echo "Nama saya $nama <br>";
echo "Umur saya sekarang adalah $umur tahun <br>";
echo "Berat saya $berat kg <br>";
echo "<hr>";


// Membuat array
$programs = ["php", "javascript", "html", "css"];
echo $programs[0];
foreach ($programs as $program){
    echo $program;
}




?>