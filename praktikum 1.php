<?php

class produk {

//Prosperty
public string $kode;
public string $nama;
public int $harga;
public int $stok;

#constanta
public const PAJAK = 0.11;
public function pajak()
{
    return $this->harga * self::PAJAK;
}
public function total(){
    return $this->harga + ($this->harga * self::PAJAK);
}
}
//object
$produk = new Produk();

$produk->kode ='P0001';
$produk->nama ='laptop';
$produk->harga = 10000000;
$produk->stok = 5;

#total
$total = $produk->harga + $jumlahPajak; //11,1 JUTA 

// hasil
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "Harga: ".$produk->harga;
echo "<br/>";

echo "Stok: ".$produk->stok;
echo "<br/>";

echo "Pajak: ". $produk->pajak();
echo "<br/>";
echo "<br/>";
echo "Total harga Setelah pajak: ". $produk->total();