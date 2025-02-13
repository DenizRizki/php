<?php

$warna = "hijau";

switch ($warna) {
    case 'merah':
       echo "berhenti!\n";
        break;
    case 'kuning':
       echo "Siap-siap!\n";
        break;
    case 'hijau':
       echo "Jalan!\n" ;
        break;
    default:
       echo "warna tidak valid\n";
       break;
}