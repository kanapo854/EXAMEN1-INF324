<?php
//$usuario = $_GET['usuario'];
//$password = $_GET['passw'];
$conexion=mysqli_connect("localhost:3306","root","root","mibasekanapo");
if(isset($_GET['usuario'])){
    $consulta="SELECT * FROM acceso where usuario='".$_GET['usuario']."' and passw ='".$_GET['passw']."'";
    $resultado=mysqli_query($conexion,$consulta);
    $filas=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    if($filas==null){
        header("Location: index.php");
        die();
        mysqli_close($conexion);
    }else{
        session_start();
        $_SESSION["usuario"] =$_GET['usuario'];
        $_SESSION["rol"]=$filas['rol'];
        if($_SESSION["rol"]=="director" ){ 
            header("location: director.php");
        }else{
            header("location: estudiante.php");
        }
    }
    
    
    /*if($filas['rol']=="director"){ 
        header("location: director.php");
    }else{
        if($filas['rol']=="estudiante"){
            header("location: estudiante.php");
        }
        else{
            ?>
            <?php
                include("login.php")
            ?>
            <h1 class="error"> ERROR EN LA CONEXION</h1>
            <?php
        }
        mysqli_free_result($resultado);
        mysqli_close($conexion);
    }*/
}else{
    header("Location: index.php");
}


