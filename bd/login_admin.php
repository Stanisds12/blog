<?php
session_start();
include_once 'conexion.php';
$usuario=$_POST["usuario"];
$senha=$_POST["senha"];

if($_POST['users']=="users"){

$sql = "SELECT * FROM persona WHERE usuario='$usuario' AND senha='$senha';";
$rs = pg_query($objconexao, $sql);

    if (pg_num_rows($rs)==true) {
        while ($obj = pg_fetch_array($rs)) {
          
        $_SESSION['nomes'] = $obj["nombre"] ;
        $_SESSION['acesso']="liberado";
        $_SESSION['id']=$obj["bi"] ;
        $_SESSION['madre']=$obj["madre"] ;
        $_SESSION['padre']=$obj["padre"] ;
        }
echo "<script>
    document.location='../persona.php'; //redireciona
  
   </script>";

    }else{
         echo "<script>
    alert('Contraseña o Usuário está inválido\nVuelva a intentar!');
      document.location='../login.php';
   </script>";
    }
}else{

$sql = "SELECT usuario FROM administrador WHERE usuario='$usuario' AND senha='$senha';";
$rs = pg_query($objconexao, $sql);

    if (pg_num_rows($rs)==true) {
        while ($obj = pg_fetch_array($rs)) {
       $_SESSION['nomes'] = $usuario;
        $_SESSION['acesso']="liberado";
        }
echo "<script>
    document.location='../admin.php'; //redireciona
   </script>";

    }else{
         echo "<script>
    alert('Contraseña o Usuário está inválido\nVuelva a intentar!');
      document.location='../login2.php';
   </script>";
    }
}


?>