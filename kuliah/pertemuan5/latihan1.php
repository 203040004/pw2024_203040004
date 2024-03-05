<?php 
//1.membuat array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Frbruari", "Maret"];
$mhs = ["Hasbu", 3.2, false];

//2.mencetak array(1)
//cetak 1 nilai mengunakan index
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[1];
echo "<hr>";
//cetak seluruh isi array
//var_dump() atau print_r()
// digunakan untuk debungging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

//3.manipulasi array
//menambah isi array
//dibelakang: [] atau array_push()\
$hati[] = "Kamis";
$hati[] = "Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";
//di awal array : array_unshift()
array_unshift($mhs, "203040004");
print_r($mhs);
echo "<br>";

//menghapus isi array
//di belakang: array_pop()
//didepan: array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);

//
?>