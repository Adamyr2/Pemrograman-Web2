<?php 

$domisili = ["Jakarta", "Bogor", "Depok", "Tangerang", "Bekasi"];

$program_studi = [
    "SI"=>"Sistem Informasi",
    "TI"=>"Teknik Informatika",
    "BD"=>"Bisnis Digital"
];

$skills = [
    "HTML"=>10,
    "CSS"=>10,
    "Javascript"=>20,
    "RWD Bootstrap"=>20,
    "PHP"=>30,
    "Python"=>30,
    "Java"=>50
];

function skill_skor($skill_user){
    $skor = 0;
    foreach ($skill_user as $value) {
        if($value == "HTML"){
            $skor = $skor + 10;
        } elseif($value == "CSS"){
            $skor = $skor + 10;
        } elseif($value == "Javascript"){
            $skor = $skor + 20;
        } elseif($value == "RWD Bootstrap"){
            $skor = $skor + 20;
        } elseif($value == "PHP"){
            $skor = $skor + 20;
        } elseif($value == "Python"){
            $skor = $skor + 30;
        } elseif($value == "Java"){
            $skor = $skor + 50;
        } else {
            $skor = 0;
        }
    }
    return $skor;
}


function predikat($skor){
    if($skor > 100 && $skor <= 150 ){
        return "Sangat Baik";
    } elseif($skor > 60){
        return "Baik";
    } elseif($skor > 40){
        return "Cukup";
    } elseif($skor <= 40){
        return "Kurang";
    } elseif($skor == 0){
        return "Tidak Memadai";
    } else {
        return "Tidak ada Predikat";
    }
}
?>