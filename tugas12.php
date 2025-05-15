<?php

$i= 1;
$Anggota_kelas =[
    "akifah zahrani arafat",
    "alqumaerah",
    "althaf azzah zahra",
    "andi alfirqatunnajiyyah ahsyar",
    "andi mufrodatul fanzila",
    "fahrah furaidah sahrir",
    "fauziyyah",
    "jilan fathiyyah",
    "nadia mirzayanti hasbi",
    "rabiatul adawiyah",
    "alifah izzah rahmadini",
];

$Anggota_kelas[]="muftihaturrahmah";
$Anggota_kelas[]="auliyah nastity khayla armada";
$Anggota_kelas[]="putri kinanti al magfirah";
echo "daftar anggota </br></br>";
foreach ($Anggota_kelas as $daftar_anggota) {
    echo $i++ ." ." .$daftar_anggota ."</br>";

}