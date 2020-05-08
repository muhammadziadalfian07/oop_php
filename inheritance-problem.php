<?php


class Produk
{
    //prperty
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    //constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    //method
    public function getLable()
    {
        return "$this->penulis | $this->penerbit";
    }
    public function getInfoLengkap()
    {
        //komik : judul | penulis | penerbit | harga | jumlah halaman |  
        //Game : judul | penulis | penerbit | harga | waktumain |  

        $string = "{$this->tipe} : {$this->judul} | {$this->getLable()} | Rp. {$this->harga} |";
        if ($this->tipe == "komik") {
            $string .= " {$this->jmlHalaman} - Halaman.";
        } elseif ($this->tipe == "game") {
            $string .= " {$this->waktuMain} - Jam.";
        }
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

$produk1 = new Produk("naruto", "ziad alfian", "zyx studio", 50000, 100, 0, "komik");
$produk2 = new Produk("resident evil 4", "sony", "sony studio", 60000, 0, 50, "game");
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
