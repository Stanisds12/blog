<?php
include_once 'conexion.php';
$usuario= $_POST["usuario"];
$senha=$_POST["senha"];
if($senha=="" && $usuario==""){
     $sql = "UPDATE persona SET estado_civil='$_POST[estado_civil]',grau_academico='$_POST[grau_academico]',nombre_religion='$_POST[nombre_religion]' where bi='$_POST[nombre]' ;";
        $rs = pg_query($objconexao, $sql);
        if($rs){
            echo "<script>
   window.alert('Dato fue alterado con suceso');
document.location='../persona.php';
 
</script>";
           
        }else{
             echo "no"; 
        }
    
}else{
     $sql = "UPDATE persona SET estado_civil='$_POST[estado_civil]',grau_academico='$_POST[grau_academico]',nombre_religion='$_POST[nombre_religion]',usuario='$_POST[usuario]',senha='$_POST[senha]' where bi='$_POST[nombre]' ;";
        $rs = pg_query($objconexao, $sql);
        if($rs){
            echo "<script>
   window.alert('Dato fue alterado con suceso');
document.location='../persona.php';
 
</script>";
           
        }else{
             echo "no"; 
        }
}
?>