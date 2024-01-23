<?php
class Orang
{
    const AUTHOR = "ARFAN";
    var string $nama;
    var ?string $alamat;
    var ?string $negara = "Indonesia ";

    function halo(?string $nama)
    {
        if (is_null($nama)) {
            echo "Halo nama saya $this->nama";
        } else {
            echo "Halo $nama, nama saya $this->nama";
        }
    }
    public function info() 
    {
        echo "AUTHOR : " . self::AUTHOR;
    }
}
// $Arfan = new Orang("ARFAN", "BANDUNG");
// $Arfan->nama = "Arfan Salman Ramadhan";
// $Arfan->alamat = "Bandung";
// // $Arfan->negara = "indonesia";
// echo "Nama : {$Arfan->nama}";
// echo "Alamat : {$Arfan->alamat}";
// echo "Negara : {$Arfan->negara}";
// var_dump($Arfan);
$arfan = new Orang();
$arfan->nama = "Arfan";
$arfan->halo(null);
$arfan->info();
