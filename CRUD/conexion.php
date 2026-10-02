<?<php

/* creacion de una funcion llamada conectar*/ 
/* funcion -> Bloque de codigo que podemos mandar a llamar cuando*/ 

funnction conectar (){
/* informacion del servidor*/
$host="localhost";
$host="root";
$past=" ";

/* Base de datos */
$db="";

$con=mysqli_connect($host,$user,$pass);
mysqli_select_db($con, $db);

return $con;
}

?>