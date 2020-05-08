<?php


class Produk
{
    //prperty
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    //constructor
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    //method
    public function getLable()
    {
        return "$this->penulis,$this->penerbit";
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

$produk1 = new Produk("naruto", "ziad alfian", "zyx studio", 50000);
$produk2 = new Produk("resident evil 4", "sony", "sony studio", 60000);

echo "Komik :" . $produk1->getLable();
echo "<br>";
echo "Game :" . $produk2->getLable();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk2);
