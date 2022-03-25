<?php
include('conexion.php');
// tomar la informacion enviada por el front-end
   $query= "SELECT idcliente,nombre,telefono,pais FROM cliente ";
 
    $result = mysqli_query($cnn,$query);
    if(mysqli_num_rows($result)>0){
        // crear un array que almacene cada registro devuelto por el query
        $jsonclientes = array();
        foreach($result as $reg){
            $jsonclientes['cliente'][] = $reg;
        }
        echo json_encode($jsonclientes);
        

    }else{

        echo "No hay clientes para mostrar...";

    }   


?>