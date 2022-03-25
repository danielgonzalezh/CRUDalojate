<?php
include('conexion.php');
// tomar la informacion enviada por el front-end
   $nroentrega = $_REQUEST['nroentrega'];   
    
// verificar que el idcliente no se repita
    $sql = "SELECT nroentrega,idalojamiento,fecha_entrega,valor FROM entrega WHERE nroentrega ='$nroentrega'";
    $res = mysqli_query($cnn,$sql);
    if(mysqli_num_rows($res)>0){
        // Si encuentra la entrega, la imprime
        $row = $res-> fetch_all(MYSQLI_ASSOC);
        echo json_encode($row);
    }else{
        echo "No se encontro entrega(nroentrega)...";
    }   


?>