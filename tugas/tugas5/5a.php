<?php 
// $mahasiswa = [
// ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
// ["033040001", "Doddy Ferdiansyah", "doddy@gmail.com", "Teknik Industri"]
// ];

$mahasiswa = [
	[	
		"nrp" => "043040023",
		"nama" => "Sandhika Galih",
		"email" => "sandhikagalih@unpas.ac.id",
		"jurusan" => "Teknik Informatika",
		"gambar" => "Avtar9.jpg"
	],
	[
		"nama" => "Doddy Ferdiansyah", 
		"nrp" => "033040001",
		"email" => "doddy@gmail.com",
		"jurusan" => "Teknik Industri",
		"gambar" => "Avtar10.jpg"
    ],
    [	
		"nrp" => "203040004",
		"nama" => "Hasbulah Shopari",
		"email" => "hasbulah@unpas.ac.id",
		"jurusan" => "Teknik Informatika",
		"gambar" => "Avtar1.jpg"
	],
	[
		"nama" => "Hapid Fadli", 
		"nrp" => "203040001",
		"email" => "Hapid@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "Avtar2.jpg"
    ],
    [	
		"nrp" => "203040002",
		"nama" => "Jaki Aulia",
		"email" => "zaki@unpas.ac.id",
		"jurusan" => "Teknik Informatika",
		"gambar" => "Avtar3.jpg"
	],
	[
		"nama" => "Bimo murti", 
		"nrp" => "203040013",
		"email" => "bimo@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "Avtar4.jpg"
    ],
    [	
		"nrp" => "203040012",
		"nama" => "Althafur rahman",
		"email" => "althaf@unpas.ac.id",
		"jurusan" => "Teknik Informatika",
		"gambar" => "Avtar5.jpg"
	],
	[
		"nama" => "Aril Fajri", 
		"nrp" => "203040025",
		"email" => "aril@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "Avtar6.jpg"
    ],
    [	
		"nrp" => "203040023",
		"nama" => "Nabil Fadillah",
		"email" => "nabil@unpas.ac.id",
		"jurusan" => "Teknik Informatika",
		"gambar" => "Avtar7.jpg"
	],
	[
		"nama" => "Hady Sumanto", 
		"nrp" => "203040056",
		"email" => "hady@gmail.com",
		"jurusan" => "Teknik Infotmatika",
		"gambar" => "Avtar8.jpg"
	]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img width="100" src="/pw2024_203040004/tugas/tugas5/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>