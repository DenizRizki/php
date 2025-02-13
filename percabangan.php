<?php

$umur = 40;

// $umur = readline("Masukan Usia Anda : ");

if ($umur == 0) {
    echo "Usia Bayi";
} elseif ($umur >= 1 && $umur <=12) {
    echo "Usia Anak-anak";
}elseif ($umur >= 13 && $umur <=17) {
    echo "Usia Remaja";
}elseif ($umur >= 18 && $umur <=50) {
    echo "Usia Dewasa";
}elseif ($umur >=50) {
    echo "Usia Lansia";
}else {
    echo "-";
}