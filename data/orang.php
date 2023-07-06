<?php
class Orang
{
    const AUTHOR = "ARFAN";
    var ?string $nama = null;
    var ?string $alamat = null;
    var string $negara = 'indonesia';

    function halo(?string $nama, $alamat, $negara)
    {
        // echo "Halo $nama saya berasal dari nragara $negara alamat ku di $alamat ";
        if (is_null($nama)) {
            echo "Halo nama saya $this->nama";
        } else {
            echo "Halo $nama, nama saya $this->nama";
        }
    }
    public function __construct(string $nama, ?string $alamat)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }
    public function info()
    {
        echo "AUTHOR : " . self::AUTHOR;
    }
}
