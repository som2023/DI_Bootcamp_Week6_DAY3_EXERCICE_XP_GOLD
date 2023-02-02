 
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_3</title>
</head>
<body>
<form action="" method="post">
  <div class="nombre">
    <p>The sum of the digits of a number</p>
    <label for="">Numbers</label><input type="text" name="val" placeholder="entrer un nombre svp"/>
    <input type="submit" value="OK" name="btnok">
  </div>
  <br>
  <br>
  </form>
  
<?php
if ( isset ($_POST['btnok'])) {
  $value=$_POST['val'];
   
  if($value=="")
  {
    echo 'Veillez renseigner tous les champs svp';
  }else
  {
 
    function sum_digit($nums) {
      $sum = 0;
        for ($i = 0; $i < strlen($nums); $i++) {
               $sum += $nums[$i];
                 }
        return $sum;
  }
  echo "la somme des nombres est: ". sum_digit($value);
   
}
}
?>
 

</body>
</html> 
