<?php
require_once 'Mahasiswa.php';
require_once 'Dosen.php';
require_once 'MataKuliah.php';
require_once 'Tagihan.php';

// Instansiasi objek dari semua class anggota
$mhs = new Mahasiswa("422026001", "Jayson Jeremy", "Sistem Informasi");
$dosenPA = new Dosen("0315088801", "Dr. Budi Santoso, M.Kom.");

$daftarMk = [
    new MataKuliah("SI201", "Pemrograman Web Berorientasi Objek", 3),
    new MataKuliah("SI202", "Basis Data Lanjut", 3),
    new MataKuliah("SI203", "Interaksi Manusia & Komputer", 2)
];

$tagihan = new Tagihan();

// Menampilkan hasil di Portal Mahasiswa
echo "<h2>Portal Akademik Mahasiswa</h2>";
echo "<p><strong>Profil:</strong> " . $mhs->getInfoMahasiswa() . "</p>";
echo "<p><strong>Status KRS:</strong> " . $dosenPA->validasiKrs($mhs->nama) . "</p>";

echo "<h3>Daftar Mata Kuliah Diambil:</h3><ul>";
$totalSks = 0;
foreach ($daftarMk as $mk) {
    echo "<li>" . $mk->getDetailMatkul() . "</li>";
    $totalSks += $mk->sks;
}
echo "</ul>";

echo "<p><strong>Total SKS:</strong> {$totalSks} SKS</p>";
echo "<p><strong>Total Tagihan Semester:</strong> " . $tagihan->hitungTotalTagihan($totalSks) . "</p>";
