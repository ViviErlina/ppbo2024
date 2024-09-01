<?php

function luasLingkaran($jari) : float {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volume = (4/3) * 3.14 * pow($jari, 3);
    return $volume;
}

function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

$jari = 45;
$tinggi = 50;

$luas_tanah = luasLingkaran($jari);
$keliling = kelilingLingkaran($jari);
$volume_bola = volumeBola($jari);
$volume_tabung = volumeTabung($jari, $tinggi);
$volume_kerucut = volumeKerucut($jari, $tinggi);

echo "Luas tanah Budi adalah {$luas_tanah}\n";
echo "Keliling lingkaran adalah {$keliling}\n";
echo "Volume bola adalah {$volume_bola}\n";
echo "Volume tabung adalah {$volume_tabung}\n";
echo "Volume kerucut adalah {$volume_kerucut}\n";
