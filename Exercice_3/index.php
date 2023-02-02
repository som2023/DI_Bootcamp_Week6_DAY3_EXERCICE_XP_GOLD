 
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
    <p> Temperature input in $celsius and converts</p>
    <label for="">Number </label><input type="text" name="value" placeholder="entrer de nombre svp"/>
    <input type="submit" value="OK" name="btnok">
  </div>
  <br>
  <br>
  </form>
  
<?php
if ( isset ($_POST['btnok'])) {
  $value=$_POST['value'];
 
   
  if($value=="")
  {
    echo 'Veillez renseigner tous les champs svp';
  }else
  {
 
    function tempConversionF($C) {
      $F = $C*9/5 +32;
      return $F;
  }
   tempConversionF($value);
   
  function tempConversionK($C) {
    $K = $C + 273.15;
    
    return $K;
}
    tempConversionK($value);
if( tempConversionK($value)>=0)
{
  echo $value."°C est egal à ".tempConversionF($value)."°F and "  . tempConversionK($value)." K";
}else
{
  echo 'invalid';
}
   
}
}
?>
 

</body>
</html> 
