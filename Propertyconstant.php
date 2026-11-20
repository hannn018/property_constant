<?php
namespace pbo\marketplace;
class Produk {

    //property
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stok;

    //constant
    public const PAJAK = 0.11;

    public function pajak() {
        return self::PAJAK * 100; //11
    }
    //setter
    public function setKode($kode) {
        $this->kode = $kode;
        return $this;
    }

    public function setNama($nama) {
        $this->nama = $nama;
        return $this;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
        return $this;
    }

    public function setStok($stok) {
        $this->stok = $stok;
        return $this;
    }

public function __construct($kode, $nama, $harga, $stok) {
    $this ->Kode = $kode;
    $this ->Nama = $nama;
    $this ->Harga = $harga;
    $this ->Stok = $stok;
}

    public function total (){
        return $this->harga + ($this->harga * self::PAJAK); //11,1 juta
    }
}
require('Propertconstant.php');
use pbo\marketplace\Produk;
//object
$produk = new Produk();
$produk->setKode('P001')
        ->setNama('Laptop')
        ->setHarga(10000000)
        ->setStok(5);

//hasil
echo "Produk: ". $produk->getnama();
echo "<br/>";

echo "Harga: Rp.". $produk->getharga();
echo "<br/>";

echo "Stok: ". $produk->stok();
echo "<br/>";

echo "Pajak: ". $produk->pajak() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp.". $produk->total();