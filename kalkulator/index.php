<?php
include 'rumus.php';

$pilihan = $_POST['pilihan'] ?? 'Persegi Panjang';
$hasil = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($pilihan === 'Persegi Panjang') {
        $p = $_POST['panjang'] ?? 0;
        $l = $_POST['lebar'] ?? 0;
        $hasil = hitungPersegiPanjang($p, $l);
    } elseif ($pilihan === 'Lingkaran') {
        $r = $_POST['jari_jari'] ?? 0;
        $hasil = hitungLingkaran($r);
    } elseif ($pilihan === 'Kubus') {
        $s = $_POST['sisi'] ?? 0;
        $hasil = hitungKubus($s);
    } elseif ($pilihan === 'Tabung') {
        $r = $_POST['r_tabung'] ?? 0;
        $t = $_POST['tinggi'] ?? 0;
        $hasil = hitungTabung($r, $t);
    }
}

$daftar = getDaftarBangun();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Bangun Datar & Ruang</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .box { width: 350px; padding: 20px; border: 1px solid #ccc; border-radius: 8px; }
        .form-group { margin-bottom: 12px; }
        label { display: block; margin-bottom: 5px; }
        input[type="number"], select { width: 100%; padding: 8px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .hasil { margin-top: 15px; padding: 10px; background: #e9ecef; border-radius: 4px; }
    </style>
</head>
<body>

<div class="box">
    <h2>Kalkulator Bangun</h2>
    
    <form method="POST" action="">
        <div class="form-group">
            <label for="pilihan">Pilih Bangun:</label>
            <select name="pilihan" id="pilihan" onchange="this.form.submit()">
                <optgroup label="Bangun Datar">
                    <?php foreach ($daftar['datar'] as $b): ?>
                        <option value="<?= $b ?>" <?= $pilihan === $b ? 'selected' : '' ?>><?= $b ?></option>
                    <?php endforeach; ?>
                </optgroup>
                <optgroup label="Bangun Ruang">
                    <?php foreach ($daftar['ruang'] as $b): ?>
                        <option value="<?= $b ?>" <?= $pilihan === $b ? 'selected' : '' ?>><?= $b ?></option>
                    <?php endforeach; ?>
                </optgroup>
            </select>
        </div>

        <?php if ($pilihan === 'Persegi Panjang'): ?>
            <div class="form-group">
                <label>Panjang:</label>
                <input type="number" step="any" name="panjang" required>
            </div>
            <div class="form-group">
                <label>Lebar:</label>
                <input type="number" step="any" name="lebar" required>
            </div>
        <?php elseif ($pilihan === 'Lingkaran'): ?>
            <div class="form-group">
                <label>Jari-jari (r):</label>
                <input type="number" step="any" name="jari_jari" required>
            </div>
        <?php elseif ($pilihan === 'Kubus'): ?>
            <div class="form-group">
                <label>Sisi (s):</label>
                <input type="number" step="any" name="sisi" required>
            </div>
        <?php elseif ($pilihan === 'Tabung'): ?>
            <div class="form-group">
                <label>Jari-jari Alas (r):</label>
                <input type="number" step="any" name="r_tabung" required>
            </div>
            <div class="form-group">
                <label>Tinggi (t):</label>
                <input type="number" step="any" name="tinggi" required>
            </div>
        <?php endif; ?>

        <button type="submit">Hitung</button>
    </form>

    <?php if ($hasil !== null): ?>
        <div class="hasil">
            <h3>Hasil (<?= htmlspecialchars($pilihan) ?>):</h3>
            <?php foreach ($hasil as $kunci => $nilai): ?>
                <p><strong><?= $kunci ?>:</strong> <?= $nilai ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>