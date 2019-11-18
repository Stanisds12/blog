<?php
session_start();
include_once 'conexion.php';
 $usuario=$_POST['usuario'];
$sql = "INSERT INTO persona(bi,nombre,apellido,genero,estado_civil,fecha_nascimento,grau_academico,nombre_religion,nombre_pais,usuario,senha)"
." VALUES('$_POST[bi]','$_POST[nombre]','$_POST[apellido]','$_POST[sexo]','$_POST[estado_civil]','$_POST[nascimento]','$_POST[grau_academico]','$_POST[nombre_religion]','$_POST[nombre_pais]',"
."'$_POST[usuario]','$_POST[senha]') ;";
$rs = pg_query($objconexao, $sql);
if($rs){
$_SESSION['nomes'] = $_POST['nombre'];
 $_SESSION['acesso']="liberado";
  $_SESSION['id']=$_POST['bi'] ;
echo"<script>
  
document.location='../editar_datos.php';
  window.alert('Concluir de insertar tus datos...');
</script>";//Redireciona ao form de cadastro //
}
else
{
echo"<script>
    window.alert('No adicionó, vuelve a intentar');
document.location='../registro.php';
</script>";//Redireciona ao form de cadastro //
}
?>