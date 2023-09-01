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
class Sekolah
{
    public $nama;
    public $gedung;
    public $kantin;
}
class SMK extends Sekolah
{
    public $seragam;
    public $ekskul;
    function __construct($nama, $lantai, $kantin, $ekskul)
    {
        $this->nama = $nama;
        $this->seragam = "Seragam Prodi  <br>";
        $this->gedung = "$lantai gedung B <br>";
        $this->kantin = "$kantin <br>";
        $this->ekskul = $ekskul;
    }
}
$smk = new SMK("Arfan", 3, 1, ["Rohis", "PMR"]);
echo "<br>";
echo "Nama ", $smk->nama, "<br>";
echo "Seragam " . $smk->seragam;
echo "Lantai ", $smk->gedung;
echo "Kantin lantai ", $smk->kantin;
foreach ($smk->ekskul as $hasil) {
    echo "Ekskul : $hasil <br>";
}
class Kampus extends Sekolah
{
    public $seragam;
    public $organisasi;
    public $hari;
    function __construct($nama, $seragam, $gedung, $kantin, $organisasi, $hari)
    {
        $this->nama = $nama;
        $this->seragam = $seragam;
        $this->gedung = " $gedung <br>";
        $this->kantin = " $kantin <br>";
        $this->organisasi =  $organisasi;
        $this->hari =  $hari;
    }
}
$kampus = new Kampus("Arfan", ["Merah", "putih", "bebas", "batik", "bebas"], "Fit", "KOLAB", ["Lab", "UKM", "Hima", "BEM"], ["Senin", "selasa dan rabu", "kamis", "Jumat", "Sabtu"],);
echo "Nama ",  $kampus->nama, "<br>";
echo "Gedung ",  $kampus->gedung, "<br>";
echo "kantin ",  $kampus->kantin, "<br>";
foreach ($kampus->organisasi as $hasil2) {
    echo "Organisasi : $hasil2 <br>";
}
// foreach ($kampus->seragam as $hasil) {
//     foreach ($kampus->hari as $hasil2) {
//         echo "Haei : $hasil2 seragam $hasil <br>";
//     }
// }
