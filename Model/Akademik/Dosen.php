<?php


namespace App\Admin;

require_once 'Pegawai.php';

class Dosen extends Pegawai 
{
    private string $nidn;

    public function __construct($nip, $nama, $no_hp, $alamat, $nidn)
    {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
    }

    public function mengajar(): void 
    {
    echo "{$this->nama} sedang mengajar perkuliahan";
    }
}

class Dosen {
    private $nidn;
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }
}

$dian = new Dosen("Dian Prawira");
$dian->nidn = 1000121184001;
