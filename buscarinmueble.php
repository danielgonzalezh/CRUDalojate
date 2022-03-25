<?php
include('conexion.php');
// tomar la informacion enviada por el front-end
   $idinmueble = $_REQUEST['idinmueble'];   
    
// Verificar que el idinmueble existe
    $sql = "SELECT idinmueble,direccion,telefono,pais,ciudad,disponible FROM inmueble WHERE idinmueble ='$idinmueble'";
    $res = mysqli_query($cnn,$sql);
    if(mysqli_num_rows($res)>0){
        // Si encuentra el inmueble lo imprime
        $row = $res-> fetch_all(MYSQLI_ASSOC);
        echo json_encode($row);
    }else{
        echo "no se encontro inmueble(idinmueble)...";
    }   


?>