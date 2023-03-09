<?php 
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$total_nilai = ($tugas + $uts + $uas) / 3;

function Keterangan($nilai){
    if($nilai > 75){
        return "LULUS";
    } else {
        return "Tidak LULUS";
    }
}
?>