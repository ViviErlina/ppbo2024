<?php

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    // Constructor untuk inisialisasi jari-jari dan tinggi
    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    // Fungsi untuk menghitung volume tabung
    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}