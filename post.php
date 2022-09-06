
<form action="post.php" method="POST">
<input type="text" name="namalengkap" placeholder="eX. indra El"/> <br>
<input type="text" name="kelas" placeholder="eX. 11  RPL 1"/> <br>
<input type="number" name="nisn" placeholder="eX. NISN"/> <br>
  <input type="submit" name="simpan" value="Simpan Data"/> 
  </form>

  <?php
    if(isset($_POST["simpan"]) ){

        echo"<hr>";

         $namalengkap =$_Post["namalengkap"];
         $kelas = $_POST["kelas"];
         
        echo "Nama Lengkap :" . $namalengkap . "<br>";
        echo "Kelas :" . $kelas;
        echo "NISN : " . $nisn;
        
    }

  ?>