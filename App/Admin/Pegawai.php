<?php

namespace App\Admin;

class Pegawai {
    protected int $nip;
    public string $nama;
    protected int $no_hp;
    public string $alamat;

    public function cekIn(): bool {
        // Implementasi cek in
        return true;
    }

    public function cekOut(): bool {
        // Implementasi cek out
        return true;
    }

    public function getNoHp(): int {
        return $this->no_hp;
    }

    public function setNoHp(int $no_hp): void {
        $this->no_hp = $no_hp;
    }
}
