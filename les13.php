<!-- string in php -->
<?php
$username = "Le Vinh Han";
$name = array("I", "am", "bro", "code");

// chu thuong
// echo strtolower($username);

// chu hoa
// echo strtoupper($username);

// xoa bo khoang trong du thua
// echo trim($username);

// dien vao chuoi cho du ky tu
// echo str_pad($username, 20, "0"); // dien them so 0 vao sau cung cua chuoi sao cho chuoi co do dai 20 ky tu

// thay the ki tu
// echo str_replace("Le Vinh", "Pitou", $username); // Pitou Han

// dao nguoc chuoi
// echo strrev($username); // naH hniV eL

// thay doi vi tri cac ky tu ngau nhien
// echo str_shuffle($username);

// so sanh chuoi ki tu (so sanh dua tren ma ascii)
// echo strcmp($username, "Le Vinh Han"); // 0: hai chuoi bang nhau, <0: chuoi s1 nho hon chuoi s2, >0: chuoi s1 lon hon chuoi s2

// do dai cua chuoi
// echo strlen($username); // 11

// vi tri cua ki tu
// echo strpos($username, "V"); // 3

// tao chuoi con tu chuoi cha
// echo substr($username, 3, 4); // Vinh (cat tu vi tri 3 (chu V), do dai chuoi con: 4)
// echo substr($username, 8); // cat tu vi tri thu 8 den het (Han)

// tach chuoi
// $namearray = explode("-", $username);
// foreach ($namearray as $name) {
//     echo $name . "<br>";
// }

// gop cac phan tu cua mang thanh chuoi
// echo implode("-", $name);

?>