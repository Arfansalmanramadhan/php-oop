<?php
class Orang
{
    var string $nama;
    var ?string $alamat = null;
    var string $negara = "indonesia";

    function __destruct()
    {
        echo "Object Orang {$this->nama} terhapus";
    }
}
$salman = new Orang("", "Bandung");
echo "Program Selesai" . PHP_EOL;
