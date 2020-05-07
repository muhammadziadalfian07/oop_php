<?php


class Produk
{
    //prperty
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    //method
    public function getLable()
    {
        return "$this->judul,$this->penulis;";
    }
}

$produk1 = new Produk();
$produk1->judul = "naruto";
$produk1->penulis = "ziad alfian";
$produk1->penerbit = "zyx studio";
$produk1->harga = 50000;

$produk2 = new Produk();
$produk2->judul = "resident evil 4";
$produk2->penulis = "sony";
$produk2->penerbit = "sony studio";
$produk2->harga = 60000;


echo "Komik :" . $produk1->getLable();
echo "<hr>";
echo "Game :" . $produk2->getLable();
