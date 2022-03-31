<?php
  include('conexion.php');
  //Tomar la informacion enviada por el front-end
 
  $nrohabitacion = $_REQUEST['nrohabitacion'];
  $idinmueble = $_REQUEST['idinmueble'];
  $idcliente = $_REQUEST['idcliente'];
  $fecha_inicial = $_REQUEST['fecha_inicial'];
  $fi=strtotime($fecha_inicial);
  $fecha_final = $_REQUEST['fecha_final'];
  $ff=strtotime($fecha_final);
  $fechatotal=$ff-$fi;
  
  
  //verificar que el idcliente exista en cliente
  $result = mysqli_query($cnn,"SELECT idcliente FROM cliente WHERE idcliente = '$idcliente'");
  //verificar que el idinmueble exista en inmueble
  $result1 = mysqli_query($cnn,"SELECT idinmueble FROM inmueble WHERE idinmueble = '$idinmueble'");
  //verificar que este disponible la habitacion
  $result2 = mysqli_query($cnn,"SELECT idinmueble,nrohabitacion FROM habitacion WHERE nrohabitacion = '$nrohabitacion' AND idinmueble = '$idinmueble'");
  
  if (mysqli_num_rows($result)!= 0){
    
    if(mysqli_num_rows($result1)!= 0){
      
      if(mysqli_num_rows($result2)!= 0){

        if($fechatotal >= 0){
          mysqli_query($cnn,"INSERT INTO alojamiento (nrohabitacion,idinmueble,idcliente,fecha_inicial,fecha_final)VALUES('$nrohabitacion','$idinmueble','$idcliente','$fecha_inicial','$fecha_final')");
          
          echo "El alojamiento se ha guardado correctamente...";
            }else{
                 echo "La fecha final es menor que fecha inicial";
            }

        }else{
              echo "El nrohabitacion no existe";
        }
    }else{
          echo "El inmueble no existe o no esta disponible";
    }
  }
  else{
      echo"El cliente no existe";
  }
?>
