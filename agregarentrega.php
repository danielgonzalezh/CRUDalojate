<?php
  include('conexion.php');
  //Tomar la informacion enviada por el front-end
  $idcliente = $_REQUEST['idcliente']; 
  $nombre = $_REQUEST['nombre'];
  $telefono = $_REQUEST['telefono'];
  $pais = $_REQUEST['pais'];
  
  //verificar que el idcliente no se repita
  $result = mysqli_query($cnn,"SELECT idcliente FROM cliente WHERE idcliente = '$idcliente'");
  if (mysqli_num_rows($result)==0){
      //sino lo encontro por el email
      mysqli_query($cnn,"INSERT INTO cliente VALUES('$idcliente','$nombre','$telefono','$pais')");
      echo "El cliente se ha guardado correctamente...";
  }
  else{
      echo"El usuario con este idcliente ya existe...";
  }
?>