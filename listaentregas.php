<?php
include('conexion.php');
// tomar la informacion enviada por el front-end
   $query= "SELECT nroentrega,idalojamiento,fecha_entrega,valor FROM entrega ";
 
    $result = mysqli_query($cnn,$query);
    if(mysqli_num_rows($result)>0){
        // crear un array que almacene cada registro devuelto por el query
        $jsonentregas = array();
        foreach($result as $reg){
            $jsonentregas['entrega'][] = $reg;
        }
        echo json_encode($jsonentregas);
        

    }else{

        echo "No hay entregas para mostrar...";

    }   


?>