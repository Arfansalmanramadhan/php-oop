<?php
class Orang
{
    var string $nama;
    var ?string $alamat = null;
    var string $negara = 'indonesia';

    function halo(string $nama, $alamat, $negara)
    {
        echo "Halo $nama saya berasal dari nragara $negara alamat ku di $alamat ";
    }
}
