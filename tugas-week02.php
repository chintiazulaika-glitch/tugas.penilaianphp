<?php
// ==========================================
// 1. DEKLARASI VARIABEL & TIPE DATA
// ==========================================
$nama = "Chintia zulaika";
$nim = "2510120001";
$umur = 19;
$nilaiUTS = 75.0;
$nilaiUAS = 85.0;
$isMahasiswa = true;

// ==========================================
// 2. MANIPULASI STRING
// ==========================================
$namaKapital = strtoupper($nama);
$namaKecil   = strtolower($nama);
$jumlahChar  = strlen($nama);
$tigaHuruf   = substr($nama, 0, 3);

// ==========================================
// 3. PERHITUNGAN NILAI
// ==========================================
$nilaiAkhir = ($nilaiUTS * 0.4) + ($nilaiUAS * 0.6);

// ==========================================
// OPERATOR UNARY & ASSIGNMENT
// ==========================================
$tempUmur = $umur;
$tempUmur++;
$umurDepan = $tempUmur;

$tempUmur = $umur;
$tempUmur--;
$umurLalu = $tempUmur;

$bonus = 5;

// ==========================================
// OPERATOR LOGIKA & STATUS KELULUSAN
// ==========================================
$status = "";
if ($isMahasiswa && $nilaiAkhir >= 60) {
    $status = "Lulus";
} elseif ($isMahasiswa && $nilaiAkhir < 60) {
    $status = "Tidak Lulus";
} else {
    $status = "Bukan Mahasiswa Aktif";
}

// ==========================================
// CETAK OUTPUT BROWSER (MENGGUNAKAN <br>)
// ==========================================

echo "=== 1. DEKLARASI VARIABEL & TIPE DATA ===<br>";
echo "Nama: " . $nama . "<br>";
echo "NIM: " . $nim . "<br>";
echo "Umur: " . $umur . "<br>";
echo "Nilai UTS: " . $nilaiUTS . "<br>";
echo "Nilai UAS: " . $nilaiUAS . "<br>";
echo "Status Aktif: " . ($isMahasiswa ? "Ya" : "Tidak") . "<br><br>";

echo "=== 2. MANIPULASI STRING ===<br>";
echo "Huruf Kapital Semua : " . $namaKapital . "<br>";
echo "Huruf Kecil Semua   : " . $namaKecil . "<br>";
echo "Jumlah Karakter     : " . $jumlahChar . "<br>";
echo "3 Huruf Pertama     : " . $tigaHuruf . "<br><br>";

echo "=== 3. PERHITUNGAN NILAI ===<br>";
echo "Nilai Akhir: " . $nilaiAkhir . "<br><br>";

echo "=== OPERATOR UNARY & ASSIGNMENT ===<br>";
echo "Umur Tahun Depan (++): " . $umurDepan . "<br>";
echo "Umur Tahun Lalu (--): " . $umurLalu . "<br>";
echo "Nilai Awal Bonus: " . $bonus . "<br>";
$bonus += 2;
echo "Bonus (+2): " . $bonus . "<br>";
$bonus -= 1;
echo "Bonus (-1): " . $bonus . "<br>";
$bonus *= 2;
echo "Bonus (*2): " . $bonus . "<br><br>";

echo "=== PERBANDINGAN ===<br>";
echo "Apakah Nilai Akhir == 60? " . ($nilaiAkhir == 60 ? 'true' : 'false') . "<br>";
echo "Apakah Nilai Akhir != 60? " . ($nilaiAkhir != 60 ? 'true' : 'false') . "<br>";
echo "Apakah Nilai Akhir >= 60? " . ($nilaiAkhir >= 60 ? 'true' : 'false') . "<br>";
echo "Apakah Nilai Akhir <= 60? " . ($nilaiAkhir <= 60 ? 'true' : 'false') . "<br>";
echo "Apakah Nilai Akhir === 60? " . ($nilaiAkhir === 60 ? 'true' : 'false') . "<br>";
echo "Apakah Nilai Akhir !== 60? " . ($nilaiAkhir !== 60 ? 'true' : 'false') . "<br><br>";

echo "=== 4. RINGKASAN OUTPUT ===<br>";
echo "Nama: " . $nama . "<br>";
echo "NIM: " . $nim . "<br>";
echo "Umur: " . $umur . "<br>";
echo "Nilai UTS: " . $nilaiUTS . "<br>";
echo "Nilai UAS: " . $nilaiUAS . "<br>";
echo "Nilai Akhir: " . $nilaiAkhir . "<br>";
echo "Status: " . $status . "<br>";
?>