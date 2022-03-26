<?php
  include('conexion.php');
  //Tomar la informacion enviada por el front-end
  $idinmueble = $_REQUEST['idinmueble']; 
  $nrohabitacion = $_REQUEST['nrohabitacion'];
  $disponible = $_REQUEST['disponible'];
  $precio = $_REQUEST['precio'];
  
  //verificar que el idinmueble exista
  $result = mysqli_query($cnn,"SELECT idinmueble FROM inmueble WHERE idinmueble = '$idinmueble'");
  $result1 = mysqli_query($cnn,"SELECT idinmueble FROM habitacion WHERE idinmueble = '$idinmueble' AND nrohabitacion = '$nrohabitacion'");
  if (mysqli_num_rows($result)!=0 & mysqli_num_rows($result1)!=0 ){
      //sino
      mysqli_query($cnn,"INSERT INTO habitacion VALUES('$idinmueble','$nrohabitacion','$disponible','$precio')");
      echo "La habitacion se ha guardado correctamente...";
  }
  else{
      echo"No guarda la habitacion el inmueble(idinmueble) no existe o la habitacion esta repetida...";
  }
?>