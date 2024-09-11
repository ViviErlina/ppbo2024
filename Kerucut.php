<?php

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    // Constructor untuk inisialisasi jari-jari dan tinggi
    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    // Fungsi untuk menghitung volume kerucut
    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}