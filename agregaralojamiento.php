<?php
  include('conexion.php');
  //Tomar la informacion enviada por el front-end
   
  $nrohabitacion = $_REQUEST['nrohabitacion'];
  $nroinmueble = $_REQUEST['nroinmueble'];
  $idcliente = $_REQUEST['idcliente'];
  $fecha_inicial = $_REQUEST['fecha_inicial'];
  $fecha_final = $_REQUEST['fecha_final'];

 
  //verificar que el idcliente exista en cliente
  $result = mysqli_query($cnn,"SELECT idcliente FROM cliente WHERE idcliente = '$idcliente'");
  //verificar que el idinmueble exista en inmueble
  $result2 = mysqli_query($cnn,"SELECT idinmueble FROM inmueble WHERE idinmueble = '$idinmueble'");
  //verificar que este disponible la habitacion 
  if (mysqli_num_rows($result)!=0 && mysqli_num_rows($result2)!=0){
      //sino lo encontro por el email
      mysqli_query($cnn,"INSERT INTO cliente VALUES('$idcliente','$nombre','$telefono','$pais')");
      echo "El cliente se ha guardado correctamente...";
  }
  else{
      echo"El usuario con este idcliente ya existe...";
  }
?>