<?php
  include('conexion.php');
  //Tomar la informacion enviada por el front-end
  $idinmueble = $_REQUEST['idinmueble']; 
  $direccion = $_REQUEST['direccion'];
  $telefono = $_REQUEST['telefono'];
  $pais = $_REQUEST['pais'];
  $ciudad = $_REQUEST['ciudad'];
  $disponible = $_REQUEST['disponible'];
  
  //verificar que el idinmueble no se repita
  $result = mysqli_query($cnn,"SELECT idinmueble FROM inmueble WHERE idinmueble = '$idinmueble'");
  if (mysqli_num_rows($result)==0){
      //sino lo encontro por el email
      mysqli_query($cnn,"INSERT INTO inmueble VALUES('$idinmueble','$direccion','$telefono','$pais','$ciudad','$disponible')");
      echo "El idinmueble se ha guardado correctamente...";
  }
  else{
      echo"El inmueble con este idinmueble ya existe...";
  }
?>