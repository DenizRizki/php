<?php

$jabatan = strtolower(readline("Apa jabatan tersebut? (Manager, Supervisor, atau Staff) = "));

if ($jabatan == "manager") {
    $gaji = 7000000;
} elseif ($jabatan == "supervisor") {
    $gaji = 5000000;
} elseif ($jabatan == "staff") {
    $gaji = 3000000;
} else {
    echo "Jabatan tidak valid!";
    exit;
}

// itungan pajak
if ($gaji <= 3000000) {
    $pajak = 5;
} elseif ($gaji <= 5000000) {
    $pajak = 10;
} else {
    $pajak = 15;
}

$lembur = (int)readline("Berapa jam/bulan anda kerja/lembur? (Masukkan jumlah jam) = ");

// Menentukan bonus
$bonus = ($lembur >= 300) ? 75000 : 0;

$potongan = ($gaji * $pajak) / 100;
$hasil = $gaji - $potongan + $bonus;

echo "Gaji anda setelah pajak dan bonus adalah = Rp " . number_format($hasil, 0, ',', '.');
