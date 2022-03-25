<?php
include('conexion.php');
// tomar la informacion enviada por el front-end
   $idalojamiento = $_REQUEST['idalojamiento'];   
    
// verificar que exista alojamiento
    $sql = "SELECT idalojamiento,nrohabitacion,idinmueble,idcliente FROM alojamiento WHERE alojamiento ='$idalojamiento'";
    $res = mysqli_query($cnn,$sql);
    if(mysqli_num_rows($res)>0){
        // Si encontro alojamiento(s) lo imprime
        $row = $res-> fetch_all(MYSQLI_ASSOC);
        echo json_encode($row);
    }else{
        echo "No se encontro alojamiento(idalojamiento)...";
    }   


?>