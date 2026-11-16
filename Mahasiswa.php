<?php
class Mahasiswa {
    public string $nim;
    public string $nama;
    public string $prodi;

    public function __construct(string $nim, string $nama, string $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function getInfoMahasiswa(): string {
        return "{$this->nama} ({$this->nim}) - Program Studi {$this->prodi}";
    }
}