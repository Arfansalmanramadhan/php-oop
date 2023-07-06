<?php
require 'data/orang.php';

$Arfan = new Orang("ARFAN", "BANDUNG");
$Arfan->nama = "Arfan Salman Ramadhan";
$Arfan->alamat = "Bandung";
// $Arfan->negara = "indonesia";
$Arfan->halo("Salman", "Bandung", "indonesia");
echo "Nama : {$Arfan->nama}";
echo "Alamat : {$Arfan->alamat}";
echo "Negara : {$Arfan->negara}";
var_dump($Arfan);
$Arfan->info();
