<?php
include('conexion.php');
// tomar la informacion enviada por el front-end
   $query= "SELECT idinmueble,nrohabitacion,disponible,precio FROM habitacion ";
 
    $result = mysqli_query($cnn,$query);
    if(mysqli_num_rows($result)>0){
        // crear un array que almacene cada registro devuelto por el query
        $jsonhabitaciones = array();
        foreach($result as $reg){
            $jsonhabitaciones['habitacion'][] = $reg;
        }
        echo json_encode($jsonhabitaciones);
        

    }else{

        echo "No hay habitaciones para mostrar...";

    }   


?>