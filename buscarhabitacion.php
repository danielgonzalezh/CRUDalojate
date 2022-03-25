<?php
include('conexion.php');
// tomar la informacion enviada por el front-end
   $idinmueble = $_REQUEST['idinmueble'];   
    
// Verificar que el idinmueble exista en la tabla habitacion
    $sql = "SELECT idinmueble,nrohabitacion,disponible,precio FROM habitacion WHERE idinmueble ='$idinmueble'";
    $res = mysqli_query($cnn,$sql);
    if(mysqli_num_rows($res)>0){
        // Si encuentra idinmueble en la tabla habitacion, los imprime
        $row = $res-> fetch_all(MYSQLI_ASSOC);
        echo json_encode($row);
    }else{
        echo "No se encontro idinmueble en la tabla habitacion...";
    }   


?>