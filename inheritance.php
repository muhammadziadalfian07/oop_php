<?php


class Produk
{
    //prperty
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    //constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }
    //method
    public function getLable()
    {
        return "$this->penulis | $this->penerbit";
    }
    public function getInfoProduk()
    {
        //komik : judul | penulis | penerbit | harga | jumlah halaman |  
        //Game : judul | penulis | penerbit | harga | waktumain |  

        $string = "{$this->judul} | {$this->getLable()} | Rp. {$this->harga} |";
        return $string;
    }
}


class Komik extends Produk
{
    public function getInfoProduk()
    {
        $string = "Komik : {$this->judul} | {$this->getLable()} | Rp. {$this->harga} | {$this->jmlHalaman} Halaman.";
        return $string;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $string = "Komik : {$this->judul} | {$this->getLable()} | Rp. {$this->harga} | {$this->waktuMain} jam.";
        return $string;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $string = "{$produk->judul} | {$produk->getLable()} | (Rp. {$produk->harga})";
        return $string;
    }
}

$produk1 = new Komik("naruto", "ziad alfian", "zyx studio", 50000, 100, 0);
$produk2 = new Game("resident evil 4", "sony", "sony studio", 60000, 0, 50);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
