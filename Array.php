<style>*{backround-color; :#000; #fff;} </style>
<?php
$nama = "Rizky catur";
echo $nama . "<br>";

$nama_array = array("Fariz","Eben", "Haikal","Rizky Giant","Indra");
print_r($nama_array);
echo $nama_array[1]. "<br>";

echo $nama_array[0]."<br>";
echo $nama_array[1]."<br>";
echo $nama_array[2]."<br>";

echo"<hr>";
//versi Foreach
foreach($nama_array AS $datanama){
    echo $datanama. "<br>";
}
echo"<hr>";

//versi
for($i = 0; $i < count ($nama_array); $i++) {
    echo $nama_array[$i]."<br>";
}

//multiple Array
$kelarpl1= array(
    array("Rzky catur", "L","Mancing"),
    array("Eben", "L","mAEN Bola"),
    array("Fariz", "L",array("maen basket","maen kelereng", array("volly")))
    
);

echo"<pre>";
print_r($kelarpl1);
echo"</pre>";

echo"<hr>"; 

 echo $kelarpl1[1][2] ." ";
 echo $kelarpl1[2][0]  ." ";
 echo $kelarpl1[1][2] ." ";
 echo $kelarpl1[2][2][2][0]  ." ";





?>