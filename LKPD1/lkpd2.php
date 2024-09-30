<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jam Lembur</title>
</head>
<body>
<center>
    <form action="" method="POST">
        <label for="datang">Jam Datang</label>
        <input type="number" name="datang" id="datang">
    <br>
    <br>
        <label for="pulang">Jam Pulang</label>
        <input type="number" name="pulang" id="pulang">
    <br>
    <br>
        <button type="submit" name="kirim">Hitung Kompensasi</button>
    </form>
    <?php
    if (isset ($_POST ['kirim'])) {
        $jamdatang = $_POST ['datang'];
        $jampulang = $_POST ['pulang'];
        $totalJam = $jampulang - $jamdatang ;

        $jamnormal = 8;
        $kompensasi = 0;

        $lembur = $totalJam - $jamnormal ;

        if ($lembur > 0){
            $kompensasi += 50000;

            if ($lembur > 1){
                $kompensasi +=($lembur - 1) * 25000;
            }
        } 
        echo "Lama Kerja : ". ($totalJam);
        echo "<br>";
        echo "Jam Lebih : " .($lembur);
        echo "<br>";
        echo "Jumlah Kompensasi: Rp. ".number_format($kompensasi, 0, ',', '.');
    } 
    ?>
    </center>
</body>
</html>