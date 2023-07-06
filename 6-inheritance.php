<?php
class Manager
{
    var string $nama;
    var string $judul;
    public function __construct(string $nama = "Arfan ", string $judul = "Manager")
    {
        $this->nama = $nama;
        $this->judul = $judul;
    }
    public function label()
    {
        return "$this->nama, $this->judul";
    }
    function halo(string $nama): void
    {
        echo "hai $nama my name is Manager $this->nama";
    }
}
class Manager2 extends Manager
{
    // public function __construct(string $nama = " ")
    // {
    //     parent::__construct($nama, "vp");
    // }
    function halo(string $nama): void
    {
        echo "hai $nama my name is VP $this->nama";
    }
}

$Arfan = new Manager("Arfan");
// $Arfan->nama = "Arfan ";
$Arfan->halo("Salman ");
echo "<br>";
$salman = new Manager2("Salman");
// $salman->nama = "Salman";
$salman->halo("Arfan");
// echo $Arfan->label();
