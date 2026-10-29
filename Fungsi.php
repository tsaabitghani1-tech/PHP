<?php
//harian
function getTarifHarian($jenisMobil) {
    if ($jenisMobil == "Sedan") {
        return 300000;
    } elseif ($jenisMobil == "SUV") {
        return 500000;
    } else {
        return 250000; // Harga default
    }
}

//utama
function hitungSewaMobil($jenisMobil, $lamaHari) {
    $tarif = getTarifHarian($jenisMobil);
    $totalBiaya = 0;
    
    echo "=== Rincian Sewa Mobil $jenisMobil ===\n";
    
    for ($i = 1; $i <= $lamaHari; $i++) {
        echo "Biaya Hari ke-$i : Rp " . number_format($tarif, 0, ',', '.') . "\n";
        $totalBiaya += $tarif;
    }
    
    if ($lamaHari > 3) {
        $diskon = $totalBiaya * 0.10; // Diskon 10%
        echo "-----------------------------------\n";
        echo "Subtotal       : Rp " . number_format($totalBiaya, 0, ',', '.') . "\n";
        echo "Diskon (10%)   : Rp " . number_format($diskon, 0, ',', '.') . "\n";
        $totalBiaya -= $diskon;
    }
    
    echo "-----------------------------------\n";
    echo "Total Bayar    : Rp " . number_format($totalBiaya, 0, ',', '.') . "\n\n";
}

hitungSewaMobil("SUV", 4);
?>