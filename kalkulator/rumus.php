<?php
// Array untuk menyimpan daftar nama bangun
function getDaftarBangun() {
    return [
        'datar' => ['Persegi Panjang', 'Lingkaran'],
        'ruang' => ['Kubus', 'Tabung']
    ];
}

// Fungsi Bangun Datar 1: Persegi Panjang
function hitungPersegiPanjang($p, $l) {
    $luas = $p * $l;
    $keliling = 2 * ($p + $l);
    return ["Luas" => $luas, "Keliling" => $keliling];
}

// Fungsi Bangun Datar 2: Lingkaran
function hitungLingkaran($r) {
    $luas = pi() * pow($r, 2);
    $keliling = 2 * pi() * $r;
    return ["Luas" => round($luas, 2), "Keliling" => round($keliling, 2)];
}

// Fungsi Bangun Ruang 1: Kubus
function hitungKubus($s) {
    $volume = pow($s, 3);
    $luas_permukaan = 6 * pow($s, 2);
    return ["Volume" => $volume, "Luas Permukaan" => $luas_permukaan];
}

// Fungsi Bangun Ruang 2: Tabung
function hitungTabung($r, $t) {
    $volume = pi() * pow($r, 2) * $t;
    $luas_permukaan = 2 * pi() * $r * ($r + $t);
    return ["Volume" => round($volume, 2), "Luas Permukaan" => round($luas_permukaan, 2)];
}
?>