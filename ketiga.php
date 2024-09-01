<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

// Contoh pembuatan objek dari kelas Lingkaran
$lingkaran = new Lingkaran();
$lingkaran->jari_jari = 7; 
echo "Luas lingkaran adalah: " . $lingkaran->luas() . " cm²\n";
echo "Keliling lingkaran adalah: " . $lingkaran->keliling() . " cm\n";

$bola = new Bola();
$bola->jari_jari = 5; 
echo "Volume bola adalah: " . $bola->volume() . " cm³\n";

$tabung = new Tabung();
$tabung->jari_jari = 6; 
$tabung->tinggi = 12;  
echo "Volume tabung adalah: " . $tabung->volume() . " cm³\n";

$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari = 4;
$nasi_tumpeng->tinggi = 10;   
echo "Volume nasi tumpeng adalah: " . $nasi_tumpeng->volume() . " cm³\n";
