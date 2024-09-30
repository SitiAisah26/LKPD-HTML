<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 1</title>
</head>
<body>
<center>
    <form method="post" action="">
        <input type="text"  id="input-teks" name="teks" required>
        <button type="submit">Cek Angka</button>
    </form>
<?php
function ceknilai($teks){
$result = preg_replace('/[^0-9]/', '', $teks); 
// preg replace untuk melakukan pergantian atau pencarian suatu berdasarkan pola tertentu
// pattern: Pola regular expression yang akan dicari dalam string.
// replacement: Teks pengganti untuk bagian string yang cocok dengan pola.
// subject: String yang akan diproses.

if($result) {
    $array = str_split($result); //mengubah string jd array
    $hasil= "Teks mengandung angka : " . implode(',', $array);
    // separator: Pemisah yang akan digunakan di antara elemen-elemen array dalam string hasil gabungan
} else {
    $hasil ="Teks tidak mengandung angka";
}
return $hasil;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $teks = $_POST["teks"];
    
    echo "<p>". ceknilai($teks). "</p>";
}

?>
</center>
</body>
</html>