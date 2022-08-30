<?php
   //variabel
   // $nama; Contoh salah(karena diawali angka)
   // $#nama;contoh salah(Ada simbol di awal)
   // nama; Contoh Salah (Tidak ada simbol $)
   $nama = "rizki";
   $usia = 16;
   echo "nama saya $nama <br>";
   echo "usia saya $usia tahun <br>";
   //Tipe data(interger, float,string)
   //(Boolean , array)
   $namalengkap = "Rizky giant 90";// string
   $umur = 15;//integer
   $nilai = 76.56;//float
   $jomblo = true; // Boolenan(true/false)


   //array string
   $namarpl1 = array ("alya", "dwi","eben");
   
    echo "nama lengkap : $namalengkap <br>";
    echo "umur : $umur <br>";
    echo "nilai : $nilai <br>"; 
    echo"jomblo : $jomblo <br>";
    echo "<hr>";
    echo"array 0 :$namarpl1[0] <br>"; // alya
    echo"array 2 :$namarpl1[2] <br>"; // eben
    echo"<hr>";
    

    //aritmatika(+,-/*%)
     echo "angka1 :" .$angka1 = 10; echo"<br>";
     echo "angka2 :" .$angka2 = 5; echo"<hr>";

     echo"Tambah :". $tambah = $angka1 + $angka2."<br>";
    echo"Kurang :". $kurang= $angka1  - $angka2."<br>";
    echo"bagi:". $bagi = $angka1  /$angka2."<br>";
    echo"kali:". $kali = $angka1 * $angka2."<br>";
    echo"sisa bagi :". $sisabagi = $angka1 % $angka2."<br>";
    echo "<hr>";

    //operator perbandingan(=,>,<,!==,===)
    // Return TRUE(1), FALSE(NULL/KOSONG)
$a= 10;
$b=5;
$c= "10";


echo"==:"; echo $a == $b; echo"<br>";
echo">:"; echo $a >$b; echo"<br>";
echo"!=:";echo $a !=$b; echo"<br>";
echo"===:";echo $a ===$b;echo"<br>";

//operator logika (AND , OR ,&& ,||)
//IF
 
$x = 10;
$y = 20;

if($x == 10 AND $y == 20){echo "terpehuni 2 variable <hr>";}
if($x == 10 AND $y == 20){echo "Salah satu  variable terpenuhi <hr>";}





?>