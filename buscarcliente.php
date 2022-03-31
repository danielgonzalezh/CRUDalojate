<?php
include('conexion.php');
// tomar la informacion enviada por el front-end
   $idcliente = $_REQUEST['idcliente'];   
    
// verificar que el idcliente no se repita
    $sql = "SELECT idcliente,nombre,telefono,pais FROM cliente WHERE idcliente ='$idcliente'";
    $res = mysqli_query($cnn,$sql);
    if(mysqli_num_rows($res)>0){
        // Si encuentra el cliente lo imprime
        $row = $res-> fetch_all(MYSQLI_ASSOC);
        echo json_encode($row);
    }else{
        echo "no se encontro cliente con ese(idcliente)...";
    }   


?>