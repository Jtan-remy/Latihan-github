<?php
class Dosen {
    public string $nidn;
    public string $namaDosen;

    public function __construct(string $nidn, string $namaDosen) {
        $this->nidn = $nidn;
        $this->namaDosen = $namaDosen;
    }

    public function validasiKrs(string $namaMahasiswa): string {
        return "KRS milik {$namaMahasiswa} telah disetujui oleh Dosen PA: {$this->namaDosen} (NIDN: {$this->nidn})";
    }
}