<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Loop untuk angka pertama (mulai dari 2 hingga 1)
    for ($i = 2; $i >= 1; $i--) {
        // Loop untuk angka kedua (mulai dari 10 hingga 1)
        for ($j = 10; $j >= 1; $j--) {
            // Hasil perkalian
            $hasil = $i * $j;
            // Tampilkan hasil dalam format "i x j = hasil"
            echo "$i x $j = $hasil<br>";
        }
    }
    ?>
</body>
</html>