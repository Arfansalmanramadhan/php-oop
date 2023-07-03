<?php
require 'data/orang.php';

$orang = new Orang();
$orang->nama = "Arfan Salman Ramadhan";
$orang->alamat = "Bandung";
// $orang->negara = "indonesia";
// $orang->halo("Arfan", "Bandung", "indonesia");
echo "Nama : {$orang->nama}";
echo "Alamat : {$orang->alamat}";
echo "Negara : {$orang->negara}";
var_dump($orang);
