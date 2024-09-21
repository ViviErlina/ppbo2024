<?php

require_once 'Pegawai.php';
require_once 'Dosen.php';

use App\Admin\Dosen;

// Membuat instance dari kelas Dosen
$dian = new Dosen();

// Mengisi nilai atribut pada objek $dian
$dian->nama = "Dian Prawira";
$dian->nip = 198411132015041001;
$dian->setNoHp(62111111);
$dian->alamat = "Jln Purnama";
$dian->nidn = "0013118405";

// Menjalankan fungsi mengajar dari objek $dian
$dian->mengajar();

?>
