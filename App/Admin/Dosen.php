<?php

namespace App\Admin;

class Dosen extends Pegawai {
    public string $nidn;

    public function mengajar(): void {
        echo "sedang mengajar perkuliahan";
    }
}
