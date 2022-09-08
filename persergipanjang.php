<form action="rumus-persegi.php" method="POST">
    <h1> Rumus Luas dan Keliling Persegi Panjang </h1>
    <p>Sisi :</p>
    <input type="number" name="Luas" placeholder="Ex. 5" />
    <input type="number" name="Keliling" placeholder="Ex. 5" />
    <input type="submit" name="Proses" value="Hitung Luas & Kelilinng" />
</form>


<?php
    if ( isset( $_POST [" proses "]) ) {
        echo " <hr> ";
        $Panjang = $_POST [" P "];
        $Lebar =  $_POST [" L "];
        $luas = $Panjang * $Lebar ;
        $keliling = 2 *( $Panjang + $Lebar );
echo " Panjang : $ Panjang <br> ";
        echo " Lebar : $ Lebar <br> ";
        echo " Luas Persegi Panjang : $ luas <br> ";
        echo " Keliling Persegi Panjang : $ keliling <br> ";
        echo " <hr> ";

        echo " Rumus : <br> ";
        echo " Luas : P x L <br> ";
        echo " Keliling : 2 x (P+L) <br> ";
    }
?>