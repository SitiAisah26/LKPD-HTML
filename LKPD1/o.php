<?php
$data = [
    "nama" => 'agni',
    "umur" => 16,
    "rombel" => "PPLG XI-7",
];
echo "<ul>";
foreach($data as $key => $item) {
    echo "<li>" . $key . " : " . $item . "</li>";
}
echo "</ul>";
?> 