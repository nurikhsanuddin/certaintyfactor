<?php
arsort($hasilkerusakan);
echo "<ul>";
foreach ($gejala as $id => $nama_gejala) {
    echo "<li>$nama_gejala</li>";
}

echo "</ul>";
echo "<h2>Hasil Deteksi Kerusakan (Urutan berdasarkan Presentase tertinggi):</h2>";
echo "<ul>";
foreach ($hasilkerusakan as $kerusakan => $cf) {
    echo "<li>$kerusakan: " . ($cf * 100) . "%</li>";
}
echo "</ul>";
