<?php
//absen mahasiswa
$absen_mahasiswa = array(
    array("nomor" => 1, "nama" => "Andre Gunawan", "nim" => "D112121051"),
    array("nomor" => 2, "nama" => "Encep Rahman Armana", "nim" => "D112121053"),
    array("nomor" => 3, "nama" => "Ikhsan Fauzan", "nim" => "D112121054"),
    array("nomor" => 4, "nama" => "Sarah Fadilah Sulaeman", "nim" => "D112121055"),
    array("nomor" => 5, "nama" => "Wahyu Safrizal", "nim" => "D112121056"),
    array("nomor" => 6, "nama" => "Nur Hidayat", "nim" => "D112121057"),
    array("nomor" => 7, "nama" => "Panji Wiranto", "nim" => "D112121058"),
    array("nomor" => 8, "nama" => "Riyan", "nim" => "D112121061"),
    array("nomor" => 9, "nama" => "Alma Sulaiman", "nim" => "D112111015")
);

//mengurutkan array secara descending berdasarkan Nama
function cmp($a, $b)
{
    return strcmp($b["nama"], $a["nama"]);
}

//mengurutkan array menggunakan fungsi usort()
usort($absen_mahasiswa, "cmp");

//menampilkan data dalam bentuk tabel
echo "<table border ='1'>";
echo "<tr><th>#</th><th>Nama</th><th>NIM</th></tr>";
foreach ($absen_mahasiswa as $am) {
    echo "<tr><td style='padding: 4px;'>".$am["nomor"]."</td><td style='padding: 4px;'>".$am["nama"]."</td><td style='padding: 4px;'>".$am["nim"]."</td></tr>";
}
echo "</table>";
?>