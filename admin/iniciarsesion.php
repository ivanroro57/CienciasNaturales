<?php
include './conexion.php';
session_start();
if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
    function validate($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }
    $usuario = validate($_POST['usuario']);
    $contrasena = validate($_POST['contrasena']);

    if(empty($usuario)){
        header("location: index.php?error=El Usuario es requerido");
        exit();
    }elseif(empty($contrasena)){
        header("location: index.php?error=La contraseña es requerida");
        exit();
    }
    else{
        // $contrasena = md5($contrasena);

        $sql="SELECT*FROM administrador WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
        $result=mysqli_query($conexion,$sql);

        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if($row['usuario']=== $usuario && $row['contrasena']===$contrasena){
                $_SESSION['usuario']=$row['usuario'];
                $_SESSION['id']=$row['id'];
                header("location: ./regusuario.php");
                exit();
            }
            else{
                header("location: ./index.php?error=El usuario o la contrasena son incorrectos!");
                exit();
            }
        }else{
            header("location: ./index.php?error=El usuario o la contrasena son incorrectos!");
            exit();
        }
    }
}else{
    header("location: ./index.php");
            exit();
}
?>