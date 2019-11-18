<?php
include_once 'conexion.php';
$sql = "INSERT INTO pais(nombre_pais) VALUES('$_POST[nombre]') ;";
$rs = pg_query($objconexao, $sql);
if($rs){

echo"<script>
    window.alert('Pais adicionado con suceso');
document.location='../admin.php?p=Adicionar';
</script>";//Redireciona ao form de cadastro
}
else
{
echo"<script>
    window.alert('No adicionó, vuelve a intentar');
document.location='../admin.php?p=Adicionar';
</script>";//Redireciona ao form de cadastro
}

?>