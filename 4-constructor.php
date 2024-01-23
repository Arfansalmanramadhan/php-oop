<?php
class Orang {
    var string $nama;
    var ?string $alamat = null;
    var ?string $negara = "indonesia";

    public function __construct(string $nama, string $alamat)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        // $this->negara = $negara;
    }
}
$Arfan = new Orang("ARFAN", "BANDUNG");
var_dump($Arfan);
