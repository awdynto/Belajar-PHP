<?php

//Lampu Lalu Lintas
$lampu = "Kuning";

switch ($lampu) {
    case 'Merah':
        echo "Berhenti";
        break;

    case 'Kuning':
        echo "Hati-Hati";
        break;

    case 'Hijau':
        echo "Jalan..";
        break;

    default:
        echo "Lampu Lalu Lintas Mati";
        break;
}
