<?php
include_once 'conexion.php';
$sql = "INSERT INTO religion(nombre_religion) VALUES('$_POST[nombre]') ;";
$rs = pg_query($objconexao, $sql);
if($rs){

echo"<script>
    window.alert('Religion adicionado con suceso');
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