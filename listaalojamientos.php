<?php
include('conexion.php');
// tomar la informacion enviada por el front-end
   $query= "SELECT idalojamiento,nrohabitacion,idinmueble,idcliente FROM alojamiento ";
 
    $result = mysqli_query($cnn,$query);
    if(mysqli_num_rows($result)>0){
        // crear un array que almacene cada registro devuelto por el query
        $jsonalojamiento = array();
        foreach($result as $reg){
            $jsonalojamiento['alojamiento'][] = $reg;
        }
        echo json_encode($jsonalojamiento);
        

    }else{

        echo "No hay alojamientos para mostrar...";

    }   


?>