<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\produk;

$produk = new produk('P0001','Laptop',10000000,5);

echo "Produk: ". $produk->nama;
echo "</br>";
echo "Harga: ". $produk->harga;
echo "</br>";
echo "Stock: ". $produk->stock;
echo "</br>";
echo "Pajak: ". $produk->pajak() ."%";
echo "</br>";
echo "</br>";
echo "Total Harga Setelah Pajak: Rp.". $produk->total();