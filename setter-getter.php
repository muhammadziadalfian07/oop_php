<?php


class Produk
{
    //prperty
    public $judul,
        $penulis,
        $penerbit;

    protected $diskon = 0;

    private $harga;

    //constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //method
    public function getLable()
    {
        return "$this->penulis | $this->penerbit";
    }

    public function getInfoProduk()
    {
        $string = "{$this->judul} | {$this->getLable()} | Rp. {$this->harga} ";
        return $string;
    }

    //method gettHarga()
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    //setter && getter
    public function setJudul($judul)
    {
        return $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        return $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        return $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }
    //setter diskon
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
}


class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $string = "Komik : " . parent::getInfoProduk() . " | {$this->jmlHalaman} ~Halaman.";
        return $string;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk()
    {
        $string = "Game : " . parent::getInfoProduk() . " | {$this->waktuMain} ~jam.";
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

$produk1 = new Komik("naruto", "ziad alfian", "zyx studio", 50000, 100);
$produk2 = new Game("resident evil 4", "sony", "sony studio", 60000, 50);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";
echo $produk1->getPenulis();
