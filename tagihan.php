<?php
class Tagihan {
    private int $biayaTetap = 2500000;
    private int $tarifPerSks = 200000;

    public function hitungTotalTagihan(int $totalSks): string {
        $total = $this->biayaTetap + ($totalSks * $this->tarifPerSks);
        return "Rp " . number_format($total, 0, ',', '.');
    }
}