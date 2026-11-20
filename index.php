<?php

require './PropertyConstant.php';

use Pbo\Marketplace\Produk;

// objek
$produk = new Produk();

$produk->setkode("P001")->setnama("Laptop")->setharga(10000000)->setstok(10);
            
// hasil
echo "Produk: " . $produk->getnama();
echo "</br>";
echo "Harga: Rp." . $produk->getharga();
echo "</br>";
echo "Stok: " . $produk->getstok();
echo "</br>";
echo "Pajak: " . $produk->pajak() . "%";
echo "</br>";
echo "</br>";
echo "Total harga setelah pajak: Rp." . $produk->total();
