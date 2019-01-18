<!DOCTYPE html>
<head>
          
        <title>kalkulator</title>
<body>
  <form method="post" action="">
     
  
   <div align="center">
<b>Kalkulator Berat Badan</b></div>
  
  
   <table align="center">
<tr>
    <td><input type="text" name="tinggi" size="10" placeholder="tinggi"></td> 
    <td><input type="text" name="beratbadan" size="10" placeholder="Berat badan"></td>
    <td><input type="radio" name="jk" value="Laki - Laki">Laki - laki</td>
    <td><input type="radio" name="jk" value="Perempuan">Perempuan</td>

    <td><input type="submit" name="submit" value="Hitung"></td>
      
    </tr>
</table>
</form>
</br>
  
  <?php 

  include "beratbadan.php";
 
$hasil = new beratbadan;
 
 if(isset($_POST['submit'])){
  $hasil->beratideal($_POST['tinggi'],$_POST['beratbadan'], $_POST['jk']);
  echo $hasil->beratideal();
 }

   ?>

</body>
  
</html>