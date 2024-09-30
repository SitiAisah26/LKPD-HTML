<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function hitungJumlah($data, $cari) {
    // Menghitung jumlah kemunculan angka $cari dalam array $data
    $jumlah = 0;
    foreach ($data as $angka) {
        if ($angka == $cari) {
            $jumlah++;
        }
    } 
    return $jumlah;
}

// Contoh penggunaan
$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;
$jumlah = hitungJumlah($data, $cari);
echo "jumlah angka $cari = $jumlah";
?>
</body>
</html>