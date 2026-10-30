<php?

//panggil file property constant
require('./property_constant.php');
use pbo\marketplace\Produk;
//object
$produk = new Produk('P0001', 'Laptop', 10000000, 5);
$produk = new Produk();
$produk->kode = 'P001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hasil
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: Rp.". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak: ". $produk->pajak() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp.". $produk->total();
