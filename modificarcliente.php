<?php
  include('conexion.php');
  //Tomar la informacion enviada por el front-end
  $idcliente = $_REQUEST['idcliente']; 
  $nombre = $_REQUEST['nombre'];
  $telefono = $_REQUEST['telefono'];
  $pais = $_REQUEST['pais'];
  
  //verificar que el idcliente no se repita
  $result = mysqli_query($cnn,"SELECT idcliente FROM cliente WHERE idcliente = '$idcliente'");
  if (mysqli_num_rows($result)!=0){
      
      
      mysqli_query($cnn,"UPDATE cliente SET nombre ='$nombre',telefono='$telefono',pais='$pais' WHERE idcliente = '$idcliente'");
      echo "El cliente se ha actualizado correctamente...";
  }
  else{
      echo"No existe cliente con ese idcliente...";
  }
?>
