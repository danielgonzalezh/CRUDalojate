<?php
include('conexion.php');
// tomar la informacion enviada por el front-end
    $idcliente = $_REQUEST['idcliente'];   
// verificar si el cliente existe con alojamiento no se puede borrar
    $sql = "SELECT idcliente FROM alojamiento WHERE idcliente ='$idcliente'";
    $res = mysqli_query($cnn,$sql);
    if(mysqli_num_rows($res)==0){
        $query ="DELETE FROM cliente WHERE idcliente = '$idcliente'";
        mysqli_query($cnn,$query);
        echo "Cliente eliminado corectamente";
    }else{
        echo "No se puede borrar el cliente porque tiene alojamiento...";
    }   


?>