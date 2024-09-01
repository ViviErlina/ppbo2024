<?php

// Class Lingkaran dengan Constructor
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

// Class Bola dengan Constructor
class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    // Constructor untuk inisialisasi jari-jari
    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    // Fungsi untuk menghitung volume bola
    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

// Class Tabung dengan Constructor
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

// Class Kerucut dengan Constructor
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

// Membuat objek dari setiap class menggunakan constructor

// Objek dari class Lingkaran
$lingkaran = new Lingkaran(7); // Mengatur jari-jari menjadi 7 cm
echo "Luas lingkaran adalah: " . $lingkaran->luas() . " cm²\n";
echo "Keliling lingkaran adalah: " . $lingkaran->keliling() . " cm\n";

// Objek dari class Bola
$bola = new Bola(5); // Mengatur jari-jari menjadi 5 cm
echo "Volume bola adalah: " . $bola->volume() . " cm³\n";

// Objek dari class Tabung
$tabung = new Tabung(6, 12); // Mengatur jari-jari menjadi 6 cm dan tinggi 12 cm
echo "Volume tabung adalah: " . $tabung->volume() . " cm³\n";

// Objek dari class Kerucut
$kerucut = new Kerucut(4, 10); // Mengatur jari-jari menjadi 4 cm dan tinggi 10 cm
echo "Volume kerucut adalah: " . $kerucut->volume() . " cm³\n";
