<?php
include('conexion.php');
// tomar la informacion enviada por el front-end
   $query= "SELECT idinmueble,direccion,telefono,pais,ciudad,disponible FROM inmueble ";
 
    $result = mysqli_query($cnn,$query);
    if(mysqli_num_rows($result)>0){
        // crear un array que almacene cada registro devuelto por el query
        $jsoninmuebles = array();
        foreach($result as $reg){
            $jsoninmuebles['inmueble'][] = $reg;
        }
        echo json_encode($jsoninmuebles);
        

    }else{

        echo "No hay inmuebles para mostrar...";

    }   


?>