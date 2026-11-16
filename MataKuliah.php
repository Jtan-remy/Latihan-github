<?php
class MataKuliah {
    public string $kode;
    public string $namaMatkul;
    public int $sks;

    public function __construct(string $kode, string $namaMatkul, int $sks) {
        $this->kode = $kode;
        $this->namaMatkul = $namaMatkul;
        $this->sks = $sks;
    }

    public function getDetailMatkul(): string {
        return "[{$this->kode}] {$this->namaMatkul} ({$this->sks} SKS)";
    }
}