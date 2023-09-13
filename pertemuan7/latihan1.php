<?php
//variabel scope / lingkup variabel
$mahasiswa = [
    [
    "nama" => "qid hazard",
    "nrp" => "90765545",
    "email" => "qidhazardone@gmail",
    "jurusan" => "teknik infomatika",
    "gambar" => "poto1.png"
    ],
    [
        "nama" => "doflamingo",
        "nrp" => "90654445",
        "email" => "doflamingo11@gmail",
        "jurusan" => "teknik kutukan",
        "gambar" => "poto2.png"
        ]
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar mahasiswa</h1>
<ul> 
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
         <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=
         <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
         &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>    
    
</body>
</html>