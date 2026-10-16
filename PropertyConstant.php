<?php

class produk {

    public string $kode;
    public string $nama;
    public int $harga;
    public int $stock;

    public const PAJAK = 0.11;

    public function pajak() {
        return self::PAJAK * 100;
    }
    
    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

$produk = new produk();
$produk -> kode = "kiki01";
$produk -> nama = "Laptop";
$produk -> harga = 10000000;
$produk -> stock = 5;

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