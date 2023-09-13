<?php
// $mahasiswa = [
//     ["qid hazard", "098776786", "qidhazardone@gmail", "teknik informatika"],
//     ["doflamingo", "094322486", "doflamingo11@gmail", "teknik pertanian"]
// ];

// array assosiative 
//definisinya sama seperti array numerik, kecuali
//key nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "qid hazard",
    "nrp" => "90765545",
    "email" => "qidhazardone@gmail",
    "jurusan" => "teknik infomatika",
    "gambar" => "foto1.png"
    ],
    [
        "nama" => "doflamingo",
        "nrp" => "90654445",
        "email" => "doflamingo11@gmail",
        "jurusan" => "teknik kutukan",
        "gambar" => "foto2.png"
        ]
    ];
    





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
    <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
        <li>nama : <?= $mhs["nama"]; ?></li>
        <li>nrp : <?= $mhs["nrp"]; ?></li>
        <li>email : <?= $mhs["email"]; ?></li>
        <li>jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>