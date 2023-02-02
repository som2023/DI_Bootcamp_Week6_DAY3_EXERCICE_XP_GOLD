 
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_2</title>
</head>
<body>
<form action="" method="post">
  <div class="nombre">
    <p>The multiplication of two given List</p>
    <label for="">List of Numbers_1 </label><input type="text" name="values1" placeholder="entrer des nombres svp"/>
    <label for="">List of Numbers_2</label><input type="text" name="values2" placeholder="entrer des nombres svp"/>
    <input type="submit" value="OK" name="btnok">
  </div>
  <br>
  <br>
  </form>
  
<?php
if ( isset ($_POST['btnok'])) {
  $value1=$_POST['values1'];
  $value2=$_POST['values2'];
   
  if($value1==""|| $value2=="")
  {
    echo 'Veillez renseigner tous les champs svp';
  }else
  {
 
    function multiply_two_lists($multiple1,$multiple2) {
      $multiple = 0;
      for ($i = 0; $i < strlen($multiple1); $i++) {
        for ($j = 0; $j < strlen($multiple2); $j++) {
          if ($j == $i){
           $multiple  = $multiple1[$i] * $multiple2[$j];
          echo $multiple;
          }
        }
       
      }
  }
  multiply_two_lists(($value1),($value2));
   
}
}
?>
 

</body>
</html> 
