<?php
// array
$animals = ["kucing", "ayam", "ikan", "burung"];
//tampilan kucing 
echo $animals[0] . "<br>";
echo $animals[3] . "<br>";

//looping array
foreach ($animals as $animal){
    echo $animal . "<br>";
}

echo "<br>";
//array asosiatif
$mahasiswa = ["Nama"=>"Hanna", "Umur"=>21, "Alamat"=>"Depok"];

echo $mahasiswa["Nama"] . "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value;
    echo "<br>";
}

echo "<br>";

//array multidimensi
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "OS"]
];

echo $dosen[0][1];
echo "<br>";

foreach ($dosen as $dsn){
    echo "Nama Dosen : " . $dsn[0];
    echo "Matkul : " . $dsn[1];
    echo "<br>";
}

?>