<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    // Constructor untuk inisialisasi jari-jari
    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    // Fungsi untuk menghitung luas lingkaran
    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    // Fungsi untuk menghitung keliling lingkaran
    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}
