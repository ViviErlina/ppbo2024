<?php

use App\Model\Akademik\Dosen;

require_once 'vendor/autoload.php';

$dian = new Dosen("Dian Prawira", "081234567890");
echo "no_hp: " . $dian->getNoHp();
