<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($a = 1; $a < 12; $a++) {
            if ($a % 2 !=0 ) {
                $angka = $a * 5 ;
                echo $a . "x 5 =" . $angka;
                echo "<br>"; 
            } 
        }

    ?>
</body>
</html>