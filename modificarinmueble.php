<?php
  include('conexion.php');
  //Tomar la informacion enviada por el front-end
  $idinmueble = $_REQUEST['idinmueble']; 
  $direccion = $_REQUEST['direccion'];
  $telefono = $_REQUEST['telefono'];
  $pais = $_REQUEST['pais'];
  $ciudad = $_REQUEST['ciudad'];
  $disponible = $_REQUEST['disponible'];

  
  //verificar que el idinmueble
  $result = mysqli_query($cnn,"SELECT idinmueble FROM inmueble WHERE idinmueble = '$idinmueble'");
  if (mysqli_num_rows($result)==0){
      
      mysqli_query($cnn,"UPDATE inmueble SET nombre ='$nombre',telefono='$telefono',pais='$pais' WHERE idcliente = '$idcliente'");
      echo "El cliente se ha actualizado correctamente...";
  }
  else{
      echo"Ya existe el inmueble con ese idinmueble...";
  }
?>
