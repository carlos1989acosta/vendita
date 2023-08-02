<?php 

// chiedere per cosa serve a chico 
session_name("shop");
session_start();

/////////////



   // include_once "./main.php";       
         
           
           
    if ($_SERVER["REQUEST_METHOD"] == "POST") {          
        $email = $_POST["txtemail"];
        $password = $_POST["txtpass"];
        
            /*== Verificando campos obligatorios ==*/
    if($email=="" || $password==""){
      
        
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        
        exit();
    }
                           
    /*  

        // Consulta SQL de inserción        
 
        $conexion = conexion();   
        $sql = "INSERT INTO  cliente(Dni, Nombres, Direccion, Email, Password) VALUES ('$nit','$nombre','$direccion','$email','$password')";

        
        if($conexion->query($sql)==true){
                
                echo"<script>window.location.href='../index.php';</script>";
        
              //header("Location:../index.php");
         
                
        } else {
            echo "Error al insertar el registro: " .mysqli_query($conexion);
        }   
   */
     
    }







?>