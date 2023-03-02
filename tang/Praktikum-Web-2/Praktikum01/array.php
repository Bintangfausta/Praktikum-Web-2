<?php
//Buat array
$animals = ["Burung", "Gajah", "kucing"];
echo $animals[2] . "<br>";
echo $animals[0];

foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// Buat Array asosiatif
$mahasiswa = ["nama"=>"ziyad", "jurusan"=>"TI", "semester"=>6];
echo $mahasiswa["jurusan"];

foreach ($mahasiswa as $key=>$value) {
    echo "Key nya adalah " .$key . " Value " . $value . "<br>";
}

// Buat array multidimensi
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Nasrul", "DDP"],
    ["Pak Lukman", "OS"]
];

echo $dosen[0][0]
?>